<?php
// URI:       design:content/datatype/view/ezinteger.tpl
// Filename:  design/standard/templates/content/datatype/view/ezinteger.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_76093844afcd7505a3b95f5ab3c2a36f = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: design/standard/templates/content/datatype/view/ezinteger.tpl (design:content/datatype/view/ezinteger.tpl) -->

';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'data_int' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
<!-- STOP: including template: design/standard/templates/content/datatype/view/ezinteger.tpl (design:content/datatype/view/ezinteger.tpl) -->
';

$setArray = $oldSetArray_76093844afcd7505a3b95f5ab3c2a36f;
$tpl->Level--;
?>
