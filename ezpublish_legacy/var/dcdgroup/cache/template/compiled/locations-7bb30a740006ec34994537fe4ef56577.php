<?php
// URI:       design/admin/templates/locations.tpl
// Filename:  design/admin/templates/locations.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_5beccec59e7c150738dc57987d485f9a = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: design/admin/templates/locations.tpl (design/admin/templates/locations.tpl) -->
';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'assigned_nodes' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['assigned_nodes'] = $var;
unset( $var );
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assigned_nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assigned_nodes'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['assignment_count'] = $var;
unset( $var );
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'fetchCurrentUser' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
$var1 = compiledFetchAttribute( $var, 'has_manage_locations' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['has_manage_locations'] = $var;
unset( $var );
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'can_edit' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['can_edit_node'] = $var;
unset( $var );
$vars[$currentNamespace]['can_remove_location'] = false;
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = call_user_func_array( array( new eZContentFunctionCollection(), 'checkAccess' ),
  array(     'access' => "manage_locations",
    'contentobject' => $var2,
    'contentclass_id' => false,
    'parent_contentclass_id' => false,
    'language' => false ) );
$var1 = isset( $var1['result'] ) ? $var1['result'] : null;
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = call_user_func_array( array( new eZContentFunctionCollection(), 'checkAccess' ),
  array(     'access' => "create",
    'contentobject' => $var3,
    'contentclass_id' => false,
    'parent_contentclass_id' => false,
    'language' => false ) );
$var2 = isset( $var2['result'] ) ? $var2['result'] : null;
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( $var1 )
    $var = $var1;
else if ( $var2 )
    $var = $var2;
else
    $var = false;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['can_manage_location'] = $var;
unset( $var );
$text .= '
<form name="locationsform" method="post" action="/ezdemo_site_admin/content/action">
<input type="hidden" name="ContentNodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
<input type="hidden" name="ContentObjectID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
<input type="hidden" name="ViewMode" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'viewmode', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['viewmode'] : null;
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

$text .= '" />
<input type="hidden" name="ContentObjectLanguageCode" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
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

$text .= '" />

<table id="tab-locations-list" class="list" cellspacing="0" summary="Locations (aka Nodes) for current object.">
<tr>
    <th class="tight"><img src="/design/admin/images/toggle-button-16x16.gif" width="16" height="16" alt="Invert selection." title="Invert selection." onclick="ezjs_toggleCheckboxes( document.locationsform, \'LocationIDSelection[]\' ); return false;"/></th>
    <th class="wide">Location</th>
    <th class="tight">Sub items</th>

    <th class="tight">Visibility</th>
    <th class="tight">Main</th>
</tr>';
// foreach begins
$skipDelimiter = true;
// creating sequence variables for \{foreach} loop
$foreach_sequence_array_003290d9f9336ef97da65b1744e15e85_11 = array (
  0 => 'bglight',
  1 => 'bgdark',
);
$foreach_sequence_var_003290d9f9336ef97da65b1744e15e85_11 = current( $foreach_sequence_array_003290d9f9336ef97da65b1744e15e85_11 );

if ( !isset( $fe_variable_stack_003290d9f9336ef97da65b1744e15e85_11 ) ) $fe_variable_stack_003290d9f9336ef97da65b1744e15e85_11 = array();
$fe_variable_stack_003290d9f9336ef97da65b1744e15e85_11[] = compact( 'fe_array_003290d9f9336ef97da65b1744e15e85_11', 'fe_array_keys_003290d9f9336ef97da65b1744e15e85_11', 'fe_n_items_003290d9f9336ef97da65b1744e15e85_11', 'fe_n_items_processed_003290d9f9336ef97da65b1744e15e85_11', 'fe_i_003290d9f9336ef97da65b1744e15e85_11', 'fe_key_003290d9f9336ef97da65b1744e15e85_11', 'fe_val_003290d9f9336ef97da65b1744e15e85_11', 'fe_offset_003290d9f9336ef97da65b1744e15e85_11', 'fe_max_003290d9f9336ef97da65b1744e15e85_11', 'fe_reverse_003290d9f9336ef97da65b1744e15e85_11', 'fe_first_val_003290d9f9336ef97da65b1744e15e85_11', 'fe_last_val_003290d9f9336ef97da65b1744e15e85_11' );
unset( $fe_array_003290d9f9336ef97da65b1744e15e85_11 );
unset( $fe_array_003290d9f9336ef97da65b1744e15e85_11 );
$fe_array_003290d9f9336ef97da65b1744e15e85_11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assigned_nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assigned_nodes'] : null;
if (! isset( $fe_array_003290d9f9336ef97da65b1744e15e85_11 ) ) $fe_array_003290d9f9336ef97da65b1744e15e85_11 = NULL;
while ( is_object( $fe_array_003290d9f9336ef97da65b1744e15e85_11 ) and method_exists( $fe_array_003290d9f9336ef97da65b1744e15e85_11, 'templateValue' ) )
    $fe_array_003290d9f9336ef97da65b1744e15e85_11 = $fe_array_003290d9f9336ef97da65b1744e15e85_11->templateValue();

$fe_array_keys_003290d9f9336ef97da65b1744e15e85_11 = is_array( $fe_array_003290d9f9336ef97da65b1744e15e85_11 ) ? array_keys( $fe_array_003290d9f9336ef97da65b1744e15e85_11 ) : array();
$fe_n_items_003290d9f9336ef97da65b1744e15e85_11 = count( $fe_array_keys_003290d9f9336ef97da65b1744e15e85_11 );
$fe_n_items_processed_003290d9f9336ef97da65b1744e15e85_11 = 0;
$fe_offset_003290d9f9336ef97da65b1744e15e85_11 = 0;
$fe_max_003290d9f9336ef97da65b1744e15e85_11 = $fe_n_items_003290d9f9336ef97da65b1744e15e85_11 - $fe_offset_003290d9f9336ef97da65b1744e15e85_11;
$fe_reverse_003290d9f9336ef97da65b1744e15e85_11 = false;
if ( $fe_offset_003290d9f9336ef97da65b1744e15e85_11 < 0 || $fe_offset_003290d9f9336ef97da65b1744e15e85_11 >= $fe_n_items_003290d9f9336ef97da65b1744e15e85_11 )
{
    $fe_offset_003290d9f9336ef97da65b1744e15e85_11 = ( $fe_offset_003290d9f9336ef97da65b1744e15e85_11 < 0 ) ? 0 : $fe_n_items_003290d9f9336ef97da65b1744e15e85_11;
    if ( $fe_n_items_003290d9f9336ef97da65b1744e15e85_11 || $fe_offset_003290d9f9336ef97da65b1744e15e85_11 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_003290d9f9336ef97da65b1744e15e85_11'. Array count: $fe_n_items_003290d9f9336ef97da65b1744e15e85_11");   
}
}
if ( $fe_max_003290d9f9336ef97da65b1744e15e85_11 < 0 || $fe_offset_003290d9f9336ef97da65b1744e15e85_11 + $fe_max_003290d9f9336ef97da65b1744e15e85_11 > $fe_n_items_003290d9f9336ef97da65b1744e15e85_11 )
{
    if ( $fe_max_003290d9f9336ef97da65b1744e15e85_11 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_003290d9f9336ef97da65b1744e15e85_11");
    $fe_max_003290d9f9336ef97da65b1744e15e85_11 = $fe_n_items_003290d9f9336ef97da65b1744e15e85_11 - $fe_offset_003290d9f9336ef97da65b1744e15e85_11;
}
if ( $fe_reverse_003290d9f9336ef97da65b1744e15e85_11 )
{
    $fe_first_val_003290d9f9336ef97da65b1744e15e85_11 = $fe_n_items_003290d9f9336ef97da65b1744e15e85_11 - 1 - $fe_offset_003290d9f9336ef97da65b1744e15e85_11;
    $fe_last_val_003290d9f9336ef97da65b1744e15e85_11  = 0;
}
else
{
    $fe_first_val_003290d9f9336ef97da65b1744e15e85_11 = $fe_offset_003290d9f9336ef97da65b1744e15e85_11;
    $fe_last_val_003290d9f9336ef97da65b1744e15e85_11  = $fe_n_items_003290d9f9336ef97da65b1744e15e85_11 - 1;
}
// foreach
for ( $fe_i_003290d9f9336ef97da65b1744e15e85_11 = $fe_first_val_003290d9f9336ef97da65b1744e15e85_11; $fe_n_items_processed_003290d9f9336ef97da65b1744e15e85_11 < $fe_max_003290d9f9336ef97da65b1744e15e85_11 && ( $fe_reverse_003290d9f9336ef97da65b1744e15e85_11 ? $fe_i_003290d9f9336ef97da65b1744e15e85_11 >= $fe_last_val_003290d9f9336ef97da65b1744e15e85_11 : $fe_i_003290d9f9336ef97da65b1744e15e85_11 <= $fe_last_val_003290d9f9336ef97da65b1744e15e85_11 ); $fe_reverse_003290d9f9336ef97da65b1744e15e85_11 ? $fe_i_003290d9f9336ef97da65b1744e15e85_11-- : $fe_i_003290d9f9336ef97da65b1744e15e85_11++ )
{
$fe_key_003290d9f9336ef97da65b1744e15e85_11 = $fe_array_keys_003290d9f9336ef97da65b1744e15e85_11[$fe_i_003290d9f9336ef97da65b1744e15e85_11];
$fe_val_003290d9f9336ef97da65b1744e15e85_11 = $fe_array_003290d9f9336ef97da65b1744e15e85_11[$fe_key_003290d9f9336ef97da65b1744e15e85_11];
$vars[$rootNamespace]['assignment_node'] = $fe_val_003290d9f9336ef97da65b1744e15e85_11;
// setting current sequence value
$vars[$rootNamespace]['sequence'] = $foreach_sequence_var_003290d9f9336ef97da65b1744e15e85_11;
$text .= '    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$var3 = compiledFetchAttribute( $var2, 'path' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['assignment_path'] = $var;
unset( $var );
$text .= '
<tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sequence', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sequence'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">

    
    <td>
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'can_remove' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'can_remove_location' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( $if_cond2 )
    $if_cond1 = $if_cond2;
else if ( $if_cond3 )
    $if_cond1 = $if_cond3;
else
    $if_cond1 = false;
unset( $if_cond2, $if_cond3 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'node_id' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
unset( $if_cond5 );
unset( $if_cond5 );
$if_cond5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond6 = compiledFetchAttribute( $if_cond5, 'main_node_id' );
unset( $if_cond5 );
$if_cond5 = $if_cond6;
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond3 = ( ( $if_cond4 ) == ( $if_cond5 ) );
unset( $if_cond4, $if_cond5 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = !( $if_cond3 );
unset( $if_cond3 );
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
$text .= '        <input type="checkbox" name="LocationIDSelection[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" title="Select location for removal." />
        ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'can_remove_location', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['can_remove_location'] = true;
}
$text .= '    ';
}
else
{
$text .= '        <input type="checkbox" name="LocationIDSelection[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" disabled="disabled" title="This location cannot be removed either because you do not have permission to remove it or because it is currently being displayed." />
    ';
}
unset( $if_cond );
// if ends

$text .= '    </td>

    
    ';
unset( $show );
unset( $show1 );
unset( $show2 );
unset( $show2 );
$show2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$show3 = compiledFetchAttribute( $show2, 'path_string' );
unset( $show2 );
$show2 = $show3;
if (! isset( $show2 ) ) $show2 = NULL;
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
unset( $show3 );
unset( $show3 );
$show3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$show4 = compiledFetchAttribute( $show3, 'path_string' );
unset( $show3 );
$show3 = $show4;
if (! isset( $show3 ) ) $show3 = NULL;
while ( is_object( $show3 ) and method_exists( $show3, 'templateValue' ) )
    $show3 = $show3->templateValue();
while ( is_object( $show3 ) and method_exists( $show3, 'templateValue' ) )
    $show3 = $show3->templateValue();
$show1 = ( ( $show2 ) == ( $show3 ) );
unset( $show2, $show3 );
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
unset( $show2 );
unset( $show3 );
unset( $show3 );
$show3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assigned_nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assigned_nodes'] : null;
if (! isset( $show3 ) ) $show3 = NULL;
while ( is_object( $show3 ) and method_exists( $show3, 'templateValue' ) )
    $show3 = $show3->templateValue();
$show3Data = array( 'value' => $show3 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $show3Data, false, false );
$show3 = $show3Data['value'];
unset( $show3Data );
if (! isset( $show3 ) ) $show3 = NULL;
while ( is_object( $show3 ) and method_exists( $show3, 'templateValue' ) )
    $show3 = $show3->templateValue();
$show2 = ( ( $show3 ) > ( 1 ) );
unset( $show3 );
if (! isset( $show2 ) ) $show2 = NULL;
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
if ( !$show1 )
    $show = false;
else if ( !$show2 )
    $show = false;
else
    $show = $show2;
unset( $show1, $show2 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '    <td><b>';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_path', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_path'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$variableValue = new eZTemplateSectionIterator();
$lastVariableValue = false;
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

    $variableValue->setIteratorValues( $item, $loopKey, $currentIndex - 1, $currentIndex, false, $last );
$vars[$currentNamespace]['node_path'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

if ( $currentIndex > 1 )
{
$text .= ' / ';
}

$text .= ' <a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_path', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_path'] : null;
$var2 = compiledFetchAttribute( $var1, 'url' );
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

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_path', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_path'] : null;
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

$text .= '</a>';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '</b></td>
    ';
}
else
{

unset( $show );

$text .= '    <td>';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_path', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_path'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$variableValue = new eZTemplateSectionIterator();
$lastVariableValue = false;
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

    $variableValue->setIteratorValues( $item, $loopKey, $currentIndex - 1, $currentIndex, false, $last );
$vars[$currentNamespace]['node_path'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

if ( $currentIndex > 1 )
{
$text .= ' / ';
}

$text .= ' <a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_path', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_path'] : null;
$var2 = compiledFetchAttribute( $var1, 'url' );
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

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_path', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_path'] : null;
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

$text .= '</a>';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '</td>
    ';
}

$text .= '

    
    <td class="number" align="right">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$var1 = compiledFetchAttribute( $var, 'children_count' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</td>

    


    
    <td class="nowrap">
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_invisible' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_hidden' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            Hidden
            [ <a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/content/hide/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
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

$text .= ' title="Make location and all sub items visible.">Reveal</a> ]
        ';
}
else
{
$text .= '            Hidden by superior
            [ <a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/content/hide/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
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

$text .= ' title="Hide location and all sub items.">Hide</a> ]
        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
}
else
{
$text .= '        Visible
        [ <a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/content/hide/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
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

$text .= ' title="Hide location and all sub items." >Hide</a> ]
    ';
}
unset( $if_cond );
// if ends

$text .= '    </td>

    
    <td>

    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_edit' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_count'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input type="radio" ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_main' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'checked="checked" class="main-locations-radio main-locations-radio-initial"';
}
else
{
$text .= 'class="main-locations-radio"';
}
unset( $if_cond );
// if ends

$text .= ' name="MainAssignmentCheck" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" title="Use these radio buttons to select the desired main location." />
    ';
}
else
{
$text .= '    <input type="radio" ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_main' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'checked="checked"';
}
unset( $if_cond );
// if ends

$text .= ' name="MainAssignmentCheck" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" disabled="disabled" title="The item being displayed has only one location, which is by default the main location." />
    ';
}
unset( $if_cond );
// if ends

$text .= '
    ';
}
else
{
$text .= '
    <input type="radio" ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_main' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'checked="checked"';
}
unset( $if_cond );
// if ends

$text .= ' name="MainAssignmentCheck" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" disabled="disabled" title="You cannot set the main location because you do not have permission to edit the item being displayed." />

    ';
}
unset( $if_cond );
// if ends

$text .= '
    </td>
</tr>';
unset( $vars[$currentNamespace]['assignment_path'] );
// sequence iteration
if ( ( $foreach_sequence_var_003290d9f9336ef97da65b1744e15e85_11 = next( $foreach_sequence_array_003290d9f9336ef97da65b1744e15e85_11 ) ) === false )
{
   reset( $foreach_sequence_array_003290d9f9336ef97da65b1744e15e85_11 );
   $foreach_sequence_var_003290d9f9336ef97da65b1744e15e85_11 = current( $foreach_sequence_array_003290d9f9336ef97da65b1744e15e85_11 );
}

$fe_n_items_processed_003290d9f9336ef97da65b1744e15e85_11++;
} // foreach
unset( $foreach_sequence_array_003290d9f9336ef97da65b1744e15e85_11 );

unset( $foreach_sequence_var_003290d9f9336ef97da65b1744e15e85_11 );

unset( $vars[$rootNamespace]['sequence'] );
$skipDelimiter = false;
if ( count( $fe_variable_stack_003290d9f9336ef97da65b1744e15e85_11 ) ) extract( array_pop( $fe_variable_stack_003290d9f9336ef97da65b1744e15e85_11 ) );

else
{

unset( $fe_array_003290d9f9336ef97da65b1744e15e85_11 );

unset( $fe_array_keys_003290d9f9336ef97da65b1744e15e85_11 );

unset( $fe_n_items_003290d9f9336ef97da65b1744e15e85_11 );

unset( $fe_n_items_processed_003290d9f9336ef97da65b1744e15e85_11 );

unset( $fe_i_003290d9f9336ef97da65b1744e15e85_11 );

unset( $fe_key_003290d9f9336ef97da65b1744e15e85_11 );

unset( $fe_val_003290d9f9336ef97da65b1744e15e85_11 );

unset( $fe_offset_003290d9f9336ef97da65b1744e15e85_11 );

unset( $fe_max_003290d9f9336ef97da65b1744e15e85_11 );

unset( $fe_reverse_003290d9f9336ef97da65b1744e15e85_11 );

unset( $fe_first_val_003290d9f9336ef97da65b1744e15e85_11 );

unset( $fe_last_val_003290d9f9336ef97da65b1744e15e85_11 );

unset( $fe_variable_stack_003290d9f9336ef97da65b1744e15e85_11 );

}

// foreach ends
$text .= '</table>


<input type="hidden" name="HasMainAssignment" value="1" />


<div class="block">
<div class="button-left">';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_edit_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_edit_node'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'has_manage_locations', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['has_manage_locations'] : null;
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
$text .= '
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_remove_location', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_remove_location'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input class="button" type="submit" name="RemoveAssignmentButton" value="Remove selected" title="Remove selected locations from the list above." />
    ';
}
else
{
$text .= '    <input class="button-disabled" type="submit" name="RemoveAssignmentButton" value="Remove selected" title="There is no removable location." disabled="disabled" />
    ';
}
unset( $if_cond );
// if ends

$text .= '
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_manage_location', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_manage_location'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'node_id' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) != ( '2' ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'node_id' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = ( ( $if_cond4 ) != ( '43' ) );
unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond5 );
unset( $if_cond5 );
$if_cond5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond6 = compiledFetchAttribute( $if_cond5, 'node_id' );
unset( $if_cond5 );
$if_cond5 = $if_cond6;
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond4 = ( ( $if_cond5 ) != ( '5' ) );
unset( $if_cond5 );
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else if ( !$if_cond3 )
    $if_cond = false;
else if ( !$if_cond4 )
    $if_cond = false;
else
    $if_cond = $if_cond4;
unset( $if_cond1, $if_cond2, $if_cond3, $if_cond4 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input class="button" type="submit" name="AddAssignmentButton" value="Add locations" title="Add one or more new locations." />
    ';
}
else
{
$text .= '    <input class="button-disabled" type="submit" name="AddAssignmentButton" value="Add locations" title="It is not possible to add locations to a top level node." disabled="disabled" />
    ';
}
unset( $if_cond );
// if ends

}
else
{
$text .= '    <input class="button-disabled" type="submit" name="RemoveAssignmentButton" value="Remove selected" disabled="disabled" title="You cannot remove any locations because you do not have permission to edit the current item." />
    <input class="button-disabled" type="submit" name="AddAssignmentButton" value="Add locations" disabled="disabled" title="You cannot add new locations because you do not have permission to edit the current item." />';
}
unset( $if_cond );
// if ends

$text .= '</div>

<div class="button-right">';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_edit_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_edit_node'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_count'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input id="tab-locations-list-set-main" class="button" type="submit" name="UpdateMainAssignmentButton" value="Set main" title="Select the desired main location using the radio buttons above then click this button to store the setting." />
    <script type="text/javascript">
    
    (function( $ )
    {
        $(\'#tab-locations-list input.main-locations-radio\').change(function()
        {
            if ( this.className === \'main-locations-radio\' )
                $(\'#tab-locations-list-set-main\').removeClass(\'button\').addClass(\'defaultbutton\');
            else
                $(\'#tab-locations-list-set-main\').removeClass(\'defaultbutton\').addClass(\'button\');
        });
    })( jQuery );
    
    </script>';
}
else
{
$text .= '    <input class="button-disabled" type="submit" name="UpdateMainAssignmentButton" value="Set main" disabled="disabled" title="You cannot set the main location because there is only one location present." />';
}
unset( $if_cond );
// if ends

}
else
{
$text .= '    <input class="button-disabled" type="submit" name="UpdateMainAssignmentButton" value="Set main" disabled="disabled" title="You cannot set the main location because you do not have permission to edit the current item." />';
}
unset( $if_cond );
// if ends

$text .= '</div>

<div class="break"></div>
</div>

</form>';
unset( $vars[$currentNamespace]['assigned_nodes'] );
unset( $vars[$currentNamespace]['assignment_count'] );
unset( $vars[$currentNamespace]['has_manage_locations'] );
unset( $vars[$currentNamespace]['can_edit_node'] );
unset( $vars[$currentNamespace]['can_remove_location'] );
unset( $vars[$currentNamespace]['can_manage_location'] );
$text .= '
<!-- STOP: including template: design/admin/templates/locations.tpl (design/admin/templates/locations.tpl) -->
';

$setArray = $oldSetArray_5beccec59e7c150738dc57987d485f9a;
$tpl->Level--;
?>
