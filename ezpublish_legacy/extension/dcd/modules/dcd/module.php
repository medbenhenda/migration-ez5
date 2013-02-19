<?php

/**
 * File containing the dcdPro module definition.
 *
 * @package dcdpro
 */

$Module = array( 'name' => 'dcd', 'variable_params' => true );

$ViewList = array();
$ViewList['change_country'] 	= array('script' => 'change_country.php' ,
							 'params' => array( 'EntityID' ) );

$ViewList['change_language'] = array('script' => 'change_language.php' ,
									 'params' => array( 'Language' ));

$FunctionList = array();
$FunctionList['administrate'] = array( );

?>
