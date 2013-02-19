<?php
    class eZdcdSSOHandler
    {
        public function __construct()
        {
         // Here you can make initialization stuffs for your handler
        }
 
        /**
         * Return a eZUser PHP object to be logged in eZ Publish
         * If authentication fails, just return false
         */
        public function handleSSOLogin()
        {
            $currentUser = false; // Default value that we return if authentication fails.
 
            // Here you can do everything you need to identify your user (interface with SSO, search the SSO database...)
            // In all cases, you must return a valid eZ Publish user or false
            // User must be created if needed
            
            if (phpCAS::checkAuthentication())
            {
            	$currentUser = eZUser::fetchByName(phpCAS::getUser());
            
            
            	if(!is_object( $currentUser ))
            	{
            		$currentUser=false;
            	}
            }
            
            
            return $currentUser;
        }
    }