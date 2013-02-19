<?php
// URI:       extension/dcdgroup/design/group/override/templates/block/dcd_zones.tpl
// Filename:  extension/dcdgroup/design/group/override/templates/block/dcd_zones.tpl
// Timestamp: 1359052770 (Thu Jan 24 19:39:30 CET 2013)
$oldSetArray_9a953c9bc568194169a87a157d6e31cf = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/dcdgroup/design/group/override/templates/block/dcd_zones.tpl (extension/dcdgroup/design/group/override/templates/block/dcd_zones.tpl) -->
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
    0 => 2,
    1 => 26,
    2 => 65,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_zones.tpl',
) );
    $tpl->setVariable( 'valid_nodes', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'valid_nodes', $var, $rootNamespace );
}

// def $valid_node
if ( $tpl->hasVariable( 'valid_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'valid_node' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 2,
    1 => 26,
    2 => 65,
  ),
  2 => 'extension/dcdgroup/design/group/override/templates/block/dcd_zones.tpl',
) );
    $tpl->setVariable( 'valid_node', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'valid_node', false, $rootNamespace );
}

$text .= '<h2 class="zones">';
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


<ul>';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_29a4fd674a4d61ae7e57054aef5e0da4_5 ) ) $fe_variable_stack_29a4fd674a4d61ae7e57054aef5e0da4_5 = array();
$fe_variable_stack_29a4fd674a4d61ae7e57054aef5e0da4_5[] = compact( 'fe_array_29a4fd674a4d61ae7e57054aef5e0da4_5', 'fe_array_keys_29a4fd674a4d61ae7e57054aef5e0da4_5', 'fe_n_items_29a4fd674a4d61ae7e57054aef5e0da4_5', 'fe_n_items_processed_29a4fd674a4d61ae7e57054aef5e0da4_5', 'fe_i_29a4fd674a4d61ae7e57054aef5e0da4_5', 'fe_key_29a4fd674a4d61ae7e57054aef5e0da4_5', 'fe_val_29a4fd674a4d61ae7e57054aef5e0da4_5', 'fe_offset_29a4fd674a4d61ae7e57054aef5e0da4_5', 'fe_max_29a4fd674a4d61ae7e57054aef5e0da4_5', 'fe_reverse_29a4fd674a4d61ae7e57054aef5e0da4_5', 'fe_first_val_29a4fd674a4d61ae7e57054aef5e0da4_5', 'fe_last_val_29a4fd674a4d61ae7e57054aef5e0da4_5' );
unset( $fe_array_29a4fd674a4d61ae7e57054aef5e0da4_5 );
unset( $fe_array_29a4fd674a4d61ae7e57054aef5e0da4_5 );
$fe_array_29a4fd674a4d61ae7e57054aef5e0da4_5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_nodes'] : null;
if (! isset( $fe_array_29a4fd674a4d61ae7e57054aef5e0da4_5 ) ) $fe_array_29a4fd674a4d61ae7e57054aef5e0da4_5 = NULL;
while ( is_object( $fe_array_29a4fd674a4d61ae7e57054aef5e0da4_5 ) and method_exists( $fe_array_29a4fd674a4d61ae7e57054aef5e0da4_5, 'templateValue' ) )
    $fe_array_29a4fd674a4d61ae7e57054aef5e0da4_5 = $fe_array_29a4fd674a4d61ae7e57054aef5e0da4_5->templateValue();

$fe_array_keys_29a4fd674a4d61ae7e57054aef5e0da4_5 = is_array( $fe_array_29a4fd674a4d61ae7e57054aef5e0da4_5 ) ? array_keys( $fe_array_29a4fd674a4d61ae7e57054aef5e0da4_5 ) : array();
$fe_n_items_29a4fd674a4d61ae7e57054aef5e0da4_5 = count( $fe_array_keys_29a4fd674a4d61ae7e57054aef5e0da4_5 );
$fe_n_items_processed_29a4fd674a4d61ae7e57054aef5e0da4_5 = 0;
$fe_offset_29a4fd674a4d61ae7e57054aef5e0da4_5 = 0;
$fe_max_29a4fd674a4d61ae7e57054aef5e0da4_5 = $fe_n_items_29a4fd674a4d61ae7e57054aef5e0da4_5 - $fe_offset_29a4fd674a4d61ae7e57054aef5e0da4_5;
$fe_reverse_29a4fd674a4d61ae7e57054aef5e0da4_5 = false;
if ( $fe_offset_29a4fd674a4d61ae7e57054aef5e0da4_5 < 0 || $fe_offset_29a4fd674a4d61ae7e57054aef5e0da4_5 >= $fe_n_items_29a4fd674a4d61ae7e57054aef5e0da4_5 )
{
    $fe_offset_29a4fd674a4d61ae7e57054aef5e0da4_5 = ( $fe_offset_29a4fd674a4d61ae7e57054aef5e0da4_5 < 0 ) ? 0 : $fe_n_items_29a4fd674a4d61ae7e57054aef5e0da4_5;
    if ( $fe_n_items_29a4fd674a4d61ae7e57054aef5e0da4_5 || $fe_offset_29a4fd674a4d61ae7e57054aef5e0da4_5 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_29a4fd674a4d61ae7e57054aef5e0da4_5'. Array count: $fe_n_items_29a4fd674a4d61ae7e57054aef5e0da4_5");   
}
}
if ( $fe_max_29a4fd674a4d61ae7e57054aef5e0da4_5 < 0 || $fe_offset_29a4fd674a4d61ae7e57054aef5e0da4_5 + $fe_max_29a4fd674a4d61ae7e57054aef5e0da4_5 > $fe_n_items_29a4fd674a4d61ae7e57054aef5e0da4_5 )
{
    if ( $fe_max_29a4fd674a4d61ae7e57054aef5e0da4_5 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_29a4fd674a4d61ae7e57054aef5e0da4_5");
    $fe_max_29a4fd674a4d61ae7e57054aef5e0da4_5 = $fe_n_items_29a4fd674a4d61ae7e57054aef5e0da4_5 - $fe_offset_29a4fd674a4d61ae7e57054aef5e0da4_5;
}
if ( $fe_reverse_29a4fd674a4d61ae7e57054aef5e0da4_5 )
{
    $fe_first_val_29a4fd674a4d61ae7e57054aef5e0da4_5 = $fe_n_items_29a4fd674a4d61ae7e57054aef5e0da4_5 - 1 - $fe_offset_29a4fd674a4d61ae7e57054aef5e0da4_5;
    $fe_last_val_29a4fd674a4d61ae7e57054aef5e0da4_5  = 0;
}
else
{
    $fe_first_val_29a4fd674a4d61ae7e57054aef5e0da4_5 = $fe_offset_29a4fd674a4d61ae7e57054aef5e0da4_5;
    $fe_last_val_29a4fd674a4d61ae7e57054aef5e0da4_5  = $fe_n_items_29a4fd674a4d61ae7e57054aef5e0da4_5 - 1;
}
// foreach
for ( $fe_i_29a4fd674a4d61ae7e57054aef5e0da4_5 = $fe_first_val_29a4fd674a4d61ae7e57054aef5e0da4_5; $fe_n_items_processed_29a4fd674a4d61ae7e57054aef5e0da4_5 < $fe_max_29a4fd674a4d61ae7e57054aef5e0da4_5 && ( $fe_reverse_29a4fd674a4d61ae7e57054aef5e0da4_5 ? $fe_i_29a4fd674a4d61ae7e57054aef5e0da4_5 >= $fe_last_val_29a4fd674a4d61ae7e57054aef5e0da4_5 : $fe_i_29a4fd674a4d61ae7e57054aef5e0da4_5 <= $fe_last_val_29a4fd674a4d61ae7e57054aef5e0da4_5 ); $fe_reverse_29a4fd674a4d61ae7e57054aef5e0da4_5 ? $fe_i_29a4fd674a4d61ae7e57054aef5e0da4_5-- : $fe_i_29a4fd674a4d61ae7e57054aef5e0da4_5++ )
{
$fe_key_29a4fd674a4d61ae7e57054aef5e0da4_5 = $fe_array_keys_29a4fd674a4d61ae7e57054aef5e0da4_5[$fe_i_29a4fd674a4d61ae7e57054aef5e0da4_5];
$fe_val_29a4fd674a4d61ae7e57054aef5e0da4_5 = $fe_array_29a4fd674a4d61ae7e57054aef5e0da4_5[$fe_key_29a4fd674a4d61ae7e57054aef5e0da4_5];
$vars[$rootNamespace]['valid_node'] = $fe_val_29a4fd674a4d61ae7e57054aef5e0da4_5;
$text .= '    <li>
    	<a href=';
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

$text .= '">
    		';
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

$text .= '
		</a>
	</li>';
$fe_n_items_processed_29a4fd674a4d61ae7e57054aef5e0da4_5++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_29a4fd674a4d61ae7e57054aef5e0da4_5 ) ) extract( array_pop( $fe_variable_stack_29a4fd674a4d61ae7e57054aef5e0da4_5 ) );

else
{

unset( $fe_array_29a4fd674a4d61ae7e57054aef5e0da4_5 );

unset( $fe_array_keys_29a4fd674a4d61ae7e57054aef5e0da4_5 );

unset( $fe_n_items_29a4fd674a4d61ae7e57054aef5e0da4_5 );

unset( $fe_n_items_processed_29a4fd674a4d61ae7e57054aef5e0da4_5 );

unset( $fe_i_29a4fd674a4d61ae7e57054aef5e0da4_5 );

unset( $fe_key_29a4fd674a4d61ae7e57054aef5e0da4_5 );

unset( $fe_val_29a4fd674a4d61ae7e57054aef5e0da4_5 );

unset( $fe_offset_29a4fd674a4d61ae7e57054aef5e0da4_5 );

unset( $fe_max_29a4fd674a4d61ae7e57054aef5e0da4_5 );

unset( $fe_reverse_29a4fd674a4d61ae7e57054aef5e0da4_5 );

unset( $fe_first_val_29a4fd674a4d61ae7e57054aef5e0da4_5 );

unset( $fe_last_val_29a4fd674a4d61ae7e57054aef5e0da4_5 );

unset( $fe_variable_stack_29a4fd674a4d61ae7e57054aef5e0da4_5 );

}

// foreach ends
$text .= '</ul>
';
// undef $valid_nodes
$tpl->unsetLocalVariable( 'valid_nodes', $rootNamespace );

// undef $valid_node
$tpl->unsetLocalVariable( 'valid_node', $rootNamespace );

$text .= '
<!-- STOP: including template: extension/dcdgroup/design/group/override/templates/block/dcd_zones.tpl (extension/dcdgroup/design/group/override/templates/block/dcd_zones.tpl) -->
';

$setArray = $oldSetArray_9a953c9bc568194169a87a157d6e31cf;
$tpl->Level--;
?>
