<?php
// URI:       design:content/datatype/view/ezselection.tpl
// Filename:  design/standard/templates/content/datatype/view/ezselection.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_8a7c9be0e409e81e31def6328384a03b = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: design/standard/templates/content/datatype/view/ezselection.tpl (design:content/datatype/view/ezselection.tpl) -->
';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['selected_id_array'] = $var;
unset( $var );
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'class_content' );
unset( $loopItem );
$loopItem = $loopItem1;
$loopItem1 = compiledFetchAttribute( $loopItem, 'options' );
unset( $loopItem );
$loopItem = $loopItem1;
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
$vars[$currentNamespace]['Options'] = $variableValue;
$matchValue = true;
unset( $tmpMatchValue );
unset( $tmpMatchValue1 );
unset( $tmpMatchValue2 );
unset( $tmpMatchValue2 );
$tmpMatchValue2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'selected_id_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['selected_id_array'] : null;
if (! isset( $tmpMatchValue2 ) ) $tmpMatchValue2 = NULL;
while ( is_object( $tmpMatchValue2 ) and method_exists( $tmpMatchValue2, 'templateValue' ) )
    $tmpMatchValue2 = $tmpMatchValue2->templateValue();
while ( is_object( $tmpMatchValue2 ) and method_exists( $tmpMatchValue2, 'templateValue' ) )
    $tmpMatchValue2 = $tmpMatchValue2->templateValue();
unset( $tmpMatchValue3 );
unset( $tmpMatchValue3 );
$tmpMatchValue3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Options', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Options'] : null;
$tmpMatchValue4 = compiledFetchAttribute( $tmpMatchValue3, 'item' );
unset( $tmpMatchValue3 );
$tmpMatchValue3 = $tmpMatchValue4;
$tmpMatchValue4 = compiledFetchAttribute( $tmpMatchValue3, 'id' );
unset( $tmpMatchValue3 );
$tmpMatchValue3 = $tmpMatchValue4;
if (! isset( $tmpMatchValue3 ) ) $tmpMatchValue3 = NULL;
while ( is_object( $tmpMatchValue3 ) and method_exists( $tmpMatchValue3, 'templateValue' ) )
    $tmpMatchValue3 = $tmpMatchValue3->templateValue();
while ( is_object( $tmpMatchValue3 ) and method_exists( $tmpMatchValue3, 'templateValue' ) )
    $tmpMatchValue3 = $tmpMatchValue3->templateValue();
if( is_string( $tmpMatchValue2 ) )
{
  $tmpMatchValue1 = ( strpos( $tmpMatchValue2, $tmpMatchValue3 ) !== false );
}
else if ( is_array( $tmpMatchValue2 ) )
{
  $tmpMatchValue1 = in_array( $tmpMatchValue3, $tmpMatchValue2 );
}
else
{
$tmpMatchValue1 = false;
}unset( $tmpMatchValue2, $tmpMatchValue3 );
if (! isset( $tmpMatchValue1 ) ) $tmpMatchValue1 = NULL;
while ( is_object( $tmpMatchValue1 ) and method_exists( $tmpMatchValue1, 'templateValue' ) )
    $tmpMatchValue1 = $tmpMatchValue1->templateValue();
$tmpMatchValue = !( $tmpMatchValue1 );
unset( $tmpMatchValue1 );
if (! isset( $tmpMatchValue ) ) $tmpMatchValue = NULL;
while ( is_object( $tmpMatchValue ) and method_exists( $tmpMatchValue, 'templateValue' ) )
    $tmpMatchValue = $tmpMatchValue->templateValue();

if ( $tmpMatchValue )
    $matchValue = false;
if ( $matchValue )
{

$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

if ( $currentIndex > 1 )
{
$text .= '<br/>';
}

unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Options', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Options'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
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

list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
    }
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
unset( $vars[$currentNamespace]['selected_id_array'] );
$text .= '
<!-- STOP: including template: design/standard/templates/content/datatype/view/ezselection.tpl (design:content/datatype/view/ezselection.tpl) -->
';

$setArray = $oldSetArray_8a7c9be0e409e81e31def6328384a03b;
$tpl->Level--;
?>
