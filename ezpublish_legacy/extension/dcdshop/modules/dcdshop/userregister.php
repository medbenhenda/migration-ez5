<?php
/**
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.8
 * @package kernel
 */

$http = eZHTTPTool::instance();
$module = $Params['Module'];

$tpl = eZTemplate::factory();

if ( $module->isCurrentAction( 'Cancel' ) )
{
    $module->redirectTo( '/dcdshop/basket/' );
    return;
}

$user = eZUser::currentUser();

$errors = array();

$firstName = '';
$lastName = '';
$email = '';
$vatnumber = '';
if ( $user->isLoggedIn() )
{
    $userObject = $user->attribute( 'contentobject' );
    $userMap = $userObject->dataMap();
    $firstName = $userMap['first_name']->content();
    $lastName = $userMap['last_name']->content();
    $email = $user->attribute( 'email' );
}

// Initialize variables
$jobtitle  = $company = $street1 = $street2 = $zip = $place = $state = $country = $comment = '';


// Check if user has an earlier order, copy order info from that one
$orderList = eZOrder::activeByUserID( $user->attribute( 'contentobject_id' ) );
if ( count( $orderList ) > 0 and  $user->isLoggedIn() )
{
    $accountInfo = $orderList[0]->accountInformation();
    $company = $accountInfo['company'];
    $jobtitle = $accountInfo['jobtitle'];
    $street1 = $accountInfo['street1'];
    $street2 = $accountInfo['street2'];
    $zip = $accountInfo['zip'];
    $place = $accountInfo['place'];
    $state = $accountInfo['state'];
    $country = $accountInfo['country'];
    $vatnumber = $accountInfo['vatnumber'];
}

$tpl->setVariable( "input_error", false );
if ( $module->isCurrentAction( 'Store' ) )
{
    $inputIsValid = true;
    $firstName = $http->postVariable( "FirstName" );
    if ( trim( $firstName ) == "" ){
    	$inputIsValid = false;
    	$errors[] = "FirstName";
    }
    $lastName = $http->postVariable( "LastName" );
    if ( trim( $lastName ) == "" ){
    	$errors[] = "LastName";
        $inputIsValid = false;
    }
    $email = $http->postVariable( "EMail" );
    if ( ! eZMail::validate( $email ) )
	{
		$errors[] = "EMail";
        $inputIsValid = false;
	}
    /**
     *  DCD Specific
     *  if User exists  -- login user
     */
    $new_user = eZUser::fetchByEmail( $email );
    
    $customerPassword = $http->postVariable( "customer_password" );
    $confirmPassword =$http->postVariable( "confirm_password" );
        
    if($new_user instanceof eZUser){
    	
    	$userClass = eZUserLoginHandler::instance( 'standard' );
    	if ( !is_object( $userClass ) )
    	{
    		continue;
    	}
    	
    	if($customerPassword != ''){
	    	$current_user = $userClass->loginUser( $email, $customerPassword  );
	    	if ( $current_user instanceof eZUser )
	    	{
	    		$hasAccessToSite = $user->canLoginToSiteAccess( $GLOBALS['eZCurrentAccess'] );
	    		if ( !$hasAccessToSite )
	    		{
	    			$current_user->logoutCurrent();
	    			$current_user = null;
	    			$siteAccessName = $GLOBALS['eZCurrentAccess']['name'];
	    			$siteAccessAllowed = false;
	    		}
	    		else{
	    			$user = $current_user;
	    		}
	    	}
	    	else{
	    		$errors[] = 'email';
	    		$errors[] = 'customer_password';
	    		$inputIsValid = false;
	    	}
    	}
//     	else{
//     		$errors[] = "Password";
//     		$inputIsValid = false;
//     	}
    	
    }
    elseif($customerPassword != $confirmPassword){
		$errors[] = 'customer_password';
		$errors[] = 'confirm_password';
    	$inputIsValid = false;
    }
    $jobtitle = $http->postVariable( "jobtitle" );
    if ( trim( $jobtitle ) == "" ){
    	$inputIsValid = false;
    	$errors[] = 'jobtitle';
    }
    $company = $http->postVariable( "company" );
    if ( trim( $company ) == "" ){
    	$inputIsValid = false;
    	$errors[] = 'company';
    }
    $street1 = $http->postVariable( "Street1" );
    if ( trim( $street1 ) == "" ){
    	$inputIsValid = false;
    	$errors[] = 'Street1';
    }    
    $vatnumber = $http->postVariable( "vatnumber" );
    eZPreferences::setValue( 'valid_vat_country', '' );
    if ( trim( $vatnumber ) != "" )
    {
    	$vatRules = new Financial();
    	$valid_vat_number = $vatRules->validateTaxNumber( $vatnumber );
    	if(!$valid_vat_number){
    		$inputIsValid = false;
    		$errors[] = 'vatnumber';
    	}
    }
    /**
	 * end of DCD specific fields
     */
    $zip = $http->postVariable( "Zip" );
    if ( trim( $zip ) == "" ){
        $inputIsValid = false;
        $errors[] = 'Zip';
    }
    $place = $http->postVariable( "Place" );
    if ( trim( $place ) == "" ){
    	$errors[] = 'Place';
        $inputIsValid = false;
    }
    $state = $http->postVariable( "State" );
    $country = $http->postVariable( "Country" );
    if ( trim( $country ) == "" ){
        $inputIsValid = false;
        $errors[] = 'Country';
    }
    
    $comment = $http->postVariable( "Comment" );

    if ( $inputIsValid == true )
    {
    	/**
    	 * Registration Rules
    	 *
    	 * if does not already exists
    	 *
    	 * TODO
    	 * Register in ezpublish
    	 * Register in moodle
    	 * Send Order confirmation email
    	 * Login user
    	 *
    	 */

    	/**
    	 * Register in ezpublish
    	 */
    	
    	if(!$new_user instanceof eZUser){
    		
    		$ini = eZINI::instance();
    		$userClassID = $ini->variable( "UserSettings", "UserClassID" );
    		$userCreatorID = $ini->variable( "UserSettings", "UserCreatorID" );
    		$defaultSectionID = $ini->variable( "UserSettings", "DefaultSectionID" );
    		
    		$class = eZContentClass::fetch( $userClassID );
    		$contentObject = $class->instantiate( $userCreatorID, $defaultSectionID );
    		
    		$contentObject->store();
    		
    		$userID = $contentObjectID = $contentObject->attribute( 'id' );
    		
    		$version = $contentObject->version( 1 );
    	//	$version->setAttribute( 'modified', time() );
    		$version->setAttribute( 'status', eZContentObjectVersion::STATUS_DRAFT );
    		$version->store();
    		
    		$existUser = eZUser::create( $userID );
    		$existUser->setAttribute( 'login', $email );

    		$contentObjectAttributes = $version->contentObjectAttributes();
    		
    		// find and set 'name' and 'description' attributes (as standard user group class)
    		

		    $existUser->setAttribute('login', $email);
		    $existUser->setAttribute('email', $email );
		    $existUser->setAttribute('password_hash', md5($customerPassword) );
		    $existUser->setAttribute('password_hash_type', eZUser::PASSWORD_HASH_MD5_PASSWORD );

		    $tpl->setVariable( 'account_activated', true );
		    $existUser->store();
		    
		    $dataMap = $contentObject->dataMap();
		    $dataMap['first_name']->setAttribute( 'data_text' , $firstName );
		    $dataMap['first_name']->store();
		    
		    $dataMap['last_name']->setAttribute('data_text', $lastName );
		    $dataMap['last_name']->store();
		    
	    	$newNodeAssignment = eZNodeAssignment::create( array( 'contentobject_id' => $contentObjectID,
		    			'contentobject_version' => 1,
		    			'parent_node' => 12,
		    			'is_main' => 1 ) );
	    	$newNodeAssignment->store();
		    
		    $operationResult = eZOperationHandler::execute( 'content', 'publish', array( 'object_id' => $contentObjectID,
		    								'version' => 1 ) );
		    
    		$existUser->loginCurrent();

    		/**
    		 * Register in Moodle
    		 */
    		$moodle     = new Moodle;
    		$result = $moodle->emailExists( $email );
    		
    		if( $result == false ){
	    		$response   = $moodle->createUser(
	    				$email,
	    				$customerPassword,
	    				$firstName,
	    				$lastName,
	    				$email,
	    				$place,
	    				$country,
	    				$jobtitle,
	    				$company,
	    				$street1,
	    				$street2,
	    				(isset( $_POST['regaddress3'] ) ? $_POST['regaddress3'] : null),
	    				(isset( $_POST['regProvince'] ) ? $_POST['regProvince'] : null),
	    				(isset( $state  )  ? $state    : null),
	    				$zip,
	    				(isset( $_POST['regCellCountry'] ) ? $_POST['regCellCountry'] : '') . $_POST['regCell'],
	    				(isset( $_POST['regTelCountry'] ) ? $_POST['regTelCountry'] : '')   . $_POST['regTel']
	    		);
    		}
    		
    		
    	}
    	// End of User Registration
    	
    	
    	
        // Check for validation
        $basket = eZBasket::currentBasket();

        $db = eZDB::instance();
        $db->begin();
        $order = $basket->createOrder();

        $doc = new DOMDocument( '1.0', 'utf-8' );

        $root = $doc->createElement( "shop_account" );
        $doc->appendChild( $root );

        $firstNameNode = $doc->createElement( "first-name", $firstName );
        $root->appendChild( $firstNameNode );

        $lastNameNode = $doc->createElement( "last-name", $lastName );
        $root->appendChild( $lastNameNode );

        $emailNode = $doc->createElement( "email", $email );
        $root->appendChild( $emailNode );
        
        $companyNode = $doc->createElement( "company", $company );
        $root->appendChild( $companyNode );
        
        $jobtitleNode = $doc->createElement( "jobtitle", $jobtitle );
        $root->appendChild( $jobtitleNode );
        
        $street1Node = $doc->createElement( "street1", $street1 );
        $root->appendChild( $street1Node );

        $zipNode = $doc->createElement( "zip", $zip );
        $root->appendChild( $zipNode );

        $placeNode = $doc->createElement( "place", $place );
        $root->appendChild( $placeNode );

        $stateNode = $doc->createElement( "state", $state );
        $root->appendChild( $stateNode );

        $countryNode = $doc->createElement( "country", $country );
        $root->appendChild( $countryNode );

        $vatnumberNode = $doc->createElement( "vatnumber", $vatnumber );
        $root->appendChild( $vatnumberNode );
        
        $commentNode = $doc->createElement( "comment", $comment );
        $root->appendChild( $commentNode );

        $xmlString = $doc->saveXML();

        $order->setAttribute( 'data_text_1', $xmlString );
        $order->setAttribute( 'account_identifier', "ez" );

        $order->setAttribute( 'ignore_vat', 0 );

        $order->store();
        $db->commit();
        eZShopFunctions::setPreferredUserCountry( $country );
        $http->setSessionVariable( 'MyTemporaryOrderID', $order->attribute( 'id' ) );

        $module->redirectTo( '/dcdshop/confirmorder/' );
        return;
    }
    else
    {
        $tpl->setVariable( "input_error", true );
        $tpl->setVariable( "errors", $errors );
    }
}

$tpl->setVariable( "first_name", $firstName );
$tpl->setVariable( "last_name", $lastName );
$tpl->setVariable( "email", $email );
$tpl->setVariable( "jobtitle", $jobtitle );
$tpl->setVariable( "company", $company );
$tpl->setVariable( "street1", $street1 );
$tpl->setVariable( "zip", $zip );
$tpl->setVariable( "place", $place );
$tpl->setVariable( "state", $state );
$tpl->setVariable( "country", $country );
$tpl->setVariable( "vatnumber", $vatnumber );
$tpl->setVariable( "comment", $comment );

$Result = array();
$Result['content'] = $tpl->fetch( "design:shop/userregister.tpl" );
$Result['path'] = array( array( 'url' => false,
                                'text' => ezpI18n::tr( 'kernel/shop', 'Enter account information' ) ) );
?>
