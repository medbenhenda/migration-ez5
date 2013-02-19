<?php
// URI:       extension/dcdgroup/design/group/override/templates/block/dcd_main_top.tpl
// Filename:  extension/dcdgroup/design/group/override/templates/block/dcd_main_top.tpl
// Timestamp: 1359052770 (Thu Jan 24 19:39:30 CET 2013)
$oldSetArray_34fb5f069f75055c9adc287ac1c81227 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/dcdgroup/design/group/override/templates/block/dcd_main_top.tpl (extension/dcdgroup/design/group/override/templates/block/dcd_main_top.tpl) -->
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
    0 => 7,
    1 => 69,
    2 => 395,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_main_top.tpl',
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
    0 => 7,
    1 => 69,
    2 => 395,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_main_top.tpl',
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
    0 => 7,
    1 => 69,
    2 => 395,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_main_top.tpl',
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
    0 => 7,
    1 => 69,
    2 => 395,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_main_top.tpl',
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
    0 => 7,
    1 => 69,
    2 => 395,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_main_top.tpl',
) );
    $tpl->setVariable( 'res', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'res', $var, $rootNamespace );
}

$text .= '
<div class="c_block">
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

$text .= '<span class="view"><a href=';
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

$text .= ' title="';
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

$text .= '" target="_blank">View All</a></span></h2>
    <div class="blockbox">
        <div class=" jcarousel-skin-tango_big">
            <div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
                <div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;">
                    <ul id="mycarouse2" class="jcarousel-skin-tango_big">
                      ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_c7e26599e25cd275167ce77753938d17_8 ) ) $fe_variable_stack_c7e26599e25cd275167ce77753938d17_8 = array();
$fe_variable_stack_c7e26599e25cd275167ce77753938d17_8[] = compact( 'fe_array_c7e26599e25cd275167ce77753938d17_8', 'fe_array_keys_c7e26599e25cd275167ce77753938d17_8', 'fe_n_items_c7e26599e25cd275167ce77753938d17_8', 'fe_n_items_processed_c7e26599e25cd275167ce77753938d17_8', 'fe_i_c7e26599e25cd275167ce77753938d17_8', 'fe_key_c7e26599e25cd275167ce77753938d17_8', 'fe_val_c7e26599e25cd275167ce77753938d17_8', 'fe_offset_c7e26599e25cd275167ce77753938d17_8', 'fe_max_c7e26599e25cd275167ce77753938d17_8', 'fe_reverse_c7e26599e25cd275167ce77753938d17_8', 'fe_first_val_c7e26599e25cd275167ce77753938d17_8', 'fe_last_val_c7e26599e25cd275167ce77753938d17_8' );
unset( $fe_array_c7e26599e25cd275167ce77753938d17_8 );
unset( $fe_array_c7e26599e25cd275167ce77753938d17_8 );
$fe_array_c7e26599e25cd275167ce77753938d17_8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'res', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['res'] : null;
$fe_array_c7e26599e25cd275167ce77753938d17_81 = compiledFetchAttribute( $fe_array_c7e26599e25cd275167ce77753938d17_8, 'items' );
unset( $fe_array_c7e26599e25cd275167ce77753938d17_8 );
$fe_array_c7e26599e25cd275167ce77753938d17_8 = $fe_array_c7e26599e25cd275167ce77753938d17_81;
if (! isset( $fe_array_c7e26599e25cd275167ce77753938d17_8 ) ) $fe_array_c7e26599e25cd275167ce77753938d17_8 = NULL;
while ( is_object( $fe_array_c7e26599e25cd275167ce77753938d17_8 ) and method_exists( $fe_array_c7e26599e25cd275167ce77753938d17_8, 'templateValue' ) )
    $fe_array_c7e26599e25cd275167ce77753938d17_8 = $fe_array_c7e26599e25cd275167ce77753938d17_8->templateValue();

$fe_array_keys_c7e26599e25cd275167ce77753938d17_8 = is_array( $fe_array_c7e26599e25cd275167ce77753938d17_8 ) ? array_keys( $fe_array_c7e26599e25cd275167ce77753938d17_8 ) : array();
$fe_n_items_c7e26599e25cd275167ce77753938d17_8 = count( $fe_array_keys_c7e26599e25cd275167ce77753938d17_8 );
$fe_n_items_processed_c7e26599e25cd275167ce77753938d17_8 = 0;
$fe_offset_c7e26599e25cd275167ce77753938d17_8 = 0;
$fe_max_c7e26599e25cd275167ce77753938d17_8 = $fe_n_items_c7e26599e25cd275167ce77753938d17_8 - $fe_offset_c7e26599e25cd275167ce77753938d17_8;
$fe_reverse_c7e26599e25cd275167ce77753938d17_8 = false;
if ( $fe_offset_c7e26599e25cd275167ce77753938d17_8 < 0 || $fe_offset_c7e26599e25cd275167ce77753938d17_8 >= $fe_n_items_c7e26599e25cd275167ce77753938d17_8 )
{
    $fe_offset_c7e26599e25cd275167ce77753938d17_8 = ( $fe_offset_c7e26599e25cd275167ce77753938d17_8 < 0 ) ? 0 : $fe_n_items_c7e26599e25cd275167ce77753938d17_8;
    if ( $fe_n_items_c7e26599e25cd275167ce77753938d17_8 || $fe_offset_c7e26599e25cd275167ce77753938d17_8 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_c7e26599e25cd275167ce77753938d17_8'. Array count: $fe_n_items_c7e26599e25cd275167ce77753938d17_8");   
}
}
if ( $fe_max_c7e26599e25cd275167ce77753938d17_8 < 0 || $fe_offset_c7e26599e25cd275167ce77753938d17_8 + $fe_max_c7e26599e25cd275167ce77753938d17_8 > $fe_n_items_c7e26599e25cd275167ce77753938d17_8 )
{
    if ( $fe_max_c7e26599e25cd275167ce77753938d17_8 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_c7e26599e25cd275167ce77753938d17_8");
    $fe_max_c7e26599e25cd275167ce77753938d17_8 = $fe_n_items_c7e26599e25cd275167ce77753938d17_8 - $fe_offset_c7e26599e25cd275167ce77753938d17_8;
}
if ( $fe_reverse_c7e26599e25cd275167ce77753938d17_8 )
{
    $fe_first_val_c7e26599e25cd275167ce77753938d17_8 = $fe_n_items_c7e26599e25cd275167ce77753938d17_8 - 1 - $fe_offset_c7e26599e25cd275167ce77753938d17_8;
    $fe_last_val_c7e26599e25cd275167ce77753938d17_8  = 0;
}
else
{
    $fe_first_val_c7e26599e25cd275167ce77753938d17_8 = $fe_offset_c7e26599e25cd275167ce77753938d17_8;
    $fe_last_val_c7e26599e25cd275167ce77753938d17_8  = $fe_n_items_c7e26599e25cd275167ce77753938d17_8 - 1;
}
// foreach
for ( $fe_i_c7e26599e25cd275167ce77753938d17_8 = $fe_first_val_c7e26599e25cd275167ce77753938d17_8; $fe_n_items_processed_c7e26599e25cd275167ce77753938d17_8 < $fe_max_c7e26599e25cd275167ce77753938d17_8 && ( $fe_reverse_c7e26599e25cd275167ce77753938d17_8 ? $fe_i_c7e26599e25cd275167ce77753938d17_8 >= $fe_last_val_c7e26599e25cd275167ce77753938d17_8 : $fe_i_c7e26599e25cd275167ce77753938d17_8 <= $fe_last_val_c7e26599e25cd275167ce77753938d17_8 ); $fe_reverse_c7e26599e25cd275167ce77753938d17_8 ? $fe_i_c7e26599e25cd275167ce77753938d17_8-- : $fe_i_c7e26599e25cd275167ce77753938d17_8++ )
{
$fe_key_c7e26599e25cd275167ce77753938d17_8 = $fe_array_keys_c7e26599e25cd275167ce77753938d17_8[$fe_i_c7e26599e25cd275167ce77753938d17_8];
$fe_val_c7e26599e25cd275167ce77753938d17_8 = $fe_array_c7e26599e25cd275167ce77753938d17_8[$fe_key_c7e26599e25cd275167ce77753938d17_8];
$vars[$rootNamespace]['item'] = $fe_val_c7e26599e25cd275167ce77753938d17_8;
$vars[$rootNamespace]['index'] = $fe_key_c7e26599e25cd275167ce77753938d17_8;
$text .= '                        <li>
                        <img ';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'return_image',
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
          1 => 'description',
          2 => false,
        ),
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
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' width="470" height="274" alt="';
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

$text .= '"/>
                            <div class="info">
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

$text .= '"><p class="info-title">';
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

$text .= '</p></a>
                                
                                <p>';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var3 = compiledFetchAttribute( $var2, 'description' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = strip_tags( $var2 );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$strlenFunc = 'mb_strlen'; $substrFunc = 'mb_substr';
$length = 80; $seq = "..."; $trimType = "right";
                                                                  if ( 2 > 1 )
                                                                  {
                                                                      $length = 100;
                                                                  }
                                                                  if ( 2 > 2 )
                                                                  {
                                                                      $seq = $staticValues[2];
                                                                  }
                                                                  if ( 2 > 3 )
                                                                  {
                                                                      $trimType = $staticValues[3];
                                                                  }
                                                                  if ( $trimType === "middle" )
                                                                  {
                                                                      $appendedStrLen = $strlenFunc( $seq );
                                                                      if ( $length > $appendedStrLen && ( $strlenFunc( $var1 ) > $length ) )
                                                                      {
                                                                          $operatorValueLength = $strlenFunc( $var1 );
                                                                          $chop = $length - $appendedStrLen;
                                                                          $middlePos = (int)($chop / 2);
                                                                          $leftPartLength = $middlePos;
                                                                          $rightPartLength = $chop - $middlePos;
                                                                          $var = trim( $substrFunc( $var1, 0, $leftPartLength ) . $seq . $substrFunc( $var1, $operatorValueLength - $rightPartLength, $rightPartLength ) );
                                                                      }
                                                                      else
                                                                      {
                                                                          $var = $var1;
                                                                      }
                                                                  }
                                                                  else // default: trim_type === "right"
                                                                  {
                                                                      $maxLength = $length - $strlenFunc( $seq );
                                                                      if ( ( $strlenFunc( $var1 ) > $length ) && $strlenFunc( $var1 ) > $maxLength )
                                                                      {
                                                                          $var = trim( $substrFunc( $var1, 0, $maxLength) ) . $seq;
                                                                      }
                                                                      else
                                                                      {
                                                                          $var = $var1;
                                                                      }
                                                                  }
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</p>
                            </div>
                       </li>
                    ';
$fe_n_items_processed_c7e26599e25cd275167ce77753938d17_8++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_c7e26599e25cd275167ce77753938d17_8 ) ) extract( array_pop( $fe_variable_stack_c7e26599e25cd275167ce77753938d17_8 ) );

else
{

unset( $fe_array_c7e26599e25cd275167ce77753938d17_8 );

unset( $fe_array_keys_c7e26599e25cd275167ce77753938d17_8 );

unset( $fe_n_items_c7e26599e25cd275167ce77753938d17_8 );

unset( $fe_n_items_processed_c7e26599e25cd275167ce77753938d17_8 );

unset( $fe_i_c7e26599e25cd275167ce77753938d17_8 );

unset( $fe_key_c7e26599e25cd275167ce77753938d17_8 );

unset( $fe_val_c7e26599e25cd275167ce77753938d17_8 );

unset( $fe_offset_c7e26599e25cd275167ce77753938d17_8 );

unset( $fe_max_c7e26599e25cd275167ce77753938d17_8 );

unset( $fe_reverse_c7e26599e25cd275167ce77753938d17_8 );

unset( $fe_first_val_c7e26599e25cd275167ce77753938d17_8 );

unset( $fe_last_val_c7e26599e25cd275167ce77753938d17_8 );

unset( $fe_variable_stack_c7e26599e25cd275167ce77753938d17_8 );

}

// foreach ends
$text .= '                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>';
// undef $source
$tpl->unsetLocalVariable( 'source', $rootNamespace );

// undef $limit
$tpl->unsetLocalVariable( 'limit', $rootNamespace );

// undef $offset
$tpl->unsetLocalVariable( 'offset', $rootNamespace );

// undef $link_view_all
$tpl->unsetLocalVariable( 'link_view_all', $rootNamespace );

// undef $res
$tpl->unsetLocalVariable( 'res', $rootNamespace );

$text .= '

<!-- STOP: including template: extension/dcdgroup/design/group/override/templates/block/dcd_main_top.tpl (extension/dcdgroup/design/group/override/templates/block/dcd_main_top.tpl) -->
';

$setArray = $oldSetArray_34fb5f069f75055c9adc287ac1c81227;
$tpl->Level--;
?>
