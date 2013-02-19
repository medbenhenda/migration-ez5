<?php

$parentNodeID = '769';
$courseParentNodeID = '65';

$events = eZContentObjectTreeNode::subTreeByNodeID( array(), $parentNodeID );
$db = eZDB::instance( );
$cli = eZCLI::instance();

// initialise Vat rules array
$vatList = eZVatRule::fetchList();
$varRules = array();

foreach($vatList as $rule){
	$varRules[ $rule->CountryCode ] = $rule->VatType ;
}

$ini = eZINI::instance( 'country.ini' );
$countries = $ini->getNamedArray();
eZCountryType::fetchTranslatedNames( $countries );
$GLOBALS['CountryList'] = $countries;

foreach($events as $event)
{
	
	$dataMap = $event->attribute( 'data_map' );
	$country = 		$dataMap['country']->toString();
	$country_name = $dataMap['country_name']->toString();

	$country_result = $db->arrayQuery( "SELECT	* FROM countries WHERE countries.name = '" .  $db->escapeString( $country_name ) . "'" );


	
	$found = false;
	$country_array = "";
	$country_exp = explode(",", $country_name);
	$country_array = explode(" of", $country_name);
	$country_array2 = explode(" ", $country_name);
	
	/*
	 * one shot country detection
	 * 
	 * UK and Irland detected in wrong order
	 * Some countries missing in Moodle
	 *  
	*/
	foreach($GLOBALS['CountryList'] as $item)
	{		
		if($country_array2[count($country_array2) - 1] == $item["Name"] ){
			$found = true;
			$country_name = $country_array2[count($country_array2) - 1];
			break;
		}
	}
	
	foreach($GLOBALS['CountryList'] as $item)
	{
		if($country_name == "Amsterdam" ){
			$found = true;
			$country_name = "Netherlands";
			break;
		}
		
		if($country_name == "UAE" ){
			$found = true;
			$country_name = "United Arab Emirates";
			break;
		}
		$town_name = $dataMap['city']->toString();
		
		if($country_array2[count($country_array2) - 1] == "Arabia" || $town_name == "Abu Dhabi"){
			$found = true;
			$country_name = "United Arab Emirates";
			break;
		}
		
	}
		
	foreach($GLOBALS['CountryList'] as $item)
	{
		switch($town_name){
			case "Sydney":
				{
				$found = true;
				$country_name = "Australia";
				break 2;
				}
			case "Bogota":
				{
					$found = true;
					$country_name = "Colombia";
					break 2;
				}
			case "Singapore":
				{
					$found = true;
					$country_name = "Singapore";
					break 2;
				}					
			case "Buenos Aires":
				{
					$found = true;
					$country_name = "Argentina";
					break 2;
				}				
		}
		
	}
	
	foreach($GLOBALS['CountryList'] as $item)
	{
		if($country_exp[0] == $item["Name"] ){
			$found = true;
			$country_name = $country_exp[0];
			break;
		}
	}
	
	foreach($GLOBALS['CountryList'] as $item)
	{
		if($country_name == $item["Name"])
		{
			$found = true;
			break;
		}
	}	
	
	foreach($GLOBALS['CountryList'] as $item)
	{
		if($country_array[0] == $item["Name"] ){
			$found = true;
			$country_name = $country_array[0];
			break;
		}
	}	
	
	if($found){

		$dataMap['country']->fromString( $country_name );
		$dataMap['country']->store();
		
	}else{
	//	echo "\n -- " . $country_array[0] ;
		$cli->output("Country Not Found: " . $country_name);
		$cli->output( "Name: ".  $event->attribute( 'name' ) );
		$cli->output( "ContentObject ID: ".  $event->attribute( 'contentobject_id' ) );
		$cli->output( "Node ID: ".  $event->attribute( 'node_id' ) );
		$cli->output( "Town Name: ".  $town_name );
		$cli->output( "Country Name: ".  $country_name );
	}
		
}

?>