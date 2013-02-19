<?php
// URI:       design:node/ezmusubitemscontextmenu.tpl
// Filename:  extension/ezmultiupload/design/standard/templates/node/ezmusubitemscontextmenu.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_e2356b3a0cf3c151d40a9e4897b65132 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/ezmultiupload/design/standard/templates/node/ezmusubitemscontextmenu.tpl (design:node/ezmusubitemscontextmenu.tpl) -->

<hr/>
<script type="text/javascript">
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-multiupload\'] = new Array();
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-multiupload\'][\'url\'] = "/ezdemo_site_admin/ezmultiupload/upload/%nodeID%";
</script>

<a id="child-menu-multiupload" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )" >Upload multiple files</a>

<!-- STOP: including template: extension/ezmultiupload/design/standard/templates/node/ezmusubitemscontextmenu.tpl (design:node/ezmusubitemscontextmenu.tpl) -->
';

$setArray = $oldSetArray_e2356b3a0cf3c151d40a9e4897b65132;
$tpl->Level--;
?>
