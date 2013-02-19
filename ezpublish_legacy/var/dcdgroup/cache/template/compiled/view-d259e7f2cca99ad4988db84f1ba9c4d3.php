<?php
// URI:       design:class/view.tpl
// Filename:  design/admin/templates/class/view.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_1c9f38f1624a7219efb9dca94c18d39f = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: design/admin/templates/class/view.tpl (design:class/view.tpl) -->
';
$oldRestoreIncludeArray_67bf8c9e6c4adc4352c19f19a218c15a = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/window_controls-c6ae6361cc514ce0b3db64ac567ee0b2.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/class/window_controls.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/window_controls-c6ae6361cc514ce0b3db64ac567ee0b2.php' );
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
$tpl->processURI( 'design/admin/templates/class/window_controls.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_67bf8c9e6c4adc4352c19f19a218c15a;

unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'validation', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['validation'] : null;
$show1 = compiledFetchAttribute( $show, 'processed' );
unset( $show );
$show = $show1;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'validation', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['validation'] : null;
$show1 = compiledFetchAttribute( $show, 'groups' );
unset( $show );
$show = $show1;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '<div class="message-warning">
<h2><span class="time">[';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
$var1 = time();
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ']</span> Input did not validate</h2>
<ul>';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'validation', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['validation'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'groups' );
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
$vars[$currentNamespace]['item'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '    <li>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'text' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</li>';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '</ul>
</div>';
}

}

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'scheduled_script_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['scheduled_script_id'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="message-warning">
        <h2><span class="time">[';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
$var1 = time();
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ']</span> Class storing deferred</h2>
        <p>
            The storing of the class has been deferred because existing objects need to be updated. The process has been scheduled to run in the background and will be started automatically. Please do not edit the class again until the process has finished. You can monitor the progress of the background process here:<br />
            <b><a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'scheduled_script_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['scheduled_script_id'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'scriptmonitor/view/' . $var3 );
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

$text .= '>Background process monitor</a></b>
        </p>
    </div>';
}
unset( $if_cond );
// if ends

$text .= '
<div class="context-block">
<div class="box-header">
<h1 class="context-title" title="Class name and number of objects">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var1 = compiledFetchAttribute( $var, 'identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'class_icon',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'normal',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'class',
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
          1 => 'nameList',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 4,
          1 => 
          array (
            0 => '',
            1 => 2,
            2 => 'language_code',
          ),
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'wash',
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '&nbsp;';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var2 = compiledFetchAttribute( $var1, 'nameList' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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

$text .= ' [';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var1 = compiledFetchAttribute( $var, 'object_count' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' objects]</h1>

<div class="header-mainline"></div>

</div>

<div class="box-content">

<div class="context-information">
<p class="left modified">';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var5 = compiledFetchAttribute( $var4, 'modifier' );
unset( $var4 );
$var4 = $var5;
$var5 = compiledFetchAttribute( $var4, 'contentobject' );
unset( $var4 );
$var4 = $var5;
$var5 = compiledFetchAttribute( $var4, 'name' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var7 = compiledFetchAttribute( $var6, 'modified' );
unset( $var6 );
$var6 = $var7;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
unset( $var7 );
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
unset( $var8 );
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();

$var5 = $locale->formatShortDateTime( $var6 );
unset( $var6, $var7, $var8 );
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var3 = array( '%username' => $var4, '%time' => $var5 );unset( $var4, $var5 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var4 = array();
foreach ( $var3 as $var5 => $var6 )
{
  if ( is_int( $var5 ) )
    $var4['%' . ( ($var5%9) + 1 )] = $var6;
  else
    $var4[$var5] = $var6;
}
$var1 = strtr( 'Last modified: %time, %username', $var4 );
unset( $var3, $var4, $var5, $var6 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</p>';
// def $locale
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchLocale' ),
  array(     'locale_code' => $var1 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'locale', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'locale' is already defined.", array (
  0 => 
  array (
    0 => 38,
    1 => 0,
    2 => 1915,
  ),
  1 => 
  array (
    0 => 38,
    1 => 81,
    2 => 1996,
  ),
  2 => 'design/admin/templates/class/view.tpl',
) );
    $tpl->setVariable( 'locale', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'locale', $var, $rootNamespace );
}

$text .= '<p class="right translation">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
$var1 = compiledFetchAttribute( $var, 'intl_language_name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '&nbsp;<img src="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'flag_icon',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" width="18" height="12" alt="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" style="vertical-align: middle;" /></p>';
// undef $locale
$tpl->unsetLocalVariable( 'locale', $rootNamespace );

$text .= '<div class="break"></div>
</div>

<div class="context-attributes">

<div class="block">
<div class="left">
    <div class="block">
        <h6>Name:</h6>
        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var2 = compiledFetchAttribute( $var1, 'nameList' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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
    </div>

    <div class="block">
        <h6>Identifier:</h6>
        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var2 = compiledFetchAttribute( $var1, 'identifier' );
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
    </div>

    <div class="block">
        <h6>Description:</h6>
        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var2 = compiledFetchAttribute( $var1, 'descriptionList' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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
    </div>

    <div class="block">
        <h6>Object name pattern:</h6>
        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var2 = compiledFetchAttribute( $var1, 'contentobject_name' );
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
    </div>

    <div class="block">
        <h6>URL alias name pattern:</h6>
        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias_name' );
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
    </div>
</div>

<div class="right">
    <div class="block">
        <h6>Container:</h6>
        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'is_container' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            Yes
        ';
}
else
{
$text .= '            No
        ';
}
unset( $if_cond );
// if ends

$text .= '    </div>

    <div class="block">
        <h6>Default object availability:</h6>
        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'always_available' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
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
$text .= '            Not available
        ';
}
else
{
$text .= '            Available
        ';
}
unset( $if_cond );
// if ends

$text .= '    </div>

    
    <div class="block">
    <h6>Default sorting of children:</h6>
    ';
// def $sort_fields
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchAvailableSortFieldList' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'sort_fields', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'sort_fields' is already defined.", array (
  0 => 
  array (
    0 => 96,
    1 => 4,
    2 => 3815,
  ),
  1 => 
  array (
    0 => 96,
    1 => 60,
    2 => 3871,
  ),
  2 => 'design/admin/templates/class/view.tpl',
) );
    $tpl->setVariable( 'sort_fields', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'sort_fields', $var, $rootNamespace );
}

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sort_fields', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sort_fields'] : null;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'sort_field' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = compiledFetchAttribute( $if_cond1, $if_cond3 );
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
$text .= ' ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sort_fields', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sort_fields'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var3 = compiledFetchAttribute( $var2, 'sort_field' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' ';
}
else
{
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var1 = compiledFetchAttribute( $var, 'sort_field' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

}
unset( $if_cond );
// if ends

$text .= ' / ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'sort_order' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
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
unset( $var );
$var = 'Descending';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

}
else
{
unset( $var );
$var = 'Ascending';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

}
unset( $if_cond );
// if ends

$text .= '    ';
// undef $sort_fields
$tpl->unsetLocalVariable( 'sort_fields', $rootNamespace );

$text .= '</div>

    <div class="block">
        <h6>Object count:</h6>
        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var1 = compiledFetchAttribute( $var, 'object_count' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
    </div>
</div>
<div class="float-break"></div>
</div>

<h2>Attributes</h2>
<table class="special" cellspacing="0">
';
// def $attribute_categorys
if ( $tpl->hasVariable( 'attribute_categorys', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'attribute_categorys' is already defined.", array (
  0 => 
  array (
    0 => 111,
    1 => 0,
    2 => 4440,
  ),
  1 => 
  array (
    0 => 112,
    1 => 102,
    2 => 4641,
  ),
  2 => 'design/admin/templates/class/view.tpl',
) );
    $tpl->setVariable( 'attribute_categorys', array (
  'content' => 'Content',
  'meta' => 'Meta',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'attribute_categorys', array (
  'content' => 'Content',
  'meta' => 'Meta',
), $rootNamespace );
}

// def $attribute_default_category
if ( $tpl->hasVariable( 'attribute_default_category', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'attribute_default_category' is already defined.", array (
  0 => 
  array (
    0 => 111,
    1 => 0,
    2 => 4440,
  ),
  1 => 
  array (
    0 => 112,
    1 => 102,
    2 => 4641,
  ),
  2 => 'design/admin/templates/class/view.tpl',
) );
    $tpl->setVariable( 'attribute_default_category', 'content', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'attribute_default_category', 'content', $rootNamespace );
}

unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attributes'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$sequence = array (
  0 => 'bglight',
  1 => 'bgdark',
);
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
$vars[$currentNamespace]['Attributes'] = $variableValue;
if ( is_array( $sequence ) )
{
    $sequenceValue = array_shift( $sequence );
    $variableValue->setSequence( $sequenceValue );
    $sequence[] = $sequenceValue;
    unset( $sequenceValue );
}
$vars[$currentNamespace]['Attributes'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence );
unset( $loopItem, $loopKeys );

$text .= '
<tr>
    <th colspan="5">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'number' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '.&nbsp;';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'nameList' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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

$text .= '&nbsp;[';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_type' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'information' );
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

$text .= ']&nbsp;(id:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
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

$text .= ')</th>
</tr>

<tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'sequence' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
    <td>
        <input type="hidden" name="ContentAttribute_id[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
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
        <input type="hidden" name="ContentAttribute_position[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'placement' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />

        <div class="block">
            <h6>Name:</h6>
            <p>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'nameList' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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

$text .= '</p>
        </div>
    </td>

    <td class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'sequence' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
        <div class="block">
            <h6>Identifier:</h6>
            <p>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'identifier' );
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

$text .= '</p>
        </div>
    </td>

    <td class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'sequence' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
        <div class="block">
            <h6>Category:</h6>
	        ';
unset( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_6 );
unset( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_61 );
unset( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_61 );
$elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_61 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_categorys', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_categorys'] : null;
unset( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_63 );
unset( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_63 );
$elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_63 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_64 = compiledFetchAttribute( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_63, 'item' );
unset( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_63 );
$elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_63 = $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_64;
$elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_64 = compiledFetchAttribute( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_63, 'category' );
unset( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_63 );
$elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_63 = $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_64;
if (! isset( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_63 ) ) $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_63 = NULL;
while ( is_object( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_63 ) and method_exists( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_63, 'templateValue' ) )
    $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_63 = $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_63->templateValue();
$elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_62 = compiledFetchAttribute( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_61, $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_63 );
unset( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_61 );
$elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_61 = $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_62;
if (! isset( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_61 ) ) $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_61 = NULL;
while ( is_object( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_61 ) and method_exists( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_61, 'templateValue' ) )
    $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_61 = $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_61->templateValue();
while ( is_object( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_61 ) and method_exists( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_61, 'templateValue' ) )
    $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_61 = $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_61->templateValue();
$elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_6 = isset( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_61 );unset( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_61 );
if (! isset( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_6 ) ) $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_6 = NULL;
while ( is_object( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_6 ) and method_exists( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_6, 'templateValue' ) )
    $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_6 = $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_6->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'item' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'category' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !( $if_cond1 );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '	            <p>Default (';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_categorys', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_categorys'] : null;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_default_category', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_default_category'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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

$text .= ')</p>
	        ';
}
elseif ( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_6 )
{
$text .= '                <p>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_categorys', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_categorys'] : null;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var4 = compiledFetchAttribute( $var3, 'item' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'category' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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

$text .= '</p>
            ';
}
else
{
$text .= '                <p>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_categorys', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_categorys'] : null;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_default_category', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_default_category'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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

$text .= '</p>
            ';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_b26ff47f868c67f0da065d2b0ba0a72a_6 );

$text .= '        </div>
    </td>

    <td class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'sequence' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
        <div class="block">
            <h6>Description:</h6>
            <p>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'descriptionList' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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

$text .= '</p>
        </div>
    </td>

    <td rowspan="2">

		<div class="block">
		  <h6>Flags:</h6>
		</div>

        <div class="block">
            <p>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'item' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_required' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
$var = 'Is required';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

}
else
{
unset( $var );
$var = 'Is not required';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

}
unset( $if_cond );
// if ends

$text .= '</p>
        </div>

        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'item' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_type' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_indexable' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <div class="block">
            <p>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'item' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_searchable' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
$var = 'Is searchable';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

}
else
{
unset( $var );
$var = 'Is not searchable';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

}
unset( $if_cond );
// if ends

$text .= '</p>
        </div>
        ';
}
else
{
$text .= '        <div class="block">
            <p>Is not searchable</p>
        </div>
        ';
}
unset( $if_cond );
// if ends

$text .= '
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'item' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_type' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_information_collector' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <div class="block">
            <p>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'item' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_information_collector' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
$var = 'Collects information';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

}
else
{
unset( $var );
$var = 'Does not collect information';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

}
unset( $if_cond );
// if ends

$text .= '</p>
        </div>
        ';
}
else
{
$text .= '        <div class="block">
            <p>Does not collect information</p>
        </div>
        ';
}
unset( $if_cond );
// if ends

$text .= '
        <div class="block">
            <p>';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'item' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'can_translate' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( 0 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'item' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'data_type' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'properties' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'translation_allowed' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = !( $if_cond3 );
unset( $if_cond3 );
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
unset( $var );
$var = 'Translation is disabled';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

}
else
{
unset( $var );
$var = 'Translation is enabled';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

}
unset( $if_cond );
// if ends

$text .= '</p>
        </div>
    </td>
</tr>

<tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'sequence' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
    <td colspan="4">
        ';
$textElements = array();
$tpl->processFunction( 'class_attribute_view_gui', $textElements,
                       false,
                       array (
  'class_attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'Attributes',
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
          1 => 'item',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 196,
    1 => 8,
    2 => 8017,
  ),
  1 => 
  array (
    0 => 196,
    1 => 65,
    2 => 8074,
  ),
  2 => 'design/admin/templates/class/view.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    </td>
</tr>';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem, $sequence );
// undef $attribute_categorys
$tpl->unsetLocalVariable( 'attribute_categorys', $rootNamespace );

// undef $attribute_default_category
$tpl->unsetLocalVariable( 'attribute_default_category', $rootNamespace );

$text .= '
</table>

</div>

</div>
<div class="block">
<div class="controlbar">
<div class="box-bc">
        <form action=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var4 = compiledFetchAttribute( $var3, 'id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/class/edit/' . $var3 );
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

$text .= ' method="post">

            ';
// def $languages
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var1 = compiledFetchAttribute( $var, 'prioritized_languages' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'languages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'languages' is already defined.", array (
  0 => 
  array (
    0 => 213,
    1 => 12,
    2 => 8403,
  ),
  1 => 
  array (
    0 => 214,
    1 => 82,
    2 => 8529,
  ),
  2 => 'design/admin/templates/class/view.tpl',
) );
    $tpl->setVariable( 'languages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'languages', $var, $rootNamespace );
}

// def $availableLanguages
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchPrioritizedLanguages' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'availableLanguages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'availableLanguages' is already defined.", array (
  0 => 
  array (
    0 => 213,
    1 => 12,
    2 => 8403,
  ),
  1 => 
  array (
    0 => 214,
    1 => 82,
    2 => 8529,
  ),
  2 => 'design/admin/templates/class/view.tpl',
) );
    $tpl->setVariable( 'availableLanguages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'availableLanguages', $var, $rootNamespace );
}

$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'availableLanguages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['availableLanguages'] : null;
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
$if_cond1 = ( ( $if_cond2 ) == ( 1 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['languages'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond3Data = array( 'value' => $if_cond3 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond3Data, false, false );
$if_cond3 = $if_cond3Data['value'];
unset( $if_cond3Data );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) == ( 1 ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['languages'] : null;
unset( $if_cond6 );
unset( $if_cond6 );
$if_cond6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'availableLanguages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['availableLanguages'] : null;
$if_cond7 = compiledFetchAttribute( $if_cond6, 0 );
unset( $if_cond6 );
$if_cond6 = $if_cond7;
$if_cond7 = compiledFetchAttribute( $if_cond6, 'locale' );
unset( $if_cond6 );
$if_cond6 = $if_cond7;
if (! isset( $if_cond6 ) ) $if_cond6 = NULL;
while ( is_object( $if_cond6 ) and method_exists( $if_cond6, 'templateValue' ) )
    $if_cond6 = $if_cond6->templateValue();
$if_cond5 = compiledFetchAttribute( $if_cond4, $if_cond6 );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = isset( $if_cond4 );unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else if ( !$if_cond3 )
    $if_cond = false;
else
    $if_cond = $if_cond3;
unset( $if_cond1, $if_cond2, $if_cond3 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                <input type="hidden" name="EditLanguage" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'availableLanguages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['availableLanguages'] : null;
$var2 = compiledFetchAttribute( $var1, 0 );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'locale' );
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

$text .= '" />
            ';
}
else
{
$text .= '                <select name="EditLanguage" title="';
unset( $var );
$var = 'Use this menu to select the language you want to use for editing then click the &quot;Edit&quot; button.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">
                    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_b26ff47f868c67f0da065d2b0ba0a72a_1 ) ) $fe_variable_stack_b26ff47f868c67f0da065d2b0ba0a72a_1 = array();
$fe_variable_stack_b26ff47f868c67f0da065d2b0ba0a72a_1[] = compact( 'fe_array_b26ff47f868c67f0da065d2b0ba0a72a_1', 'fe_array_keys_b26ff47f868c67f0da065d2b0ba0a72a_1', 'fe_n_items_b26ff47f868c67f0da065d2b0ba0a72a_1', 'fe_n_items_processed_b26ff47f868c67f0da065d2b0ba0a72a_1', 'fe_i_b26ff47f868c67f0da065d2b0ba0a72a_1', 'fe_key_b26ff47f868c67f0da065d2b0ba0a72a_1', 'fe_val_b26ff47f868c67f0da065d2b0ba0a72a_1', 'fe_offset_b26ff47f868c67f0da065d2b0ba0a72a_1', 'fe_max_b26ff47f868c67f0da065d2b0ba0a72a_1', 'fe_reverse_b26ff47f868c67f0da065d2b0ba0a72a_1', 'fe_first_val_b26ff47f868c67f0da065d2b0ba0a72a_1', 'fe_last_val_b26ff47f868c67f0da065d2b0ba0a72a_1' );
unset( $fe_array_b26ff47f868c67f0da065d2b0ba0a72a_1 );
unset( $fe_array_b26ff47f868c67f0da065d2b0ba0a72a_1 );
$fe_array_b26ff47f868c67f0da065d2b0ba0a72a_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['languages'] : null;
if (! isset( $fe_array_b26ff47f868c67f0da065d2b0ba0a72a_1 ) ) $fe_array_b26ff47f868c67f0da065d2b0ba0a72a_1 = NULL;
while ( is_object( $fe_array_b26ff47f868c67f0da065d2b0ba0a72a_1 ) and method_exists( $fe_array_b26ff47f868c67f0da065d2b0ba0a72a_1, 'templateValue' ) )
    $fe_array_b26ff47f868c67f0da065d2b0ba0a72a_1 = $fe_array_b26ff47f868c67f0da065d2b0ba0a72a_1->templateValue();

$fe_array_keys_b26ff47f868c67f0da065d2b0ba0a72a_1 = is_array( $fe_array_b26ff47f868c67f0da065d2b0ba0a72a_1 ) ? array_keys( $fe_array_b26ff47f868c67f0da065d2b0ba0a72a_1 ) : array();
$fe_n_items_b26ff47f868c67f0da065d2b0ba0a72a_1 = count( $fe_array_keys_b26ff47f868c67f0da065d2b0ba0a72a_1 );
$fe_n_items_processed_b26ff47f868c67f0da065d2b0ba0a72a_1 = 0;
$fe_offset_b26ff47f868c67f0da065d2b0ba0a72a_1 = 0;
$fe_max_b26ff47f868c67f0da065d2b0ba0a72a_1 = $fe_n_items_b26ff47f868c67f0da065d2b0ba0a72a_1 - $fe_offset_b26ff47f868c67f0da065d2b0ba0a72a_1;
$fe_reverse_b26ff47f868c67f0da065d2b0ba0a72a_1 = false;
if ( $fe_offset_b26ff47f868c67f0da065d2b0ba0a72a_1 < 0 || $fe_offset_b26ff47f868c67f0da065d2b0ba0a72a_1 >= $fe_n_items_b26ff47f868c67f0da065d2b0ba0a72a_1 )
{
    $fe_offset_b26ff47f868c67f0da065d2b0ba0a72a_1 = ( $fe_offset_b26ff47f868c67f0da065d2b0ba0a72a_1 < 0 ) ? 0 : $fe_n_items_b26ff47f868c67f0da065d2b0ba0a72a_1;
    if ( $fe_n_items_b26ff47f868c67f0da065d2b0ba0a72a_1 || $fe_offset_b26ff47f868c67f0da065d2b0ba0a72a_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b26ff47f868c67f0da065d2b0ba0a72a_1'. Array count: $fe_n_items_b26ff47f868c67f0da065d2b0ba0a72a_1");   
}
}
if ( $fe_max_b26ff47f868c67f0da065d2b0ba0a72a_1 < 0 || $fe_offset_b26ff47f868c67f0da065d2b0ba0a72a_1 + $fe_max_b26ff47f868c67f0da065d2b0ba0a72a_1 > $fe_n_items_b26ff47f868c67f0da065d2b0ba0a72a_1 )
{
    if ( $fe_max_b26ff47f868c67f0da065d2b0ba0a72a_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b26ff47f868c67f0da065d2b0ba0a72a_1");
    $fe_max_b26ff47f868c67f0da065d2b0ba0a72a_1 = $fe_n_items_b26ff47f868c67f0da065d2b0ba0a72a_1 - $fe_offset_b26ff47f868c67f0da065d2b0ba0a72a_1;
}
if ( $fe_reverse_b26ff47f868c67f0da065d2b0ba0a72a_1 )
{
    $fe_first_val_b26ff47f868c67f0da065d2b0ba0a72a_1 = $fe_n_items_b26ff47f868c67f0da065d2b0ba0a72a_1 - 1 - $fe_offset_b26ff47f868c67f0da065d2b0ba0a72a_1;
    $fe_last_val_b26ff47f868c67f0da065d2b0ba0a72a_1  = 0;
}
else
{
    $fe_first_val_b26ff47f868c67f0da065d2b0ba0a72a_1 = $fe_offset_b26ff47f868c67f0da065d2b0ba0a72a_1;
    $fe_last_val_b26ff47f868c67f0da065d2b0ba0a72a_1  = $fe_n_items_b26ff47f868c67f0da065d2b0ba0a72a_1 - 1;
}
// foreach
for ( $fe_i_b26ff47f868c67f0da065d2b0ba0a72a_1 = $fe_first_val_b26ff47f868c67f0da065d2b0ba0a72a_1; $fe_n_items_processed_b26ff47f868c67f0da065d2b0ba0a72a_1 < $fe_max_b26ff47f868c67f0da065d2b0ba0a72a_1 && ( $fe_reverse_b26ff47f868c67f0da065d2b0ba0a72a_1 ? $fe_i_b26ff47f868c67f0da065d2b0ba0a72a_1 >= $fe_last_val_b26ff47f868c67f0da065d2b0ba0a72a_1 : $fe_i_b26ff47f868c67f0da065d2b0ba0a72a_1 <= $fe_last_val_b26ff47f868c67f0da065d2b0ba0a72a_1 ); $fe_reverse_b26ff47f868c67f0da065d2b0ba0a72a_1 ? $fe_i_b26ff47f868c67f0da065d2b0ba0a72a_1-- : $fe_i_b26ff47f868c67f0da065d2b0ba0a72a_1++ )
{
$fe_key_b26ff47f868c67f0da065d2b0ba0a72a_1 = $fe_array_keys_b26ff47f868c67f0da065d2b0ba0a72a_1[$fe_i_b26ff47f868c67f0da065d2b0ba0a72a_1];
$fe_val_b26ff47f868c67f0da065d2b0ba0a72a_1 = $fe_array_b26ff47f868c67f0da065d2b0ba0a72a_1[$fe_key_b26ff47f868c67f0da065d2b0ba0a72a_1];
$vars[$rootNamespace]['language'] = $fe_val_b26ff47f868c67f0da065d2b0ba0a72a_1;
$text .= '                        <option value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$var2 = compiledFetchAttribute( $var1, 'locale' );
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
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

$text .= '</option>
                    ';
$fe_n_items_processed_b26ff47f868c67f0da065d2b0ba0a72a_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b26ff47f868c67f0da065d2b0ba0a72a_1 ) ) extract( array_pop( $fe_variable_stack_b26ff47f868c67f0da065d2b0ba0a72a_1 ) );

else
{

unset( $fe_array_b26ff47f868c67f0da065d2b0ba0a72a_1 );

unset( $fe_array_keys_b26ff47f868c67f0da065d2b0ba0a72a_1 );

unset( $fe_n_items_b26ff47f868c67f0da065d2b0ba0a72a_1 );

unset( $fe_n_items_processed_b26ff47f868c67f0da065d2b0ba0a72a_1 );

unset( $fe_i_b26ff47f868c67f0da065d2b0ba0a72a_1 );

unset( $fe_key_b26ff47f868c67f0da065d2b0ba0a72a_1 );

unset( $fe_val_b26ff47f868c67f0da065d2b0ba0a72a_1 );

unset( $fe_offset_b26ff47f868c67f0da065d2b0ba0a72a_1 );

unset( $fe_max_b26ff47f868c67f0da065d2b0ba0a72a_1 );

unset( $fe_reverse_b26ff47f868c67f0da065d2b0ba0a72a_1 );

unset( $fe_first_val_b26ff47f868c67f0da065d2b0ba0a72a_1 );

unset( $fe_last_val_b26ff47f868c67f0da065d2b0ba0a72a_1 );

unset( $fe_variable_stack_b26ff47f868c67f0da065d2b0ba0a72a_1 );

}

// foreach ends
$text .= '                    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'can_create_languages' );
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
$if_cond = ( ( $if_cond1 ) > ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                        <option value="">Another language</option>
                    ';
}
unset( $if_cond );
// if ends

$text .= '                </select>
            ';
}
unset( $if_cond );
// if ends

$text .= '            ';
// undef $languages
$tpl->unsetLocalVariable( 'languages', $rootNamespace );

// undef $availableLanguages
$tpl->unsetLocalVariable( 'availableLanguages', $rootNamespace );

$text .= '            <input class="button" type="submit" name="_DefaultButton" value="Edit" title="Edit this class." />
            
        </form>
</div>
</div>
</div>';
$oldRestoreIncludeArray_6d985675b11ca4fd2916eec257f80c0f = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/windows-268b0ad006f77a12c6a87256c1cd641b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/class/windows.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/windows-268b0ad006f77a12c6a87256c1cd641b.php' );
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
$tpl->processURI( 'design/admin/templates/class/windows.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_6d985675b11ca4fd2916eec257f80c0f;

$text .= '
</div>


<!-- STOP: including template: design/admin/templates/class/view.tpl (design:class/view.tpl) -->
';

$setArray = $oldSetArray_1c9f38f1624a7219efb9dca94c18d39f;
$tpl->Level--;
?>
