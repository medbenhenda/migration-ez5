<?php

class BaseObject { 

	protected $id, $active, $created_at, $modified_at;
	
    public function __construct() { 
	
    } 


	/**
	 * Deactivates the current url
	 *
	 * @return void
	 * @author James Pearson
	 * @since  2011-08-23
	 * @todo Rename the old file, update the filename
	 */
	public function deactivate(){
		$this->active = 0;
	}


	/**
	 * Returns the ID for the current banner, or -1 if the banner has not been saved,
	 *
	 * @return int
	 * @author James Pearson
	 * @since 2011-08-22
	 */
	public function getID(){
		return $this->id;
	}


	
	public function getActive(){
		return $this->active;
	}
	
	public function getLastModified(){
		
		if(!empty($this->modified_at)){
			return $this->modified_at;
		} else {
			return "N/A";
		}
		
	}
} ?>