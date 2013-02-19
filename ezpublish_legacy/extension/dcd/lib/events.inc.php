<?php

/**
 * A collection of locations.
 *
 *
 * @package default
 * @author James Pearson
 * @version 2011-08-31
 *
 */
class Events{

	public function connect()
	{
		// Set debug to false if not already set
		$this->debug = ( is_bool( $this->debug ) ? $this->debug : false );
		//$this->debug = true;
		 
		// Initiate the Moodle Database connection
		$dcpro_ini = eZINI::instance( 'dcpro.ini' );
		$server = $dcpro_ini->variable( 'moodle', 'Server' );
		$user = $dcpro_ini->variable( 'moodle', 'User' );
		$password = $dcpro_ini->variable( 'moodle', 'Password' );
		$db_name = $dcpro_ini->variable( 'moodle', 'Database' );
	
		$dsn = array(
				'server' 	=> $server,
				'user' 		=> $user,
				'password'	=> $password,
				'database'	=>	$db_name,
				'show_errors' => true
		);
	
		$this->connection = eZDB::instance( 'ezmysqli', $dsn, true  );
	
		// Initiate the Moodle Database connection
		$this->moodleSalt =  $dcpro_ini->variable( 'moodle', 'moodle_salt' );
	}
	
	/**
	 * Finds a collection of locations based on the search criteria.
	 * <code>
	 * <?php
	 * 		$events = Events::find($conditions);
	 * ?>
	 * </code>
	 * @param array Search Conditions
	 * @return array
	 * @author James Pearson
	 * @since 2011-08-31
	 * @static
	 */
	public static function find($conditions = array()){
		 
		// TODO fetch language the ZPublish way
		$language = 'en';
		$conn = Moodle::connect();

		$sql_query = "	SELECT
								e.id, e.course_code, e.event_date, e.duration, e.language, e.company_id, e.booking_url, e.venue, e.city, e.country_id, e.active, e.created_at, e.modified_at,
								ct.title as course_title,
								co.name as country_name,
                                c.code,
                                c.id as course_id
							FROM
								events e
							INNER JOIN courses c on c.code = e.course_code
							INNER JOIN courses_text ct on ct.course_id = c.id AND ct.language = '$language'
							INNER JOIN countries co on co.id = e.country_id

						WHERE
							1 = 1";

		foreach ($conditions as $key => $value) {
			switch ($key) {
				case 'active':
					$sql_query .= " AND e.active = 1 ";
					break;
				case 'country':
				case 'country_id':
					$sql_query .= " AND e.country_id = '".mysql_real_escape_string($value)."' ";
					break;
				case 'not_country':
				case 'not_country_id':
					$sql_query .= " AND e.country_id <> '".mysql_real_escape_string($value)."' ";
					break;

				case 'continent':
				case 'continent_id':
					if( $language == 'es' ) //if spanish site then add sessions held in Spain as well as Latin America
					{
						$sql_query .= " AND ( co.continent_id = 'sa' OR e.country_id = 'es' ) ";
					} else {
						$sql_query .= " AND co.continent_id = '".mysql_real_escape_string($value)."' ";
					}
					break;

				case 'course_id':
					$sql_query .= " AND e.course_id = ". intval($value). " ";
					break;

				case 'course_code':
					$sql_query .= " AND e.course_code = '".mysql_real_escape_string($value)."' ";
					break;

				case 'after':
					$sql_query .= " AND e.event_date >= '".mysql_real_escape_string($value) ."' ";
					break;

				case 'es_search':
					//if spanish site add latin america to results
					$sql_query .= " AND ( co.continent_id = 'sa' OR e.country_id = 'es' ) AND e.event_date >=NOW() ";
					break;

				case 'after_now':
					$sql_query .= " AND e.event_date >= NOW() ";
					break;

				case 'city':
					$sql_query .= " AND e.city = '".mysql_real_escape_string($value) ."' ";
					break;

			}
		}

		$sql_query	.= " ORDER BY e.event_date";

		if(isset($conditions["limit"])){
			$sql_query .= " LIMIT ". intval($conditions["limit"]);
		}

		$events_from_database = $conn->a($sql_query);

		$collection = array();

		foreach ($events_from_database as $event_from_database) {

			$collection[] = new Event($event_from_database);
		}

		return $collection;
	}

    /**
     * Gets all country_id based on continent_id
     *
     * @author  Hartley Jean-Aimee
     * @since   2012-03-30
     *
     * @param   $continentID    string      Id of continent
     *
     * @return array
     */
     public function getAllCountryId( $continentID )
     {
        if( empty( $continentID ) )
            return false;

        $conn = get_connection();

        $result = $conn->GetAll(
            'SELECT id
                FROM `countries`
                WHERE continent_id = ?',
            array( $continentID )
        );

        return( empty( $result ) ? array() : $result );
     }

     /**
      * Gets continent name
      *
      * @author Hartley Jean-Aimee
      * @since  2012-03-30
      *
      * @param  $continentID    string      Id of continent
      *
      * @return array
      */
      public function getContinentName( $continentID )
      {
        if( empty( $continentID ) )
            return false;

        $conn = get_connection();

        $result = $conn->GetOne(
            'SELECT name
                FROM continents
                WHERE code = ?',
            array( $continentID )
        );

        return( empty( $result ) ? array() : $result );
      }
}
