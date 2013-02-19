<?php
/**
 * 
 * Check if user exists dynamically
 * 	
 */
$email = $Params['email'];
$user = eZUser::fetchByEmail( $email );

if($user instanceof eZUser){

	echo json_encode(array(
			"result"    =>  'true',
			"message"	=> 	ezpI18n::tr('dcdshop/enrolstudent', 'User registered')
	));
}
else{

	echo json_encode(array(
			"result"    =>  'false',
			"message"	=> 	ezpI18n::tr('dcdshop/enrolstudent', 'User unavailable')
	));
	
}
	
	
eZExecution::cleanExit();

?>