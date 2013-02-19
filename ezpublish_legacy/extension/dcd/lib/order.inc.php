<?php
/**
 * A single discipline, used to categorise orders..
 *
 * @package default
 * @author  Hartley Jean-Aimee
 * @since   2012-04-27
 */
class Order{

    private $conn,
            $id,
            $invoice_id,
            $voucher_id,
            $event_id,
            $course_id,
            $time_created,
            $user_id,
            $status,
            $cost_net,
            $cost_tax,
            $cost_total;

    public  $errors             =   '';
    private $errorsEncountered  =   array();

    // Enable PHP4 Cross-Compatibility
    public function Order() { $this->__construct( func_get_args() ); }

    /**
	 * Constructor for an Order.
	 *
	 * @param  array $data
	 * @author Hartley Jean-Aimee
	 * @since  2012-04-27
	 */
	public function __construct($data = array())
	{
        $this->id      =    -1;

		foreach ( $this as $key => $value ) {

			if( isset( $data[$key] ) ){
				$this->$key = $data[$key];
			}
		}
	}

    /**
     * Return the Order ID
     */
    public function getID()
    {
        return isset( $this->id )
            ? $this->id
            : null;
    }

    /**
     * Return the Invoice Number
     */
    public function getInvoiceNumber()
    {
        return isset( $this->invoice_id )
            ? $this->invoice_id
            : null;
    }

    /**
     * Return the Net Cost amount
     */
    public function getCostNet()
    {
        return isset( $this->cost_net )
            ? $this->cost_net
            : null;
    }

    /**
     * Return the Total Tax Amount
     */
    public function getCostTax()
    {
        return isset( $this->cost_tax )
            ? $this->cost_tax
            : null;
    }

    /**
     * Return the Total Amount Paid
     */
    public function getCostTotal()
    {
        return isset( $this->cost_total )
            ? $this->cost_total
            : null;
    }

    /**
     * Return the Voucher ID
     */
    public function getVoucherID()
    {
        return isset( $this->voucher_id )
            ? $this->voucher_id
            : null;
    }

    /**
     * Return the Event ID Associated with this order
     */
    public function getEventID()
    {
        return isset( $this->event_id )
            ? $this->event_id
            : null;
    }

    /**
     * Return the Course ID Associated with this order
     */
    public function getCourseID()
    {
        return isset( $this->course_id )
            ? $this->course_id
            : null;
    }

    /**
     * Return the Time when this order was created
     */
    public function getTimeCreated()
    {
        return isset( $this->time_created )
            ? $this->time_created
            : null;
    }

    /**
     * Return the ID of the User that this invoice belongs
     */
    public function getUserID()
    {
        return isset( $this->user_id )
            ? $this->user_id
            : null;
    }

    /**
     * Return the Order Status
     */
    public function getOrderStatus()
    {
        return isset( $this->status )
            ? $this->status
            : null;
    }

    /**
     * Sets the Order Status
     */
    public function setStatus( $value )
    {
        if( is_numeric( $value ) )
        {
            return $this->status = $value;
        }
        else
        {
            return false;
        }
    }

    /**
     * Gets the text value of the order status
     */
    public function getTextOrderStatus()
    {
        $status     = $this->getOrderStatus();
        $statuses   = array(
            1   => 'Processing',
            2   => 'Failed',
            3   => 'Successful'
        );

        return !empty( $status )
            ? $statuses[$status]
            : null;
    }

    /**
     * Gets the continent code of a country
     */
    public function getContinentCode( $countryCode )
    {
        if( empty( $countryCode ) )
            return false;

        $db = eZDB::instance();
        $result = $db->arrayQuery(
            "SELECT c.code
                FROM `continents` as c
                    INNER JOIN `countries` as co
                        ON c.code = co.continent_id
                WHERE co.id = '" . $countryCode  . "'");

        return( empty( $result ) ? array() : $result );
    }

    /**
     * Gets a list of courses by continent code
     */
    public function getCoursesByRegion( $continent_id )
    {
        if( empty( $continent_id ) )
            return false;

        $collection = Courses::find(array(
            'continent' => $continent_id
        ));

        return( empty( $collection ) ? array() : $collection );
    }

    /**
     * Emails a proforma back to requester
     *
     * @author  Hartley Jean-Aimee
     * @since   2012-07-17
     *
     * @params  $invoiceNo      string      Invoice Number
     * @params  $email          string      Email of requester
     *
     * @return  bool
     */
     public function resendProForma( $invoiceNo, $email )
     {
        //Ensures values aren't empty
        if( empty( $invoiceNo )
            && empty( $email ) )
                return false;

        //Grabs invoice information
        $invoice    = Invoice::find( $invoiceNo );

        //Checks if invoice exists
        if( !is_null( $invoice ) && file_exists( $invoice->getFileLocation() ) )
        {
            //Gets the appropriate proforma
            $msgContents        = file_get_contents( $invoice->getFileLocation() );

            //Setup the request date
            $dateRequested      = $invoice->getDateRequested('Y-m-d');

            $mailer = new PHPMailer();
            $mailer->IsSMTP(); // telling the class to use SMTP
            $mailer->SMTPDebug  = 0;                              // enables SMTP debug information (for testing)
                                                                  // 1 = errors and messages
                                                                  // 2 = messages only
            $mailer->SMTPAuth   = true;                           // enable SMTP authentication
            $mailer->SMTPSecure = "ssl";                          // sets the prefix to the servier
            $mailer->Host       = "smtp.gmail.com";               // sets GMAIL as the SMTP server
            $mailer->Port       = 465;                            // set the SMTP port for the GMAIL server
            $mailer->Username   = "noreply@dc-professional.com";  // GMAIL username
            $mailer->Password   = "T3>n2ACrT3>n2ACr";             // GMAIL password

            $mailer->AddAddress( $email );

            // Setup Email to client
            $mailer->Subject    = sprintf(
                '%sDC-Professional Development - Copy of your Pro Forma Invoice'
            );
            $mailer->AltBody          = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
            $mailer->SetFrom( 'noreply@dc-professional.com', 'DCProfessional Development');
            $mailer->MsgHTML(
                "<div style='color:red;font-size:15px;'><center><b>
                As per your request we have resent the Pro Forma Invoice you originally sent on ". $dateRequested .".</b></center></div><br /><br />
                ".$msgContents.""
            );

            // Send Email to Client
            $result = $mailer->Send();
        }
        else //invoice doesn't exist so return error identifier ( 1 = Invoice does not exist/Missing/Not Found )
        {
            $result   = 1;
        }

        return $result;
     }

     /**
     * Cancels an order
     *
     * @author  Hartley Jean-Aimee
     * @since   2012-07-19
     *
     * @params  $invoiceNo      string      Invoice Number
     *
     * @return  bool
     */
     public function cancelOrder( $invoiceNo )
     {
        if( is_null( $invoiceNo ) )
            return false;

        $db = eZDB::instance();
        $result = $db->query(
            'UPDATE `invoices`, `orders`
              SET  invoices.status = 2,
                   invoices.time_modified = NOW(),
                   orders.status   = 2,
                   orders.time_modified = NOW()
                WHERE invoices.id = orders.invoice_id
                AND orders.invoice_id = ' . $invoiceNo  );

        return( empty( $result ) ? false : true );
     }

    /**
     * Finds a single order based on the ID.
     * <code>
     * <?php
     *      $order = Order::find($order_id);
     * ?>
     * </code>
     * @static
     * @param   int   $id   Order ID
     * @author  Daniel Noel-Davies
     * @since   2012-05-02
     * @return  Object
     */
    public static function find( $id )
    {
        $db = eZDB::instance();
        $result = 
        $order_from_Database = $db->arrayQuery("
            SELECT
                o.id, o.invoice_id, o.voucher_id, o.event_id,
                o.course_id, o.time_created, o.user_id, o.status,
                o.cost_tax, o.cost_net, o.cost_total
            FROM
                orders o
            WHERE
                o.id = " . $id );

        return !empty( $order_from_Database )
            ? new Order( $order_from_Database )
            : null;
    }

    /**
     * Saves the current Order.
     *
     * @return boolean
     * @author Dnaiel Noel-Davies
     * @since 2012-05-02
     */
    public function save(){
        $language = 'en';

        $db = eZDB::instance();
        $db->begin();

        // If this is an exsisting discipline...
        if( $this->id > 0 )
        {
            // ... update the existing download record.
           $query = "UPDATE orders
	                    SET invoice_id = " . $this->invoice_id .", 
	                        voucher_id = " . $this->voucher_id . ",
	                        event_id = " . $this->event_id . ",
	                        course_id = " . $this->course_id . ",
	                        time_created = " . $this->time_created . ",
	                        user_id = " . $this->user_id . ",
	                        status = " . $this->status . ",
	                        cost_net = " . $this->cost_net . ",
	                        cost_tax = ". $this->cost_tax . ",
	                        cost_total = " . $this->cost_total . "
                    WHERE id = " . $this->id;
        // If this is not an existing page.
        }
        else
        {
            // Insert a new record in to the pages table.
            $query = "INSERT INTO orders(
                        invoice_id,
                        voucher_id,
                        event_id,
                        course_id,
                        time_created,
                        user_id,
                        status,
                        cost_net,
                        cost_tax,
                        cost_total
                )
                VALUES ( '" . $this->invoice_id . "', '" . $this->voucher_id . "', '" . $this->event_id . "', '" . $this->course_id . "' , NOW(), '" .
            		$this->user_id . "', '" .
                    $this->status . "', '" .
                    $this->cost_net . "', '" .
                    $this->cost_tax . "', '" .
                    $this->cost_total . "' ) ";

            // Update the locale object with the new page id.
        }

        $result = $db->query( $query );
        
        if ($result )
        {
        	//  $this->id = $conn->Insert_ID();
        	$orders = $db->arrayQuery("SELECT id FROM orders WHERE event_id = '" . $this->event_id . "' AND course_id = '" . $this->course_id . "' AND user_id = '" . $this->user_id . "'");
        	$this->id = $orders[0]['id'];
        }
        
        $db->commit();

      
        // Insert the new Order
        return $result;
    }
}
