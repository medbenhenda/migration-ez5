<?php

/**
 * File containing the dcdPro module definition.
 *
 * @package dcdpro
 */

$Module = array( 	'name' => 'dcdShop', 
					'variable_params' => true );

$ViewList = array();

$ViewList["clear_and_add"] = array(
		"functions" => array( 'buy' ),
		"script" => "clear_and_add.php",
		"default_navigation_part" => 'ezshopnavigationpart',
		"params" => array( "ObjectID", "Quantity" ) );

$ViewList["basket"] = array(
			    "functions" => array( 'buy' ),
			    "script" => "basket.php",
			    "default_navigation_part" => 'ezmynavigationpart',
			    'unordered_params' => array( 'error' => 'Error' ),
			    "params" => array(  ) );

$ViewList["confirmorder"] = array(
		"functions" => array( 'buy' ),
		"script" => "confirmorder.php",
		"default_navigation_part" => 'ezshopnavigationpart',
		"params" => array(  ) );

$ViewList["userregister"] = array(
			    "functions" => array( 'buy' ),
			    "script" => "userregister.php",
			    'ui_context' => 'edit',
			    "default_navigation_part" => 'ezshopnavigationpart',
			    'single_post_actions' => array( 'StoreButton' => 'Store',
			                                    'CancelButton' => 'Cancel'
			                                    )
			    );

$ViewList['discount'] = array(
				'functions' => array( 'buy' ),
				'script' => 'setdiscount.php',
				'single_post_actions' => array( 'ApplyButton' => 'Apply' ),
				'params' => array( 'discount' => 'Discount'  ) );

$ViewList['setvoucher'] = array(
				'functions' => array( 'buy' ),
				'script' => 'setvoucher.php',
				'default_navigation_part' => 'ezshopnavigationpart',
				'single_post_actions' => array( 'ApplyButton' => 'A' ),
				'post_action_parameters' => array( 'Set' => array( 'Country' => 'Country' ) ),
				'unordered_params' => array( 'country' => 'Country' ),
				'params' => array(  ) );

$ViewList["manageorder"] = array(
		"functions" => array( 'buy' ),
		"script" => "manageorder.php",
		"params" => array( "OrderID" ) );

$ViewList["enrolstudent"] = array(
		"script" => "enrolstudent.php",
		"params" => array( "email", "name" ) );

$ViewList['success'] = array(
				'script' => 'success.php',
				'params' => array(  ) );

$ViewList['failed'] = array(
		'script' => 'failed.php',
		'params' => array(  ) );

$ViewList['sync_events_prices'] = array(
						'script' => 'sync_events_prices.php',
						'params' => array(  ) );

$ViewList["clear_basket"] = array(
		"functions" => array( 'buy' ),
		"script" => "clear_basket.php" );

$ViewList["update_entity"] = array(
		"functions" => array( 'buy' ),
		"script" => "update_entity.php",
		'params' => array( 'country' )  );

$ViewList['dashboard'] = array('script' => 'dashboard.php',
		"functions" => array( 'administrate' ),
		"default_navigation_part" => 'ezshopnavigationpart',
		"params" => array( "CustomerID", "Email" ));

$ViewList['orderedit'] = array('script' => 'orderedit.php',
		"functions" => array( 'administrate' ),
		"default_navigation_part" => 'ezshopnavigationpart',
    	"params" => array( "OrderID" ) );

$ViewList['lms_enrolments'] = array('script' => 'lms_enrolments.php',
		"functions" => array( 'administrate' ),
		"default_navigation_part" => 'ezshopnavigationpart',
		"unordered_params" => array( 'offset' => 'Offset'  ));

$ViewList['studentinfoview'] = array('script' => 'studentinfo.php',
		"functions" => array( 'administrate' ),
		"default_navigation_part" => 'ezshopnavigationpart',
		"params" => array("UserID"));

$ViewList['checkaccount'] = array('script' => 'checkaccount.php',
		"functions" => array( 'buy' ),
		"default_navigation_part" => 'ezshopnavigationpart',
		"params" => array("email"));

$ViewList['vouchers'] = array('script' => 'vouchers.php',
								"default_navigation_part" => 'ezshopnavigationpart',
								"functions" => array( 'administrate' ),
								"unordered_params" => array( 'offset' => 'Offset'  ),	);

$FunctionList = array();
$FunctionList['administrate'] = array( );
$FunctionList['buy'] = array( );

?>