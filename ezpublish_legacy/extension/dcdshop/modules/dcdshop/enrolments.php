<?php
/**
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.8
 * @package kernel
 */

$db = eZDB::instance();

$ProductID = $Params['ProductID'];
$UserID = $Params['UserID'];
$order = $Params['Order'];

$enrolments = $db->arrayQuery( 'SELECT * FROM dcd_enrolments
									LEFT JOIN ezuser ON ezuser.contentobject_id = dcd_enrolments.ez_user_id');



//Add values to array
foreach( $enrolments as $key => $enrolment ) {
	//Create Moodle Object
	$moodle = new Moodle;

	//Get Enrolled User Info
	$mdl_user_info	= $moodle->getUserInfo( $enrolments[$key]['account_user_id'] );
	$mdl_user_info['id']	= $enrolments[$key]['account_user_id'];
	
	$enrolments[$key]["order"] = eZOrder::fetch($enrolment["order_id"] ); //Pass Order Information
	$enrolments[$key]["product"] = eZContentObject::fetch($enrolment["product_id"] ); //Product Information
	
	$product_datamap = $enrolments[$key]['product']->attribute('data_map');
	
	if($product_datamap['course_id']->hasContent() ){

		//Check if user is enrolled
		$enrolment_status = $moodle->isEnroled( $enrolments[$key]['account_user_id']  , $product_datamap['course_id']->content() );
		$enrolments[$key]['enrolment_status'] = $enrolment_status;
	
	}

	$enrolments[$key]['account_user_id']  = $mdl_user_info;
}


$tpl = eZTemplate::factory();
$tpl->setVariable( "enrolments", $enrolments );

$Result = array();
$Result['content'] = $tpl->fetch( "design:shop/enrolmentlist.tpl" );
$Result['path'] = array( array( 'url' => false,
		'text' => ezpI18n::tr( 'dcdshop/enrolments', 'Manage Enrolments' ) ),
		array( 'url' => false,
				'text' => ezpI18n::tr( 'dcdshop/enrolments', 'Manage Enrolments' ) ) );

?>