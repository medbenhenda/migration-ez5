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

$parent_node = eZContentObjectTreeNode::fetchByURLPath( 'Home' );
$cli->output( 'Parent: '. $parent_node->attribute( 'name' ) );

//setting general node details
$params = array();
$params['class_identifier'] = 'banner'; //class name (found within setup=>classes in the admin if you need it
$params['creator_id'] = $user->attribute( 'contentobject_id' ); //using the user created above
$params['parent_node_id'] = $parent_node->attribute( 'node_id' ); //pulling the node id out of the parent
$params['section_id'] = $parent_node->attribute( 'object' )->attribute( 'section_id' );
$params['storage_dir' ] = $_SERVER['PWD'] . '/';

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

$rows = $extdb->arrayQuery( 'SELECT * from banners WHERE active = "1" AND language = "en" ' );

$parser = new eZSimplifiedXMLInputParser( 126 );
$parser->setParseLineBreaks( true );

foreach ( $rows as $id => $row){
	
	//setting attribute values
	$attributesData = array ( ) ;
	$attributesData['name'] = html_entity_decode( utf8_decode(  $row['title'] ) );
	$attributesData['url'] =  html_entity_decode( utf8_decode(  $row['url'] ) );
	
	$document = $parser->process(  html_entity_decode( utf8_decode(  $row['description'] ) ) ) ;
	if(isset( $row['description']) &&  $row['description'] != "" && $document != false){
		$attributesData ['description'] = eZXMLTextType::domString( $document );
	}

	$filename = preg_replace( "/ /", "_", $row['title'] );
	
	if(isset( $row['general_filename']) &&  $row['general_filename'] != "" && $document != false){	
		$image_file = file_put_contents($row['general_filename'], file_get_contents( 'http://dc-professional.com/img/cms/' . $row['general_filename'] ) );
		$attributesData['image'] = $row['general_filename'];
	}
	
	if(isset( $row['homepage_filename']) &&  $row['homepage_filename'] != "" && $document != false){
		$image_file = file_put_contents($filename, file_get_contents( 'http://dc-professional.com/img/cms/' . $row['homepage_filename'] ) );
		$attributesData['home_image'] = $filename;
	}
		
	$params['attributes'] = $attributesData;

//	var_dump( $row['description'], $attributesData ['description'], $document);
	
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
	
	//if( $id == 2 ) break;

}




$script->shutdown();
?>