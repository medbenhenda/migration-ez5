<?php
// URI:       design:node/ezflsubitemscontextmenu.tpl
// Filename:  extension/ezflow/design/standard/templates/node/ezflsubitemscontextmenu.tpl
// Timestamp: 1360064235 (Tue Feb 5 12:37:15 CET 2013)
$oldSetArray_3ddeaca39b5ee7be3432a81ec6a775f0 = isset( $setArray ) ? $setArray : array();
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

$text .= '<script type="text/javascript">
menuArray[\'eZFlow\'] = new Array();
menuArray[\'eZFlow\'][\'depth\'] = 1; // this is a first level submenu of ContextMenu
menuArray[\'eZFlow\'][\'elements\'] = new Array();
menuArray[\'eZFlow\'][\'elements\'][\'push-to-block\'] = new Array();
menuArray[\'eZFlow\'][\'elements\'][\'push-to-block\'][\'url\'] = "/ezdemo_site_admin/ezflow/push/%nodeID%";
</script>

<hr />

<a id="child-menu-ezflow" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'eZFlow\', \'child-menu-ezflow\' ); return false;">eZ Flow</a>';

$setArray = $oldSetArray_3ddeaca39b5ee7be3432a81ec6a775f0;
$tpl->Level--;
?>
