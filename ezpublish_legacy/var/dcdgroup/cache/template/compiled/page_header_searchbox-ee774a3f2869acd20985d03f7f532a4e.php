<?php
// URI:       design:_common/page_header_searchbox.tpl
// Filename:  extension/dcdgroup/design/group/templates/_common/page_header_searchbox.tpl
// Timestamp: 1361305316 (Tue Feb 19 21:21:56 CET 2013)
$oldSetArray_8851c3e2cb20ba39197daddf0819b7cb = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/dcdgroup/design/group/templates/_common/page_header_searchbox.tpl (design:_common/page_header_searchbox.tpl) -->
<form action="http://www.datacenterdynamics.com/search/node/">
  <div id="searchbox-inner">
    <label for="searchtext" class="hide">Search text:</label>
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_edit' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input id="searchtext" name="SearchText" type="text" value="" size="12" disabled="disabled" />
    <input id="searchbutton" class="button-disabled" type="submit" value="Search" title="Search" disabled="disabled" />
    ';
}
else
{
$text .= '    <input id="searchtext" name="SearchText" type="text" value="" size="12" class="textbox" />
    <input id="searchbutton" class="sbtbtn" type="submit" value="Search" title="Search" />
        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'browse' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '         <input name="Mode" type="hidden" value="browse" />
        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '  </div>
  </form>

<!-- STOP: including template: extension/dcdgroup/design/group/templates/_common/page_header_searchbox.tpl (design:_common/page_header_searchbox.tpl) -->
';

$setArray = $oldSetArray_8851c3e2cb20ba39197daddf0819b7cb;
$tpl->Level--;
?>
