<?php
/**
 * File containing the dcdShop class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.8
 * @package kernel
 */

class dcdShop
{
    function dcdShop()
    {
    }

    static function setBasketEntity( $basket )
    {
    
    	$params = array(	'ClassFilterType'          => 'include',
			    			'ClassFilterArray'         => array('company'),
    						'SortBy' 				   =>  array( 'priority', true ),
			    			'IgnoreVisibility' 		   => true
    	);
    	
  
    	$dcpro_ini = eZINI::instance('dcpro.ini');
    	$company_home = $dcpro_ini->variable( 'dcdNodes', 'CompanyHome' );
    	$companies = eZContentObjectTreeNode::subTreeByNodeID( $params, $company_home );
    	$country_ini = eZINI::instance( 'country.ini' );
    	$dcd_vat_rules = dcdVATHandler::getVATValues();
    	/**
    	 * 1) check if there is a product from a country in the basket 
    	 */
    	foreach($basket->items() as $item)
    	{
    		$datamap = $item['item_object']->attribute('contentobject')->attribute('data_map');
    		/*
    		 * The entity is based on the first product which countains a country attribute
    		*  */
    		if(isset($datamap['country']))
    		{
    		 	$item_country = $datamap['country']->toString();
   			
	   			if($country_ini->hasVariable($item_country, "Name")){
	   				$item_country = $country_ini->variable($item_country, "Name");
	   			}
	   			$item_country = dcdShop::select_default_country( $item_country, $companies );
    			
	   			if($item_country != false){
	   				return $item_country;
	   			}
    		}
    	}

    	/**
    	 * 2) Else use the Country from the Country selection overlay
    	*/
    	if(isset($_COOKIE['user_country']) && $_COOKIE['user_country'] != '' && $_COOKIE['user_country'] != null){
    		$item_country = dcdShop::select_default_country( $_COOKIE['user_country'], $companies );
    		if($item_country != false){
    			return $item_country;
    		}
    	}
    	
    	/**
    	 * 3) Else use the Default country in defined in the dcdshop.ini Setting file 
    	*/
    	
    	$dcdshop_ini = eZINI::instance( 'dcdshop.ini' );
    	$default_country = $dcdshop_ini->variable( 'dcdShop', 'DefaultCountry' );
    	$default_currency = $dcdshop_ini->variable( 'dcdShop', 'DefaultCurrency' );
    	$default_company_id = $dcdshop_ini->variable( 'dcdShop', 'DefaultCompanyID' );
    	 
    	if( isset( $dcd_vat_rules[ $default_country ] ) ){
    		eZPreferences::setValue( 'basket_vat', $dcd_vat_rules[ $default_country ]  );
    	}
    	
    	eZPreferences::setValue( 'user_preferred_country', $default_country );
    	eZPreferences::setValue( 'entity_country', $default_country );
    	
    	eZShopFunctions::setPreferredCurrencyCode( $default_currency );
    	eZPreferences::setValue( 'entity_id', $default_company_id );
    	
		return $default_country;
    }
    
    static function select_default_country( $item_country, $companies){
    	
    	$country_ini = eZINI::instance( 'country.ini' );
    	$dcd_vat_rules = dcdVATHandler::getVATValues();
    	
    	foreach($companies as $company)
    	{
    		$company_datamap = $company->attribute('data_map');
    		$company_countries = $company_datamap['entity_countries']->content();
    	
    		$entity_country = $company_datamap['country']->toString();
    	
    		if($country_ini->hasVariable($entity_country , "Name")){
    			$entity_country = $country_ini->variable($entity_country , "Name");
    		}
    	
    		/*
    		 * One company oversees a number of countries
    		*/
    		if(is_array( $company_countries['value'] )){
    			foreach($company_countries['value'] as $country_id => $company_country){
    	
    				if( $company_country["Name"] == $item_country ){
    	
    					if( isset( $dcd_vat_rules[ $entity_country ] ) ){
    						eZPreferences::setValue( 'basket_vat', $dcd_vat_rules[ $entity_country ]  );
    					}
    					else{
    						eZPreferences::setValue( 'basket_vat', 0  );
    					}
    						
    					$entity_id = $company->attribute('node_id');
    	
    					eZPreferences::setValue( 'user_preferred_country', $entity_country );
    						
    					setcookie('user_country_id', $country_id, false, '/');
    					setcookie('user_country', $item_country, false, '/');
    						
    					eZShopFunctions::setPreferredCurrencyCode( $company_datamap['currency']->toString() );
    	
    					eZPreferences::setValue( 'entity_country', $entity_country );
    					eZPreferences::setValue( 'entity_id', $entity_id );
    					setcookie('entity_id', $entity_id, false, '/');
    					setcookie('country_name', $item_country, false, '/');
    					setcookie('country_id', $country_id, false, '/');
    						
    					// break if country found in products list
    					return $item_country ;
    				}
    	
    			}
    		}
    	}
    	return false;
    }
    
    static function check_course_country( $country_name, $town_name ){
    	
	    	$ini = eZINI::instance( 'country.ini' );
	    	$countries = $ini->getNamedArray();
	    	eZCountryType::fetchTranslatedNames( $countries );
	    	$GLOBALS['CountryList'] = $countries;
    	
	    	$db = eZDB::instance( );
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
	    	
	    	return $country_name;
    }
    
    static function getDiscountsInfo( $discounts = '' ){
    	
    	if(!is_array( $discounts ) ) $discounts = explode('|', $discounts );
    	 
    	$discount_info = array(	'online_discount' => 0,
    			'classroom_discount' => 0,
    			'valid_discounts' => 0,
    	);
    	$online_discount = $classroom_discount = 0;
    	 
    	foreach($discounts as $discount_id){
    		$discount_node = eZContentObjectTreeNode::fetch( $discount_id );
    	
    		if($discount_node instanceof eZContentObjectTreeNode){
    			$discount_datamap = $discount_node->attribute('data_map');
    	
    			if( $discount_datamap["expiration"]->toString() >= time()){
    				if($discount_datamap["type"]->toString() == 'Online'){
    					$discount_info[ 'online_discount' ] += $discount_datamap["percentage"]->content();
    				}
    				else{
    					$discount_info['classroom_discount'] += $discount_datamap["percentage"]->content();
    				}
    				$discount_info['valid_discounts'] += 1;
    			}
    	
    			$discount_info['discounts'][] = array(	'node_id' 			=> $discount_id,
								    					'name' 				=> $discount_datamap["group"]->content(),
								    					'type' 				=> $discount_datamap["type"]->toString(),
								    					'percentage' 		=> $discount_datamap["percentage"]->content(),
								    					'expiration' 		=> $discount_datamap["expiration"]->toString(),
								    			//		'node' 				=> $discount_node,
    			);
    		}
    	}
    	return $discount_info;
    	
    }
    
    static function applyDiscounts( $discountCodes = '' ){
    	
    	$discount_info = dcdShop::getDiscountsInfo( $discountCodes );

    	$basket = eZBasket::currentBasket();
    	$productCollection = $basket->attribute( 'productcollection' );
    	if ( $productCollection )
    	{
    		$currencyCode = '';
    		$items = $basket->items();

    		foreach($items as $itemArray){
    			$item = $itemArray['item_object'];
    			$productContentObject = $item->attribute( 'contentobject' );

    			$productDatamap = $productContentObject->dataMap();
    			$product_type = $productContentObject->contentClassIdentifier();
    			$attributes = $productContentObject->contentObjectAttributes();
    			$price = 0.0;    
    			$priceObj = $productDatamap['price']->content();
    			
    			$price += $priceObj->attribute( 'price' );
    			
    			/**
    			 * Price conversion rating
    			 * 
    			 * If price == 0 then 
    			 * 
    			 */ 
    			if($price == 0){
    				eZMultiPriceData::updateAutoprices();
    				$price += $priceObj->attribute( 'price' );
    				
    				$item->setAttribute( "price", $priceObj->attribute( 'price' ) );
    				$item->store();
    			}
    			
    			// Apply online discounts for courses and classroom discounts for events only
    			if($product_type == 'course'){
    				$item->setAttribute( "discount", $discount_info['online_discount'] );
    				
    			}
    			elseif($product_type == 'event'){
    				$item->setAttribute( "discount", $discount_info['classroom_discount'] );
    			}
    			
    			$item->store();

    		}
    		
    		$productCollection->store();
    	}
    	
    	 return $discount_info;
    }

    static function removeDiscount( $discountCode ){
    	 
    	return false;
    }
    
    
    static function fetchOrderEnrolments( $order_id, $user_id, $product_id = false ){
    	
    	$db = eZDB::instance( );
    	$moodle     = new Moodle;
    	$user_information = array();
    	$product_filter_sql = '';
    	if($product_id)
    	{
    		$product_filter_sql = " AND product_id = '" . $product_id . "'"  ;
    	}
    	
    	$enrolments = $db->arrayQuery("SELECT * FROM dcd_enrolments WHERE order_id = '". $order_id ."' AND ez_user_id = '". $user_id . "'" . $product_filter_sql);

    	foreach($enrolments as $id => $enrolment){

    		$user_info = $moodle->getUserInfo( $enrolment["account_user_id"] );
    		$product_id = $enrolment["product_id"];
//     		$product_array = array( 'product_id' => $product_id );
    		$user_information[$product_id][] = $user_info ;

    	}
    	
    	return $user_information;
    }
    
    static function fetchVouchers( $course_id = false, $offset = 0, $limit = 10, $textFilter = '' ){
    	 
    	$db = eZDB::instance( );
    	$course_filter_sql = $type_filter_sql = $user_filter_sql = "";
    	
    	$limit_sql = " LIMIT " . $offset . ", " . $limit;
    	
    	if($course_id)
    	{
    		$course_filter_sql = " AND course_id = '" . $course_id . "'"  ;
    	}
    	 
    	$sort_field  = eZPreferences::value( 'vouchers_sortfield' ) ? eZPreferences::value( 'vouchers_sortfield' ) : 'time';
    	$sort_order = eZPreferences::value( 'vouchers_sortorder') ? eZPreferences::value( 'vouchers_sortorder')  : 'desc';
    	
    	$sort_sql = '';
    	switch($sort_field){
    		case 'time':
    			$sort_sql = " ORDER BY vouchers.timecreated " . $sort_order;
    		 break;
    		 case 'modified':
    		 	$sort_sql = " ORDER BY vouchers.timemodified " . $sort_order;
    		 	break;
    		 case 'expiry':
    		 	$sort_sql = " ORDER BY vouchers.expDate " . $sort_order;
    		 	break;
    		case 'session':
    			$sort_sql = " ORDER BY vouchers.courseType " . $sort_order;
    		 break;
    		case 'customer':
    			$sort_sql = " ORDER BY vouchers.userGroup " . $sort_order;
    			break;
    		case 'user_name':
    			$sort_sql = " ORDER BY vouchers.client_manager_email " . $sort_order;
    			break;
    	}
    	
    	if ( $textFilter != '')
    	{
    			$user_filter_sql 	.= " AND (vouchers.client_manager_email LIKE '%" . mysql_real_escape_string( $textFilter ) . "%' OR vouchers.dcd_staff_email LIKE '%" . mysql_real_escape_string( $textFilter ) . "%' )";
    	}
    	
    	
    	$vouchers = $db->arrayQuery("SELECT vouchers.*, courses_text.title, courses.code FROM vouchers 
    										LEFT JOIN courses_text ON courses_text.course_id = vouchers.courseid
    			    						LEFT JOIN courses ON vouchers.courseid = courses.id 
    										WHERE 1 = 1 " 
    									. $course_filter_sql 
    									. $type_filter_sql 
    									. $user_filter_sql
    									. $sort_sql
    									. $limit_sql);
    	
    	$vouchers_count = $db->arrayQuery("SELECT count( * ) as count FROM vouchers
	    										LEFT JOIN courses_text ON courses_text.course_id = vouchers.courseid
	    			    						LEFT JOIN courses ON vouchers.courseid = courses.id
	    										WHERE 1 = 1 "
								    			. $course_filter_sql
								    			. $type_filter_sql
								    			. $user_filter_sql );
    	
    	
    	return array( 	'vouchers' => $vouchers, 
    					'vouchers_count' => $vouchers_count[0]['count']) ;
    }
    
    static function fetchDistinctVoucherCourses( ){
    
    	$db = eZDB::instance( );
    	 
    	$courses = $db->arrayQuery("SELECT DISTINCT(courseid) as courseid, courses_text.title as title
						    		FROM vouchers 
						    		LEFT JOIN courses_text ON vouchers.courseid = courses_text.course_id 
    								ORDER BY title ASC" );
    	
    	
    	return $courses;
    }
    
    static function removeAllEvents( $parentNodeID ){
    	
    	/* DELETE  OBJECTS */
    	
    	$deleteIDArrayResult = array();
    	echo "Remove All Events .. ";
    	$node = eZContentObjectTreeNode::fetch( $parentNodeID );
    	if ( $node === null )
    	{
    		echo( "\n\nSubtree remove Error!\nCannot find subtree with nodeID: '$parentNodeID'." );
    		continue;
    	}
    	$deleteIDArrayResult[] = $parentNodeID;
    	// Get subtree removal information
    	$info = eZContentObjectTreeNode::subtreeRemovalInformation( $deleteIDArrayResult );
    	$deleteResult = $info['delete_list'];
    	
    	if ( count( $deleteResult ) == 0 )
    	{
    		echo( "\n\nExit." );
    		return( 1 );
    	}
    	
    	$totalChildCount = $info['total_child_count'];
    	$canRemoveAll = $info['can_remove_all'];
    	$moveToTrashStr = 'false';
    	$reverseRelatedCount = $info['reverse_related_count'];
    	
    	echo( "\n\nTotal child count: $totalChildCount" );
    	echo( "\nMove to trash: $moveToTrashStr" );
    	echo( "\nReverse related count: $reverseRelatedCount\n" );
    	
    	echo( "\nRemoving subtrees:\n" );
    	foreach ( $deleteResult as $deleteItem )
    	{
	    	$node = $deleteItem['node'];
	    	$nodeName = $deleteItem['node_name'];
	    	if ( $node === null )
	    	{
				echo( "\n\nSubtree remove Error!\nCannot find subtree '$nodeName'." );
				continue;
	    	}
	    	$nodeID = $node->attribute( 'node_id' );
	    	$childCount = $deleteItem['child_count'];
	    	$objectNodeCount = $deleteItem['object_node_count'];
	    	
	    	echo( "\nNode id: $nodeID"  );
	    	echo( "\nNode name: $nodeName" );
	    	
	    	$canRemove = $deleteItem['can_remove'];
	    	if ( !$canRemove )
	    	{
		    	echo( "\n\nSubtree remove Error!\nInsufficient permissions. You do not have permissions to remove the subtree with nodeID: $nodeID\n" );
		    	continue;
	    	}
	    	echo( "\nChild count: $childCount" );
	    	echo( "\nObject node count: $objectNodeCount" );
	    	
	    	// Remove subtrees
	    	
	    	$eventsTree = eZContentObjectTreeNode::subTreeByNodeID( array(), $nodeID );
	    	
	    	foreach($eventsTree as $eventObj)
	    	{
		    	eZContentObjectTreeNode::removeSubtrees( array( $eventObj->attribute( 'node_id' ) ), 'false' );
		    	// We should make sure that all subitems have been removed.
		    	$itemInfo = eZContentObjectTreeNode::subtreeRemovalInformation( array( $eventObj->attribute('node_id') ) );
		    	$itemTotalChildCount = $itemInfo['total_child_count'];
		    	$itemDeleteList = $itemInfo['delete_list'];
	    	}
	    	
	    	if ( count( $itemDeleteList ) != 0 or ( $childCount != 0 and $itemTotalChildCount != 0 ) ){
	    		echo( "\n\nWARNING!\nSome subitems have not been removed.\n" );
	    	}
	    	else{
	    		echo( "\nSuccessfuly DONE.\n" );
	    	}
    	}
    
    }
    
    static function ordersToCSV( $orders ){
    
    	$fields = array(
    			'Invoice Number',
    			'First Name',
    			'Last Name',
    			'Email Address',
    			'Telephone Number',
    			'Course Name',
    			'Session City',
    			'Session Date',
    			'Paid',
    			'Date Paid',
    			'Enrolled?',
    			'Pro-Forma Requested?',
    			'Invoice Amount (NET)',
    			'Invoice Amount (TAX)',
    			'Invoice Amount (TOTAL)'
    	);
    	
    	$finalString = dcdShop::strtocsv( $fields );
    	
    	$db = eZDB::instance();
    	$moodle = new Moodle;
    	
    	foreach( $orders as $key => $order ){
    		
    //		get_enrolments_info( $orderID, $productID, $userID )
    		
    		//Get Enrolment Info for Students
    		$orders[$key]['enrolments'] = dcdShop::fetchOrderEnrolments( $order['id'], $order['user_id'] );
    		$product = eZContentObject::fetch( $order['contentobject_id'] ); //Product Information
    		$orders[$key]["product"] = $product;
    		$ezorder = eZOrder::fetch($order["id"] );
    		$orders[$key]["order"] = $ezorder; //Pass Order Information
    	
    		$product_datamap = $orders[$key]['product']->attribute( 'data_map' );
    		$user_info = array( "firstname" => 'N/A',
    				"lastname" => 'N/A',
    				"email" => 'N/A',
    				"enrolment_status" => 'N/A'	);
    		//Get enrolment status
    		if( isset( $orders[$key]['enrolments'][$order['contentobject_id']]) && $orders[$key]['enrolments'][$order['contentobject_id']] )
    		{
    			foreach( $orders[$key]['enrolments'][$order['contentobject_id']] as $user_info )
    			{
    				//Check if user is enrolled
    				if(isset($product_datamap['course_id']) && $product_datamap['course_id']->hasContent() )
    				{
    					$user_info['enrolment_status'] = $moodle->isEnroled( $user_info['id']  , $product_datamap['course_id']->content() );
    				}
    				else{
    					$user_info['enrolment_status'] = "N/A";
    				}
    				$orders[$key]['enrolments'][$order['contentobject_id']][0] = $user_info;
    			}
    		}
    	
    		// Setup our models that we can use for data extraction
    	
    		if($product->attribute("class_identifier") == 'event' ){
    			$courseType = 'classroom' ;
    		}
    		elseif($product->attribute("class_identifier") == 'course' ){
    			$courseType = 'online' ;
    		}else{
    			$courseType = 'other' ;
    		}
    	
    		$course_id = isset($product_datamap['course_id']) && $product_datamap['course_id']->hasContent() ? $product_datamap['course_id']->content(): "N/A";
    		$city = isset($product_datamap['city']) && $product_datamap['city']->hasContent() ? $product_datamap['city']->content(): "N/A";
    		$event_date = isset($product_datamap['from_time']) && $product_datamap['from_time']->hasContent() ? date( "Y m d H:M:S", $product_datamap['from_time']->toString() ): "N/A";
    	
    		$finalString .= dcdShop::strtocsv( array(
    				( $ezorder->attribute("id")?: 'N/A' ),
    				$user_info['firstname'],
    				$user_info['lastname'],
    				$user_info['email'],
    				( array_key_exists( 'mobile', $user_info ) ? $user_info['mobile'] : '[No Number Supplied]' ),
    				$course_id,
    				$city,
    				$event_date,
    				dcdShopOperators::status_name( $ezorder->attribute( "status_id") )->attribute("name"),
    				date( "Y m d H:M:S", $ezorder->attribute("created") ),
    				$user_info["enrolment_status"] ,
    				$ezorder->attribute('id'),
    				$ezorder->totalExVAT(),
    				$ezorder->totalVAT(),
    				$ezorder->totalIncVAT()
    		) );
    	}
    	
    	return $finalString;
    }
    
    
    /**
     * Parses an array into CSV Format
     * <code>
     * 		fwrite( $handle, strtocsv( $string ) );
     * </code>
     *
     * @author Daniel Noel-Davies
     * @return void
     */
    static function strtocsv( $fields = array(), $delimiter = ',', $enclosure = '"' )
    {
    	$str 			= '';
    	$escape_char 	= '\\';
    
    	foreach ($fields as $value)
    	{
    		if (   strpos($value, $delimiter) !== false
    				|| strpos($value, $enclosure) !== false
    				|| strpos($value, "\n") !== false
    				|| strpos($value, "\r") !== false
    				|| strpos($value, "\t") !== false
    				|| strpos($value, ' ') 	!== false
    		)
    		{
    			$str2 = $enclosure;
    			$escaped = 0;
    			$len = strlen($value);
    
    			for ($i = 0; $i < $len; $i++)
    			{
    				if ($value[$i] == $escape_char)
    				{
    					$escaped = 1;
    				}
    				else
    				{
    					if (!$escaped && $value[$i] == $enclosure)
    					{
    						$str2 .= $enclosure;
    					}
    					else
    					{
    						$escaped = 0;
    					}
    
    					$str2 .= $value[$i];
    				}
    			}
    			$str2 	.= $enclosure;
    			$str 	.= $str2 . $delimiter;
    		}
    		else
    		{
    			$str .= $value . $delimiter;
    		}
    	}
    
    	$str = substr($str, 0, -1);
    	$str .= "\n";
    	return $str;
    }
    
    
    
}

?>
