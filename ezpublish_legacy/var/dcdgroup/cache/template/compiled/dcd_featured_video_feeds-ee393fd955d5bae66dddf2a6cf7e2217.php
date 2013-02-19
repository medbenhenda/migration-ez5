<?php
// URI:       extension/dcdgroup/design/group/override/templates/block/dcd_featured_video_feeds.tpl
// Filename:  extension/dcdgroup/design/group/override/templates/block/dcd_featured_video_feeds.tpl
// Timestamp: 1359052770 (Thu Jan 24 19:39:30 CET 2013)
$oldSetArray_0dd735a56bde5e767b19e14f45e5e0d1 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/dcdgroup/design/group/override/templates/block/dcd_featured_video_feeds.tpl (extension/dcdgroup/design/group/override/templates/block/dcd_featured_video_feeds.tpl) -->
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
    1 => 66,
    2 => 392,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_featured_video_feeds.tpl',
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
    1 => 66,
    2 => 392,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_featured_video_feeds.tpl',
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
    1 => 66,
    2 => 392,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_featured_video_feeds.tpl',
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
    1 => 66,
    2 => 392,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_featured_video_feeds.tpl',
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
$tpl->processOperator( 'feedreader',
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
    1 => 66,
    2 => 392,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_featured_video_feeds.tpl',
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
 <div class="blockbox">
    <ul id="mycarousel" class="jcarousel-skin-tango">
        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_f984c5fd49335ae8327011cf9e8b2d29_13 ) ) $fe_variable_stack_f984c5fd49335ae8327011cf9e8b2d29_13 = array();
$fe_variable_stack_f984c5fd49335ae8327011cf9e8b2d29_13[] = compact( 'fe_array_f984c5fd49335ae8327011cf9e8b2d29_13', 'fe_array_keys_f984c5fd49335ae8327011cf9e8b2d29_13', 'fe_n_items_f984c5fd49335ae8327011cf9e8b2d29_13', 'fe_n_items_processed_f984c5fd49335ae8327011cf9e8b2d29_13', 'fe_i_f984c5fd49335ae8327011cf9e8b2d29_13', 'fe_key_f984c5fd49335ae8327011cf9e8b2d29_13', 'fe_val_f984c5fd49335ae8327011cf9e8b2d29_13', 'fe_offset_f984c5fd49335ae8327011cf9e8b2d29_13', 'fe_max_f984c5fd49335ae8327011cf9e8b2d29_13', 'fe_reverse_f984c5fd49335ae8327011cf9e8b2d29_13', 'fe_first_val_f984c5fd49335ae8327011cf9e8b2d29_13', 'fe_last_val_f984c5fd49335ae8327011cf9e8b2d29_13' );
unset( $fe_array_f984c5fd49335ae8327011cf9e8b2d29_13 );
unset( $fe_array_f984c5fd49335ae8327011cf9e8b2d29_13 );
$fe_array_f984c5fd49335ae8327011cf9e8b2d29_13 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'res', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['res'] : null;
$fe_array_f984c5fd49335ae8327011cf9e8b2d29_131 = compiledFetchAttribute( $fe_array_f984c5fd49335ae8327011cf9e8b2d29_13, 'items' );
unset( $fe_array_f984c5fd49335ae8327011cf9e8b2d29_13 );
$fe_array_f984c5fd49335ae8327011cf9e8b2d29_13 = $fe_array_f984c5fd49335ae8327011cf9e8b2d29_131;
if (! isset( $fe_array_f984c5fd49335ae8327011cf9e8b2d29_13 ) ) $fe_array_f984c5fd49335ae8327011cf9e8b2d29_13 = NULL;
while ( is_object( $fe_array_f984c5fd49335ae8327011cf9e8b2d29_13 ) and method_exists( $fe_array_f984c5fd49335ae8327011cf9e8b2d29_13, 'templateValue' ) )
    $fe_array_f984c5fd49335ae8327011cf9e8b2d29_13 = $fe_array_f984c5fd49335ae8327011cf9e8b2d29_13->templateValue();

$fe_array_keys_f984c5fd49335ae8327011cf9e8b2d29_13 = is_array( $fe_array_f984c5fd49335ae8327011cf9e8b2d29_13 ) ? array_keys( $fe_array_f984c5fd49335ae8327011cf9e8b2d29_13 ) : array();
$fe_n_items_f984c5fd49335ae8327011cf9e8b2d29_13 = count( $fe_array_keys_f984c5fd49335ae8327011cf9e8b2d29_13 );
$fe_n_items_processed_f984c5fd49335ae8327011cf9e8b2d29_13 = 0;
$fe_offset_f984c5fd49335ae8327011cf9e8b2d29_13 = 0;
$fe_max_f984c5fd49335ae8327011cf9e8b2d29_13 = $fe_n_items_f984c5fd49335ae8327011cf9e8b2d29_13 - $fe_offset_f984c5fd49335ae8327011cf9e8b2d29_13;
$fe_reverse_f984c5fd49335ae8327011cf9e8b2d29_13 = false;
if ( $fe_offset_f984c5fd49335ae8327011cf9e8b2d29_13 < 0 || $fe_offset_f984c5fd49335ae8327011cf9e8b2d29_13 >= $fe_n_items_f984c5fd49335ae8327011cf9e8b2d29_13 )
{
    $fe_offset_f984c5fd49335ae8327011cf9e8b2d29_13 = ( $fe_offset_f984c5fd49335ae8327011cf9e8b2d29_13 < 0 ) ? 0 : $fe_n_items_f984c5fd49335ae8327011cf9e8b2d29_13;
    if ( $fe_n_items_f984c5fd49335ae8327011cf9e8b2d29_13 || $fe_offset_f984c5fd49335ae8327011cf9e8b2d29_13 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_f984c5fd49335ae8327011cf9e8b2d29_13'. Array count: $fe_n_items_f984c5fd49335ae8327011cf9e8b2d29_13");   
}
}
if ( $fe_max_f984c5fd49335ae8327011cf9e8b2d29_13 < 0 || $fe_offset_f984c5fd49335ae8327011cf9e8b2d29_13 + $fe_max_f984c5fd49335ae8327011cf9e8b2d29_13 > $fe_n_items_f984c5fd49335ae8327011cf9e8b2d29_13 )
{
    if ( $fe_max_f984c5fd49335ae8327011cf9e8b2d29_13 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_f984c5fd49335ae8327011cf9e8b2d29_13");
    $fe_max_f984c5fd49335ae8327011cf9e8b2d29_13 = $fe_n_items_f984c5fd49335ae8327011cf9e8b2d29_13 - $fe_offset_f984c5fd49335ae8327011cf9e8b2d29_13;
}
if ( $fe_reverse_f984c5fd49335ae8327011cf9e8b2d29_13 )
{
    $fe_first_val_f984c5fd49335ae8327011cf9e8b2d29_13 = $fe_n_items_f984c5fd49335ae8327011cf9e8b2d29_13 - 1 - $fe_offset_f984c5fd49335ae8327011cf9e8b2d29_13;
    $fe_last_val_f984c5fd49335ae8327011cf9e8b2d29_13  = 0;
}
else
{
    $fe_first_val_f984c5fd49335ae8327011cf9e8b2d29_13 = $fe_offset_f984c5fd49335ae8327011cf9e8b2d29_13;
    $fe_last_val_f984c5fd49335ae8327011cf9e8b2d29_13  = $fe_n_items_f984c5fd49335ae8327011cf9e8b2d29_13 - 1;
}
// foreach
for ( $fe_i_f984c5fd49335ae8327011cf9e8b2d29_13 = $fe_first_val_f984c5fd49335ae8327011cf9e8b2d29_13; $fe_n_items_processed_f984c5fd49335ae8327011cf9e8b2d29_13 < $fe_max_f984c5fd49335ae8327011cf9e8b2d29_13 && ( $fe_reverse_f984c5fd49335ae8327011cf9e8b2d29_13 ? $fe_i_f984c5fd49335ae8327011cf9e8b2d29_13 >= $fe_last_val_f984c5fd49335ae8327011cf9e8b2d29_13 : $fe_i_f984c5fd49335ae8327011cf9e8b2d29_13 <= $fe_last_val_f984c5fd49335ae8327011cf9e8b2d29_13 ); $fe_reverse_f984c5fd49335ae8327011cf9e8b2d29_13 ? $fe_i_f984c5fd49335ae8327011cf9e8b2d29_13-- : $fe_i_f984c5fd49335ae8327011cf9e8b2d29_13++ )
{
$fe_key_f984c5fd49335ae8327011cf9e8b2d29_13 = $fe_array_keys_f984c5fd49335ae8327011cf9e8b2d29_13[$fe_i_f984c5fd49335ae8327011cf9e8b2d29_13];
$fe_val_f984c5fd49335ae8327011cf9e8b2d29_13 = $fe_array_f984c5fd49335ae8327011cf9e8b2d29_13[$fe_key_f984c5fd49335ae8327011cf9e8b2d29_13];
$vars[$rootNamespace]['item'] = $fe_val_f984c5fd49335ae8327011cf9e8b2d29_13;
$vars[$rootNamespace]['index'] = $fe_key_f984c5fd49335ae8327011cf9e8b2d29_13;
$text .= '           <li><a href=';
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

$text .= '"> <img ';
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

$text .= ' width="150" height="98" alt="';
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

$text .= '"/></a></li>
        ';
$fe_n_items_processed_f984c5fd49335ae8327011cf9e8b2d29_13++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_f984c5fd49335ae8327011cf9e8b2d29_13 ) ) extract( array_pop( $fe_variable_stack_f984c5fd49335ae8327011cf9e8b2d29_13 ) );

else
{

unset( $fe_array_f984c5fd49335ae8327011cf9e8b2d29_13 );

unset( $fe_array_keys_f984c5fd49335ae8327011cf9e8b2d29_13 );

unset( $fe_n_items_f984c5fd49335ae8327011cf9e8b2d29_13 );

unset( $fe_n_items_processed_f984c5fd49335ae8327011cf9e8b2d29_13 );

unset( $fe_i_f984c5fd49335ae8327011cf9e8b2d29_13 );

unset( $fe_key_f984c5fd49335ae8327011cf9e8b2d29_13 );

unset( $fe_val_f984c5fd49335ae8327011cf9e8b2d29_13 );

unset( $fe_offset_f984c5fd49335ae8327011cf9e8b2d29_13 );

unset( $fe_max_f984c5fd49335ae8327011cf9e8b2d29_13 );

unset( $fe_reverse_f984c5fd49335ae8327011cf9e8b2d29_13 );

unset( $fe_first_val_f984c5fd49335ae8327011cf9e8b2d29_13 );

unset( $fe_last_val_f984c5fd49335ae8327011cf9e8b2d29_13 );

unset( $fe_variable_stack_f984c5fd49335ae8327011cf9e8b2d29_13 );

}

// foreach ends
$text .= '    </ul>
</div>
<div class="clr"></div>
';
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

$text .= '</div>
<!-- STOP: including template: extension/dcdgroup/design/group/override/templates/block/dcd_featured_video_feeds.tpl (extension/dcdgroup/design/group/override/templates/block/dcd_featured_video_feeds.tpl) -->
';

$setArray = $oldSetArray_0dd735a56bde5e767b19e14f45e5e0d1;
$tpl->Level--;
?>
