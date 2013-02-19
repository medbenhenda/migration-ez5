<?php
/**
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.8
 * @package kernel
 */

$module = $Params['Module'];
$http = eZHTTPTool::instance();

/* Adding discount codes */

if ( $http->hasVariable( "discount" ) )
{
	$params = array(
			'AttributeFilter'	=> array(array( '490', '=', $http->variable( "discount" ) )),
			'ClassFilterType'          => 'include',
			'ClassFilterArray'         => array('discount'),
	);
	
	$dcpro_ini = eZIni::instance('dcpro.ini');
	$discount_home = $dcpro_ini->variable( 'dcdNodes', 'DiscountHome' );
	$discounts = eZContentObjectTreeNode::subTreeByNodeID( $params, $discount_home ); 
	
	$discount_codes = eZPreferences::value( 'user_discount_code' ) ;
	$discount_delimiter = "|";
	
	if(!isset( $discount_codes ) || $discount_codes == null){
		$discount_codes = $discount_delimiter = "";
	}
	
	foreach($discounts as $discount){
		if( strstr($discount_codes, $discount->attribute('node_id') ) == false ){ 
			$discount_codes .= $discount_delimiter . $discount->attribute('node_id');
			$discount_delimiter = '|';
		}
	}
	
	eZPreferences::setValue( 'user_discount_code', $discount_codes );
	$discount_applied = dcdShop::applyDiscounts( $discount_codes  );
	
}

/* remove of discount codes */
if ( $http->hasVariable( "remove_discount" ) && $http->hasVariable( "discount_id" ))
{
	$remove_discount_id = $http->variable( "discount_id" );
	
	$discount_array = explode("|", eZPreferences::value( 'user_discount_code' ) );
	$discount_delimiter = '';
	
	$discount_codes = "";
	foreach($discount_array as $discount)
	{
		if($discount == $remove_discount_id) continue;
	
		$discount_codes .= $discount_delimiter . $discount;
		$discount_delimiter = '|';
	}
	
	eZPreferences::setValue( 'user_discount_code', $discount_codes );

}


$module->redirectTo( '/dcdshop/basket' );

?>
