<?php
// URI:       design:node/oocontextmenu.tpl
// Filename:  extension/ezodf/design/standard/templates/node/oocontextmenu.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_386b030420a5ec137e0534ab59e23c60 = isset( $setArray ) ? $setArray : array();
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
menuArray[\'OpenOffice\'] = [];
menuArray[\'OpenOffice\'][\'depth\'] = 1;
menuArray[\'OpenOffice\'][\'elements\'] = [];
</script>

<hr />
<a id="menu-openoffice" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'OpenOffice\', \'menu-openoffice\' ); return false;">OpenOffice.org</a>


<form id="menu-form-export-ooo" method="post" action="/ezdemo_site_admin/ezodf/export">
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>


<form id="menu-form-export-pdf" method="post" action="/ezdemo_site_admin/ezodf/export">
  <input type="hidden" name="ExportType" value="PDF" />
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>


<form id="menu-form-export-word" method="post" action="/ezdemo_site_admin/ezodf/export">
  <input type="hidden" name="ExportType" value="Word" />
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>


<form id="menu-form-import-ooo" method="post" action="/ezdemo_site_admin/ezodf/import">
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>



<form id="menu-form-replace-ooo" method="post" action="/ezdemo_site_admin/ezodf/import">
  <input type="hidden" name="ImportType" value="replace" />
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>
';

$setArray = $oldSetArray_386b030420a5ec137e0534ab59e23c60;
$tpl->Level--;
?>
