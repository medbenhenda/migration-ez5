<?php

/**
 * A single course.
 *
 *
 * @package default
 * @author James Pearson
 * @version 2011-08-30
 *
 */
class Course extends BaseObject{

	// Loaded from the courses table
	private $type,
            $code,
            $level,
			$version,
            $pdhs,
            $fees,
            $booking_url,
            $has_examination,
            $has_qualification,
            $futher_courses_in_development,
            $third_party_course,
            $default_company,
            $priority,
            $fee;

	// Loaded from courses_text
	private $text;

	//
	private $text_fields,
            $discipline_ids,
            $location_ids,
            $accreditation_ids;


	/**
	 * Constructor for an course.
	 *
	 * @param array $data
	 * @author James Pearson
	 * @ignore
	 * @todo text_fields should be dynamically loaded from the courses_text table.
	 */
	public function __construct($data = array())
	{
		$language = 'en';

		$this->text_fields = array(
            "title", "excerpt", "description", "duration",
            "available_languages", "course_outline", "who_should_attend",
            "including_but_not_restricted_to", "minimum_requirements",
            "pre_requisites","certification", "currencies"
        );

		$this->discipline_ids     = array();
		$this->location_ids       = array();
		$this->accreditation_ids  = array();

		$this->id                 = -1;
		$this->text               = array();
		$this->language           = $language;
		$this->active             = 1;
		$this->has_examination    = 0;
		$this->has_qualification  = 0;
		$this->third_party_course = 0;
		$this->default_company    = 0;
		$this->priority           = 0;
		$this->futher_courses_in_development = 0;
        $this->fee                = array();
		$this->course_fees        = array();

		foreach ( $this as $key => $value )
        {
			if( isset( $data[$key] ) )
            {
				$this->$key = $data[$key];
			}
		}

		foreach ( $this->text_fields as $key )
        {

			if( isset( $data[$key] ) )
            {
				$this->text[$key] = $data[$key];
			}
		}

        // Loop through Currencies, and remove empty instances
        if( isset( $this->course_fees ) )
        {
            foreach( $this->course_fees as $code => $course_fee )
            {
                if( empty( $course_fee ) )
                {
                    unset( $this->course_fees[$code] );
                }
            }
        }
	}


	/**
	 * Returns an array of accrediting organisations that are linked to the course.
	 *
	 * @return array
	 * @author James Pearson
	 * @since 2011-08-31
	 *
	 */
	public function getAccreditationIDs(){

		$conn = get_connection();

		$ids_from_database = $conn->GetAll("SELECT accreditation_id FROM courses_accreditations WHERE course_id = ?",array($this->id));

		$collection = array();

		foreach ($ids_from_database as $id) {
			$collection[] = $id['accreditation_id'];
		}

		return $collection;
	}

	public function getType(){
		return $this->type;
	}

	public function getCode(){
		return $this->code;
	}

	public function getDefaultCompany(){
		return $this->default_company;
	}

	public function getPriority(){
		return intval($this->priority);
	}

	public function getBookingUrl(){
		return $this->booking_url;
	}

	/**
	 * Returns an array of disciplines that are linked to the course.
	 *
	 * @return array
	 * @author James Pearson
	 * @since 2011-08-31
	 *
	 */
	public function getDisciplineIDs(){

		$conn = get_connection();

		$ids_from_database = $conn->GetAll("SELECT discipline_id FROM courses_disciplines WHERE course_id = ?",array($this->id));

		$collection = array();

		foreach ($ids_from_database as $id) {
			$collection[] = $id['discipline_id'];
		}

		return $collection;
	}

	/**
	 * Returns an array of locations that are linked to the course.
	 *
	 * @return array
	 * @author James Pearson
	 * @since 2011-08-31
	 *
	 */
	public function getLocationIDs(){

		$conn = get_connection();

		$ids_from_database = $conn->GetAll("SELECT location_id FROM courses_locations WHERE course_id = ?",array($this->id));

		$collection = array();

		foreach ($ids_from_database as $id) {
			$collection[] = $id['location_id'];
		}

		return $collection;
	}

	/**
	 * Gets a field of meta data, created to avoid 20 GET functions.
	 *
	 * @param string $field
	 * @param string $default
	 * @return string
	 * @author James Pearson
	 * @since 2011-08-30
	 */
	public function getMeta($field, $default = ""){

		if( isset( $this->$field ) )
        {
			return $this->$field;
		}
        else
        {
			return $default;
		}
	}


	/**
	 * Gets a field of text, or a default value.
	 *
	 * @param string $field
	 * @param string $default
	 * @return string
	 * @author James Pearson
	 * @since 2011-08-30
	 */
	public function getText($field, $default = ""){
		return !empty($this->text[$field])? $this->text[$field]:$default;
	}

    /**
     * Get Course Name by Id
     *
     * @return  array()
     * @author  Hartley Jean-Aimee
     * @since   2012-04-23
     *
     * @param   $id       int     Id of course
     */
     public function getCourseName( $id )
     {
        $conn = get_connection();

        if( empty( $id ) )
            return false;

        $result = $conn->GetOne(
            'SELECT title
                FROM `courses_text`
                WHERE course_id = ?',
            array( $id )
        );

        return( empty( $result ) ? array() : $result );
     }

	/**
	 * Saves the current accrediting organisation.
	 *
	 * @return boolean
	 * @author James Pearson
	 * @since 2011-08-25
     *
     * @todo Daniel Noel-Davies - Clean Up Fees
	 */
	public function save()
    {
		global $user, $language;

        $conn       = get_connection();
        //$conn->debug = true;
        $processed  = array();

		$conn->BeginTrans();

        // Previously Saved Information
        $currencies = $conn->GetAll('
            SELECT
            	cu.id as currency_id,
            	cf.id as course_fee_id,
            	cf.fee,
            	cu.code
            FROM currencies cu
            	INNER JOIN course_fees cf on cf.currency_id = cu.id
            WHERE course_id = ?',
            $this->id
        );

        if( !empty( $currencies ) )
        {
            // Update all existing currencies
            foreach( $currencies as $course_fee )
            {
                // Delete Items that exist in the above query, but not in the postdata
                if( !array_key_exists( $course_fee['currency_id'], $this->course_fees ) )
                {
                    $conn->Execute('
                        DELETE FROM `course_fees`
                            WHERE currency_id = ?
                                AND course_id = ?',
                        array(
                            $course_fee['currency_id'],
                            $this->id
                        )
                    );
                }
                else
                {
                    // Update Fees
                    $conn->Execute('
                        UPDATE course_fees
                            SET fee = ?
                            WHERE currency_id = ?
                                AND course_id = ?',
                        array(
                            $this->course_fees[$course_fee['currency_id']],
                            $course_fee['currency_id'],
                            $this->id
                        )
                    );
                }
                $processed[] = $course_fee['currency_id'];
            }
        }

        // Insert new currencies
        foreach( $this->course_fees as $k => $course_fee )
        {
            if( in_array( $k, $processed ) )
                continue;

            $conn->Execute('
                INSERT INTO course_fees
                    ( currency_id, course_id, country_id, fee)
                    VALUES( ?, ?, ?, ? )',
                array(
                    $k,
                    $this->id,
                    '**',
                    $this->course_fees[$k]
                )
            );
        }

		// If this is an exsisting download...
		if($this->id > 0)
        {
			// ... update the existing download record.
			$result = $conn->Execute("
                UPDATE courses
                    SET type = ?, code = ?, version = ?, level = ?, pdhs = ?, fees = ?,
                        booking_url = ?, has_examination = ?,
                        has_qualification = ?, default_company = ?,
                        futher_courses_in_development = ?, third_party_course=?,
                        active= ?, priority = ?, modified_at = NOW()
                    WHERE id = ?;",
                array(
                    $this->type, $this->code, $this->version, $this->level, $this->pdhs,
                    $this->fees, $this->booking_url, $this->has_examination,
                    $this->has_qualification, $this->default_company,
                    $this->futher_courses_in_development,
                    $this->third_party_course, $this->active, $this->priority,
                    $this->id
                )
            ) or die("Error in query: $query. " . $conn->ErrorMsg() );

		// If this is not an existing page.
		}
        else
        {
			// Insert a new record in to the pages table.
			$result = $conn->Execute("
                INSERT INTO courses(type, code, version, level, pdhs, fees, booking_url,
                                    has_examination, has_qualification,
                                    default_company,
                                    futher_courses_in_development,
                                    third_party_course, active, priority,
                                    created_at, modified_at, language )
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,NOW(), NOW(), ?);",
                array(
                    $this->type, $this->code, $this->version, $this->level, $this->pdhs,
                    $this->fees, $this->booking_url, $this->has_examination,
                    $this->has_qualification, $this->default_company,
                    $this->futher_courses_in_development,
                    $this->third_party_course, $this->active, $this->priority, $language
                )
            ) or die("Error in query: $query. " . $conn->ErrorMsg());

			// Update the locale object with the new page id.
			if($result){
				 $this->id = $conn->Insert_ID();
			}
		}

		if($result)
        {
			$sql = "UPDATE courses_text SET  ";

			foreach ($this->text_fields as $ta)
            {
				if(isset($this->text[$ta]))
                {
					$sql .= " $ta = '".mysql_real_escape_string($this->text[$ta])."', ";
				}
			}
			$sql .= " modified_at = NOW() WHERE course_id =".mysql_real_escape_string($this->id)." AND language = '".$language."'";
			$result = $conn->Execute($sql);

			if($conn->Affected_Rows() == 0){

				$sql = "INSERT INTO courses_text(course_id, language,";
				foreach ($this->text_fields as $ta) {
					if(isset($this->text[$ta])){
						$sql .= " $ta, ";
					}
				}
				$sql .= " created_at, modified_at) VALUES (".$this->id.",'".$language."', ";

				foreach ($this->text_fields as $ta) {
					if(isset($this->text[$ta])){
						$sql .= " '".mysql_real_escape_string($this->text[$ta])."', ";
					}
				}

				$sql .= " NOW(), NOW());";
				$result = $conn->Execute($sql);
			}
		}


		if($result){
			if(!empty($this->accreditation_ids)){
				$result = $conn->Execute("DELETE FROM courses_accreditations WHERE course_id = ?", $this->id);

				foreach ($this->accreditation_ids as $aid) {
					$conn->Execute("INSERT INTO courses_accreditations(course_id, accreditation_id) VALUES (?,?);", array(intval($this->id),intval($aid)));
				}
			}
		}

		if($result){
			if(!empty($this->discipline_ids)){
				$result = $conn->Execute("DELETE FROM courses_disciplines WHERE course_id = ?", $this->id);

				foreach ($this->discipline_ids as $did) {
					$conn->Execute("INSERT INTO courses_disciplines(course_id, discipline_id) VALUES (?,?);", array(intval($this->id),intval($did)));
				}
			}
		}

		if($result){
			if(!empty($this->location_ids))
            {
				$result = $conn->Execute("DELETE FROM courses_locations WHERE course_id = ?", $this->id);

				foreach ($this->location_ids as $lid)
                {
					$conn->Execute("INSERT INTO courses_locations(course_id, location_id) VALUES (?,?);", array(intval($this->id),intval($lid)));
				}
			}
		}

		if($result){
			$conn->CommitTrans();
		} else {
			$conn->RollbackTrans();
		}

		return $result;

	}


	/**
	 * Finds a single course based on the ID.
	 * <code>
	 * <?php
	 * 		$course = Course::find($id);
	 * ?>
	 * </code>
	 * @param 	$id 			int 		Id of couse
	 * @param 	$no_language 	boolean 	Adds language condition if false 
	 * @return Course|null
	 * @author James Pearson
	 * @since 2011-08-30
	 * @static
	 */
	public static function find($id, $no_language=false )
    {
    	
    	$course = eZContentObjectTreeNode::fetch( $id );
    	
    	$courseDataType = $course->dataMap();
    	$course_code = $courseDataType['course_code']->content();
    	
    	$language = 'en';
    	
    	$db = eZDB::instance();
    	
    	$course_query = "
			SELECT
				c.id, c.type, c.code, c.version, c.level, c.pdhs, c.fees, c.booking_url,
                c.has_examination, c.has_qualification, c.default_company,
                c.futher_courses_in_development, c.third_party_course,
                c.priority, c.active, c.created_at, ct.language, ct.title,
                ct.excerpt, ct.description, ct.duration, ct.available_languages,
                ct.course_outline, ct.who_should_attend,
                ct.including_but_not_restricted_to, ct.minimum_requirements,
                ct.pre_requisites, ct.certification
			FROM
				courses c
        		INNER JOIN courses_text ct
                    ON c.id = ct.course_id ";
    	
    	//Added another parameter for admin panel
    	//if $no_language is true then this condition is not added to the query
    	//and the lookup is only on the course id and not the language
    	if( !$no_language )
    	{
    		$course_query .= "AND ct.language = '".mysql_real_escape_string($language)."' ";
    	}
    	
    	$course_query .= "WHERE
				c.code = '$course_code'
			ORDER BY c.priority DESC";
    	
    	$course_from_database = $db->arrayQuery($course_query);
    	
		return !empty($course_from_database)
                ?  new Course($course_from_database[0])
                :   null;
	}


    public function getFees( $args )
    {
        if( !empty( $this->fee ))
        {
            if(  isset( $args['field'] ) )
                return $this->fee[ $args['field'] ];
            else
                return $this->fee;
        }

        $courseID           = ( !isset( $args['courseid'] )
                                ? 0 : $args['courseid'] );
        $eventID            = ( !isset( $args['eventid'] )
                                ? 0 : $args['eventid'] );
        $courseID           = ( $courseID == 0
                                ? $this->id : intval($courseID) );

        $eventID            = (int)  $eventID;
        $queryVars          = array( $courseID );
        
		$db = eZDB::instance();

        $query              = '
            SELECT
                cu.id, cu.code, cu.symbol, cf.fee
                FROM
    			    courses AS c';

        if( $eventID !== 0 )
        {
            $query .= '
				INNER JOIN events as e
                    ON e.course_code = c.code
                INNER JOIN event_fees as ef
                    ON ef.event_id = e.id
        		INNER JOIN course_fees cf
                    ON cf.id = ef.course_fees_id';

            // Add Event ID to the args
            $queryVars[] = $eventID;
        }
        else
        {
            $query .= '
                INNER JOIN course_fees cf
                    ON cf.course_id = c.id';
        }

        $query .= '
       		    INNER JOIN currencies cu
                   ON cu.id = cf.currency_id
                WHERE c.id = ' . $courseID;

        if( $eventID !== 0 )
            $query .= ' AND e.id = ' . $eventID;

		$fees_from_database = $db->arrayQuery(  $query );

        // Because ADODB doesn't like Associative arrays, we have to remove our numeric keys
        array_walk( $fees_from_database, function( $value, $key ) use(&$fees_from_database)
        {
            if( is_numeric( $key ) === true )
                unset( $fees_from_database[$key] );
        });

        $this->fee = $fees_from_database;


        
        if(  isset( $args['field'] ) )
                return $this->fee[ $args['field'] ];

		return !empty($fees_from_database)
                ?   $fees_from_database[0]
                :   null;
    }

    public function getAllFees( )
    {
        $db = eZDB::instance();
		$fees = $db->arrayQuery( "SELECT DISTINCT(cu.id),
                    cu.code, cu.symbol, cf.fee
                FROM
				    courses AS c
        		INNER JOIN course_fees cf   ON (cf.course_id = c.id)
       		    INNER JOIN currencies cu    ON cu.id = cf.currency_id
             WHERE c.id = " . $this->id);

		return !empty($fees)
                ?   $fees[0]
                :   null;
    }

    /**
     * Checks if type exists
     *
     * @author  Hartley Jean-Aimee
     * @since   2012-03-28
     *
     * @param   $type       array      Array of course types
     *
     * @return bool
     */
    public function hasType( $type )
    {
        if( empty( $type ) )
            return false;

        $conn = get_connection();

        foreach( $type as $type )
        {
            $result = $conn->GetAll(
                'SELECT type
                    FROM `courses`
                    WHERE type = ?
                    UNION
                    SELECT type
                        FROM `coursepackages`
                        WHERE type = ?
                            AND active = 1',
                array( $type, $type )
            );
        }

        return( $result ? true : false );
    }

    /**
     * Grabs course Information based on type
     *
     * @author  Hartley Jean-Aimee
     * @since   2012-03-29
     *
     * @param   $type       string      Course Type
     *
     * @return array
     */
    public function getCourseInfoByType( $type )
    {
        global $language;

        if( empty( $type ) )
            return false;

        $conn = get_connection();

        if( $type == 'passport' ) //get passport/programme courses
        {
            $sql_query = sprintf(
                'SELECT cp.id, cp.type, cp.code, cp.title
                        FROM `coursepackages` as cp
                        WHERE cp.type = \'%s\'
                            AND cp.active = 1
                            AND cp.language = \'%s\'',
                $type, $language
            );
        }
        else //get all other courses
        {
            $sql_query = sprintf(
                'SELECT c.id, c.type, c.code, ct.title
                    FROM `courses` as c
                    INNER JOIN `courses_text` as ct
                        ON c.id = ct.course_id
                    WHERE c.type = \'%s\'
                        AND active = 1
                        AND ct.language = \'%s\'
                        ORDER BY c.code',
                $type, $language
            );
        }

        //Gets information required for course by type (grouped)
        $result = $conn->GetAll( sprintf( '%s', $sql_query ));

        return( empty( $result ) ? array() : $result );
    }

    /**
     * Gets course type based on ID
     *
     * @author  Hartley Jean-Aimee
     * @since   2012-06-06
     *
     * @param   $courseId       int     Id of course
     *
     * @return array
     */
     public function getCourseType( $courseId )
     {
        if( empty( $courseId ) )
            return false;

        $conn = get_connection();

        $result = $conn->GetOne(
            'SELECT type
                FROM `courses`
                WHERE id = ?',
            array( $courseId )
        );

        return( empty( $result ) ? array() : $result );
     }

     /**
     * Gets course type based on ID
     *
     * @author  Hartley Jean-Aimee
     * @since   2012-08-31
     *
     * @param   $courseId       int     Id of course
     *
     * @return array
     */
     public function getCodeById( $courseId )
     {
        if( empty( $courseId ) )
            return false;

        $conn = get_connection();

        $result = $conn->GetOne(
            'SELECT code
                FROM `courses`
                WHERE id = ?',
            array( $courseId )
        );

        return( empty( $result ) ? array() : $result );
     }

}
