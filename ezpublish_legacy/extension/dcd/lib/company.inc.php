<?php

/**
 * A single discipline, used to fetch company information
 *
 *
 * @package default
 * @author James Pearson
 * @version 2011-08-31
 *
 */
class Company{

    private $company_name,
            $company_reg_no,
            $company_tax_no,
            $regional_manager_name,
            $regional_manager_email,
            $regional_manager_phone,
            $company_address_1,
            $company_address_2,
            $company_address_3,
            $company_address_city,
            $company_address_state,
            $company_address_zip,
            $company_address_country,
            $central_email,
            $bank_id,
            $booking_form,
            $country_id,
            $country_code,
            $tax_rules,
            $bank_name,
            $acc_no,
            $sort_code,
            $iban,
            $swiftbic,
            $accounts;


    public  $errors             =   '';
    private $errorsEnountered   =   array();

	/**
	 * Constructor for a Company
	 *
	 * @param array $data
	 * @author Daniel Noel-Davies
	 * @ignore
	 */
	public function __construct($data = array())
	{
		$language = 'en';

		$this->id = -1;
        $this->company_name = '';

		foreach ($this as $key => $value)
        {
			if( isset( $data[$key] ) )
            {
				$this->$key = $data[$key];
			}
		}

        // Sort out Accounts
        $this->accounts = json_decode( $this->accounts );
        
	}

	public function getCompanyName()
    {
		return $this->company_name;
	}

	public function getCompanyRegNo()
    {
		return $this->company_reg_no;
	}

	public function getCompanyTaxNo()
    {
		return $this->company_tax_no;
	}

	public function getRegionalManagerName()
    {
		return $this->regional_manager_name;
	}

	public function getRegionalManagerEmail()
    {
		return $this->regional_manager_email;
	}

	public function getRegionalManagerPhone()
    {
		return $this->regional_manager_phone;
	}

	public function getCompanyAddress1()
    {
		return $this->company_address_1;
	}

	public function getCompanyAddress2()
    {
		return $this->company_address_2;
	}

	public function getCompanyAddress3()
    {
		return $this->company_address_3;
	}

	public function getCompanyCity()
    {
		return $this->company_address_city;
	}

	public function getCompanyZip()
    {
		return $this->company_address_zip;
	}

	public function getCompanyState()
    {
		return $this->company_address_state;
	}

	public function getCompanyCountry()
    {
		return $this->company_address_country;
	}

	public function getBankName( )
    {
		return $this->bank_name;
	}

	public function getAccountNumber()
    {
		return $this->acc_no;
	}

	public function getSortCode()
    {
		return $this->sort_code;
	}

	public function getSwiftCode()
    {
		return $this->swiftbic;
	}

	public function getIBAN()
    {
		return $this->iban;
	}

    public function getFullAddress( $seperator = '<br />' )
    {
        return implode( $seperator, array_filter( array(
            $this->getCompanyAddress1(),
            $this->getCompanyAddress2(),
            $this->getCompanyAddress3(),
            $this->getCompanyCity(),
            $this->getCompanyState(),
            $this->getCompanyZip(),
            $this->getCompanyCountry()
        )));
    }

    public function getCentralEmail()
    {
        return $this->central_email;
    }

    public function getCountryID()
    {
        return $this->country_id;
    }

    public function getBankID()
    {
        return $this->bank_id;
    }

	public function getTaxRules()
    {
		return json_decode( $this->tax_rules );
	}

    public function setEventID( $eventID )
    {
        $account = 0;
        $db = eZDB::instance();
        $curID   = $db->arrayQuery('
            SELECT cu.id
                FROM
                    events as e
                INNER JOIN event_fees as ef
                    ON ef.event_id = e.id
                INNER JOIN course_fees cf
                    ON cf.id = ef.course_fees_id
                INNER JOIN currencies cu
                      ON cu.id = cf.currency_id
                WHERE e.id = ' . $eventID
        );
        
        // Set the Bank Information to that of this currency
        foreach( $this->accounts as $acc )
        {
            if( $acc->currency == $curID['id'] )
            {
                $account = $acc;
                break;
            }            
        }

        $this->acc_no = $account->acc_no;
        $this->iban   = $account->iban;
        $this->sort_code = $account->sort_code;
        $this->swiftbic = $account->swiftbic;
    }

    public function setCourseID( $courseID )
    {
        $account = 0;
        $db = eZDB::instance();
        
        $curID   = $db->arrayQuery('SELECT cu.id  FROM courses as c  INNER JOIN course_fees cf  ON cf.course_id = c.id
                INNER JOIN currencies cu   ON cu.id = cf.currency_id WHERE c.id = ' . $courseID  );
        
        // Set the Bank Information to that of this currency
        foreach( $this->accounts as $acc )
        {
            if( $acc->currency == $curID[0]['id'] )
            {
                $account = $acc;
                break;
            }            
        }

        $this->acc_no = $account->acc_no;
        $this->iban   = $account->iban;
        $this->sort_code = $account->sort_code;
        $this->swiftbic = $account->swiftbic;
        
    }

     /**
      * Get Name of Country
      *
      * @author Hartley Jean-Aimee
      * @since  2012-03-13
      *
      * @param  $country_id     string      Code of Country
      *
      * @return array
      */
      public function getCountryName( $countryID )
      {
        $conn = $conn ?: get_connection();

        if( empty( $countryID ) )
            return false;

        $result = $conn->GetOne(
            'SELECT name
                FROM `countries_aliases`
                WHERE country_id = ?',
            array( $countryID )
        );

        return( empty( $result ) ? array() : $result );
      }

    /**
	 * Get Tax Percentage to apply to costs
     *
     * @author  Daniel Noel-Davies
     * @since   2012-03-09
     *
     * @return  int     Percentage of Tax
     */
    public static function getTaxRate( )
    {
        global $visitor_country;
        // Get Visitor Country
        if( empty( $visitor_country ) )
            $visitor_country = strtolower( dcdTools::get_visitor_country( ) );
        // Run through our tax rules until we match a result
        foreach( $this->getTaxRules() as $taxRule )
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

        // Nothing? REALLY??
        // Are you sure? =/ There's gotta be some sort of fuck-up here..

        // I'm blaming you!.... Why...? Because I can *Smug-Look*
        return 0;
    }


	/**
	 * Saves the current discipline.
	 *
	 * @return boolean
	 * @author Daniel Noel-Davies
	 * @since 2011-08-31
	 */
	public function save(){
		global $language;

		$conn = get_connection();

		$conn->BeginTrans();

		// If this is an exsisting company...
		if($this->id > 0)
        {
			// ... update the existing download record.
			$result = $conn->Execute(
                'UPDATE dcp_company_info
                    SET company_name = ?, company_reg_no = ?, company_tax_no = ?,
                        regional_manager_name = ?, regional_manager_email = ?,
                        regional_manager_phone = ?, company_address_1 = ?,
                        company_address_2 = ?, company_address_3 = ?,
                        company_address_city = ?, company_address_state = ?,
                        company_address_zip = ?, company_address_country = ?,
                        central_email = ?, bank_id = ?, country_id = ?, tax_rules = ?
                    WHERE id = ?',
                array( $this->getCompanyName(), $this->getCompanyRegNo(),
                        $this->getCompanyTaxNo(), $this->getRegionalManagerName(),
                        $this->getRegionalManagerEmail(), $this->getRegionalManagerPhone(),
                        $this->getCompanyAddress1(), $this->getCompanyAddress2(), $this->getCompanyAddress3(),
                        $this->getCompanyCity(), $this->getCompanyState(), $this->getCompanyZip(),
                        $this->getCompanyCountry(), $this->getCentralEmail(), $this->getBankID(),
                        $this->getCountryID(), $this->tax_rules, $this->id )
            )   or die("Error in query: $result. " . $conn->ErrorMsg());

            $action = 'edit';
		// If this is not an existing page.
		}
        else
        {
			// Insert a new record in to the pages table.
			$result = $conn->Execute(
                'INSERT INTO dcp_company_info(company_name, company_reg_no,
                                                company_tax_no, regional_manager_name,
                                                regional_manager_email, regional_manager_phone,
                                                company_address_1, company_address_2, company_address_3,
                                                company_address_city, company_address_state, company_address_zip,
                                                company_address_country, central_email, bank_id, country_id, tax_rules)
                            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
                array( $this->company_name, $this->company_reg_no,
                        $this->company_tax_no, $this->regional_manager_name,
                        $this->regional_manager_email, $this->regional_manager_phone,
                        $this->company_address_1, $this->company_address_2, $this->company_address_3,
                        $this->company_address_city, $this->company_address_state, $this->company_address_zip,
                        $this->getCountryName( $this->country_id ), $this->central_email, $this->bank_id,
                        $this->country_id, $this->tax_rules )
            )   or die("Error in query: $result. " . $conn->ErrorMsg());

            $action = 'add';

			// Update the locale object with the new page id.
			if($result)
            {
				 $this->id = $conn->Insert_ID();
			}
		}

		if($result)
        {
			$conn->CommitTrans();
		}
        else
        {
			$conn->RollbackTrans();
		}

		// Insert the new revision, marked as current.
		return $action;
	}


	/**
	 * Finds a single discipline based on the ID.
     *
	 * @param int|string page|url
	 * @return Discipline|null
	 * @author Daniel Noel-Davies
	 * @since 2012-02-21
	 * @static
	 */
    public static function find( $id )
    {
        $language = 'en';

    	$db = eZDB::instance();
    	$company_from_db = $db->arrayQuery("
	            SELECT
	                ci.id, ci.company_name, ci.company_reg_no,
	        		ci.company_tax_no, ci.regional_manager_name, ci.regional_manager_email,
	        		ci.regional_manager_phone, ci.company_address_1, ci.company_address_2,
	        		ci.company_address_3, ci.company_address_city, ci.company_address_state,
	        		ci.company_address_zip, ci.country_id, ci.bank_id, ci.central_email, ci.tax_rules,
	        		bi.bank_name, bi.acc_no, bi.sort_code, bi.iban, bi.swiftbic,
	                bi.accounts as accounts,
	                co.id AS country_code, co.name AS company_address_country,
	                co.continent_id
	            FROM dcp_company_info ci
	                LEFT JOIN dcp_bank_info bi  ON ci.bank_id = bi.id
	                LEFT JOIN countries co      ON ci.country_id = co.id
	            WHERE ci.id = '" .  $id . "'" );

        return !empty( $company_from_db )
            ? new Company( $company_from_db[0] ) 
            : null;
	}

    /**
	* Associates Error Codes with message
	*
	* @param $errorCode		int		Error Code Number
	*
	* @return bool
	* @author Hartley Jean-Aimee
	* @since 2012-03-07
	*/
	public function errorMsg( $errorCode )
	{
		$errorCodes = array(
            101 =>  'Please make a selection.',

            102 =>  'Either make a selection, or add a new bank.'

        );

        if(  array_key_exists( $errorCode, $errorCodes )
        &&  !in_array( $errorCode, $this->errorsCountered ) )
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
     * Delete Company Record
     *
     * @author  Hartley Jean-Aimee
     * @since   2012-03-16
     *
     * @param   $coID       id      Company Id
     *
     * @return bool
     */
     public function delCompany( $coID )
     {
        $conn = get_connection();

        if( !is_numeric( $coID ) )
            return false;

        $result =  $conn->Execute(
            'DELETE FROM `dcp_company_info`
                WHERE id = ?',
            array( $coID )
        );
        return( $result ? true : false );
     }

    /**
     * List/Search Companies
     *
     * @author  Hartley Jean-Aimee
     * @since   2012-02-29
     *
     * @param   $coName       string      Name of Company
     *
     * @return bool
     *
     * @todo Move printf to view
     *
     * Function is not currently being used (Table View)
     */
     public function listCompanies( $coName='', $return = false )
     {
        $conn = $conn ?: get_connection();

        if( is_array( $coName ) && $return === true  )
        {
            $result = $conn->GetAssoc(
                'SELECT ' . join( ',', $coName ) . '
                    FROM `dcp_company_info`'
            );

            return $result;
        }

        if( empty ( $coName ) && is_null( $coName ) )
            return false;

    }
}
