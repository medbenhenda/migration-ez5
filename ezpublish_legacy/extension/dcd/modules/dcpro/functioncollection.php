<?php
//

class dcProFunctionCollection
{
	function fetchCourses()
	{
		$moodle_ini = eZINI::instance( 'dcpro.ini' );
		$user = $moodle_ini->variable( 'moodle', 'User' );
		$password = $moodle_ini->variable( 'moodle', 'Password' );
		$db_name = $moodle_ini->variable( 'moodle', 'Database' );
		
		$dsn = array(
				'server' 	=> 'localhost',
				'user' 		=> $user,
				'password'	=> $password,
				'database'	=>	$db_name,
				'show_errors' => true
		);
		
		$extdb = eZDB::instance( 'ezmysqli', $dsn, true  );
		$course = $extdb->arrayQuery("SELECT * FROM mdl_course");

		$result = array( 'result' => $res );
		return $result;
	}

}

?>