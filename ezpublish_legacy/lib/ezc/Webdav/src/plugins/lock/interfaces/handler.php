<?php
/**
 * File containing the ezcWebdavLockRequestResponseHandler interface.
 *
 * @package Webdav
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2010 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 *
 * @access private
 */
/**
 * Interface for lock request/response handlers.
 * 
 * @package Webdav
 * @version //autogen//
 *
 * @access private
 */
abstract class ezcWebdavLockRequestResponseHandler
{
    /**
     * If this handler requires the backend to get locked. 
     * 
     * @var bool
     */
    public $needsBackendLock = true;

    /**
     * Lock tools. 
     * 
     * @var ezcWebdavLockTools
     */
    protected $tools;

    /**
     * Creates a new request/response handler.
     *
     * The handler receives a $tools object for usage.
     * 
     * @param ezcWebdavLockTools $tools 
     */
    public function __construct( ezcWebdavLockTools $tools )
    {
        $this->tools = $tools;
    }

    /**
     * Callback if the handled request is received.
     *
     * This callback is called, if a request handled by this class is received.
     * The $request object is given for handling. The method may return an
     * instance of {@link ezcWebdavResponse}, if a problem occured or the
     * request was completely handled or null, to make the backend handle the
     * request.
     *
     * The given $request may be manipulated, but that must happen with most
     * care, to not influence any other plugins.
     * 
     * @param ezcWebdavRequest $request 
     * @return ezcWebdavResponse|null
     */
    abstract public function receivedRequest( ezcWebdavRequest $request );

    /**
     * Callback if a response was generated for the handled request.
     *
     * If the method {@link receivedRequest()} returned null and the backend
     * has processed the request, the generated $response will be submitted to
     * this method. The handler may perform arbitrary operations, including the
     * manipulation of the $response. Again, this manipulation must happen most
     * carefully, to not influence other plugins
     *
     * The method might return null, to indicate that the submitted response
     * should be send, or a different instance of {@link ezcWebdavResponse} to
     * replace the one generated by the backend. This should only be done in
     * rare cases!
     * 
     * @param ezcWebdavResponse $response 
     * @return ezcWebdavResponse|null
     */
    abstract public function generatedResponse( ezcWebdavResponse $response );
}

?>
