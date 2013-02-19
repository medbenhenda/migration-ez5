<?php
// URI:       extension/dcdgroup/design/group/override/templates/block/dcd_archives.tpl
// Filename:  extension/dcdgroup/design/group/override/templates/block/dcd_archives.tpl
// Timestamp: 1359052770 (Thu Jan 24 19:39:30 CET 2013)
$oldSetArray_5d402e60be3bc63c24823016e4c83bf7 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/dcdgroup/design/group/override/templates/block/dcd_archives.tpl (extension/dcdgroup/design/group/override/templates/block/dcd_archives.tpl) -->
';
// def $valid_nodes
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'valid_nodes' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'valid_nodes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'valid_nodes' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 1,
    1 => 37,
    2 => 38,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_archives.tpl',
) );
    $tpl->setVariable( 'valid_nodes', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'valid_nodes', $var, $rootNamespace );
}

$text .= '
<h2>';
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
$var = mb_strtoupper( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h2>

<ul>';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_21350eef50282a86a7bf530cb7966bca_6 ) ) $fe_variable_stack_21350eef50282a86a7bf530cb7966bca_6 = array();
$fe_variable_stack_21350eef50282a86a7bf530cb7966bca_6[] = compact( 'fe_array_21350eef50282a86a7bf530cb7966bca_6', 'fe_array_keys_21350eef50282a86a7bf530cb7966bca_6', 'fe_n_items_21350eef50282a86a7bf530cb7966bca_6', 'fe_n_items_processed_21350eef50282a86a7bf530cb7966bca_6', 'fe_i_21350eef50282a86a7bf530cb7966bca_6', 'fe_key_21350eef50282a86a7bf530cb7966bca_6', 'fe_val_21350eef50282a86a7bf530cb7966bca_6', 'fe_offset_21350eef50282a86a7bf530cb7966bca_6', 'fe_max_21350eef50282a86a7bf530cb7966bca_6', 'fe_reverse_21350eef50282a86a7bf530cb7966bca_6', 'fe_first_val_21350eef50282a86a7bf530cb7966bca_6', 'fe_last_val_21350eef50282a86a7bf530cb7966bca_6' );
unset( $fe_array_21350eef50282a86a7bf530cb7966bca_6 );
unset( $fe_array_21350eef50282a86a7bf530cb7966bca_6 );
$fe_array_21350eef50282a86a7bf530cb7966bca_6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_nodes'] : null;
if (! isset( $fe_array_21350eef50282a86a7bf530cb7966bca_6 ) ) $fe_array_21350eef50282a86a7bf530cb7966bca_6 = NULL;
while ( is_object( $fe_array_21350eef50282a86a7bf530cb7966bca_6 ) and method_exists( $fe_array_21350eef50282a86a7bf530cb7966bca_6, 'templateValue' ) )
    $fe_array_21350eef50282a86a7bf530cb7966bca_6 = $fe_array_21350eef50282a86a7bf530cb7966bca_6->templateValue();

$fe_array_keys_21350eef50282a86a7bf530cb7966bca_6 = is_array( $fe_array_21350eef50282a86a7bf530cb7966bca_6 ) ? array_keys( $fe_array_21350eef50282a86a7bf530cb7966bca_6 ) : array();
$fe_n_items_21350eef50282a86a7bf530cb7966bca_6 = count( $fe_array_keys_21350eef50282a86a7bf530cb7966bca_6 );
$fe_n_items_processed_21350eef50282a86a7bf530cb7966bca_6 = 0;
$fe_offset_21350eef50282a86a7bf530cb7966bca_6 = 0;
$fe_max_21350eef50282a86a7bf530cb7966bca_6 = $fe_n_items_21350eef50282a86a7bf530cb7966bca_6 - $fe_offset_21350eef50282a86a7bf530cb7966bca_6;
$fe_reverse_21350eef50282a86a7bf530cb7966bca_6 = false;
if ( $fe_offset_21350eef50282a86a7bf530cb7966bca_6 < 0 || $fe_offset_21350eef50282a86a7bf530cb7966bca_6 >= $fe_n_items_21350eef50282a86a7bf530cb7966bca_6 )
{
    $fe_offset_21350eef50282a86a7bf530cb7966bca_6 = ( $fe_offset_21350eef50282a86a7bf530cb7966bca_6 < 0 ) ? 0 : $fe_n_items_21350eef50282a86a7bf530cb7966bca_6;
    if ( $fe_n_items_21350eef50282a86a7bf530cb7966bca_6 || $fe_offset_21350eef50282a86a7bf530cb7966bca_6 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_21350eef50282a86a7bf530cb7966bca_6'. Array count: $fe_n_items_21350eef50282a86a7bf530cb7966bca_6");   
}
}
if ( $fe_max_21350eef50282a86a7bf530cb7966bca_6 < 0 || $fe_offset_21350eef50282a86a7bf530cb7966bca_6 + $fe_max_21350eef50282a86a7bf530cb7966bca_6 > $fe_n_items_21350eef50282a86a7bf530cb7966bca_6 )
{
    if ( $fe_max_21350eef50282a86a7bf530cb7966bca_6 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_21350eef50282a86a7bf530cb7966bca_6");
    $fe_max_21350eef50282a86a7bf530cb7966bca_6 = $fe_n_items_21350eef50282a86a7bf530cb7966bca_6 - $fe_offset_21350eef50282a86a7bf530cb7966bca_6;
}
if ( $fe_reverse_21350eef50282a86a7bf530cb7966bca_6 )
{
    $fe_first_val_21350eef50282a86a7bf530cb7966bca_6 = $fe_n_items_21350eef50282a86a7bf530cb7966bca_6 - 1 - $fe_offset_21350eef50282a86a7bf530cb7966bca_6;
    $fe_last_val_21350eef50282a86a7bf530cb7966bca_6  = 0;
}
else
{
    $fe_first_val_21350eef50282a86a7bf530cb7966bca_6 = $fe_offset_21350eef50282a86a7bf530cb7966bca_6;
    $fe_last_val_21350eef50282a86a7bf530cb7966bca_6  = $fe_n_items_21350eef50282a86a7bf530cb7966bca_6 - 1;
}
// foreach
for ( $fe_i_21350eef50282a86a7bf530cb7966bca_6 = $fe_first_val_21350eef50282a86a7bf530cb7966bca_6; $fe_n_items_processed_21350eef50282a86a7bf530cb7966bca_6 < $fe_max_21350eef50282a86a7bf530cb7966bca_6 && ( $fe_reverse_21350eef50282a86a7bf530cb7966bca_6 ? $fe_i_21350eef50282a86a7bf530cb7966bca_6 >= $fe_last_val_21350eef50282a86a7bf530cb7966bca_6 : $fe_i_21350eef50282a86a7bf530cb7966bca_6 <= $fe_last_val_21350eef50282a86a7bf530cb7966bca_6 ); $fe_reverse_21350eef50282a86a7bf530cb7966bca_6 ? $fe_i_21350eef50282a86a7bf530cb7966bca_6-- : $fe_i_21350eef50282a86a7bf530cb7966bca_6++ )
{
$fe_key_21350eef50282a86a7bf530cb7966bca_6 = $fe_array_keys_21350eef50282a86a7bf530cb7966bca_6[$fe_i_21350eef50282a86a7bf530cb7966bca_6];
$fe_val_21350eef50282a86a7bf530cb7966bca_6 = $fe_array_21350eef50282a86a7bf530cb7966bca_6[$fe_key_21350eef50282a86a7bf530cb7966bca_6];
$vars[$rootNamespace]['valid_node'] = $fe_val_21350eef50282a86a7bf530cb7966bca_6;
$text .= '    <li><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'location' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'content' );
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_node'] : null;
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

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_node'] : null;
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

$text .= '</a></li>';
$fe_n_items_processed_21350eef50282a86a7bf530cb7966bca_6++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_21350eef50282a86a7bf530cb7966bca_6 ) ) extract( array_pop( $fe_variable_stack_21350eef50282a86a7bf530cb7966bca_6 ) );

else
{

unset( $fe_array_21350eef50282a86a7bf530cb7966bca_6 );

unset( $fe_array_keys_21350eef50282a86a7bf530cb7966bca_6 );

unset( $fe_n_items_21350eef50282a86a7bf530cb7966bca_6 );

unset( $fe_n_items_processed_21350eef50282a86a7bf530cb7966bca_6 );

unset( $fe_i_21350eef50282a86a7bf530cb7966bca_6 );

unset( $fe_key_21350eef50282a86a7bf530cb7966bca_6 );

unset( $fe_val_21350eef50282a86a7bf530cb7966bca_6 );

unset( $fe_offset_21350eef50282a86a7bf530cb7966bca_6 );

unset( $fe_max_21350eef50282a86a7bf530cb7966bca_6 );

unset( $fe_reverse_21350eef50282a86a7bf530cb7966bca_6 );

unset( $fe_first_val_21350eef50282a86a7bf530cb7966bca_6 );

unset( $fe_last_val_21350eef50282a86a7bf530cb7966bca_6 );

unset( $fe_variable_stack_21350eef50282a86a7bf530cb7966bca_6 );

}

// foreach ends
$text .= '</ul>
';
// undef $valid_nodes
$tpl->unsetLocalVariable( 'valid_nodes', $rootNamespace );

$text .= '
<!-- STOP: including template: extension/dcdgroup/design/group/override/templates/block/dcd_archives.tpl (extension/dcdgroup/design/group/override/templates/block/dcd_archives.tpl) -->
';

$setArray = $oldSetArray_5d402e60be3bc63c24823016e4c83bf7;
$tpl->Level--;
?>
