<?php
// URI:       design:node/ezmusubitemscontextmenu.tpl
// Filename:  extension/ezmultiupload/design/standard/templates/node/ezmusubitemscontextmenu.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_2bb861ee50ac841e515abc7b1d6bc6fb = isset( $setArray ) ? $setArray : array();
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

$text .= '
<hr/>
<script type="text/javascript">
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-multiupload\'] = new Array();
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-multiupload\'][\'url\'] = "/ezdemo_site_admin/ezmultiupload/upload/%nodeID%";
</script>

<a id="child-menu-multiupload" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )" >Upload multiple files</a>
';

$setArray = $oldSetArray_2bb861ee50ac841e515abc7b1d6bc6fb;
$tpl->Level--;
?>
