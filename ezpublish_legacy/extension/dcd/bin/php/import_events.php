<?php

$language = 'en';
$parent_node_id = 762;

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

$parent_node = eZContentObjectTreeNode::fetchByContentObjectID( $parent_node_id );
$parent_node =$parent_node[0];

$cli->output( 'Parent: '. $parent_node->attribute( 'name' ) );

//setting general node details
$params = array();
$params['class_identifier'] = 'event'; //class name (found within setup=>classes in the admin if you need it
$params['creator_id'] = $user->attribute( 'contentobject_id' ); //using the user created above
$params['parent_node_id'] = $parent_node->attribute( 'node_id' ); //pulling the node id out of the parent
$params['section_id'] = $parent_node->attribute( 'object' )->attribute( 'section_id' );
$params['storage_dir' ] = $_SERVER['PWD'] . '/';

$moodle_ini = eZINI::instance( 'dcpro.ini' );
$user = $moodle_ini->variable( 'moodle', 'User' );
$password = $moodle_ini->variable( 'moodle', 'Password' );
$db_name = $moodle_ini->variable( 'moodle', 'Database' );

$dsn = array(
		'server' 	=> 'localhost',
		'user' 		=> $user,
		'password'	=> $password,
		'database'	=>	$db_name,
		'show_errors' => true
);

$extdb = eZDB::instance( 'ezmysqli', $dsn, true  );

function makeAssoc( &$array, $key, $value )
{
	$temp = array();
	foreach( $array as $k => $values )
	{
		if( $values[$value] !== null )
			$temp[$values[$key]] = $values[$value];
	}
	$array = $temp;
	unset( $temp );
}

// check if the events are really in the moodle database

/* 
 * old code from previous database, this should be replaced with clean eZPublish show/hide objects routine
 * 
 */
/*
 * 
 * 
$conn->Execute("TRUNCATE TABLE lms_courses");

trace("Repopulating lms_courses table from LMS");
$conn->Execute("INSERT INTO lms_courses(id, fullname, shortname)
				SELECT id, fullname, shortname
				FROM dcp.mdl_course;");

 *
 */

$rows = $extdb->arrayQuery( "SELECT
								F.name AS title,
					        	COURSE.fullname AS short_name,
							    COURSE.summary AS description,
								F.course AS course_id,
								from_unixtime(D.timestart) AS lms_start,
								D.timestart AS from_time,
								(D.timefinish - D.timestart)/60/60 AS duration,
								CONCAT('http://my.dc-professional.com/course/view.php?id=',F.course) AS booking_url,
								VENUE.data AS venue,
						        S.id as id,
								CITY.data AS city,
								COUNTRY.data AS country
							FROM
								mdl_facetoface_sessions_dates D
								INNER JOIN mdl_facetoface_sessions S
						            ON D.sessionid = S.id
								LEFT JOIN mdl_facetoface_session_data VENUE
						            ON VENUE.sessionid = S.id
						            AND VENUE.fieldid =  4
								LEFT JOIN mdl_facetoface_session_data INSTRUCTOR
						            ON INSTRUCTOR.sessionid = S.id
						            AND INSTRUCTOR.fieldid = 5
								LEFT JOIN mdl_facetoface_session_data COUNTRY
						            ON COUNTRY.sessionid = S.id
						            AND COUNTRY.fieldid = 7
								LEFT JOIN mdl_facetoface_session_data CITY
						            ON CITY.sessionid = S.id
						            AND CITY.fieldid = 8
								INNER JOIN mdl_facetoface F
						            ON S.facetoface = F.id
								LEFT JOIN mdl_course COURSE ON COURSE.id = F.course" );

$parser = new eZSimplifiedXMLInputParser( $parent_node_id );
$parser->setParseLineBreaks( true );

foreach ( $rows as $id => $row){
	
	//setting attribute values
	$attributesData = array ( ) ;
	$attributesData['title'] =  html_entity_decode( utf8_decode(  $row['title'] ) ) ;
	
	$attributesData['short_title'] = $row['short_name'] ;

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
	
	$string = preg_replace($patterns, $replacements, $row['description']);
	$document = $parser->process(  html_entity_decode( utf8_decode(  $string ) ) ) ;
	
	if(isset( $row['description']) &&  $row['description'] != "" && $document != false){
		$attributesData['text'] = eZXMLTextType::domString( $document );
	}
	
	$attributesData['from_time'] = $row['from_time'];

	$attributesData['course_id'] = $row['course_id'];
	
	$attributesData['booking_url']  = $row['booking_url'];
	$attributesData['duration']  = round( (int) $row['duration'] );
	
	$attributesData['venue'] = $row['venue'];
	$attributesData['country']  = $row['country'];
	$attributesData['city']  = $row['city'];
	
	$course_params = array( 	'AttributeFilter'          => false ,
			'ClassFilterType'          => 'include',
			'ClassFilterArray'         => array('course'),
	);
	
	$courses = eZContentObjectTreeNode::subTreeByNodeID($course_params, 65);
	$attributesData['course'] = $course_delimiter = '';
	
	foreach($courses as $key => $course ){
		if(stristr( trim( $course->Name ), trim( $row['short_name'] )) )
		{
			$course_id = $course->ContentObjectID;
			$attributesData['course'] .= $course_delimiter . $course_id;
			$course_delimiter = '-';
		}
	}
	
	$attributesData['id'] = $row['id'];
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