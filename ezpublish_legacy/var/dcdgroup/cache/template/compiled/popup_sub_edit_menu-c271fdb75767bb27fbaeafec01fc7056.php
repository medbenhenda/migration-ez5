<?php
// URI:       design/admin/templates/popupmenu/popup_sub_edit_menu.tpl
// Filename:  design/admin/templates/popupmenu/popup_sub_edit_menu.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_1d58dd1d889c7e9e8a24670f4068a0fe = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: design/admin/templates/popupmenu/popup_sub_edit_menu.tpl (design/admin/templates/popupmenu/popup_sub_edit_menu.tpl) -->
<!-- Edit menu -->
<script type="text/javascript">
menuArray[\'EditSubmenu\'] = { \'depth\': 1 };
menuArray[\'EditSubmenu\'][\'elements\'] = {};
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages\'] = { \'variable\': \'%languages%\' };
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages\'][\'content\'] = \'<a href="/ezdemo_site_admin/content/edit/%objectID%/f/%locale%" onmouseover="ezpopmenu_mouseOver( \\\'EditSubmenu\\\' )">%name%<\\/a>\';
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages-another\'] = { \'url\': "/ezdemo_site_admin/content/edit/%objectID%/a" };
</script>

<div class="popupmenu" id="EditSubmenu">
    <div id="edit-languages"></div>
    <hr />
    <a id="edit-languages-another" href="#" onmouseover="ezpopmenu_mouseOver( \'EditSubmenu\' )">New translation</a>
</div>
<!-- STOP: including template: design/admin/templates/popupmenu/popup_sub_edit_menu.tpl (design/admin/templates/popupmenu/popup_sub_edit_menu.tpl) -->
';

$setArray = $oldSetArray_1d58dd1d889c7e9e8a24670f4068a0fe;
$tpl->Level--;
?>
