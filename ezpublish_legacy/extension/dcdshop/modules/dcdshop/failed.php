<?php
/**
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.8
 * @package kernel
 */

$http = eZHTTPTool::instance();
$locale = eZLocale::instance();

$tpl = eZTemplate::factory();

$Result = array();
$Result['content'] = $tpl->fetch( "design:shop/success.tpl" );
$Result['path'] = array( array( 'url' => false,
                                'text' => ezpI18n::tr( 'kernel/shop', 'Success' ) ) );
?>
