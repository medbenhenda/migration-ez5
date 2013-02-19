<?php
/**
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.8
 * @package kernel
 */

$OrderID = $Params['OrderID'];
$module = $Params['Module'];

$ini = eZINI::instance();
$http = eZHTTPTool::instance();
$user = eZUser::currentUser();

// The Update Address has been sent
//
if ( $http->hasPostVariable( 'UpdateAddressButton' ) )
{
	if ( $http->hasPostVariable( 'order_id' ) )
	{
		$orderID = $http->postVariable( 'order_id' );
		$order = eZOrder::fetch( $orderID );
		$accountInfo = $order->accountInformation();
		
		$doc = new DOMDocument( '1.0', 'utf-8' );
		$root = $doc->createElement( "shop_account" );
		$doc->appendChild( $root );
		
		$firstNameNode = $doc->createElement( "first-name", $http->postVariable( 'firstname' ) );
		$root->appendChild( $firstNameNode );
		
		$lastNameNode = $doc->createElement( "last-name", $http->postVariable( 'lastname' ) );
		$root->appendChild( $lastNameNode );
		
		$emailNode = $doc->createElement( "email", $http->postVariable( 'email') );
		$root->appendChild( $emailNode );
		
		$street1Node = $doc->createElement( "street1", $http->postVariable( 'street1') );
		$root->appendChild( $street1Node );
		
		$street2Node = $doc->createElement( "street2", $http->postVariable( 'street2') );
		$root->appendChild( $street2Node );
		
		$zipNode = $doc->createElement( "zip", $http->postVariable( 'zipcode') );
		$root->appendChild( $zipNode );
		
		$placeNode = $doc->createElement( "place", $http->postVariable( 'place') );
		$root->appendChild( $placeNode );
		
		$stateNode = $doc->createElement( "state", $http->postVariable( 'state') );
		$root->appendChild( $stateNode );
		
		$countryNode = $doc->createElement( "country", $http->postVariable( 'country') );
		$root->appendChild( $countryNode );

		$countryNode = $doc->createElement( "vatnumber", $http->postVariable( 'vatnumber') );
		$root->appendChild( $countryNode );
		
		$commentNode = $doc->createElement( "comment", $http->postVariable( 'comment') );
		$root->appendChild( $commentNode );
		
		$xmlString = $doc->saveXML();
		$order->setAttribute( 'data_text_1', $xmlString );
		
		$order->store();
		
	}
}

// The Update Address has been sent
//
if ( $http->hasPostVariable( 'UpdateOrderPrice' ) )
{
	if ( $http->hasPostVariable( 'order_id' ) && $http->hasPostVariable( 'item' ))
	{
		$orderID = $http->postVariable( 'order_id' );
		$order = eZOrder::fetch( $orderID );
		
		$items = $http->postVariable( 'item' );
		
		
		$productCollection = $order->attribute( 'productcollection' );
		if ( $productCollection )
		{
			$productCollection = $order->productItems();
			
			foreach($items as $item_id => $item)
			{
				foreach($productCollection as $product){
					if($product['id'] == $item_id){
	
						$obj = $product['item_object'];
						
						$obj->setAttribute( "vat_value", $item["vat"] );
						$obj->setAttribute( "item_count", $item["count"] );
						
						if( $obj->attribute('is_vat_inc') ){
							$obj->setAttribute( "price", $item["price"] );
						}
						else{
							$obj->setAttribute( "price", $item["price"] + ( ( $item["price"] / 100 ) * $item["vat"]  ) );
						}
			//			$obj->setAttribute( "discount", $item["discount"] );
		
						$obj->store();
					}
				}
			}
			
		//	$productCollection->store();
		}

	}
}

$access = false;
$order = eZOrder::fetch( $OrderID );
if ( !$order )
{
    return $module->handleError( eZError::KERNEL_NOT_AVAILABLE, 'kernel' );
}

$accessToAdministrate = $user->hasAccessTo( 'shop', 'administrate' );
$accessToAdministrateWord = $accessToAdministrate['accessWord'];

$accessToBuy = $user->hasAccessTo( 'shop', 'buy' );
$accessToBuyWord = $accessToBuy['accessWord'];

if ( $accessToAdministrateWord != 'no' )
{
    $access = true;
}
elseif ( $accessToBuyWord != 'no' )
{
    if ( $user->id() == $ini->variable( 'UserSettings', 'AnonymousUserID' ) )
    {
        if( $OrderID != $http->sessionVariable( 'UserOrderID' ) )
        {
            $access = false;
        }
        else
        {
            $access = true;
        }
    }
    else
    {
        if ( $order->attribute( 'user_id' ) == $user->id() )
        {
            $access = true;
        }
        else
        {
            $access = false;
        }
    }
}
if ( !$access )
{
     return $module->handleError( eZError::KERNEL_ACCESS_DENIED, 'kernel' );
}
$tpl = eZTemplate::factory();


$tpl->setVariable( "order", $order );

$Result = array();
$Result['content'] = $tpl->fetch( "design:shop/orderedit.tpl" );
$Result['path'] = array( array( 'url' => 'shop/orderlist',
                                'text' => ezpI18n::tr( 'kernel/shop', 'Order list' ) ),
                         array( 'url' => false,
                                'text' => ezpI18n::tr( 'kernel/shop', 'Edit Order #%order_id', null, array( '%order_id' => $order->attribute( 'order_nr' ) ) ) ) );

?>
