<?php
/**
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.8
 * @package kernel
 */

$http = eZHTTPTool::instance();

$contentInfoArray = array();
$tpl = eZTemplate::factory();

$tpl->setVariable( 'persistent_variable', false );

$Result = array();
$Result['content'] = $tpl->fetch( "design:content/booking.tpl" );
$Result['path'] = array( array( 'text' => ezpI18n::tr( 'kernel/content', 'Search' ),
                                'url' => false ) );

$contentInfoArray['persistent_variable'] = false;
if ( $tpl->variable( 'persistent_variable' ) !== false )
	$contentInfoArray['persistent_variable'] = $tpl->variable( 'persistent_variable' );

$Result['content_info'] = $contentInfoArray;

?>
