<?php

$language = 'en';

set_time_limit ( 0 );
require 'autoload.php';
$cli = eZCLI::instance();
$db = eZDB::instance();
$script = eZScript::instance( array( 'description' => ( "eZ Publish data import.\n\n" .
                                      "Simple import script for use with eZ Publish"),
                                     'use-session' => false,
                                     'use-modules' => true,
                                     'use-extensions' => true,
                                     'debug-output' => true,
                                     'debug-message' =>true) );

$script->startup();
$script->initialize();
 
/*****************************
Our Functionality will go here
*****************************/
 
$user = eZUser::fetchByName( 'admin' );
if ( !$user )
{
	//if no user exists let's pull out the current user:
	$user = eZUser::currentUser();
}


$cli->output( 'Username: '.$user->attribute( 'login' ) );

$parent_node = eZContentObjectTreeNode::fetchByContentObjectID( 11 );

$parent_node = $parent_node[0];
$cli->output( 'Parent: '. $parent_node->attribute( 'name' ) );

//setting general node details
$params = array();
$params['class_identifier'] = 'user'; //class name (found within setup=>classes in the admin if you need it
$params['creator_id'] = $user->attribute( 'contentobject_id' ); //using the user created above
$params['parent_node_id'] = 12; //pulling the node id out of the parent
$params['section_id'] = $parent_node->attribute( 'object' )->attribute( 'section_id' );

$moodle_ini = eZINI::instance( 'dcpro.ini' );
$username = $moodle_ini->variable( 'moodle', 'User' );
$password = $moodle_ini->variable( 'moodle', 'Password' );
$db_name =  $moodle_ini->variable( 'moodle', 'Database' );


$dsn = array(
		'server' 	=> 'localhost',
		'user' 		=> $username,
		'password'	=> $password,
		'database'	=>	$db_name,
		'show_errors' => true
);

$extdb = eZDB::instance( 'ezmysqli', $dsn, true  );

$rows = $extdb->arrayQuery( 'SELECT * from mdl_user WHERE deleted = 0' );

foreach ( $rows as $id => $row){

	//setting attribute values
	$attributesData = array ( ) ;
	$attributesData['identifier'] =  $row['id'];
	$attributesData['user_account'] =  $row['username'] . "|" . $row['email']  . "|" . $row['password'] ;
	
	$attributesData['first_name'] =  $row['firstname'] ;
	$attributesData['last_name'] =  $row['lastname'] ;
	
	$attributesData['address'] =  $row['address'] ;
	$attributesData['city'] = 	$row['city'];
	$attributesData['country'] = $row['country'] ;
	$attributesData['first_access_time'] = $row['firstaccess'] ;
	$attributesData['last_access_time'] = $row['lastaccess'] ;
	$attributesData['last_login'] = $row['lastlogin'] ;
		
	$params['attributes'] = $attributesData;

	$params['publish'] = $row['timecreated'];
	$params['modified'] = $row['timemodified'];
	
	//publishing the content:
	$contentObject = eZContentFunctions::createAndPublishObject( $params );
	
	if ( $contentObject )
	{
		$cli->output( '===========================' );
		$cli->output( 'Output:' );
		$cli->output( "Content Object ID: " . $contentObject->attribute( 'id' ) );
		$cli->output( "Name: ".  $contentObject->attribute( 'name' ) );
	//	$cli->output( "Data Map: " . print_r( $contentObject->attribute( 'data_map' ), true ) );
	}
}

$script->shutdown();
?>