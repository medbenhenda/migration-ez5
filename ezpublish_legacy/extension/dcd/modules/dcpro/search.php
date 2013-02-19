<?php
/**
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.8
 * @package kernel
 */

/*!
 Get search limit
 */
function pageLimit( $searchPageLimit )
{
    switch ( $searchPageLimit )
    {
        case 1:
            return 5;

        case 2:
        default:
            return 10;

        case 3:
            return 20;

        case 4:
            return 30;

        case 5:
            return 50;
    }
}

$http = eZHTTPTool::instance();

$Module = $Params['Module'];
$Offset = $Params['Offset'];

if ( !is_numeric( $Offset ) )
    $Offset = 0;

$searchPageLimit = 2;
$tpl = eZTemplate::factory();
$ini = eZINI::instance();
$content_ini = eZINI::instance( 'content.ini');
$useSearchCode = $ini->variable( 'SearchSettings', 'SearchViewHandling' ) == 'default';
$logSearchStats = $ini->variable( 'SearchSettings', 'LogSearchStats' ) == 'enabled';

$searchText = '';
$originalSearchText = '';
$phraseSearchText = '';

if ( $http->hasVariable( 'BrowsePageLimit' ) )
{
    $pageLimit = $http->variable( 'BrowsePageLimit' );
}
else
{
    if ( $http->hasVariable( 'SearchPageLimit' ) )
    {
        $searchPageLimit = $http->variable( 'SearchPageLimit' );
    }
    $pageLimit = pageLimit( $searchPageLimit );
}

$maximumSearchLimit = $ini->variable( 'SearchSettings', 'MaximumSearchLimit' );
if ( $pageLimit > $maximumSearchLimit )
    $pageLimit = $maximumSearchLimit;

$fullSearchText = '';
if ( $http->hasVariable( 'q' ) )
{
	if ( $searchText != '' )
		$searchText .= ' ';
	$originalSearchText = $http->variable( 'q' );
	$searchText .= $originalSearchText;
	$fullSearchText = $http->variable( 'q' );
}


$searchContentClassID = -1;
$search_contentclassID = $searchContentClassID;
$searchContentClassAttributes = 0;
$searchContentClassAttributeArray = array();
if ( $http->hasVariable( 'SearchContentClassID' ) and
		$http->variable( 'SearchContentClassID' ) != -1 )
{
	$searchContentClassID = $http->variable( 'SearchContentClassID' );
	$search_contentclassID = $http->variable( 'SearchContentClassID' );
	if ( (int) $searchContentClassID > 0 )
	{
		$searchContentClass = eZContentClass::fetch( (int) $searchContentClassID );
		if ( is_object( $searchContentClass ) )
			$searchContentClassAttributeArray = $searchContentClass->fetchSearchableAttributes();
	}
}

$searchSectionID = -1;
$searchTimestamp = false;

$searchType = "fulltext";
if ( $http->hasVariable( "SearchType" ) )
{
    $searchType = $http->variable( "SearchType" );
}

$subTreeArray = array( $content_ini->variable( 'NodeSettings', 'RootNode' ) );


$searchDisciplines = '';
$search_delimiter = '';
if ( $http->hasVariable( 'disciplines' ) )
{
	$searchDisciplines = $http->variable( 'disciplines' );
	if ( $searchDisciplines != "" )
	{
	//	$searchContentClassAttributeID = array( 549 );

		$searchText = $searchDisciplines ;
		$phraseSearchText = $searchDisciplines;
		$search_delimiter = ' ';

	}
	
}

$searchCourseType = '';
if ( $http->hasVariable( 'course_type' ) )
{
	$searchCourseType = $http->variable( 'course_type' );
	if ( $searchCourseType != "" )
	{
		
	/*	
	
	   if(count($searchContentClassAttributeID) >= 1){
			array_push($searchContentClassAttributeID, 526 );
		}
		else{
			$searchContentClassAttributeID = array( 526 );
		}
	*/
		$searchText .=  $search_delimiter . $searchCourseType ;
		$phraseSearchText = $searchCourseType;

	}
}

$searchLocations = '';

if ( $http->hasVariable( 'course_filter_location' ) )
{
	$searchLocation = $http->variable( 'course_filter_location' );
	if ( $searchLocation != "" )
	{
		/*	
		 * TODO Implement location filter
		*/
	}
}

$Module->setTitle( "Search for: $searchText" );

if ( $useSearchCode )
{
	
    $sortArray = array( array( 'attribute', true, 153 ), array( 'priority', true ) );
    $searchResult = eZSearch::search( $searchText, array( "SearchType" => $searchType,
                                                          "SearchSectionID" => $searchSectionID,
												    	  'SearchContentClassID' => $searchContentClassID,	
                                                          "SearchSubTreeArray" => $subTreeArray,
                                                          'SearchTimestamp' => $searchTimestamp,
                                                          "SearchLimit" => $pageLimit,
                                                          "SearchOffset" => $Offset ) );
    
    
}

if ( $searchSectionID != -1 )
{
    $res = eZTemplateDesignResource::instance();
    $section = eZSection::fetch( $searchSectionID );
    $keyArray = array( array( 'section', $searchSectionID ),
                       array( 'section_identifier', $section->attribute( 'identifier' ) ) );
    $res->setKeys( $keyArray );
}

$viewParameters = array( 'offset' => $Offset );

$searchData = false;
$tpl->setVariable( "search_data", $searchData );
$tpl->setVariable( "search_section_id", $searchSectionID );
$tpl->setVariable( "search_subtree_array", $subTreeArray );
$tpl->setVariable( 'search_timestamp', $searchTimestamp );
$tpl->setVariable( 'search_contentclass_id', $search_contentclassID );
$tpl->setVariable( 'search_course_type', $searchCourseType );
$tpl->setVariable( 'search_disciplines', $searchDisciplines );
$tpl->setVariable( 'search_locations', $searchLocations );
$tpl->setVariable( "search_text", $searchText );
$tpl->setVariable( 'search_page_limit', $searchPageLimit );

$tpl->setVariable( "view_parameters", $viewParameters );
$tpl->setVariable( 'use_template_search', !$useSearchCode );

if ( $http->hasVariable( 'Mode' ) && $http->variable( 'Mode' ) == 'browse' )
{
	echo "BROWSE";
	
    if( !isset( $searchResult ) )
        $searchResult = eZSearch::search( $searchText, array( "SearchType" => $searchType,
                                                              "SearchSectionID" => $searchSectionID,
												        	  'SearchContentClassID' => $searchContentClassID,
												        	  'SearchContentClassAttributeID' => $searchContentClassAttributeID,        		
                                                              "SearchSubTreeArray" => $subTreeArray,
                                                              'SearchTimestamp' => $searchTimestamp,
                                                              "SearchLimit" => $pageLimit,
                                                              "SearchOffset" => $Offset ) );
    $sys = eZSys::instance();
    $searchResult['RequestedURI'] = "content/search";
//    $searchResult['RequestedURISuffix'] = $sys->serverVariable( "QUERY_STRING" );


    $searchResult['RequestedURISuffix'] = 'SearchText=' . urlencode ( $searchText ) . ( ( $searchTimestamp > 0 ) ?  '&SearchTimestamp=' . $searchTimestamp : '' ) . '&BrowsePageLimit=' . $pageLimit . '&Mode=browse';
    return $Module->run( 'browse',array(),array( "NodeList" => $searchResult,
                                                 "Offset" => $Offset,
                                                 "NodeID" => isset( $subTreeArray[0] ) && $subTreeArray[0] != 1 ? $subTreeArray[0] : null  ) );
}

// --- Compatibility code start ---
if ( $useSearchCode )
{
    $tpl->setVariable( "offset", $Offset );
    $tpl->setVariable( "page_limit", $pageLimit );
    $tpl->setVariable( "search_text_enc", urlencode( $searchText ) );
    $tpl->setVariable( "search_result", $searchResult["SearchResult"] );
    $tpl->setVariable( "search_count", $searchResult["SearchCount"] );
    $tpl->setVariable( "stop_word_array", $searchResult["StopWordArray"] );
    if ( isset( $searchResult["SearchExtras"] ) )
    {
        $tpl->setVariable( "search_extras", $searchResult["SearchExtras"] );
    }
}
else
{
    $tpl->setVariable( "offset", false );
    $tpl->setVariable( "page_limit", false );
    $tpl->setVariable( "search_text_enc", false );
    $tpl->setVariable( "search_result", false );
    $tpl->setVariable( "search_count", false );
    $tpl->setVariable( "stop_word_array", false );
}
// --- Compatibility code end ---

$contentInfoArray = array();

$tpl = eZTemplate::factory();

$tpl->setVariable( 'persistent_variable', false );

$Result = array();
$Result['content'] = $tpl->fetch( "design:content/search.tpl" );
$Result['path'] = array( array( 'text' => ezpI18n::tr( 'kernel/content', 'Search' ),
                                'url' => false ) );

$contentInfoArray['persistent_variable'] = false;
if ( $tpl->variable( 'persistent_variable' ) !== false )
	$contentInfoArray['persistent_variable'] = $tpl->variable( 'persistent_variable' );

$Result['content_info'] = $contentInfoArray;

$searchData = false;
if ( !$useSearchCode )
{
    if ( $tpl->hasVariable( "search_data" ) )
    {
        $searchData = $tpl->variable( "search_data" );
    }
}
else
{
    $searchData = $searchResult;
}

if ( $logSearchStats and
     trim( $searchText ) != "" and
     is_array( $searchData ) and
     array_key_exists( 'SearchCount', $searchData ) and
     is_numeric( $searchData['SearchCount'] ) )
{
    eZSearchLog::addPhrase( $searchText, $searchData["SearchCount"] );
}

?>
