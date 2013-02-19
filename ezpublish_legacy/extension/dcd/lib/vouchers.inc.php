<?php
/**
 * Voucher Functions:
 *  Add vouchers
 *  Validate vouchers
 *  Delete vouchers
 *  Assign to Group
 *  Set as Used vouchers
 *
 * @author Hartley Jean-Aimee
 * @since 2012-01-24
 *
 * Make a table below so you know
 * ===========================================================================
 *  Voucher Error Codes:
 *      101 - The code entered has too many characters. Please re-enter the code again
 *      102 - This voucher has expired. Please contact us at xxxxx-xxxxx to purchase more vouchers
 *		103 - This key is not valid. Please enter a valid voucher key
 *		104 - This voucher has already been used. Please enter a different key
 *
 *      201 - Voucher did not insert into database properly
 *		202 - Array is empty
 * ===========================================================================
 */
class Vouchers {
	/**
	 * Private connection info
	 */
	private $database,
			$connection = null,
			$moodleSalt = '';
	
    public  $errors             =   '';
    private $errorsEnountered   =   array();
    public  $voucherInfo        =   array();
    public $debug;
    
    // Backwards Compatibility with php4
    public function Vouchers(){  }
    
	/**
	 * Adds a Voucher
	 *
	 * @return bool
	 * @author Hartley Jean-Aimee
	 * @since  2012-01-25
     *
     * @param  $invoice         int     An invoice number
     * @param  $group           string  Name of Account or Team Group
     * @param  $voucherType     string  Online or Classroom
     * @param  $code            int     A valid voucher code (16 bytes)
     * @param  $courseID        int     Moodle Course ID
     * @param  $expDate         date    Date the Voucher Expires
     * @param  $quantity        int     Number of generated vouchers
     * @param  $studentEmail    string  Email of Manager (if available)
     * @param  $dcdEmail        string  Email of Staff generating vouchers
     *
	 */
    public function addVoucher( $invoice, $group, $voucherType, $code,
                                    $courseID, $expDate, $managerEmail, $dcdEmail )
    {
    
    	
        //Checks required fields are there
        if( empty( $group ) || empty( $invoice ) || empty( $code )
            || empty( $expDate ) || empty( $dcdEmail ) )
            return false;

        //Invoice Validation
        if( !$this->isValidInvoice( $invoice ) )
            return false;

        //Email Validation
        if( !filter_var( $dcdEmail, FILTER_VALIDATE_EMAIL ) )
        {
            $this->errorMsg(108);
            return false;
        }

        //Code Validation
        if( !$this->isValidKey( $code ) )
			return false;

        //Checks if manager email exist
        if( !empty( $managerEmail ) )
        {
            //Email Validation
            if( !filter_var( $managerEmail, FILTER_VALIDATE_EMAIL ) )
            {
                $this->errorMsg(108);
                return false;
            }
        }
        
       $db = eZDB::instance();
       $result = $db->query(
          "INSERT INTO vouchers (
			                invoice, userGroup, courseType, voucher_code, courseid, expDate, valid,
			                timecreated, timemodified, client_manager_email, dcd_staff_email )
			             VALUES
			                ( '" . mysql_real_escape_string( $invoice ) 
			       				. "', '" . mysql_real_escape_string( $group )
			       				. "', '" . mysql_real_escape_string( $voucherType )
			       				. "', '" . mysql_real_escape_string( $code )
			       				. "', '" . mysql_real_escape_string( $courseID )
			       				. "', '". mysql_real_escape_string( $expDate ) . "', 1, NOW(), NOW(), '" 
			       				. mysql_real_escape_string( $managerEmail ) 
			       				. "', '" . mysql_real_escape_string( $dcdEmail ) . "' )"
       );

       if( !$result )
       {
            $this->errorMsg(201);
       }

        //Verify the information from the dabatase
       if( !$this->isVerified( $code ) )
            return false;

       //if(  )
	   return ( $result ? true : false );
    }

	/**
	 * Adds multiple vouchers
	 *
	 * @return bool
	 * @author Hartley Jean-Aimee
	 * @since  2012-01-25
     *
     * @param  $invoice     int     An invoice number
     * @param  $group
     * @param  $voucherType
     * @param  $code        int     A valid voucher code (16 bytes)
     * @param  $courseID    int     Moodle Course ID
     * @param  $expDate
     * @param  $quantity    int     Number of generated vouchers
     *
     * @todo    Needs to be updated/edited with most recent changes
	 */
    public function addVouchers( $invoice, $group, $voucherType, $codes,
                                    $courseID, $expDate )
    {
    	$db = eZDB::instance();
    	
        if( !is_array( $codes ) )
            return false;

        foreach( $codes as $code )
        {
           // if( !$this->isValid( $codes ) )
			//	return false;

			if( !empty( $this->codes ) )
			{
                $this->errorMsg(201);
			}

			$result = $db->query(
				'INSERT INTO vouchers (
                    invoice, userGroup, courseType, voucher_code, courseid, expDate,
                    valid )
				 VALUES ( ?, ?, ?, ?, ?, ?, ?, 1)',
				 array( $invoice, $group, $voucherType,
                            $codes, $courseID, $expDate )
			);

			if( !$result )
			{
                $this->errorMsg(201);
			}
        }

		return ( $result ? true : false );
    }

	/**
	 * Deletes a Voucher
	 *
	 * @return bool
	 * @author Hartley Jean-Aimee
	 * @since  2012-01-25
     *
     * @param  $voucherID   int     Valid Voucher ID
     *
	 */
	public function delVouchers( $voucherID )
	{
		$db = eZDB::instance();
		$result = $db->arrayQuery(
			'SELECT voucher_code, invoice
			     FROM vouchers
			     WHERE id = ?',
			 array ( $voucherID )
		);

		if( !$this->isValidKey( $result ) )
			return false;

		$sql_query = $db->query(
			'DELETE
			     FROM vouchers
			     WHERE id = ?',
			 array( $voucherID )
		);

		return ( $sql_query ? true : false );
	}

	/**
	 * Returns the validity of a voucher (Check: String Length; Regular Expressions)
	 *
	 * @return bool
	 * @author Hartley Jean-Aimee
	 * @since  2012-01-25
     *
     * @param  $voucherCode   int     Voucher key
     *
     *
	 */
    public function isValidKey( $voucherCode )
    {
        $voucherCode = trim( $voucherCode );
        $regexKey = "/^[E|C]{1}[A-Z0-9]{15}/";

        if( empty( $voucherCode ) )
        {
            $this->errorMsg(109);
            return false;
        }
		elseif( strlen( $voucherCode ) != 16 )
		{
			$this->errorMsg(101);
			return false;
		}
        elseif( !preg_match( $regexKey, $voucherCode ) )
        {
            $this->errorMsg(203);
            return false;
        }
		else
		{
			return true;
		}
    }

    /**
	 * Returns the validity of an invoice (Check: String Length; Regular Expressions)
	 *
	 * @return bool
	 * @author Hartley Jean-Aimee
	 * @since  2012-01-25
     *
     * @param  $voucherCode   int     Voucher key
     *
	 */
    public function isValidInvoice( $invoice )
    {
        $invoice = trim( $invoice );
        $regexKey = '/^DCP\-\d+$/';

        if( strlen( $invoice ) > 15  )
        {
            $this->errorMsg( 105 );
            return false;
        }
        /*elseif( !preg_match( $regexKey, $invoice ) )
        {
            $this->errorMsg( 204 );
            return false;
        }*/
		else
		{
			return true;
		}
    }

    /**
     * Verifies the vouchers (Check: isValid; Expiration Date; Usage)
     *
     * @return bool
     * @author Hartley Jean-Aimee
     * @since 2012-01-30
     *
     * @param  $voucherID   int     Valid Voucher ID
     *
     */
     public function isVerified( $voucherCode, $expDate = null )
     {
        $voucherCode = trim( $voucherCode );
        $db = eZDB::instance();
        $result = $db->arrayQuery(
            'SELECT expDate, valid, used, courseType
                FROM `vouchers`
                WHERE voucher_code = ?',
             array( $voucherCode )
        );

        //check voucher has not expired
        if( ( strtotime( $result['expDate'] ) <= strtotime( date( 'D m Y' ) ) )
            && $expDate != null )
		{
            $this->errorMsg(102);
			return false;
		}
		elseif( $result['valid'] == 0 ) //check voucher has been created by DCP
		{
            $this->errorMsg(103);
			return false;
		}
		elseif( $result['used'] == 1 ) //check voucher has not been used
		{
            $this->errorMsg(104);
			return false;
		}
        else
        {

            return true;
        }

        return( empty( $result ) ? false : true );
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
    public function getLmsCourseID( $courseID )
    {
    	$db = eZDB::instance();
       //Query to get ID from courses table
       $result = $db->arrayQuery(
            'SELECT lms_course_id
                FROM `courses`
                WHERE id = ?',
            array( $courseID)
       );

       return( empty( $result ) ? array() : $result );
    }

	/**
	 * Redeems a specific voucher code, if valid
	 *
     * @param   $voucherCoude    int    Voucher Code which has been redeemed
     * @param   $courseID        int    Course Id
     * @param   $eventID         int    Event Id
     * @param   $userID          int    User Id
     *
	 * @return bool
	 * @author Daniel Noel-Davies
	 * @since  2012-01-26
     *
     * @todo Update Online Course ID
     *
	 */
	public function redeem( $voucherCode, $courseID, $userID, $eventID )
	{
        // Stop if voucher isn't valid
        if( !$this->isValidKey( $voucherCode ) )
            return false;

        if( !$this->isVerified( $voucherCode, null ) )
            return false;

        //Get the equivalent Moodle Course ID
        $moodleID = $this->getLmsCourseID( $courseID );

        $moodle = new Moodle;

        //Check if user is/has already enrolled in the course
        $isUserEnroled = $moodle->isEnroled( $userID, $moodleID );

        //get voucher ID, Course Type, and Course Id
        $voucher = $this->getVoucherInfo( $voucherCode, array( 'id','courseType','courseid' ) );
        //Get Group Name
        $grpName = $this->getGroup( $voucherCode );

        if( !$isUserEnroled )
        {
            $moodle->enrolUser( //enrol user
                $userID,
                $moodleID,
                $voucherCode,
                $voucher['courseType'],
                $eventID
            );

            $moodle->createCohort( $grpName );  //create cohort
            $moodle->addUsertoCohort( $grpName, $userID );  //add user to cohort

            //check that redeemed voucher is for correct classroom course
            if( $voucher['courseid'] == $courseID && $voucher['courseid'] != 0 )
            {
                //enroll user in specific Event
                //$moodle->enrolInSession( $eventID );
            	$db = eZDB::instance();
                $result = $db->query(
                 'UPDATE vouchers
                      SET `used` = \'1\', `timemodified` = NOW()
                       WHERE `voucher_code` = ?
                          AND courseid = ?',
                  array( $voucherCode, $courseID )
                );


                $result2 = $this->setVoucherAsRedeeemed( $courseID, $voucher['id'], $userID );

            }
            /*
             * Danger Previous value was invalid $voucherCID does not exist (this code needs to be checked...
             * 
            elseif( $voucher['courseid'] == 0 ) //is an online course
            {
                $result = $db->query(
                    'UPDATE vouchers
                        SET `used` = \'1\', `timemodified` = NOW(), `courseid` = ?
                        WHERE `voucher_code` = ?',
                    array( $courseID, $voucherCode )
                );

                $result2 = $this->setVoucherAsRedeeemed( $courseID, $voucher['id'], $userID );
            }
            
            */
            else
            {
                $this->errorMsg(106);
                return false;
            }
        }
        else
        {
            $this->errorMsg(107);
            $result = 1;
            return $result;
        }

        return ( ( $result ) ? true : false );
	}

    /**
     * Gets Date from Events
     *
     * @param   $eventID    int     Event Id
     *
     * @return  array
     * @author  Hartley Jean-Aimee
     * @since   2012-02-13
     */
     public function getDate( $eventID )
     {
        if( !is_numeric( $eventID ) )
            return false;
        $db = eZDB::instance();
        $result = $db->arrayQuery(
            'SELECT event_date
                FROM `events`
                WHERE id = ?',
            array( $eventID )
        );

        return( empty( $result ) ? array() : $result );
     }

     /**
      * Get Event Location
      *
      * @param $eventID     int     Event Id
      *
      * @return array
      * @author Hartley Jean-Aimee
      * @since  2012-03-23
      */
      public function getEventInfo( $eventID )
      {
        if( !is_numeric( $eventID ) )
            return false;
        $db = eZDB::instance();
        $result = $db->arrayQuery(
            'SELECT venue, city, duration
                FROM `events`
                WHERE id = ?',
            array( $eventID )
        );

        return( empty( $result ) ? array() : $result );
      }

    /**
     * Gets Information from Voucher
     *
     * @param $courseID     int     Course Id
     * @param $fields       array   Array of field names you want :)
     *
     * @return array
     * @author Hartley Jean-Aimee
     * @since 2012-02-03
     *
     */
     public function getVoucherInfo( $voucherCode, $fields = array() )
     {
        //if( array_key_exists( $voucherCode, $this->voucherInfo ) )
         //   return $this->voucherInfo[$voucherCode];

        if( !$this->isValidKey( $voucherCode ) )
            return false;

        if( !$this->isVerified( $voucherCode, null ) )
            return false;

        // Optional fields, ya know, because we always
        // need random shit from the tables..
        if( !empty( $fields ) )
        {
            $fields = join( ", ", $fields );
        }
        else
        {
            $fields = 'id, courseType, voucher_code, courseid, userGroup,
                        valid, used, invoice, expDate, client_manager_email, dcd_staff_email';
        }
        $db = eZDB::instance();
        $result = $db->arrayQuery(
            'SELECT '.$fields.'
                FROM `vouchers`
                WHERE voucher_code = ?',
            array( $voucherCode )
        );

        return( empty( $result ) ? array() : $result );
     }

    /**
     * Get Group name from vouchers
     *
     * @author  Hartley Jean-Aimee
     * @since   2012-02-08
     *
     * @param   $voucherCode     int     Voucher Key
     *
     * @return array
     *
     */
     public function getGroup( $voucherCode )
     {
        if( is_null( $voucherCode ) )
            return false;
        $db = eZDB::instance();
        $result = $db->arrayQuery(
            'SELECT userGroup
                FROM vouchers
                WHERE voucher_code = ?',
            array( $voucherCode )
        );

        return( empty( $result ) ? array() : $result );
     }

     /**
      * Search vouchers
      *
      * @author Hartley Jean-Aimee
      * @since  2012-02-14
      *
      * @param  $searchVal      string      String of any search value
      * @param  $invoice        string      Invoice
      * @param  $managerEmail   string      Manager's Email Address
      * @param  $courseID       int         Course Id
      *
      * @return bool
      * @todo   Optimize/Improve Code - Too confusing, method is being used in
      *         two different places. Must be optimized to improve performance
      *         and search results
      */
      public function searchVouchers( $searchVal = null, $invoice = null,
                                        $managerEmail = null, $group = null,
                                        $courseID = null, $limit, $dcdEmail=null  )
      {
        $whereClause = '';

        //Searches for vouchers which contain or start with the entered value
        //managevouchers.php
        if( !is_null( $searchVal ) && !empty( $searchVal ) )
        {

            $whereClause = sprintf(
                ', c.code
                FROM `vouchers` as v
                LEFT JOIN `courses` as c
                    ON c.id = v.courseid
                WHERE v.userGroup LIKE \'%%%s%%\'
                    OR v.invoice LIKE \'%%%1$s%%\'
                    OR v.client_manager_email LIKE \'%%%1$s%%\'
                    OR v.dcd_staff_email LIKE \'%%%1$s%%\'
                    OR v.voucher_code LIKE \'%%%1$s%%\'',
                $searchVal
            );
        }
        //pertains to return results based on generated vouchers
        //generatevouchers.php
        elseif( !is_null( $invoice ) && !is_null( $dcdEmail ) && !is_null( $group ) )
        {
            if( !empty( $courseID ) )
            {
                $whereClause = sprintf(
                    ', c.code
                    FROM `vouchers` as v
                    INNER JOIN `courses` as c
                            ON c.id = v.courseid
                    WHERE v.courseid = \'%s\'
                        AND v.used = 0
                        AND v.invoice = \'%s\'
                        AND v.dcd_staff_email = \'%s\'
                        AND v.userGroup = \'%s\'',
                    $courseID, $invoice, $dcdEmail, $group
                );
            }
            else
            {
                $whereClause = sprintf( '
                    FROM `vouchers` as v
                    WHERE v.invoice = \'%s\'
                        AND v.dcd_staff_email = \'%s\'
                        AND v.userGroup = \'%s\'
                        AND v.used = 0',
                    $invoice, $dcdEmail, $group
                );
            }
        }
        //searches for vouchers based on specific selected course
        //managevouchers.php
        elseif( !is_null( $courseID ) )
        {
            $whereClause = sprintf(
                ', c.code
                FROM `vouchers` as v
                INNER JOIN `courses` as c
                        ON c.id = v.courseid
                WHERE v.courseid = \'%s\'', $courseID
            );
        }
        $db = eZDB::instance();
        $result = $db->arrayQuery( sprintf(
            'SELECT v.courseType, v.voucher_code, v.userGroup, v.invoice, v.expDate,
                    v.used, v.client_manager_email, v.dcd_staff_email
                    %s
                    ORDER BY v.expDate ASC
                    %s',
            $whereClause,
            ( is_null( $limit ) ? '' : 'LIMIT ' .$limit )
        ));

        if( empty( $result ) )
        {
            echo "<p style='color:red;'>No Vouchers have been found based on your search.</p>";
        }
        else
        {
            echo "<table class='table table-bordered table-striped list'>";
            echo "<tr>
                    <th>Invoice</th>
                    <th>Client Managers Email</th>
                    <th>DCD Staff Email</th>
                    <th>Group</th>
                    <th>Course</th>
                    <th>Key</th>
                    <th>Redeemed</th>
                    <th>Expires</th>
                </tr>";

            foreach( $result as $list )
            {
                printf('
                    <tr>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                    </tr>',
                    $list['invoice'],
                    ( empty( $list['client_manager_email'] ) ? 'N/A' : $list['client_manager_email'] ),
                    $list['dcd_staff_email'],
                    $list['userGroup'],
                    ( empty( $list['code'] ) ? $list['courseType'] : $list['code'] ) ,
                    $list['voucher_code'],
                    ( $list['used'] == 1 ? 'Yes' : 'No' ), #Because we're awesome
                    $list['expDate']
                );
            }

            echo "</table>";
        }

        return( empty( $result ) ? false : true );

      }

    /**
     * Sets vouchers as redeeemd
     *
     * @author  Hartley Jean-Aimee
     * @since   2012-04-04
     *
     * @param   $courseId   int     Id of course
     * @param   $voucherId  int     Id of voucher
     * @param   $userId     int     Id of user
     *
     * @return bool
     */
     public function setVoucherAsRedeeemed( $courseId, $voucherId, $userId )
     {
        if( !intval( $courseId )
            && !intval( $voucherId )
            && !intval( $userId ) )
                return false;
        $db = eZDB::instance();
        $result = $db->query(
             'INSERT INTO redeemed_vouchers (   courseid, voucherid, userid, timecreated )
                     VALUES ( ?, ?, ?, NOW() )',
             array( $courseId, $voucherId, $userId )
        );

        return( empty( $result ) ? false : true );
     }

    /**
     * Emails admins when a voucher has been redeemed
     *
     * @author  Hartley Jean-Aimee
     * @since   2012-07-17
     *
     * @param   $courseId       int     Id of course or event
     * @param   $voucherCode    string  String of voucher code
     * @param   $userId         int     Id of user
     * @param   $eventId        int     Id of event
     *
     * @return  bool
     */
    public function emailNotification( $courseId, $voucherCode, $userId, $eventId = null )
    {
        if( !intval( $courseId )
            && !intval( $userId )
            && empty( $voucherCode ) )
                return false;

        $moodle         = new Moodle;

        //Get All Necessary Info
        $voucherInfo    = $this->getVoucherInfo( $voucherCode, array( 'userGroup', 'dcd_staff_email' ) );
        
        
        // $course         = Course::find($courseId);
        
        /*
         * TODO replace with dynamic value
         * 
         * 
         */
        $moodle_ini = eZINI::instance( 'dcpro.ini' );
        $CourseParentNodeID = $moodle_ini->variable( 'DCPRONodeIDs', 'CourseHome' );

        // TODO filter by course ID
        
        $course_params = array( 	'AttributeFilter'          => false,
						        	'ClassFilterType'          => 'include',
						        	'ClassFilterArray'         => array('course'),
        );
        
        $course = eZContentObjectTreeNode::subTreeByNodeID( $course_params, $CourseParentNodeID );
        $course = $course[0];
        
        $EventParentNodeID = $moodle_ini->variable( 'DCPRONodeIDs', 'EventHome' );
        
         // TODO filter by event ID 
        
        $event_params = array( 	    'AttributeFilter'          => false,
					        		'ClassFilterType'          => 'include',
					        		'ClassFilterArray'         => array('event'),
        );
        
        $event = eZContentObjectTreeNode::subTreeByNodeID( $event_params, $CourseParentNodeID );
        $event = $course[0];
        
       // $event          = ( !is_null( $eventId ) ? Event::find( $eventId ) : null );
        $userInfo       = $moodle->getUserInfo( $userId );

        // Compile Confirmation Email
        
        // fetch text from mail template
        $mailtpl = eZTemplate::factory();
        $mailtpl->setVariable( 'COURSE_NAME', $course->getCourseName( $courseId ) );
        $mailtpl->setVariable( 'COURSE_TYPE', ucfirst( $course->getType() ) );
        $mailtpl->setVariable( 'COURSE_DATE', ( !is_null( $eventId ) ? "<tr><td><label><b>Date:</b></label> ".$event->getEventDate()."</td></tr>" : '' ) );
        $mailtpl->setVariable( 'COURSE_VENUE', ( !is_null( $eventId ) ? "<tr><td><label><b>Venue:</b></label> ".$event->getVenue()."</td></tr>" : '' ) );
        $mailtpl->setVariable( 'COURSE_COUNTRY', ( !is_null( $eventId ) ? "<tr><td><label><b>Location:</b></label> ".$event->getCountryName()."</td></tr>" : '' ) );
        $mailtpl->setVariable( 'SOURCE_WEBSITE', $_SERVER['HTTP_HOST'] );                        

        $mailtpl->setVariable( 'FIRST_NAME', $userInfo['firstname'] );
        $mailtpl->setVariable( 'LAST_NAME', $userInfo['lastname'] );
        $mailtpl->setVariable( 'EMAIL', $userInfo['email'] );

        $mailtpl->setVariable( 'PHONE_NUMBER', $userInfo['mobile'] );
        $mailtpl->setVariable( 'VOUCHER_CODE', $voucherCode );
        $mailtpl->setVariable( 'USER_GROUP', ucfirst( $voucherInfo['userGroup'] ) );                        
        
        $mailtext = $mailtpl->fetch( 'design:email/redeemed_voucher_notification.tpl' );
        
        //Setup Staff Email - DCD Staff who distributed voucher
        $staffEmail = $voucherInfo['dcd_staff_email'];

        // Send off email confirmation email.
        $mail = new eZMail();

        $mail->setContentType( 'text/html' );
        $mail->setReceiver( $email );
        $mail->setSender('noreply@dc-professional.com', ezpI18n::tr('dcdpro/email/redeem_voucher', 'DC-Professional') );
        $mail->setSubject( ezpI18n::tr('dcdpro/email/redeem_voucher', 'DC-Professional Development - Admin Notification Email::Redeemed Voucher ' ) );

     //   $mail->AltBody          = ezpI18n::tr('To view the message, please use an HTML compatible email viewer!' ); // optional - MsgHTML will create an alternate automatically
        
        $dcpro_ini = eZINI::instance( 'dcpro.ini' );
        $bcc_redeem_voucher = $dcpro_ini->variable( 'DdcEmails', 'BCCRedeemVoucher' );
        
        foreach($bcc_redeem_voucher as $bcc_email => $bcc_name )
	        {
	        	$mail->addBcc($bcc_email, $bcc_name );
	        }
        
        $mail->setBody( $mailtext );
        $mailResult = eZMailTransport::send( $mail );
        
        $mail->AddAddress( $staffEmail, 'DCProfessional Development Staff' );

        // Finish off the Execution here
        if( !$mailSent )
            return false;
    }

    /**
     * Gets Event information
     *
     * @author  Hartley Jean-Aimee
     * @since   2012-02-16
     *
     * @param   $courseID   int     Course Id
     * @param   $eventID    int     Event Id
     *
     * @return  array
     */
     public function getCourseInfo( $courseID )
     {
        if( !is_numeric( $courseID ) && !is_numeric( $eventID ) )
            return false;
        $db = eZDB::instance();
        $result = $db->arrayQuery(
            'SELECT
                    e.id,
                    e.course_id,
                    e.event_date,
                    e.duration,
                    e.language,
                    e.booking_url,
                    e.venue,
                    e.city,
                    ct.title,
                    c.code,
                    c.type,
                    c.fees,
                    cf.fee,
                    cu.code,
                    cu.symbol,
                    ci.regional_manager_name,
                    ci.regional_manager_email,
                    ci.regional_manager_phone
                FROM
                    events e
                    INNER JOIN courses c            ON c.id = e.course_id
                    INNER JOIN courses_text ct      ON ct.course_id = c.id
                    INNER JOIN dcp_company_info ci  ON ci.country_id = e.country_id
                    INNER JOIN course_fees cf       ON (cf.course_id = c.id AND cf.country_id = e.country_id)
                    INNER JOIN currencies cu        ON cu.id = cf.currency_id
                WHERE c.id = ? and e.id = ?',
            array( $courseID, $eventID )
        );

        return( empty( $result ) ? array() : $result );
     }

	/**
	* Associates Error Codes with message
	*
	* @param $errorCode		int		Error Code Number
	*
	* @return bool
	* @author Daniel Noel-Davies
	* @since 2012-01-26
	*/
	public function errorMsg( $errorCode )
	{
	   global $strings;

		$errorCodes = array(
            101 =>  $strings['voucher-error-msg-101'],

            102 =>  $strings['voucher-error-msg-102'],

            103 =>  $strings['voucher-error-msg-103'],

            104 =>  $strings['voucher-error-msg-104'],

            105 =>  $strings['voucher-error-msg-105'],

            106 =>  $strings['voucher-error-msg-106'],

            107 =>  $strings['voucher-error-msg-107'],

            108 =>  $strings['voucher-error-msg-108'],

            109 =>  $strings['voucher-error-msg-109'],

            201 =>  $strings['voucher-error-msg-201'],

            202 =>  $strings['voucher-error-msg-202'],

            203 =>  $strings['voucher-error-msg-203'],

            204 =>  $strings['voucher-error-msg-204'],

            301 =>  $strings['voucher-error-msg-301'],
        );

        if(  array_key_exists( $errorCode, $errorCodes )
        &&  !in_array( $errorCode, $this->errorsEnountered ) )
        {
            $this->errorsEnountered[] = $errorCode;

            $this->errors .= sprintf(
                '<span style="color:red;"><strong>%s: </strong>%s</span><br />',
                $strings['error-found'],
                $errorCodes[$errorCode]
            );
            return true;
        }

        return false;
	}
}

?>