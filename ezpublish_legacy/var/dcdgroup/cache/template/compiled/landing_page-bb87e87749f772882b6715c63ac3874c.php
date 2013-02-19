<?php
// URI:       design:node/view/full.tpl
// Filename:  extension/ezdemo/design/ezdemo/override/templates/full/landing_page.tpl
// Timestamp: 1360064234 (Tue Feb 5 12:37:14 CET 2013)
$oldSetArray_c2dbb4adb16db8d9c2621587621e65e7 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/ezdemo/design/ezdemo/override/templates/full/landing_page.tpl (design:node/view/full.tpl) -->
<div class="content-view-full">
    <div class="class-landing-page">

    <div class="attribute-page">
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
        2 => 'node',
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
          1 => 'object',
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
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'page',
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
    0 => 5,
    1 => 4,
    2 => 108,
  ),
  1 => 
  array (
    0 => 5,
    1 => 59,
    2 => 163,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/landing_page.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    </div>

    </div>
</div>

<!-- STOP: including template: extension/ezdemo/design/ezdemo/override/templates/full/landing_page.tpl (design:node/view/full.tpl) -->
';

$setArray = $oldSetArray_c2dbb4adb16db8d9c2621587621e65e7;
$tpl->Level--;
?>
