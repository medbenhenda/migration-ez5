<?php
// URI:       design/admin/templates/page_header.tpl
// Filename:  design/admin/templates/page_header.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_ce64ba910a7248b97b829dc54b32f0fd = isset( $setArray ) ? $setArray : array();
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

$text .= '<div id="header-logo">';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context_edit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context_edit'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <span title="eZ Publish ';
unset( $var );
$var = call_user_func_array( array( new eZSetupFunctionCollection(), 'fetchFullVersionString' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">&nbsp;</span>';
}
else
{
$text .= '    <a href="/ezdemo_site_admin/content/dashboard" title="eZ Publish ';
unset( $var );
$var = call_user_func_array( array( new eZSetupFunctionCollection(), 'fetchFullVersionString' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">
    </a>';
}
unset( $if_cond );
// if ends

$text .= '</div>

<div id="header-search">';
$oldRestoreIncludeArray_1af0dea8d57e609c4fa8d29be729cdbf = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_search-8bfea33376ee9dd3be0bdc9f239c37b5.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/page_search.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_search-8bfea33376ee9dd3be0bdc9f239c37b5.php' );
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
$tpl->processURI( 'design/admin/templates/page_search.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_1af0dea8d57e609c4fa8d29be729cdbf;

$text .= '</div>

<div id="header-usermenu">';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context_edit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context_edit'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <span title="Logout from the system." id="header-usermenu-logout" class="disabled">Logout</span>';
}
else
{
$text .= '    <a href="/ezdemo_site_admin/user/logout" title="Logout from the system." id="header-usermenu-logout">Logout</a>';
}
unset( $if_cond );
// if ends

$text .= '</div>

';

$setArray = $oldSetArray_ce64ba910a7248b97b829dc54b32f0fd;
$tpl->Level--;
?>
