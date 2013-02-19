<?php
// URI:       design/admin/templates/page_login_copyright.tpl
// Filename:  design/admin/templates/page_login_copyright.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_902b49d5e2b16ee077490f9a942cf57c = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: design/admin/templates/page_login_copyright.tpl (design/admin/templates/page_login_copyright.tpl) -->

<p>
';
unset( $var );
$var3 = array();
foreach ( array (
  '%evaluate_link' => 'http://ez.no',
  '%share_link' => 'http://share.ez.no',
  '%ezpublish_link' => 'http://ez.no/ezpublish',
  '%ez_link' => 'http://ez.no',
) as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( ' <a href="%ezpublish_link">eZ Publish</a> Copyright &copy; 1999-2012 <a href="%ez_link">eZ Systems AS</a> and others.', $var3 );
unset( $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

unset( $var );
unset( $var2 );
unset( $var3 );
$var3 = call_user_func_array( array( new eZSetupFunctionCollection(), 'fetchEdition' ),
  array(  ) );
$var3 = isset( $var3['result'] ) ? $var3['result'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%edition' => $var3, '%about_link' => "\"/ezdemo_site_admin/ezinfo/about\"" );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( ' For more information see <a href=%about_link>ezinfo/about</a>.', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
</p>
<!-- STOP: including template: design/admin/templates/page_login_copyright.tpl (design/admin/templates/page_login_copyright.tpl) -->
';

$setArray = $oldSetArray_902b49d5e2b16ee077490f9a942cf57c;
$tpl->Level--;
?>
