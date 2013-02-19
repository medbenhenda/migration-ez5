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

$parent_node = eZContentObjectTreeNode::fetchByContentObjectID( 1391 );

$parent_node = $parent_node[0];
$cli->output( 'Parent: '. $parent_node->attribute( 'name' ) );

//setting general node details
$params = array();
$params['class_identifier'] = 'bank'; //class name (found within setup=>classes in the admin if you need it
$params['creator_id'] = $user->attribute( 'contentobject_id' ); //using the user created above
$params['parent_node_id'] = '1395'; //pulling the node id out of the parent

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
$rows = $extdb->arrayQuery( 'SELECT * from dcp_bank_info' );

foreach ( $rows as $id => $row){
	
	//setting attribute values
	$attributesData = array ( ) ;
	$attributesData['name'] = html_entity_decode( utf8_decode(  $row['bank_name'] ) );
	$attributesData['alias'] =  html_entity_decode( utf8_decode(  $row['bank_alias_name'] ) );

	/*
	$attributesData['type'] = $row['swiftbic'] ;
	$attributesData['type'] = $row['acc_no'] ;
	$attributesData['type'] = $row['iban'] ;
	*/
	$attributesData['identifier'] = $row['id'] ;
	
	$accounts = json_decode( $row['accounts'] );
	
	$attributesData['accounts'] = $account_delimiter = '';
	
	$account_params = array();
	$account_params['class_identifier'] = 'account'; //class name (found within setup=>classes in the admin if you need it
	$account_params['creator_id'] = $user->attribute( 'contentobject_id' ); //using the user created above
	$account_params['parent_node_id'] = '1400'; //pulling the node id out of the parent
	
	foreach($accounts as $key => $account ){
	
			$accountAttributesData = array ( ) ;
			
			switch($account->currency){
				case 1:
					$accountAttributesData['currency'] = 'GBP';
					break;
				case 3:
					$accountAttributesData['currency'] = 'EUR';
					break;
				case 4:
					$accountAttributesData['currency'] = 'CNY';
					break;
				case 16:
					$accountAttributesData['currency'] = 'CAD';
					break;
				case 29:
					$accountAttributesData['currency'] = 'AUD';
					break;									
				case 30:
					$accountAttributesData['currency'] = 'SGB';
					break;
				default:
					$accountAttributesData['currency'] = 'USD';
					break;					
			}
			
			$accountAttributesData['account_number'] = $account->acc_no;
			$accountAttributesData['sort_code'] = $account->sort_code;
			$accountAttributesData['iban'] = $account->iban;
			$accountAttributesData['swift'] = $account->swiftbic;
			
			$account_params['attributes'] = $accountAttributesData;	
			
			$contentObject = eZContentFunctions::createAndPublishObject( $account_params );
		
			$attributesData['accounts'] .= $account_delimiter . $contentObject->attribute( 'id' ) ;
			$account_delimiter = '-';
	
			
			$cli->output( "Content Object ID: " . $contentObject->attribute( 'id' ) );
			$cli->output( "Name: ".  $contentObject->attribute( 'name' ) );
	}
	
	
	$params['attributes'] = $attributesData;

	//publishing the content:
	$contentObject = eZContentFunctions::createAndPublishObject( $params );

	
	if ( $contentObject )
	{
		$cli->output( '===========================' );
		$cli->output( 'Output:' );
		$cli->output( "Content Object ID: " . $contentObject->attribute( 'id' ) );
		$cli->output( "Name: ".  $contentObject->attribute( 'name' ) );
	}

}




$script->shutdown();
?>