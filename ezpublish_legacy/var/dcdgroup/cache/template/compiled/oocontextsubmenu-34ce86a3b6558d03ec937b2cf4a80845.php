<?php
// URI:       design:node/oocontextsubmenu.tpl
// Filename:  extension/ezodf/design/standard/templates/node/oocontextsubmenu.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_922a9a089fdde087ebca99ccd1449e77 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/ezodf/design/standard/templates/node/oocontextsubmenu.tpl (design:node/oocontextsubmenu.tpl) -->
<div class="popupmenu" id="OpenOffice">
    <a id="menu-export-ooo" href="#" onmouseover="ezpopmenu_mouseOver( \'OpenOffice\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-export-ooo\' ); return false;">Export OpenOffice</a>
    <a id="menu-export-pdf" href="#" onmouseover="ezpopmenu_mouseOver( \'OpenOffice\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-export-pdf\' ); return false;">Export PDF</a>
    <a id="menu-export-word" href="#" onmouseover="ezpopmenu_mouseOver( \'OpenOffice\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-export-word\' ); return false;">Export Word</a>
    <a id="menu-import-ooo" href="#" onmouseover="ezpopmenu_mouseOver( \'OpenOffice\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-import-ooo\' ); return false;">Import OpenOffice</a>
    <a id="menu-replace-ooo" href="#" onmouseover="ezpopmenu_mouseOver( \'OpenOffice\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-replace-ooo\' ); return false;">Replace OpenOffice</a>
</div>

<!-- STOP: including template: extension/ezodf/design/standard/templates/node/oocontextsubmenu.tpl (design:node/oocontextsubmenu.tpl) -->
';

$setArray = $oldSetArray_922a9a089fdde087ebca99ccd1449e77;
$tpl->Level--;
?>
