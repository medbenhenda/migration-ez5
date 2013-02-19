<?php

namespace Dcd\DcdGroupBundle\Controller;

use eZ\Bundle\EzPublishCoreBundle\Controller;
use eZ\Publish\API\Repository\Values\Content\Query;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use eZ\Publish\API\Repository\Values\Content\Query\SortClause;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use eZ\Publish\API\Repository\Values\Content\Search\SearchResult;
use \DateTime;
use eZINI;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($contentId)
    {
        
        //return $this->render('DcdDcdGroupBundle:Default:index.html.twig', array('name' => $name));
        $repository = $this->getRepository();
        $myContent = $repository->getContentService()->loadContent( $contentId );

        return $this->render(
            'DcdDcdGroupBundle:content:index.html.twig',
            array( 'content' => $myContent )
        );
    }
    
    public function headerAction(  )
    {
        $settingName = 'MarketNodeID';
        $myLegacySetting = $this->getLegacyKernel()->runCallback(
            function () use ( $settingName )
            {
                // Here you can reuse $settingName and $test variables inside the legacy context
                $ini = eZINI::instance( 'group.ini' );
                return $ini->variable( 'ImportantNodeID', $settingName );
            }
        );
        $response = new Response;
        $response->setPublic();

        $location = $this->getRepository()->getLocationService()->loadLocation( $myLegacySetting );
        $content = $this->getRepository()->getContentService()->loadContent( $location->contentId );
        return $this->render(
            "DcdDcdGroupBundle::page_header.html.twig",
            array(
                "content" => $content
            ),
            $response
        );
    }
    public function marketAction( $locationId )
    {
        $settingName = 'MarketNodeID';
        $myLegacySetting = $this->getLegacyKernel()->runCallback(
            function () use ( $settingName )
            {
                // Here you can reuse $settingName and $test variables inside the legacy context
                $ini = eZINI::instance( 'group.ini' );
                return $ini->variable( 'ImportantNodeID', $settingName );
            }
        );
        $response = new Response;
        $response->setPublic();

        $location = $this->getRepository()->getLocationService()->loadLocation( $myLegacySetting );
        $content = $this->getRepository()->getContentService()->loadContent( $location->contentId );
        return $this->render(
            "DcdDcdGroupBundle::page_header.html.twig",
            array(
                "content" => $content
            ),
            $response
        );
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
            "DcdDcdGroupBundle::page_topmenu.html.twig",
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
            "DcdDcdGroupBundle:footer:latest_content.html.twig",
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
            "DcdDcdGroupBundle::page_footer.html.twig",
            array(
                "content" => $content
            ),
            $response
        );
    }
}
