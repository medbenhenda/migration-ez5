<?php
/**
 * File containing the DCDShopAccountHandler class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.8
 * @package kernel
 */

class DCDShopAccountHandler
{
    function DCDShopAccountHandler()
    {

    }

    /*!
     Will verify that the user has supplied the correct user information.
     Returns true if we have all the information needed about the user.
    */
    function verifyAccountInformation()
    {
        return false;
    }

    /*!
     Redirectes to the user registration page.
    */
    function fetchAccountInformation( &$module )
    {
    	
        $module->redirectTo( '/dcdshop/userregister/' );
        
    }

    /*!
     \return the account information for the given order
    */
    function email( $order )
    {
        $email = false;
        $xmlString = $order->attribute( 'data_text_1' );
        if ( $xmlString != null )
        {
            $dom = new DOMDocument( '1.0', 'utf-8' );
            $success = $dom->loadXML( $xmlString );
            $emailNode = $dom->getElementsByTagName( 'email' )->item( 0 );
            if ( $emailNode )
            {
                $email = $emailNode->textContent;
            }
        }

        return $email;
    }

    /*!
     \return the account information for the given order
    */
    function accountName( $order )
    {
        $accountName = '';
        $xmlString = $order->attribute( 'data_text_1' );
        if ( $xmlString != null )
        {
            $dom = new DOMDocument( '1.0', 'utf-8' );
            $success = $dom->loadXML( $xmlString );
            $firstNameNode = $dom->getElementsByTagName( 'first-name' )->item( 0 );
            $lastNameNode = $dom->getElementsByTagName( 'last-name' )->item( 0 );
            $accountName = $firstNameNode->textContent . ' ' . $lastNameNode->textContent;
        }

        return $accountName;
    }

    function accountInformation( $order )
    {
        $firstName = '';
        $lastName = '';
        $email = '';
        $company = '';
        $jobtitle = '';
        $street1 = '';
        $street2 = '';
        $zip = '';
        $place = '';
        $country = '';
        $comment = '';
        $vatnumber = '';
        $state = '';
        $id_accept_terms = '';
        $password = '';
        $password_confirmation = '';

        $dom = new DOMDocument( '1.0', 'utf-8' );
        $xmlString = $order->attribute( 'data_text_1' );
        if ( $xmlString != null )
        {
            $dom = new DOMDocument( '1.0', 'utf-8' );
            $success = $dom->loadXML( $xmlString );

            $firstNameNode = $dom->getElementsByTagName( 'first-name' )->item( 0 );
            if ( $firstNameNode )
            {
                $firstName = $firstNameNode->textContent;
            }

            $lastNameNode = $dom->getElementsByTagName( 'last-name' )->item( 0 );
            if ( $lastNameNode )
            {
                $lastName = $lastNameNode->textContent;
            }

            $emailNode = $dom->getElementsByTagName( 'email' )->item( 0 );
            if ( $emailNode )
            {
                $email = $emailNode->textContent;
            }

            $companyNode = $dom->getElementsByTagName( 'company' )->item( 0 );
            if ( $companyNode )
            {
            	$company = $companyNode->textContent;
            }            

            $jobtitleNode = $dom->getElementsByTagName( 'jobtitle' )->item( 0 );
            if ( $jobtitleNode )
            {
            	$jobtitle = $jobtitleNode->textContent;
            }            
            
            $street1Node = $dom->getElementsByTagName( 'street1' )->item( 0 );
            if ( $street1Node )
            {
                $street1 = $street1Node->textContent;
            }

            $street2Node = $dom->getElementsByTagName( 'street2' )->item( 0 );
            if ( $street2Node )
            {
                $street2 = $street2Node->textContent;
            }

            $zipNode = $dom->getElementsByTagName( 'zip' )->item( 0 );
            if ( $zipNode )
            {
                $zip = $zipNode->textContent;
            }

            $placeNode = $dom->getElementsByTagName( 'place' )->item( 0 );
            if ( $placeNode )
            {
                $place = $placeNode->textContent;
            }

            $stateNode = $dom->getElementsByTagName( 'state' )->item( 0 );
            if ( $stateNode )
            {
                $state = $stateNode->textContent;
            }

            $countryNode = $dom->getElementsByTagName( 'country' )->item( 0 );
            if ( $countryNode )
            {
                $country = $countryNode->textContent;
                eZPreferences::setValue( 'user_preferred_country', $country );
                setcookie('user_country', $country, false, '/');
            }

            $vatnumberNode = $dom->getElementsByTagName( 'vatnumber' )->item( 0 );

            eZPreferences::setValue( 'valid_vat_country', '' );
            
            if ( $vatnumberNode )
            {
            	
            	$vatnumber = $vatnumberNode->textContent;
            	
            	/*
            	 * SET VAT NUMBER FOR DCD
            	 * 
            	 */
            	if ( trim( $vatnumber ) != "" )
            		{
            			$vatRules = new Financial();
            			$valid_vat_number = $vatRules->validateTaxNumber( $vatnumber );
            			 
            			if($valid_vat_number)
            				eZPreferences::setValue( 'valid_vat_country', $country );
            		}
            }
            
            $commentNode = $dom->getElementsByTagName( 'comment' )->item( 0 );
            if ( $commentNode )
            {
                $comment = $commentNode->textContent;
            }
            
            /*
             * Assigns the company ID to the order confirmation
             */
           	$company_id = eZPreferences::value( 'entity_id' );
        }

        return array( 'first_name' => $firstName,
                      'last_name' => $lastName,
                      'email' => $email,
	        		  'jobtitle' => $jobtitle,
	        		  'company' => $company,        		
                      'street1' => $street1,
                      'street2' => $street2,
                      'zip' => $zip,
                      'place' => $place,
                      'state' => $state,
                      'country' => $country,
        			  'vatnumber' => $vatnumber,
                      'comment' => $comment,
        			  'company_id' => $company_id,
                      );
    }
}

?>
