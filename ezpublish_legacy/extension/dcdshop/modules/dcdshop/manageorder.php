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

$enrolments = dcdShop::fetchOrderEnrolments( $OrderID, $user->id() );

$tpl = eZTemplate::factory();

$tpl->setVariable( "order", $order );
$tpl->setVariable( "enrolments", $enrolments );
$tpl->setVariable( "user", $user);


$Result = array();
$Result['content'] = $tpl->fetch( "design:shop/manageorder.tpl" );
$Result['path'] = array( array( 'url' => 'dcdshop/manageorder',
                                'text' => ezpI18n::tr( 'kernel/shop', 'Manage Order' ) ),
                         array( 'url' => false,
                                'text' => ezpI18n::tr( 'kernel/shop', 'Manage Order #%order_id', null, array( '%order_id' => $order->attribute( 'order_nr' ) ) ) ) );

?>
