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

$parent_node = eZContentObjectTreeNode::fetchByContentObjectID( 1389 );

$parent_node = $parent_node[0];
$cli->output( 'Parent: '. $parent_node->attribute( 'name' ) );

//setting general node details
$params = array();
$params['class_identifier'] = 'company'; //class name (found within setup=>classes in the admin if you need it
$params['creator_id'] = $user->attribute( 'contentobject_id' ); //using the user created above
$params['parent_node_id'] = 1394; //pulling the node id out of the parent
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

$rows = $extdb->arrayQuery( 'SELECT * from dcp_company_info' );

foreach ( $rows as $id => $row){
	
	//setting attribute values
	$attributesData = array ( ) ;
	$attributesData['name'] = html_entity_decode( utf8_decode(  $row['company_name'] ) );
	$attributesData['registration_number'] =  html_entity_decode( utf8_decode(  $row['company_reg_no'] ) );
	
	$attributesData['tax_number'] = $row['company_tax_no'] ;
	$attributesData['regional_manager_name'] = $row['regional_manager_name'] ;
	$attributesData['regional_manager_email'] = $row['regional_manager_email'] ;
	$attributesData['regional_manager_phone'] = $row['regional_manager_phone'] ;
	$attributesData['address'] = $row['company_address_1'] ;
	$attributesData['address_2'] = $row['company_address_2'] ;
	$attributesData['address_3'] = $row['company_address_3'] ;
	$attributesData['city'] = $row['company_address_city'] ;
	$attributesData['state'] = $row['company_address_state'] ;
	$attributesData['zip'] = $row['company_address_zip'] ;
	$attributesData['country'] = $row['company_address_country'] ;
	$attributesData['central_email'] = $row['central_email'] ;
	
	
	$bank_params = array( 	'AttributeFilter'          => array( array(489, '=', $row['bank_id'])), 
							'ClassFilterType'          => 'include',
							'ClassFilterArray'         => array('bank'),
							'IgnoreVisibility' 		   => true
	);
	
	$banks = eZContentObjectTreeNode::subTreeByNodeID($bank_params, 1395);
	
	$attributesData['bank'] = $bank_delimiter = '';
	
	foreach($banks as $bank){
		$attributesData['bank'] .= $bank_delimiter  . $bank->ContentObjectID ;
		$bank_delimiter = '-';
	}
	
	$attributesData['booking_form'] = $row['booking_form'] ;
	$attributesData['country_id'] = $row['country_id'] ;
	$attributesData['country'] = $row['country_id'] ;
	$attributesData['tax_rules'] =  $row['tax_rules'] ;
	
	$attributesData['company_alias_name'] = $row['company_alias_name'] ;
	$attributesData['identifier'] = $row['id'] ;
		
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
//	if( $id == 0 ) break;
}

$script->shutdown();
?>