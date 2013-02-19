<?php
// URI:       design:node/oosubitemscontextmenu.tpl
// Filename:  extension/ezodf/design/standard/templates/node/oosubitemscontextmenu.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_a9447b91244fa95332eb0928ce583ce2 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/ezodf/design/standard/templates/node/oosubitemscontextmenu.tpl (design:node/oosubitemscontextmenu.tpl) -->
<script type="text/javascript">
menuArray[\'OpenOffice\'] = [];
menuArray[\'OpenOffice\'][\'depth\'] = 1;
menuArray[\'OpenOffice\'][\'elements\'] = [];
</script>

<hr />
<a id="child-menu-openoffice" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'OpenOffice\', \'child-menu-openoffice\' ); return false;">OpenOffice.org</a>


<!-- STOP: including template: extension/ezodf/design/standard/templates/node/oosubitemscontextmenu.tpl (design:node/oosubitemscontextmenu.tpl) -->
';

$setArray = $oldSetArray_a9447b91244fa95332eb0928ce583ce2;
$tpl->Level--;
?>
