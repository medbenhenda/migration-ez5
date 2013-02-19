<?php

$language = 'en';

set_time_limit ( 0 );
require 'autoload.php';
$cli = eZCLI::instance();
$db = eZDB::instance();
$dcdini = eZINI::instance( 'dcpro.ini' );

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

$parent_node = eZContentObjectTreeNode::fetchByContentObjectID( 1392 );

$parent_node = $parent_node[0];
$cli->output( 'Parent: '. $parent_node->attribute( 'name' ) );

//setting general node details
$params = array();
$params['class_identifier'] = 'order'; //class name (found within setup=>classes in the admin if you need it
$params['creator_id'] = $user->attribute( 'contentobject_id' ); //using the user created above
$params['parent_node_id'] = $dcdini->variable( 'dcdNodes', 'OrderHome' );; //pulling the node id out of the parent
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

$rows = $extdb->arrayQuery( 'SELECT * from orders' );

foreach ( $rows as $id => $row){
	
	//setting attribute values
	$attributesData = array ( ) ;
	$attributesData['identifier'] =  $row['id'];
	$attributesData['status'] =  $row['status'];
	
	/* 
	 * USERS 
	 * TODO fix fetch
	 */
	$attr_params = array( 	'AttributeFilter'          => false, /* array( array(503, '=', $row['user_id'] ) ), */
							'ClassFilterType'          => 'include',
							'ClassFilterArray'         => array('user'), 
							'IgnoreVisibility' 		   => true 
	);
	
	$users = eZContentObjectTreeNode::subTreeByNodeID( $attr_params , 12 );
	
	    $db         = eZDB::instance();
        $users = $db->arrayQuery( "SELECT contentobject_id
                                        FROM ezcontentobject_attribute
                                        WHERE contentclassattribute_id = '503' 
        								AND sort_key_string = '". $row['user_id'] . "' ");

	$attributesData['user'] = $delimiter = '';
	foreach($users as $obj){
		$user = eZUser::fetch( $obj['contentobject_id'] );
		
		$user_obj = eZContentObject::fetch( $obj['contentobject_id'] );
		
		$datamap = $user_obj->dataMap();
		$attributesData['first_name'] = $datamap['first_name']->content(); 
		$attributesData['last_name']  = $datamap['last_name']->content();
		$attributesData['email'] = $user->attribute('email');				
		
		$attributesData['user'] .= $delimiter  . $obj['contentobject_id'];
		$delimiter = '-';
	}

	$attributesData['user_id'] =  $row['user_id'];
	
	
	/*
	 * Event & course
	 */
	$attr_params = array( 	'AttributeFilter'          => array( array(433, '=', $row['event_id'])),
							'ClassFilterType'          => 'include',
							'ClassFilterArray'         => array('event'),
							'IgnoreVisibility' 		   => true
	);
	$events = eZContentObjectTreeNode::subTreeByNodeID($attr_params, 769);
	
	$attributesData['session'] = $attributesData['course'] = $delimiter = '';
	foreach($events as $event){
		$attributesData['session'] .= $delimiter  . $event->ContentObjectID;
		
		$datamap = $event->dataMap();
		$courses = $datamap['course']->content();
		if(isset($courses['relation_list'][0]["node_id"]) ) 
		{

			$course = eZContentObjectTreeNode::fetch( $courses['relation_list'][0]["node_id"] );
			
			// update value of course id
			$dataMap = $course->attribute( 'data_map' );
			$course_id = $dataMap['course_id'];
			$course_id->setAttribute( 'data_text', $row['event_id'] );
			$course_id->sync();
			
			$attributesData['course'] = 	$courses['relation_list'][0]["contentobject_id"];		
		}
		$delimiter = '-';
	}
	
	/*
	 * Invoice
	 */
	$attr_params = array( 	'AttributeFilter'          => array( array(497, '=', $row['invoice_id'])),
			'ClassFilterType'          => 'include',
			'ClassFilterArray'         => array('invoice'),
			'IgnoreVisibility' 		   => true
	);
	
	$invoices = eZContentObjectTreeNode::subTreeByNodeID($attr_params, 1397);
	$attributesData['invoice'] = $delimiter = '';
	foreach($invoices as $invoice){
		$attributesData['invoice'] .= $delimiter  . $invoice->ContentObjectID ;
		$delimiter = '-';
	}
	
	$datetime = explode(" ", $row['time_created'] );
	$dates = explode("-", $datetime[0]);
	$time = explode(":", $datetime[1]);
	
	$attributesData['time_created'] = 	mktime($time[0], $time[1], $time[2], $dates[1], $dates[2], $dates[0]);
	
	$datetime = explode(" ", $row['time_modified'] );
	$dates = explode("-", $datetime[0]);
	$time = explode(":", $datetime[1]);
	
	$attributesData['time_modified'] = 	mktime($time[0], $time[1], $time[2], $dates[1], $dates[2], $dates[0]);
	$attributesData['cost_net'] =  $row['cost_net'] ;
	$attributesData['cost_tax'] =  $row['cost_tax'] ;
	$attributesData['cost_total'] =  $row['cost_total'] ;
	
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