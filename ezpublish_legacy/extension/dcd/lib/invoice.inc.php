<?php

/**
 * @author Datacenter Dynamics
 * @copyright 2012
 *
 * @todo Make this shit work
 */

class Invoice {

    private $conn,
            $id,
            $status,
            $time_requested,
            $filename,
            $paid_date;

    // Enable PHP4 Cross-Compatibility
    public function Invoice( ) { $this->__construct( func_get_args() ); }

    /**
     * Constructor for an Invoice.
     *
     * @param  array $data
     * @author Dnaiel Noel-Davies
     * @since  2012-05-02
     */
    public function __construct( $data = array() )
    {
        $this->id   = -1;

        foreach ( $this as $key => $value ) {
            if( isset( $data[$key] ) ){
                $this->$key = $data[$key];
            }
        }
    }

    /**
     * Returns the payment status of the invoice
     *
     * @author Daniel Noel-Davies
     * @since 2012-05-04
     * @return string
     */
    public function getStatus( $statusID = 0 )
    {
        if( $statusID == 0 && !empty( $this->status ) )
        {
            $statusID = $this->status;
        }

        $statusID = intval( $statusID ) - 1;

        $statuses = array(
            'Requested',
            'Cancelled',
            'Successful'
        );

        return array_key_exists( $statusID, $statuses )
            ? $statuses[$statusID]
            : 'Unknown';
    }

    /**
     * Returns the payment status of the invoice
     *
     * @author Daniel Noel-Davies
     * @since 2012-05-08
     * @return string
     */
    public function getFileLocation( )
    {
        return $this->filename;
    }

    /**
     * Returns the date that the invoice was paid
     *
     * @author Daniel Noel-Davies
     * @since 2012-02-21
     * @return bool (false) on failure, int (timestamp) on success
     */
    public function getDatePaid()
    {
        return isset( $this->paid_date )
            ? $this->paid_date
            : false;
    }

    /**
     * Sets the date that the invoice was paid
     *
     * @author Daniel Noel-Davies
     * @since 2012-02-21
     * @return bool - false on failure, true on success
     */
    public function setDatePaid( $value )
    {
        $newDate = strtotime( $value );
        return $this->paid_date = date( 'Y-m-d H:i:s', $newDate );
    }

    /**
     * Returns the date that the invoice was requested
     *
     * @author Daniel Noel-Davies
     * @since 2012-02-21
     * @return bool (false) on failure, int (timestamp) on success
     */
    public function getDateRequested( $format='j F Y, H:i:s' )
    {
        return isset( $this->time_requested )
            ? date( $format, strtotime( $this->time_requested ) )
            : false;
    }

    /**
     * Returns the Invoice Number
     *
     * @author Daniel Noel-Davies
     * @since 2012-02-21
     * @return int|bool
     */
    public function getInvoiceNumber()
    {
        return isset( $this->id )
            ? $this->id
            : null;
    }

    /**
	 * Prepares the Invoice for HTML Output
     *
	 * @author Daniel Noel-Davies
	 * @since 2012-02-21
	 * @return bool
	 */
    private function compileInvoice()
    {

    }

    /**
	 * Returns the Valid HTML for the invoice
     *
	 * @author Daniel Noel-Davies
	 * @since 2012-02-21
	 * @return string
	 */
    public function getInvoiceHTML( )
    {

    }

    /**
     * Sets a new Invoice Status
     *
     * @author Daniel Noel-Davies
     * @since 2012-02-21
     * @return int|bool
     */
    public function setStatus( $value )
    {
        $this->status = $value;
    }

    /**
     * Finds a single Invoice based on the ID.
     * <code>
     * <?php
     *      $order = Invoice::find($invoice_id);
     * ?>
     * </code>
     * @static
     * @param   int   $id   Invoice ID
     * @author  Daniel Noel-Davies
     * @since   2012-05-02
     * @return  Object
     */
    public static function find( $id )
    {
        global $language;

        $conn = get_connection();

        $invoice_from_database = $conn->GetRow("
            SELECT
                i.id, i.status, i.time_requested, i.filename,
                i.paid_date
            FROM
                invoices i
            WHERE
                i.id = ?",
            $id
        );

        return !empty( $invoice_from_database )
            ? new Invoice( $invoice_from_database )
            : null;
    }

    /**
     * Saves the current Invoice.
     *
     * @return boolean
     * @author Dnaiel Noel-Davies
     * @since 2012-05-02
     */
    public function save( $filename){
    	
    	$db = eZDB::instance();
        // If this is an exsisting discipline...
        if($this->id > 0){
        	
        	$query = "UPDATE invoices SET status = '" . $this->status . "', time_requested = '" . $this->time_requested . "', filename = '" . $this->filename . "', paid_date = '". $this->paid_date ."' WHERE id = '" . $this->id . "';";
       // ... update the existing download record.
       
        // If this is not an existing page.
        }
        else
        {
            // Insert a new record in to the pages table.
            $query = "INSERT INTO invoices( status, time_requested, filename, paid_date ) VALUES (" . $this->status . " ,NOW(), '" . $filename ."' , NOW() )";
        }
        
       $result = $db->query($query);

       if ($result )
       {
       		$invoice = $db->arrayQuery("SELECT id FROM invoices WHERE filename = '" . $this->filename . "'");
       		$this->id = $invoice[0]['id'];
       		$this->id . $contentObject->attribute( 'id' );
       }
       
        // Insert the new Invoice
         
    }
    
    public static function saveObject( $filename){
    $user = eZUser::fetchByName( 'admin' );
    $dcdini = eZINI::instance( 'dcpro.ini' );
     
    //setting general node details
    $params = array();
    $params['class_identifier'] = 'invoice'; //class name (found within setup=>classes in the admin if you need it
    $params['creator_id'] = $user->attribute( 'contentobject_id' ); //using the user created above
    $params['parent_node_id'] = $dcdini->variable( 'dcdNodes', 'InvoiceHome' ); //pulling the node id out of the parent
     
    //setting attribute values
    $attributesData = array ( ) ;
    $attributesData['id'] = '10001220' ; //TODO auto-increment
    $attributesData['status'] =  $this->status ;
    $attributesData['time_requested'] = 	time();
    $attributesData['filename'] = $this->filename ;
    $attributesData['paid_date'] = 	time();
    $attributesData['date_modified'] = 	time();
    
    $params['attributes'] = $attributesData;
    
    //publishing the content:
    $contentObject = eZContentFunctions::createAndPublishObject( $params );
    
    $dataMap = $contentObject->attribute( 'data_map' );
    $invoice_id = $dataMap['id'];
    $invoice_id->setAttribute( 'data_text', '1000' . $contentObject->attribute( 'id' ) );
    $invoice_id->sync();
    
    return $contentObject->attribute( 'id' );
    
	}
    
    /*public function __constructor( $id )
    {
        return;

        $this->course           = $course;
        $this->event            = $event;
        $this->visitor_location = get_visitor_country();
        $this->moodle           = new Moodle;
        $this->user_info        = $moodle->getUserInfo( $_SESSION['mdl_userid'] );
    }

    private function __destruct()
    {
        unset( $this->course, $this->event );
    }*/


    /**
     * Returns the tax percentage to be charged
     *
     * @return int
     * @author Daniel Noel-Davies
     * @since 2012-02-21
     * @static
     */
    /*public function getTaxRate( )
    {
        foreach( $x as $taxRule )
        {
            switch( $taxRule['type'] )
            {
                case 'country':
                    $tax = $this->checkCountryRule( $taxRule );
                    break;

                case 'EC':
                    $tax = $this->checkECRule( $taxRule );
                    break;

                default:
                case 'ROW':
                    $tax = 0;
                    break;
            }

            // If our search for tax was successful, return our tax amount
            if( $tax !== false )
                return $tax;
        }

        // Looks like we found nothing, should really return -1..
        return -1;
    }

    private function checkCountryRule( $taxRule )
    {
        if( $this->user_location == get_visitor_country() )
        {
            return $this->taxRule;
        }
    }
    */
}
?>