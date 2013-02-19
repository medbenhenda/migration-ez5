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

$parent_node = eZContentObjectTreeNode::fetchByURLPath( 'Courses' );
$cli->output( 'Parent: '. $parent_node->attribute( 'name' ) );

//setting general node details
$params = array();
$params['class_identifier'] = 'course'; //class name (found within setup=>classes in the admin if you need it
$params['creator_id'] = $user->attribute( 'contentobject_id' ); //using the user created above
$params['parent_node_id'] = $parent_node->attribute( 'node_id' ); //pulling the node id out of the parent
$params['section_id'] = $parent_node->attribute( 'object' )->attribute( 'section_id' );

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

$rows = $extdb->arrayQuery( 'SELECT * from courses
								LEFT JOIN courses_text ON courses.id = courses_text.course_id
								WHERE courses_text.language = "' . $language . '"
						' );

$parser = new eZSimplifiedXMLInputParser( 63 );
$parser->setParseLineBreaks( true );

foreach ( $rows as $id => $row){
	
	//setting attribute values
	$attributesData = array ( ) ;
	$attributesData ['title'] = $row['title'] ;
	$attributesData ['duration'] = $row['duration'] ;
	$attributesData ['course_code'] = $row['code'] ;
	
	$attributesData ['fees'] = preg_replace(array('/â‚¬/', '/Â£/'), array('€', '£'),   $row['fees'] );
	
	$attributesData ['pdhs'] = $row['pdhs'] ;
	$attributesData ['languages'] = utf8_decode( $row['available_languages'] ) ;
	
	$attributesData ['level'] = $row['level'] ;

	$texts = array( 'excerpt' => 'summary',
					'description' => 'body',
					'who_should_attend' => 'target_audience',
					'including_but_not_restricted_to' => 'restrictions',
					'course_outline' => 'course_outline',
					'who_should_attend' => 'target_audience',
					'certification' => 'certification',
					'pre_requisites' => 'pre_requisites',
					'minimum_requirements' => 'min_requirements',
					);
	
	foreach($texts as $key => $text)
	{
		
		$patterns = array('/&raquo;/', 
							'/&nbsp;/', 
							'/&rsquo;/', 
							'/&lsquo;/', 
							'/â€™/', 
							'/â€˜/',
							'/(<[^>]+) style=".*?"/'		
					);
		
		$replacements = array('>',
								' ', 
								"'", 
								"'", 
								"'", 
								"'", 
								"$1");
		
		$string = preg_replace($patterns, $replacements, $row[$key]);
		$string =  html_entity_decode( utf8_decode( $string ) );
		
		$document = $parser->process( $string ) ;
		
		if(isset( $row['who_should_attend']) &&  $row['who_should_attend'] != "" && $document != false && is_object( $document  )) {
			$attributesData [$text] = eZXMLTextType::domString(  $document );
		}
		
	}
		
	if(isset( $row['has_exam']) &&  $row['has_exam'] != ""){
		$attributesData ['exam'] = $row['has_exam'] ;
	}
	if(isset( $row['has_qualification']) &&  $row['has_qualification'] != ""){
		$attributesData ['qualification'] = $row['has_qualification'] ;
	}
	if(isset( $row['third_party_course']) &&  $row['third_party_course'] != ""){
		$attributesData ['third_party'] = $row['third_party_course'] ;
	}
		
	if(isset( $row['type']) &&  $row['type'] != ""){
		$attributesData ['type'] = ucfirst ($row['type']) ;
	}

	$disciplines = $extdb->arrayQuery( 'SELECT * from courses_disciplines LEFT JOIN disciplines ON disciplines.id = courses_disciplines.discipline_id where course_id = ' .  $row['id'] );
	
	$attributesData ['disciplines'] = $discipline_delimiter = '';
	
	foreach($disciplines as $discipline){
		$attributesData['disciplines'] .= $discipline_delimiter . $discipline['title'];
		$discipline_delimiter = '|';
	}

	$accreditations = $extdb->arrayQuery( 'SELECT * from courses_accreditations LEFT JOIN accreditations ON accreditations.id = courses_accreditations.accreditation_id where course_id = ' .  $row['id'] );
	
	$accr_params = array( 	'AttributeFilter'          => false,
							'ClassFilterType'          => 'include',
							'ClassFilterArray'         => array('accreditation'),
							 );
	
	$accreds = eZContentObjectTreeNode::subTreeByNodeID($accr_params, 328);
	$attributesData['accreditations'] = $ac_delimiter = '';
		
	foreach($accreditations as $key => $accreditation ){
		
		foreach(  $accreds as $ac )
		{
			if($ac->Name == $accreditation['title'] )
			{
				$accreditation_id = $ac->ContentObjectID;
				$attributesData['accreditations'] .= $ac_delimiter . $accreditation_id;
				$ac_delimiter = '-';
			}
		}
			
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
//		$cli->output( "Data Map: " . print_r( $contentObject->attribute( 'data_map' ), true ) );
	}
}

$script->shutdown();
?>