<?php
/**
 * @author Daniel Noel-Davies
 * An Ajax interface for any moodle login requirements.
 *
 * Should:
 * 	Ban a user after 4 incorrect attempts.
 * 	Lock an account after 4 attempts.
 */

$http = eZHTTPTool::instance();

$result = array();

// If the data isn't requested via AJAX, Kill it
if( empty($_SERVER['HTTP_X_REQUESTED_WITH'])
    || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'
)
{
    echo json_encode( array( 'result'    => false, ) );
    eZExecution::cleanExit();
}

// if the user is already logged in...
if( $http->hasSessionVariable( "mdl_userid" )  )
{
    $moodle = new Moodle;
    echo json_encode( array(
        'result'    => true,
        'user'      => $moodle->getUserInfo( $http->sessionVariable ("mdl_userid") )
    ));
    eZExecution::cleanExit();
}


if( $http->hasSessionVariable( "loginAttempts" ) && $http->sessionVariable ("loginAttempts") >= 5 )
{
	$loginAttempts = $http->sessionVariable ("loginAttempts");
	
	if($http->hasVariable ("loginBanExpiry"))
	{
		$loginBanExpiry = $http->sessionVariable ("loginBanExpiry");
	}
	
	
	// If the login attempts has reached 5, set the ban.
	if( $loginAttempts == 5 )
	{
		$http->setSessionVariable( 'loginBanExpiry', time() + 25);
		$http->setSessionVariable( 'loginAttempts', $loginAttempts + 1);
	}
	elseif(  $loginAttempts >= 5
				&& $http->hasVariable ("loginBanExpiry")
				&& $loginBanExpiry < time() )
	{
		 $http->removeSessionVariable( 'loginAttempts' );
		 $http->removeSessionVariable( 'loginBanExpiry');
	}

	// Send the result to the browser
	$result = array( 'result' => false, 'detail' => ezpI18n::tr('dcdpro/login', 'Too many failed attempts') );
}

// If this is a request to check login credentials
else if( $http->hasVariable( 'email' ) &&  $http->hasVariable( 'password' )  )
{
	
	$email 		= $http->variable( 'email' );
	$password 	= $http->variable( 'password' );
	
	// Launch a new request
	$moodle = new Moodle;
	$loginCheck = $moodle->checkLogin( $email ,$password );  // test11 Temppass1?

	// If the check failed
	if( $loginCheck === false )
	{
		if( $http->hasSessionVariable( "loginAttempts" ) ){
			$loginAttempts = $http->sessionVariable ("loginAttempts");
			$http->setSessionVariable("loginAttempts", $loginAttempts + 1 );
		}
		else{
			$http->setSessionVariable("loginAttempts", 1 );
		}
		
		$login_fail =  ezpI18n::tr('dcdpro/login', 'Login Failed!<br />Incorrect Username / Password');
		
		// Increment Invalid Requests
		$result 						= array( 'result' => false , 'message'	=> $login_fail);
		$http->setSessionVariable('loginAttempts', 0);
		$http->setSessionVariable('mdl_loggedIn', true);
		$http->setSessionVariable('mdl_loggedInSince', time() );
	}
	// If the check was successful
	else
	{
		// Return a proper result to the browser.
        $moodleuid 	= $moodle->getMoodleUser( $email, $password );
        $userInfo 	= $moodle->getUserInfo( $moodleuid );

        if( !empty( $userInfo ) )
        {
    		$http->setSessionVariable('mdl_userid', $moodleuid);
        }

        $login_success =  ezpI18n::tr('dcdpro/login', 'Login Successful<br />One moment please');
        
		$result = array(
            'result'    => true,
            'uid'       => $moodleuid,
            'user'      => $userInfo,
			'message'	=> $login_success
        );

		// @todo find moodle session variables
	}
}

echo json_encode( $result );

$Result['pagelayout'] = false;
eZDebug::updateSettings(
		array(
			'debug-enabled' => false
		)
);

eZExecution::cleanExit();

/* 
 *  check for headers on this page....
 * 
if ( $useCacheHeaders )
{
	header( 'Expires: ' . gmdate( 'D, d M Y H:i:s', time() + MAX_AGE ) . ' GMT' );
	header( 'Cache-Control: cache, max-age=' . MAX_AGE . ', post-check=' . MAX_AGE . ', pre-check=' . MAX_AGE );
	header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s', $node->ModifiedSubNode ) . ' GMT' );
	header( 'Pragma: cache' );
	header( 'Content-Type: application/json' );
	header( 'Content-Length: '.strlen( $jsonText ) );
}

*/

?>