<?php
/**
 * File containing the dcdVATHandler class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.8
 * @package kernel
 */

/*!
  \class dcdVATHandler ezdefaultvathandler.php
  \brief DCD VAT handler.

  Provides specific VAT charging rules for the DCD site.
  Resulting VAT percentage may depend on product category
  and country the user is from.
*/

class dcdVATHandler
{
    /**
     * \public
     * \static
     */
	function pre_confirmorder(){
		
	}

	/**
	 * VAT Rule Calculation
	*
	* The VAT rule is linked to the product
	* 
	* Complex tax rules specific to DCD
	* 
	* Types of Products:
	* - online courses (tax based on the country of the purchase)
	* - classroom courses (tax based on the location of the session/event of the course and country of billing address)
	* 
	* - packages (to be determined)
	*  
	*
	*/
    function getVatPercent( $object, $country )
    {

    	$user_country = eZShopFunctions::getPreferredUserCountry( );
    	$dcdshop_ini = eZINI::instance( 'dcdshop.ini' );
    	$vat_countries = $dcdshop_ini->variable('VatEUCountries', 'Country');
    	
    	$user_from_eu_exempt_country = in_array($user_country, $vat_countries) ? true : false;
    	
    	$vat_rate = eZPreferences::value( 'basket_vat' );
    	$basket_country = eZPreferences::value( 'basket_country' );
    	$product_country = $basket_country; 
    	$entity_country = eZPreferences::value( 'entity_country' );
    	$valid_vat_country = eZPreferences::value( 'valid_vat_country');

    	$datamap = $object->attribute('data_map');
    	$country_ini = eZINI::instance( 'country.ini' );
    	
    	/*
    	 * Verify product country
		 *
    	 * if no country defined in product then use default basket country
    	 * 
    	 * if no default country then use user country
    	 */
   		if( isset($datamap['country']) && $datamap['country']->hasContent() )
   		{
   			$product_country = $datamap['country']->toString();
   			
   			if($country_ini->hasVariable($product_country, "Name")){
   				$product_country = $country_ini->variable($product_country, "Name");
   				eZPreferences::setValue( 'basket_country', $product_country  );
   			}
   		}
   		else{
   			if( $product_country == ''){
   				
   				$dcd_vat_rules = dcdVATHandler::getVATValues();
   				if( isset( $dcd_vat_rules[ $user_country ] ) ){
   					$product_country = $user_country;
   				}
   			}
   		}

   		// VAT Exemption rules
   		if( $product_country != $user_country || $user_country != $entity_country )	{
   			
   			
   			if(!$user_from_eu_exempt_country)
   			{
   				$vat_rate = 0;
   			}
   		}
   		
   		//Valid Country VAT exemption number && from VAT EU Exempt array
   		if( $valid_vat_country == $country && $user_from_eu_exempt_country){
   			$vat_rate = 0;
   		}
   		
   		$discount_ids = eZPreferences::value( 'user_discount_code' );
   		$discount_applied = dcdShop::applyDiscounts( $discount_ids  );
   		
        return $vat_rate ;
    }

    
    static function getVATValues(){
    	$country_ini = eZINI::instance( 'country.ini' );
    	
    	$vatRules = eZVatRule::fetchList();
    	$vatTypes = eZVatType::fetchList();
    	
    	foreach( $vatRules as $vatRule)
    	{
    		foreach($vatTypes as $vatType)
    		{
    			if($vatRule->VatType == $vatType->ID && $country_ini->hasVariable($vatRule->CountryCode, "Name")){
    				$dcd_vat_rules[$country_ini->variable($vatRule->CountryCode, "Name")] = $vatType->Percentage;
    				break;
    			}
    		}
    	}
    	return $dcd_vat_rules;
    }
    
    
    
    /**
     * Determine object's product category.
     *
     * \private
     * \static
     */
    function getProductCategory( $object )
    {
        $ini = eZINI::instance( 'shop.ini' );
        if ( !$ini->hasVariable( 'VATSettings', 'ProductCategoryAttribute' ) )
        {
            eZDebug::writeError( "Cannot find product category: please specify its attribute identifier " .
                                 "in the following setting: shop.ini.[VATSettings].ProductCategoryAttribute" );
            return null;
        }

        $categoryAttributeName = $ini->variable( 'VATSettings', 'ProductCategoryAttribute' );

        if ( !$categoryAttributeName )
        {
            eZDebug::writeError( "Cannot find product category: empty attribute name specified " .
                                 "in the following setting: shop.ini.[VATSettings].ProductCategoryAttribute" );

            return null;
        }

        $productDataMap = $object->attribute( 'data_map' );

        if ( !isset( $productDataMap[$categoryAttributeName] ) )
        {
            eZDebug::writeError( "Cannot find product category: there is no attribute '$categoryAttributeName' in object '" .
                                  $object->attribute( 'name' ) .
                                  "' of class '" .
                                  $object->attribute( 'class_name' ) . "'." );
            return null;
        }

        $categoryAttribute = $productDataMap[$categoryAttributeName];
        $productCategory = $categoryAttribute->attribute( 'content' );

        if ( $productCategory === null )
        {
            eZDebug::writeNotice( "Product category is not specified in object '" .
                                   $object->attribute( 'name' ) .
                                   "' of class '" .
                                   $object->attribute( 'class_name' ) . "'." );
            return null;
        }

        return $productCategory;
    }

    /**
     * Choose the best matching VAT type for given product category and country.
     *
     * We calculate priority for each VAT type and then choose
     * the VAT type having the highest priority
     * (or first of those having the highest priority).
     *
     * VAT type priority is calculated from county match and category match as following:
     *
     * CountryMatch  = 0
     * CategoryMatch = 1
     *
     * if ( there is exact match on country )
     *     CountryMatch = 2
     * elseif ( there is weak match on country )
     *     CountryMatch = 1
     *
     * if ( there is exact match on product category )
     *     CategoryMatch = 2
     * elseif ( there is weak match on product category )
     *     CategoryMatch = 1
     *
     * if ( there is match on both country and category )
     *     VatTypePriority = CountryMatch * 2 + CategoryMatch - 2
     * else
     *     VatTypePriority = 0
     *
     * \private
     * \static
     */
    function chooseVatType( $productCategory, $country )
    {
        $vatRules = eZVatRule::fetchList();

        $catID = $productCategory->attribute( 'id' );

        $vatPriorities = array();
        foreach ( $vatRules as $rule )
        {
            $ruleCountry = $rule->attribute( 'country_code' );
            $ruleCatIDs  = $rule->attribute( 'product_categories_ids' );
            $ruleVatID   = $rule->attribute( 'vat_type' );

            $categoryMatch = 0;
            $countryMatch  = 0;

            if ( $ruleCountry == '*' )
                $countryMatch = 1;
            elseif ( $ruleCountry == $country )
                $countryMatch = 2;

            if ( !$ruleCatIDs )
                $categoryMatch = 1;
            elseif ( in_array( $catID, $ruleCatIDs ) )
                $categoryMatch = 2;

            if ( $countryMatch && $categoryMatch )
                $vatPriority = $countryMatch * 2 + $categoryMatch - 2;
            else
                $vatPriority = 0;

            if ( !isset( $vatPriorities[$vatPriority] ) )
                $vatPriorities[$vatPriority] = $ruleVatID;
        }

        krsort( $vatPriorities, SORT_NUMERIC );


        $bestPriority = 0;
        if ( $vatPriorities )
        {
            $tmpKeys = array_keys( $vatPriorities );
            $bestPriority = array_shift( $tmpKeys );
        }

        if ( $bestPriority == 0 )
        {
            eZDebug::writeError( "Cannot find a suitable VAT type " .
                                 "for country '" . $country . "'" .
                                 " and category '" . $productCategory->attribute( 'name' ). "'." );

            return new eZVatType( array( "id" => 0,
                                         "name" => ezpI18n::tr( 'kernel/shop', 'None' ),
                                         "percentage" => 0.0 ) );
        }

        $bestVatTypeID = array_shift( $vatPriorities );
        $bestVatType = eZVatType::fetch( $bestVatTypeID );

        eZDebug::writeDebug(
            sprintf( "Best matching VAT for '%s'/'%s' is '%s' (%d%%)",
                     $country,
                     $productCategory->attribute( 'name' ),
                     $bestVatType->attribute( 'name' ),
                     $bestVatType->attribute( 'percentage' ) ) );

        return $bestVatType;
    }
}

?>
