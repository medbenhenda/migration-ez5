<?php
// URI:       design:node/ezflcontextmenu.tpl
// Filename:  extension/ezflow/design/standard/templates/node/ezflcontextmenu.tpl
// Timestamp: 1360064235 (Tue Feb 5 12:37:15 CET 2013)
$oldSetArray_8437c86dc9e5ec6e1cddf6a2d9be8357 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/ezflow/design/standard/templates/node/ezflcontextmenu.tpl (design:node/ezflcontextmenu.tpl) -->
<script type="text/javascript">
menuArray[\'eZFlow\'] = new Array();
menuArray[\'eZFlow\'][\'depth\'] = 1; // this is a first level submenu of ContextMenu
menuArray[\'eZFlow\'][\'elements\'] = new Array();
menuArray[\'eZFlow\'][\'elements\'][\'push-to-block\'] = new Array();
menuArray[\'eZFlow\'][\'elements\'][\'push-to-block\'][\'url\'] = "/ezdemo_site_admin/ezflow/push/%nodeID%";
</script>

<hr />

<a id="menu-ezflow" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'eZFlow\', \'menu-ezflow\' ); return false;">eZ Flow</a>
<!-- STOP: including template: extension/ezflow/design/standard/templates/node/ezflcontextmenu.tpl (design:node/ezflcontextmenu.tpl) -->
';

$setArray = $oldSetArray_8437c86dc9e5ec6e1cddf6a2d9be8357;
$tpl->Level--;
?>
