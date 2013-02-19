<?php

class Financial {

    public $vatRegexRules;

    public function __construct( )
    {
        $this->vatRegexRules = array(
            "AT" => "/^AT[\- ]?[U]{0,1}[0-9]{8}$/",
            "BE" => "/^BE[0-1]{1}[0-9]{9}$|^((BE)|(BE ))[0-1]{1}(\d{3})([.]{1})(\d{3})([.]{1})(\d{3})$/",
            "BG" => "/^BG[\- ]?([0-9]{9}|[0-9]{10})$/",
            "CY" => "/^CY[\- ]?[0-9]{8}[A-Z]$/",
            "CZ" => "/^CZ[\- ]?[0-9]{8,10}$/",
            "DE" => "/^DE[\- ]?[0-9]{9}$/",
            "DK" => "/^DK[\- ]?([0-9]{2}\ ?){3}[0-9]{2}$/",
            "EE" => "/^EE[\- ]?[0-9]{9}$/",
            "EL" => "/^EL[\- ]?[0-9]{9}$/",
            "ES" => "/^ES[\- ]?([0-9A-Z][0-9]{7}[A-Z])|([A-Z][0-9]{7}[0-9A-Z])$/",
            "FI" => "/^FI[\- ]?[0-9]{8}$/",
            "FR" => "/^FR[\- ]?[0-9A-Z]{2}\ ?[0-9]{9}$/",
            "GB" => "/^GB[\- ]?([1-9][0-9]{2}\ ?[0-9]{4}\ ?[0-9]{2})|([1-9][0-9]{2}\ ?[0-9]{4}\ ?[0-9]{2}\ ?[0-9]{3})|((GD|HA)[0-9]{3})$/",
            "HU" => "/^FI[\- ]?[0-9]{8}$/",
            "IE" => "/^IE[\- ]?[0-9][0-9A-Z\+\*][0-9]{5}[A-Z]$/",
            "IT" => "/^IT[\- ]?[0-9]{11}$/",
            "LT" => "/^LT[\- ]?([0-9]{9}|[0-9]{12})$/",
            "LU" => "/^LU[\- ]?[0-9]{8}$/",
            "LV" => "/^LV[\- ]?[0-9]{11}$/",
            "MT" => "/^MT[\- ]?[0-9]{8}$/",
            "NL" => "/^NL[\- ]?[0-9]{9}B[0-9]{2}$/",
            "PL" => "/^PL[\- ]?[0-9]{10}$/",
            "PT" => "/^PT[\- ]?[0-9]{9}$/",
            "RO" => "/^RO[\- ]?[0-9]{8}$/",
            "SE" => "/^SE[\- ]?[0-9]{12}$/",
            "SI" => "/^SI[\- ]?[0-9]{8}$/",
            "SK" => "/^SK[\- ]?[0-9]{10}$/"
        );
    }

    /**
	 * Determines the validity of a EC VAT Tax Number
	 *
	 * @return bool
	 * @author Daniel Noel-Davies
	 * @since  2012-03-27
     *
     * @param  $code    string     Alpha Numeric EC VAT Tax Number
     *
	 */
    public function validateTaxNumber( $vatTaxNumber )
    {
        foreach( $this->vatRegexRules as $id => $vatRule )
        {
        	// Added 'i' for making the tax code regular expression rule case insensitive 
            if( preg_match( $vatRule . 'i', $vatTaxNumber ) )
            {
            	return true;
            }
        }
        return false;
    }
}
?>