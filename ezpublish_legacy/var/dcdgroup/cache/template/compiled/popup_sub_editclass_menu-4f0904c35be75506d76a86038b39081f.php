<?php
// URI:       design/admin/templates/popupmenu/popup_sub_editclass_menu.tpl
// Filename:  design/admin/templates/popupmenu/popup_sub_editclass_menu.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_986f8da581242ee9cb6c5368bf209c4d = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: design/admin/templates/popupmenu/popup_sub_editclass_menu.tpl (design/admin/templates/popupmenu/popup_sub_editclass_menu.tpl) -->
<!-- Edit class submenu -->
<script type="text/javascript">
menuArray[\'EditClassSubmenu\'] = { \'depth\': 1 };
menuArray[\'EditClassSubmenu\'][\'elements\'] = {};
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-languages\'] = { \'variable\': \'%languages%\' };
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-languages\'][\'content\'] = \'<a href="/ezdemo_site_admin/class/edit/%classID%/(language)/%locale%" onmouseover="ezpopmenu_mouseOver( \\\'EditClassSubmenu\\\' )">%name%<\\/a>\';
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-another-language\'] = { \'url\': "/ezdemo_site_admin/class/edit/%classID%" };
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-another-language\'][\'disabled_class\'] = \'menu-item-disabled\';
</script>

<div class="popupmenu" id="EditClassSubmenu">
    <div id="edit-class-languages"></div>
    <hr />
    <!-- <a id="edit-class-another-language" href="#" onmouseover="ezpopmenu_mouseOver( \'EditClassSubmenu\' )">Another language</a> -->
    <!-- <div id="edit-class-another-language"></div> -->
    <a id="edit-class-another-language" href="#" onmouseover="ezpopmenu_mouseOver( \'EditClassSubmenu\' )">New translation</a>
</div>
<!-- STOP: including template: design/admin/templates/popupmenu/popup_sub_editclass_menu.tpl (design/admin/templates/popupmenu/popup_sub_editclass_menu.tpl) -->
';

$setArray = $oldSetArray_986f8da581242ee9cb6c5368bf209c4d;
$tpl->Level--;
?>
