<?php
/**
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.8
 * @package kernel
 */

$db = eZDB::instance();
$http = eZHTTPTool::instance();
$dcdshop_ini = eZINI::instance( 'dcdshop.ini' );

if ( $http->hasPostVariable( 'SaveOrderStatusButton' ) )
{
	foreach ( $http->postVariable( 'StatusList' ) as $orderID => $statusID )
	{
		$order = eZOrder::fetch( $orderID );
		$access = $order->canModifyStatus( $statusID );
            
		if ( $access && $order->attribute( 'status_id' ) != $statusID )
		{
			$order->modifyStatus( $statusID );
		}
	}
}

if( isset( $_GET["csv"] ) && $_GET["csv"] == "true" ){
	$limit_sql = "";
}else{
	$offset = isset( $Params['Offset']) && $Params['Offset'] != false ? $Params['Offset'] : 0;
	$limit   = eZPreferences::value( 'lmslist_limit' ) ? eZPreferences::value( 'lmslist_limit' ) : 10;
	
	$limit_sql = " LIMIT " . $offset . ", " . $limit;
}
	
$sort_field  = eZPreferences::value( 'lmslist_sortfield' ) ? eZPreferences::value( 'lmslist_sortfield' ) : 'time';
$sort_order = eZPreferences::value( 'lmslist_sortorder') ? eZPreferences::value( 'lmslist_sortorder')  : 'desc';

$product_filter = eZPreferences::value( 'lmslist_productfilter') ? eZPreferences::value( 'lmslist_productfilter')  : 'desc';

$sort_sql = '';
switch($sort_field){
	case 'time':
		$sort_sql = " ORDER BY ezorder.created " . $sort_order;		
	 break;
	case 'session':
		$sort_sql = " ORDER BY ezproductcollection_item.name " . $sort_order;
	 break;
	case 'customer':
		$sort_sql = " ORDER BY ezorder.email " . $sort_order;
	break;
	case 'price':
		$sort_sql = " ORDER BY ezproductcollection_item.price " . $sort_order;
		break;	
}

$filter_sql = '';
$productClass   = eZPreferences::value( 'lmslist_productfilter' ) ? eZPreferences::value( 'lmslist_productfilter' ) : 'all';
if ( $http->hasPostVariable( "ProductClass" ) )
{
	$productClass = $http->postVariable( "ProductClass" );
}

$productClassList = eZShopFunctions::productClassList();

$filter_sql = $filter_condition = "";

if ( count( $productClassList ) > 0 )
{
	if ( $productClass )
	{
		foreach( $productClassList as $productClassItem )
		{
			if ( $productClassItem->attribute( 'identifier' ) === $productClass )
			{
				$filter_sql 		= " LEFT JOIN ezcontentobject ON ezcontentobject.id = ezproductcollection_item.contentobject_id
								   			LEFT JOIN ezcontentclass ON ezcontentobject.contentclass_id = ezcontentclass.id";
				$filter_condition 	= " AND ezcontentclass.identifier = '$productClass' ";
				break;
			}
		}
	}
}

/**
* TODO finalise region filter
*
*/
$regionFilter   = eZPreferences::value( 'lmslist_regionfilter' ) ?  eZPreferences::value( 'lmslist_regionfilter' ) : 'all';
if ( $http->hasPostVariable( "RegionFilter" ) )
{
	$regionFilter = $http->postVariable( "RegionFilter" );
	eZPreferences::setValue( 'lmslist_countryfilter', $regionFilter );
}

$country_list = $db->arrayQuery( "SELECT DISTINCT (data_text) as name FROM `ezcontentobject_attribute` WHERE `contentclassattribute_id` = 568 AND data_text != '' ORDER BY name");
$countryFilter   = eZPreferences::value( 'lmslist_countryfilter' ) ?: 'all';
if ( $http->hasPostVariable( "CountryFilter" ) )
{
	$countryFilter = $http->postVariable( "CountryFilter" );
	eZPreferences::setValue( 'lmslist_countryfilter', $countryFilter );
}

if ( $countryFilter )
{
	$eventsCountryAttrID = $dcdshop_ini->variable('DCDIDs', 'EventsCountryAttrID');
	
	foreach( $country_list as $country )
	{
		if ( $country['name'] == $countryFilter )
		{
			$filter_sql 		.= " LEFT JOIN ezcontentobject ON ezcontentobject.id = ezproductcollection_item.contentobject_id
									 LEFT JOIN ezcontentobject_attribute ON ezcontentobject.id = ezcontentobject_attribute.contentobject_id
								   	 AND ezcontentobject_attribute.contentclassattribute_id = " . $eventsCountryAttrID;
			$filter_condition 	.= " AND ezcontentobject_attribute.data_text = '$countryFilter' ";
			break;
		}
	}
}

$city_list = $db->arrayQuery( "SELECT DISTINCT (data_text) as name FROM `ezcontentobject_attribute` WHERE `contentclassattribute_id` = 429 AND data_text != '' ORDER BY name");
$cityFilter   = eZPreferences::value( 'lmslist_cityfilter' ) ? eZPreferences::value( 'lmslist_cityfilter' ) : 'all';
if ( $http->hasPostVariable( "CityFilter" ) )
{
	$cityFilter = $http->postVariable( "CityFilter" );
	eZPreferences::setValue( 'lmslist_cityfilter', $cityFilter );
}

if ( $cityFilter )
{
	$EventsCityAttrID = $dcdshop_ini->variable('DCDIDs', 'EventsCityAttrID');
	
	foreach( $city_list as $city )
	{
		if ( $city['name'] == $cityFilter )
		{
			$filter_sql 		.= " LEFT JOIN ezcontentobject ON ezcontentobject.id = ezproductcollection_item.contentobject_id
									 LEFT JOIN ezcontentobject_attribute ON ezcontentobject.id = ezcontentobject_attribute.contentobject_id
								   	 AND ezcontentobject_attribute.contentclassattribute_id = " . $EventsCityAttrID;
			$filter_condition 	.= " AND ezcontentobject_attribute.data_text = '$cityFilter' ";
			break;
		}
	}
}

$textFilter   = eZPreferences::value( 'lmslist_textfilter' ) ? eZPreferences::value( 'lmslist_textfilter' ) : '';
if ( $http->hasPostVariable( "TextFilter" ) )
{
	$textFilter = $http->postVariable( "TextFilter" );
	eZPreferences::setValue( 'lmslist_textfilter', $textFilter );
}

if ( $textFilter )
{
	if( ( (string) $textFilter) === ((string)(int) $textFilter) ){
		$filter_condition 	.= " AND ezorder.order_nr = '$textFilter' ";
	}
	else{
			$filter_condition 	.= " AND ezorder.email LIKE '%$textFilter%' ";
	}
}


$region_list = array('Middle East And Africa', 'Asia Pacific', 'Mainland Europe', 'North America', 'Latin America', 'Oceania', 'Antartica', 'United Kingdom');

$orders = $db->arrayQuery( "SELECT * FROM ezproductcollection_item
								LEFT JOIN ezorder ON ezorder.productcollection_id = ezproductcollection_item.productcollection_id"
							. $filter_sql 
							. " WHERE ezorder.order_nr != 0 " 
								. $filter_condition
								. $sort_sql
								. $limit_sql
								);

$orders_count = $db->arrayQuery( 'SELECT count( * ) as count FROM ezproductcollection_item
								LEFT JOIN ezorder ON ezorder.productcollection_id = ezproductcollection_item.productcollection_id '
								. $filter_sql
								. ' WHERE ezorder.order_nr != 0 '
								. $filter_condition
							);

$moodle = new Moodle;
foreach( $orders as $key => $order ){
	//Get Enrolment Info for Students
	
	$orders[$key]['enrolments'] = dcdShop::fetchOrderEnrolments( $order['id'], $order['user_id'], $order['contentobject_id'] );
 	$orders[$key]['enrolments']['stats'] = dcdShopOperators::get_enrolments_info($order['id'], $order['contentobject_id'], $order['user_id']) ;
	$orders[$key]["product"] = eZContentObject::fetch( $order['contentobject_id'] ); //Product Information
	$orders[$key]["order"] = eZOrder::fetch($order["id"] ); //Pass Order Information
	$product_datamap = $orders[$key]['product']->attribute( 'data_map' );
	
	//Get enrolment status
	if( isset( $orders[$key]['enrolments'][$order['contentobject_id']]) && $orders[$key]['enrolments'][$order['contentobject_id']] )
	{
		foreach( $orders[$key]['enrolments'][$order['contentobject_id']] as $user_info )
					//Check if user is enrolled
			if(isset($product_datamap['course_id']) && $product_datamap['course_id']->hasContent() ){ 
				$user_info['enrolment_status'] = $moodle->isEnroled( $user_info['id']  , $product_datamap['course_id']->content() );
			}
//     		$orders[$key]['enrolments'][$order['contentobject_id']][0] = $user_info;
	}

}

if( isset( $_GET["csv"] ) && $_GET["csv"] == "true" ){
	
	$filename = "orders_" . date( 'Ymd_Hi' );

	header( 'Content-Type: text/csv' );
	header("Content-Disposition: attachment; filename=\"$filename.csv\";" );
	header("Content-Transfer-Encoding: binary");
	
	$csv = dcdShop::ordersToCSV( $orders );
	
	echo $csv;
	
	eZExecution::cleanExit();
	
}


$contentInfoArray = array();

$tpl = eZTemplate::factory();

$tpl->setVariable( "orders", $orders );
$tpl->setVariable( "order_list_count", $orders_count[0]['count'] );
$tpl->setVariable( "limit", $limit );
$tpl->setVariable( 'product_class', $productClass );

$tpl->setVariable( 'regionFilter', $regionFilter );
$tpl->setVariable( 'region_list', $region_list);
$tpl->setVariable( 'countryFilter', $countryFilter );
$tpl->setVariable( 'country_list', $country_list );
$tpl->setVariable( 'cityFilter', $cityFilter );
$tpl->setVariable( 'city_list', $city_list );
$tpl->setVariable( 'textFilter', $textFilter );

$tpl->setVariable( 'product_class_list', $productClassList );
$tpl->setVariable( 'persistent_variable', false );

$viewParameters = array( 'offset' => $offset );
$tpl->setVariable( 'view_parameters', $viewParameters );

$Result = array();
$Result['content'] = $tpl->fetch( "design:shop/lms_enrolmentlist.tpl" );
$Result['path'] = array( array( 'url' => false,
		'text' => ezpI18n::tr( 'dcdshop/enrolments', 'Manage Enrolments' ) ),
		array( 'url' => false,
				'text' => ezpI18n::tr( 'dcdshop/enrolments', 'Manage Enrolments' ) ) );

$contentInfoArray['persistent_variable'] = false;
if ( $tpl->variable( 'persistent_variable' ) !== false )
	$contentInfoArray['persistent_variable'] = $tpl->variable( 'persistent_variable' );

$Result['content_info'] = $contentInfoArray;


?>