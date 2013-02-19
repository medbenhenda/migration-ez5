<?php

$parentNodeID = '769';
$courseParentNodeID = '65';

$event_params = array(		'ClassFilterType'          => 'include',
							'ClassFilterArray'         => array('event'),
);

$events = eZContentObjectTreeNode::subTreeByNodeID( $event_params, $parentNodeID );
$db = eZDB::instance( );
$cli = eZCLI::instance();


/**
 * 
 * For temp fix
 * 
 * Connection to moodle database to check course_id
 * 
 */

$moodle_ini = eZINI::instance( 'dcpro.ini' );
$server = $moodle_ini->variable( 'moodle', 'Server' );
$user = $moodle_ini->variable( 'moodle', 'User' );
$password = $moodle_ini->variable( 'moodle', 'Password' );
$db_name = $moodle_ini->variable( 'moodle', 'Database' );

$dsn = array(
		'server' 	=> $server,
		'user' 		=> $user,
		'password'	=> $password,
		'database'	=>	$db_name,
		'show_errors' => true
);

$extdb = eZDB::instance( 'ezmysqli', $dsn, true  );

$course_params = array( 	'AttributeFilter'          => false ,
							'ClassFilterType'          => 'include',
							'ClassFilterArray'         => array('course'),
);

$courses = eZContentObjectTreeNode::subTreeByNodeID($course_params, 65);

/** 
 * End Temp fix
 */


foreach($events as $event)
{
	
	$dataMap = $event->attribute( 'data_map' );
	$course_object_id = $dataMap['course']->toString();
	$course_id = $dataMap['course_id']->toString();
	
	$start_date = $dataMap['from_time']->toString();
	
	// Only update the price if the event has not expired
	
	if($start_date >= time() )
	{
		$prices = array();
		/**
		 * Fix when no course id is present
		 */
		$cli->output( "Course price Synchronisation: " . $event->attribute( 'contentobject_id' ) . " - " . $event->attribute( 'name' ) );
		$course_id = $dataMap['course']->toString();
		
		/**
		 * Temp fix
		 *
		 * If course is not valid in eZPublish then update object with valid course ID
		 *
		 * Due to course_id not being imported correctly during initial 'one shot' import
		 * The course id is not always correct. The course ID is therefore fetched via a query and updated in the course object if not initially present
		 *
		 */
		if($course_id == '' ) {
		
			//	var_dump("SELECT id FROM mdl_course WHERE shortname = '" . $datamap['course_code']->content() . "'",  $datamap['course_code'] );
		
			if( isset( $dataMap['course_code'] ) && $dataMap['course_code']->hasContent() ){
			
				$course_info = $extdb->arrayQuery( "SELECT id FROM mdl_course WHERE shortname LIKE '" . $dataMap['course_code']->content() . "'" );
				$course_id =  $course_info[0]['id'];
			
				$dataMap['course_id']->fromString( $course_id );
				$dataMap['course_id']->store();
				
				$cli->output( "==== COURSE ID UPDATED === " . $event->attribute( 'contentobject_id' ) . " - " . $event->attribute( 'name' ) );
				
			}else{
				
				$course_info = $extdb->arrayQuery( "SELECT id, shortname FROM mdl_course WHERE fullname LIKE '" . $dataMap['short_title']->toString() . "'" );
				$course_id =  $course_info[0]['id'];
					
				$dataMap['course_id']->fromString( $course_id );
				$dataMap['course_id']->store();
				
				$course_string = $course_delimiter = '';
					
				foreach($courses as $key => $course ){
					$courseDM = $course->attribute('data_map');
					
					if(stristr( trim( $courseDM['course_code']->toSTring() ), trim( $course_info[0]['shortname'] )) )
					{
						$course_id = $course->ContentObjectID;
						$course_string .= $course_delimiter . $course_id;
						$course_delimiter = '-';
					}
				}
				$dataMap['course']->fromString( $course_string );
				$dataMap['course']->store();
				
				$cli->output( "==== NO COURSE ID FOUND UPDATE COURSE IF POSSIBLE === " . $event->attribute( 'contentobject_id' ) . " - " . $event->attribute( 'name' ) . " = " . $course_string );
			}
		}
		
			if($course_id == NULL){
				// if no course attached to event... search for course in list and attach it again
		
				$prices = $db->arrayQuery( "SELECT      courses.id, fee, currency_id, currencies.code, courses.code
	                                                                                                        FROM course_fees
	                                                                                                        LEFT JOIN courses ON courses.id = course_fees.course_id
	                                                                                                        LEFT JOIN currencies ON currencies.id = course_fees.currency_id
	                                                                                        WHERE courses.lms_course_id = '" . $course_id . "' AND language = 'en'" );
		
				
				
				if(count( $prices ) > 0){
		
					$params = array(        'AttributeFilter'          => array(array('349' , 'like', $prices[0]['code']) ) ,
							'ClassFilterType'          => 'include',
							'ClassFilterArray'         => array('course'),
					);
		
				}
				else{
					$cli->output( "No Price found: " . $event->attribute( 'contentobject_id' ) . " - " . $event->attribute( 'name' ) .  " ==== SELECT      courses.id, fee, currency_id, currencies.code, courses.code
	                                                                                                        FROM course_fees
	                                                                                                        LEFT JOIN courses ON courses.id = course_fees.course_id
	                                                                                                        LEFT JOIN currencies ON currencies.id = course_fees.currency_id
	                                                                                        WHERE courses.lms_course_id = '" . $course_id . "' AND language = 'en'");
					
					continue;
				}
		
				$course_object_id = $course_delimiter = '';
		
				$courses = eZContentObjectTreeNode::subTreeByNodeID($params, $courseParentNodeID );
		
				// Update related course to event
				foreach($courses as $course){
					$courseDM =  $course->attribute( 'data_map' );
		
					$course_code = $courseDM['course_code']->fromString( '' );
		
					$course_id = $course->attribute( 'contentobject_id' );
					$course_object_id .= $course_delimiter . $course_id;
					$course_delimiter = '-';
				}
		
				$dataMap['course']->fromString( $course_object_id );
				$dataMap['course']->store();
				
			}
	
			$course_obj = eZContentObject::fetch( $course_id );
			$courseDM = $course_obj->attribute('data_map');
			
			// Forcing dynamic VAT
			$course_price = explode('|', $courseDM['price']->toString());
			
			$course_price[0] = '-1';
			$course_price[1] = '2';
			
			$course_prices = implode('|', $course_price );
			
			$courseDM['price']->fromString( 	$course_prices );
			$courseDM['price']->store();
			// End of forced dynamic VAT
				
			$dataMap['price']->fromString( 	$course_prices );
			$dataMap['price']->store();
		
		if ( $event )
		{
			$cli->output( '===========================' );
			$cli->output( "Object Updated : " . $event->attribute( 'id' ) );
			$cli->output( "Name: ".  $event->attribute( 'name' ) );
			$cli->output( "Event Price: ".  $dataMap['price']->toString() );
		}
		eZContentObject::clearCache();
	}
}

// once all the prices have been updated then update the autoprice products 
eZMultiPriceData::updateAutoprices();


?>