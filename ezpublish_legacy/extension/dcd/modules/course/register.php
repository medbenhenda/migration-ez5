<?php
/**
 * @author Daniel Noel-Davies
 * An Ajax interface for any moodle login requirements.
 *
 * @todo Ban a user after multiple registration attempts
 */

global $strings;
$http = eZHTTPTool::instance();

// Check if email has been used before
if( $http->hasVariable( 'email' ) )
{
	$email 		= $http->variable( 'email' );
    $moodle     = new Moodle;
    $result = $moodle->emailExists( $email );
    echo json_encode(array(
        "result"    =>   $result
    ));
    eZExecution::cleanExit();
}
elseif(  $http->hasVariable( 'forgot' ) )
{
	$forgot = $http->variable( 'forgot' );
	
    $moodle     = new Moodle;
    $response     = $moodle->emailExists( $forgot );

    //Checks if email exists
    if( $response == false )
    {
		$reg_url = $_SERVER['HTTP_REFERER']."#_demoForm=register";
		$forgotemail1 =  ezpI18n::tr('dcdpro/email/forgot_password', 'We apologize, however you do not seem to have an account registered with us. Please ');
		$forgotemail2 =  ezpI18n::tr('dcdpro/email/forgot_password', 'create an account');
		$now =  ezpI18n::tr('dcdpro/email/forgot_password', 'Now');
		
		$message = $forgotemail1 .' <a class="registerLink" href="'.$reg_url.'">'.$forgotemail2 .'</a> '. $now;
		
        echo json_encode( array(
			            "result"    =>  false,
			            "error"     =>  'emailExists',
						"message"	=>	$message
        ));
        eZExecution::cleanExit();
    }
    else
    {
    	$now =  ezpI18n::tr('dcdpro/email/forgot_password', 'Now');
    	$forgotemail_exist =  ezpI18n::tr('dcdpro/email/forgot_password', 'If that email exists, An email has been sent to the below address with a new password.');
        $result     = $moodle->sendForgotEmail( $forgot );
        $errorMsg   = ( $result == false ? 'sendEmailError' : null );
        
        echo json_encode( array(
			            "result"    =>   $result,
			            "error"     =>   $errorMsg,
						"message"	=>	 $forgotemail_exist
        ));
        eZExecution::cleanExit();
    }
}
else
{
    $allowedFields  = array(
        'regfirstname', 'reglastname', 'regjobtitle', 'regcompanyname',
        'regaddress1', 'regaddress2', 'regaddress3', 'regcity', 'regstate',
        'regcountry'
    );
    $requiredFields = array();
    foreach( $allowedFields as $field )
    {
    	$missingfield =  ezpI18n::tr('dcdpro/email/forgot_password', 'Missing Fields');
        // Check we have the fields we need
        if( !array_key_exists( $field, $_POST )
            && !empty( $_POST[$field] )
            && $_POST[$field] != ""
            ){
            	$requiredFields = array( 'result' => false, 'error' => $missingfield );
        }
    }
    
    if( empty( $requiredFields ) )
    {
        $moodle     = new Moodle;
        
        $response   = $moodle->createUser(
	            $_POST['regusername'],
	            $_POST['regpassword'],
	            $_POST['regfirstname'],
	            $_POST['reglastname'],
	            $_POST['regemail'],
	            $_POST['regcity'],
	            $_POST['regCountry'],
	            $_POST['regjobtitle'],
	            $_POST['regcompanyname'],
	            $_POST['regaddress1'],
	            $_POST['regaddress2'],
	            $_POST['regaddress3'],
	            (isset( $_POST['regProvince'] ) ? $_POST['regProvince'] : null),
	            (isset( $_POST['regState'] )    ? $_POST['regState']    : null),
	            $_POST['regZip'],
	            (isset( $_POST['regCellCountry'] ) ? $_POST['regCellCountry'] : '') . $_POST['regCell'],
	            (isset( $_POST['regTelCountry'] ) ? $_POST['regTelCountry'] : '')   . $_POST['regTel']
        );

        if( $response === 1 )
        {
        	$register_fail =  ezpI18n::tr('dcdpro/register', 'Username already exists. Please choose a different one.');
        	$usernameexist =  ezpI18n::tr('dcdpro/register', 'Existing Username');
        	
            $result = array(
                'result'    => false,
                'error'      => $usernameexist,
				'message'	=>	$register_fail
            );
        }
        elseif( $response == true )
        {
        	$regemail = $regpassword = "";
        	if($http->hasPostVariable ("regemail"))
        	{
        		$regemail 		= $http->postVariable("regemail");
        	}
        	
        	if($http->hasPostVariable ("regpassword"))
        	{
        		$regpassword 	= $http->postVariable("regpassword");
        	}
        	
        	// Return a proper result to the browser.
        	$moodleuid = $moodle->getMoodleUser($regemail, $regpassword );
        	
            $http->setSessionVariable( 'mdl_userid', $moodleuid );
            $user_info = $moodle->getUserInfo( $moodleuid );
            
    		$result = array(
                'result'    => true,
                'uid'       => $moodleuid,
                'user'      => $user_info,
    			'message'   => ezpI18n::tr('dcdpro/register', 'User created')
            );
        }
    }
    
    if( !isset( $response ) || !isset( $result ))
        $result = array( 'result' => false, 'error' => 'userError' );

    echo json_encode( $result );
    eZExecution::cleanExit();
}

eZDebug::updateSettings(
	array(
		'debug-enabled' => false
	)
);
eZExecution::cleanExit();

?>