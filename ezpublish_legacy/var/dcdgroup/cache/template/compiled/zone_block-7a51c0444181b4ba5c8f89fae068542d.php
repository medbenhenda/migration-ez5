<?php
// URI:       extension/ezflow/design/standard/templates/parts/zone_block.tpl
// Filename:  extension/ezflow/design/standard/templates/parts/zone_block.tpl
// Timestamp: 1360064235 (Tue Feb 5 12:37:15 CET 2013)
$oldSetArray_785252403fab2719fb967f572a48885d = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/ezflow/design/standard/templates/parts/zone_block.tpl (extension/ezflow/design/standard/templates/parts/zone_block.tpl) -->
';
$oldRestoreIncludeArray_501766eb955ae1902a5912e981fdb404 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/zone_block_top-06271b2c357615fac98e661a28437775.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezflow/design/standard/templates/parts/zone_block_top.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/zone_block_top-06271b2c357615fac98e661a28437775.php' );
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
$tpl->processURI( 'extension/ezflow/design/standard/templates/parts/zone_block_top.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_501766eb955ae1902a5912e981fdb404;

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'valid_nodes' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'custom_attributes' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = isset( $if_cond4 );unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'custom_attributes' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond4Data = array( 'value' => $if_cond4 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond4Data, false, false );
$if_cond4 = $if_cond4Data['value'];
unset( $if_cond4Data );
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if ( !$if_cond3 )
    $if_cond2 = false;
else if ( !$if_cond4 )
    $if_cond2 = false;
else
    $if_cond2 = $if_cond4;
unset( $if_cond3, $if_cond4 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond5 );
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond5Data = array( 'value' => $if_cond5 );
$tpl->processOperator( 'ezini',
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
        2 => 'block',
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
          1 => 'type',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'ManualAddingOfItems',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'block.ini',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_cond5Data, false, false );
$if_cond5 = $if_cond5Data['value'];
unset( $if_cond5Data );
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond4 = ( ( $if_cond5 ) == ( 'disabled' ) );
unset( $if_cond5 );
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
unset( $if_cond5 );
unset( $if_cond6 );
if (! isset( $if_cond6 ) ) $if_cond6 = NULL;
while ( is_object( $if_cond6 ) and method_exists( $if_cond6, 'templateValue' ) )
    $if_cond6 = $if_cond6->templateValue();
$if_cond6Data = array( 'value' => $if_cond6 );
$tpl->processOperator( 'ezini_hasvariable',
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
        2 => 'block',
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
          1 => 'type',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'FetchClass',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'block.ini',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_cond6Data, false, false );
$if_cond6 = $if_cond6Data['value'];
unset( $if_cond6Data );
if (! isset( $if_cond6 ) ) $if_cond6 = NULL;
while ( is_object( $if_cond6 ) and method_exists( $if_cond6, 'templateValue' ) )
    $if_cond6 = $if_cond6->templateValue();
$if_cond5 = !( $if_cond6 );
unset( $if_cond6 );
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
if ( !$if_cond4 )
    $if_cond3 = false;
else if ( !$if_cond5 )
    $if_cond3 = false;
else
    $if_cond3 = $if_cond5;
unset( $if_cond4, $if_cond5 );
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
$text .= '    <div id="address-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'zone_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentAttributeBlockView";
else
    $namespace .= ':ContentAttributeBlockView';
$vars[$namespace]['block'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( 'design' );
    $dKeys = $resH->keys();
}
if ( !isset( $dKeysStack ) )
{
    $dKeysStack = array();
}
$dKeysStack[] = $dKeys;
unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentAttributeBlockView";
else
    $namespace .= ':ContentAttributeBlockView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'block', $vars[$namespace] ) ) ? $vars[$namespace]['block'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'type' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["type"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentAttributeBlockView";
else
    $namespace .= ':ContentAttributeBlockView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'block', $vars[$namespace] ) ) ? $vars[$namespace]['block'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'view' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["view"] = $dKey;
unset( $dKey );

unset( $attributeAccess );
unset( $attributeAccess );
$attributeAccess = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$attributeAccess1 = compiledFetchAttribute( $attributeAccess, 'view_template' );
unset( $attributeAccess );
$attributeAccess = $attributeAccess1;
if (! isset( $attributeAccess ) ) $attributeAccess = NULL;
while ( is_object( $attributeAccess ) and method_exists( $attributeAccess, 'templateValue' ) )
    $attributeAccess = $attributeAccess->templateValue();

if ( $attributeAccess == 'view' )
{

if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "VideoLeft", $dKeys["type"] ) : $dKeys["type"] == "VideoLeft" ) and
     isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "video_left", $dKeys["view"] ) : $dKeys["view"] == "video_left" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/dcd_video_left-c613ecb4f6206a41aa6f1e0fa3316c87.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/dcdgroup/design/group/override/templates/block/dcd_video_left.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/dcd_video_left-c613ecb4f6206a41aa6f1e0fa3316c87.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/dcdgroup/design/group/override/templates/block/dcd_video_left.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "BannerLeft", $dKeys["type"] ) : $dKeys["type"] == "BannerLeft" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "banner_left", $dKeys["view"] ) : $dKeys["view"] == "banner_left" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/dcd_banner_left-4ac32d7b0d575ae973b730bdde9443d3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/dcdgroup/design/group/override/templates/block/dcd_banner_left.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/dcd_banner_left-4ac32d7b0d575ae973b730bdde9443d3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/dcdgroup/design/group/override/templates/block/dcd_banner_left.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "WhitepapersFeedReader", $dKeys["type"] ) : $dKeys["type"] == "WhitepapersFeedReader" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "whitepapers_feed_reader", $dKeys["view"] ) : $dKeys["view"] == "whitepapers_feed_reader" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/dcd_whitepapers_feeds-35b9e161bd9e276f7e0901a35fe2f7c2.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/dcd_whitepapers_feeds-35b9e161bd9e276f7e0901a35fe2f7c2.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/dcdgroup/design/group/override/templates/block/dcd_whitepapers_feeds.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "BlogsAndFeaturedRightFeedReader", $dKeys["type"] ) : $dKeys["type"] == "BlogsAndFeaturedRightFeedReader" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "blogs_featured_right_feed_reader", $dKeys["view"] ) : $dKeys["view"] == "blogs_featured_right_feed_reader" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/dcd_blogs_featured_right_feeds-c59753c100b1b3175298ef1b5c6a8911.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/dcd_blogs_featured_right_feeds-c59753c100b1b3175298ef1b5c6a8911.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/dcdgroup/design/group/override/templates/block/dcd_blogs_featured_right_feeds.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "BannerRight", $dKeys["type"] ) : $dKeys["type"] == "BannerRight" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "banner_right", $dKeys["view"] ) : $dKeys["view"] == "banner_right" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/dcd_banner_right-6fb1451db6fde253a0b90b771c83b93f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/dcdgroup/design/group/override/templates/block/dcd_banner_right.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/dcd_banner_right-6fb1451db6fde253a0b90b771c83b93f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/dcdgroup/design/group/override/templates/block/dcd_banner_right.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "BannerMainBottom", $dKeys["type"] ) : $dKeys["type"] == "BannerMainBottom" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "banner_main_bottom", $dKeys["view"] ) : $dKeys["view"] == "banner_main_bottom" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/dcd_banner_main_bottom-06fdc3b9a29db818eb3d7ff425554b61.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/dcdgroup/design/group/override/templates/block/dcd_banner_main_bottom.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/dcd_banner_main_bottom-06fdc3b9a29db818eb3d7ff425554b61.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/dcdgroup/design/group/override/templates/block/dcd_banner_main_bottom.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "FeaturedVideoFeedReader", $dKeys["type"] ) : $dKeys["type"] == "FeaturedVideoFeedReader" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "featured_video_feed_reader", $dKeys["view"] ) : $dKeys["view"] == "featured_video_feed_reader" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/dcd_featured_video_feeds-ee393fd955d5bae66dddf2a6cf7e2217.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/dcdgroup/design/group/override/templates/block/dcd_featured_video_feeds.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/dcd_featured_video_feeds-ee393fd955d5bae66dddf2a6cf7e2217.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/dcdgroup/design/group/override/templates/block/dcd_featured_video_feeds.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "FeaturesFeedReader", $dKeys["type"] ) : $dKeys["type"] == "FeaturesFeedReader" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "features_feed_reader", $dKeys["view"] ) : $dKeys["view"] == "features_feed_reader" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/dcd_features_feeds-b0e17a84a297c809539655e9db6a49f7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/dcdgroup/design/group/override/templates/block/dcd_features_feeds.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/dcd_features_feeds-b0e17a84a297c809539655e9db6a49f7.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/dcdgroup/design/group/override/templates/block/dcd_features_feeds.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "NewsFeedReader", $dKeys["type"] ) : $dKeys["type"] == "NewsFeedReader" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "news_feed_reader", $dKeys["view"] ) : $dKeys["view"] == "news_feed_reader" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/dcd_news_feeds-11b0ad12c98f01b58ee3d587a911c118.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/dcdgroup/design/group/override/templates/block/dcd_news_feeds.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/dcd_news_feeds-11b0ad12c98f01b58ee3d587a911c118.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/dcdgroup/design/group/override/templates/block/dcd_news_feeds.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "HeadlinesFeedReader", $dKeys["type"] ) : $dKeys["type"] == "HeadlinesFeedReader" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "headlines_feed_reader", $dKeys["view"] ) : $dKeys["view"] == "headlines_feed_reader" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/dcd_headlines_feeds-5bd7c6b8da6c2484e1ef10a0f182f607.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/dcdgroup/design/group/override/templates/block/dcd_headlines_feeds.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/dcd_headlines_feeds-5bd7c6b8da6c2484e1ef10a0f182f607.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/dcdgroup/design/group/override/templates/block/dcd_headlines_feeds.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "Archives", $dKeys["type"] ) : $dKeys["type"] == "Archives" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "archives", $dKeys["view"] ) : $dKeys["view"] == "archives" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/dcd_archives-ed827f183aff475f80da8c1c01488e33.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/dcdgroup/design/group/override/templates/block/dcd_archives.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/dcd_archives-ed827f183aff475f80da8c1c01488e33.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/dcdgroup/design/group/override/templates/block/dcd_archives.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "DcdZones", $dKeys["type"] ) : $dKeys["type"] == "DcdZones" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "dcd_zones", $dKeys["view"] ) : $dKeys["view"] == "dcd_zones" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/dcd_zones-44c4ac7d2e4c615f5ec462fbf03ed94d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/dcdgroup/design/group/override/templates/block/dcd_zones.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/dcd_zones-44c4ac7d2e4c615f5ec462fbf03ed94d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/dcdgroup/design/group/override/templates/block/dcd_zones.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "MainTop", $dKeys["type"] ) : $dKeys["type"] == "MainTop" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "maintop", $dKeys["view"] ) : $dKeys["view"] == "maintop" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/dcd_main_top-90fd67ee2aa6588e8e86dfbe0677bce7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/dcdgroup/design/group/override/templates/block/dcd_main_top.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/dcd_main_top-90fd67ee2aa6588e8e86dfbe0677bce7.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/dcdgroup/design/group/override/templates/block/dcd_main_top.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "Regions", $dKeys["type"] ) : $dKeys["type"] == "Regions" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "regions", $dKeys["view"] ) : $dKeys["view"] == "regions" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/dcd_regions-fde2d5037425cac49be9a420bacb286b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/dcdgroup/design/group/override/templates/block/dcd_regions.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/dcd_regions-fde2d5037425cac49be9a420bacb286b.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/dcdgroup/design/group/override/templates/block/dcd_regions.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "Banner", $dKeys["type"] ) : $dKeys["type"] == "Banner" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/banner_internal-222b4cb07d4914e7fe18971299217c7f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/banner_internal.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/banner_internal-222b4cb07d4914e7fe18971299217c7f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/banner_internal.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "Banner", $dKeys["type"] ) : $dKeys["type"] == "Banner" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "external", $dKeys["view"] ) : $dKeys["view"] == "external" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/banner_external-3bf6ad7f7fe61bf05254a492fb705c83.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/banner_external.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/banner_external-3bf6ad7f7fe61bf05254a492fb705c83.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/banner_external.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "Banner", $dKeys["type"] ) : $dKeys["type"] == "Banner" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "code", $dKeys["view"] ) : $dKeys["view"] == "code" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/banner_code-26a2eb16aa1911e3716114d1e702e9ce.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/banner_code.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/banner_code-26a2eb16aa1911e3716114d1e702e9ce.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/banner_code.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "Campaign", $dKeys["type"] ) : $dKeys["type"] == "Campaign" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/campaign-bbceed3f7474088fee6d8df64e1df3f5.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/campaign.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/campaign-bbceed3f7474088fee6d8df64e1df3f5.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/campaign.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "MainStory", $dKeys["type"] ) : $dKeys["type"] == "MainStory" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "highligted", $dKeys["view"] ) : $dKeys["view"] == "highligted" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/main_story_highlighted-64820e9702fa0e4ec9f26e8a8334fa45.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/main_story_highlighted.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/main_story_highlighted-64820e9702fa0e4ec9f26e8a8334fa45.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/main_story_highlighted.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "MainStory", $dKeys["type"] ) : $dKeys["type"] == "MainStory" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/main_story_background_image-7a20c0aeb3076989af98beedd693b720.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/main_story_background_image.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/main_story_background_image-7a20c0aeb3076989af98beedd693b720.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/main_story_background_image.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "ContentGrid", $dKeys["type"] ) : $dKeys["type"] == "ContentGrid" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/content_grid_1col_2rows-d42924aaddc8b0994f8203645eebb4c6.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_1col_2rows.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/content_grid_1col_2rows-d42924aaddc8b0994f8203645eebb4c6.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_1col_2rows.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "ContentGrid", $dKeys["type"] ) : $dKeys["type"] == "ContentGrid" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "1_column_4_rows", $dKeys["view"] ) : $dKeys["view"] == "1_column_4_rows" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/content_grid_1col_4rows-69831cb7f7e7bf3f4e85f952a56bfff8.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_1col_4rows.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/content_grid_1col_4rows-69831cb7f7e7bf3f4e85f952a56bfff8.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_1col_4rows.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "ContentGrid", $dKeys["type"] ) : $dKeys["type"] == "ContentGrid" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "2_columns_2_rows", $dKeys["view"] ) : $dKeys["view"] == "2_columns_2_rows" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/content_grid_2cols_2rows-29a660245088b17d8a2fd9d660cb74da.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_2cols_2rows.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/content_grid_2cols_2rows-29a660245088b17d8a2fd9d660cb74da.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_2cols_2rows.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "ContentGrid", $dKeys["type"] ) : $dKeys["type"] == "ContentGrid" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "3_columns_1_row", $dKeys["view"] ) : $dKeys["view"] == "3_columns_1_row" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/content_grid_3cols_1row-ffd322de048220cc61a7e137e4b1358d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_3cols_1row.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/content_grid_3cols_1row-ffd322de048220cc61a7e137e4b1358d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_3cols_1row.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "ContentGrid", $dKeys["type"] ) : $dKeys["type"] == "ContentGrid" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "3_columns_2_rows", $dKeys["view"] ) : $dKeys["view"] == "3_columns_2_rows" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/content_grid_3cols_2rows-751ec5749f7d76026419ad1e14e56460.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_3cols_2rows.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/content_grid_3cols_2rows-751ec5749f7d76026419ad1e14e56460.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_3cols_2rows.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "ContentGrid", $dKeys["type"] ) : $dKeys["type"] == "ContentGrid" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "4_columns_1_row", $dKeys["view"] ) : $dKeys["view"] == "4_columns_1_row" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/content_grid_4cols_1row-e4b175bb5e09f18aaefed0a27e4e60be.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_4cols_1row.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/content_grid_4cols_1row-e4b175bb5e09f18aaefed0a27e4e60be.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_4cols_1row.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "ContentGrid", $dKeys["type"] ) : $dKeys["type"] == "ContentGrid" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "4_columns_2_rows", $dKeys["view"] ) : $dKeys["view"] == "4_columns_2_rows" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/content_grid_4cols_2rows-afab7a75528dc8d9c2f3dc8663e3ce5f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_4cols_2rows.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/content_grid_4cols_2rows-afab7a75528dc8d9c2f3dc8663e3ce5f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_4cols_2rows.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "Gallery", $dKeys["type"] ) : $dKeys["type"] == "Gallery" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/gallery-245991fe7dbc4a4caea3872e4aeb552f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/gallery.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/gallery-245991fe7dbc4a4caea3872e4aeb552f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/gallery.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "Video", $dKeys["type"] ) : $dKeys["type"] == "Video" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/video-18ddb01063a5632e1be67b5232c6cc19.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/video.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/video-18ddb01063a5632e1be67b5232c6cc19.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "TagCloud", $dKeys["type"] ) : $dKeys["type"] == "TagCloud" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/tag_cloud-a6fd9edcf3948e034a262ad1926da8a8.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/tag_cloud.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/tag_cloud-a6fd9edcf3948e034a262ad1926da8a8.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/tag_cloud.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "Poll", $dKeys["type"] ) : $dKeys["type"] == "Poll" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/poll-1334b9e2374051a18bb97bdc7d688373.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/poll.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/poll-1334b9e2374051a18bb97bdc7d688373.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/poll.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "ItemList", $dKeys["type"] ) : $dKeys["type"] == "ItemList" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/item_list-0bb68509ba6a05aba5059c580ea0d201.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/item_list.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/item_list-0bb68509ba6a05aba5059c580ea0d201.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/item_list.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "FeedReader", $dKeys["type"] ) : $dKeys["type"] == "FeedReader" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/feed_reader-6980108cd76b2e02dcdaa35e6feb6bae.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/feed_reader.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/feed_reader-6980108cd76b2e02dcdaa35e6feb6bae.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/feed_reader.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "FeedbackForm", $dKeys["type"] ) : $dKeys["type"] == "FeedbackForm" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/feedback_form-9d4abdc86435fee01c255c2df3940db6.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/feedback_form.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/feedback_form-9d4abdc86435fee01c255c2df3940db6.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/feedback_form.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "HighlightedItem", $dKeys["type"] ) : $dKeys["type"] == "HighlightedItem" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/highlighted_item-7f478f6ae39fb1ad0979b0e9c3d26255.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/highlighted_item.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/highlighted_item-7f478f6ae39fb1ad0979b0e9c3d26255.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/highlighted_item.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  
{
$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/view-aca51a0b3c7f3b92a7ff261688a651f3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezflow/design/standard/templates/block/view/view.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/view-aca51a0b3c7f3b92a7ff261688a651f3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezflow/design/standard/templates/block/view/view.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentAttributeBlockView";
else
    $namespace .= ':ContentAttributeBlockView';
unset( $vars[$namespace]['block'] );
$text .= '    </div>
    <div class="block-separator"></div>';
}
unset( $if_cond );
// if ends

$oldRestoreIncludeArray_2680e22fe02307c023e0561839f5c862 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/zone_block_bottom-0a82e512f71b06dec82f902241a3e660.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezflow/design/standard/templates/parts/zone_block_bottom.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/zone_block_bottom-0a82e512f71b06dec82f902241a3e660.php' );
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
$tpl->processURI( 'extension/ezflow/design/standard/templates/parts/zone_block_bottom.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_2680e22fe02307c023e0561839f5c862;

$text .= '
<!-- STOP: including template: extension/ezflow/design/standard/templates/parts/zone_block.tpl (extension/ezflow/design/standard/templates/parts/zone_block.tpl) -->
';

$setArray = $oldSetArray_785252403fab2719fb967f572a48885d;
$tpl->Level--;
?>
