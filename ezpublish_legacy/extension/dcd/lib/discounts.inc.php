<?php
/**
 * Discount Functions:
 *
 *      Save Discount Codes
 *      @todo Get Discount Codes
 *      @todo GetAll Discount Info
 *      @todo Validation
 *
 * @author  Hartley Jean-Aimee
 * @since   2012-04-18
 */
 class Discounts{
    //Initialize variables
    private $conn,
            $courseid,
            $code,
            $group_name,
            $type,
            $expires,
            $percentage,
            $dcd_staff_email,
            $client_email;

    public  $errors             =   '';
    private $errorsEncountered  =   array();

    public function __construct( $data = array() )
    {
         //Initiate Database Connection
        $this->id = -1;

        foreach( $this as $key=>$value )
        {
            if( isset( $data[$key] ) )
            {
                $this->$key = $data[$key];
            }
        }
        
    }

    public function getCourseId()
    {
        return $this->courseid;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getGroup()
    {
        return $this->group_name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getExpirationDate()
    {
        return $this->expires;
    }

    public function getPercentage()
    {
        return $this->percentage;
    }

    public function getStaffEmail()
    {
        return $this->dcd_staff_email;
    }

    public function getClientEmail()
    {
        return $this->client_email;
    }

    /**
     * Validatation: Discount Code before database
     *
     * @return  boolean
     * @author  Hartley Jean-Aimee
     * @since   2012-04-20
     *
     * @param   $code       string      Discount Code
     * @param   $expires    date        Expiration Date
     *
     * If expires is null then function is being called from redeem
     * else if its not then it is being called from backend (Admin panel)
     */
     public function isValidCode( $code, $expires )
     {
        $code   = trim( $code );

        $expiration   = ( is_null( $expires ) ? null : $expires );

        if( strlen( $code ) != 5 || empty( $code ) )
        {
            $this->errorMsg( 101 );
            return false;
        }
        //check discount has not expired
        else if( strtotime( $expiration ) < strtotime( date( 'Y-m-d' ) ) )
		{
            $this->errorMsg( 103 );
			return false;
		}
        else if( is_null( $expiration ) )
        {
            $this->errorMsg( 108 );
            return false;
        }
        else
        {
            return true;
        }
     }

     /**
     * Verification against Database
     *
     * @return  boolean
     * @author  Hartley Jean-Aimee
     * @since   2012-04-20
     *
     * @param   $code       string      Discount Code
     * @param   $expires    date        Expiration Date
     */
     public function isVerified( $code )
     {
        $code   = trim( $code );

        $discountInfo = $this->getDiscountInfo( $code, array( 'code','expires' ) );

        $expiration   = $discountInfo['expires'];

        if( strlen( $code ) != 5 || empty( $code ) )
        {
            $this->errorMsg( 101 );
            return false;
        }
        //If code redeemed does not exist
        else if( is_null( $discountInfo['code'] ) && is_null( $expiration ) )
        {
            $this->errorMsg( 105 );
            return false;
        }
        //check discount has not expired
        else if( strtotime( $expiration ) < strtotime( date( 'Y-m-d' )  )
            && !is_null( $expiration ) )
		{
            $this->errorMsg( 103 );
			return false;
		}
        else
        {
            return true;
        }
     }

    /**
    * Verifies if Code already exists
    *
    * @return boolean
    * @author Hartley Jean-Aimee
    * @since  2012-04-23
    *
    * @param  $code       string      Discount Code
    */
    public function exists( $code )
    {
        if( empty( $code ) )
            return false;

        $result = $this->conn->GetOne(
            'SELECT code
                FROM `discounts`
                WHERE code = ?',
            array( $code )
        );

        if( $result )
        {
            $this->errorMsg( 104 );
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
    * Email Validation
    *
    * @return bool
    * @author Hartley Jean-Aimee
    * @since  2012-04-20
    *
    * @param  $email      string      Emails
    */
    public function isValidEmail( $emails=array() )
    {
        foreach( $emails as $email )
        {
            if( !filter_var( $email, FILTER_VALIDATE_EMAIL ) && !empty( $email ) )
            {
                $this->errorMsg( 102 );
                return false;
            }
            else
            {
                return true;
            }
        }
    }

    /**
     * Redeem discount code
     *
     * @return  bool
     * @author  Hartley Jean-Aimee
     * @since   2012-04-20
     *
     * @param   $discountCode   string      Code
     * @param   $courseId       int         Id of course
     * @param   $userId         int         Id of user
     */
     public function redeem( $discountCode, $courseId, $userId, $invoiceNumber )
     {
     	/*
        //Ensure Code is Valid (check against DB)
        if( !$this->isVerified( $discountCode ) )
            return false;

        //Get Discount Id
        $discountId = $this->getDiscountInfo( $discountCode, array( 'id' ) );

        $db = eZDB::instance();
        $result = $db->query(
            'INSERT INTO redeemed_discounts( discount_id, course_id, user_id,
                                                invoice_no, timecreated )
                VALUES( ' . $discountId['id']. ', ' . $courseId . ', ' . $userId .', ' . $invoiceNumber . ', NOW() )'
        );

        return( empty( $result ) ? false : true );
        */
     }

    /**
     * Get Discount Info
     *
     * @return  array
     * @author  Hartley Jean-Aimee
     * @since   2012-04-20
     *
     * @param   $discountCode       string      Discount code
     * @param   $fields             array       Fields we are searching for
     */
     public function getDiscountInfo( $discountCode, $fields = array() )
     {
        // Optional fields, ya know, because we always
        // need random shit from the tables..
        if( !empty( $fields ) )
        {
            $fields = join( ", ", $fields );
        }
        else
        {
            $fields = 'id, valid, courseid, code, group_name, type, expires,
                        percentage, dcd_staff_email, client_email';
        }

        $db = eZDB::instance();
        $result = $db->arrayQuery( "SELECT '" . $fields . "' FROM `discounts` WHERE code = '" . $discountCode . "'"  );

        return( empty( $result ) ? array() : $result );
     }

     public function deleteDiscount( $discountCode )
     {
        if( is_null( $discountCode ) )
            return false;

        $result = $this->conn->Execute(
            'DELETE
                FROM `discounts`
                WHERE code = ?',
            array( $discountCode )
        );

        return( empty( $result ) ? false : true );
     }

    /**
     * Search Function
     *
     * @return  array
     * @author  Hartley Jean-Aimee
     * @since   2012-04-25
     *
     * @param   $conditions      $string     Search criterias
     */
     public function search( $conditions=array() )
     {
        $query = 'SELECT code, group_name, courseid, expires, type,
                        percentage, dcd_staff_email, client_email
                    FROM `discounts`
                    WHERE 1=1';

        if( empty( $conditions ) )
        {
            //Error
            return false;
        }

        foreach( $conditions as $key=>$value )
        {
            switch( $key )
            {
                //Finds a match on any input made in search box ( code, group, emails )
                case 'search':
                    if( !empty( $value ) )
                    {
                        $query .= " AND (code LIKE '%". addslashes( $value ) . "%'
                                OR group_name LIKE '%". addslashes( $value ) . "%'
                                OR dcd_staff_email LIKE '%". addslashes( $value ) . "%'
                                OR client_email LIKE '%". addslashes( $value ) . "%')";
                    }
                    break;

                //Finds a match by type
                case 'type':
                    if( !empty( $value ) )
                    {
                        $query .= " AND type = '". $value . "'";
                    }
                    break;

                //Finds a match on particular courseid
                case 'courseid':
                    if( $value != '' ) //Allows 0 (Any Course)
                    {
                        $query .= " AND courseid = '". $value . "'";
                    }
                    break;
            }
        }

        if( !empty( $conditions['fromDate'] ) && !empty( $conditions['toDate'] ) )
        {
            $fromDate = strtotime( $conditions['fromDate'] );
            $toDate = strtotime( $conditions['toDate'] );

            $query .= " AND UNIX_TIMESTAMP(expires) BETWEEN '". $fromDate . "' AND '" . $toDate . "'";
        }

        $result = $this->conn->GetAll( $query );

        $collection = array();

        foreach( $result as $result )
        {
            $collection[] = new Discounts( $result );
        }

        if( empty( $collection ) )
        {
            $this->errorMsg( 107 );
            return false;
        }
        else
        {
            return $collection;
        }
     }

    /**
     * Associates Error Codes with Messages
     *
     * @return  string
     * @author  Hartley Jean-Aimee
     * @since   2012-04-20
     *
     * @param   $errorCode      int     Error Code Number
     */
     public function errorMsg( $errorCode )
     {
        $errorCodes = array(
            101 =>  'Invalid code. You must enter 5 characters.',

            102 =>  'Invalid Email Address',

            103 =>  'This discount code has expired. Please use another' .
                    ' discount code.',

            104 =>  'This codes already exists. Please create another one.',

            105 =>  'The code entered does not match any in our records. ' .
                    'Please retype the code again, or call your local '.
                    'client management team.',

            106 =>  'Please make a course selection, or select Any Course.',

            107 =>  'No records were found based on your search.',

            108 =>  'Please select an expiration date.'
        );

        if(  array_key_exists( $errorCode, $errorCodes )
        &&  !in_array( $errorCode, $this->errorsEnountered ) )
        {
            $this->errorsEnountered[] = $errorCode;

            $this->errors .= sprintf(
                '<span style="color:red;"><strong>Error Found: </strong>%s</span><br />',
                $errorCodes[$errorCode]
            );
            return true;
        }

        return false;
     }

    /**
     * Save Data From Form
     *
     * @return  boolean
     * @author  Hartley Jean-Aimee
     * @since   2012-04-19
     */
    public function save()
    {
        if( !$this->isValidCode( $this->code, $this->expires )
            || !$this->isValidEmail( array( ( !empty( $this->client_email ) ? $this->client_email : null ), $this->dcd_staff_email ) ) )
            return false;

        if( $this->courseid == '' )
        {
            $this->errorMsg( 106 );
            return false;
        }

        $db = eZDB::instance();
        
        $db->begin();

        //If this is an existing discount
        if( $this->id > 0 )
        {
            $result = $db->query(
                "UPDATE discounts
                    SET courseid = '" . $this->courseid. "', code = '" . $this->code . "', group_name = '" . $this->group_name . "', type = '" . $this->type . "',
                        expires = '" . $this->expires . "', percentage = '" . $this->percentage . "', dcd_staff_email = '" . $this->dcd_staff_email . "',
                        client_email = '" . $this->client_email ."', timemodified = NOW()
                    WHERE id = '" . $this->id . "'"
            );

            $result = ( $result ? 'edit' : false );
        }
        else
        {
            if( !$this->exists( $this->code ) )
            {
                //Insert a new record into a database
                $result = $db->query(
                    "INSERT INTO discounts( courseid, code, group_name, type, expires,
                                                percentage, dcd_staff_email,
                                                client_email, timecreated,
                                                timemodified )
                        VALUES( '" . $this->courseid . "', '" . $this->code . "', '" . $this->group_name . "', '" . $this->type . "', 
                		'" . $this->expires . "', '" . $this->percentage . "', '" . $this->dcd_staff_email ."', '" . $this->client_email . "', NOW(), NOW() );"
                );
            }
        }

       $db->commit();

        return $result;
    }

 }
?>