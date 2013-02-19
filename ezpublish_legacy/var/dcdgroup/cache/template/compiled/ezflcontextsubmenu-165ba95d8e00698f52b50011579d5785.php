<?php
// URI:       design:node/ezflcontextsubmenu.tpl
// Filename:  extension/ezflow/design/standard/templates/node/ezflcontextsubmenu.tpl
// Timestamp: 1360064235 (Tue Feb 5 12:37:15 CET 2013)
$oldSetArray_f0679627a3a012ba6b13fb55da233225 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/ezflow/design/standard/templates/node/ezflcontextsubmenu.tpl (design:node/ezflcontextsubmenu.tpl) -->
<div class="popupmenu" id="eZFlow">
    <a id="push-to-block" href="#" onmouseover="ezpopmenu_mouseOver( \'eZFlow\' )">Add to block in frontpage</a>
</div>

<!-- STOP: including template: extension/ezflow/design/standard/templates/node/ezflcontextsubmenu.tpl (design:node/ezflcontextsubmenu.tpl) -->
';

$setArray = $oldSetArray_f0679627a3a012ba6b13fb55da233225;
$tpl->Level--;
?>
