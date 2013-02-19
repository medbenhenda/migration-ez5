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
$dcdini = eZINI::instance( 'dcpro.ini' );

$parent_node = eZContentObjectTreeNode::fetchByContentObjectID( 1393 );

$parent_node = $parent_node[0];
$cli->output( 'Parent: '. $parent_node->attribute( 'name' ) );

//setting general node details
$params = array();
$params['class_identifier'] = 'invoice'; //class name (found within setup=>classes in the admin if you need it
$params['creator_id'] = $user->attribute( 'contentobject_id' ); //using the user created above
$params['parent_node_id'] = $dcdini->variable( 'dcdNodes', 'InvoiceHome' ); //pulling the node id out of the parent
$params['section_id'] = $parent_node->attribute( 'object' )->attribute( 'section_id' );

$username = $dcdini->variable( 'moodle', 'User' );
$password = $dcdini->variable( 'moodle', 'Password' );
$db_name = 'dcdpro_beta';// $moodle_ini->variable( 'MoodleDatabaseSettings', 'Database' );

$dsn = array(
		'server' 	=> 'localhost',
		'user' 		=> $username,
		'password'	=> $password,
		'database'	=>	$db_name,
		'show_errors' => true
);

$extdb = eZDB::instance( 'ezmysqli', $dsn, true  );

$rows = $extdb->arrayQuery( 'SELECT * from invoices' );

foreach ( $rows as $id => $row){
	
	//setting attribute values
	$attributesData = array ( ) ;
	$attributesData['id'] =  $row['id'];
	$attributesData['status'] =  $row['status'] ;
	
	$datetime = explode(" ", $row['time_requested'] );
	$dates = explode("-", $datetime[0]);
	$time = explode(":", $datetime[1]);
	
	$attributesData['time_requested'] = 	mktime($time[0], $time[1], $time[2], $dates[1], $dates[2], $dates[0]);
	$attributesData['filename'] = $row['filename'] ;
	
	$datetime = explode(" ", $row['paid_date'] );
	$dates = explode("-", $datetime[0]);
	$time = explode(":", $datetime[1]);
	
	$attributesData['paid_date'] = 	mktime($time[0], $time[1], $time[2], $dates[1], $dates[2], $dates[0]);
	
	$datetime = explode(" ", $row['time_modified'] );
	$dates = explode("-", $datetime[0]);
	$time = explode(":", $datetime[1]);
	
	$attributesData['date_modified'] = 	mktime($time[0], $time[1], $time[2], $dates[1], $dates[2], $dates[0]);
		
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
	
}

$script->shutdown();
?>