<?php
// URI:       design/admin/templates/popupmenu/popup_menu.tpl
// Filename:  design/admin/templates/popupmenu/popup_menu.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_85d5f8aba5553d4184aaa4ff6fe8e83a = isset( $setArray ) ? $setArray : array();
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

// def $multilingual_site
unset( $var );
unset( $var1 );
$var1 = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchTranslationList' ),
  array(  ) );
$var1 = isset( $var1['result'] ) ? $var1['result'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var1Data = array( 'value' => $var1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $var1Data, false, false );
$var1 = $var1Data['value'];
unset( $var1Data );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = ( ( $var1 ) > ( 1 ) );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'multilingual_site', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'multilingual_site' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 1,
    1 => 77,
    2 => 78,
  ),
  2 => 'design/admin/templates/popupmenu/popup_menu.tpl',
) );
    $tpl->setVariable( 'multilingual_site', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'multilingual_site', $var, $rootNamespace );
}

$text .= '<!-- script type="text/javascript" src="/design/admin/javascript/popupmenu/ezpopupmenu.js"></script -->
';
$oldRestoreIncludeArray_61e5da889e6a08da253599d3bf90801d = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/popup_context_menu-5bead98c213f0747a5e91831485d0263.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/popupmenu/popup_context_menu.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/popup_context_menu-5bead98c213f0747a5e91831485d0263.php' );
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
$tpl->processURI( 'design/admin/templates/popupmenu/popup_context_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_61e5da889e6a08da253599d3bf90801d;

$oldRestoreIncludeArray_d762143f8629355341f316842b4fe5a8 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/popup_subitems_menu-f66f7fc936597de23c04ff0408a59c89.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/popupmenu/popup_subitems_menu.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/popup_subitems_menu-f66f7fc936597de23c04ff0408a59c89.php' );
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
$tpl->processURI( 'design/admin/templates/popupmenu/popup_subitems_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_d762143f8629355341f316842b4fe5a8;

$oldRestoreIncludeArray_03bba6e3c2be806c49701fa000d8cba4 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/popup_class_menu-9b8d5bbbf44d361b9ee3c14e36e5d154.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/popupmenu/popup_class_menu.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/popup_class_menu-9b8d5bbbf44d361b9ee3c14e36e5d154.php' );
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
$tpl->processURI( 'design/admin/templates/popupmenu/popup_class_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_03bba6e3c2be806c49701fa000d8cba4;

$oldRestoreIncludeArray_0ec08a4f047f72989a8a8d3a11da2e78 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/popup_bookmark_menu-00d6a4ebce08000a0d56d606bbf562f0.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/popupmenu/popup_bookmark_menu.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/popup_bookmark_menu-00d6a4ebce08000a0d56d606bbf562f0.php' );
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
$tpl->processURI( 'design/admin/templates/popupmenu/popup_bookmark_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_0ec08a4f047f72989a8a8d3a11da2e78;

$text .= '
';
$loopItem = array (
  0 => 'node/oocontextsubmenu.tpl',
  1 => 'node/ezflcontextsubmenu.tpl',
  2 => 'popupmenu/popup_tag_menu.tpl',
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
$vars[$currentNamespace]['template'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '   ';
$textElements = array();
$tpl->processFunction( 'include', $textElements,
                       false,
                       array (
  'uri' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'concat',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'design:',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'template',
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 14,
    1 => 3,
    2 => 576,
  ),
  1 => 
  array (
    0 => 14,
    1 => 44,
    2 => 617,
  ),
  2 => 'design/admin/templates/popupmenu/popup_menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$oldRestoreIncludeArray_f45b11a3db36d2fdda551276ac011af8 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/popup_sub_createhere_menu-a72c49d8f4ae439e98bc7ace47349911.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/popupmenu/popup_sub_createhere_menu.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/popup_sub_createhere_menu-a72c49d8f4ae439e98bc7ace47349911.php' );
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
$tpl->processURI( 'design/admin/templates/popupmenu/popup_sub_createhere_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_f45b11a3db36d2fdda551276ac011af8;

$oldRestoreIncludeArray_e8edecfc776751d596c52b0c254877b7 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/popup_sub_edit_menu-c271fdb75767bb27fbaeafec01fc7056.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/popupmenu/popup_sub_edit_menu.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/popup_sub_edit_menu-c271fdb75767bb27fbaeafec01fc7056.php' );
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
$tpl->processURI( 'design/admin/templates/popupmenu/popup_sub_edit_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_e8edecfc776751d596c52b0c254877b7;

$oldRestoreIncludeArray_61216078c97acd3174d3a3a8a19dc922 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/popup_sub_advance_menu-b0b904d061c466954bd1a956d994a510.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/popupmenu/popup_sub_advance_menu.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/popup_sub_advance_menu-b0b904d061c466954bd1a956d994a510.php' );
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
$tpl->processURI( 'design/admin/templates/popupmenu/popup_sub_advance_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_61216078c97acd3174d3a3a8a19dc922;

$oldRestoreIncludeArray_92f3a21d09c9e36329594ae9a0436c4f = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/popup_sub_editclass_menu-4f0904c35be75506d76a86038b39081f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/popupmenu/popup_sub_editclass_menu.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/popup_sub_editclass_menu-4f0904c35be75506d76a86038b39081f.php' );
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
$tpl->processURI( 'design/admin/templates/popupmenu/popup_sub_editclass_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_92f3a21d09c9e36329594ae9a0436c4f;

$oldRestoreIncludeArray_3bad95f4d2df814d00adc8636d72c6f0 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/popup_sub_siteaccess_menus-e988644b35a6038654809c478cda800c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/popupmenu/popup_sub_siteaccess_menus.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/popup_sub_siteaccess_menus-e988644b35a6038654809c478cda800c.php' );
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
$tpl->processURI( 'design/admin/templates/popupmenu/popup_sub_siteaccess_menus.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_3bad95f4d2df814d00adc8636d72c6f0;

$text .= '





<form id="menu-form-addbookmark" method="post" action="/ezdemo_site_admin/content/action">
  <input type="hidden" name="ContentNodeID" value="%nodeID%" />
  <input type="hidden" name="ActionAddToBookmarks" value="x" />
</form>


<form id="menu-form-remove" method="post" action="/ezdemo_site_admin/content/action">
  <input type="hidden" name="TopLevelNode" value="%nodeID%" />
  <input type="hidden" name="ContentNodeID" value="%nodeID%" />
  <input type="hidden" name="ContentObjectID" value="%objectID%" />
  <input type="hidden" name="ActionRemove" value="x" />
</form>


<form id="menu-form-move" method="post" action="/ezdemo_site_admin/content/action">
  <input type="hidden" name="TopLevelNode" value="%nodeID%" />
  <input type="hidden" name="ContentNodeID" value="%nodeID%" />
  <input type="hidden" name="ContentObjectID" value="%objectID%" />
  <input type="hidden" name="MoveNodeButton" value="x" />
</form>


<form id="menu-form-notify" method="post" action="/ezdemo_site_admin/content/action">
  <input type="hidden" name="ContentNodeID" value="%nodeID%" />
  <input type="hidden" name="ActionAddToNotification" value="x" />
</form>
';

$setArray = $oldSetArray_85d5f8aba5553d4184aaa4ff6fe8e83a;
$tpl->Level--;
?>
