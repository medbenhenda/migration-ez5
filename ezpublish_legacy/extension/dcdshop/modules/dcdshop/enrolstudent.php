<?php
/**
 * Enrol Students page
 *
 * @return void
 * @author Paul Leclercq
 * @since  2012-12-21
 *
 */

$http = eZHTTPTool::instance();
$moodle     = new Moodle;

/**
 * Check is user is registered in Moodle
 */
if( $http->hasVariable( 'checkemail' ) )
{
	$email 		= $http->variable( 'checkemail' );
	$result = $moodle->emailExists( $email );
	
	if($result == false){
		echo json_encode(array(
				"result"    => 'false',
				"error" 	=> ezpI18n::tr('dcdshop/enrolstudent', 'This email is not registered, please register user')
		));
	}
	else{
		echo json_encode(array(
				"result"    => 'true'
		));		
	}
	eZExecution::cleanExit();
}

/**
 * Check is form is valid and contains an email
*/
if(! $http->hasPostVariable( 'enrolmail' ) )
{
	echo json_encode(array(
			"result"    =>  'false',
			"message"	=> 	ezpI18n::tr('dcdshop/enrolstudent', 'Please forward a valid email Email')
	));
	
	$email 		= $http->variable( 'email' );
	$result = $moodle->emailExists( $email );
	echo json_encode(array(
			"result"    =>   $result
	));
	eZExecution::cleanExit();	
}

/**
 * Forms needs to have a valid Order ID
*/
if(! $http->hasPostVariable( 'order_id' ) )
{
	echo json_encode(array(
			"result"    =>  'false',
			"message"	=> 	ezpI18n::tr('dcdshop/enrolstudent', '[Processing error]. No order ID. Please contact your local representative for assistance. ')
	));
	eZExecution::cleanExit();
}

$order_id = $http->variable( 'order_id' );


$email = $http->postVariable( 'enrolmail' );
$user_exists = $moodle->emailExists( $email );

if($user_exists != true) 
{
	echo json_encode(array(
			"result"    =>  'false',
			"message"	=> 	ezpI18n::tr('dcdshop/enrolstudent', 'User does does not exist, please use \'Register New User\' button below then try again.')
	));
	eZExecution::cleanExit();
}

$userID    = $moodle->getMoodleUser($email);

if(! $http->hasPostVariable( 'product_id' ) )
{
	echo json_encode(array(
			"result"    =>    'false',
			"message"	=> 	   ezpI18n::tr('dcdshop/enrolstudent', 'Invalid Item ID')
	));
	eZExecution::cleanExit();
}

$product_id = $http->postVariable( 'product_id' );
$product = eZContentObject::fetch( $product_id );

$main_node_id = $product->attribute('main_node_id');

if(!$product  instanceof eZContentObject)
{
	echo json_encode(array(
			"result"    =>    'false',
			"message"	=> 	  ezpI18n::tr('dcdshop/enrolstudent', 'Invalid Object')
	));
	eZExecution::cleanExit();
}

$datamap = $product->dataMap();

// Online course
$courseID = $datamap['course_id']->content();



/**
 * Temp fix 
 * 
 * If course is not valid in eZPublish then update object with valid course ID
 * 
 * Due to course_id not being imported correctly during initial 'one shot' import 
 * The course id is not always correct. The course ID is therefore fetched via a query and updated in the course object if not initially present
 * 
 */
if($courseID == ''){
	
//	var_dump("SELECT id FROM mdl_course WHERE shortname = '" . $datamap['course_code']->content() . "'",  $datamap['course_code'] );
	
	//die();
	
	$moodle_ini = eZINI::instance( 'dcpro.ini' );
	$server = $moodle_ini->variable( 'moodle', 'Server' );
	$user = $moodle_ini->variable( 'moodle', 'User' );
	$password = $moodle_ini->variable( 'moodle', 'Password' );
	$db_name = $moodle_ini->variable( 'moodle', 'Database' );
	
	$dsn = array(
			'server' 	=> $server,
			'user' 		=> $user,
			'password'	=> $password,
			'database'	=>	$db_name,
			'show_errors' => true
	);
	
	$extdb = eZDB::instance( 'ezmysqli', $dsn, true  );
	
	$course_info = $extdb->arrayQuery( "SELECT id FROM mdl_course WHERE shortname LIKE '" . $datamap['course_code']->content() . "'" );
	
	$courseID =  $course_info[0]['id'];
	
	$datamap['course_id']->fromString( $courseID );
	$datamap['course_id']->store();
	
	
}

$isEnroled = $moodle->isEnroled( $userID, $courseID );
//$enrolID = $moodle->getEnrolID( $courseID );

/**
 * Forms needs to have a valid Order ID
 */
if( $moodle->isEnroled( $userID, $courseID ) )
{
	$message = $email . ' ' . ezpI18n::tr('dcdshop/enrolstudent', 'already enrolled in this course. Please choose or register another student.');
	
	echo json_encode(array(
			"result"    =>   'false',
			"message"	=> $message 	 
	));
	eZExecution::cleanExit();
}

$eventID = false;

if($product->ClassIdentifier == 'event' ){
	$courseType = 'classroom' ;
	$eventID = $datamap['id']->content();;	
}
else{
	$courseType = 'online' ;
}

$voucherCode = false;

// Enrol user in Moodle
$enrolment_successful = $moodle->enrolUser( //enrol user
							$userID,
							$courseID,
							$voucherCode,
							$courseType,
							$eventID
					);

if(!$enrolment_successful){
	echo json_encode(array(
			"result"    =>   'false',
			"message"	=> 	 ezpI18n::tr('dcdshop/enrolstudent', 'Error during enrolment, please try again or contact local representative for assistance')
	));
	eZExecution::cleanExit();
}
// Else enrolment succesfull

	$order = eZOrder::fetch( $order_id );
	$account = $order->accountInformation();
	
	$mailSent = $moodle->sendConfirmationEmail( $main_node_id, $userID, $courseType, $account['company_id']);

// Link user to ezpublish
$db = eZDB::instance( );

$ezuser_id = eZUser::currentUserID();
$course_info = $db->query( "INSERT INTO `dcd_enrolments` ( account_user_id, ez_user_id, product_id, order_id, modified, published, status)
                        VALUES(" . $userID . ", " . $ezuser_id . ", " . $product_id . ", " . $order_id . ", UNIX_TIMESTAMP(), UNIX_TIMESTAMP(), 'enrolled')" );

$user_exists     	= $moodle->emailExists( $email );

$moodleuid = $moodle->getMoodleUser( $email );
$user_info = $moodle->getUserInfo( $moodleuid );

// TODO Send enrolment email
if($enrolment_successful){
	
	$message = $email . ' ' . ezpI18n::tr('dcdshop/enrolstudent', 'successfully enrolled in course');
	
	echo json_encode(array(
			"result"    =>   'true',
			"message"	=> 	 $message,
			"user"    =>   $user_info
	));
	eZExecution::cleanExit();
}


/**
 * 
 * CHECK FOR COHORT AND VOUCHERS
 * 
 * 

//Check if user is/has already enrolled in the course
$isUserEnroled = $moodle->isEnroled( $userID, $moodleID );

//get voucher ID, Course Type, and Course Id
$voucher = $this->getVoucherInfo( $voucherCode, array( 'id','courseType','courseid' ) );
//Get Group Name
$grpName = $this->getGroup( $voucherCode );

if( !$isUserEnroled )
{
	$moodle->enrolUser( //enrol user
			$userID,
			$moodleID,
			$voucherCode,
			$voucher['courseType'],
			$eventID
	);

	$moodle->createCohort( $grpName );  //create cohort
	$moodle->addUsertoCohort( $grpName, $userID );  //add user to cohort



echo json_encode( $response );

*/

$Result['pagelayout'] = false;
eZDebug::updateSettings(
	array(
		'debug-enabled' => false
	)
);

eZExecution::cleanExit();


?>
