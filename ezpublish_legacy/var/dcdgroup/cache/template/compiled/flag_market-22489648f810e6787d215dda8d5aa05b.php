<?php
// URI:       design:flag_market.tpl
// Filename:  extension/dcdgroup/design/group/templates/flag_market.tpl
// Timestamp: 1361301666 (Tue Feb 19 20:21:06 CET 2013)
$oldSetArray_b86171d95e105e5995dd85728f8bb8a1 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/dcdgroup/design/group/templates/flag_market.tpl (design:flag_market.tpl) -->
';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'content',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'flag',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 1,
    1 => 51,
    2 => 52,
  ),
  2 => 'extension/dcdgroup/design/group/templates/flag_market.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '
<!-- STOP: including template: extension/dcdgroup/design/group/templates/flag_market.tpl (design:flag_market.tpl) -->
';

$setArray = $oldSetArray_b86171d95e105e5995dd85728f8bb8a1;
$tpl->Level--;
?>
