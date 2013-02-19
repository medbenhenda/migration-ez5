<?php
// URI:       design:content/datatype/view/ezstring.tpl
// Filename:  design/standard/templates/content/datatype/view/ezstring.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_8ee4309ac20a821fb9a255068ecda2f6 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: design/standard/templates/content/datatype/view/ezstring.tpl (design:content/datatype/view/ezstring.tpl) -->

';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_text' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
<!-- STOP: including template: design/standard/templates/content/datatype/view/ezstring.tpl (design:content/datatype/view/ezstring.tpl) -->
';

$setArray = $oldSetArray_8ee4309ac20a821fb9a255068ecda2f6;
$tpl->Level--;
?>
