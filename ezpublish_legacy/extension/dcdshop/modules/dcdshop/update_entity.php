<?php
/**
 *
 * Update User prefered country via Ajax when selecting the country of the billing address 
 * 
 *  This page is a work around due to the country selected not being updated correctly and requiring a refresh
 */

$country = $Params['country'];

eZPreferences::setValue( 'user_preferred_country', $country );
setcookie('user_country', $country, false, '/');

eZPreferences::setValue( 'basket_country', ''  );
eZPreferences::setValue( 'product_number', '0'  );
eZShopFunctions::setPreferredUserCountry($country);

eZExecution::cleanExit();

?>
