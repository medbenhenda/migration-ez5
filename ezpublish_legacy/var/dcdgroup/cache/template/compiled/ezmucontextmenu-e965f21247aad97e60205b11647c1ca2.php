<?php
// URI:       design:node/ezmucontextmenu.tpl
// Filename:  extension/ezmultiupload/design/standard/templates/node/ezmucontextmenu.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_0413b01a2b2bb194a77f34b7a9c1eebe = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/ezmultiupload/design/standard/templates/node/ezmucontextmenu.tpl (design:node/ezmucontextmenu.tpl) -->

<hr/>
<script type="text/javascript">
menuArray[\'ContextMenu\'][\'elements\'][\'menu-multiupload\'] = new Array();
menuArray[\'ContextMenu\'][\'elements\'][\'menu-multiupload\'][\'url\'] = "/ezdemo_site_admin/ezmultiupload/upload/%nodeID%";
</script>

<a id="menu-multiupload" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )" >Upload multiple files</a>
<!-- STOP: including template: extension/ezmultiupload/design/standard/templates/node/ezmucontextmenu.tpl (design:node/ezmucontextmenu.tpl) -->
';

$setArray = $oldSetArray_0413b01a2b2bb194a77f34b7a9c1eebe;
$tpl->Level--;
?>
