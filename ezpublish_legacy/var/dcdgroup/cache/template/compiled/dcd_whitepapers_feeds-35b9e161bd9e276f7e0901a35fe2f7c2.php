<?php
// URI:       extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl
// Filename:  extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl
// Timestamp: 1359052770 (Thu Jan 24 19:39:30 CET 2013)
$oldSetArray_bb219864f7db26515fc0994ecee5f91d = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl (extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl) -->
';
// def $source
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'custom_attributes' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'source' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'source', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'source' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 9,
    1 => 0,
    2 => 471,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl',
) );
    $tpl->setVariable( 'source', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'source', $var, $rootNamespace );
}

// def $limit
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'custom_attributes' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'limit' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'limit', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'limit' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 9,
    1 => 0,
    2 => 471,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl',
) );
    $tpl->setVariable( 'limit', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'limit', $var, $rootNamespace );
}

// def $offset
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'custom_attributes' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'offset' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'offset', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'offset' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 9,
    1 => 0,
    2 => 471,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl',
) );
    $tpl->setVariable( 'offset', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'offset', $var, $rootNamespace );
}

// def $link_view_all
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'custom_attributes' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'link' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'link_view_all', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'link_view_all' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 9,
    1 => 0,
    2 => 471,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl',
) );
    $tpl->setVariable( 'link_view_all', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'link_view_all', $var, $rootNamespace );
}

// def $res
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'dcdfeedreader',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'source',
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'limit',
      ),
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'offset',
      ),
      2 => false,
    ),
  ),
  3 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'link_view_all',
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'res', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'res' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 9,
    1 => 0,
    2 => 471,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl',
) );
    $tpl->setVariable( 'res', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'res', $var, $rootNamespace );
}

// def $urldatacenter
if ( $tpl->hasVariable( 'urldatacenter', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'urldatacenter' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 9,
    1 => 0,
    2 => 471,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl',
) );
    $tpl->setVariable( 'urldatacenter', 'http://www.datacenterdynamics.com/users/', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'urldatacenter', 'http://www.datacenterdynamics.com/users/', $rootNamespace );
}

$text .= '
<div class="block block_right">

    <div class="datacenter">
        <h2>';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var3 = compiledFetchAttribute( $var2, 'name' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = htmlspecialchars( $var2 );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = mb_strtoupper( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' <span class="view"><a title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
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

$text .= '" href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_view_all', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_view_all'] : null;
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

$text .= ' target="_blank">View All</a></span></h2>
        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_02dcec10721cf6c54aec22892c7835f7_16 ) ) $fe_variable_stack_02dcec10721cf6c54aec22892c7835f7_16 = array();
$fe_variable_stack_02dcec10721cf6c54aec22892c7835f7_16[] = compact( 'fe_array_02dcec10721cf6c54aec22892c7835f7_16', 'fe_array_keys_02dcec10721cf6c54aec22892c7835f7_16', 'fe_n_items_02dcec10721cf6c54aec22892c7835f7_16', 'fe_n_items_processed_02dcec10721cf6c54aec22892c7835f7_16', 'fe_i_02dcec10721cf6c54aec22892c7835f7_16', 'fe_key_02dcec10721cf6c54aec22892c7835f7_16', 'fe_val_02dcec10721cf6c54aec22892c7835f7_16', 'fe_offset_02dcec10721cf6c54aec22892c7835f7_16', 'fe_max_02dcec10721cf6c54aec22892c7835f7_16', 'fe_reverse_02dcec10721cf6c54aec22892c7835f7_16', 'fe_first_val_02dcec10721cf6c54aec22892c7835f7_16', 'fe_last_val_02dcec10721cf6c54aec22892c7835f7_16' );
unset( $fe_array_02dcec10721cf6c54aec22892c7835f7_16 );
unset( $fe_array_02dcec10721cf6c54aec22892c7835f7_16 );
$fe_array_02dcec10721cf6c54aec22892c7835f7_16 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'res', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['res'] : null;
$fe_array_02dcec10721cf6c54aec22892c7835f7_161 = compiledFetchAttribute( $fe_array_02dcec10721cf6c54aec22892c7835f7_16, 'items' );
unset( $fe_array_02dcec10721cf6c54aec22892c7835f7_16 );
$fe_array_02dcec10721cf6c54aec22892c7835f7_16 = $fe_array_02dcec10721cf6c54aec22892c7835f7_161;
if (! isset( $fe_array_02dcec10721cf6c54aec22892c7835f7_16 ) ) $fe_array_02dcec10721cf6c54aec22892c7835f7_16 = NULL;
while ( is_object( $fe_array_02dcec10721cf6c54aec22892c7835f7_16 ) and method_exists( $fe_array_02dcec10721cf6c54aec22892c7835f7_16, 'templateValue' ) )
    $fe_array_02dcec10721cf6c54aec22892c7835f7_16 = $fe_array_02dcec10721cf6c54aec22892c7835f7_16->templateValue();

$fe_array_keys_02dcec10721cf6c54aec22892c7835f7_16 = is_array( $fe_array_02dcec10721cf6c54aec22892c7835f7_16 ) ? array_keys( $fe_array_02dcec10721cf6c54aec22892c7835f7_16 ) : array();
$fe_n_items_02dcec10721cf6c54aec22892c7835f7_16 = count( $fe_array_keys_02dcec10721cf6c54aec22892c7835f7_16 );
$fe_n_items_processed_02dcec10721cf6c54aec22892c7835f7_16 = 0;
$fe_offset_02dcec10721cf6c54aec22892c7835f7_16 = 0;
$fe_max_02dcec10721cf6c54aec22892c7835f7_16 = $fe_n_items_02dcec10721cf6c54aec22892c7835f7_16 - $fe_offset_02dcec10721cf6c54aec22892c7835f7_16;
$fe_reverse_02dcec10721cf6c54aec22892c7835f7_16 = false;
if ( $fe_offset_02dcec10721cf6c54aec22892c7835f7_16 < 0 || $fe_offset_02dcec10721cf6c54aec22892c7835f7_16 >= $fe_n_items_02dcec10721cf6c54aec22892c7835f7_16 )
{
    $fe_offset_02dcec10721cf6c54aec22892c7835f7_16 = ( $fe_offset_02dcec10721cf6c54aec22892c7835f7_16 < 0 ) ? 0 : $fe_n_items_02dcec10721cf6c54aec22892c7835f7_16;
    if ( $fe_n_items_02dcec10721cf6c54aec22892c7835f7_16 || $fe_offset_02dcec10721cf6c54aec22892c7835f7_16 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_02dcec10721cf6c54aec22892c7835f7_16'. Array count: $fe_n_items_02dcec10721cf6c54aec22892c7835f7_16");   
}
}
if ( $fe_max_02dcec10721cf6c54aec22892c7835f7_16 < 0 || $fe_offset_02dcec10721cf6c54aec22892c7835f7_16 + $fe_max_02dcec10721cf6c54aec22892c7835f7_16 > $fe_n_items_02dcec10721cf6c54aec22892c7835f7_16 )
{
    if ( $fe_max_02dcec10721cf6c54aec22892c7835f7_16 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_02dcec10721cf6c54aec22892c7835f7_16");
    $fe_max_02dcec10721cf6c54aec22892c7835f7_16 = $fe_n_items_02dcec10721cf6c54aec22892c7835f7_16 - $fe_offset_02dcec10721cf6c54aec22892c7835f7_16;
}
if ( $fe_reverse_02dcec10721cf6c54aec22892c7835f7_16 )
{
    $fe_first_val_02dcec10721cf6c54aec22892c7835f7_16 = $fe_n_items_02dcec10721cf6c54aec22892c7835f7_16 - 1 - $fe_offset_02dcec10721cf6c54aec22892c7835f7_16;
    $fe_last_val_02dcec10721cf6c54aec22892c7835f7_16  = 0;
}
else
{
    $fe_first_val_02dcec10721cf6c54aec22892c7835f7_16 = $fe_offset_02dcec10721cf6c54aec22892c7835f7_16;
    $fe_last_val_02dcec10721cf6c54aec22892c7835f7_16  = $fe_n_items_02dcec10721cf6c54aec22892c7835f7_16 - 1;
}
// foreach
for ( $fe_i_02dcec10721cf6c54aec22892c7835f7_16 = $fe_first_val_02dcec10721cf6c54aec22892c7835f7_16; $fe_n_items_processed_02dcec10721cf6c54aec22892c7835f7_16 < $fe_max_02dcec10721cf6c54aec22892c7835f7_16 && ( $fe_reverse_02dcec10721cf6c54aec22892c7835f7_16 ? $fe_i_02dcec10721cf6c54aec22892c7835f7_16 >= $fe_last_val_02dcec10721cf6c54aec22892c7835f7_16 : $fe_i_02dcec10721cf6c54aec22892c7835f7_16 <= $fe_last_val_02dcec10721cf6c54aec22892c7835f7_16 ); $fe_reverse_02dcec10721cf6c54aec22892c7835f7_16 ? $fe_i_02dcec10721cf6c54aec22892c7835f7_16-- : $fe_i_02dcec10721cf6c54aec22892c7835f7_16++ )
{
$fe_key_02dcec10721cf6c54aec22892c7835f7_16 = $fe_array_keys_02dcec10721cf6c54aec22892c7835f7_16[$fe_i_02dcec10721cf6c54aec22892c7835f7_16];
$fe_val_02dcec10721cf6c54aec22892c7835f7_16 = $fe_array_02dcec10721cf6c54aec22892c7835f7_16[$fe_key_02dcec10721cf6c54aec22892c7835f7_16];
$vars[$rootNamespace]['item'] = $fe_val_02dcec10721cf6c54aec22892c7835f7_16;
$vars[$rootNamespace]['index'] = $fe_key_02dcec10721cf6c54aec22892c7835f7_16;
$text .= '        ';
// def $day
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'published' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%d', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'day', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'day' is already defined.", array (
  0 => 
  array (
    0 => 16,
    1 => 8,
    2 => 787,
  ),
  1 => 
  array (
    0 => 22,
    1 => 114,
    2 => 1271,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl',
) );
    $tpl->setVariable( 'day', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'day', $var, $rootNamespace );
}

// def $day_string
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'published' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%l', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'day_string', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'day_string' is already defined.", array (
  0 => 
  array (
    0 => 16,
    1 => 8,
    2 => 787,
  ),
  1 => 
  array (
    0 => 22,
    1 => 114,
    2 => 1271,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl',
) );
    $tpl->setVariable( 'day_string', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'day_string', $var, $rootNamespace );
}

// def $month
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'published' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%F', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'month', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'month' is already defined.", array (
  0 => 
  array (
    0 => 16,
    1 => 8,
    2 => 787,
  ),
  1 => 
  array (
    0 => 22,
    1 => 114,
    2 => 1271,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl',
) );
    $tpl->setVariable( 'month', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'month', $var, $rootNamespace );
}

// def $year
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'published' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%Y ', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'year', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'year' is already defined.", array (
  0 => 
  array (
    0 => 16,
    1 => 8,
    2 => 787,
  ),
  1 => 
  array (
    0 => 22,
    1 => 114,
    2 => 1271,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl',
) );
    $tpl->setVariable( 'year', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'year', $var, $rootNamespace );
}

// def $full_date
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'published' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%d %M %Y %H %i %s', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'full_date', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'full_date' is already defined.", array (
  0 => 
  array (
    0 => 16,
    1 => 8,
    2 => 787,
  ),
  1 => 
  array (
    0 => 22,
    1 => 114,
    2 => 1271,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl',
) );
    $tpl->setVariable( 'full_date', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'full_date', $var, $rootNamespace );
}

// def $creator_explode
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'creator' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( is_string( $var1 ) )
{
	$var = explode( " ", $var1 );
}
else if ( is_array( $var1 ) )
{
	$var = array( array_slice( $var1, 0, " " ), array_slice( $var1, " " ) );
}
else
{
	$var = null;
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'creator_explode', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'creator_explode' is already defined.", array (
  0 => 
  array (
    0 => 16,
    1 => 8,
    2 => 787,
  ),
  1 => 
  array (
    0 => 22,
    1 => 114,
    2 => 1271,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl',
) );
    $tpl->setVariable( 'creator_explode', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'creator_explode', $var, $rootNamespace );
}

// def $url_creator
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'urldatacenter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['urldatacenter'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'creator_explode', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['creator_explode'] : null;
$var4 = compiledFetchAttribute( $var3, 0 );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = mb_strtolower( $var3 );
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'creator_explode', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['creator_explode'] : null;
$var6 = compiledFetchAttribute( $var5, 1 );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var4 = mb_strtolower( $var5 );
unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var = ( $var1 . $var2 . '-' . $var4 );
unset( $var1, $var2, $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'url_creator', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'url_creator' is already defined.", array (
  0 => 
  array (
    0 => 16,
    1 => 8,
    2 => 787,
  ),
  1 => 
  array (
    0 => 22,
    1 => 114,
    2 => 1271,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl',
) );
    $tpl->setVariable( 'url_creator', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'url_creator', $var, $rootNamespace );
}

$text .= '            <ul class="none">
                <li>
                    <p class="dateformate">
                    <span>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'day', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['day'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</span>
                    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'day_string', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['day_string'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'month', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['month'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '. ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'year', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['year'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
                    </p>
                    <a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'links' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 0 );
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
$var2 = compiledFetchAttribute( $var1, 'title' );
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
$var2 = compiledFetchAttribute( $var1, 'title' );
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
                    by
                    <a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'url_creator', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['url_creator'] : null;
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
$var2 = compiledFetchAttribute( $var1, 'creator' );
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
$var2 = compiledFetchAttribute( $var1, 'creator' );
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
                    on ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'full_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['full_date'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' GMT
                    <br>
                    <a title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'title' );
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

$text .= '" href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'links' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 0 );
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

$text .= '>Read More...</a>
                </li>
            </ul>
            ';
// undef $day_string
$tpl->unsetLocalVariable( 'day_string', $rootNamespace );

// undef $month
$tpl->unsetLocalVariable( 'month', $rootNamespace );

// undef $day
$tpl->unsetLocalVariable( 'day', $rootNamespace );

// undef $year
$tpl->unsetLocalVariable( 'year', $rootNamespace );

// undef $full_date
$tpl->unsetLocalVariable( 'full_date', $rootNamespace );

// undef $creator_explode
$tpl->unsetLocalVariable( 'creator_explode', $rootNamespace );

$text .= '        ';
$fe_n_items_processed_02dcec10721cf6c54aec22892c7835f7_16++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_02dcec10721cf6c54aec22892c7835f7_16 ) ) extract( array_pop( $fe_variable_stack_02dcec10721cf6c54aec22892c7835f7_16 ) );

else
{

unset( $fe_array_02dcec10721cf6c54aec22892c7835f7_16 );

unset( $fe_array_keys_02dcec10721cf6c54aec22892c7835f7_16 );

unset( $fe_n_items_02dcec10721cf6c54aec22892c7835f7_16 );

unset( $fe_n_items_processed_02dcec10721cf6c54aec22892c7835f7_16 );

unset( $fe_i_02dcec10721cf6c54aec22892c7835f7_16 );

unset( $fe_key_02dcec10721cf6c54aec22892c7835f7_16 );

unset( $fe_val_02dcec10721cf6c54aec22892c7835f7_16 );

unset( $fe_offset_02dcec10721cf6c54aec22892c7835f7_16 );

unset( $fe_max_02dcec10721cf6c54aec22892c7835f7_16 );

unset( $fe_reverse_02dcec10721cf6c54aec22892c7835f7_16 );

unset( $fe_first_val_02dcec10721cf6c54aec22892c7835f7_16 );

unset( $fe_last_val_02dcec10721cf6c54aec22892c7835f7_16 );

unset( $fe_variable_stack_02dcec10721cf6c54aec22892c7835f7_16 );

}

// foreach ends
$text .= '    </div>
    <div class="clr"></div>
';
// undef $source
$tpl->unsetLocalVariable( 'source', $rootNamespace );

// undef $limit
$tpl->unsetLocalVariable( 'limit', $rootNamespace );

// undef $offset
$tpl->unsetLocalVariable( 'offset', $rootNamespace );

// undef $res
$tpl->unsetLocalVariable( 'res', $rootNamespace );

// undef $link_view_all
$tpl->unsetLocalVariable( 'link_view_all', $rootNamespace );

// undef $urldatacenter
$tpl->unsetLocalVariable( 'urldatacenter', $rootNamespace );

$text .= '</div>
<!-- STOP: including template: extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl (extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl) -->
';

$setArray = $oldSetArray_bb219864f7db26515fc0994ecee5f91d;
$tpl->Level--;
?>
