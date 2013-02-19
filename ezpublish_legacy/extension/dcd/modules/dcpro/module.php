<?php

/**
 * File containing the dcdPro module definition.
 *
 * @package dcdpro
 */

$Module = array( 'name' => 'dcpro', 'variable_params' => true );

$ViewList = array();
$ViewList['course'] = array('script' => 'course.php' );
$ViewList['search'] = array('script' => 'search.php' ,
							'params' => array( ),
    						'unordered_params' => array( 'offset' => 'Offset' ) );

$ViewList['advancedsearch'] = array('script' => 'advancedsearch.php',
								    'params' => array( 'ViewMode' ),
						    		'unordered_params' => array( 'offset' => 'Offset' )	 );

$ViewList['booking'] = array('script' => 'booking.php' );

$ViewList['enrollment'] = array('script' => 'enrollment.php' );

$ViewList['success'] = array('script' => 'success.php' ,
							 'params' => array( 'ProductID' ));

$ViewList['change_country'] 	= array('script' => 'change_country.php'  ,
		'params' => array( 'EntityID', 'CountryName' ) );

$ViewList['change_language'] = array('script' => 'change_language.php' ,
		'params' => array( 'Language' ));


?>
