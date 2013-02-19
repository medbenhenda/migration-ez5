<?php
/**
 * General DCD tpl operator methods
 * 
 */
class dcdTools
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
        return array( 'get_courses', 'get_moodle_session', 'fully_booked', 'get_country_code', 'get_visitor_country', 'get_course_entity', 'moodle_user', 'xml_to_array' );
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
        return array( 	'get_courses' 			=> array(  ),
		        		'get_moodle_sessions' 	=> array(  ) ,
		        		'fully_booked' 			=> array( 'eventID' => array( 	'type' 	=> 'string',
				                                                                'required' => false,
				                                                                'default' 	=> '' ) ),
		        		'get_country_code' 		=> array( 'country' => array( 		'type' 	=> 'string',
				                                                                 'required' => false,
				                                                                 'default' 	=> '' ) ),
		        		'get_visitor_country' 	=> array(  ),
        				'get_course_entity' 	=> array( 'country' => array( 		'type' 	=> 'string',
						                                                                 'required' => false,
						                                                                 'default' 	=> 'United Kingdom' ) ),
        				'moodle_user' 			=> array( 'user_id' => array( 		'type' 	=> 'string',
															        				'required' => false,
															        				'default' 	=> '' ) ),
        				'xml_to_array' 			=> array( 'xml' => array( 			'type' 	=> 'string',
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
            case 'get_courses':
            {
                    $operatorValue = dcdTools::get_courses(  );
            } break;
            case 'get_moodle_session':
            {
            		$operatorValue = dcdTools::get_moodle_session(  );
            } break;
            case  'fully_booked':
            {
            		$operatorValue = dcdTools::fully_booked( $namedParameters['eventID'] );
            } break;
            case 'get_country_code':
            {
            		$operatorValue = dcdTools::get_country_code( $namedParameters['country'] );
            } break;
            case 'get_visitor_country':
            	{
            		$operatorValue = dcdTools::get_visitor_country( );
            	} break;
           	case 'get_course_entity':
           		{
           			$operatorValue = dcdTools::get_course_entity( $namedParameters['country'] );
           		} break;
           	case 'moodle_user':
           		{
           			$operatorValue = dcdTools::moodle_user( $namedParameters['user_id'] );
           		} break;
           	case 'xml_to_array':
           		{
           			$operatorValue = dcdTools::xml_to_array( $namedParameters['xml'] );
           		} break;
           		
        }
    }
    
    /**
     * Helper function used for building a links array.
     *
     * @param array $linkArray
     * @return array
     */
    public static function get_courses(  )
    {
    	
    	$moodle_ini = eZINI::instance( 'dcpro.ini' );
    	$user = $moodle_ini->variable( 'moodle', 'User' );
    	$password = $moodle_ini->variable( 'moodle', 'Password' );
    	$db_name = $moodle_ini->variable( 'moodle', 'Database' );
    	
    	$dsn = array(
    			'server' 	=> 'localhost',
    			'user' 		=> $user,
    			'password'	=> $password,
    			'database'	=>	$db_name,
    			'show_errors' => true
    	);
    	
    	$extdb = eZDB::instance( 'ezmysqli', $dsn, true  );
    	$course = $extdb->arrayQuery("SELECT * FROM mdl_course");
    	 
    	return $course;
    	
    	
    }
    
    /**
     * Get session information.
     *
     * @return string
     */
    public static function get_moodle_session(  )
    {
    	$http = eZHTTPTool::instance();
    	global $strings;
    	if( $http->hasSessionVariable( "mdl_userid" )  )
    	{
    		echo "<script>var loggedin = true</script>";
    	}
    	else
    	{
    		echo "<script>var loggedin = false</script>";
    	}
    	
    	$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

    	return $strings;
    }
    
    /**
     * Helper function used for building a links array.
     *
     * @param array $linkArray
     * @return array
     */
    public static function fully_booked( $eventID )
    {
    	$moodle = new Moodle;
    	$capacity = $moodle->getEventCapacity( $eventID );
    	
    	//Current Number of Attendees for event
    	$numOfAttendees = $moodle->getEventNumAttendees( $eventID );
    	    
	    if ( $numOfAttendees == $capacity )
	    {
	     	$fully_booked = true;
	    }
	    else
	    {
	    	 $fully_booked = false;
	    } 
    	
    	//TODO finalise checking of attendee values
    	$result = array(	'num_of_attendees' 	=>	$numOfAttendees,
			    			'capacity' 			=>	$capacity,
			    			'fully_booked'		=>	$fully_booked );
    			
    	return $result;
    	
    }
    
    /**
     * Get Country Code
     *
     * @param array $country
     * @return array
     */
    public static function get_country_code( $country )
    {
    	$db = eZDB::instance();
    	$result = $db->arrayQuery( "SELECT * FROM `countries` WHERE name = '$country'" );

    	if(count($result) == 0 && $country != ''){
	    	$country_ini = eZINI::instance( 'country.ini' );
	    	$result = array();
	    	foreach($country_ini->BlockValues as $country_key => $country_value)
	    	{
	    		if($country_ini->hasVariable($country_key  , "Name") && $country_ini->variable($country_key  , "Name") == $country)
	    		{
					$result[] = array('id' => $country_key) ;
	    		}
	    		elseif($country_ini->hasVariable($country  , "Name"))
	    		{
					$result[] = array('id' => $country) ;
	    		}
	    	}
    	}
    	
    	return $result;
    }
    
    public static function get_visitor_country(){

    	if(isset($_SESSION['visitor_country'])){
    		return $_SESSION['visitor_country'];
    	} else {
	    	 $db = eZDB::instance();
		
	    	 //Map IP to location 
	    	$ips = ip2long($_SERVER["REMOTE_ADDR"]);
    		$result = $db->arrayQuery("SELECT country_id, continent_id
    				FROM ip_to_country ic
    				INNER JOIN countries c ON c.id = ic.country_id
    				WHERE $ips BETWEEN from_ip_number AND to_ip_number LIMIT 1;");
  
    		if(!empty($result)){
    
    			$_SESSION['visitor_country'] = strtolower( $result[0]["country_id"] );
    			$_SESSION['visitor_continent'] = strtolower( $result[0]['continent_id'] );
    
    			return $result[0]["country_id"];
    		} else{
    
    			$_SESSION['visitor_country'] = 'gb';
    			$_SESSION['visitor_continent'] = 'eu';

    			return "gb";
    		}
    
    	}
    }
    
    public static function get_tax_rate( $tax_rules = false, $visitor_country = false){

    	if( $visitor_country == false )
    		$visitor_country = strtolower( dcdTools::get_visitor_country( ) );
    	
    	// Run through our tax rules until we match a result
    	foreach( $tax_rules as $taxRule )
    	{
    		switch( strtolower( $taxRule->type ) )
    		{
    			// Specific Country Match
    			case 'country':
    				if( strtolower( $visitor_country ) == strtolower($taxRule->customer_location ) )
    					return ( $taxRule->vat_rate / 100 );
    				break;
    				// User is in the EC (Can use `Reverse Charge Mechanism` to avoid tax)
    			case 'region':
    				// Check if country is in the EC
    				return 0;
    				break;
    				// Rest of World?
    			default:
    			case 'row':
    				return ( $taxRule->vat_rate / 100 );
    				break;
    		}
    	}
    	
    }
    
    public static function store_order( $order_params ){
    
	    $user = eZUser::fetchByName( 'admin' );
	    if ( !$user )
	    {
	    	//if no user exists let's pull out the current user:
	    	$user = eZUser::currentUser();
	    }
	    //setting general node details
	    $params = array();
	    $params['class_identifier'] = 'order'; //class name (found within setup=>classes in the admin if you need it
	    $params['creator_id'] = $user->attribute( 'contentobject_id' ); //using the user created above
	    
	    $dcdini = eZINI::instance( 'dcpro.ini' );
	    $params['parent_node_id'] = $dcdini->variable( 'dcdNodes', 'OrderHome' );; //pulling the node id out of the parent
	    
	    //setting attribute values
	    $attributesData = array ( ) ;
	    $attributesData['identifier'] =  '500';
	    $attributesData['status'] =  $order_params['status'];
	    
	    /*
	     * USERS
	    */
	    
	    $db         = eZDB::instance();
	    $users = $db->arrayQuery( "SELECT contentobject_id
	                                        FROM ezcontentobject_attribute
	                                        WHERE contentclassattribute_id = '503'
	        								AND sort_key_string = '". $order_params['user_id'] . "' ");
	    
	    $attributesData['user'] = $delimiter = '';
	    foreach($users as $obj){
	    	$user = eZUser::fetch( $obj['contentobject_id'] );
	    
	    	$user_obj = eZContentObject::fetch( $obj['contentobject_id'] );
	    
	    	$datamap = $user_obj->dataMap();
	    	$attributesData['first_name'] = $datamap['first_name']->content();
	    	$attributesData['last_name']  = $datamap['last_name']->content();
	    	$attributesData['email'] = $user->attribute('email');
	    
	    	$attributesData['user'] .= $delimiter  . $obj['contentobject_id'];
	    	$delimiter = '-';
	    }
	    
	    $attributesData['user_id'] =  $order_params['user_id'];
	    
	    /*
	     * Event & course
	    */
	    $attr_params = array( 	'AttributeFilter'          => array( array(433, '=', $order_params['event_id'])),
	    		'ClassFilterType'          => 'include',
	    		'ClassFilterArray'         => array('event'),
	    		'IgnoreVisibility' 		   => true
	    );
	    $events = eZContentObjectTreeNode::subTreeByNodeID($attr_params, 769);
	    
	    $attributesData['session'] = $attributesData['course'] = $delimiter = '';
	    foreach($events as $event){
	    	$attributesData['session'] .= $delimiter  . $event->ContentObjectID;
	    
	    	$datamap = $event->dataMap();
	    	$courses = $datamap['course']->content();
	    	if(isset($courses['relation_list'][0]["node_id"]) )
	    	{
	    		$course = eZContentObjectTreeNode::fetch( $courses['relation_list'][0]["node_id"] );
	    		// update value of course id
	    		$dataMap = $course->attribute( 'data_map' );
	    		$course_id = $dataMap['course_id'];
	    		$course_id->setAttribute( 'data_text', $order_params['event_id'] );
	    		$course_id->sync();
	    		$course_id->store();
	    		$attributesData['course'] = 	$courses['relation_list'][0]["contentobject_id"];
	    	}
	    	$delimiter = '-';
	    }
	    
	    /*
	     * Invoice
	    */
	    $attr_params = array( 	'AttributeFilter'          => array( array(497, '=',  $order_params['invoice_id'])),
	    		'ClassFilterType'          => 'include',
	    		'ClassFilterArray'         => array('invoice'),
	    		'IgnoreVisibility' 		   => true
	    );
	    $invoices = eZContentObjectTreeNode::subTreeByNodeID($attr_params, 1397);
	    $attributesData['invoice'] = $delimiter = '';
	    
	    if(is_array( $invoices ) ){
		    foreach($invoices as $invoice){
		    	$attributesData['invoice'] .= $delimiter  . $invoice->ContentObjectID ;
		    	$delimiter = '-';
		    }
	    }
	    
	    $attributesData['time_created'] = 	time();
	    $attributesData['time_modified'] = 	time();
	    $attributesData['cost_net'] = $order_params['cost_net'];
	    $attributesData['cost_tax'] =  $order_params['cost_tax'] ;
	    $attributesData['cost_total'] =  $order_params['cost_total'] ;
	    
	    $params['attributes'] = $attributesData;
	    
	    //publishing the content:
	    $contentObject = eZContentFunctions::createAndPublishObject( $params );
	}

	static function get_course_entity($country )
	{
		$params = array(	'ClassFilterType'          => 'include',
							'ClassFilterArray'         => array('company'),
							'IgnoreVisibility' 		   => true
					);
		
		$dcpro_ini = eZINI::instance('dcpro.ini');
		$country_ini = eZINI::instance( 'country.ini' );
		
		$company_home = $dcpro_ini->variable( 'dcdNodes', 'CompanyHome' );
		$companies = eZContentObjectTreeNode::subTreeByNodeID( $params, $company_home );
		
		/*
		 * The entity is based on the first product which countains a country attribute
		*  */
		foreach($companies as $company)
		{
			$entity_country = '';
			$company_datamap = $company->attribute('data_map');
			$company_countries = $company_datamap['entity_countries']->content();
			
			if($company_datamap['entity']->hasContent()	){
		 			$entity_country = $company_datamap['entity']->toString();
			}
			else{
					$entity_country = $company_datamap['country']->toString();
					if($country_ini->hasVariable($entity_country , "Name")){
							$entity_country = $country_ini->variable($entity_country , "Name");
					}
			}
			
			/*
			 * One company oversees a number of countries
			*/
			if(is_array( $company_countries['value'] ) && count( $company_countries['value'] ) > 0 ){
				foreach($company_countries['value'] as $country_id => $company_country){
					
					if( $company_country["Name"] == $country){
						return array( "node_id" => $company->attribute('node_id'),
									  "name" 	=> $entity_country
								);
					}
					else
					{
						if(is_array( $country )){
							foreach($country as $cntry){
								if( isset($cntry["Name"]) && $company_country["Name"] == $cntry["Name"] ){
									return array( "node_id" => $company->attribute('node_id'),
												  "name" 	=> $entity_country
											);
								}
							}
						}
					}
				}
			}
		}
		
		return false;
	}

	public static function moodle_user( $user_id ){
		
		$moodle = new Moodle();
		$user_info = $moodle->getUserInfo( $user_id );
		
		return $user_info;
	
	}
	
	public static function xml_to_array( $xml ){
	
		$result =  (array) simplexml_load_string( $xml );
		
		return $result;
	
	}	
	
}

?>