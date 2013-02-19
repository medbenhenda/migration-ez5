<?php

/**
 * File containing the dcdPro module definition.
 *
 * @package dcdpro
 */

$Module = array( 'name' => 'course', 'variable_params' => true );

$ViewList = array();

$ViewList['book'] 		= array('script' => 'book.php',
		    					'params' => array( 'courseID', 'eventID') );

$ViewList['booking'] 	= array('script' => 'booking.php' );
$ViewList['discounts'] 	= array('script' => 'discounts.php' );
$ViewList['login'] 		= array('script' => 'login.php' );
$ViewList['register'] 	= array('script' => 'register.php' );
$ViewList['vouchers'] 	= array('script' => 'vouchers.php' );


?>
