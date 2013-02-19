<?php

$parentNodeID = '65';
$courseParentNodeID = '65';

$params = array( 	
		'ClassFilterType'          => 'include',
		'ClassFilterArray'         => array('course'),
		'IgnoreVisibility' 		   => true
);

$events = eZContentObjectTreeNode::subTreeByNodeID( $params, $parentNodeID );
$db = eZDB::instance( );
$cli = eZCLI::instance();

foreach($events as $event)
{
	$dataMap = $event->attribute( 'data_map' );

	$prices = array();
	$course_code = $dataMap['course_code']->toString();
		
	$prices = $db->arrayQuery( "SELECT	course_id, fee, currency_id, currencies.code FROM course_fees LEFT JOIN courses ON courses.id = course_fees.course_id LEFT JOIN currencies ON currencies.id = course_fees.currency_id WHERE courses.code = '" . $course_code . "' AND language = 'en'" );
	$event_price = "";
	foreach($prices as $price_key => $price){
		$dataMap['price']->content()->setCustomPrice( $price["code"], $price["fee"] );
	}
	
	$dataMap['price']->store();
	
	
	foreach($prices as $price_key => $price){
		$dataMap['price']->content()->setCustomPrice( $price["code"], $price["fee"] );
	}
	
	$dataMap['price']->store();
	
	
	if ( $event )
	{
		$cli->output( '===========================' );
		$cli->output( "Object Updated : " . $event->attribute( 'id' ) );
		$cli->output( "Name: ".  $event->attribute( 'name' ) );
		$cli->output( "Course Price: ".  $dataMap['price']->toString() );
	}
	
}

?>