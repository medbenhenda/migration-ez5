<?php

/**
 * A single discipline, used to categorise courses..
 *
 *
 * @package default
 * @author James Pearson
 * @version 2011-08-31
 *
 */
class Event extends BaseObject{


	// Loaded from the "pages" table
	private $course_id,
            $course_code,
            $event_date,
            $duration,
            $language,
            $booking_url,
            $venue,
            $city,
            $country_id,
            $continent,
            $company_id;

	private $country_name, $course_title;

	/**
	 * Constructor for a Discipline.
	 *
	 * @param array $data
	 * @author James Pearson
	 * @ignore
	 */
	public function __construct($data = array())
	{
		$language = 'en';

		$this->id = -1;
		$this->event_date = "1981-01-01";
		$this->active = 1;
        $this->event_fees = array();

		foreach ($this as $key => $value) {

			if(isset($data[$key])){
				$this->$key = $data[$key];
			}
		}

		if(is_string($this->event_date)){
			$this->event_date = strtotime($this->event_date);
		}
	}

    public function getID( )
    {
        return $this->id;
    }

	public function oldgetBookingURL()
    {
		return $this->booking_url;
	}

    /**
     * Gathers the appropriate url to book the course
     *
     * @author Hartley Jean-Aimee
     * @since  2012-08-21
     *
     * @param  $course_id       int         Id of course
     * @return string
     */
	public function getBookingURL( $course_id )
    {
        if( empty( $course_id ) )
            return false;

        $course = Course::find( $course_id );
        $siteURL = substr( get_setting( 'paths', 'site_url' ), 7 );

		return sprintf('%s%d/%s/%s/%s%s%s',
            get_url_string( 'course' ),
            $course_id,
            slug($course->getCode()),
            slug($course->getText('title')),
            slug($this->getCity()),
            get_url_string( 'book' ),
            $this->getID()
        );
	}

	public function getCity(){
		return $this->city;
	}

    /**
     * Get the most feed for an event based on user location
     */
	public function getAppropriateEventFee()
    {
        $db = eZDB::instance();

        $results = $db->arrayQuery(
            "SELECT cf.fee, cu.code, cu.symbol
                FROM course_fees cf
                    INNER JOIN currencies cu ON cu.id = cf.currency_id
                WHERE cf.course_id = ". $this->getCourseID() . "
                    AND country_id = '" . dcdTools::get_visitor_country() . "'"
        );

        // If there isn't a local fee, use the event fee
        if( !$results )
        {
            $results = $db->arrayQuery(
                'SELECT cf.fee, cu.code, cu.symbol
                    FROM event_fees ef
                        INNER JOIN course_fees cf ON cf.id = ef.course_fees_id
                        INNER JOIN currencies cu ON cu.id = cf.currency_id
                    WHERE ef.event_id = ' . $this->id  );
        }

        return $results['fee'] . ' ' . $results['code'];
	}

    /**
     * Get the most feed for an event based on user location
     */
	public function getDefaultEventFee()
    {
        $conn = $conn ?: get_connection();
        $results = $conn->GetRow(
            'SELECT cf.fee, cu.code, cu.symbol
                FROM event_fees ef
                    INNER JOIN course_fees cf ON cf.id = ef.course_fees_id
                    INNER JOIN currencies cu ON cu.id = cf.currency_id
                WHERE ef.event_id = ?',
            array(
                $this->id
            )
        );

        return $results['fee'] . ' ' . $results['code'];
	}

    /**
     * Get the most feed for an event based on user location
     */
	public function getCourseFees()
    {
        $conn = $conn ?: get_connection();
        $results = $conn->GetAssoc('
            SELECT cf.id as k, concat( fee, \' \', code) as value
            	FROM course_fees cf
            	INNER JOIN currencies c ON c.id = cf.currency_id
            	WHERE cf.course_id = ?',
            $this->getCourseID()
        );

        return $results;
	}

    function setEventFees( $courseFeeID )
    {
        $conn = $conn ?: get_connection();
		$conn->BeginTrans();

        $exists = $conn->GetRow(
            'SELECT id FROM event_fees WHERE event_id = ?',
            array(
                $this->id
            )
        );

        if( $exists )
        {
            $result = $conn->Execute("
                UPDATE event_fees
                    SET course_fees_id = ?
                    WHERE event_id = ?;",
                array(
                    $courseFeeID,
                    $this->id
                )
            ) or die("Error in query: $query. " . $conn->ErrorMsg());
        }
        else
        {
            // Insert a new record in to the pages table.
			$result = $conn->Execute("
                INSERT INTO event_fees(
                        event_id, course_fees_id
                ) VALUES (
                    ?, ?
                );",
                array(
                    $this->id,
                    $courseFeeID
                )
            ) or die("Error in query: $query. " . $conn->ErrorMsg());
        }

        if($result)
        {
			$conn->CommitTrans();
		}
        else
        {
			$conn->RollbackTrans();
		}

		// Insert the new event_fees
		return $result;
    }

    public function setCompanyID( $company_id )
    {
        $conn = $conn ?: get_connection();
		$conn->BeginTrans();

        $result = $conn->Execute("
            UPDATE events
                SET company_id = ?
                WHERE id = ?;",
            array(
                $company_id,
                $this->id
            )
        ) or die("Error in query: $query. " . $conn->ErrorMsg());


        if($result)
        {
			$conn->CommitTrans();
		}
        else
        {
			$conn->RollbackTrans();
		}

		// Insert the new Company ID
		return $result;
    }

	public function getDuration(){
		return $this->duration;
	}

	public function getVenue(){
		return $this->venue;
	}

	public function getEventDate( $format = true ){
		return (
            $format === true
                ? strftime("%d/%m/%Y",$this->event_date)
                : $this->event_date
        );
	}

	public function getCountryName(){
		return $this->country_name;
	}

	public function getCountryID(){
		return $this->country_id;
	}

	public function getCourseID(){
		return $this->course_id;
	}

	public function getCourseTitle(){
		return $this->course_title;
	}

	public function getLanguage(){
		return $this->language;
	}

	public function getCompanyID(){
		return $this->company_id;
	}

	/**
	 * Saves the current discipline.
	 *
	 * @return boolean
	 * @author James Pearson
	 * @since 2011-08-31
	 */
	public function save(){
		global $language;

		$db = eZDB::instance();

		$db->begin();


		// If this is an exsisting discipline...
		if($this->id > 0){

			// ... update the existing download record.
			$result = $conn->Execute("UPDATE events SET course_id = ?, course_code = ?, event_date = ?, duration = ?, language = ?, booking_url = ?, venue = ?, city = ?, country_id = ?, active = ?, modified_at  = NOW() WHERE id = ?;", array( $this->course_id, $this->course_code, date("Y-m-d", $this->event_date), $this->duration, $this->language, $this->booking_url, $this->venue, $this->city, $this->country_id, $this->active, $this->id)) or die("Error in query: $query. " . $conn->ErrorMsg());
		// If this is not an existing page.
		}  else {

			// Insert a new record in to the pages table.
			$result = $conn->Execute("INSERT INTO events(course_id, course_code, event_date, duration, language, booking_url, venue, city, country_id, active, created_at, modified_at) VALUES (?,?,?,?,?,?,?,?,?,?,NOW(), NOW());", array($this->course_id, $this->course_code, date("Y-m-d", $this->event_date), $this->duration, $this->language, $this->booking_url, $this->venue, $this->city, $this->country_id, $this->active)) or die("Error in query: $query. " . $conn->ErrorMsg());
			// Update the locale object with the new page id.
			if($result){
				 $this->id = $conn->Insert_ID();
			}
		}


		$db->commit();


		// Insert the new revision, marked as current.
		return $result;
	}


	/**
	 * Finds a single discipline based on the ID.
	 * <code>
	 * <?php
	 * 		$discipline = Discipline::find($page_id);
	 * ?>
	 * </code>
	 * @param int|string page|url
	 * @return Discipline|null
	 * @author James Pearson
	 * @since 2011-08-31
	 * @static
	 */
	public static function find($id)
    {
    	eZSys::
		$language = 'en';

		$event = eZContentObjectTreeNode::fetch( $id );
		 
		$datamap = $event->dataMap();
		$course_id = $datamap['course_id']->content();

		$query = "SELECT e.id, e.course_id, e.course_code, e.event_date, e.duration,
					e.language, e.booking_url, e.venue, e.city,
					e.country_id, e.active, e.created_at, e.modified_at,
					e.company_id,
					ct.title as course_title,
					co.name as country_name
					FROM
					events e
					INNER JOIN courses c on c.code=  e.course_code
					INNER JOIN courses_text ct on ct.course_id = c.id AND ct.language = '$language'
					INNER JOIN countries co on co.id = e.country_id
					WHERE
					e.city = '" . $datamap['city']->content() . "' 
					ORDER BY e.active, e.event_date";
		
	   	$db = eZDB::instance();
		$event_from_database = $db->arrayQuery( $query );

		//TODO fix query right now the selection is unreliable
		
		return !empty($event_from_database)?new Event($event_from_database[0]):null;
	}
}
