<?php
// URI:       extension/ezdemo/design/ezdemo/override/templates/block/content_grid_2cols_2rows.tpl
// Filename:  extension/ezdemo/design/ezdemo/override/templates/block/content_grid_2cols_2rows.tpl
// Timestamp: 1360064234 (Tue Feb 5 12:37:14 CET 2013)
$oldSetArray_0b40d8364275f5558db881f64a417b3a = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/ezdemo_site/cache/template/compiled/common.php' );

$text .= '
<!-- START: including template: extension/ezdemo/design/ezdemo/override/templates/block/content_grid_2cols_2rows.tpl (extension/ezdemo/design/ezdemo/override/templates/block/content_grid_2cols_2rows.tpl) -->
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
  2 => 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_2cols_2rows.tpl',
) );
    $tpl->setVariable( 'valid_nodes', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'valid_nodes', $var, $rootNamespace );
}

$text .= '
<div class="block-type-content-grid block-view-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'view' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">

    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'name' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( '' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="attribute-header">
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
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h2>
    </div>
    ';
}
unset( $if_cond );
// if ends

$text .= '
    <div class="row">
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_9b8d2e5554a034c7313dd2b9082662b2_4 ) ) $fe_variable_stack_9b8d2e5554a034c7313dd2b9082662b2_4 = array();
$fe_variable_stack_9b8d2e5554a034c7313dd2b9082662b2_4[] = compact( 'fe_array_9b8d2e5554a034c7313dd2b9082662b2_4', 'fe_array_keys_9b8d2e5554a034c7313dd2b9082662b2_4', 'fe_n_items_9b8d2e5554a034c7313dd2b9082662b2_4', 'fe_n_items_processed_9b8d2e5554a034c7313dd2b9082662b2_4', 'fe_i_9b8d2e5554a034c7313dd2b9082662b2_4', 'fe_key_9b8d2e5554a034c7313dd2b9082662b2_4', 'fe_val_9b8d2e5554a034c7313dd2b9082662b2_4', 'fe_offset_9b8d2e5554a034c7313dd2b9082662b2_4', 'fe_max_9b8d2e5554a034c7313dd2b9082662b2_4', 'fe_reverse_9b8d2e5554a034c7313dd2b9082662b2_4', 'fe_first_val_9b8d2e5554a034c7313dd2b9082662b2_4', 'fe_last_val_9b8d2e5554a034c7313dd2b9082662b2_4' );
unset( $fe_array_9b8d2e5554a034c7313dd2b9082662b2_4 );
unset( $fe_array_9b8d2e5554a034c7313dd2b9082662b2_4 );
$fe_array_9b8d2e5554a034c7313dd2b9082662b2_4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_nodes'] : null;
if (! isset( $fe_array_9b8d2e5554a034c7313dd2b9082662b2_4 ) ) $fe_array_9b8d2e5554a034c7313dd2b9082662b2_4 = NULL;
while ( is_object( $fe_array_9b8d2e5554a034c7313dd2b9082662b2_4 ) and method_exists( $fe_array_9b8d2e5554a034c7313dd2b9082662b2_4, 'templateValue' ) )
    $fe_array_9b8d2e5554a034c7313dd2b9082662b2_4 = $fe_array_9b8d2e5554a034c7313dd2b9082662b2_4->templateValue();

$fe_array_keys_9b8d2e5554a034c7313dd2b9082662b2_4 = is_array( $fe_array_9b8d2e5554a034c7313dd2b9082662b2_4 ) ? array_keys( $fe_array_9b8d2e5554a034c7313dd2b9082662b2_4 ) : array();
$fe_n_items_9b8d2e5554a034c7313dd2b9082662b2_4 = count( $fe_array_keys_9b8d2e5554a034c7313dd2b9082662b2_4 );
$fe_n_items_processed_9b8d2e5554a034c7313dd2b9082662b2_4 = 0;
$fe_offset_9b8d2e5554a034c7313dd2b9082662b2_4 = 0;
$fe_max_9b8d2e5554a034c7313dd2b9082662b2_4 = 4;
$fe_reverse_9b8d2e5554a034c7313dd2b9082662b2_4 = false;
if ( $fe_offset_9b8d2e5554a034c7313dd2b9082662b2_4 < 0 || $fe_offset_9b8d2e5554a034c7313dd2b9082662b2_4 >= $fe_n_items_9b8d2e5554a034c7313dd2b9082662b2_4 )
{
    $fe_offset_9b8d2e5554a034c7313dd2b9082662b2_4 = ( $fe_offset_9b8d2e5554a034c7313dd2b9082662b2_4 < 0 ) ? 0 : $fe_n_items_9b8d2e5554a034c7313dd2b9082662b2_4;
    if ( $fe_n_items_9b8d2e5554a034c7313dd2b9082662b2_4 || $fe_offset_9b8d2e5554a034c7313dd2b9082662b2_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_9b8d2e5554a034c7313dd2b9082662b2_4'. Array count: $fe_n_items_9b8d2e5554a034c7313dd2b9082662b2_4");   
}
}
if ( $fe_max_9b8d2e5554a034c7313dd2b9082662b2_4 < 0 || $fe_offset_9b8d2e5554a034c7313dd2b9082662b2_4 + $fe_max_9b8d2e5554a034c7313dd2b9082662b2_4 > $fe_n_items_9b8d2e5554a034c7313dd2b9082662b2_4 )
{
    if ( $fe_max_9b8d2e5554a034c7313dd2b9082662b2_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_9b8d2e5554a034c7313dd2b9082662b2_4");
    $fe_max_9b8d2e5554a034c7313dd2b9082662b2_4 = $fe_n_items_9b8d2e5554a034c7313dd2b9082662b2_4 - $fe_offset_9b8d2e5554a034c7313dd2b9082662b2_4;
}
if ( $fe_reverse_9b8d2e5554a034c7313dd2b9082662b2_4 )
{
    $fe_first_val_9b8d2e5554a034c7313dd2b9082662b2_4 = $fe_n_items_9b8d2e5554a034c7313dd2b9082662b2_4 - 1 - $fe_offset_9b8d2e5554a034c7313dd2b9082662b2_4;
    $fe_last_val_9b8d2e5554a034c7313dd2b9082662b2_4  = 0;
}
else
{
    $fe_first_val_9b8d2e5554a034c7313dd2b9082662b2_4 = $fe_offset_9b8d2e5554a034c7313dd2b9082662b2_4;
    $fe_last_val_9b8d2e5554a034c7313dd2b9082662b2_4  = $fe_n_items_9b8d2e5554a034c7313dd2b9082662b2_4 - 1;
}
// foreach
for ( $fe_i_9b8d2e5554a034c7313dd2b9082662b2_4 = $fe_first_val_9b8d2e5554a034c7313dd2b9082662b2_4; $fe_n_items_processed_9b8d2e5554a034c7313dd2b9082662b2_4 < $fe_max_9b8d2e5554a034c7313dd2b9082662b2_4 && ( $fe_reverse_9b8d2e5554a034c7313dd2b9082662b2_4 ? $fe_i_9b8d2e5554a034c7313dd2b9082662b2_4 >= $fe_last_val_9b8d2e5554a034c7313dd2b9082662b2_4 : $fe_i_9b8d2e5554a034c7313dd2b9082662b2_4 <= $fe_last_val_9b8d2e5554a034c7313dd2b9082662b2_4 ); $fe_reverse_9b8d2e5554a034c7313dd2b9082662b2_4 ? $fe_i_9b8d2e5554a034c7313dd2b9082662b2_4-- : $fe_i_9b8d2e5554a034c7313dd2b9082662b2_4++ )
{
$fe_key_9b8d2e5554a034c7313dd2b9082662b2_4 = $fe_array_keys_9b8d2e5554a034c7313dd2b9082662b2_4[$fe_i_9b8d2e5554a034c7313dd2b9082662b2_4];
$fe_val_9b8d2e5554a034c7313dd2b9082662b2_4 = $fe_array_9b8d2e5554a034c7313dd2b9082662b2_4[$fe_key_9b8d2e5554a034c7313dd2b9082662b2_4];
$vars[$rootNamespace]['valid_node'] = $fe_val_9b8d2e5554a034c7313dd2b9082662b2_4;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
if ( ( ( $fe_i_9b8d2e5554a034c7313dd2b9082662b2_4 ) % 2 ) == 0 ) // Check modulo
{
$text .= '        </div>
        <div class="row">
        ';
}

} // delimiter ends

$text .= '        <div class="span4">
        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_node'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['node'] = $var;
unset( $var );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['image_class'] = 'contentgrid';
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
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentobject_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent_node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'depth' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["depth"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'url_alias' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["url_alias"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_object_remote_id"] = $dKey;
unset( $dKey );

if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/article-833406b43403f1917e6ce0d8d2a4ee01.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block_item/article.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/article-833406b43403f1917e6ce0d8d2a4ee01.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block_item/article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/comment-67dc5648b49310a1e9a169b212542abf.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block_item/comment.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/comment-67dc5648b49310a1e9a169b212542abf.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block_item/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "image", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "image" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/image-bcfec891b07b09129df7964ef5142889.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block_item/image.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/image-bcfec891b07b09129df7964ef5142889.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block_item/image.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "product", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "product" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/product-87925e81373fe6746edb2ea77ffecb61.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block_item/product.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/product-87925e81373fe6746edb2ea77ffecb61.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block_item/product.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else 
{

if (false)
{
}
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/node/view/block_item.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );

}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['node'] );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['image_class'] );
$text .= '        </div>

            ';
$fe_n_items_processed_9b8d2e5554a034c7313dd2b9082662b2_4++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_9b8d2e5554a034c7313dd2b9082662b2_4 ) ) extract( array_pop( $fe_variable_stack_9b8d2e5554a034c7313dd2b9082662b2_4 ) );

else
{

unset( $fe_array_9b8d2e5554a034c7313dd2b9082662b2_4 );

unset( $fe_array_keys_9b8d2e5554a034c7313dd2b9082662b2_4 );

unset( $fe_n_items_9b8d2e5554a034c7313dd2b9082662b2_4 );

unset( $fe_n_items_processed_9b8d2e5554a034c7313dd2b9082662b2_4 );

unset( $fe_i_9b8d2e5554a034c7313dd2b9082662b2_4 );

unset( $fe_key_9b8d2e5554a034c7313dd2b9082662b2_4 );

unset( $fe_val_9b8d2e5554a034c7313dd2b9082662b2_4 );

unset( $fe_offset_9b8d2e5554a034c7313dd2b9082662b2_4 );

unset( $fe_max_9b8d2e5554a034c7313dd2b9082662b2_4 );

unset( $fe_reverse_9b8d2e5554a034c7313dd2b9082662b2_4 );

unset( $fe_first_val_9b8d2e5554a034c7313dd2b9082662b2_4 );

unset( $fe_last_val_9b8d2e5554a034c7313dd2b9082662b2_4 );

unset( $fe_variable_stack_9b8d2e5554a034c7313dd2b9082662b2_4 );

}

// foreach ends
$text .= '    </div>

</div>
';
// undef $valid_nodes
$tpl->unsetLocalVariable( 'valid_nodes', $rootNamespace );

$text .= '
<!-- STOP: including template: extension/ezdemo/design/ezdemo/override/templates/block/content_grid_2cols_2rows.tpl (extension/ezdemo/design/ezdemo/override/templates/block/content_grid_2cols_2rows.tpl) -->
';

$setArray = $oldSetArray_0b40d8364275f5558db881f64a417b3a;
$tpl->Level--;
?>
