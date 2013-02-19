<?php
// URI:       design:zone/grouplayout.tpl
// Filename:  extension/dcdgroup/design/group/templates/zone/grouplayout.tpl
// Timestamp: 1360868333 (Thu Feb 14 19:58:53 CET 2013)
$oldSetArray_0abb35ee64fd83e12f9a0c517d51fbbd = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/dcdgroup/design/group/templates/zone/grouplayout.tpl (design:zone/grouplayout.tpl) -->
<div class="l_sidebar">

    <!-- ZONE CONTENT: START -->
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 0 );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'blocks' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 0 );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'blocks' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_1 ) ) $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_1 = array();
$fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_1[] = compact( 'fe_array_8bf73ea23b051647ecc4c656aab96579_1', 'fe_array_keys_8bf73ea23b051647ecc4c656aab96579_1', 'fe_n_items_8bf73ea23b051647ecc4c656aab96579_1', 'fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_1', 'fe_i_8bf73ea23b051647ecc4c656aab96579_1', 'fe_key_8bf73ea23b051647ecc4c656aab96579_1', 'fe_val_8bf73ea23b051647ecc4c656aab96579_1', 'fe_offset_8bf73ea23b051647ecc4c656aab96579_1', 'fe_max_8bf73ea23b051647ecc4c656aab96579_1', 'fe_reverse_8bf73ea23b051647ecc4c656aab96579_1', 'fe_first_val_8bf73ea23b051647ecc4c656aab96579_1', 'fe_last_val_8bf73ea23b051647ecc4c656aab96579_1' );
unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_1 );
unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_1 );
$fe_array_8bf73ea23b051647ecc4c656aab96579_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$fe_array_8bf73ea23b051647ecc4c656aab96579_11 = compiledFetchAttribute( $fe_array_8bf73ea23b051647ecc4c656aab96579_1, 0 );
unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_1 );
$fe_array_8bf73ea23b051647ecc4c656aab96579_1 = $fe_array_8bf73ea23b051647ecc4c656aab96579_11;
$fe_array_8bf73ea23b051647ecc4c656aab96579_11 = compiledFetchAttribute( $fe_array_8bf73ea23b051647ecc4c656aab96579_1, 'blocks' );
unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_1 );
$fe_array_8bf73ea23b051647ecc4c656aab96579_1 = $fe_array_8bf73ea23b051647ecc4c656aab96579_11;
if (! isset( $fe_array_8bf73ea23b051647ecc4c656aab96579_1 ) ) $fe_array_8bf73ea23b051647ecc4c656aab96579_1 = NULL;
while ( is_object( $fe_array_8bf73ea23b051647ecc4c656aab96579_1 ) and method_exists( $fe_array_8bf73ea23b051647ecc4c656aab96579_1, 'templateValue' ) )
    $fe_array_8bf73ea23b051647ecc4c656aab96579_1 = $fe_array_8bf73ea23b051647ecc4c656aab96579_1->templateValue();

$fe_array_keys_8bf73ea23b051647ecc4c656aab96579_1 = is_array( $fe_array_8bf73ea23b051647ecc4c656aab96579_1 ) ? array_keys( $fe_array_8bf73ea23b051647ecc4c656aab96579_1 ) : array();
$fe_n_items_8bf73ea23b051647ecc4c656aab96579_1 = count( $fe_array_keys_8bf73ea23b051647ecc4c656aab96579_1 );
$fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_1 = 0;
$fe_offset_8bf73ea23b051647ecc4c656aab96579_1 = 0;
$fe_max_8bf73ea23b051647ecc4c656aab96579_1 = $fe_n_items_8bf73ea23b051647ecc4c656aab96579_1 - $fe_offset_8bf73ea23b051647ecc4c656aab96579_1;
$fe_reverse_8bf73ea23b051647ecc4c656aab96579_1 = false;
if ( $fe_offset_8bf73ea23b051647ecc4c656aab96579_1 < 0 || $fe_offset_8bf73ea23b051647ecc4c656aab96579_1 >= $fe_n_items_8bf73ea23b051647ecc4c656aab96579_1 )
{
    $fe_offset_8bf73ea23b051647ecc4c656aab96579_1 = ( $fe_offset_8bf73ea23b051647ecc4c656aab96579_1 < 0 ) ? 0 : $fe_n_items_8bf73ea23b051647ecc4c656aab96579_1;
    if ( $fe_n_items_8bf73ea23b051647ecc4c656aab96579_1 || $fe_offset_8bf73ea23b051647ecc4c656aab96579_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_8bf73ea23b051647ecc4c656aab96579_1'. Array count: $fe_n_items_8bf73ea23b051647ecc4c656aab96579_1");   
}
}
if ( $fe_max_8bf73ea23b051647ecc4c656aab96579_1 < 0 || $fe_offset_8bf73ea23b051647ecc4c656aab96579_1 + $fe_max_8bf73ea23b051647ecc4c656aab96579_1 > $fe_n_items_8bf73ea23b051647ecc4c656aab96579_1 )
{
    if ( $fe_max_8bf73ea23b051647ecc4c656aab96579_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_8bf73ea23b051647ecc4c656aab96579_1");
    $fe_max_8bf73ea23b051647ecc4c656aab96579_1 = $fe_n_items_8bf73ea23b051647ecc4c656aab96579_1 - $fe_offset_8bf73ea23b051647ecc4c656aab96579_1;
}
if ( $fe_reverse_8bf73ea23b051647ecc4c656aab96579_1 )
{
    $fe_first_val_8bf73ea23b051647ecc4c656aab96579_1 = $fe_n_items_8bf73ea23b051647ecc4c656aab96579_1 - 1 - $fe_offset_8bf73ea23b051647ecc4c656aab96579_1;
    $fe_last_val_8bf73ea23b051647ecc4c656aab96579_1  = 0;
}
else
{
    $fe_first_val_8bf73ea23b051647ecc4c656aab96579_1 = $fe_offset_8bf73ea23b051647ecc4c656aab96579_1;
    $fe_last_val_8bf73ea23b051647ecc4c656aab96579_1  = $fe_n_items_8bf73ea23b051647ecc4c656aab96579_1 - 1;
}
// foreach
for ( $fe_i_8bf73ea23b051647ecc4c656aab96579_1 = $fe_first_val_8bf73ea23b051647ecc4c656aab96579_1; $fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_1 < $fe_max_8bf73ea23b051647ecc4c656aab96579_1 && ( $fe_reverse_8bf73ea23b051647ecc4c656aab96579_1 ? $fe_i_8bf73ea23b051647ecc4c656aab96579_1 >= $fe_last_val_8bf73ea23b051647ecc4c656aab96579_1 : $fe_i_8bf73ea23b051647ecc4c656aab96579_1 <= $fe_last_val_8bf73ea23b051647ecc4c656aab96579_1 ); $fe_reverse_8bf73ea23b051647ecc4c656aab96579_1 ? $fe_i_8bf73ea23b051647ecc4c656aab96579_1-- : $fe_i_8bf73ea23b051647ecc4c656aab96579_1++ )
{
$fe_key_8bf73ea23b051647ecc4c656aab96579_1 = $fe_array_keys_8bf73ea23b051647ecc4c656aab96579_1[$fe_i_8bf73ea23b051647ecc4c656aab96579_1];
$fe_val_8bf73ea23b051647ecc4c656aab96579_1 = $fe_array_8bf73ea23b051647ecc4c656aab96579_1[$fe_key_8bf73ea23b051647ecc4c656aab96579_1];
$vars[$rootNamespace]['block'] = $fe_val_8bf73ea23b051647ecc4c656aab96579_1;
$text .= '            ';
$oldRestoreIncludeArray_1209f2a80b767a182bd42a35e588b299 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['zone'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'zone', $vars[$currentNamespace]['zone'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['zone'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'zone', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$var1 = compiledFetchAttribute( $var, 0 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['zone'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/zone_block-7a51c0444181b4ba5c8f89fae068542d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezflow/design/standard/templates/parts/zone_block.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/zone_block-7a51c0444181b4ba5c8f89fae068542d.php' );
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
$tpl->processURI( 'extension/ezflow/design/standard/templates/parts/zone_block.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_1209f2a80b767a182bd42a35e588b299;

$text .= '        ';
$fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_1 ) ) extract( array_pop( $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_1 ) );

else
{

unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_1 );

unset( $fe_array_keys_8bf73ea23b051647ecc4c656aab96579_1 );

unset( $fe_n_items_8bf73ea23b051647ecc4c656aab96579_1 );

unset( $fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_1 );

unset( $fe_i_8bf73ea23b051647ecc4c656aab96579_1 );

unset( $fe_key_8bf73ea23b051647ecc4c656aab96579_1 );

unset( $fe_val_8bf73ea23b051647ecc4c656aab96579_1 );

unset( $fe_offset_8bf73ea23b051647ecc4c656aab96579_1 );

unset( $fe_max_8bf73ea23b051647ecc4c656aab96579_1 );

unset( $fe_reverse_8bf73ea23b051647ecc4c656aab96579_1 );

unset( $fe_first_val_8bf73ea23b051647ecc4c656aab96579_1 );

unset( $fe_last_val_8bf73ea23b051647ecc4c656aab96579_1 );

unset( $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_1 );

}

// foreach ends
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    <!-- ZONE CONTENT: END -->

</div>


<div class="content">

    <!-- ZONE CONTENT: START -->

    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 1 );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'blocks' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 1 );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'blocks' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_2 ) ) $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_2 = array();
$fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_2[] = compact( 'fe_array_8bf73ea23b051647ecc4c656aab96579_2', 'fe_array_keys_8bf73ea23b051647ecc4c656aab96579_2', 'fe_n_items_8bf73ea23b051647ecc4c656aab96579_2', 'fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_2', 'fe_i_8bf73ea23b051647ecc4c656aab96579_2', 'fe_key_8bf73ea23b051647ecc4c656aab96579_2', 'fe_val_8bf73ea23b051647ecc4c656aab96579_2', 'fe_offset_8bf73ea23b051647ecc4c656aab96579_2', 'fe_max_8bf73ea23b051647ecc4c656aab96579_2', 'fe_reverse_8bf73ea23b051647ecc4c656aab96579_2', 'fe_first_val_8bf73ea23b051647ecc4c656aab96579_2', 'fe_last_val_8bf73ea23b051647ecc4c656aab96579_2' );
unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_2 );
unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_2 );
$fe_array_8bf73ea23b051647ecc4c656aab96579_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$fe_array_8bf73ea23b051647ecc4c656aab96579_21 = compiledFetchAttribute( $fe_array_8bf73ea23b051647ecc4c656aab96579_2, 1 );
unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_2 );
$fe_array_8bf73ea23b051647ecc4c656aab96579_2 = $fe_array_8bf73ea23b051647ecc4c656aab96579_21;
$fe_array_8bf73ea23b051647ecc4c656aab96579_21 = compiledFetchAttribute( $fe_array_8bf73ea23b051647ecc4c656aab96579_2, 'blocks' );
unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_2 );
$fe_array_8bf73ea23b051647ecc4c656aab96579_2 = $fe_array_8bf73ea23b051647ecc4c656aab96579_21;
if (! isset( $fe_array_8bf73ea23b051647ecc4c656aab96579_2 ) ) $fe_array_8bf73ea23b051647ecc4c656aab96579_2 = NULL;
while ( is_object( $fe_array_8bf73ea23b051647ecc4c656aab96579_2 ) and method_exists( $fe_array_8bf73ea23b051647ecc4c656aab96579_2, 'templateValue' ) )
    $fe_array_8bf73ea23b051647ecc4c656aab96579_2 = $fe_array_8bf73ea23b051647ecc4c656aab96579_2->templateValue();

$fe_array_keys_8bf73ea23b051647ecc4c656aab96579_2 = is_array( $fe_array_8bf73ea23b051647ecc4c656aab96579_2 ) ? array_keys( $fe_array_8bf73ea23b051647ecc4c656aab96579_2 ) : array();
$fe_n_items_8bf73ea23b051647ecc4c656aab96579_2 = count( $fe_array_keys_8bf73ea23b051647ecc4c656aab96579_2 );
$fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_2 = 0;
$fe_offset_8bf73ea23b051647ecc4c656aab96579_2 = 0;
$fe_max_8bf73ea23b051647ecc4c656aab96579_2 = $fe_n_items_8bf73ea23b051647ecc4c656aab96579_2 - $fe_offset_8bf73ea23b051647ecc4c656aab96579_2;
$fe_reverse_8bf73ea23b051647ecc4c656aab96579_2 = false;
if ( $fe_offset_8bf73ea23b051647ecc4c656aab96579_2 < 0 || $fe_offset_8bf73ea23b051647ecc4c656aab96579_2 >= $fe_n_items_8bf73ea23b051647ecc4c656aab96579_2 )
{
    $fe_offset_8bf73ea23b051647ecc4c656aab96579_2 = ( $fe_offset_8bf73ea23b051647ecc4c656aab96579_2 < 0 ) ? 0 : $fe_n_items_8bf73ea23b051647ecc4c656aab96579_2;
    if ( $fe_n_items_8bf73ea23b051647ecc4c656aab96579_2 || $fe_offset_8bf73ea23b051647ecc4c656aab96579_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_8bf73ea23b051647ecc4c656aab96579_2'. Array count: $fe_n_items_8bf73ea23b051647ecc4c656aab96579_2");   
}
}
if ( $fe_max_8bf73ea23b051647ecc4c656aab96579_2 < 0 || $fe_offset_8bf73ea23b051647ecc4c656aab96579_2 + $fe_max_8bf73ea23b051647ecc4c656aab96579_2 > $fe_n_items_8bf73ea23b051647ecc4c656aab96579_2 )
{
    if ( $fe_max_8bf73ea23b051647ecc4c656aab96579_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_8bf73ea23b051647ecc4c656aab96579_2");
    $fe_max_8bf73ea23b051647ecc4c656aab96579_2 = $fe_n_items_8bf73ea23b051647ecc4c656aab96579_2 - $fe_offset_8bf73ea23b051647ecc4c656aab96579_2;
}
if ( $fe_reverse_8bf73ea23b051647ecc4c656aab96579_2 )
{
    $fe_first_val_8bf73ea23b051647ecc4c656aab96579_2 = $fe_n_items_8bf73ea23b051647ecc4c656aab96579_2 - 1 - $fe_offset_8bf73ea23b051647ecc4c656aab96579_2;
    $fe_last_val_8bf73ea23b051647ecc4c656aab96579_2  = 0;
}
else
{
    $fe_first_val_8bf73ea23b051647ecc4c656aab96579_2 = $fe_offset_8bf73ea23b051647ecc4c656aab96579_2;
    $fe_last_val_8bf73ea23b051647ecc4c656aab96579_2  = $fe_n_items_8bf73ea23b051647ecc4c656aab96579_2 - 1;
}
// foreach
for ( $fe_i_8bf73ea23b051647ecc4c656aab96579_2 = $fe_first_val_8bf73ea23b051647ecc4c656aab96579_2; $fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_2 < $fe_max_8bf73ea23b051647ecc4c656aab96579_2 && ( $fe_reverse_8bf73ea23b051647ecc4c656aab96579_2 ? $fe_i_8bf73ea23b051647ecc4c656aab96579_2 >= $fe_last_val_8bf73ea23b051647ecc4c656aab96579_2 : $fe_i_8bf73ea23b051647ecc4c656aab96579_2 <= $fe_last_val_8bf73ea23b051647ecc4c656aab96579_2 ); $fe_reverse_8bf73ea23b051647ecc4c656aab96579_2 ? $fe_i_8bf73ea23b051647ecc4c656aab96579_2-- : $fe_i_8bf73ea23b051647ecc4c656aab96579_2++ )
{
$fe_key_8bf73ea23b051647ecc4c656aab96579_2 = $fe_array_keys_8bf73ea23b051647ecc4c656aab96579_2[$fe_i_8bf73ea23b051647ecc4c656aab96579_2];
$fe_val_8bf73ea23b051647ecc4c656aab96579_2 = $fe_array_8bf73ea23b051647ecc4c656aab96579_2[$fe_key_8bf73ea23b051647ecc4c656aab96579_2];
$vars[$rootNamespace]['block'] = $fe_val_8bf73ea23b051647ecc4c656aab96579_2;
$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'type' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 'BannerMainBottom' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
$oldRestoreIncludeArray_2d96c0456ac1a76ad7a3c2c5cccd7b96 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['zone'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'zone', $vars[$currentNamespace]['zone'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['zone'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'zone', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$var1 = compiledFetchAttribute( $var, 1 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['zone'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/zone_block-7a51c0444181b4ba5c8f89fae068542d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezflow/design/standard/templates/parts/zone_block.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/zone_block-7a51c0444181b4ba5c8f89fae068542d.php' );
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
$tpl->processURI( 'extension/ezflow/design/standard/templates/parts/zone_block.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_2d96c0456ac1a76ad7a3c2c5cccd7b96;

$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
$fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_2 ) ) extract( array_pop( $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_2 ) );

else
{

unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_2 );

unset( $fe_array_keys_8bf73ea23b051647ecc4c656aab96579_2 );

unset( $fe_n_items_8bf73ea23b051647ecc4c656aab96579_2 );

unset( $fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_2 );

unset( $fe_i_8bf73ea23b051647ecc4c656aab96579_2 );

unset( $fe_key_8bf73ea23b051647ecc4c656aab96579_2 );

unset( $fe_val_8bf73ea23b051647ecc4c656aab96579_2 );

unset( $fe_offset_8bf73ea23b051647ecc4c656aab96579_2 );

unset( $fe_max_8bf73ea23b051647ecc4c656aab96579_2 );

unset( $fe_reverse_8bf73ea23b051647ecc4c656aab96579_2 );

unset( $fe_first_val_8bf73ea23b051647ecc4c656aab96579_2 );

unset( $fe_last_val_8bf73ea23b051647ecc4c656aab96579_2 );

unset( $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_2 );

}

// foreach ends
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    <!-- ZONE CONTENT: END -->

</div>

<div class="r_sidebar">
    ';
$oldRestoreIncludeArray_6a4cd2598f64ab5373a82f46c1315526 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/connect-8406ec674a8edc13f620e0bb863ee251.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/dcdgroup/design/group/templates/_common/connect.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/connect-8406ec674a8edc13f620e0bb863ee251.php' );
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
$tpl->processURI( 'extension/dcdgroup/design/group/templates/_common/connect.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_6a4cd2598f64ab5373a82f46c1315526;

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 2 );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'blocks' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 2 );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'blocks' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_3 ) ) $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_3 = array();
$fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_3[] = compact( 'fe_array_8bf73ea23b051647ecc4c656aab96579_3', 'fe_array_keys_8bf73ea23b051647ecc4c656aab96579_3', 'fe_n_items_8bf73ea23b051647ecc4c656aab96579_3', 'fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_3', 'fe_i_8bf73ea23b051647ecc4c656aab96579_3', 'fe_key_8bf73ea23b051647ecc4c656aab96579_3', 'fe_val_8bf73ea23b051647ecc4c656aab96579_3', 'fe_offset_8bf73ea23b051647ecc4c656aab96579_3', 'fe_max_8bf73ea23b051647ecc4c656aab96579_3', 'fe_reverse_8bf73ea23b051647ecc4c656aab96579_3', 'fe_first_val_8bf73ea23b051647ecc4c656aab96579_3', 'fe_last_val_8bf73ea23b051647ecc4c656aab96579_3' );
unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_3 );
unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_3 );
$fe_array_8bf73ea23b051647ecc4c656aab96579_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$fe_array_8bf73ea23b051647ecc4c656aab96579_31 = compiledFetchAttribute( $fe_array_8bf73ea23b051647ecc4c656aab96579_3, 2 );
unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_3 );
$fe_array_8bf73ea23b051647ecc4c656aab96579_3 = $fe_array_8bf73ea23b051647ecc4c656aab96579_31;
$fe_array_8bf73ea23b051647ecc4c656aab96579_31 = compiledFetchAttribute( $fe_array_8bf73ea23b051647ecc4c656aab96579_3, 'blocks' );
unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_3 );
$fe_array_8bf73ea23b051647ecc4c656aab96579_3 = $fe_array_8bf73ea23b051647ecc4c656aab96579_31;
if (! isset( $fe_array_8bf73ea23b051647ecc4c656aab96579_3 ) ) $fe_array_8bf73ea23b051647ecc4c656aab96579_3 = NULL;
while ( is_object( $fe_array_8bf73ea23b051647ecc4c656aab96579_3 ) and method_exists( $fe_array_8bf73ea23b051647ecc4c656aab96579_3, 'templateValue' ) )
    $fe_array_8bf73ea23b051647ecc4c656aab96579_3 = $fe_array_8bf73ea23b051647ecc4c656aab96579_3->templateValue();

$fe_array_keys_8bf73ea23b051647ecc4c656aab96579_3 = is_array( $fe_array_8bf73ea23b051647ecc4c656aab96579_3 ) ? array_keys( $fe_array_8bf73ea23b051647ecc4c656aab96579_3 ) : array();
$fe_n_items_8bf73ea23b051647ecc4c656aab96579_3 = count( $fe_array_keys_8bf73ea23b051647ecc4c656aab96579_3 );
$fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_3 = 0;
$fe_offset_8bf73ea23b051647ecc4c656aab96579_3 = 0;
$fe_max_8bf73ea23b051647ecc4c656aab96579_3 = $fe_n_items_8bf73ea23b051647ecc4c656aab96579_3 - $fe_offset_8bf73ea23b051647ecc4c656aab96579_3;
$fe_reverse_8bf73ea23b051647ecc4c656aab96579_3 = false;
if ( $fe_offset_8bf73ea23b051647ecc4c656aab96579_3 < 0 || $fe_offset_8bf73ea23b051647ecc4c656aab96579_3 >= $fe_n_items_8bf73ea23b051647ecc4c656aab96579_3 )
{
    $fe_offset_8bf73ea23b051647ecc4c656aab96579_3 = ( $fe_offset_8bf73ea23b051647ecc4c656aab96579_3 < 0 ) ? 0 : $fe_n_items_8bf73ea23b051647ecc4c656aab96579_3;
    if ( $fe_n_items_8bf73ea23b051647ecc4c656aab96579_3 || $fe_offset_8bf73ea23b051647ecc4c656aab96579_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_8bf73ea23b051647ecc4c656aab96579_3'. Array count: $fe_n_items_8bf73ea23b051647ecc4c656aab96579_3");   
}
}
if ( $fe_max_8bf73ea23b051647ecc4c656aab96579_3 < 0 || $fe_offset_8bf73ea23b051647ecc4c656aab96579_3 + $fe_max_8bf73ea23b051647ecc4c656aab96579_3 > $fe_n_items_8bf73ea23b051647ecc4c656aab96579_3 )
{
    if ( $fe_max_8bf73ea23b051647ecc4c656aab96579_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_8bf73ea23b051647ecc4c656aab96579_3");
    $fe_max_8bf73ea23b051647ecc4c656aab96579_3 = $fe_n_items_8bf73ea23b051647ecc4c656aab96579_3 - $fe_offset_8bf73ea23b051647ecc4c656aab96579_3;
}
if ( $fe_reverse_8bf73ea23b051647ecc4c656aab96579_3 )
{
    $fe_first_val_8bf73ea23b051647ecc4c656aab96579_3 = $fe_n_items_8bf73ea23b051647ecc4c656aab96579_3 - 1 - $fe_offset_8bf73ea23b051647ecc4c656aab96579_3;
    $fe_last_val_8bf73ea23b051647ecc4c656aab96579_3  = 0;
}
else
{
    $fe_first_val_8bf73ea23b051647ecc4c656aab96579_3 = $fe_offset_8bf73ea23b051647ecc4c656aab96579_3;
    $fe_last_val_8bf73ea23b051647ecc4c656aab96579_3  = $fe_n_items_8bf73ea23b051647ecc4c656aab96579_3 - 1;
}
// foreach
for ( $fe_i_8bf73ea23b051647ecc4c656aab96579_3 = $fe_first_val_8bf73ea23b051647ecc4c656aab96579_3; $fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_3 < $fe_max_8bf73ea23b051647ecc4c656aab96579_3 && ( $fe_reverse_8bf73ea23b051647ecc4c656aab96579_3 ? $fe_i_8bf73ea23b051647ecc4c656aab96579_3 >= $fe_last_val_8bf73ea23b051647ecc4c656aab96579_3 : $fe_i_8bf73ea23b051647ecc4c656aab96579_3 <= $fe_last_val_8bf73ea23b051647ecc4c656aab96579_3 ); $fe_reverse_8bf73ea23b051647ecc4c656aab96579_3 ? $fe_i_8bf73ea23b051647ecc4c656aab96579_3-- : $fe_i_8bf73ea23b051647ecc4c656aab96579_3++ )
{
$fe_key_8bf73ea23b051647ecc4c656aab96579_3 = $fe_array_keys_8bf73ea23b051647ecc4c656aab96579_3[$fe_i_8bf73ea23b051647ecc4c656aab96579_3];
$fe_val_8bf73ea23b051647ecc4c656aab96579_3 = $fe_array_8bf73ea23b051647ecc4c656aab96579_3[$fe_key_8bf73ea23b051647ecc4c656aab96579_3];
$vars[$rootNamespace]['block'] = $fe_val_8bf73ea23b051647ecc4c656aab96579_3;
$text .= '            ';
$oldRestoreIncludeArray_a5ecbd2ded3b748404f6946b296975d2 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['zone'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'zone', $vars[$currentNamespace]['zone'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['zone'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'zone', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$var1 = compiledFetchAttribute( $var, 2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['zone'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/zone_block-7a51c0444181b4ba5c8f89fae068542d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezflow/design/standard/templates/parts/zone_block.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/zone_block-7a51c0444181b4ba5c8f89fae068542d.php' );
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
$tpl->processURI( 'extension/ezflow/design/standard/templates/parts/zone_block.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_a5ecbd2ded3b748404f6946b296975d2;

$text .= '        ';
$fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_3 ) ) extract( array_pop( $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_3 ) );

else
{

unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_3 );

unset( $fe_array_keys_8bf73ea23b051647ecc4c656aab96579_3 );

unset( $fe_n_items_8bf73ea23b051647ecc4c656aab96579_3 );

unset( $fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_3 );

unset( $fe_i_8bf73ea23b051647ecc4c656aab96579_3 );

unset( $fe_key_8bf73ea23b051647ecc4c656aab96579_3 );

unset( $fe_val_8bf73ea23b051647ecc4c656aab96579_3 );

unset( $fe_offset_8bf73ea23b051647ecc4c656aab96579_3 );

unset( $fe_max_8bf73ea23b051647ecc4c656aab96579_3 );

unset( $fe_reverse_8bf73ea23b051647ecc4c656aab96579_3 );

unset( $fe_first_val_8bf73ea23b051647ecc4c656aab96579_3 );

unset( $fe_last_val_8bf73ea23b051647ecc4c656aab96579_3 );

unset( $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_3 );

}

// foreach ends
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '</div>
<div class="clr"></div>';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 1 );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'blocks' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 1 );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'blocks' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_4 ) ) $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_4 = array();
$fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_4[] = compact( 'fe_array_8bf73ea23b051647ecc4c656aab96579_4', 'fe_array_keys_8bf73ea23b051647ecc4c656aab96579_4', 'fe_n_items_8bf73ea23b051647ecc4c656aab96579_4', 'fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_4', 'fe_i_8bf73ea23b051647ecc4c656aab96579_4', 'fe_key_8bf73ea23b051647ecc4c656aab96579_4', 'fe_val_8bf73ea23b051647ecc4c656aab96579_4', 'fe_offset_8bf73ea23b051647ecc4c656aab96579_4', 'fe_max_8bf73ea23b051647ecc4c656aab96579_4', 'fe_reverse_8bf73ea23b051647ecc4c656aab96579_4', 'fe_first_val_8bf73ea23b051647ecc4c656aab96579_4', 'fe_last_val_8bf73ea23b051647ecc4c656aab96579_4' );
unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_4 );
unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_4 );
$fe_array_8bf73ea23b051647ecc4c656aab96579_4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$fe_array_8bf73ea23b051647ecc4c656aab96579_41 = compiledFetchAttribute( $fe_array_8bf73ea23b051647ecc4c656aab96579_4, 1 );
unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_4 );
$fe_array_8bf73ea23b051647ecc4c656aab96579_4 = $fe_array_8bf73ea23b051647ecc4c656aab96579_41;
$fe_array_8bf73ea23b051647ecc4c656aab96579_41 = compiledFetchAttribute( $fe_array_8bf73ea23b051647ecc4c656aab96579_4, 'blocks' );
unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_4 );
$fe_array_8bf73ea23b051647ecc4c656aab96579_4 = $fe_array_8bf73ea23b051647ecc4c656aab96579_41;
if (! isset( $fe_array_8bf73ea23b051647ecc4c656aab96579_4 ) ) $fe_array_8bf73ea23b051647ecc4c656aab96579_4 = NULL;
while ( is_object( $fe_array_8bf73ea23b051647ecc4c656aab96579_4 ) and method_exists( $fe_array_8bf73ea23b051647ecc4c656aab96579_4, 'templateValue' ) )
    $fe_array_8bf73ea23b051647ecc4c656aab96579_4 = $fe_array_8bf73ea23b051647ecc4c656aab96579_4->templateValue();

$fe_array_keys_8bf73ea23b051647ecc4c656aab96579_4 = is_array( $fe_array_8bf73ea23b051647ecc4c656aab96579_4 ) ? array_keys( $fe_array_8bf73ea23b051647ecc4c656aab96579_4 ) : array();
$fe_n_items_8bf73ea23b051647ecc4c656aab96579_4 = count( $fe_array_keys_8bf73ea23b051647ecc4c656aab96579_4 );
$fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_4 = 0;
$fe_offset_8bf73ea23b051647ecc4c656aab96579_4 = 0;
$fe_max_8bf73ea23b051647ecc4c656aab96579_4 = $fe_n_items_8bf73ea23b051647ecc4c656aab96579_4 - $fe_offset_8bf73ea23b051647ecc4c656aab96579_4;
$fe_reverse_8bf73ea23b051647ecc4c656aab96579_4 = false;
if ( $fe_offset_8bf73ea23b051647ecc4c656aab96579_4 < 0 || $fe_offset_8bf73ea23b051647ecc4c656aab96579_4 >= $fe_n_items_8bf73ea23b051647ecc4c656aab96579_4 )
{
    $fe_offset_8bf73ea23b051647ecc4c656aab96579_4 = ( $fe_offset_8bf73ea23b051647ecc4c656aab96579_4 < 0 ) ? 0 : $fe_n_items_8bf73ea23b051647ecc4c656aab96579_4;
    if ( $fe_n_items_8bf73ea23b051647ecc4c656aab96579_4 || $fe_offset_8bf73ea23b051647ecc4c656aab96579_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_8bf73ea23b051647ecc4c656aab96579_4'. Array count: $fe_n_items_8bf73ea23b051647ecc4c656aab96579_4");   
}
}
if ( $fe_max_8bf73ea23b051647ecc4c656aab96579_4 < 0 || $fe_offset_8bf73ea23b051647ecc4c656aab96579_4 + $fe_max_8bf73ea23b051647ecc4c656aab96579_4 > $fe_n_items_8bf73ea23b051647ecc4c656aab96579_4 )
{
    if ( $fe_max_8bf73ea23b051647ecc4c656aab96579_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_8bf73ea23b051647ecc4c656aab96579_4");
    $fe_max_8bf73ea23b051647ecc4c656aab96579_4 = $fe_n_items_8bf73ea23b051647ecc4c656aab96579_4 - $fe_offset_8bf73ea23b051647ecc4c656aab96579_4;
}
if ( $fe_reverse_8bf73ea23b051647ecc4c656aab96579_4 )
{
    $fe_first_val_8bf73ea23b051647ecc4c656aab96579_4 = $fe_n_items_8bf73ea23b051647ecc4c656aab96579_4 - 1 - $fe_offset_8bf73ea23b051647ecc4c656aab96579_4;
    $fe_last_val_8bf73ea23b051647ecc4c656aab96579_4  = 0;
}
else
{
    $fe_first_val_8bf73ea23b051647ecc4c656aab96579_4 = $fe_offset_8bf73ea23b051647ecc4c656aab96579_4;
    $fe_last_val_8bf73ea23b051647ecc4c656aab96579_4  = $fe_n_items_8bf73ea23b051647ecc4c656aab96579_4 - 1;
}
// foreach
for ( $fe_i_8bf73ea23b051647ecc4c656aab96579_4 = $fe_first_val_8bf73ea23b051647ecc4c656aab96579_4; $fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_4 < $fe_max_8bf73ea23b051647ecc4c656aab96579_4 && ( $fe_reverse_8bf73ea23b051647ecc4c656aab96579_4 ? $fe_i_8bf73ea23b051647ecc4c656aab96579_4 >= $fe_last_val_8bf73ea23b051647ecc4c656aab96579_4 : $fe_i_8bf73ea23b051647ecc4c656aab96579_4 <= $fe_last_val_8bf73ea23b051647ecc4c656aab96579_4 ); $fe_reverse_8bf73ea23b051647ecc4c656aab96579_4 ? $fe_i_8bf73ea23b051647ecc4c656aab96579_4-- : $fe_i_8bf73ea23b051647ecc4c656aab96579_4++ )
{
$fe_key_8bf73ea23b051647ecc4c656aab96579_4 = $fe_array_keys_8bf73ea23b051647ecc4c656aab96579_4[$fe_i_8bf73ea23b051647ecc4c656aab96579_4];
$fe_val_8bf73ea23b051647ecc4c656aab96579_4 = $fe_array_8bf73ea23b051647ecc4c656aab96579_4[$fe_key_8bf73ea23b051647ecc4c656aab96579_4];
$vars[$rootNamespace]['block'] = $fe_val_8bf73ea23b051647ecc4c656aab96579_4;
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'type' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'BannerMainBottom' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
$oldRestoreIncludeArray_9a59e3e7077a193aa58deeb6ac1b53ab = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['zone'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'zone', $vars[$currentNamespace]['zone'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['zone'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'zone', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$var1 = compiledFetchAttribute( $var, 1 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['zone'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/zone_block-7a51c0444181b4ba5c8f89fae068542d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezflow/design/standard/templates/parts/zone_block.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/zone_block-7a51c0444181b4ba5c8f89fae068542d.php' );
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
$tpl->processURI( 'extension/ezflow/design/standard/templates/parts/zone_block.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_9a59e3e7077a193aa58deeb6ac1b53ab;

$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
$fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_4++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_4 ) ) extract( array_pop( $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_4 ) );

else
{

unset( $fe_array_8bf73ea23b051647ecc4c656aab96579_4 );

unset( $fe_array_keys_8bf73ea23b051647ecc4c656aab96579_4 );

unset( $fe_n_items_8bf73ea23b051647ecc4c656aab96579_4 );

unset( $fe_n_items_processed_8bf73ea23b051647ecc4c656aab96579_4 );

unset( $fe_i_8bf73ea23b051647ecc4c656aab96579_4 );

unset( $fe_key_8bf73ea23b051647ecc4c656aab96579_4 );

unset( $fe_val_8bf73ea23b051647ecc4c656aab96579_4 );

unset( $fe_offset_8bf73ea23b051647ecc4c656aab96579_4 );

unset( $fe_max_8bf73ea23b051647ecc4c656aab96579_4 );

unset( $fe_reverse_8bf73ea23b051647ecc4c656aab96579_4 );

unset( $fe_first_val_8bf73ea23b051647ecc4c656aab96579_4 );

unset( $fe_last_val_8bf73ea23b051647ecc4c656aab96579_4 );

unset( $fe_variable_stack_8bf73ea23b051647ecc4c656aab96579_4 );

}

// foreach ends
}
unset( $if_cond );
// if ends

$text .= '

<!-- STOP: including template: extension/dcdgroup/design/group/templates/zone/grouplayout.tpl (design:zone/grouplayout.tpl) -->
';

$setArray = $oldSetArray_0abb35ee64fd83e12f9a0c517d51fbbd;
$tpl->Level--;
?>
