<?php
class Moodle {
	/**
	 * Private connection info
	 */
	private $database,
            $connection = null,
            $moodleSalt = '';

	/**
	 * Used to toggle the moodle debug on/off
	 */
	public $debug;

    public $userData;

    public function __construct()
	{
		$this->connect();
    }

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
    	
    	return $this->connection;
    }
    
	/**
	 * Checks the login credentials of a specific user
	 *
	 * @return void
	 * @author Daniel Noel-Davies
	 * @since  2012-01-18
     *
	 * @todo   Make the Password salt dynamic
     *
	 */
	public function checkLogin( $email, $password )
	{
		$userInfo = $this->connection->arrayQuery( 'SELECT * FROM mdl_user	WHERE email = \'' . $email . '\' AND password = MD5(concat( \'' . $password . '\', \'' . $this->moodleSalt . '\'))'	);
		
		return ( empty( $userInfo ) ? false : true );
	}

	/**
	 * Gets the info from a Moodle User
	 *
	 * @return void
	 * @author Daniel Noel-Davies
	 * @since  2012-01-18
     *
	 * @param  $password    varchar
     * @param  $username    varchar
     *
	 * @return $userdata	array	Array of userdata, collected from moodle
	 */
	public function getMoodleUser( $email, $password = false)
	{
		//TODO check this query is still valide -- quick simplification -- verify security implications...
		//$query = "SELECT id FROM mdl_user WHERE email = '" . $email . "' AND password = MD5(concat( '" . $password . "', '" . $this->moodleSalt . "'))";
		
		$query = "SELECT id FROM mdl_user WHERE email = '" . $email . "'";
		$userdata = $this->connection->arrayQuery( $query );
		
		$userdata = empty( $userdata ) ? array() : $userdata[0]['id'] ;
		return ( $userdata );
	}

     public function getUserInfo( $userid = 0 )
     {
        $profileInfo = array();

        // Grab the basic data from moodle
        $result = $this->connection->arrayQuery( "SELECT user.id, user.firstname, user.lastname, user.email, user.city, user.country FROM mdl_user as user WHERE user.id = '" . $userid . "'" );

        // Check we've got a valid result
        if( empty( $result ) )
            return array();
        
        $result = $result[0]; 
        
        // Grab our additional user fields
        $sql_query = $this->connection->arrayQuery(  "SELECT data.fieldid, data.data, field.shortname FROM mdl_user_info_data as data INNER JOIN mdl_user_info_field as field ON field.id = data.fieldid  WHERE userid = '" . $userid ."'" );

        // Check we have a valid result
        if(! empty( $sql_query ) )
        {

	        // loop through the new data, and attach it to our existing array
	        foreach( $sql_query as $extraField )
	        {
	            $result[$extraField['shortname']] = $extraField['data'];
	        }
	
	        // Clear any numeric key'd or emtpy field results
	        foreach( $result as $k=>$v ){
	            if( is_numeric( $k ) || empty( $k ) )
	                unset( $result[$k] );
	        }

        }
        return ( empty( $result ) ? array() : $result);
     }

     /**
      * Get User IDs based on User's' Name
      *
      * @author Hartley Jean-Aimee
      * @since  2012-07-31
      *
      * @param  $clientname     string      Users Name (First or last or both)
      *
      * @return array
      */
      public function getUserIds( $clientname )
      {
        if( empty( $clientname ) )
            return false;

        //sets users first and last name for full name search
        $fullname = explode(" " , $clientname );

        $sql_query = "SELECT id FROM mdl_user WHERE 1=1";

        //User Entered Full Name
        if( count( $fullname ) > 1 )
        {
            //Setup names
            $firstname = $fullname[0];
            $lastname = $fullname[1];

            //finds record based on both first and last name
            $sql_query .= " AND firstname LIKE '" . mysql_real_escape_string( $firstname ) . "%'
                            AND lastname LIKE '" . mysql_real_escape_string( $lastname ) . "%'";
        }
        else //only first or last name
        {
            //finds record similiar to entered input
            $sql_query .= " AND firstname LIKE '%" . mysql_real_escape_string( $clientname ) . "%'
                            OR lastname LIKE '%" . mysql_real_escape_string( $clientname ) . "%'";
        }

        $user_ids = $this->connection->arrayQuery( $sql_query );

        return $user_ids;
      }

    /**
     * Creates a user within moodle and sends them the appropriate
     *  confirmation email
     *
     * @author Daniel Noel-Davies
     * @since 2012-01-31
     *
     * @todo Return errors
     *
     * @param $username     string     Username for Moodle
     * @param $password     string     Password for Moodle
     * @param $firstname    string     Users First name
     * @param $lastname     string     Users Last name
     * @param $email        string     Valid Email Address
     * @param $city         string     City of residence
     * @param $country      string     Country of residence
     *
     *
     * @todo Check if user pre-exists
     * @todo Check if email pre-exists
     * @todo Check if Passwords match specified pattern
     *
     * @return bool
     */
	public function createUser(
     	$username,
     	$password,
     	$firstname,
     	$lastname,
       	$email,
       	$city,
       	$country,
       	$jobtitle,
       	$company_name,
       	$address_1,
       	$address_2,
       	$address_3,
       	$province,
       	$state,
       	$zip,
       	$mobile,
       	$othertel
	)
	{
		
        // @todo Generate valid moodle secret
        $secret = md5( uniqid( rand(), 1 ) );

        //checks if email is already registered
		$emailExists = $this->connection->arrayQuery('SELECT id FROM mdl_user WHERE email = \'' . $email . '\'');
		
        //Ensures username is unique
        $usernameExists = $this->usernameExists( $username );

        
        if( $emailExists )
        {
        	return false;
        }
        
        if( $usernameExists )
        {
            $usernameExists = 1;
            return $usernameExists;
        }

        
		$mdlInfoFields = array(
			2 	=> $company_name,
			3 	=> $jobtitle,
			6 	=> $address_1,
			7 	=> $address_2,
			8 	=> $address_3,
			9 	=> $zip,
			//10=>'',
			11	=> $province,
			12	=> $mobile,
			13	=> $othertel
		);

		$password = md5( $password . $this->moodleSalt);
		
        // Insert the new user into the database
        $result = $this->connection->query( "INSERT INTO mdl_user (auth, confirmed, policyagreed, deleted,
                                    suspended, mnethostid, username, password,
                                    firstname, lastname, email, city, country,
                                    secret, timecreated)
                VALUES( 'email', 0, 0, 0, 0, 1, '$username', '" . $password . "', '$firstname', '$lastname', '$email', '$city', '$country', '$secret', UNIX_TIMESTAMP() )" );

        //Checks first query was successful
        if( $result )
        {
        	$userid = $this->getMoodleUser( $email, $password );

            // Insert the "extra" data
            foreach( $mdlInfoFields as $id => $value )
            {
              $query = "INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES( '$userid', '$id', '$value', 0 )";
              $result2 = $this->connection->query( $query );

            }

            return ( empty( $result2 ) ? false : true );
        }
        
        return ( empty( $result ) ? false : true );
     }

    /**
     *
     *
     * @author Daniel Noel-Davies
     * @since 2012-04-04
     *
     * @param $email        string     Valid Email Address
     * @return bool
     */
     public function sendForgotEmail( $email )
     {
		global $strings, $language;
	    $i           = 0;
	    $newPassword = '' ;
     	$chars       = "abcdefghijkmnopqrstuvwxyz023456789";

   		srand((double)microtime()*1000000);

	    while ($i <= 7)
	    {
	        $num = rand() % 33;
	        $tmp = substr($chars, $num, 1);
	        $newPassword = $newPassword . $tmp;
	        $i++;
	    }

	    $hashed = md5( $newPassword . $this->moodleSalt );

		$result = $this->connection->query( "UPDATE mdl_user SET password = '" . $hashed . "' WHERE email = '" . $email ."'" );

	    // fetch text from mail template
	    $mailtpl = eZTemplate::factory();
	    $mailtpl->setVariable( 'NEW_PASS', $newPassword );
	    $mailtpl->setVariable( 'REMOTE_IP', $_SERVER['REMOTE_ADDR'] );
	    
	    $mailtext = $mailtpl->fetch( 'design:email/forgot_password.tpl' );
	
		$mail = new eZMail();
		
		// Temp Force password to 
		$email = "paul.leclercq@datacenterdynamics.com" ;
		
		$mail->setReceiver( $email );
		$mail->setSender('noreply@dc-professional.com', ezpI18n::tr('dcdpro/email/forgot_password', 'DC-Professional') );
		$mail->setSubject( ezpI18n::tr('dcdpro/email/forgot_password', 'DC-Professional Development - Password Reset' ) );
		$mail->setBody( $mailtext );
		$mail->setContentType( 'text/html' );
		$mailResult = eZMailTransport::send( $mail );
		
        return $mailResult;
     }

    /**
     * Checks if the email is being used within Moodle
     *
     * @author Daniel Noel-Davies
     * @since 2012-04-03
     *
     * @param $email        string     Valid Email Address
     * @return bool
     */
     public function emailExists( $email )
     {
		$result = $this->connection->arrayQuery('SELECT id FROM mdl_user WHERE email = \'' . $email .'\'');
		$result = ( !empty( $result ) ? true : false );

        return $result;
     }

    /**
     * Checks if username is being used within Moodle
     *
     * @author  Hartley Jean-Aimee
     * @since   2012-06-19
     *
     * @param   $username       string      Valid Username
     * @return  bool
     */
     public function usernameExists( $username )
     {
        $result = $this->connection->arrayQuery( "SELECT username FROM mdl_user WHERE username = '" . $username . "'" );
        return( !empty( $result ) ? true : false );
     }


     /**
      * The following functions are to handle cohorts and student
      * enrolment into a selected or purchased course. It provides
      * a seamless transition for the user upon purchase of their
      * course. When redeeming a voucher the user will be placed
      * in a cohort (for manager feature) and enrolled into their
      * respected courses.
      *
      * @author Hartley Jean-Aimee
      * @since  2012-02-08
      */

      /**
     * Creates Cohorts based on user group name (Vouchers)
     *      - Checks if cohort exists
     *      - Checks if user is already in cohort
     *
     * @author  Hartley Jean-Aimee
     * @since   2012-02-08
     *
     * @param   $groupName      string      Name of group
     *o
     * @return  bool
     */
     public function createCohort( $groupName )
     {
        if( is_null( $groupName ) )
            return false;

        //checks if cohort exists
        if( !$this->hasCohort( $groupName ) )
        {
            //create cohort
         	$result = $this->connection->arrayQuery( /* 'INSERT INTO `mdl_cohort` (name, contextid, descriptionformat, timecreated, timemodified)
                    VALUES( ' . $groupName . ', 1, 1, ' . time() . ', ' . time() . ' )' */ );
        }

        return( empty( $result ) ? false : true );
     }

    /**
     * Checks if Cohort already exists
     *
     * @author  Hartley Jean-Aimee
     * @since   2012-02-08
     *
     * @param   $groupName      string      Name of group
     *
     * @return   bool
     */
     public function hasCohort( $groupName )
     {
        $result = $this->connection->arrayQuery( 'SELECT * FROM `mdl_cohort` WHERE name = ' . $groupName );
        return( empty( $result ) ? false : true );
     }

     /**
      * Checks if user is already a member of cohort
      *
      * @author     Hartley Jean-Aimee
      * @since      2012-02-08
      *
      * @param     $groupName           string      Name of group
      *
      * @return     bool
      */
     public function hasCohortMembers( $groupName, $userID )
     {
        $cohortid = $this->getCohortID( $groupName );
        $result = $this->connection->arrayQuery( 'SELECT userid FROM `mdl_cohort_members` WHERE userid = ' . $userID );

        return( empty( $result ) ? false : true );
     }

     /**
      * Get cohort ID
      *
      * @author     Hartley Jean-Aimee
      * @since      2012-02-08
      *
      * @param      $groupName      string      Name of group
      *
      * @return array
      */
      public function getCohortID( $groupName )
      {
            $result = $this->connection->arrayQuery( 'SELECT id FROM `mdl_cohort` WHERE name = ' . $groupName );
            return( empty( $result ) ? array() : $result );
      }

    /**
     * Add user to cohort (Vouchers)
     *
     * @author  Hartley Jean-Aimee
     * @since   2012-02-08
     *
     * @param   $groupName      string      Name of group
     * @param   $userID         int         User Identifier
     *
     * @return  bool
     */
     public function addUsertoCohort( $groupName, $userID )
     {
            //Get Cohort ID
            $cohortID = $this->getCohortID( $groupName );

            //checks if user is already a member of cohort
            if( !$this->hasCohortMembers( $groupName, $userID ) )
            {
                //add user to cohort
             	$result = $this->connection->query( 'INSERT INTO `mdl_cohort_members` (cohortid, userid, timeadded)
                        VALUES( ' . $cohortID['id'] .', ' . $userID . ', ' . time() . ' )'  );
            }

            return( empty( $result ) ? false : true );
     }

     /**
     * Enrols User into Course
     *
     * @author Hartley Jean-Aimee
     * @since 2012-01-31
     *
     * @param $courseID     int     Course Identifier for Moodle
     * @param $userID       int     Student/User Identifier for Moodle
     * @param $voucherCode  string  Voucher Code
     * @param $courseType   int     Type of course (online or classroom)
     * @param $eventID      int     Event Id
     *
     * @todo Implement Role Assignement ( Manager vs Student vs Administrator )
     *
     * @return bool
     */
     public function enrolUser( $userID, $courseID, $voucherCode, $courseType, $eventID )
     {
        if( !is_numeric( $userID ) && !is_numeric( $courseID ) )
			return false;

        //Get Enrol ID
        $enrolID        = $this->getEnrolID( $courseID );
        $isUserEnroled  = $this->isEnroled( $userID, $courseID );

        //Sets Moodle's Context Level
        $mdl_context_level = 50;

        //establish course enrolment query
       $sql_query_course_enrolment      = "INSERT INTO `mdl_user_enrolments` (userid, status, enrolid,
                                                        timestart, timeend,
                                                        modifierid, timecreated,
                                                        timemodified)
                        VALUES(" . $userID . ", 0, " . $enrolID . ", 0, 0, 2, UNIX_TIMESTAMP(), UNIX_TIMESTAMP())";

        //Finds context id for course
        $contextId = $this->connection->arrayQuery('Select id FROM mdl_context WHERE instanceid = \'' . $courseID .'\' AND contextlevel = \'' . $mdl_context_level .'\'');

   //     var_dump( $contextId );
        
        $contextId = $contextId[0]['id'];
        
        /*
        * Handles setting appropriate role ( Student vs Manager vs Administrator )
        * Role id are provided from Moodle Db Table (mdl_role)
        * Student = 5
        * Manager = ? * will need to be set during the update of manager feature
        *
        * @todo update
        */
        $roleid =  5;

        //Sets Role Assigment Query
        $sql_query_role_assignement      = "INSERT INTO `mdl_role_assignments` ( roleid, contextid, userid,
                                                        timemodified, modifierid)
                                                VALUES( $roleid, $contextId, $userID, UNIX_TIMESTAMP(), 2 )";

        //Check if user is/has already enrolled in the course
        if( !$isUserEnroled )
        {
        	//Enroll Student into the course
        	$result = $this->connection->query( $sql_query_course_enrolment );
        	
        	//Set User Role
        	$result1 = $this->connection->query( $sql_query_role_assignement );
        	 
            //Online Course
            if( $courseType == 'online' )
            {
                $result2 = true;
            }
            elseif( $courseType == 'classroom' ) //classroom course
            {
                //Enroll student in the specific session
                $result2 = $this->enrolInSession( $userID, $eventID );
            }
        }
        else
        {
            return false;
        }

        return( ( !$result && !$result1 && !$result2 ) ? false : true );
     }

     /**
      * Get enrolment ID of course (Manual Enrolment)
      *
      * @author Hartley Jean-Aimee
      * @since  2012-02-08
      *
      * @param  $courseID   int     Course Identifier
      *
      * @return array
      */
      public function getEnrolID( $courseID )
      {
        if( !is_numeric( $courseID ) )
            return false;

        $result = $this->connection->arrayQuery( 'SELECT id FROM `mdl_enrol` WHERE courseid = ' . $courseID . ' AND enrol = \'manual\''  );

        return( empty( $result ) ? array() : $result[0]['id'] );
      }

    /**
     * Checks if user is already enolled in the course
     *
     * @author  Hartley Jean-Aimee
     * @since   2012-02-08
     *
     * @param   $userID     int     User Identifier (Moodle)
     * @param   $courseID   int     Course Id (Moodle)
     *
     * @return bool
     */
     public function isEnroled( $userID, $courseID )
     {
        if( !is_numeric( $userID ) && !is_numeric( $courseID ) )
            return false;

        //Get Enrol ID
        $enrolID = $this->getEnrolID( $courseID );

        //Check if user is/has already enrolled in the course
        $result = $this->connection->arrayQuery(
            'SELECT userid, username, firstname, lastname, confirmed, email, mdl_user_enrolments.timecreated, status, city, country
                FROM `mdl_user_enrolments`
        		LEFT JOIN mdl_user ON mdl_user.id = userid
                WHERE enrolid = ' . $enrolID . ' AND userid = ' . $userID );
        
        return( empty( $result ) ? false : true );
     }

     /**
      * Gets the Session ID for the classroom courses
      * This will allow the user to enroll into a specific
      * classroom session being held
      *
      * @author Hartley Jean-Aimee
      * @since 2012-02-10
      *
      * @param  $courseID   int     Moodle Course ID
      * @param  $userID     int     User ID (Moodle)
      *
      * @return array
      */
      public function getSessionID( $eventID )
      {
        $voucher = new Vouchers;

        //Gets event date
        $eventDate = $voucher->getDate( $eventID );

        $result = $this->connection->arrayQuery(
            'SELECT sessionid
                FROM `mdl_facetoface_sessions_dates`
                WHERE FROM_UNIXTIME( timestart, "%Y-%m-%d" ) = ' . $eventDate );

        return( empty( $result ) ? array() : $result );
      }

      /**
       * Enrols user into specific classroom course session/event
       *
       * @author    Hartley Jean-Aimee
       * @since     2012-02-10
       *
       * @param     $eventID      int     ID of event
       * @param     $userID       int     User Identifier
       *
       * @return bool
       */
       public function enrolInSession( $userID, $eventID )
       {
          if( !is_numeric( $userID ) && !is_numeric( $eventID ) )
            return false;

          //Verify User isn't already enrolled
          if( !$this->isInSession( $userID, $eventID ) )
          {
            //Enroll in Session
           $result = $this->connection->query( 
                'INSERT INTO `mdl_facetoface_signups` ( sessionid, userid,
                                                         mailedreminder,
                                                         notificationtype)
                    VALUES ( ' . $eventID . ', ' . $userID . ', 0, 2)' 
            );

            //Update Signup Status
            $result2 = $this->updateSignupStatus( $eventID, $userID );
            
            return( ( $result && $result2 ) ? true : false );
          }
          
          return false;
       }

      /**
       * Checks if User is Enrolled in Classroom Course Session
       *
       * @author    Hartley Jean-Aimee
       * @since     2012-02-15
       *
       * @param     $userID     int     User Id
       * @param     $sessionID  int     Classroom Course Session Id
       *
       * @return bool
       */
       public function isInSession( $userID, $sessionID )
       {
            if( !is_numeric( $userID ) && !is_numeric( $sessionID ) )
                return false;
            $result = $this->connection->arrayQuery( 'SELECT userid FROM `mdl_facetoface_signups` WHERE userid = ' . $userID . ' AND sessionid = ' . $sessionID );

            return( empty( $result ) ? false : true );
       }

       /**
        * Updates the Signups Status
        *
        * @author   Hartley Jean-Aimee
        * @since    2012-02-15
        *
        * @param   $sessionID      int     Session Id
        * @param   $userID         int     User Id
        *
        * @return bool
        */
        public function updateSignupStatus( $sessionID, $userID )
        {
            if( !is_numeric( $sessionID ) && !is_numeric( $userID ) )
                return false;

            //Get Signup ID
            $signupID = $this->getSignupID( $sessionID, $userID );

            $result = $this->connection->query(
                'INSERT INTO `mdl_facetoface_signups_status` (signupid, statuscode,
                                                                superceded, createdby,
                                                                timecreated)
                        VALUES( ' . $signupID . ', 70, 0, 2, UNIX_TIMESTAMP())' );

            return( empty( $result ) ? false : true );
        }

        /**
         * Gets the Signup ID
         *
         * @author  Hartley Jean-Aimee
         * @since   2012-02-15
         *
         * @param   $sessionID      int     Session Id
         * @param   $userID         int     User Id
         *
         * @return  array
         */
         public function getSignupID( $sessionID, $userID )
         {
            if( !is_numeric( $sessionID ) && !is_numeric( $userID ) )
                return false;
            $result = $this->connection->arrayQuery( 'SELECT id FROM `mdl_facetoface_signups` WHERE sessionid = ' . $sessionID . ' AND userid = ' . $userID );
			
            return( empty( $result ) ? array() : $result[0]['id'] );
         }

        /**
          * Emails Confirmation Message to User
          *
          * @author Hartley Jean-Aimee
          * @since  2012-02-16
          *
          * @param  $courseID   int     Course Id
          * @param  $userID     int     User Id
          * @param  $eventID    int     Event Id
          *
          * @return bool
          */
          public function sendConfirmationEmail( $product_id, $userID, $course_type = 'online', $company_id )
          {
            $emailResults   = array();
 
            //Get User Info
            $user   = $this->getUserInfo( $userID );
            
            //Get moodle url
            $dcd_ini = eZINI::instance( 'dcpro.ini' );
            $booking_url = $dcd_ini->variable('moodle', 'moodle_url') . '/login/confirm.php?data=' . $this->getEmailConfirmationCode( 'email', $user['email'] );

			// Send email out to user
            $mailtpl = eZTemplate::factory();
            
            $mailtpl->setVariable( 'FIRST_NAME', ucfirst( $user['firstname'] ) );
            $mailtpl->setVariable( 'LAST_NAME', ucfirst( $user['lastname'] ) );
            $mailtpl->setVariable( 'product_id', $product_id );
            $mailtpl->setVariable( 'company_id', $company_id );

            /**
             * TODO: 
             * 
             * @Hartley  
             * 
             * Since the booking url is not really being used in the objects right now? 
             * Is this part still required? 
	         *
	         *   
               //Checks if user is already confirmed
               $isConfirmed = $this->isUserConfirmed( $userID );

			   //sets up booking url based on condition
          
	            if( $isConfirmed )
	            {
	            	//           $booking_url = ( !is_null( $course->getBookingUrl() ) ? $course->getBookingUrl() : $booking_url );
	            }
            */
            $mailtpl->setVariable( 'BOOKING_URL', $booking_url );
            
            $mailtext = $mailtpl->fetch( 'design:email/admin_'. $course_type .'_confirmation.tpl' );

            // Send off email confirmation email.
            $mail = new eZMail();
            
            $mail->setContentType( 'text/html' );
            $mail->setReceiver( $user['email'], ucfirst( $user['firstname'] ) . ' ' . ucfirst( $user['lastname'] ) );
            $mail->setSender( 'noreply@dc-professional.com' );
            $mail->setSubject( ezpI18n::tr('dcd/enrolstudent', 'DC-Professional Development - Course Enrollment & Account Registration Confirmation') );
            $mail->setBody( $mailtext );
            
            // $mail->headers( $ez_headers );
        //     $mail->setExtraHeaders( $ez_extra_headers );
            $mailResult = eZMailTransport::send( $mail );
            
            // Finish off the Execution here
            return( !$mailResult ? false : true );
          }

        /**
         * Checks if user is already confirmed on the site
         *
         * @author  Hartley Jean-Aimee
         * @since   2012-07-17
         *
         * @param   $userId      int        Id of user
         *
         * @return  bool
         */
        public function isUserConfirmed( $userId )
        {
            if( !intval( $userId ) )
                return false;

            $result = $this->connection->arrayQuery( 'SELECT confirmed FROM `mdl_user` WHERE id = ' . $userId );

            return( $result === 1 ? true : false );
        }

      /**
       * Get Session Capacities
       *
       * @author    Harltey Jean-Aimee
       * @since     2012-04-01
       *
       * @param     $eventID     int        Id of event
       *
       * @return int
       */
       public function getEventCapacity( $eventID )
       {
            if( !intval( $eventID ) || empty( $eventID ) )
                return false;

            $result = $this->connection->arrayQuery( 'SELECT capacity FROM `mdl_facetoface_sessions` WHERE id = ' . $eventID );
            return( !empty( $result[0]['capacity'] ) ? $result[0]['capacity'] : 0 );
       }

       /**
        * Get Number of Event Attendees
        *
        * @author   Hartley Jean-Aimee
        * @since    2012-04-01
        *
        * @param    $eventID    int     ID of event
        *
        * @return int
        */
        public function getEventNumAttendees( $eventID )
        {
            if( !intval( $eventID ) || empty( $eventID ) )
                return false;

            $result = $this->connection->arrayQuery(
                'SELECT count(ss.id)
                    FROM mdl_facetoface_signups as su
                        JOIN mdl_facetoface_signups_status as ss
                            ON su.id = ss.signupid
                    WHERE sessionid = ' . $eventID . '
                        AND ss.superceded = 0 AND ss.statuscode >= 50');

            return( !empty( $result[0]['count(ss.id)'] ) ? $result[0]['count(ss.id)'] : 0 );
        }

    /**
     * Get the LMS Course ID
     *
     * @author Hartley Jean-Aimee
     * @since 2012-02-07
     *
     * @param   $courseID       int     Course ID
     *
     * @return array
     *
     */
    public static function getLmsCourseID( $courseID )
    {
        $conn = $this->connect();
        //Query to get ID from courses table
        $result = $this->connection->arrayQuery(
            'SELECT lms_course_id
            FROM `courses`
            WHERE id = ' . $courseID
        );

        return( empty( $result ) ? array() : $result );
    }

    /**
     * Get the Email Confirmation Code
     *
     * @author Daniel Noel-Davies
     * @since 2012-02-07
     *
     * @param   $userid     int     Moodle User ID
     *
     * @return String
     *
     */
    public function getEmailConfirmationCode( $field, $value )
    {
    	$result = $this->connection->arrayQuery('
				            SELECT concat_ws(\'/\', u.secret, u.username) as value FROM mdl_user u
				                WHERE u.' . mysql_real_escape_string($field) . ' = \''. mysql_real_escape_string( $value ) .'\';' );
    	
        return $result[0]['value'];
    }
}
?>

