<?php
// URI:       extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl
// Filename:  extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl
// Timestamp: 1359052770 (Thu Jan 24 19:39:30 CET 2013)
$oldSetArray_dc66cfbfd2c066436c78b2ecbbc8f1cb = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl (extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl) -->
';
// def $source_blog
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'custom_attributes' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'source_blog' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'source_blog', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'source_blog' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 878,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl',
) );
    $tpl->setVariable( 'source_blog', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'source_blog', $var, $rootNamespace );
}

// def $limit_blog
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'custom_attributes' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'limit_blog' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'limit_blog', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'limit_blog' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 878,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl',
) );
    $tpl->setVariable( 'limit_blog', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'limit_blog', $var, $rootNamespace );
}

// def $offset_blog
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'custom_attributes' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'offset_blog' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'offset_blog', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'offset_blog' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 878,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl',
) );
    $tpl->setVariable( 'offset_blog', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'offset_blog', $var, $rootNamespace );
}

// def $link_blog
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'custom_attributes' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'link_blog' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'link_blog', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'link_blog' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 878,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl',
) );
    $tpl->setVariable( 'link_blog', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'link_blog', $var, $rootNamespace );
}

// def $res_blog
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
        2 => 'source_blog',
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
        2 => 'limit_blog',
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
        2 => 'offset_blog',
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
        2 => 'link_blog',
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
if ( $tpl->hasVariable( 'res_blog', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'res_blog' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 878,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl',
) );
    $tpl->setVariable( 'res_blog', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'res_blog', $var, $rootNamespace );
}

// def $source_featured
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'custom_attributes' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'source_featured' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'source_featured', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'source_featured' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 878,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl',
) );
    $tpl->setVariable( 'source_featured', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'source_featured', $var, $rootNamespace );
}

// def $limit_featured
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'custom_attributes' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'limit_featured' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'limit_featured', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'limit_featured' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 878,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl',
) );
    $tpl->setVariable( 'limit_featured', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'limit_featured', $var, $rootNamespace );
}

// def $offset_featured
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'custom_attributes' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'offset_featured' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'offset_featured', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'offset_featured' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 878,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl',
) );
    $tpl->setVariable( 'offset_featured', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'offset_featured', $var, $rootNamespace );
}

// def $link_featured
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'custom_attributes' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'link_featured' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'link_featured', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'link_featured' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 878,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl',
) );
    $tpl->setVariable( 'link_featured', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'link_featured', $var, $rootNamespace );
}

// def $res_featured
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
        2 => 'source_featured',
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
        2 => 'limit_featured',
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
        2 => 'offset_featured',
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
        2 => 'link_featured',
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
if ( $tpl->hasVariable( 'res_featured', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'res_featured' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 878,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl',
) );
    $tpl->setVariable( 'res_featured', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'res_featured', $var, $rootNamespace );
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
    0 => 14,
    1 => 0,
    2 => 878,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl',
) );
    $tpl->setVariable( 'urldatacenter', 'http://www.datacenterdynamics.com/users/', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'urldatacenter', 'http://www.datacenterdynamics.com/users/', $rootNamespace );
}

$text .= '
<div class="block block_right">
        <div class="datacenter focus">

            <h2>Blogs
                <span class="view">
                    <a title=Blogs href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_blog', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_blog'] : null;
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

$text .= ' target="_blank">View All</a>
                </span></h2>
                <ul>
                    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_8aa1517245a4c52338426ad90253baed_14 ) ) $fe_variable_stack_8aa1517245a4c52338426ad90253baed_14 = array();
$fe_variable_stack_8aa1517245a4c52338426ad90253baed_14[] = compact( 'fe_array_8aa1517245a4c52338426ad90253baed_14', 'fe_array_keys_8aa1517245a4c52338426ad90253baed_14', 'fe_n_items_8aa1517245a4c52338426ad90253baed_14', 'fe_n_items_processed_8aa1517245a4c52338426ad90253baed_14', 'fe_i_8aa1517245a4c52338426ad90253baed_14', 'fe_key_8aa1517245a4c52338426ad90253baed_14', 'fe_val_8aa1517245a4c52338426ad90253baed_14', 'fe_offset_8aa1517245a4c52338426ad90253baed_14', 'fe_max_8aa1517245a4c52338426ad90253baed_14', 'fe_reverse_8aa1517245a4c52338426ad90253baed_14', 'fe_first_val_8aa1517245a4c52338426ad90253baed_14', 'fe_last_val_8aa1517245a4c52338426ad90253baed_14' );
unset( $fe_array_8aa1517245a4c52338426ad90253baed_14 );
unset( $fe_array_8aa1517245a4c52338426ad90253baed_14 );
$fe_array_8aa1517245a4c52338426ad90253baed_14 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'res_blog', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['res_blog'] : null;
$fe_array_8aa1517245a4c52338426ad90253baed_141 = compiledFetchAttribute( $fe_array_8aa1517245a4c52338426ad90253baed_14, 'items' );
unset( $fe_array_8aa1517245a4c52338426ad90253baed_14 );
$fe_array_8aa1517245a4c52338426ad90253baed_14 = $fe_array_8aa1517245a4c52338426ad90253baed_141;
if (! isset( $fe_array_8aa1517245a4c52338426ad90253baed_14 ) ) $fe_array_8aa1517245a4c52338426ad90253baed_14 = NULL;
while ( is_object( $fe_array_8aa1517245a4c52338426ad90253baed_14 ) and method_exists( $fe_array_8aa1517245a4c52338426ad90253baed_14, 'templateValue' ) )
    $fe_array_8aa1517245a4c52338426ad90253baed_14 = $fe_array_8aa1517245a4c52338426ad90253baed_14->templateValue();

$fe_array_keys_8aa1517245a4c52338426ad90253baed_14 = is_array( $fe_array_8aa1517245a4c52338426ad90253baed_14 ) ? array_keys( $fe_array_8aa1517245a4c52338426ad90253baed_14 ) : array();
$fe_n_items_8aa1517245a4c52338426ad90253baed_14 = count( $fe_array_keys_8aa1517245a4c52338426ad90253baed_14 );
$fe_n_items_processed_8aa1517245a4c52338426ad90253baed_14 = 0;
$fe_offset_8aa1517245a4c52338426ad90253baed_14 = 0;
$fe_max_8aa1517245a4c52338426ad90253baed_14 = $fe_n_items_8aa1517245a4c52338426ad90253baed_14 - $fe_offset_8aa1517245a4c52338426ad90253baed_14;
$fe_reverse_8aa1517245a4c52338426ad90253baed_14 = false;
if ( $fe_offset_8aa1517245a4c52338426ad90253baed_14 < 0 || $fe_offset_8aa1517245a4c52338426ad90253baed_14 >= $fe_n_items_8aa1517245a4c52338426ad90253baed_14 )
{
    $fe_offset_8aa1517245a4c52338426ad90253baed_14 = ( $fe_offset_8aa1517245a4c52338426ad90253baed_14 < 0 ) ? 0 : $fe_n_items_8aa1517245a4c52338426ad90253baed_14;
    if ( $fe_n_items_8aa1517245a4c52338426ad90253baed_14 || $fe_offset_8aa1517245a4c52338426ad90253baed_14 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_8aa1517245a4c52338426ad90253baed_14'. Array count: $fe_n_items_8aa1517245a4c52338426ad90253baed_14");   
}
}
if ( $fe_max_8aa1517245a4c52338426ad90253baed_14 < 0 || $fe_offset_8aa1517245a4c52338426ad90253baed_14 + $fe_max_8aa1517245a4c52338426ad90253baed_14 > $fe_n_items_8aa1517245a4c52338426ad90253baed_14 )
{
    if ( $fe_max_8aa1517245a4c52338426ad90253baed_14 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_8aa1517245a4c52338426ad90253baed_14");
    $fe_max_8aa1517245a4c52338426ad90253baed_14 = $fe_n_items_8aa1517245a4c52338426ad90253baed_14 - $fe_offset_8aa1517245a4c52338426ad90253baed_14;
}
if ( $fe_reverse_8aa1517245a4c52338426ad90253baed_14 )
{
    $fe_first_val_8aa1517245a4c52338426ad90253baed_14 = $fe_n_items_8aa1517245a4c52338426ad90253baed_14 - 1 - $fe_offset_8aa1517245a4c52338426ad90253baed_14;
    $fe_last_val_8aa1517245a4c52338426ad90253baed_14  = 0;
}
else
{
    $fe_first_val_8aa1517245a4c52338426ad90253baed_14 = $fe_offset_8aa1517245a4c52338426ad90253baed_14;
    $fe_last_val_8aa1517245a4c52338426ad90253baed_14  = $fe_n_items_8aa1517245a4c52338426ad90253baed_14 - 1;
}
// foreach
for ( $fe_i_8aa1517245a4c52338426ad90253baed_14 = $fe_first_val_8aa1517245a4c52338426ad90253baed_14; $fe_n_items_processed_8aa1517245a4c52338426ad90253baed_14 < $fe_max_8aa1517245a4c52338426ad90253baed_14 && ( $fe_reverse_8aa1517245a4c52338426ad90253baed_14 ? $fe_i_8aa1517245a4c52338426ad90253baed_14 >= $fe_last_val_8aa1517245a4c52338426ad90253baed_14 : $fe_i_8aa1517245a4c52338426ad90253baed_14 <= $fe_last_val_8aa1517245a4c52338426ad90253baed_14 ); $fe_reverse_8aa1517245a4c52338426ad90253baed_14 ? $fe_i_8aa1517245a4c52338426ad90253baed_14-- : $fe_i_8aa1517245a4c52338426ad90253baed_14++ )
{
$fe_key_8aa1517245a4c52338426ad90253baed_14 = $fe_array_keys_8aa1517245a4c52338426ad90253baed_14[$fe_i_8aa1517245a4c52338426ad90253baed_14];
$fe_val_8aa1517245a4c52338426ad90253baed_14 = $fe_array_8aa1517245a4c52338426ad90253baed_14[$fe_key_8aa1517245a4c52338426ad90253baed_14];
$vars[$rootNamespace]['item'] = $fe_val_8aa1517245a4c52338426ad90253baed_14;
$vars[$rootNamespace]['index'] = $fe_key_8aa1517245a4c52338426ad90253baed_14;
$text .= '                        ';
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
    0 => 25,
    1 => 24,
    2 => 1331,
  ),
  1 => 
  array (
    0 => 26,
    1 => 130,
    2 => 1509,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl',
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
    0 => 25,
    1 => 24,
    2 => 1331,
  ),
  1 => 
  array (
    0 => 26,
    1 => 130,
    2 => 1509,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl',
) );
    $tpl->setVariable( 'url_creator', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'url_creator', $var, $rootNamespace );
}

$text .= '                        <li>
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
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var3 = compiledFetchAttribute( $var2, 'title' );
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
$strlenFunc = 'mb_strlen'; $substrFunc = 'mb_substr';
$length = 80; $seq = "..."; $trimType = "right";
                                                                  if ( 3 > 1 )
                                                                  {
                                                                      $length = 25;
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
                        ';
// undef $creator_explode
$tpl->unsetLocalVariable( 'creator_explode', $rootNamespace );

// undef $url_creator
$tpl->unsetLocalVariable( 'url_creator', $rootNamespace );

$text .= '                    ';
$fe_n_items_processed_8aa1517245a4c52338426ad90253baed_14++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_8aa1517245a4c52338426ad90253baed_14 ) ) extract( array_pop( $fe_variable_stack_8aa1517245a4c52338426ad90253baed_14 ) );

else
{

unset( $fe_array_8aa1517245a4c52338426ad90253baed_14 );

unset( $fe_array_keys_8aa1517245a4c52338426ad90253baed_14 );

unset( $fe_n_items_8aa1517245a4c52338426ad90253baed_14 );

unset( $fe_n_items_processed_8aa1517245a4c52338426ad90253baed_14 );

unset( $fe_i_8aa1517245a4c52338426ad90253baed_14 );

unset( $fe_key_8aa1517245a4c52338426ad90253baed_14 );

unset( $fe_val_8aa1517245a4c52338426ad90253baed_14 );

unset( $fe_offset_8aa1517245a4c52338426ad90253baed_14 );

unset( $fe_max_8aa1517245a4c52338426ad90253baed_14 );

unset( $fe_reverse_8aa1517245a4c52338426ad90253baed_14 );

unset( $fe_first_val_8aa1517245a4c52338426ad90253baed_14 );

unset( $fe_last_val_8aa1517245a4c52338426ad90253baed_14 );

unset( $fe_variable_stack_8aa1517245a4c52338426ad90253baed_14 );

}

// foreach ends
$text .= '                </ul>

            <h2>Features <span class="view"><a title=Features href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_featured', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_featured'] : null;
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
                <ul>
                    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_8aa1517245a4c52338426ad90253baed_15 ) ) $fe_variable_stack_8aa1517245a4c52338426ad90253baed_15 = array();
$fe_variable_stack_8aa1517245a4c52338426ad90253baed_15[] = compact( 'fe_array_8aa1517245a4c52338426ad90253baed_15', 'fe_array_keys_8aa1517245a4c52338426ad90253baed_15', 'fe_n_items_8aa1517245a4c52338426ad90253baed_15', 'fe_n_items_processed_8aa1517245a4c52338426ad90253baed_15', 'fe_i_8aa1517245a4c52338426ad90253baed_15', 'fe_key_8aa1517245a4c52338426ad90253baed_15', 'fe_val_8aa1517245a4c52338426ad90253baed_15', 'fe_offset_8aa1517245a4c52338426ad90253baed_15', 'fe_max_8aa1517245a4c52338426ad90253baed_15', 'fe_reverse_8aa1517245a4c52338426ad90253baed_15', 'fe_first_val_8aa1517245a4c52338426ad90253baed_15', 'fe_last_val_8aa1517245a4c52338426ad90253baed_15' );
unset( $fe_array_8aa1517245a4c52338426ad90253baed_15 );
unset( $fe_array_8aa1517245a4c52338426ad90253baed_15 );
$fe_array_8aa1517245a4c52338426ad90253baed_15 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'res_featured', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['res_featured'] : null;
$fe_array_8aa1517245a4c52338426ad90253baed_151 = compiledFetchAttribute( $fe_array_8aa1517245a4c52338426ad90253baed_15, 'items' );
unset( $fe_array_8aa1517245a4c52338426ad90253baed_15 );
$fe_array_8aa1517245a4c52338426ad90253baed_15 = $fe_array_8aa1517245a4c52338426ad90253baed_151;
if (! isset( $fe_array_8aa1517245a4c52338426ad90253baed_15 ) ) $fe_array_8aa1517245a4c52338426ad90253baed_15 = NULL;
while ( is_object( $fe_array_8aa1517245a4c52338426ad90253baed_15 ) and method_exists( $fe_array_8aa1517245a4c52338426ad90253baed_15, 'templateValue' ) )
    $fe_array_8aa1517245a4c52338426ad90253baed_15 = $fe_array_8aa1517245a4c52338426ad90253baed_15->templateValue();

$fe_array_keys_8aa1517245a4c52338426ad90253baed_15 = is_array( $fe_array_8aa1517245a4c52338426ad90253baed_15 ) ? array_keys( $fe_array_8aa1517245a4c52338426ad90253baed_15 ) : array();
$fe_n_items_8aa1517245a4c52338426ad90253baed_15 = count( $fe_array_keys_8aa1517245a4c52338426ad90253baed_15 );
$fe_n_items_processed_8aa1517245a4c52338426ad90253baed_15 = 0;
$fe_offset_8aa1517245a4c52338426ad90253baed_15 = 0;
$fe_max_8aa1517245a4c52338426ad90253baed_15 = $fe_n_items_8aa1517245a4c52338426ad90253baed_15 - $fe_offset_8aa1517245a4c52338426ad90253baed_15;
$fe_reverse_8aa1517245a4c52338426ad90253baed_15 = false;
if ( $fe_offset_8aa1517245a4c52338426ad90253baed_15 < 0 || $fe_offset_8aa1517245a4c52338426ad90253baed_15 >= $fe_n_items_8aa1517245a4c52338426ad90253baed_15 )
{
    $fe_offset_8aa1517245a4c52338426ad90253baed_15 = ( $fe_offset_8aa1517245a4c52338426ad90253baed_15 < 0 ) ? 0 : $fe_n_items_8aa1517245a4c52338426ad90253baed_15;
    if ( $fe_n_items_8aa1517245a4c52338426ad90253baed_15 || $fe_offset_8aa1517245a4c52338426ad90253baed_15 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_8aa1517245a4c52338426ad90253baed_15'. Array count: $fe_n_items_8aa1517245a4c52338426ad90253baed_15");   
}
}
if ( $fe_max_8aa1517245a4c52338426ad90253baed_15 < 0 || $fe_offset_8aa1517245a4c52338426ad90253baed_15 + $fe_max_8aa1517245a4c52338426ad90253baed_15 > $fe_n_items_8aa1517245a4c52338426ad90253baed_15 )
{
    if ( $fe_max_8aa1517245a4c52338426ad90253baed_15 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_8aa1517245a4c52338426ad90253baed_15");
    $fe_max_8aa1517245a4c52338426ad90253baed_15 = $fe_n_items_8aa1517245a4c52338426ad90253baed_15 - $fe_offset_8aa1517245a4c52338426ad90253baed_15;
}
if ( $fe_reverse_8aa1517245a4c52338426ad90253baed_15 )
{
    $fe_first_val_8aa1517245a4c52338426ad90253baed_15 = $fe_n_items_8aa1517245a4c52338426ad90253baed_15 - 1 - $fe_offset_8aa1517245a4c52338426ad90253baed_15;
    $fe_last_val_8aa1517245a4c52338426ad90253baed_15  = 0;
}
else
{
    $fe_first_val_8aa1517245a4c52338426ad90253baed_15 = $fe_offset_8aa1517245a4c52338426ad90253baed_15;
    $fe_last_val_8aa1517245a4c52338426ad90253baed_15  = $fe_n_items_8aa1517245a4c52338426ad90253baed_15 - 1;
}
// foreach
for ( $fe_i_8aa1517245a4c52338426ad90253baed_15 = $fe_first_val_8aa1517245a4c52338426ad90253baed_15; $fe_n_items_processed_8aa1517245a4c52338426ad90253baed_15 < $fe_max_8aa1517245a4c52338426ad90253baed_15 && ( $fe_reverse_8aa1517245a4c52338426ad90253baed_15 ? $fe_i_8aa1517245a4c52338426ad90253baed_15 >= $fe_last_val_8aa1517245a4c52338426ad90253baed_15 : $fe_i_8aa1517245a4c52338426ad90253baed_15 <= $fe_last_val_8aa1517245a4c52338426ad90253baed_15 ); $fe_reverse_8aa1517245a4c52338426ad90253baed_15 ? $fe_i_8aa1517245a4c52338426ad90253baed_15-- : $fe_i_8aa1517245a4c52338426ad90253baed_15++ )
{
$fe_key_8aa1517245a4c52338426ad90253baed_15 = $fe_array_keys_8aa1517245a4c52338426ad90253baed_15[$fe_i_8aa1517245a4c52338426ad90253baed_15];
$fe_val_8aa1517245a4c52338426ad90253baed_15 = $fe_array_8aa1517245a4c52338426ad90253baed_15[$fe_key_8aa1517245a4c52338426ad90253baed_15];
$vars[$rootNamespace]['item'] = $fe_val_8aa1517245a4c52338426ad90253baed_15;
$vars[$rootNamespace]['index'] = $fe_key_8aa1517245a4c52338426ad90253baed_15;
$text .= '                         ';
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
    0 => 42,
    1 => 25,
    2 => 2624,
  ),
  1 => 
  array (
    0 => 43,
    1 => 130,
    2 => 2802,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl',
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
    0 => 42,
    1 => 25,
    2 => 2624,
  ),
  1 => 
  array (
    0 => 43,
    1 => 130,
    2 => 2802,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl',
) );
    $tpl->setVariable( 'url_creator', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'url_creator', $var, $rootNamespace );
}

$text .= '                        <li> 
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
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var3 = compiledFetchAttribute( $var2, 'title' );
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
$strlenFunc = 'mb_strlen'; $substrFunc = 'mb_substr';
$length = 80; $seq = "..."; $trimType = "right";
                                                                  if ( 3 > 1 )
                                                                  {
                                                                      $length = 25;
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
                        ';
// undef $creator_explode
$tpl->unsetLocalVariable( 'creator_explode', $rootNamespace );

// undef $url_creator
$tpl->unsetLocalVariable( 'url_creator', $rootNamespace );

$text .= '                    ';
$fe_n_items_processed_8aa1517245a4c52338426ad90253baed_15++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_8aa1517245a4c52338426ad90253baed_15 ) ) extract( array_pop( $fe_variable_stack_8aa1517245a4c52338426ad90253baed_15 ) );

else
{

unset( $fe_array_8aa1517245a4c52338426ad90253baed_15 );

unset( $fe_array_keys_8aa1517245a4c52338426ad90253baed_15 );

unset( $fe_n_items_8aa1517245a4c52338426ad90253baed_15 );

unset( $fe_n_items_processed_8aa1517245a4c52338426ad90253baed_15 );

unset( $fe_i_8aa1517245a4c52338426ad90253baed_15 );

unset( $fe_key_8aa1517245a4c52338426ad90253baed_15 );

unset( $fe_val_8aa1517245a4c52338426ad90253baed_15 );

unset( $fe_offset_8aa1517245a4c52338426ad90253baed_15 );

unset( $fe_max_8aa1517245a4c52338426ad90253baed_15 );

unset( $fe_reverse_8aa1517245a4c52338426ad90253baed_15 );

unset( $fe_first_val_8aa1517245a4c52338426ad90253baed_15 );

unset( $fe_last_val_8aa1517245a4c52338426ad90253baed_15 );

unset( $fe_variable_stack_8aa1517245a4c52338426ad90253baed_15 );

}

// foreach ends
$text .= '                </ul>
            ';
// undef $source_blog
$tpl->unsetLocalVariable( 'source_blog', $rootNamespace );

// undef $limit_blog
$tpl->unsetLocalVariable( 'limit_blog', $rootNamespace );

// undef $offset_blog
$tpl->unsetLocalVariable( 'offset_blog', $rootNamespace );

// undef $res_blog
$tpl->unsetLocalVariable( 'res_blog', $rootNamespace );

// undef $source_featured
$tpl->unsetLocalVariable( 'source_featured', $rootNamespace );

// undef $limit_featured
$tpl->unsetLocalVariable( 'limit_featured', $rootNamespace );

// undef $offset_featured
$tpl->unsetLocalVariable( 'offset_featured', $rootNamespace );

// undef $res_featured
$tpl->unsetLocalVariable( 'res_featured', $rootNamespace );

// undef $link_blog
$tpl->unsetLocalVariable( 'link_blog', $rootNamespace );

// undef $link_featured
$tpl->unsetLocalVariable( 'link_featured', $rootNamespace );

// undef $urldatacenter
$tpl->unsetLocalVariable( 'urldatacenter', $rootNamespace );

$text .= '        </div>
</div>
<!-- STOP: including template: extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl (extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl) -->
';

$setArray = $oldSetArray_dc66cfbfd2c066436c78b2ecbbc8f1cb;
$tpl->Level--;
?>
