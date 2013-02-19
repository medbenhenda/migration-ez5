<?php
// URI:       extension/dcdgroup/design/group/override/templates/block/dcd_headlines_feeds.tpl
// Filename:  extension/dcdgroup/design/group/override/templates/block/dcd_headlines_feeds.tpl
// Timestamp: 1359052770 (Thu Jan 24 19:39:30 CET 2013)
$oldSetArray_a51dce731312a7cd1745adfca146f6cb = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/dcdgroup/design/group/override/templates/block/dcd_headlines_feeds.tpl (extension/dcdgroup/design/group/override/templates/block/dcd_headlines_feeds.tpl) -->
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
    0 => 6,
    1 => 50,
    2 => 324,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_headlines_feeds.tpl',
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
    0 => 6,
    1 => 50,
    2 => 324,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_headlines_feeds.tpl',
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
    0 => 6,
    1 => 50,
    2 => 324,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_headlines_feeds.tpl',
) );
    $tpl->setVariable( 'offset', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'offset', $var, $rootNamespace );
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
    0 => 6,
    1 => 50,
    2 => 324,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_headlines_feeds.tpl',
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

$text .= '</h2>
 <div class="blockbox">
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_9b12bdbb0b4f91917165676862681efe_9 ) ) $fe_variable_stack_9b12bdbb0b4f91917165676862681efe_9 = array();
$fe_variable_stack_9b12bdbb0b4f91917165676862681efe_9[] = compact( 'fe_array_9b12bdbb0b4f91917165676862681efe_9', 'fe_array_keys_9b12bdbb0b4f91917165676862681efe_9', 'fe_n_items_9b12bdbb0b4f91917165676862681efe_9', 'fe_n_items_processed_9b12bdbb0b4f91917165676862681efe_9', 'fe_i_9b12bdbb0b4f91917165676862681efe_9', 'fe_key_9b12bdbb0b4f91917165676862681efe_9', 'fe_val_9b12bdbb0b4f91917165676862681efe_9', 'fe_offset_9b12bdbb0b4f91917165676862681efe_9', 'fe_max_9b12bdbb0b4f91917165676862681efe_9', 'fe_reverse_9b12bdbb0b4f91917165676862681efe_9', 'fe_first_val_9b12bdbb0b4f91917165676862681efe_9', 'fe_last_val_9b12bdbb0b4f91917165676862681efe_9' );
unset( $fe_array_9b12bdbb0b4f91917165676862681efe_9 );
unset( $fe_array_9b12bdbb0b4f91917165676862681efe_9 );
$fe_array_9b12bdbb0b4f91917165676862681efe_9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'res', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['res'] : null;
$fe_array_9b12bdbb0b4f91917165676862681efe_91 = compiledFetchAttribute( $fe_array_9b12bdbb0b4f91917165676862681efe_9, 'items' );
unset( $fe_array_9b12bdbb0b4f91917165676862681efe_9 );
$fe_array_9b12bdbb0b4f91917165676862681efe_9 = $fe_array_9b12bdbb0b4f91917165676862681efe_91;
if (! isset( $fe_array_9b12bdbb0b4f91917165676862681efe_9 ) ) $fe_array_9b12bdbb0b4f91917165676862681efe_9 = NULL;
while ( is_object( $fe_array_9b12bdbb0b4f91917165676862681efe_9 ) and method_exists( $fe_array_9b12bdbb0b4f91917165676862681efe_9, 'templateValue' ) )
    $fe_array_9b12bdbb0b4f91917165676862681efe_9 = $fe_array_9b12bdbb0b4f91917165676862681efe_9->templateValue();

$fe_array_keys_9b12bdbb0b4f91917165676862681efe_9 = is_array( $fe_array_9b12bdbb0b4f91917165676862681efe_9 ) ? array_keys( $fe_array_9b12bdbb0b4f91917165676862681efe_9 ) : array();
$fe_n_items_9b12bdbb0b4f91917165676862681efe_9 = count( $fe_array_keys_9b12bdbb0b4f91917165676862681efe_9 );
$fe_n_items_processed_9b12bdbb0b4f91917165676862681efe_9 = 0;
$fe_offset_9b12bdbb0b4f91917165676862681efe_9 = 0;
$fe_max_9b12bdbb0b4f91917165676862681efe_9 = $fe_n_items_9b12bdbb0b4f91917165676862681efe_9 - $fe_offset_9b12bdbb0b4f91917165676862681efe_9;
$fe_reverse_9b12bdbb0b4f91917165676862681efe_9 = false;
if ( $fe_offset_9b12bdbb0b4f91917165676862681efe_9 < 0 || $fe_offset_9b12bdbb0b4f91917165676862681efe_9 >= $fe_n_items_9b12bdbb0b4f91917165676862681efe_9 )
{
    $fe_offset_9b12bdbb0b4f91917165676862681efe_9 = ( $fe_offset_9b12bdbb0b4f91917165676862681efe_9 < 0 ) ? 0 : $fe_n_items_9b12bdbb0b4f91917165676862681efe_9;
    if ( $fe_n_items_9b12bdbb0b4f91917165676862681efe_9 || $fe_offset_9b12bdbb0b4f91917165676862681efe_9 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_9b12bdbb0b4f91917165676862681efe_9'. Array count: $fe_n_items_9b12bdbb0b4f91917165676862681efe_9");   
}
}
if ( $fe_max_9b12bdbb0b4f91917165676862681efe_9 < 0 || $fe_offset_9b12bdbb0b4f91917165676862681efe_9 + $fe_max_9b12bdbb0b4f91917165676862681efe_9 > $fe_n_items_9b12bdbb0b4f91917165676862681efe_9 )
{
    if ( $fe_max_9b12bdbb0b4f91917165676862681efe_9 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_9b12bdbb0b4f91917165676862681efe_9");
    $fe_max_9b12bdbb0b4f91917165676862681efe_9 = $fe_n_items_9b12bdbb0b4f91917165676862681efe_9 - $fe_offset_9b12bdbb0b4f91917165676862681efe_9;
}
if ( $fe_reverse_9b12bdbb0b4f91917165676862681efe_9 )
{
    $fe_first_val_9b12bdbb0b4f91917165676862681efe_9 = $fe_n_items_9b12bdbb0b4f91917165676862681efe_9 - 1 - $fe_offset_9b12bdbb0b4f91917165676862681efe_9;
    $fe_last_val_9b12bdbb0b4f91917165676862681efe_9  = 0;
}
else
{
    $fe_first_val_9b12bdbb0b4f91917165676862681efe_9 = $fe_offset_9b12bdbb0b4f91917165676862681efe_9;
    $fe_last_val_9b12bdbb0b4f91917165676862681efe_9  = $fe_n_items_9b12bdbb0b4f91917165676862681efe_9 - 1;
}
// foreach
for ( $fe_i_9b12bdbb0b4f91917165676862681efe_9 = $fe_first_val_9b12bdbb0b4f91917165676862681efe_9; $fe_n_items_processed_9b12bdbb0b4f91917165676862681efe_9 < $fe_max_9b12bdbb0b4f91917165676862681efe_9 && ( $fe_reverse_9b12bdbb0b4f91917165676862681efe_9 ? $fe_i_9b12bdbb0b4f91917165676862681efe_9 >= $fe_last_val_9b12bdbb0b4f91917165676862681efe_9 : $fe_i_9b12bdbb0b4f91917165676862681efe_9 <= $fe_last_val_9b12bdbb0b4f91917165676862681efe_9 ); $fe_reverse_9b12bdbb0b4f91917165676862681efe_9 ? $fe_i_9b12bdbb0b4f91917165676862681efe_9-- : $fe_i_9b12bdbb0b4f91917165676862681efe_9++ )
{
$fe_key_9b12bdbb0b4f91917165676862681efe_9 = $fe_array_keys_9b12bdbb0b4f91917165676862681efe_9[$fe_i_9b12bdbb0b4f91917165676862681efe_9];
$fe_val_9b12bdbb0b4f91917165676862681efe_9 = $fe_array_9b12bdbb0b4f91917165676862681efe_9[$fe_key_9b12bdbb0b4f91917165676862681efe_9];
$vars[$rootNamespace]['item'] = $fe_val_9b12bdbb0b4f91917165676862681efe_9;
$vars[$rootNamespace]['index'] = $fe_key_9b12bdbb0b4f91917165676862681efe_9;
$text .= '        ';
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
$text .= '            <div class="news_details">
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

$text .= ' width="219" height="149" alt="';
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
                <h3><a href="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'links' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 0 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" title="';
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

$text .= '</a></h3>
                <p class="date">Published on: ';
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
$text .= $var;
unset( $var );

$text .= ' GMT</p>
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
                                                                      $length = 400;
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
            </div>
        ';
}
else
{
$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                <div class="news_summary">
            ';
}
unset( $if_cond );
// if ends

$text .= '                <div class="summary">
                    <h3><a href="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'links' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 0 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" title="';
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

$text .= '</a></h3>
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
                                                                      $length = 70;
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
                    <p class="more"><a href=';
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

$text .= '">more</a></p>
                </div>
           ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond3Data = array( 'value' => $if_cond3 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond3Data, false, false );
$if_cond3 = $if_cond3Data['value'];
unset( $if_cond3Data );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = $if_cond3 - 1.000000;
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' </div>';
}
unset( $if_cond );
// if ends

$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
$fe_n_items_processed_9b12bdbb0b4f91917165676862681efe_9++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_9b12bdbb0b4f91917165676862681efe_9 ) ) extract( array_pop( $fe_variable_stack_9b12bdbb0b4f91917165676862681efe_9 ) );

else
{

unset( $fe_array_9b12bdbb0b4f91917165676862681efe_9 );

unset( $fe_array_keys_9b12bdbb0b4f91917165676862681efe_9 );

unset( $fe_n_items_9b12bdbb0b4f91917165676862681efe_9 );

unset( $fe_n_items_processed_9b12bdbb0b4f91917165676862681efe_9 );

unset( $fe_i_9b12bdbb0b4f91917165676862681efe_9 );

unset( $fe_key_9b12bdbb0b4f91917165676862681efe_9 );

unset( $fe_val_9b12bdbb0b4f91917165676862681efe_9 );

unset( $fe_offset_9b12bdbb0b4f91917165676862681efe_9 );

unset( $fe_max_9b12bdbb0b4f91917165676862681efe_9 );

unset( $fe_reverse_9b12bdbb0b4f91917165676862681efe_9 );

unset( $fe_first_val_9b12bdbb0b4f91917165676862681efe_9 );

unset( $fe_last_val_9b12bdbb0b4f91917165676862681efe_9 );

unset( $fe_variable_stack_9b12bdbb0b4f91917165676862681efe_9 );

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

// undef $res
$tpl->unsetLocalVariable( 'res', $rootNamespace );

$text .= '</div>
<!-- STOP: including template: extension/dcdgroup/design/group/override/templates/block/dcd_headlines_feeds.tpl (extension/dcdgroup/design/group/override/templates/block/dcd_headlines_feeds.tpl) -->
';

$setArray = $oldSetArray_a51dce731312a7cd1745adfca146f6cb;
$tpl->Level--;
?>
