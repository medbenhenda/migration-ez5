<?php
// URI:       design:node/view/full.tpl
// Filename:  extension/ezdemo/design/ezdemo/override/templates/full/landing_page.tpl
// Timestamp: 1360064234 (Tue Feb 5 12:37:14 CET 2013)
$oldSetArray_fc5002e157d5a15f071153c9aa65e9ee = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="content-view-full">
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
';

$setArray = $oldSetArray_fc5002e157d5a15f071153c9aa65e9ee;
$tpl->Level--;
?>
