<?php
// URI:       design:class/datatype/view/ezinteger.tpl
// Filename:  design/standard/templates/class/datatype/view/ezinteger.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_a7955e73dee949241a65849f26373f67 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: design/standard/templates/class/datatype/view/ezinteger.tpl (design:class/datatype/view/ezinteger.tpl) -->

<div class="block">
    <label>Default value:</label>
    <p>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'data_int3' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</p>
</div>

';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'data_int4' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "input_state";
else
    $namespace .= ':input_state';
$vars[$namespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$match1 = compiledFetchAttribute( $match, 'data_int4' );
unset( $match );
$match = $match1;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'input_state';

switch ( $match )
{
    case 1:
    {
$text .= '<div class="block">
    <div class="element">
        <label>Min integer value:</label>
        <p>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'data_int1' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</p>
    </div>

    <div class="element">
        <label>Max integer value:</label>
        <p><i>Empty</i></p>
    </div>

    <div class="break"></div>
</div>';
    } break;
    case 2:
    {
$text .= '<div class="block">
    <div class="element">
        <label>Min integer value:</label>
        <p><i>Empty</i></p>
    </div>

    <div class="element">
        <label>Max integer value:</label>
        <p>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'data_int2' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</p>
    </div>

    <div class="break"></div>
</div>';
    } break;
    case 3:
    {
$text .= '<div class="block">
    <div class="element">
        <label>Min integer value:</label>
        <p>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'data_int1' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</p>
    </div>

    <div class="element">
        <label>Max integer value:</label>
        <p>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'data_int2' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</p>
    </div>

    <div class="break"></div>
</div>';
    } break;
    default:
    {
$text .= '<div class="block">
    <div class="element">
        <label>Min integer value:</label>
        <p><i>Empty</i></p>
    </div>

    <div class="element">
        <label>Max integer value:</label>
        <p><i>Empty</i></p>
    </div>

    <div class="break"></div>
</div>';
    } break;
}
unset( $match );

$currentNamespace = array_pop( $namespaceStack );

$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "input_state";
else
    $namespace .= ':input_state';
unset( $vars[$namespace]['match'] );
$text .= '
<!-- STOP: including template: design/standard/templates/class/datatype/view/ezinteger.tpl (design:class/datatype/view/ezinteger.tpl) -->
';

$setArray = $oldSetArray_a7955e73dee949241a65849f26373f67;
$tpl->Level--;
?>
