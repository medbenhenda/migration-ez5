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

$parent_node = eZContentObjectTreeNode::fetchByURLPath( 'Accreditations' );
$cli->output( 'Parent: '. $parent_node->attribute( 'name' ) );

//setting general node details
$params = array();
$params['class_identifier'] = 'accreditation'; //class name (found within setup=>classes in the admin if you need it
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

$rows = $extdb->arrayQuery( 'SELECT * from accreditations WHERE language = "en"' );

$parser = new eZSimplifiedXMLInputParser( );
$parser->setParseLineBreaks( true );

foreach ( $rows as $id => $row){
	
	//setting attribute values
	$attributesData = array ( ) ;
	$attributesData['title'] = $row['title'] ;
	$attributesData['url'] = $row['url'] ;
	
	$attributesData['type'] = $row['type'] ;

	$document = $parser->process(  strip_tags( utf8_decode(  html_entity_decode( $row['excerpt'] )  ) , '<a><b><i><sup><sub><em><strong><u><br>'));
	if(isset( $row['excerpt']) &&  $row['excerpt'] != "" && $document != false){
		$attributesData ['summary'] = eZXMLTextType::domString(  $document );
	}

	$document = $parser->process( strip_tags( utf8_decode(html_entity_decode( $row['full_description']) ) , '<a><b><i><sup><sub><em><strong><u><br><div>' ));
	if(isset( $row['full_description']) &&  $row['full_description'] != "" && $document != false){
		$attributesData ['description'] = eZXMLTextType::domString( $document );
	}

	$image_file = file_put_contents($row['filename'], file_get_contents( 'http://dc-professional.com/img/cms/' . $row['filename'] ) );
	
	$attributesData['image'] = $row['filename'];
	
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