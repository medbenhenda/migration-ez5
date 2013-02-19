<?php
// URI:       design/admin/templates/page_head_style_inline.tpl
// Filename:  design/admin/templates/page_head_style_inline.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_5175a31e75639f158467a2d13aef3725 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: design/admin/templates/page_head_style_inline.tpl (design/admin/templates/page_head_style_inline.tpl) -->


<!--[if lt IE 8]>
<style>
/* Terminate floating elements flow in IE < 8 */
.float-break
{
  height: 1%;
}
</style>
<![endif]-->
<!--[if lte IE 8]>
<style>
#controlbar-top .box-bc
{
  filter:progid:DXImageTransform.Microsoft.Shadow(color=\'gray\', Direction=180, Strength=8);
  zoom: 1;
}
</style>
<![endif]-->
<!--[if lte IE 7]>
<style>
#controlbar-top .box-bc
{
padding-bottom:8px;
}
</style>
<![endif]-->
<!--[if IE 6]>
<style>
.yui3-js-enabled .scroll-to-top {display: none;}
input.box, textarea.box {width: 99%}
</style>
<![endif]-->


<!-- STOP: including template: design/admin/templates/page_head_style_inline.tpl (design/admin/templates/page_head_style_inline.tpl) -->
';

$setArray = $oldSetArray_5175a31e75639f158467a2d13aef3725;
$tpl->Level--;
?>
