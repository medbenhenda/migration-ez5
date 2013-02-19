<?php
// URI:       extension/dcdgroup/design/group/override/templates/block/dcd_news_feeds.tpl
// Filename:  extension/dcdgroup/design/group/override/templates/block/dcd_news_feeds.tpl
// Timestamp: 1359052770 (Thu Jan 24 19:39:30 CET 2013)
$oldSetArray_f06281a847439b5015358be6229d4d21 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/dcdgroup/design/group/override/templates/block/dcd_news_feeds.tpl (extension/dcdgroup/design/group/override/templates/block/dcd_news_feeds.tpl) -->
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
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_news_feeds.tpl',
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
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_news_feeds.tpl',
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
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_news_feeds.tpl',
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
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_news_feeds.tpl',
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
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_news_feeds.tpl',
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
<div class="blockbox newsblock">
    <div class="news_left">
        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_2a790d6ab69b6a540683e2f59dbffaef_10 ) ) $fe_variable_stack_2a790d6ab69b6a540683e2f59dbffaef_10 = array();
$fe_variable_stack_2a790d6ab69b6a540683e2f59dbffaef_10[] = compact( 'fe_array_2a790d6ab69b6a540683e2f59dbffaef_10', 'fe_array_keys_2a790d6ab69b6a540683e2f59dbffaef_10', 'fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_10', 'fe_n_items_processed_2a790d6ab69b6a540683e2f59dbffaef_10', 'fe_i_2a790d6ab69b6a540683e2f59dbffaef_10', 'fe_key_2a790d6ab69b6a540683e2f59dbffaef_10', 'fe_val_2a790d6ab69b6a540683e2f59dbffaef_10', 'fe_offset_2a790d6ab69b6a540683e2f59dbffaef_10', 'fe_max_2a790d6ab69b6a540683e2f59dbffaef_10', 'fe_reverse_2a790d6ab69b6a540683e2f59dbffaef_10', 'fe_first_val_2a790d6ab69b6a540683e2f59dbffaef_10', 'fe_last_val_2a790d6ab69b6a540683e2f59dbffaef_10' );
unset( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_10 );
unset( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_10 );
$fe_array_2a790d6ab69b6a540683e2f59dbffaef_10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'res', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['res'] : null;
$fe_array_2a790d6ab69b6a540683e2f59dbffaef_101 = compiledFetchAttribute( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_10, 'items' );
unset( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_10 );
$fe_array_2a790d6ab69b6a540683e2f59dbffaef_10 = $fe_array_2a790d6ab69b6a540683e2f59dbffaef_101;
if (! isset( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_10 ) ) $fe_array_2a790d6ab69b6a540683e2f59dbffaef_10 = NULL;
while ( is_object( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_10 ) and method_exists( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_10, 'templateValue' ) )
    $fe_array_2a790d6ab69b6a540683e2f59dbffaef_10 = $fe_array_2a790d6ab69b6a540683e2f59dbffaef_10->templateValue();

$fe_array_keys_2a790d6ab69b6a540683e2f59dbffaef_10 = is_array( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_10 ) ? array_keys( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_10 ) : array();
$fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_10 = count( $fe_array_keys_2a790d6ab69b6a540683e2f59dbffaef_10 );
$fe_n_items_processed_2a790d6ab69b6a540683e2f59dbffaef_10 = 0;
$fe_offset_2a790d6ab69b6a540683e2f59dbffaef_10 = 0;
$fe_max_2a790d6ab69b6a540683e2f59dbffaef_10 = $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_10 - $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_10;
$fe_reverse_2a790d6ab69b6a540683e2f59dbffaef_10 = false;
if ( $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_10 < 0 || $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_10 >= $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_10 )
{
    $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_10 = ( $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_10 < 0 ) ? 0 : $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_10;
    if ( $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_10 || $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_10 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_2a790d6ab69b6a540683e2f59dbffaef_10'. Array count: $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_10");   
}
}
if ( $fe_max_2a790d6ab69b6a540683e2f59dbffaef_10 < 0 || $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_10 + $fe_max_2a790d6ab69b6a540683e2f59dbffaef_10 > $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_10 )
{
    if ( $fe_max_2a790d6ab69b6a540683e2f59dbffaef_10 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_2a790d6ab69b6a540683e2f59dbffaef_10");
    $fe_max_2a790d6ab69b6a540683e2f59dbffaef_10 = $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_10 - $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_10;
}
if ( $fe_reverse_2a790d6ab69b6a540683e2f59dbffaef_10 )
{
    $fe_first_val_2a790d6ab69b6a540683e2f59dbffaef_10 = $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_10 - 1 - $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_10;
    $fe_last_val_2a790d6ab69b6a540683e2f59dbffaef_10  = 0;
}
else
{
    $fe_first_val_2a790d6ab69b6a540683e2f59dbffaef_10 = $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_10;
    $fe_last_val_2a790d6ab69b6a540683e2f59dbffaef_10  = $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_10 - 1;
}
// foreach
for ( $fe_i_2a790d6ab69b6a540683e2f59dbffaef_10 = $fe_first_val_2a790d6ab69b6a540683e2f59dbffaef_10; $fe_n_items_processed_2a790d6ab69b6a540683e2f59dbffaef_10 < $fe_max_2a790d6ab69b6a540683e2f59dbffaef_10 && ( $fe_reverse_2a790d6ab69b6a540683e2f59dbffaef_10 ? $fe_i_2a790d6ab69b6a540683e2f59dbffaef_10 >= $fe_last_val_2a790d6ab69b6a540683e2f59dbffaef_10 : $fe_i_2a790d6ab69b6a540683e2f59dbffaef_10 <= $fe_last_val_2a790d6ab69b6a540683e2f59dbffaef_10 ); $fe_reverse_2a790d6ab69b6a540683e2f59dbffaef_10 ? $fe_i_2a790d6ab69b6a540683e2f59dbffaef_10-- : $fe_i_2a790d6ab69b6a540683e2f59dbffaef_10++ )
{
$fe_key_2a790d6ab69b6a540683e2f59dbffaef_10 = $fe_array_keys_2a790d6ab69b6a540683e2f59dbffaef_10[$fe_i_2a790d6ab69b6a540683e2f59dbffaef_10];
$fe_val_2a790d6ab69b6a540683e2f59dbffaef_10 = $fe_array_2a790d6ab69b6a540683e2f59dbffaef_10[$fe_key_2a790d6ab69b6a540683e2f59dbffaef_10];
$vars[$rootNamespace]['item'] = $fe_val_2a790d6ab69b6a540683e2f59dbffaef_10;
$vars[$rootNamespace]['index'] = $fe_key_2a790d6ab69b6a540683e2f59dbffaef_10;
$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( 0 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) == ( 1 ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = ( ( $if_cond4 ) == ( 2 ) );
unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( $if_cond1 )
    $if_cond = $if_cond1;
else if ( $if_cond2 )
    $if_cond = $if_cond2;
else if ( $if_cond3 )
    $if_cond = $if_cond3;
else
    $if_cond = false;
unset( $if_cond1, $if_cond2, $if_cond3 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
unset( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_12 );
unset( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_121 );
unset( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_121 );
$elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_121 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_121 ) ) $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_121 = NULL;
while ( is_object( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_121 ) and method_exists( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_121, 'templateValue' ) )
    $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_121 = $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_121->templateValue();
while ( is_object( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_121 ) and method_exists( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_121, 'templateValue' ) )
    $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_121 = $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_121->templateValue();
$elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_12 = ( ( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_121 ) == ( 1 ) );
unset( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_121 );
if (! isset( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_12 ) ) $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_12 = NULL;
while ( is_object( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_12 ) and method_exists( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_12, 'templateValue' ) )
    $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_12 = $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_12->templateValue();

unset( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_13 );
unset( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_131 );
unset( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_131 );
$elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_131 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_131 ) ) $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_131 = NULL;
while ( is_object( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_131 ) and method_exists( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_131, 'templateValue' ) )
    $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_131 = $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_131->templateValue();
while ( is_object( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_131 ) and method_exists( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_131, 'templateValue' ) )
    $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_131 = $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_131->templateValue();
$elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_13 = ( ( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_131 ) == ( 2 ) );
unset( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_131 );
if (! isset( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_13 ) ) $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_13 = NULL;
while ( is_object( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_13 ) and method_exists( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_13, 'templateValue' ) )
    $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_13 = $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_13->templateValue();

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
$text .= '                    <div class="news_top infobox">
                ';
}
elseif ( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_12 )
{
$text .= '                    <div class="topleft infobox">
                ';
}
elseif ( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_13 )
{
$text .= '                    <div class="topleft last infobox">
                ';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_12 );

unset( $elseif_cond_2a790d6ab69b6a540683e2f59dbffaef_13 );

$text .= '
                <div class=" infobox">

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

$text .= ' width="161" height="99" alt="';
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
                        ';
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
                                                                  if ( 3 > 1 )
                                                                  {
                                                                      $length = 40;
                                                                  }
                                                                  if ( 3 > 2 )
                                                                  {
                                                                      $seq = '...';
                                                                  }
                                                                  if ( 3 > 3 )
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

$text .= '
                        <p class="more">
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

$text .= '>more</a>
                        </p>
                    </div>
                </div>
                </div>
            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
$fe_n_items_processed_2a790d6ab69b6a540683e2f59dbffaef_10++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_2a790d6ab69b6a540683e2f59dbffaef_10 ) ) extract( array_pop( $fe_variable_stack_2a790d6ab69b6a540683e2f59dbffaef_10 ) );

else
{

unset( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_10 );

unset( $fe_array_keys_2a790d6ab69b6a540683e2f59dbffaef_10 );

unset( $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_10 );

unset( $fe_n_items_processed_2a790d6ab69b6a540683e2f59dbffaef_10 );

unset( $fe_i_2a790d6ab69b6a540683e2f59dbffaef_10 );

unset( $fe_key_2a790d6ab69b6a540683e2f59dbffaef_10 );

unset( $fe_val_2a790d6ab69b6a540683e2f59dbffaef_10 );

unset( $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_10 );

unset( $fe_max_2a790d6ab69b6a540683e2f59dbffaef_10 );

unset( $fe_reverse_2a790d6ab69b6a540683e2f59dbffaef_10 );

unset( $fe_first_val_2a790d6ab69b6a540683e2f59dbffaef_10 );

unset( $fe_last_val_2a790d6ab69b6a540683e2f59dbffaef_10 );

unset( $fe_variable_stack_2a790d6ab69b6a540683e2f59dbffaef_10 );

}

// foreach ends
$text .= '    </div>
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_2a790d6ab69b6a540683e2f59dbffaef_11 ) ) $fe_variable_stack_2a790d6ab69b6a540683e2f59dbffaef_11 = array();
$fe_variable_stack_2a790d6ab69b6a540683e2f59dbffaef_11[] = compact( 'fe_array_2a790d6ab69b6a540683e2f59dbffaef_11', 'fe_array_keys_2a790d6ab69b6a540683e2f59dbffaef_11', 'fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_11', 'fe_n_items_processed_2a790d6ab69b6a540683e2f59dbffaef_11', 'fe_i_2a790d6ab69b6a540683e2f59dbffaef_11', 'fe_key_2a790d6ab69b6a540683e2f59dbffaef_11', 'fe_val_2a790d6ab69b6a540683e2f59dbffaef_11', 'fe_offset_2a790d6ab69b6a540683e2f59dbffaef_11', 'fe_max_2a790d6ab69b6a540683e2f59dbffaef_11', 'fe_reverse_2a790d6ab69b6a540683e2f59dbffaef_11', 'fe_first_val_2a790d6ab69b6a540683e2f59dbffaef_11', 'fe_last_val_2a790d6ab69b6a540683e2f59dbffaef_11' );
unset( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_11 );
unset( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_11 );
$fe_array_2a790d6ab69b6a540683e2f59dbffaef_11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'res', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['res'] : null;
$fe_array_2a790d6ab69b6a540683e2f59dbffaef_111 = compiledFetchAttribute( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_11, 'items' );
unset( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_11 );
$fe_array_2a790d6ab69b6a540683e2f59dbffaef_11 = $fe_array_2a790d6ab69b6a540683e2f59dbffaef_111;
if (! isset( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_11 ) ) $fe_array_2a790d6ab69b6a540683e2f59dbffaef_11 = NULL;
while ( is_object( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_11 ) and method_exists( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_11, 'templateValue' ) )
    $fe_array_2a790d6ab69b6a540683e2f59dbffaef_11 = $fe_array_2a790d6ab69b6a540683e2f59dbffaef_11->templateValue();

$fe_array_keys_2a790d6ab69b6a540683e2f59dbffaef_11 = is_array( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_11 ) ? array_keys( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_11 ) : array();
$fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_11 = count( $fe_array_keys_2a790d6ab69b6a540683e2f59dbffaef_11 );
$fe_n_items_processed_2a790d6ab69b6a540683e2f59dbffaef_11 = 0;
$fe_offset_2a790d6ab69b6a540683e2f59dbffaef_11 = 0;
$fe_max_2a790d6ab69b6a540683e2f59dbffaef_11 = $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_11 - $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_11;
$fe_reverse_2a790d6ab69b6a540683e2f59dbffaef_11 = false;
if ( $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_11 < 0 || $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_11 >= $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_11 )
{
    $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_11 = ( $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_11 < 0 ) ? 0 : $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_11;
    if ( $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_11 || $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_11 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_2a790d6ab69b6a540683e2f59dbffaef_11'. Array count: $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_11");   
}
}
if ( $fe_max_2a790d6ab69b6a540683e2f59dbffaef_11 < 0 || $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_11 + $fe_max_2a790d6ab69b6a540683e2f59dbffaef_11 > $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_11 )
{
    if ( $fe_max_2a790d6ab69b6a540683e2f59dbffaef_11 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_2a790d6ab69b6a540683e2f59dbffaef_11");
    $fe_max_2a790d6ab69b6a540683e2f59dbffaef_11 = $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_11 - $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_11;
}
if ( $fe_reverse_2a790d6ab69b6a540683e2f59dbffaef_11 )
{
    $fe_first_val_2a790d6ab69b6a540683e2f59dbffaef_11 = $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_11 - 1 - $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_11;
    $fe_last_val_2a790d6ab69b6a540683e2f59dbffaef_11  = 0;
}
else
{
    $fe_first_val_2a790d6ab69b6a540683e2f59dbffaef_11 = $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_11;
    $fe_last_val_2a790d6ab69b6a540683e2f59dbffaef_11  = $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_11 - 1;
}
// foreach
for ( $fe_i_2a790d6ab69b6a540683e2f59dbffaef_11 = $fe_first_val_2a790d6ab69b6a540683e2f59dbffaef_11; $fe_n_items_processed_2a790d6ab69b6a540683e2f59dbffaef_11 < $fe_max_2a790d6ab69b6a540683e2f59dbffaef_11 && ( $fe_reverse_2a790d6ab69b6a540683e2f59dbffaef_11 ? $fe_i_2a790d6ab69b6a540683e2f59dbffaef_11 >= $fe_last_val_2a790d6ab69b6a540683e2f59dbffaef_11 : $fe_i_2a790d6ab69b6a540683e2f59dbffaef_11 <= $fe_last_val_2a790d6ab69b6a540683e2f59dbffaef_11 ); $fe_reverse_2a790d6ab69b6a540683e2f59dbffaef_11 ? $fe_i_2a790d6ab69b6a540683e2f59dbffaef_11-- : $fe_i_2a790d6ab69b6a540683e2f59dbffaef_11++ )
{
$fe_key_2a790d6ab69b6a540683e2f59dbffaef_11 = $fe_array_keys_2a790d6ab69b6a540683e2f59dbffaef_11[$fe_i_2a790d6ab69b6a540683e2f59dbffaef_11];
$fe_val_2a790d6ab69b6a540683e2f59dbffaef_11 = $fe_array_2a790d6ab69b6a540683e2f59dbffaef_11[$fe_key_2a790d6ab69b6a540683e2f59dbffaef_11];
$vars[$rootNamespace]['item'] = $fe_val_2a790d6ab69b6a540683e2f59dbffaef_11;
$vars[$rootNamespace]['index'] = $fe_key_2a790d6ab69b6a540683e2f59dbffaef_11;
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( 3 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) == ( 4 ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( $if_cond1 )
    $if_cond = $if_cond1;
else if ( $if_cond2 )
    $if_cond = $if_cond2;
else
    $if_cond = false;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <div class="news_right infobox">
                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 3 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    <img ';
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

$text .= ' width="135" height="99" alt="';
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
                        ';
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
                                                                  if ( 3 > 1 )
                                                                  {
                                                                      $length = 40;
                                                                  }
                                                                  if ( 3 > 2 )
                                                                  {
                                                                      $seq = '...';
                                                                  }
                                                                  if ( 3 > 3 )
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

$text .= '
                        <p class="more">
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

$text .= '>more</a>
                        </p>
                    </div>
                ';
}
else
{
$text .= '                    <div class="info">
                        ';
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
                                                                  if ( 3 > 1 )
                                                                  {
                                                                      $length = 90;
                                                                  }
                                                                  if ( 3 > 2 )
                                                                  {
                                                                      $seq = '...';
                                                                  }
                                                                  if ( 3 > 3 )
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

$text .= '
                        <p class="more">
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

$text .= '>more</a>
                        </p>
                    </div>
                ';
}
unset( $if_cond );
// if ends

$text .= '            </div>
        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
$fe_n_items_processed_2a790d6ab69b6a540683e2f59dbffaef_11++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_2a790d6ab69b6a540683e2f59dbffaef_11 ) ) extract( array_pop( $fe_variable_stack_2a790d6ab69b6a540683e2f59dbffaef_11 ) );

else
{

unset( $fe_array_2a790d6ab69b6a540683e2f59dbffaef_11 );

unset( $fe_array_keys_2a790d6ab69b6a540683e2f59dbffaef_11 );

unset( $fe_n_items_2a790d6ab69b6a540683e2f59dbffaef_11 );

unset( $fe_n_items_processed_2a790d6ab69b6a540683e2f59dbffaef_11 );

unset( $fe_i_2a790d6ab69b6a540683e2f59dbffaef_11 );

unset( $fe_key_2a790d6ab69b6a540683e2f59dbffaef_11 );

unset( $fe_val_2a790d6ab69b6a540683e2f59dbffaef_11 );

unset( $fe_offset_2a790d6ab69b6a540683e2f59dbffaef_11 );

unset( $fe_max_2a790d6ab69b6a540683e2f59dbffaef_11 );

unset( $fe_reverse_2a790d6ab69b6a540683e2f59dbffaef_11 );

unset( $fe_first_val_2a790d6ab69b6a540683e2f59dbffaef_11 );

unset( $fe_last_val_2a790d6ab69b6a540683e2f59dbffaef_11 );

unset( $fe_variable_stack_2a790d6ab69b6a540683e2f59dbffaef_11 );

}

// foreach ends
$text .= '</div>
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
<!-- STOP: including template: extension/dcdgroup/design/group/override/templates/block/dcd_news_feeds.tpl (extension/dcdgroup/design/group/override/templates/block/dcd_news_feeds.tpl) -->
';

$setArray = $oldSetArray_f06281a847439b5015358be6229d4d21;
$tpl->Level--;
?>
