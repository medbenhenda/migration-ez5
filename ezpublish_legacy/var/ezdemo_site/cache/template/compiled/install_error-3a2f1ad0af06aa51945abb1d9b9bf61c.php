<?php
// URI:       design:package/install_error.tpl
// Filename:  design/admin/templates/package/install_error.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_648f229a04deb1e7cd25348f43bdc98a = isset( $setArray ) ? $setArray : array();
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

// def $error
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'persistent_data', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['persistent_data'] : null;
$var1 = compiledFetchAttribute( $var, 'error' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'error', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'error' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 64,
  ),
  1 => 
  array (
    0 => 2,
    1 => 33,
    2 => 97,
  ),
  2 => 'design/admin/templates/package/install_error.tpl',
) );
    $tpl->setVariable( 'error', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'error', $var, $rootNamespace );
}

$text .= '<div class="box-header"><div class="box-ml">
<h1 class="context-title">
Installing package \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'package', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['package'] : null;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\'.
</h1>
<div class="header-mainline"></div>
</div></div>

<div class="box-ml"><div class="box-mr"><div class="box-content">

<div class="context-attributes">
';
// def $path
unset( $var );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'package', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['package'] : null;
$var3 = compiledFetchAttribute( $var2, 'name' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = ( 'package/install/' . $var2 );
unset( $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'path', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'path' is already defined.", array (
  0 => 
  array (
    0 => 14,
    1 => 0,
    2 => 502,
  ),
  1 => 
  array (
    0 => 14,
    1 => 53,
    2 => 555,
  ),
  2 => 'design/admin/templates/package/install_error.tpl',
) );
    $tpl->setVariable( 'path', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'path', $var, $rootNamespace );
}

$text .= '<form method="post" action=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'path', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['path'] : null;
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
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'error', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['error'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'description' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <h3>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'error', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['error'] : null;
$var1 = compiledFetchAttribute( $var, 'description' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</h3>
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'error', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['error'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'actions' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <h4>';
unset( $var );
$var = 'Please choose action:' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h4>
        <div class="optionslist">
        ';
// def $i
if ( $tpl->hasVariable( 'i', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'i' is already defined.", array (
  0 => 
  array (
    0 => 21,
    1 => 8,
    2 => 821,
  ),
  1 => 
  array (
    0 => 21,
    1 => 16,
    2 => 829,
  ),
  2 => 'design/admin/templates/package/install_error.tpl',
) );
    $tpl->setVariable( 'i', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'i', 0, $rootNamespace );
}

$text .= '        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_848d1a1dbb3dfce604dec3cde3746190_1 ) ) $fe_variable_stack_848d1a1dbb3dfce604dec3cde3746190_1 = array();
$fe_variable_stack_848d1a1dbb3dfce604dec3cde3746190_1[] = compact( 'fe_array_848d1a1dbb3dfce604dec3cde3746190_1', 'fe_array_keys_848d1a1dbb3dfce604dec3cde3746190_1', 'fe_n_items_848d1a1dbb3dfce604dec3cde3746190_1', 'fe_n_items_processed_848d1a1dbb3dfce604dec3cde3746190_1', 'fe_i_848d1a1dbb3dfce604dec3cde3746190_1', 'fe_key_848d1a1dbb3dfce604dec3cde3746190_1', 'fe_val_848d1a1dbb3dfce604dec3cde3746190_1', 'fe_offset_848d1a1dbb3dfce604dec3cde3746190_1', 'fe_max_848d1a1dbb3dfce604dec3cde3746190_1', 'fe_reverse_848d1a1dbb3dfce604dec3cde3746190_1', 'fe_first_val_848d1a1dbb3dfce604dec3cde3746190_1', 'fe_last_val_848d1a1dbb3dfce604dec3cde3746190_1' );
unset( $fe_array_848d1a1dbb3dfce604dec3cde3746190_1 );
unset( $fe_array_848d1a1dbb3dfce604dec3cde3746190_1 );
$fe_array_848d1a1dbb3dfce604dec3cde3746190_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'error', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['error'] : null;
$fe_array_848d1a1dbb3dfce604dec3cde3746190_11 = compiledFetchAttribute( $fe_array_848d1a1dbb3dfce604dec3cde3746190_1, 'actions' );
unset( $fe_array_848d1a1dbb3dfce604dec3cde3746190_1 );
$fe_array_848d1a1dbb3dfce604dec3cde3746190_1 = $fe_array_848d1a1dbb3dfce604dec3cde3746190_11;
if (! isset( $fe_array_848d1a1dbb3dfce604dec3cde3746190_1 ) ) $fe_array_848d1a1dbb3dfce604dec3cde3746190_1 = NULL;
while ( is_object( $fe_array_848d1a1dbb3dfce604dec3cde3746190_1 ) and method_exists( $fe_array_848d1a1dbb3dfce604dec3cde3746190_1, 'templateValue' ) )
    $fe_array_848d1a1dbb3dfce604dec3cde3746190_1 = $fe_array_848d1a1dbb3dfce604dec3cde3746190_1->templateValue();

$fe_array_keys_848d1a1dbb3dfce604dec3cde3746190_1 = is_array( $fe_array_848d1a1dbb3dfce604dec3cde3746190_1 ) ? array_keys( $fe_array_848d1a1dbb3dfce604dec3cde3746190_1 ) : array();
$fe_n_items_848d1a1dbb3dfce604dec3cde3746190_1 = count( $fe_array_keys_848d1a1dbb3dfce604dec3cde3746190_1 );
$fe_n_items_processed_848d1a1dbb3dfce604dec3cde3746190_1 = 0;
$fe_offset_848d1a1dbb3dfce604dec3cde3746190_1 = 0;
$fe_max_848d1a1dbb3dfce604dec3cde3746190_1 = $fe_n_items_848d1a1dbb3dfce604dec3cde3746190_1 - $fe_offset_848d1a1dbb3dfce604dec3cde3746190_1;
$fe_reverse_848d1a1dbb3dfce604dec3cde3746190_1 = false;
if ( $fe_offset_848d1a1dbb3dfce604dec3cde3746190_1 < 0 || $fe_offset_848d1a1dbb3dfce604dec3cde3746190_1 >= $fe_n_items_848d1a1dbb3dfce604dec3cde3746190_1 )
{
    $fe_offset_848d1a1dbb3dfce604dec3cde3746190_1 = ( $fe_offset_848d1a1dbb3dfce604dec3cde3746190_1 < 0 ) ? 0 : $fe_n_items_848d1a1dbb3dfce604dec3cde3746190_1;
    if ( $fe_n_items_848d1a1dbb3dfce604dec3cde3746190_1 || $fe_offset_848d1a1dbb3dfce604dec3cde3746190_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_848d1a1dbb3dfce604dec3cde3746190_1'. Array count: $fe_n_items_848d1a1dbb3dfce604dec3cde3746190_1");   
}
}
if ( $fe_max_848d1a1dbb3dfce604dec3cde3746190_1 < 0 || $fe_offset_848d1a1dbb3dfce604dec3cde3746190_1 + $fe_max_848d1a1dbb3dfce604dec3cde3746190_1 > $fe_n_items_848d1a1dbb3dfce604dec3cde3746190_1 )
{
    if ( $fe_max_848d1a1dbb3dfce604dec3cde3746190_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_848d1a1dbb3dfce604dec3cde3746190_1");
    $fe_max_848d1a1dbb3dfce604dec3cde3746190_1 = $fe_n_items_848d1a1dbb3dfce604dec3cde3746190_1 - $fe_offset_848d1a1dbb3dfce604dec3cde3746190_1;
}
if ( $fe_reverse_848d1a1dbb3dfce604dec3cde3746190_1 )
{
    $fe_first_val_848d1a1dbb3dfce604dec3cde3746190_1 = $fe_n_items_848d1a1dbb3dfce604dec3cde3746190_1 - 1 - $fe_offset_848d1a1dbb3dfce604dec3cde3746190_1;
    $fe_last_val_848d1a1dbb3dfce604dec3cde3746190_1  = 0;
}
else
{
    $fe_first_val_848d1a1dbb3dfce604dec3cde3746190_1 = $fe_offset_848d1a1dbb3dfce604dec3cde3746190_1;
    $fe_last_val_848d1a1dbb3dfce604dec3cde3746190_1  = $fe_n_items_848d1a1dbb3dfce604dec3cde3746190_1 - 1;
}
// foreach
for ( $fe_i_848d1a1dbb3dfce604dec3cde3746190_1 = $fe_first_val_848d1a1dbb3dfce604dec3cde3746190_1; $fe_n_items_processed_848d1a1dbb3dfce604dec3cde3746190_1 < $fe_max_848d1a1dbb3dfce604dec3cde3746190_1 && ( $fe_reverse_848d1a1dbb3dfce604dec3cde3746190_1 ? $fe_i_848d1a1dbb3dfce604dec3cde3746190_1 >= $fe_last_val_848d1a1dbb3dfce604dec3cde3746190_1 : $fe_i_848d1a1dbb3dfce604dec3cde3746190_1 <= $fe_last_val_848d1a1dbb3dfce604dec3cde3746190_1 ); $fe_reverse_848d1a1dbb3dfce604dec3cde3746190_1 ? $fe_i_848d1a1dbb3dfce604dec3cde3746190_1-- : $fe_i_848d1a1dbb3dfce604dec3cde3746190_1++ )
{
$fe_key_848d1a1dbb3dfce604dec3cde3746190_1 = $fe_array_keys_848d1a1dbb3dfce604dec3cde3746190_1[$fe_i_848d1a1dbb3dfce604dec3cde3746190_1];
$fe_val_848d1a1dbb3dfce604dec3cde3746190_1 = $fe_array_848d1a1dbb3dfce604dec3cde3746190_1[$fe_key_848d1a1dbb3dfce604dec3cde3746190_1];
$vars[$rootNamespace]['action'] = $fe_val_848d1a1dbb3dfce604dec3cde3746190_1;
$vars[$rootNamespace]['action_id'] = $fe_key_848d1a1dbb3dfce604dec3cde3746190_1;
$text .= '            <input class="radiobutton" id="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'action_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['action_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" type="radio" name="ActionID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'action_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['action_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'i', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['i'] : null;
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
$text .= 'checked="checked"';
}
unset( $if_cond );
// if ends

$text .= ' />';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'action', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['action'] : null;
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

$text .= '<br />
            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'i', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['i'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $var1 + 1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'i', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['i'] = $var;
    unset( $var );
}
$text .= '        ';
$fe_n_items_processed_848d1a1dbb3dfce604dec3cde3746190_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_848d1a1dbb3dfce604dec3cde3746190_1 ) ) extract( array_pop( $fe_variable_stack_848d1a1dbb3dfce604dec3cde3746190_1 ) );

else
{

unset( $fe_array_848d1a1dbb3dfce604dec3cde3746190_1 );

unset( $fe_array_keys_848d1a1dbb3dfce604dec3cde3746190_1 );

unset( $fe_n_items_848d1a1dbb3dfce604dec3cde3746190_1 );

unset( $fe_n_items_processed_848d1a1dbb3dfce604dec3cde3746190_1 );

unset( $fe_i_848d1a1dbb3dfce604dec3cde3746190_1 );

unset( $fe_key_848d1a1dbb3dfce604dec3cde3746190_1 );

unset( $fe_val_848d1a1dbb3dfce604dec3cde3746190_1 );

unset( $fe_offset_848d1a1dbb3dfce604dec3cde3746190_1 );

unset( $fe_max_848d1a1dbb3dfce604dec3cde3746190_1 );

unset( $fe_reverse_848d1a1dbb3dfce604dec3cde3746190_1 );

unset( $fe_first_val_848d1a1dbb3dfce604dec3cde3746190_1 );

unset( $fe_last_val_848d1a1dbb3dfce604dec3cde3746190_1 );

unset( $fe_variable_stack_848d1a1dbb3dfce604dec3cde3746190_1 );

}

// foreach ends
$text .= '        </div>
        <br />
        <label for="RememberAction"><input class="checkbox" id="RememberAction" type="checkbox" name="RememberAction"/>Use this choice for all the items</label>
    ';
}
else
{
$text .= '        <p>Element with ID \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'error', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['error'] : null;
$var1 = compiledFetchAttribute( $var, 'element_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\' will not be installed.</p>
    ';
}
unset( $if_cond );
// if ends

}
else
{
$text .= '    <h3>Unhandled installation error has occurred.</h3>';
}
unset( $if_cond );
// if ends

$text .= '</div>
</div></div></div>

<div class="controlbar">
<div class="box-bc"><div class="box-ml">
    <div class="block">
        <input class="button" type="submit" name="HandleError" value="Continue" />
        <input class="button" type="submit" name="SkipPackageButton" value="Cancel installation" />
    </div>
</div></div>
</div>
</form>
';

$setArray = $oldSetArray_648f229a04deb1e7cd25348f43bdc98a;
$tpl->Level--;
?>
