<?php
/**
 * DCD Shop related tpl operator methods
 * 
 */
class dcdShopOperators
{
    /**
     * Constructor
     * 
     */
    function __construct()
    {
    	
    }

    /**
     * Return an array with the template operator name.
     * 
     * @return array
     */
    public function operatorList()
    {
        return array( 'get_enrolled_amount', 'get_product_enrolments', 'get_product_orders', 'status_name' );
    }

    /**
     * Return true to tell the template engine that the parameter list exists per operator type,
     * this is needed for operator classes that have multiple operators.
     * 
     * @return bool
     */
    public function namedParameterPerOperator()
    {
        return true;
    }

    /**
     * Returns an array of named parameters, this allows for easier retrieval
     * of operator parameters. This also requires the function modify() has an extra
     * parameter called $namedParameters.
     * 
     * @return array
     */
    public function namedParameterList()
    {
        return array( 	'get_enrolled_amount' 			=> array(	 'orderID' => array( 	'type' 	=> 'string',
							                                                                'required' => true,
							                                                                'default' 	=> '' ),
	        														  'courseID' => array( 	'type' 	=> 'string',
							                                                                'required' => false,
							                                                                'default' 	=> '' ) ),
		        		'get_enrolments_info' 			=> array(	 'orderID' => array( 	'type' 	=> 'string',
																	        				'required' => true,
																	        				'default' 	=> '' ),
											        				  'productID' => array( 'type' 	=> 'string',
																	        				'required' => false,
																	        				'default' 	=> '' ),
											        				  'userID' => array( 	'type' 	=> 'string',
																	        				'required' => false,
																	        				'default' 	=> '' ) ),
		        		'get_product_enrolments' 		=> array( 'courseID' => array( 	'type' 	=> 'string',
															        						'required' => false,
															        						'default' 	=> '' ) ),
		        		'get_product_orders' 			=> array( 'courseID' => array( 	'type' 	=> 'string',
															        						'required' => false,
															        						'default' 	=> '' ) ),
		        		'status_name' 					=> array( 'statusID' => array( 	'type' 	=> 'string',
															        						'required' => false,
															        						'default' 	=> '' ) )
        		);
    }

    /**
     * Executes the PHP function for the operator cleanup and modifies $operatorValue.
     * 
     * @param eZTemplate $tpl
     * @param string $operatorName
     * @param array $operatorParameters
     * @param string $rootNamespace
     * @param string $currentNamespace
     * @param mixed $operatorValue
     * @param array $namedParameters
     */
    public function modify( $tpl, $operatorName, $operatorParameters, $rootNamespace, $currentNamespace, &$operatorValue, $namedParameters )
    {

        switch ( $operatorName )
        {
            case 'get_enrolled_amount':
            {
                   $operatorValue = dcdShopOperators::get_enrolled_amount( $namedParameters['orderID'],  $namedParameters['courseID']  );
            } break;
            case 'get_product_enrolments':
            {
            		$operatorValue = dcdShopOperators::get_product_enrolments( $namedParameters['courseID']  );
            } break;
            case 'get_enrolments_info':
            	{
            		$operatorValue = dcdShopOperators::get_enrolments_info( $namedParameters['orderID'], $namedParameters['productID'], $namedParameters['userID']  );
            	} break;            
            case 'get_product_orders':
            	{
            		$operatorValue = dcdShopOperators::get_product_orders( $namedParameters['courseID']  );
            	} break;
            case 'status_name':
            	{
            		$operatorValue = dcdShopOperators::status_name( $namedParameters['statusID']  );
            	} break;            	
        }
    }
    
    /**
     * Get Amount of users enrolled into a perticular course for a person
     *
     * @return array
     */
    public static function get_enrolled_amount( $orderID, $courseID )
    {
    	$db = eZDB::instance();
    	$result = $db->arrayQuery( "SELECT count( * ) as count FROM `dcd_enrolments` WHERE order_id = '$orderID'" );
    	
    	$enrolled = $result['0']['count'];
    	
    	$order = eZOrder::fetch($orderID);
    	$items = $order->productItems();
    	$total = 0;
    	
    	foreach($items as $item){
    		$total += (int)$item['item_count'];
    	}
    	$available = $total - $enrolled;
    	
    	return array( 'enrolled' => $enrolled, 'available' => $available , 'total' => $total );
    }
    
    /**
     * Get detailed information about each enrolled users for a collectionItem
     *
     * @return array
     */
    public static function get_enrolments_info( $orderID, $productID, $userID )
    {
    	$db = eZDB::instance();
    	$result = $db->arrayQuery( "SELECT * FROM `dcd_enrolments` WHERE order_id = '$orderID'
		    														AND product_id = '$productID'
		    														AND ez_user_id = '$userID'" );

    	$enrolled = count( $result );
    	 
    	$order = eZOrder::fetch( $orderID );
    	$items = $order->productItems();
    	$total = 0;
    	
    	foreach($items as $item){
    		if($productID == $item['item_object']->attribute('contentobject_id') ){
    			$total += (int)$item['item_count'];
    		}
    	}
    	$available = $total - $enrolled;
    	
    	
    	
    	return array( 'enrolled' => $enrolled, 'available' => $available , 'total' => $total, 'detail' => $result );
    }  
    
    /**
     * Get Amount of users enrolled into a perticular course for a person
     *
     * @return array
     */
    public static function get_product_enrolments( $courseID )
    {
    	$db = eZDB::instance();
    	$result = $db->arrayQuery( "SELECT * FROM `dcd_enrolments` 
    								LEFT JOIN ezuser ON ezuser.contentobject_id = `dcd_enrolments`.ez_user_id 
    								WHERE product_id = '$courseID'" );

    	return $result;
    }
    
    /**
     * Get Amount of users enrolled into a perticular course for a person
     *
     * @return array
     */
    public static function get_product_orders( $courseID )
    {
    	$db = eZDB::instance();
    	$result = $db->arrayQuery( "SELECT *  FROM `ezproductcollection_item` as item 
    								LEFT JOIN ezorder on ezorder.productcollection_id = item.productcollection_id 
    								WHERE item.contentobject_id = '$courseID'
    			 					AND ezorder.order_nr != 0 " );
    
    	return $result;
    }
    
    public static function status_name( $statusID )
    {
    	$status_name = eZOrderStatus::fetchByStatus( $statusID );
    	
    	return $status_name;
    }
 
}

?>