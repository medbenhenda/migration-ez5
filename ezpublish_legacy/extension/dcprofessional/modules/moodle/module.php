<?php

/**
 * File containing the dcdPro module definition.
 *
 * @package moodle
 */

$Module = array( 	'name' => 'Moodle', 
					'variable_params' => true );

$ViewList = array();

$ViewList["enrolstudent"] = array(
		"script" => "enrolstudent.php",
		"params" => array( "email", "name" ) );

$FunctionList = array();
$FunctionList['administrate'] = array( );
$FunctionList['buy'] = array( );

?>
