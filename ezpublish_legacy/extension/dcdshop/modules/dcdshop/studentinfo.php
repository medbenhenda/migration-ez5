<?php
/**
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.8
 * @package kernel
 */

$db = eZDB::instance();

$UserID = $Params['UserID'];

//Create Moodle Object
$moodle 		= new Moodle;
//Get Enrolled User Info
$mdl_user_info		= $moodle->getUserInfo( $UserID );

$tpl = eZTemplate::factory();
$tpl->setVariable( "user_info", $mdl_user_info );

$Result = array();
$Result['content'] = $tpl->fetch( "design:shop/studentinfoview.tpl" );
$Result['path'] = array( array( 'url' => false,
		'text' => ezpI18n::tr( 'dcdshop/studentinfo', 'View Student Information' ) ),
		array( 'url' => false,
				'text' => ezpI18n::tr( 'dcdshop/studentinfo', 'View Student Information' ) ) );
?>