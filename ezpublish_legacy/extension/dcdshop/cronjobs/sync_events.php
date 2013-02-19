<?php

$language = 'en';

$dcd_ini = eZINI::instance( 'dcpro.ini' );
$courseParentNodeID = $dcd_ini->variable( 'dcdNodes', 'CourseHome' );
$eventsParentNodeID  = $dcd_ini->variable( 'dcdNodes', 'EventHome' );

set_time_limit ( 0 );
$cli = eZCLI::instance();
$db = eZDB::instance();
$script = eZScript::instance( array( 'description' => ( "eZ Publish data import.\n\n" .
                                      "Moodle Events import script for use with DCD Shop"),
                                     'use-session'       => false,
                                     'use-modules'       => true,
                                     'use-extensions'    => true,
                                     'debug-output'      => true,
                                     'debug-message'     =>true,
                                     'remove-all-events-before-import' =>false) );

$script->startup();

$options = $script->getOptions( "[empty-first][language:]",
		"",
		array( 'empty-first' => 'Optionally remove all events before creating an import',
			   'language' => 'Language Chosen for synchronisation' ) );


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

eZUser::setCurrentlyLoggedInUser( $user, 14 );

$cli->output( 'Username: '.$user->attribute( 'login' ) );

$parent_node = eZContentObjectTreeNode::fetch( $eventsParentNodeID );

$cli->output( 'Parent: '. $parent_node->attribute( 'name' ) );

//setting general node details
$params = array();
$params['class_identifier'] = 'event'; //class name (found within setup=>classes in the admin if you need it
$params['creator_id'] = $user->attribute( 'contentobject_id' ); //using the user created above
$params['parent_node_id'] = $eventsParentNodeID; //pulling the node id out of the parent
$params['section_id'] = $parent_node->attribute( 'object' )->attribute( 'section_id' );
$params['storage_dir' ] = $_SERVER['PWD'] . '/';

$moodle_ini = eZINI::instance( 'dcpro.ini' );
$server = $moodle_ini->variable( 'moodle', 'Server' );
$user = $moodle_ini->variable( 'moodle', 'User' );
$password = $moodle_ini->variable( 'moodle', 'Password' );
// $password = $moodle_ini->variable( 'moodle', 'Port' );
$db_name = $moodle_ini->variable( 'moodle', 'Database' );

$dsn = array(
		'server' 	=> $server,
		'user' 		=> $user,
		'password'	=> $password,
		'database'	=>	$db_name,
	/*	'port'	=>	$db_name, */
		'show_errors' => true
);

$extdb = eZDB::instance( 'ezmysqli', $dsn, true  );
$db = eZDB::instance( );

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

if( $options['empty-first'] )
{
	dcdShop::removeAllEvents( $eventsParentNodeID );
}

$parser = new eZSimplifiedXMLInputParser( $eventsParentNodeID );
$parser->setParseLineBreaks( true );

$count_imported_events = 0;

$course_params = array( 	'AttributeFilter'          => false ,
		'ClassFilterType'          => 'include',
		'ClassFilterArray'         => array('course'),
);

$courses = eZContentObjectTreeNode::subTreeByNodeID($course_params, 65);

foreach ( $rows as $id => $row){

	//check if object already exists 
	$event_params = array(	'AttributeFilter'          => array( 'and', array('event/city', '=', $row['city']), 
																		 array( "event/course_id", "=", $row['course_id'] ), 
																		array( "event/from_time", "=", $row['from_time'] ) ), 
							'ClassFilterType'          => 'include',
							'ClassFilterArray'         => array('event'),
	);
	
	$events = eZContentObjectTreeNode::subTreeByNodeID($event_params, $eventsParentNodeID);
	
	/*
	 *
	* If event does not exist then create a new event else continue through the loop
	*
	*/
	if(count( $events) > 0 ){
		continue;
	}
	
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
	$attributesData['country']  = dcdShop::check_course_country( $row['country'],  $row['city']);
	$attributesData['city']  = $row['city'];
	
	$attributesData['course'] = $course_delimiter = '';
	foreach($courses as $key => $course ){
		if(stristr( trim( $course->Name ), trim( $row['short_name'] )) )
		{
			$course_id = $course->ContentObjectID;
			$attributesData['course'] .= $course_delimiter . $course_id;
			$course_delimiter = '-';
		}
	}
	
	if($course instanceof eZContentObjectTreeNode)
	{
		$courseDM =  $course->attribute( 'data_map' );
		$attributesData['price'] = $courseDM['price']->toString();
	}
		
	$attributesData['id'] = $row['id'];
	
	//$attributesData['language'] = $row['esl-ES'];
	
	$params['attributes'] = $attributesData;
	
	$params['attributes']['language'] = 'esl-ES';
	
	//publishing the content:
	$contentObject = eZContentFunctions::createAndPublishObject( $params );
	
	
	eZContentFunctions::updateAndPublishObject( $contentObject, $params );

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