<?php

$entity_id = $Params['EntityID'];

var_dump( $entity_id );

if(isset($entity_id ) && $entity_id != ''){
	
	eZShopFunctions::setPreferredUserCountry( $entity_id );
	eZPreferences::setValue( 'entity_id', $entity_id );
	setcookie('entity_id', $entity_id, false, '/');
}



eZExecution::cleanExit();

?>
