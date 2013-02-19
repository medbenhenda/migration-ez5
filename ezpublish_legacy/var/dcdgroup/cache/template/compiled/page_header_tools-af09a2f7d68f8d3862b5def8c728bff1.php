<?php
// URI:       design:_common/page_header_tools.tpl
// Filename:  extension/dcdgroup/design/group/templates/_common/page_header_tools.tpl
// Timestamp: 1361219361 (Mon Feb 18 21:29:21 CET 2013)
$oldSetArray_6bed1e15ca65ce21d495f4e51b642432 = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/dcdgroup/cache/template/compiled/common.php' );

$text .= '
<!-- START: including template: extension/dcdgroup/design/group/templates/_common/page_header_tools.tpl (design:_common/page_header_tools.tpl) -->
';
// def $marketnode
if ( $tpl->hasVariable( 'marketnode', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'marketnode' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1037,
  ),
  2 => 'extension/dcdgroup/design/group/templates/_common/page_header_tools.tpl',
) );
    $tpl->setVariable( 'marketnode', '166', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'marketnode', '166', $rootNamespace );
}

// def $locations
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'marketnode', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['marketnode'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => $var1,
    'sort_by' => array(),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => false,
    'depth' => 2,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "folder" ),
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'locations', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'locations' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1037,
  ),
  2 => 'extension/dcdgroup/design/group/templates/_common/page_header_tools.tpl',
) );
    $tpl->setVariable( 'locations', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'locations', $var, $rootNamespace );
}

// def $regionnode
if ( $tpl->hasVariable( 'regionnode', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'regionnode' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1037,
  ),
  2 => 'extension/dcdgroup/design/group/templates/_common/page_header_tools.tpl',
) );
    $tpl->setVariable( 'regionnode', '135', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'regionnode', '135', $rootNamespace );
}

// def $regions
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'regionnode', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['regionnode'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => $var1,
    'sort_by' => array( "priority",
       true ),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => false,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "region" ),
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'regions', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'regions' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1037,
  ),
  2 => 'extension/dcdgroup/design/group/templates/_common/page_header_tools.tpl',
) );
    $tpl->setVariable( 'regions', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'regions', $var, $rootNamespace );
}

// def $id_region
if ( $tpl->hasVariable( 'id_region', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'id_region' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1037,
  ),
  2 => 'extension/dcdgroup/design/group/templates/_common/page_header_tools.tpl',
) );
    $tpl->setVariable( 'id_region', 'region_north', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'id_region', 'region_north', $rootNamespace );
}

$text .= '
<div class="topsearch">
    <ul>
        <li class=""><div class="top_country">
            <span id="country2">Market</span>
            <div id="countries">
                <div id="countries_content">
                	<h2>DatacenterDynamics by Country</h2>
                    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_80b3ac098387192619594adc7219c715_2 ) ) $fe_variable_stack_80b3ac098387192619594adc7219c715_2 = array();
$fe_variable_stack_80b3ac098387192619594adc7219c715_2[] = compact( 'fe_array_80b3ac098387192619594adc7219c715_2', 'fe_array_keys_80b3ac098387192619594adc7219c715_2', 'fe_n_items_80b3ac098387192619594adc7219c715_2', 'fe_n_items_processed_80b3ac098387192619594adc7219c715_2', 'fe_i_80b3ac098387192619594adc7219c715_2', 'fe_key_80b3ac098387192619594adc7219c715_2', 'fe_val_80b3ac098387192619594adc7219c715_2', 'fe_offset_80b3ac098387192619594adc7219c715_2', 'fe_max_80b3ac098387192619594adc7219c715_2', 'fe_reverse_80b3ac098387192619594adc7219c715_2', 'fe_first_val_80b3ac098387192619594adc7219c715_2', 'fe_last_val_80b3ac098387192619594adc7219c715_2' );
unset( $fe_array_80b3ac098387192619594adc7219c715_2 );
unset( $fe_array_80b3ac098387192619594adc7219c715_2 );
$fe_array_80b3ac098387192619594adc7219c715_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locations', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locations'] : null;
if (! isset( $fe_array_80b3ac098387192619594adc7219c715_2 ) ) $fe_array_80b3ac098387192619594adc7219c715_2 = NULL;
while ( is_object( $fe_array_80b3ac098387192619594adc7219c715_2 ) and method_exists( $fe_array_80b3ac098387192619594adc7219c715_2, 'templateValue' ) )
    $fe_array_80b3ac098387192619594adc7219c715_2 = $fe_array_80b3ac098387192619594adc7219c715_2->templateValue();

$fe_array_keys_80b3ac098387192619594adc7219c715_2 = is_array( $fe_array_80b3ac098387192619594adc7219c715_2 ) ? array_keys( $fe_array_80b3ac098387192619594adc7219c715_2 ) : array();
$fe_n_items_80b3ac098387192619594adc7219c715_2 = count( $fe_array_keys_80b3ac098387192619594adc7219c715_2 );
$fe_n_items_processed_80b3ac098387192619594adc7219c715_2 = 0;
$fe_offset_80b3ac098387192619594adc7219c715_2 = 0;
$fe_max_80b3ac098387192619594adc7219c715_2 = $fe_n_items_80b3ac098387192619594adc7219c715_2 - $fe_offset_80b3ac098387192619594adc7219c715_2;
$fe_reverse_80b3ac098387192619594adc7219c715_2 = false;
if ( $fe_offset_80b3ac098387192619594adc7219c715_2 < 0 || $fe_offset_80b3ac098387192619594adc7219c715_2 >= $fe_n_items_80b3ac098387192619594adc7219c715_2 )
{
    $fe_offset_80b3ac098387192619594adc7219c715_2 = ( $fe_offset_80b3ac098387192619594adc7219c715_2 < 0 ) ? 0 : $fe_n_items_80b3ac098387192619594adc7219c715_2;
    if ( $fe_n_items_80b3ac098387192619594adc7219c715_2 || $fe_offset_80b3ac098387192619594adc7219c715_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_80b3ac098387192619594adc7219c715_2'. Array count: $fe_n_items_80b3ac098387192619594adc7219c715_2");   
}
}
if ( $fe_max_80b3ac098387192619594adc7219c715_2 < 0 || $fe_offset_80b3ac098387192619594adc7219c715_2 + $fe_max_80b3ac098387192619594adc7219c715_2 > $fe_n_items_80b3ac098387192619594adc7219c715_2 )
{
    if ( $fe_max_80b3ac098387192619594adc7219c715_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_80b3ac098387192619594adc7219c715_2");
    $fe_max_80b3ac098387192619594adc7219c715_2 = $fe_n_items_80b3ac098387192619594adc7219c715_2 - $fe_offset_80b3ac098387192619594adc7219c715_2;
}
if ( $fe_reverse_80b3ac098387192619594adc7219c715_2 )
{
    $fe_first_val_80b3ac098387192619594adc7219c715_2 = $fe_n_items_80b3ac098387192619594adc7219c715_2 - 1 - $fe_offset_80b3ac098387192619594adc7219c715_2;
    $fe_last_val_80b3ac098387192619594adc7219c715_2  = 0;
}
else
{
    $fe_first_val_80b3ac098387192619594adc7219c715_2 = $fe_offset_80b3ac098387192619594adc7219c715_2;
    $fe_last_val_80b3ac098387192619594adc7219c715_2  = $fe_n_items_80b3ac098387192619594adc7219c715_2 - 1;
}
// foreach
for ( $fe_i_80b3ac098387192619594adc7219c715_2 = $fe_first_val_80b3ac098387192619594adc7219c715_2; $fe_n_items_processed_80b3ac098387192619594adc7219c715_2 < $fe_max_80b3ac098387192619594adc7219c715_2 && ( $fe_reverse_80b3ac098387192619594adc7219c715_2 ? $fe_i_80b3ac098387192619594adc7219c715_2 >= $fe_last_val_80b3ac098387192619594adc7219c715_2 : $fe_i_80b3ac098387192619594adc7219c715_2 <= $fe_last_val_80b3ac098387192619594adc7219c715_2 ); $fe_reverse_80b3ac098387192619594adc7219c715_2 ? $fe_i_80b3ac098387192619594adc7219c715_2-- : $fe_i_80b3ac098387192619594adc7219c715_2++ )
{
$fe_key_80b3ac098387192619594adc7219c715_2 = $fe_array_keys_80b3ac098387192619594adc7219c715_2[$fe_i_80b3ac098387192619594adc7219c715_2];
$fe_val_80b3ac098387192619594adc7219c715_2 = $fe_array_80b3ac098387192619594adc7219c715_2[$fe_key_80b3ac098387192619594adc7219c715_2];
$vars[$rootNamespace]['element'] = $fe_val_80b3ac098387192619594adc7219c715_2;
$text .= '                    	';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'element', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['element'] : null;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'element', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['element'] : null;
$match1 = compiledFetchAttribute( $match, 'name' );
unset( $match );
$match = $match1;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

switch ( $match )
{
    case "North America":
    {
$text .= '                    			';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'id_region', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['id_region'] = 'region_north';
}
$text .= '                    		';
    } break;
    case "Latin America":
    {
$text .= '                    			';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'id_region', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['id_region'] = 'region_latin';
}
$text .= '                    		';
    } break;
    case "Europe":
    {
$text .= '                    			';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'id_region', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['id_region'] = 'region_europe';
}
$text .= '                    		';
    } break;
    case "Middle East/ Africa":
    {
$text .= '                    			';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'id_region', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['id_region'] = 'region_africa';
}
$text .= '                    		';
    } break;
    case "Asia Pacific":
    {
$text .= '                    			';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'id_region', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['id_region'] = 'region_asia';
}
$text .= '                    		';
    } break;
}
unset( $match );

unset( $vars[$currentNamespace]['match'] );
$text .= '                        <div id="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'id_region', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['id_region'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="region">
                            <h3>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'element', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['element'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h3>
                            <ul>
                                <div class="view view-conference-listing-NA-market view-id-conference_listing_NA_market view-display-id-default view-dom-id-1">
                                    <div class="view-content">
                                        <div class="item-list">

                                            ';
// def $locations_market
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'element', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['element'] : null;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => $var1,
    'sort_by' => array(),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => false,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "location_market" ),
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'locations_market', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'locations_market' is already defined.", array (
  0 => 
  array (
    0 => 52,
    1 => 44,
    2 => 2761,
  ),
  1 => 
  array (
    0 => 59,
    1 => 44,
    2 => 3336,
  ),
  2 => 'extension/dcdgroup/design/group/templates/_common/page_header_tools.tpl',
) );
    $tpl->setVariable( 'locations_market', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'locations_market', $var, $rootNamespace );
}

// def $count_locations
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locations_market', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locations_market'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'count_locations', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'count_locations' is already defined.", array (
  0 => 
  array (
    0 => 52,
    1 => 44,
    2 => 2761,
  ),
  1 => 
  array (
    0 => 59,
    1 => 44,
    2 => 3336,
  ),
  2 => 'extension/dcdgroup/design/group/templates/_common/page_header_tools.tpl',
) );
    $tpl->setVariable( 'count_locations', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'count_locations', $var, $rootNamespace );
}

$text .= '                                            <ul>
                                            ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_80b3ac098387192619594adc7219c715_1 ) ) $fe_variable_stack_80b3ac098387192619594adc7219c715_1 = array();
$fe_variable_stack_80b3ac098387192619594adc7219c715_1[] = compact( 'fe_array_80b3ac098387192619594adc7219c715_1', 'fe_array_keys_80b3ac098387192619594adc7219c715_1', 'fe_n_items_80b3ac098387192619594adc7219c715_1', 'fe_n_items_processed_80b3ac098387192619594adc7219c715_1', 'fe_i_80b3ac098387192619594adc7219c715_1', 'fe_key_80b3ac098387192619594adc7219c715_1', 'fe_val_80b3ac098387192619594adc7219c715_1', 'fe_offset_80b3ac098387192619594adc7219c715_1', 'fe_max_80b3ac098387192619594adc7219c715_1', 'fe_reverse_80b3ac098387192619594adc7219c715_1', 'fe_first_val_80b3ac098387192619594adc7219c715_1', 'fe_last_val_80b3ac098387192619594adc7219c715_1' );
unset( $fe_array_80b3ac098387192619594adc7219c715_1 );
unset( $fe_array_80b3ac098387192619594adc7219c715_1 );
$fe_array_80b3ac098387192619594adc7219c715_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locations_market', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locations_market'] : null;
if (! isset( $fe_array_80b3ac098387192619594adc7219c715_1 ) ) $fe_array_80b3ac098387192619594adc7219c715_1 = NULL;
while ( is_object( $fe_array_80b3ac098387192619594adc7219c715_1 ) and method_exists( $fe_array_80b3ac098387192619594adc7219c715_1, 'templateValue' ) )
    $fe_array_80b3ac098387192619594adc7219c715_1 = $fe_array_80b3ac098387192619594adc7219c715_1->templateValue();

$fe_array_keys_80b3ac098387192619594adc7219c715_1 = is_array( $fe_array_80b3ac098387192619594adc7219c715_1 ) ? array_keys( $fe_array_80b3ac098387192619594adc7219c715_1 ) : array();
$fe_n_items_80b3ac098387192619594adc7219c715_1 = count( $fe_array_keys_80b3ac098387192619594adc7219c715_1 );
$fe_n_items_processed_80b3ac098387192619594adc7219c715_1 = 0;
$fe_offset_80b3ac098387192619594adc7219c715_1 = 0;
$fe_max_80b3ac098387192619594adc7219c715_1 = $fe_n_items_80b3ac098387192619594adc7219c715_1 - $fe_offset_80b3ac098387192619594adc7219c715_1;
$fe_reverse_80b3ac098387192619594adc7219c715_1 = false;
if ( $fe_offset_80b3ac098387192619594adc7219c715_1 < 0 || $fe_offset_80b3ac098387192619594adc7219c715_1 >= $fe_n_items_80b3ac098387192619594adc7219c715_1 )
{
    $fe_offset_80b3ac098387192619594adc7219c715_1 = ( $fe_offset_80b3ac098387192619594adc7219c715_1 < 0 ) ? 0 : $fe_n_items_80b3ac098387192619594adc7219c715_1;
    if ( $fe_n_items_80b3ac098387192619594adc7219c715_1 || $fe_offset_80b3ac098387192619594adc7219c715_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_80b3ac098387192619594adc7219c715_1'. Array count: $fe_n_items_80b3ac098387192619594adc7219c715_1");   
}
}
if ( $fe_max_80b3ac098387192619594adc7219c715_1 < 0 || $fe_offset_80b3ac098387192619594adc7219c715_1 + $fe_max_80b3ac098387192619594adc7219c715_1 > $fe_n_items_80b3ac098387192619594adc7219c715_1 )
{
    if ( $fe_max_80b3ac098387192619594adc7219c715_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_80b3ac098387192619594adc7219c715_1");
    $fe_max_80b3ac098387192619594adc7219c715_1 = $fe_n_items_80b3ac098387192619594adc7219c715_1 - $fe_offset_80b3ac098387192619594adc7219c715_1;
}
if ( $fe_reverse_80b3ac098387192619594adc7219c715_1 )
{
    $fe_first_val_80b3ac098387192619594adc7219c715_1 = $fe_n_items_80b3ac098387192619594adc7219c715_1 - 1 - $fe_offset_80b3ac098387192619594adc7219c715_1;
    $fe_last_val_80b3ac098387192619594adc7219c715_1  = 0;
}
else
{
    $fe_first_val_80b3ac098387192619594adc7219c715_1 = $fe_offset_80b3ac098387192619594adc7219c715_1;
    $fe_last_val_80b3ac098387192619594adc7219c715_1  = $fe_n_items_80b3ac098387192619594adc7219c715_1 - 1;
}
// foreach
for ( $fe_i_80b3ac098387192619594adc7219c715_1 = $fe_first_val_80b3ac098387192619594adc7219c715_1; $fe_n_items_processed_80b3ac098387192619594adc7219c715_1 < $fe_max_80b3ac098387192619594adc7219c715_1 && ( $fe_reverse_80b3ac098387192619594adc7219c715_1 ? $fe_i_80b3ac098387192619594adc7219c715_1 >= $fe_last_val_80b3ac098387192619594adc7219c715_1 : $fe_i_80b3ac098387192619594adc7219c715_1 <= $fe_last_val_80b3ac098387192619594adc7219c715_1 ); $fe_reverse_80b3ac098387192619594adc7219c715_1 ? $fe_i_80b3ac098387192619594adc7219c715_1-- : $fe_i_80b3ac098387192619594adc7219c715_1++ )
{
$fe_key_80b3ac098387192619594adc7219c715_1 = $fe_array_keys_80b3ac098387192619594adc7219c715_1[$fe_i_80b3ac098387192619594adc7219c715_1];
$fe_val_80b3ac098387192619594adc7219c715_1 = $fe_array_80b3ac098387192619594adc7219c715_1[$fe_key_80b3ac098387192619594adc7219c715_1];
$vars[$rootNamespace]['item'] = $fe_val_80b3ac098387192619594adc7219c715_1;
$vars[$rootNamespace]['index'] = $fe_key_80b3ac098387192619594adc7219c715_1;
$text .= '
                                                <li class="views-row views-row-1 views-row-odd ';
unset( $elseif_cond_80b3ac098387192619594adc7219c715_1 );
unset( $elseif_cond_80b3ac098387192619594adc7219c715_11 );
unset( $elseif_cond_80b3ac098387192619594adc7219c715_11 );
$elseif_cond_80b3ac098387192619594adc7219c715_11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $elseif_cond_80b3ac098387192619594adc7219c715_11 ) ) $elseif_cond_80b3ac098387192619594adc7219c715_11 = NULL;
while ( is_object( $elseif_cond_80b3ac098387192619594adc7219c715_11 ) and method_exists( $elseif_cond_80b3ac098387192619594adc7219c715_11, 'templateValue' ) )
    $elseif_cond_80b3ac098387192619594adc7219c715_11 = $elseif_cond_80b3ac098387192619594adc7219c715_11->templateValue();
while ( is_object( $elseif_cond_80b3ac098387192619594adc7219c715_11 ) and method_exists( $elseif_cond_80b3ac098387192619594adc7219c715_11, 'templateValue' ) )
    $elseif_cond_80b3ac098387192619594adc7219c715_11 = $elseif_cond_80b3ac098387192619594adc7219c715_11->templateValue();
unset( $elseif_cond_80b3ac098387192619594adc7219c715_12 );
unset( $elseif_cond_80b3ac098387192619594adc7219c715_12 );
$elseif_cond_80b3ac098387192619594adc7219c715_12 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'count_locations', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['count_locations'] : null;
if (! isset( $elseif_cond_80b3ac098387192619594adc7219c715_12 ) ) $elseif_cond_80b3ac098387192619594adc7219c715_12 = NULL;
while ( is_object( $elseif_cond_80b3ac098387192619594adc7219c715_12 ) and method_exists( $elseif_cond_80b3ac098387192619594adc7219c715_12, 'templateValue' ) )
    $elseif_cond_80b3ac098387192619594adc7219c715_12 = $elseif_cond_80b3ac098387192619594adc7219c715_12->templateValue();
while ( is_object( $elseif_cond_80b3ac098387192619594adc7219c715_12 ) and method_exists( $elseif_cond_80b3ac098387192619594adc7219c715_12, 'templateValue' ) )
    $elseif_cond_80b3ac098387192619594adc7219c715_12 = $elseif_cond_80b3ac098387192619594adc7219c715_12->templateValue();
$elseif_cond_80b3ac098387192619594adc7219c715_1 = ( ( $elseif_cond_80b3ac098387192619594adc7219c715_11 ) == ( $elseif_cond_80b3ac098387192619594adc7219c715_12 ) );
unset( $elseif_cond_80b3ac098387192619594adc7219c715_11, $elseif_cond_80b3ac098387192619594adc7219c715_12 );
if (! isset( $elseif_cond_80b3ac098387192619594adc7219c715_1 ) ) $elseif_cond_80b3ac098387192619594adc7219c715_1 = NULL;
while ( is_object( $elseif_cond_80b3ac098387192619594adc7219c715_1 ) and method_exists( $elseif_cond_80b3ac098387192619594adc7219c715_1, 'templateValue' ) )
    $elseif_cond_80b3ac098387192619594adc7219c715_1 = $elseif_cond_80b3ac098387192619594adc7219c715_1->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'views-row-first';
}
elseif ( $elseif_cond_80b3ac098387192619594adc7219c715_1 )
{
$text .= 'views-row-last';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_80b3ac098387192619594adc7219c715_1 );

$text .= '">
                                                        ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'item',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'flag',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  'image_class' => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'original',
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 64,
    1 => 56,
    2 => 3722,
  ),
  1 => 
  array (
    0 => 64,
    1 => 127,
    2 => 3793,
  ),
  2 => 'extension/dcdgroup/design/group/templates/_common/page_header_tools.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                                                        <a class="following_year_link" href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'link' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'value' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</a>
                                                </li>
                                            ';
$fe_n_items_processed_80b3ac098387192619594adc7219c715_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_80b3ac098387192619594adc7219c715_1 ) ) extract( array_pop( $fe_variable_stack_80b3ac098387192619594adc7219c715_1 ) );

else
{

unset( $fe_array_80b3ac098387192619594adc7219c715_1 );

unset( $fe_array_keys_80b3ac098387192619594adc7219c715_1 );

unset( $fe_n_items_80b3ac098387192619594adc7219c715_1 );

unset( $fe_n_items_processed_80b3ac098387192619594adc7219c715_1 );

unset( $fe_i_80b3ac098387192619594adc7219c715_1 );

unset( $fe_key_80b3ac098387192619594adc7219c715_1 );

unset( $fe_val_80b3ac098387192619594adc7219c715_1 );

unset( $fe_offset_80b3ac098387192619594adc7219c715_1 );

unset( $fe_max_80b3ac098387192619594adc7219c715_1 );

unset( $fe_reverse_80b3ac098387192619594adc7219c715_1 );

unset( $fe_first_val_80b3ac098387192619594adc7219c715_1 );

unset( $fe_last_val_80b3ac098387192619594adc7219c715_1 );

unset( $fe_variable_stack_80b3ac098387192619594adc7219c715_1 );

}

// foreach ends
$text .= '                                            </ul>
                                                        ';
// undef $locations_market
$tpl->unsetLocalVariable( 'locations_market', $rootNamespace );

$text .= '                                                </div>
                                        </div>
                                </div>
                            </ul> 
                            
                        </div>      
                    ';
$fe_n_items_processed_80b3ac098387192619594adc7219c715_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_80b3ac098387192619594adc7219c715_2 ) ) extract( array_pop( $fe_variable_stack_80b3ac098387192619594adc7219c715_2 ) );

else
{

unset( $fe_array_80b3ac098387192619594adc7219c715_2 );

unset( $fe_array_keys_80b3ac098387192619594adc7219c715_2 );

unset( $fe_n_items_80b3ac098387192619594adc7219c715_2 );

unset( $fe_n_items_processed_80b3ac098387192619594adc7219c715_2 );

unset( $fe_i_80b3ac098387192619594adc7219c715_2 );

unset( $fe_key_80b3ac098387192619594adc7219c715_2 );

unset( $fe_val_80b3ac098387192619594adc7219c715_2 );

unset( $fe_offset_80b3ac098387192619594adc7219c715_2 );

unset( $fe_max_80b3ac098387192619594adc7219c715_2 );

unset( $fe_reverse_80b3ac098387192619594adc7219c715_2 );

unset( $fe_first_val_80b3ac098387192619594adc7219c715_2 );

unset( $fe_last_val_80b3ac098387192619594adc7219c715_2 );

unset( $fe_variable_stack_80b3ac098387192619594adc7219c715_2 );

}

// foreach ends
$text .= '                </div>
            </div>
            </div>
            </li>
            <li class="region">
                <div class="top_country">
                    <div id="region">Region
                        <div id="regionlist">
                            <ul>
	                            ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_80b3ac098387192619594adc7219c715_3 ) ) $fe_variable_stack_80b3ac098387192619594adc7219c715_3 = array();
$fe_variable_stack_80b3ac098387192619594adc7219c715_3[] = compact( 'fe_array_80b3ac098387192619594adc7219c715_3', 'fe_array_keys_80b3ac098387192619594adc7219c715_3', 'fe_n_items_80b3ac098387192619594adc7219c715_3', 'fe_n_items_processed_80b3ac098387192619594adc7219c715_3', 'fe_i_80b3ac098387192619594adc7219c715_3', 'fe_key_80b3ac098387192619594adc7219c715_3', 'fe_val_80b3ac098387192619594adc7219c715_3', 'fe_offset_80b3ac098387192619594adc7219c715_3', 'fe_max_80b3ac098387192619594adc7219c715_3', 'fe_reverse_80b3ac098387192619594adc7219c715_3', 'fe_first_val_80b3ac098387192619594adc7219c715_3', 'fe_last_val_80b3ac098387192619594adc7219c715_3' );
unset( $fe_array_80b3ac098387192619594adc7219c715_3 );
unset( $fe_array_80b3ac098387192619594adc7219c715_3 );
$fe_array_80b3ac098387192619594adc7219c715_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'regions', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['regions'] : null;
if (! isset( $fe_array_80b3ac098387192619594adc7219c715_3 ) ) $fe_array_80b3ac098387192619594adc7219c715_3 = NULL;
while ( is_object( $fe_array_80b3ac098387192619594adc7219c715_3 ) and method_exists( $fe_array_80b3ac098387192619594adc7219c715_3, 'templateValue' ) )
    $fe_array_80b3ac098387192619594adc7219c715_3 = $fe_array_80b3ac098387192619594adc7219c715_3->templateValue();

$fe_array_keys_80b3ac098387192619594adc7219c715_3 = is_array( $fe_array_80b3ac098387192619594adc7219c715_3 ) ? array_keys( $fe_array_80b3ac098387192619594adc7219c715_3 ) : array();
$fe_n_items_80b3ac098387192619594adc7219c715_3 = count( $fe_array_keys_80b3ac098387192619594adc7219c715_3 );
$fe_n_items_processed_80b3ac098387192619594adc7219c715_3 = 0;
$fe_offset_80b3ac098387192619594adc7219c715_3 = 0;
$fe_max_80b3ac098387192619594adc7219c715_3 = $fe_n_items_80b3ac098387192619594adc7219c715_3 - $fe_offset_80b3ac098387192619594adc7219c715_3;
$fe_reverse_80b3ac098387192619594adc7219c715_3 = false;
if ( $fe_offset_80b3ac098387192619594adc7219c715_3 < 0 || $fe_offset_80b3ac098387192619594adc7219c715_3 >= $fe_n_items_80b3ac098387192619594adc7219c715_3 )
{
    $fe_offset_80b3ac098387192619594adc7219c715_3 = ( $fe_offset_80b3ac098387192619594adc7219c715_3 < 0 ) ? 0 : $fe_n_items_80b3ac098387192619594adc7219c715_3;
    if ( $fe_n_items_80b3ac098387192619594adc7219c715_3 || $fe_offset_80b3ac098387192619594adc7219c715_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_80b3ac098387192619594adc7219c715_3'. Array count: $fe_n_items_80b3ac098387192619594adc7219c715_3");   
}
}
if ( $fe_max_80b3ac098387192619594adc7219c715_3 < 0 || $fe_offset_80b3ac098387192619594adc7219c715_3 + $fe_max_80b3ac098387192619594adc7219c715_3 > $fe_n_items_80b3ac098387192619594adc7219c715_3 )
{
    if ( $fe_max_80b3ac098387192619594adc7219c715_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_80b3ac098387192619594adc7219c715_3");
    $fe_max_80b3ac098387192619594adc7219c715_3 = $fe_n_items_80b3ac098387192619594adc7219c715_3 - $fe_offset_80b3ac098387192619594adc7219c715_3;
}
if ( $fe_reverse_80b3ac098387192619594adc7219c715_3 )
{
    $fe_first_val_80b3ac098387192619594adc7219c715_3 = $fe_n_items_80b3ac098387192619594adc7219c715_3 - 1 - $fe_offset_80b3ac098387192619594adc7219c715_3;
    $fe_last_val_80b3ac098387192619594adc7219c715_3  = 0;
}
else
{
    $fe_first_val_80b3ac098387192619594adc7219c715_3 = $fe_offset_80b3ac098387192619594adc7219c715_3;
    $fe_last_val_80b3ac098387192619594adc7219c715_3  = $fe_n_items_80b3ac098387192619594adc7219c715_3 - 1;
}
// foreach
for ( $fe_i_80b3ac098387192619594adc7219c715_3 = $fe_first_val_80b3ac098387192619594adc7219c715_3; $fe_n_items_processed_80b3ac098387192619594adc7219c715_3 < $fe_max_80b3ac098387192619594adc7219c715_3 && ( $fe_reverse_80b3ac098387192619594adc7219c715_3 ? $fe_i_80b3ac098387192619594adc7219c715_3 >= $fe_last_val_80b3ac098387192619594adc7219c715_3 : $fe_i_80b3ac098387192619594adc7219c715_3 <= $fe_last_val_80b3ac098387192619594adc7219c715_3 ); $fe_reverse_80b3ac098387192619594adc7219c715_3 ? $fe_i_80b3ac098387192619594adc7219c715_3-- : $fe_i_80b3ac098387192619594adc7219c715_3++ )
{
$fe_key_80b3ac098387192619594adc7219c715_3 = $fe_array_keys_80b3ac098387192619594adc7219c715_3[$fe_i_80b3ac098387192619594adc7219c715_3];
$fe_val_80b3ac098387192619594adc7219c715_3 = $fe_array_80b3ac098387192619594adc7219c715_3[$fe_key_80b3ac098387192619594adc7219c715_3];
$vars[$rootNamespace]['region'] = $fe_val_80b3ac098387192619594adc7219c715_3;
$text .= '	                                <li><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'region', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['region'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'link' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'value' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'region', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['region'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'region_name' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_text' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'region', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['region'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'region_name' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_text' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</a></li>
	                            ';
$fe_n_items_processed_80b3ac098387192619594adc7219c715_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_80b3ac098387192619594adc7219c715_3 ) ) extract( array_pop( $fe_variable_stack_80b3ac098387192619594adc7219c715_3 ) );

else
{

unset( $fe_array_80b3ac098387192619594adc7219c715_3 );

unset( $fe_array_keys_80b3ac098387192619594adc7219c715_3 );

unset( $fe_n_items_80b3ac098387192619594adc7219c715_3 );

unset( $fe_n_items_processed_80b3ac098387192619594adc7219c715_3 );

unset( $fe_i_80b3ac098387192619594adc7219c715_3 );

unset( $fe_key_80b3ac098387192619594adc7219c715_3 );

unset( $fe_val_80b3ac098387192619594adc7219c715_3 );

unset( $fe_offset_80b3ac098387192619594adc7219c715_3 );

unset( $fe_max_80b3ac098387192619594adc7219c715_3 );

unset( $fe_reverse_80b3ac098387192619594adc7219c715_3 );

unset( $fe_first_val_80b3ac098387192619594adc7219c715_3 );

unset( $fe_last_val_80b3ac098387192619594adc7219c715_3 );

unset( $fe_variable_stack_80b3ac098387192619594adc7219c715_3 );

}

// foreach ends
$text .= '                            </ul>

                            <div class="clear"></div>
                        </div>
                    </div>                                
                </div>
            </li>
            <li>
                ';
$oldRestoreIncludeArray_dc3be991ad5099126a8a76b5208ad857 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/page_header_searchbox-ee774a3f2869acd20985d03f7f532a4e.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/dcdgroup/design/group/templates/_common/page_header_searchbox.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/page_header_searchbox-ee774a3f2869acd20985d03f7f532a4e.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/dcdgroup/design/group/templates/_common/page_header_searchbox.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_dc3be991ad5099126a8a76b5208ad857;

$text .= '            </li>
    </ul>
</div>
<div class="clr"></div>
 <!-- Top menu area: START -->';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'top_menu' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
$oldRestoreIncludeArray_2446ae6a84fc60bd663869982cf33926 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/page_topmenu-94b3691c551102d730825d851f097f0d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/dcdgroup/design/group/templates/page_topmenu.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/page_topmenu-94b3691c551102d730825d851f097f0d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/dcdgroup/design/group/templates/page_topmenu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_2446ae6a84fc60bd663869982cf33926;

}
unset( $if_cond );
// if ends

// undef $marketnode
$tpl->unsetLocalVariable( 'marketnode', $rootNamespace );

// undef $locations
$tpl->unsetLocalVariable( 'locations', $rootNamespace );

// undef $regionnode
$tpl->unsetLocalVariable( 'regionnode', $rootNamespace );

// undef $regions
$tpl->unsetLocalVariable( 'regions', $rootNamespace );

$text .= '<!-- Top menu area: END -->
<!-- STOP: including template: extension/dcdgroup/design/group/templates/_common/page_header_tools.tpl (design:_common/page_header_tools.tpl) -->
';

$setArray = $oldSetArray_6bed1e15ca65ce21d495f4e51b642432;
$tpl->Level--;
?>
