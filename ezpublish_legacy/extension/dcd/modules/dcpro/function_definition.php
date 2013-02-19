<?php
//
//

$FunctionList = array();

$FunctionList['get_courses'] = array( 'name' => 'waiting',
                                  'operation_types' => array( 'read' ),
                                  'call_method' => array( 'include_file' => 'extension/ezflow/modules/ezflow/functioncollection.php',
                                                          'class' => 'dcProFunctionCollection',
                                                          'method' => 'fetchCourses' ),
                                  'parameter_type' => 'standard',
                                  'parameters' => array(
                                  		
                                  ) );

?>