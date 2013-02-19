<?php

$entity_id = $Params['EntityID'];
$country_ini = eZINI::instance( 'country.ini' );

var_dump( $entity_id );

if(isset($entity_id ) && $entity_id != ''){
	
	
	if($country_ini->hasVariable($product_country, "Name")){
		$product_country = $country_ini->variable($product_country, "Name");
		eZPreferences::setValue( 'basket_country', $product_country  );
	}
	
}



eZExecution::cleanExit();

?>
