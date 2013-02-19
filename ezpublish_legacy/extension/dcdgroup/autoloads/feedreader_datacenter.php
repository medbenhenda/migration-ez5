<?php

class feedReaderDatacenter
{
    /**
     * Constructor
     * 
     */
    function __construct()
    {
    }

    /**
     * Return an array with the template operator name.
     * 
     * @return array
     */
    public function operatorList()
    {
        return array( 'feedreader_datacenter' );
    }

    /**
     * Return true to tell the template engine that the parameter list exists per operator type,
     * this is needed for operator classes that have multiple operators.
     * 
     * @return bool
     */
    function namedParameterPerOperator()
    {
        return true;
    }

    /**
     * Returns an array of named parameters, this allows for easier retrieval
     * of operator parameters. This also requires the function modify() has an extra
     * parameter called $namedParameters.
     * 
     * @return array
     */
    public function namedParameterList()
    {
        return array( 'feedreader_datacenter' => array( 'source' => array( 'type' => 'string',
                                                                'required' => true,
                                                                'default' => '' ),
                                             'limit' => array( 'type' => 'integer',
                                                               'required' => false,
                                                               'default' => 0 ),
                                             'offset' => array( 'type' => 'integer',
                                                                'required' => false,
                                                                'default' => 0 ) ) );
    }

    /**
     * Executes the PHP function for the operator cleanup and modifies $operatorValue.
     * 
     * @param eZTemplate $tpl
     * @param string $operatorName
     * @param array $operatorParameters
     * @param string $rootNamespace
     * @param string $currentNamespace
     * @param mixed $operatorValue
     * @param array $namedParameters
     */
    public function modify( $tpl, $operatorName, $operatorParameters, $rootNamespace, $currentNamespace, &$operatorValue, $namedParameters )
    {
        switch ( $operatorName )
        {
            case 'feedreader_datacenter':
                $source = isset( $namedParameters['source'] ) ? $namedParameters['source'] : '';
                $limit = isset( $namedParameters['limit'] ) ? $namedParameters['limit'] : 0;
                $offset = isset( $namedParameters['offset'] ) ? $namedParameters['offset'] : 0;
                $res = array();
                $sourceXML = eZHTTPTool::getDataByURL( $namedParameters['source'] );

                try
                {
                    $feed = ezcFeed::parseContent( $sourceXML );
                }
                catch( Exception $e )
                {
                    $res['error'] = $e->getMessage();
                    $operatorValue = $res;
                    return;
                }

                $res['title'] = isset( $feed->title ) ? $feed->title->__toString() : null;
                
                $res['links'] = self::buildLinksArray( isset( $feed->link ) ? $feed->link : array() );

                $items = isset( $feed->item ) ? $feed->item : array();

                $counter = 0;
                foreach( $items as $item )
                {
                    $counter++;
                    if ( $counter <= $offset )
                        continue;
                    $title = isset( $item->title ) ? $item->title->__toString() : null;
                    
                    $a_type_feed = explode(']', $title);
                    $type_feed = str_replace("[", "", $a_type_feed[0]);
                    $description = isset( $item->description ) ? $item->description->__toString() : null;
                    $content = isset( $item->content ) ? $item->content->__toString() : null;
                    $published = isset( $item->pubDate ) ? $item->pubDate->date->format( 'U' ) : null;
                    
                    $creator = isset( $item->DublinCore->creator[0]->name ) ? $item->DublinCore->creator[0]->name : null;

                    $links = self::buildLinksArray( isset( $item->link ) ? $item->link : array() );

                    $res['items'][] = array( 'type_feed' => $title,
                    						 'title' => $type_feed,
                                             'links' => $links,
                                             'description' => $description,
                                             'content' => $content,
                                             'published' => $published,
                                             'creator' => $creator,
                                            );

                    if ( $counter == ( $limit + $offset ) )
                        break;
                }

                $operatorValue = $res;
                break;
        }
    }

    /**
     * Helper function used for building a links array.
     * 
     * @param array $linkArray
     * @return array
     */
    public static function buildLinksArray( array $linkArray )
    {
        $links = array();
        if ( is_array( $linkArray ) )
        {
            foreach ( $linkArray as $link )
            {
                $links[] = $link->href;
            }
        }

        return $links;
    }
}

?>