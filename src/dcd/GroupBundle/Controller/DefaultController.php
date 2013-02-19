<?php

namespace dcd\GroupBundle\Controller;

use eZ\Bundle\EzPublishCoreBundle\Controller;
use eZ\Publish\API\Repository\Values\Content\Query;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use eZ\Publish\API\Repository\Values\Content\Query\SortClause;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use eZ\Publish\API\Repository\Values\Content\Search\SearchResult;
use \DateTime;
use \eZINI;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('dcdGroupBundle:Default:index.html.twig', array('name' => $name));
    }
    
    /**
     * Renders the top menu, with cache control
     *
     * @param int $locationId
     * @param array $excludeContentTypes
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function topMenuAction( $locationId, array $excludeContentTypes = array() )
    {
        $response = new Response;
        $response->setPublic();
        $response->setMaxAge( 60 );
        $location = $this->getRepository()->getLocationService()->loadLocation( $locationId );

        $excludeCriterion = array();
        if ( !empty( $excludeContentTypes ) )
        {
            foreach ( $excludeContentTypes as $contentTypeIdentifier )
            {
                $contentType = $this->getRepository()->getContentTypeService()->loadContentTypeByIdentifier( $contentTypeIdentifier );
                $excludeCriterion[] = new Criterion\LogicalNot(
                    new Criterion\ContentTypeId( $contentType->id )
                );
            }
        }
        $criteria = array(
            new Criterion\Subtree( $location->pathString ),
            new Criterion\ParentLocationId( $locationId ),
            new Criterion\Visibility( Criterion\Visibility::VISIBLE )
        );

        if ( !empty( $excludeCriterion ) )
            $criteria[] = new Criterion\LogicalAnd( $excludeCriterion );

        $query = new Query(
            array(
                'criterion' => new Criterion\LogicalAnd(
                    $criteria
                ),
                'sortClauses' => array(
                    new SortClause\DatePublished( Query::SORT_DESC )
                )
            )
        );

        $searchResult = $this->getRepository()->getSearchService()->findContent( $query );

        $locationList = array();
        if ( $searchResult instanceof SearchResult )
        {
            foreach ( $searchResult->searchHits as $searchHit )
            {
                $locationList[] = $this->getRepository()->getLocationService()->loadLocation( $searchHit->valueObject->contentInfo->mainLocationId );
            }
        }

        return $this->render(
            "dcdGroupBundle::page_topmenu.html.twig",
            array(
                "locationList" => $locationList
            ),
            $response
        );
    }

    /**
     * Renders the latest content for footer, with cache control
     *
     * @param string $pathString
     * @param string $contentTypeIdentifier
     * @param int $limit
     * @param array $excludeLocations
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function latestContentAction( $pathString, $contentTypeIdentifier, $limit, array $excludeLocations = array() )
    {
        $response = new Response;
        $response->setPublic();
        $response->setMaxAge( 60 );

        $contentType = $this->getRepository()->getContentTypeService()->loadContentTypeByIdentifier( $contentTypeIdentifier );

        $excludeCriterion = array();
        if ( !empty( $excludeLocations ) )
        {
            foreach ( $excludeLocations as $locationId )
            {
                $excludeCriterion[] = new Criterion\LogicalNot(
                    new Criterion\LocationId( $locationId )
                );
            }
        }
        $criteria = array(
            new Criterion\Subtree( $pathString ),
            new Criterion\ContentTypeId( $contentType->id ),
            new Criterion\Visibility( Criterion\Visibility::VISIBLE )
        );

        if ( !empty( $excludeCriterion ) )
            $criteria[] = new Criterion\LogicalAnd( $excludeCriterion );

        $query = new Query(
            array(
                'criterion' => new Criterion\LogicalAnd(
                    $criteria
                ),
                'sortClauses' => array(
                    new SortClause\DatePublished( Query::SORT_DESC )
                )
            )
        );
        $query->limit = $limit;

        return $this->render(
            "dcdGroupBundle:footer:latest_content.html.twig",
            array(
                "latestContent" => $this->getRepository()->getSearchService()->findContent( $query )
            ),
            $response
        );
    }

    public function footerAction( $locationId )
    {
        $response = new Response;
        $response->setPublic();
        $response->setMaxAge( 60 );

        $location = $this->getRepository()->getLocationService()->loadLocation( $locationId );
        $content = $this->getRepository()->getContentService()->loadContent( $location->contentId );

        return $this->render(
            "dcdGroupBundle::page_footer.html.twig",
            array(
                "content" => $content
            ),
            $response
        );
    }
    
    public function headerAction( array $excludeContentTypes = array() )
    {
        $settingName = 'MarketNodeID';
        $locationId  = $this->getLegacyKernel()->runCallback(
            function () use ( $settingName )
            {
                // Here you can reuse $settingName and $test variables inside the legacy context
                $ini = eZINI::instance( 'group.ini' );
                return $ini->variable( 'ImportantNodeID', $settingName );
            }
        );
        
        $varName = 'RegionNodeID';
        $regionNodeId  = $this->getLegacyKernel()->runCallback(
            function () use ( $varName )
            {
                // Here you can reuse $settingName and $test variables inside the legacy context
                $ini = eZINI::instance( 'group.ini' );
                return $ini->variable( 'ImportantNodeID', $varName );
            }
        );
        
        $response = new Response;
        $response->setPublic();
        $response->setMaxAge( 60 );
        $location = $this->getRepository()->getLocationService()->loadLocation( $locationId );
        $region = $this->getRepository()->getLocationService()->loadLocation( $regionNodeId );
        $excludeCriterion = array();
        if ( !empty( $excludeContentTypes ) )
        {
            foreach ( $excludeContentTypes as $contentTypeIdentifier )
            {
                $contentType = $this->getRepository()->getContentTypeService()->loadContentTypeByIdentifier( $contentTypeIdentifier );
                $excludeCriterion[] = new Criterion\LogicalNot(
                    new Criterion\ContentTypeId( $contentType->id )
                );
            }
        }
        $criteria = array(
            new Criterion\Subtree( $location->pathString ),
            new Criterion\ParentLocationId( $locationId ),
            new Criterion\Visibility( Criterion\Visibility::VISIBLE )
        );

        if ( !empty( $excludeCriterion ) )
            $criteria[] = new Criterion\LogicalAnd( $excludeCriterion );

        $query = new Query(
            array(
                'criterion' => new Criterion\LogicalAnd(
                    $criteria
                ),
                'sortClauses' => array(
                    new SortClause\DatePublished( Query::SORT_DESC )
                )
            )
        );

        $searchResult = $this->getRepository()->getSearchService()->findContent( $query );
        
        $locationList = array();
        if ( $searchResult instanceof SearchResult )
        {
            foreach ( $searchResult->searchHits as $searchHit )
            {
                $locationList[] = $this->getRepository()->getLocationService()->loadLocation( $searchHit->valueObject->contentInfo->mainLocationId );
            }
        }
        //$resultRegion = setCriteria($region, $excludeContentTypes, $regionNodeId, "pathString" );
        
        $excludeCriterion = array();
        if ( !empty( $excludeContentTypes ) )
        {
            foreach ( $excludeContentTypes as $contentTypeIdentifier )
            {
                $contentType = $this->getRepository()->getContentTypeService()->loadContentTypeByIdentifier( $contentTypeIdentifier );
                $excludeCriterion[] = new Criterion\LogicalNot(
                    new Criterion\ContentTypeId( $contentType->id )
                );
            }
        }
        $criteria = array(
            new Criterion\Subtree( $region->pathString ),
            new Criterion\ParentLocationId( $regionNodeId ),
            new Criterion\Visibility( Criterion\Visibility::VISIBLE )
        );

        if ( !empty( $excludeCriterion ) )
            $criteria[] = new Criterion\LogicalAnd( $excludeCriterion );

        $query = new Query(
            array(
                'criterion' => new Criterion\LogicalAnd(
                    $criteria
                ),
                'sortClauses' => array(
                    new SortClause\DatePublished( Query::SORT_DESC )
                )
            )
        );

        $regionResult = $this->getRepository()->getSearchService()->findContent( $query );
        $regionList = array();
        if ( $searchResult instanceof SearchResult )
        {
            foreach ( $regionResult->searchHits as $searchHit )
            {
                $regionList[] = $this->getRepository()->getLocationService()->loadLocation( $searchHit->valueObject->contentInfo->mainLocationId );
            }
        }
        
        return $this->render(
            "dcdGroupBundle::page_topmenu.html.twig",
            array(
                "locationList" => $locationList,
                "RegionList" => $regionList
            ),
            $response
        );
    }
    
    public function marketAction( $locationId, array $excludeContentTypes = array() )
    {
       
        $response = new Response;
        $response->setPublic();
        $response->setMaxAge( 60 );
        $location = $this->getRepository()->getLocationService()->loadLocation( $locationId );

        $excludeCriterion = array();
        if ( !empty( $excludeContentTypes ) )
        {
            foreach ( $excludeContentTypes as $contentTypeIdentifier )
            {
                $contentType = $this->getRepository()->getContentTypeService()->loadContentTypeByIdentifier( $contentTypeIdentifier );
                $excludeCriterion[] = new Criterion\LogicalNot(
                    new Criterion\ContentTypeId( $contentType->id )
                );
            }
        }
        $criteria = array(
            new Criterion\Subtree( $location->pathString ),
            new Criterion\ParentLocationId( $locationId ),
            new Criterion\Visibility( Criterion\Visibility::VISIBLE )
        );

        if ( !empty( $excludeCriterion ) )
            $criteria[] = new Criterion\LogicalAnd( $excludeCriterion );

        $query = new Query(
            array(
                'criterion' => new Criterion\LogicalAnd(
                    $criteria
                ),
                'sortClauses' => array(
                    new SortClause\DatePublished( Query::SORT_DESC )
                )
            )
        );

        $searchResult = $this->getRepository()->getSearchService()->findContent( $query );
        
        $locationList = array();
        if ( $searchResult instanceof SearchResult )
        {
            foreach ( $searchResult->searchHits as $searchHit )
            {
                $locationList[] = $this->getRepository()->getLocationService()->loadLocation( $searchHit->valueObject->contentInfo->mainLocationId );
            }
        }

        return $this->render(
            "dcdGroupBundle:content:market.html.twig",
            array(
                "locationList" => $locationList
            ),
            $response
        );
    }
    
    function setCriteria ($location, $excludeContentTypes, $nodeId, $mode="pathString"){
        
        
        return $locationList;
    }
    
}
