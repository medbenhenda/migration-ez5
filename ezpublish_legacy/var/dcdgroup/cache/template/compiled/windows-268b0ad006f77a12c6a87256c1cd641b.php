<?php
// URI:       design/admin/templates/class/windows.tpl
// Filename:  design/admin/templates/class/windows.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_69fe455648ebf28969eff6b7a59e8541 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: design/admin/templates/class/windows.tpl (design/admin/templates/class/windows.tpl) -->
';
// if begins
unset( $if_cond );
$if_cond = eZPreferences::value( "admin_navigation_class_translations" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
$oldRestoreIncludeArray_ba27e31b61e66cbd8f495d9fd34778d5 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/translations-c8f09a12f032d339f2217506e222a3a8.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/class/translations.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/translations-c8f09a12f032d339f2217506e222a3a8.php' );
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
$tpl->processURI( 'design/admin/templates/class/translations.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_ba27e31b61e66cbd8f495d9fd34778d5;

}
unset( $if_cond );
// if ends

$text .= '
';
// if begins
unset( $if_cond );
$if_cond = eZPreferences::value( "admin_navigation_class_groups" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
$oldRestoreIncludeArray_a13b3a7cb5d35186975efadf914c8e68 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/groups-5f13df6d2c58221836424040a4458b02.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/class/groups.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/groups-5f13df6d2c58221836424040a4458b02.php' );
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
$tpl->processURI( 'design/admin/templates/class/groups.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_a13b3a7cb5d35186975efadf914c8e68;

}
unset( $if_cond );
// if ends

$text .= '
';
// if begins
unset( $if_cond );
$if_cond = eZPreferences::value( "admin_navigation_class_temlates" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
$oldRestoreIncludeArray_6b28ee63f1aac16c791cfb990e4eaf89 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/dcdgroup/cache/template/compiled/templates-af1e67af04a09848ef106c83e436007c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/class/templates.tpl' );
include( '' . 'var/dcdgroup/cache/template/compiled/templates-af1e67af04a09848ef106c83e436007c.php' );
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
$tpl->processURI( 'design/admin/templates/class/templates.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_6b28ee63f1aac16c791cfb990e4eaf89;

}
unset( $if_cond );
// if ends

$text .= '
<!-- STOP: including template: design/admin/templates/class/windows.tpl (design/admin/templates/class/windows.tpl) -->
';

$setArray = $oldSetArray_69fe455648ebf28969eff6b7a59e8541;
$tpl->Level--;
?>
