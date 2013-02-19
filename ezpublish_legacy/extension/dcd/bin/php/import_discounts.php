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

$parent_node = eZContentObjectTreeNode::fetchByContentObjectID( 1394 );

$parent_node = $parent_node[0];
$cli->output( 'Parent: '. $parent_node->attribute( 'name' ) );

//setting general node details
$params = array();
$params['class_identifier'] = 'discount'; //class name (found within setup=>classes in the admin if you need it
$params['creator_id'] = $user->attribute( 'contentobject_id' ); //using the user created above
$params['parent_node_id'] = 1398; //pulling the node id out of the parent
$params['section_id'] = $parent_node->attribute( 'object' )->attribute( 'section_id' );

$moodle_ini = eZINI::instance( 'dcpro.ini' );
$username = $moodle_ini->variable( 'moodle', 'User' );
$password = $moodle_ini->variable( 'moodle', 'Password' );
$db_name = 'dcdpro_beta';// $moodle_ini->variable( 'MoodleDatabaseSettings', 'Database' );


$dsn = array(
		'server' 	=> 'localhost',
		'user' 		=> $username,
		'password'	=> $password,
		'database'	=>	$db_name,
		'show_errors' => true
);

$extdb = eZDB::instance( 'ezmysqli', $dsn, true  );

$rows = $extdb->arrayQuery( 'SELECT * from discounts' );

foreach ( $rows as $id => $row){
	
	//setting attribute values
	$attributesData = array ( ) ;
	$attributesData['id'] =  $row['id'];
	
	$attributesData['code'] =  $row['code'] ;
	
	$attributesData['dcd_email'] =  $row['dcd_staff_email'] ;
	$user = eZUser::fetchByEmail( $row['dcd_staff_email'] );
	
	if( $user instanceof eZUser )
	{
		$attributesData['user']  = $user->attribute('contentobject_id');
	}
	$attributesData['email'] =  $row['client_email'];	
	
	$user = eZUser::fetchByEmail( $row['client_email'] );
	
	if( $user instanceof eZUser  )
	{
		$attributesData['client'] = $user->attribute('contentobject_id');
	}
	$attributesData['group'] =  $row['group_name'] ;
	$attributesData['course_id'] =  $row['courseid'] ;
	
	$attributesData['type'] = ucfirst($row['type']);
	$attributesData['percentage'] =  $row['percentage'] ;
	
	$expires = explode('-', $row['expires'] );
	
	$attributesData['expiration'] =  mktime(0,0,0, $expires[1], $expires[2], $expires[0]) ;
	$attributesData['id'] =  $row['id'] ;
	
	$params['attributes'] = $attributesData;

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
	//if($id == 1) break;
}

$script->shutdown();
?>