<?php
/**
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.8
 * @package kernel
 */

$http = eZHTTPTool::instance();
$tpl = eZTemplate::factory();

$courseID = $Params['courseID'];
$eventID = $Params['eventID'];

$course = eZContentObjectTreeNode::fetch( $courseID );
$event = eZContentObjectTreeNode::fetch( $eventID );

$tpl->setVariable( "node", $course );
$tpl->setVariable( "event", $event );

$contentInfoArray = array();

$tpl->setVariable( 'persistent_variable', false );

$Result = array();
$Result['content'] = $tpl->fetch( "design:course/book.tpl" );
$Result['path'] = array( array( 'text' => ezpI18n::tr( 'dcpro/book', 'Course' ),
		'url' => false ) );

$contentInfoArray['persistent_variable'] = false;
if ( $tpl->variable( 'persistent_variable' ) !== false )
	$contentInfoArray['persistent_variable'] = $tpl->variable( 'persistent_variable' );

$Result['content_info'] = $contentInfoArray;

?>
