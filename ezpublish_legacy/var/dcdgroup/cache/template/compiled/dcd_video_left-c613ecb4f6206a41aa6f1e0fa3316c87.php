<?php
// URI:       extension/dcdgroup/design/group/override/templates/block/dcd_video_left.tpl
// Filename:  extension/dcdgroup/design/group/override/templates/block/dcd_video_left.tpl
// Timestamp: 1359052770 (Thu Jan 24 19:39:30 CET 2013)
$oldSetArray_d895106b69b0bde33b8dc24ac51f2c2a = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/dcdgroup/design/group/override/templates/block/dcd_video_left.tpl (extension/dcdgroup/design/group/override/templates/block/dcd_video_left.tpl) -->
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
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_video_left.tpl',
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
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_video_left.tpl',
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
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_video_left.tpl',
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
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_video_left.tpl',
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
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_video_left.tpl',
) );
    $tpl->setVariable( 'res', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'res', $var, $rootNamespace );
}

$text .= '
<div class="block block_left">

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

$text .= '<span class="view">
	        	<a href=';
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

$text .= '" target="_blank">
	        		View All
	        	</a>
        	</span>
        </h2>
        <ul class="none">
	        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_e143f5a32cb94d36a62cb8a0891bf6f5_7 ) ) $fe_variable_stack_e143f5a32cb94d36a62cb8a0891bf6f5_7 = array();
$fe_variable_stack_e143f5a32cb94d36a62cb8a0891bf6f5_7[] = compact( 'fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_7', 'fe_array_keys_e143f5a32cb94d36a62cb8a0891bf6f5_7', 'fe_n_items_e143f5a32cb94d36a62cb8a0891bf6f5_7', 'fe_n_items_processed_e143f5a32cb94d36a62cb8a0891bf6f5_7', 'fe_i_e143f5a32cb94d36a62cb8a0891bf6f5_7', 'fe_key_e143f5a32cb94d36a62cb8a0891bf6f5_7', 'fe_val_e143f5a32cb94d36a62cb8a0891bf6f5_7', 'fe_offset_e143f5a32cb94d36a62cb8a0891bf6f5_7', 'fe_max_e143f5a32cb94d36a62cb8a0891bf6f5_7', 'fe_reverse_e143f5a32cb94d36a62cb8a0891bf6f5_7', 'fe_first_val_e143f5a32cb94d36a62cb8a0891bf6f5_7', 'fe_last_val_e143f5a32cb94d36a62cb8a0891bf6f5_7' );
unset( $fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_7 );
unset( $fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_7 );
$fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'res', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['res'] : null;
$fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_71 = compiledFetchAttribute( $fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_7, 'items' );
unset( $fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_7 );
$fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_7 = $fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_71;
if (! isset( $fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_7 ) ) $fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_7 = NULL;
while ( is_object( $fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_7 ) and method_exists( $fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_7, 'templateValue' ) )
    $fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_7 = $fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_7->templateValue();

$fe_array_keys_e143f5a32cb94d36a62cb8a0891bf6f5_7 = is_array( $fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_7 ) ? array_keys( $fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_7 ) : array();
$fe_n_items_e143f5a32cb94d36a62cb8a0891bf6f5_7 = count( $fe_array_keys_e143f5a32cb94d36a62cb8a0891bf6f5_7 );
$fe_n_items_processed_e143f5a32cb94d36a62cb8a0891bf6f5_7 = 0;
$fe_offset_e143f5a32cb94d36a62cb8a0891bf6f5_7 = 0;
$fe_max_e143f5a32cb94d36a62cb8a0891bf6f5_7 = $fe_n_items_e143f5a32cb94d36a62cb8a0891bf6f5_7 - $fe_offset_e143f5a32cb94d36a62cb8a0891bf6f5_7;
$fe_reverse_e143f5a32cb94d36a62cb8a0891bf6f5_7 = false;
if ( $fe_offset_e143f5a32cb94d36a62cb8a0891bf6f5_7 < 0 || $fe_offset_e143f5a32cb94d36a62cb8a0891bf6f5_7 >= $fe_n_items_e143f5a32cb94d36a62cb8a0891bf6f5_7 )
{
    $fe_offset_e143f5a32cb94d36a62cb8a0891bf6f5_7 = ( $fe_offset_e143f5a32cb94d36a62cb8a0891bf6f5_7 < 0 ) ? 0 : $fe_n_items_e143f5a32cb94d36a62cb8a0891bf6f5_7;
    if ( $fe_n_items_e143f5a32cb94d36a62cb8a0891bf6f5_7 || $fe_offset_e143f5a32cb94d36a62cb8a0891bf6f5_7 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e143f5a32cb94d36a62cb8a0891bf6f5_7'. Array count: $fe_n_items_e143f5a32cb94d36a62cb8a0891bf6f5_7");   
}
}
if ( $fe_max_e143f5a32cb94d36a62cb8a0891bf6f5_7 < 0 || $fe_offset_e143f5a32cb94d36a62cb8a0891bf6f5_7 + $fe_max_e143f5a32cb94d36a62cb8a0891bf6f5_7 > $fe_n_items_e143f5a32cb94d36a62cb8a0891bf6f5_7 )
{
    if ( $fe_max_e143f5a32cb94d36a62cb8a0891bf6f5_7 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e143f5a32cb94d36a62cb8a0891bf6f5_7");
    $fe_max_e143f5a32cb94d36a62cb8a0891bf6f5_7 = $fe_n_items_e143f5a32cb94d36a62cb8a0891bf6f5_7 - $fe_offset_e143f5a32cb94d36a62cb8a0891bf6f5_7;
}
if ( $fe_reverse_e143f5a32cb94d36a62cb8a0891bf6f5_7 )
{
    $fe_first_val_e143f5a32cb94d36a62cb8a0891bf6f5_7 = $fe_n_items_e143f5a32cb94d36a62cb8a0891bf6f5_7 - 1 - $fe_offset_e143f5a32cb94d36a62cb8a0891bf6f5_7;
    $fe_last_val_e143f5a32cb94d36a62cb8a0891bf6f5_7  = 0;
}
else
{
    $fe_first_val_e143f5a32cb94d36a62cb8a0891bf6f5_7 = $fe_offset_e143f5a32cb94d36a62cb8a0891bf6f5_7;
    $fe_last_val_e143f5a32cb94d36a62cb8a0891bf6f5_7  = $fe_n_items_e143f5a32cb94d36a62cb8a0891bf6f5_7 - 1;
}
// foreach
for ( $fe_i_e143f5a32cb94d36a62cb8a0891bf6f5_7 = $fe_first_val_e143f5a32cb94d36a62cb8a0891bf6f5_7; $fe_n_items_processed_e143f5a32cb94d36a62cb8a0891bf6f5_7 < $fe_max_e143f5a32cb94d36a62cb8a0891bf6f5_7 && ( $fe_reverse_e143f5a32cb94d36a62cb8a0891bf6f5_7 ? $fe_i_e143f5a32cb94d36a62cb8a0891bf6f5_7 >= $fe_last_val_e143f5a32cb94d36a62cb8a0891bf6f5_7 : $fe_i_e143f5a32cb94d36a62cb8a0891bf6f5_7 <= $fe_last_val_e143f5a32cb94d36a62cb8a0891bf6f5_7 ); $fe_reverse_e143f5a32cb94d36a62cb8a0891bf6f5_7 ? $fe_i_e143f5a32cb94d36a62cb8a0891bf6f5_7-- : $fe_i_e143f5a32cb94d36a62cb8a0891bf6f5_7++ )
{
$fe_key_e143f5a32cb94d36a62cb8a0891bf6f5_7 = $fe_array_keys_e143f5a32cb94d36a62cb8a0891bf6f5_7[$fe_i_e143f5a32cb94d36a62cb8a0891bf6f5_7];
$fe_val_e143f5a32cb94d36a62cb8a0891bf6f5_7 = $fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_7[$fe_key_e143f5a32cb94d36a62cb8a0891bf6f5_7];
$vars[$rootNamespace]['item'] = $fe_val_e143f5a32cb94d36a62cb8a0891bf6f5_7;
$vars[$rootNamespace]['index'] = $fe_key_e143f5a32cb94d36a62cb8a0891bf6f5_7;
$text .= '	        ';
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
    0 => 20,
    1 => 9,
    2 => 790,
  ),
  1 => 
  array (
    0 => 24,
    1 => 79,
    2 => 1106,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_video_left.tpl',
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
    0 => 20,
    1 => 9,
    2 => 790,
  ),
  1 => 
  array (
    0 => 24,
    1 => 79,
    2 => 1106,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_video_left.tpl',
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
    0 => 20,
    1 => 9,
    2 => 790,
  ),
  1 => 
  array (
    0 => 24,
    1 => 79,
    2 => 1106,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_video_left.tpl',
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
    0 => 20,
    1 => 9,
    2 => 790,
  ),
  1 => 
  array (
    0 => 24,
    1 => 79,
    2 => 1106,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_video_left.tpl',
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
    0 => 20,
    1 => 9,
    2 => 790,
  ),
  1 => 
  array (
    0 => 24,
    1 => 79,
    2 => 1106,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_video_left.tpl',
) );
    $tpl->setVariable( 'full_date', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'full_date', $var, $rootNamespace );
}

$text .= '	
	        	
					<li>
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

$text .= ' width="147" height="93" alt="';
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
						<p>
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
						</p>
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

$text .= '</span> ';
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

$text .= ' ';
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
					</li>
				
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

$text .= '	        ';
$fe_n_items_processed_e143f5a32cb94d36a62cb8a0891bf6f5_7++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e143f5a32cb94d36a62cb8a0891bf6f5_7 ) ) extract( array_pop( $fe_variable_stack_e143f5a32cb94d36a62cb8a0891bf6f5_7 ) );

else
{

unset( $fe_array_e143f5a32cb94d36a62cb8a0891bf6f5_7 );

unset( $fe_array_keys_e143f5a32cb94d36a62cb8a0891bf6f5_7 );

unset( $fe_n_items_e143f5a32cb94d36a62cb8a0891bf6f5_7 );

unset( $fe_n_items_processed_e143f5a32cb94d36a62cb8a0891bf6f5_7 );

unset( $fe_i_e143f5a32cb94d36a62cb8a0891bf6f5_7 );

unset( $fe_key_e143f5a32cb94d36a62cb8a0891bf6f5_7 );

unset( $fe_val_e143f5a32cb94d36a62cb8a0891bf6f5_7 );

unset( $fe_offset_e143f5a32cb94d36a62cb8a0891bf6f5_7 );

unset( $fe_max_e143f5a32cb94d36a62cb8a0891bf6f5_7 );

unset( $fe_reverse_e143f5a32cb94d36a62cb8a0891bf6f5_7 );

unset( $fe_first_val_e143f5a32cb94d36a62cb8a0891bf6f5_7 );

unset( $fe_last_val_e143f5a32cb94d36a62cb8a0891bf6f5_7 );

unset( $fe_variable_stack_e143f5a32cb94d36a62cb8a0891bf6f5_7 );

}

// foreach ends
$text .= '        </ul>
    </div>
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

$text .= '</div>
<!-- STOP: including template: extension/dcdgroup/design/group/override/templates/block/dcd_video_left.tpl (extension/dcdgroup/design/group/override/templates/block/dcd_video_left.tpl) -->
';

$setArray = $oldSetArray_d895106b69b0bde33b8dc24ac51f2c2a;
$tpl->Level--;
?>
