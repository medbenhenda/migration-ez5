<?php

$parentNodeID = '769';
$courseParentNodeID = '65';

$events = eZContentObjectTreeNode::subTreeByNodeID( array(), $parentNodeID );
$db = eZDB::instance( );
$cli = eZCLI::instance();

foreach($events as $event)
{
	
	$dataMap = $event->attribute( 'data_map' );
	$start_date = $dataMap['from_time_old']->toString();
	
	$dataMap['from_time']->fromString( 	$start_date );
	$dataMap['from_time']->store();
		
		if ( $event )
		{
			$cli->output( '===========================' );
			$cli->output( "Object Updated : " . $event->attribute( 'id' ) );
			$cli->output( "Name: ".  $event->attribute( 'name' ) );
			$cli->output( "Old Date: ".  $dataMap['from_time_old']->toString() );
			$cli->output( "Date: ".  $dataMap['from_time']->toString() );
		}
		eZContentObject::clearCache();
// 	}
}

// once all the prices have been updated then update the autoprice products 
eZMultiPriceData::updateAutoprices();


?>