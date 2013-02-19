<?php
// URI:       extension/ezflow/design/standard/templates/parts/zone_block.tpl
// Filename:  extension/ezflow/design/standard/templates/parts/zone_block.tpl
// Timestamp: 1360064235 (Tue Feb 5 12:37:15 CET 2013)
$oldSetArray_ee86dfe399a0239c794b9fa644f90513 = isset( $setArray ) ? $setArray : array();
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
$oldRestoreIncludeArray_01acf496dd81b7c088380d3d93f74a57 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/zone_block_top-d7a50f12400a3af821b85b27ffff7c83.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezflow/design/standard/templates/parts/zone_block_top.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/zone_block_top-d7a50f12400a3af821b85b27ffff7c83.php' );
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
$restoreIncludeArray = $oldRestoreIncludeArray_01acf496dd81b7c088380d3d93f74a57;

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
$textElements = array();
$tpl->processFunction( 'block_view_gui', $textElements,
                       false,
                       array (
  'block' => 
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
  ),
),
                       array (
  0 => 
  array (
    0 => 7,
    1 => 4,
    2 => 378,
  ),
  1 => 
  array (
    0 => 7,
    1 => 31,
    2 => 405,
  ),
  2 => 'extension/ezflow/design/standard/templates/parts/zone_block.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    </div>
    <div class="block-separator"></div>';
}
unset( $if_cond );
// if ends

$oldRestoreIncludeArray_dcba6bd7c0af02d0e49187068707eba3 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/zone_block_bottom-49360cb3dd09abb03c370cb0c220338e.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezflow/design/standard/templates/parts/zone_block_bottom.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/zone_block_bottom-49360cb3dd09abb03c370cb0c220338e.php' );
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
$restoreIncludeArray = $oldRestoreIncludeArray_dcba6bd7c0af02d0e49187068707eba3;

$text .= '
<!-- STOP: including template: extension/ezflow/design/standard/templates/parts/zone_block.tpl (extension/ezflow/design/standard/templates/parts/zone_block.tpl) -->
';

$setArray = $oldSetArray_ee86dfe399a0239c794b9fa644f90513;
$tpl->Level--;
?>
