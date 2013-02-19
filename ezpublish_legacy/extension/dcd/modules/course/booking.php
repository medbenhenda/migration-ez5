<?php

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
//header('Content-type: application/json');
/**
 * @author Daniel Noel-Davies
 * An Ajax interface for any Booking interations
 */

$filename = time() . "_" . $_SESSION['mdl_userid'] . ".html";
$tmpFilePath = eZSys::storageDirectory() . '/docs/invoices' ;
$tmpFilename = $tmpFilePath . '/' . $filename;

$courseID = $_GET['cid'];
$eventID = $_GET['eid']; 

$dcdini = eZINI::instance( 'dcpro.ini' );

/**
 * If the data we're getting doesn't match what we want, then refuse it.
 * This is to protect our SQL Query, we don't want any idiotic bots
 * that don't support cookies and that aren't already logged in using ajax
 */

if(
    /*    empty( $_SERVER['HTTP_X_REQUESTED_WITH'] ) # Check for Ajax
    ||  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'
    ||*/  !isset( $_GET['cid'] )
    ||  !ctype_digit( $_GET['cid'] )
    ||  !isset( $_GET['eid'] )
    ||  !ctype_digit( $_GET['eid'] )
    ||  !isset( $_SESSION['mdl_userid'] )
    ||  !is_numeric( $_SESSION['mdl_userid'] )
)
{
	/*
	 * TODO Session expired....
	 * 
	 * Add condition when session expires
	 */
    echo json_encode( array( 'success' => false ) );
    eZExecution::cleanExit();
}
else
{
	$course = eZContentObjectTreeNode::fetch( $courseID );
	$courseFees = array( 'courseid' => $courseID  );
    $courseDatamap = $course->dataMap(); 
    $course_type = $courseDatamap['type']->content();
    
    // classroom == 0 --- online == 1
    if($course_type[0] == 0  )
    {
    	$event = eZContentObjectTreeNode::fetch( $eventID );
    	$courseFees['eventid'] = $eventID;
    	
    	$eventDatamap = $event->dataMap();
    	
        if( is_null( $event ) )
        {
            echo json_encode( array( 'success' => false ) );
        	eZExecution::cleanExit();
        }
    }
}

$emailResults   = array();

$moodle         = new Moodle;
$financial      = new Financial;
$discount       = new Discounts;

// TODO UPdate company ID Temp set as default company 1..
$company_id     = 1; //is_object($event ) ? $event->getCompanyID(): $course->getDefaultCompany();
// $company_id     =  $company_id == null ? 0 : $company_id ;

$params = array('ClassFilterType' => 'include',
				'ClassFilterArray' => array('company'),
				'AttributeFilter' => array(array( '461', '=', $company_id )),
				'IgnoreVisibility' => true,
				);



$company = eZContentObjectTreeNode::subTreeByNodeID( $params , $dcdini->variable( 'dcdNodes', 'CompanyHome' ) );

$company = $company[0];
$companyDatamap = $company->dataMap();  
$central_email = $companyDatamap['central_email']->content();

// Should be replaced with a block in the template
$discountHTML   = null;
$info           = $moodle->getUserInfo( $_SESSION['mdl_userid'] );

$fee = $courseDatamap['usd']->content();

$courseFee 	= $fee->attribute('price');
$taxRate 	= dcdTools::get_tax_rate( json_decode( $companyDatamap['tax_rules']->content() ));
$taxCharge  = $courseFee * dcdTools::get_tax_rate( json_decode( $companyDatamap['tax_rules']->content() ) );
$feeCode = 'USD';
$feeSymbol = '$';


/**     Begin Discount      **/
// Check if a discount is even there..
if( !empty( $_GET['discountcode'] ) )
{
    $discountInfo = $discount->getDiscountInfo( $_GET['discountcode'] );

    // Check that the course is valid for the discount
    if( $discountInfo['courseid'] !== $courseID && $discountInfo['courseid'] != 0 )
    {
    	$discount_valid = ezpI18n::tr('dcdpro/booking', 'Discount Code Not Valid');
    	$discount_notvalid = ezpI18n::tr('dcdpro/booking', 'Oops - Your discount code doesn\'t seem to be valid for this course');

        $result = array(
            'result'        =>  false,
            'errorTitle'    =>  $discount_valid,
            'errorMessage'  =>  $discount_notvalid
        );

        echo json_encode( $result );
        eZExecution::cleanExit();
    }

    // Find the new total
    $discountPercentage = ( $discountInfo['percentage'] / 100 );
    $discountAmount     = $courseFee * $discountPercentage;
    $courseFee          = $courseFee - $discountAmount;
    $taxCharge          = $courseFee * $company->getTaxRate();

    $discount = ezpI18n::tr('dcdpro/booking', 'Discount');
    $discount_total = ezpI18n::tr('dcdpro/booking', 'Discounted Total');
    
    $discountHTML = sprintf('
        <tr>
            <td class="noBorder"></td>
            <td class="noBorder"></td>
            <td colspan="2" class="item_total_total" align="right"><b>'. $discount .' (%s%%)</b></td>
            <td class="item_total_total" align="right">- %s %s %s</td>
        </tr>

        <tr>
            <td class="noBorder"></td>
            <td class="noBorder"></td>
            <td colspan="2" class="item_total_total" align="right"><b>'. $discount_total .'</b></td>
            <td class="item_total_total" align="right">%2$s %s %4$s</td>
        </tr>',
        $discountInfo['percentage'],
        $feeSymbol,
        $discountAmount,
        $feeCode,
        $courseFee
    );
}

/**     End   Discount      **/
$eventCity = isset( $eventDatamap ) ? $eventDatamap['city']->content() : '';

// save invoice
$user = eZUser::fetchByName( 'admin' );
 
//setting general node details
$params = array();
$params['class_identifier'] = 'invoice'; //class name (found within setup=>classes in the admin if you need it
$params['creator_id'] = $user->attribute( 'contentobject_id' ); //using the user created above
$params['parent_node_id'] = $dcdini->variable( 'dcdNodes', 'InvoiceHome' ); //pulling the node id out of the parent
 
//setting attribute values
$attributesData = array ( ) ;
$attributesData['id'] = '10001220' ; //TODO auto-increment
$attributesData['status'] =  1 ;
$attributesData['time_requested'] = 	time();
$attributesData['filename'] = $tmpFilename;
$attributesData['paid_date'] = 	time();
$attributesData['date_modified'] = 	time();

$params['attributes'] = $attributesData;

//publishing the content:
$contentObject = eZContentFunctions::createAndPublishObject( $params );

$dataMap = $contentObject->attribute( 'data_map' );
$invoice_id = $dataMap['id'];
$invoice_id->setAttribute( 'data_text', '1000' . $contentObject->attribute( 'id' ) );
$invoice_id->sync();

$invoice_id = $contentObject->attribute( 'id' );

$invoiceNumber  = 'DCP' . $invoice_id;

// Redeem Discount Code
$result         = $discount->redeem(
    $_GET['discountcode'],
    $courseID,
    $_SESSION['mdl_userid'],
    $invoiceNumber
);

// Setup Order
$order_params = array(
    'invoice_id'    => $invoice_id,
    'event_id'      => ( !empty( $event ) ? $eventID : null ),
    'course_id'     => ( !empty( $course ) ? $courseID : null ),
    'time_created'  => time(),
    'user_id'       => $_SESSION['mdl_userid'],
    'status'        => '1',
    'cost_net'      => $courseFee,
    'cost_tax'      => $taxCharge,
    'cost_total'    => $courseFee + $taxCharge
);

$order = dcdTools::store_order( $order_params );

$clientAddress  = array_filter( array(
    $info['Co'],
    $info['Address1'],
    $info['Address2'],
    $info['Address3'],
    $info['city'],
    $info['Zip'],
    $info['country']
));

$clientName     = $info['firstname'] . ' ' . $info['lastname'];

$discount_telephone = ezpI18n::tr('dcdpro/booking', 'No Telephone Number Supplied');

$clientTel      = ( array_key_exists( 'mobile', $info ) ? $info['mobile'] : $discount_telephone );

$bank_obj = $companyDatamap['bank']->content();

$bank = eZContentObjectTreeNode::fetch($bank_obj['relation_list'][0]['node_id']);
$bankDatamap = $bank->dataMap();

$bank_accounts = $bankDatamap['accounts']->content();

$account = eZContentObjectTreeNode::fetch( $bank_accounts['relation_list'][0]['node_id']);
$accountDatamap = $account->dataMap();

$replacements = array(
// Company Information
    'COMPANY_NAME'              => $companyDatamap['name']->content(),
    'COMPANY_ADDRESS'           => $companyDatamap['address']->content(),
    'COMPANY_PHONE'             => $companyDatamap['regional_manager_phone']->content(),
    'COMPANY_EMAIL'             => $companyDatamap['regional_manager_email']->content(),
    'COMPANY_NUMBER'            => $companyDatamap['registration_number']->content(),
    'COMPANY_VAT_NUMBER'        => $companyDatamap['tax_number']->content(),

// Company Bank Info
    'COMPANY_BANK_NAME'         => $bankDatamap['name']->content(),
    'COMPANY_ACCOUNT_NUMBER'    => $accountDatamap['account_number']->content(),
    'COMPANY_SORT_CODE'         => $accountDatamap['sort_code']->content(),
    'COMPANY_SWIFT_CODE'        => ( $accountDatamap['swift']->hasContent()   ? $accountDatamap['swift']->content() : 'N/A' ),
    'COMPANY_IBAN'              => ( $accountDatamap['iban']->hasContent() ? $accountDatamap['iban']->content() : 'N/A' ),

// Client Information
    'CLIENT_ADDRESS'            => join( '<br />', $clientAddress ),
    'CLIENT_NAME'               => $clientName,
    'CLIENT_TELEPHONE'          => $clientTel,
    'CLIENT_EMAIL'              => $info['email'],

// Course Information
    'COURSE_CODE'               => $courseDatamap['course_code']->content(),
    'COURSE_NAME'               => $courseDatamap['title']->content(), 
    'COURSE_FEE'                => $courseFee,

// Financial Info
    'CURRENCY_CODE'             => 'USD',
    'COST_TAX'                  => $taxCharge,
    'TAX_RATE'                  => $taxRate,
    'CURRENCY_SYMBOL'           => '$', /* $course->getFees( array( 'field' => 'symbol' ) ), */
    'COST_NET'                  => $courseFee,
    'TOTAL_FEE'                 => $courseFee + $taxCharge,
    'INVOICE_NUMBER'            => $invoiceNumber,

// Discount Codes
    'DISCOUNT_HTML'             => $discountHTML,

// Misc Invoice Info
    'DATE'                      => date( 'd-m-Y' )
);

if( isset( $event ) )
{
    $replacements = array_merge( $replacements, array(
        'COURSE_CITY'   => $eventCity,
        'COURSE_DATE'   => date( 'j F Y', $eventDatamap['from_time']->content()->timeStamp() ),
    ));
}

if( !empty( $_GET['vatcode'] )
 && $financial->validateTaxNumber( $_GET['vatcode'] ) )
{
	$vat_number =  ezpI18n::tr('dcdpro/booking', 'VAT Number');
    $replacements = array_merge( $replacements, array( 'VAT_CODE'      => '<br /><br /><b>' . $vat_number .'</b> ' . $_GET['vatcode']));
}

$mailtpl = eZTemplate::factory();
foreach( $replacements as $key => $replacement )
{
	$mailtpl->setVariable( $key, $replacement );
}
$mailtext = $mailtpl->fetch( 'design:email/course_pro_forma.tpl' );

if ( !eZFile::create( $filename, $tmpFilePath,  $mailtext ) )
{
	throw new Exception( 'Could not create file: ' . $tmpFilename );
}

	$mail = new eZMail();
	$email =  $info['email'];
	
	// TODO Remove following line before launch...
	$email = "paul.leclercq@datacenterdynamics.com" ;
	
	$dcprofessional =  ezpI18n::tr('dcdpro/booking', 'DCProfessional');
	$development = ezpI18n::tr('dcdpro/booking', 'Development');
	
	$mail->setContentType( 'text/html' );
	$mail->setReceiver( $email, $clientName );
	$mail->setSender('noreply@dc-professional.com', $dcprofessional );
	$mail->setSubject( ezpI18n::tr('dcdpro/booking', 'DC-Professional Development - Your Pro Forma Invoice' ) );
	
	$mail->setBody( $mailtext );
	$emailResults['user'] = $mail->setContentType( 'text/html' );
	
	// Send Email to Client
	$mailResult = eZMailTransport::send( $mail );

	if(eZSys::hostname() == 'dc-professional.com'){
		// Reset the email for booking@..... and Regional Manager
		$mail->setReceiver(
				$central_email,
				ezpI18n::tr('dcdpro/booking', 'Central Email')
		);
	
		$mail->addBcc(
				$companyDatamap['regional_manager_email']->content(),
				$companyDatamap['regional_manager_name']->content()
		);
		
		$mail->addBcc(
				'paul.leclercq@datacenterdynamics.com', 'Paul Leclercq'
				
		);
		
		$mail->Subject          =  ezpI18n::tr('dcdpro/booking', 'Pro Forma Invoice')  . ' :: ' . $invoiceNumber;
		// TODO re-activate emails to production
		// $mailResult = eZMailTransport::send( $mail );
	}
    
	
if( $mailResult )
{
    $result = array(
        'result'        =>  true,
        'errorTitle'    =>  ezpI18n::tr('dcdpro/booking', 'Pro-Forma Successfully Sent!'),
        'errorMessage'  =>  ezpI18n::tr('dcdpro/booking', 'You will soon receive an email regarding your enrolement into this course, your email will contain a pro-forma which must be confirmed and paid in full before commencing upon the course.')
    );
}
else
{
    $result = array(
        'result'        =>  false,
        'errorTitle'    =>  ezpI18n::tr('dcdpro/booking', 'Pro-Forma while sending the pro-forma!'),
        'errorMessage'  =>  
            ezpI18n::tr('dcdpro/booking', 'Oops - There seems to be a technical issue regarding your pro-forma. Please contact') . " " .
            $companyDatamap['regional_manager_name']->content() ." " .
            ezpI18n::tr('dcdpro/booking', 'at') ." " .
            $companyDatamap['regional_manager_email']->content() ." " .
            ezpI18n::tr('dcdpro/booking', 'to solve this issue.') 
    );
}

echo json_encode( $result );

$Result['pagelayout'] = false;
eZDebug::updateSettings(
	array(
		'debug-enabled' => false
	)
);

eZExecution::cleanExit();