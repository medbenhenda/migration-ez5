<?php

$moodle_ini = eZINI::instance( 'dcpro.ini' );
$user = $moodle_ini->variable( 'moodle', 'User' );
$password = $moodle_ini->variable( 'moodle', 'Password' );
$db_name = 'dcdpro_beta';// $moodle_ini->variable( 'MoodleDatabaseSettings', 'Database' );

$dsn = array(
		'server' 	=> 'localhost',
		'user' 		=> $user,
		'password'	=> $password,
		'database'	=>	$db_name,
		'show_errors' => true
);

$extdb = eZDB::instance( 'ezmysqli', $dsn, true  );
$test = $extdb->arrayQuery("SHOW TABLES");

$rows = $extdb->arrayQuery( 'SELECT * from courses
								LEFT JOIN courses_text ON courses.id = courses_text.course_id' ); 
		

$parent_node = eZContentObject::fetchByNodeID( 63 )->mainNode();

$cli->output( 'Parent: '. $parent_node->attribute( 'name' ) );

foreach ( $rows as $row )
{

	//setting general node details
	$params = array();
	$params['class_identifier'] = 'course'; //class name (found within setup=>classes in the admin if you need it
	$params['creator_id'] = $user->attribute( 'contentobject_id' ); //using the user created above
	$params['parent_node_id'] = $parent_node->attribute( 'node_id' ); //pulling the node id out of the parent
	$params['section_id'] = $parent_node->attribute( 'object' )->attribute( 'section_id' );
	
	exit;
	
}
// fetch some data with a limit


print( $moodle_db->databaseName() );


