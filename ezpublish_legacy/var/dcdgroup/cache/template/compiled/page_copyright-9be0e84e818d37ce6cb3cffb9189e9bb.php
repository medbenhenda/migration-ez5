<?php
// URI:       design/admin/templates/page_copyright.tpl
// Filename:  design/admin/templates/page_copyright.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_26ad6ad62a1e9f507c3dde3bbee620cf = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: design/admin/templates/page_copyright.tpl (design/admin/templates/page_copyright.tpl) -->

<p>
';
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
$var = strtr( 'Powered by <span class="edition-info">%edition</span>. For more information see <a href=%about_link>ezinfo/about</a>.', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '<br />
';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var5 );
$var5 = call_user_func_array( array( new eZSetupFunctionCollection(), 'fetchFullVersionString' ),
  array(  ) );
$var5 = isset( $var5['result'] ) ? $var5['result'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var3 = ( 'http://share.ez.no?utm_content=eZ+Publish+Community+Project+' . $var5 . '&utm_source=eZ+Publish+Community+Project+Dashboard&utm_medium=eZ+Publish+Community+Project+Dashboard&utm_campaign=eZ+Publish+Community+Project+Dashboard' );
unset( $var5 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%evaluate_link' => "http://ez.no", '%share_link' => $var3, '%ezpublish_link' => "http://ez.no/ezpublish", '%ez_link' => "http://ez.no" );unset( $var3 );
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
$var = strtr( '<a href="%evaluate_link">Evaluate eZ Publish Enterprise Edition</a> - <a href="%share_link">Become a member of the eZ Community, exchange and contribute</a>. <a href="%ezpublish_link">eZ Publish</a> Copyright &copy; 1999-2012 <a href="%ez_link">eZ Systems AS</a> and others.', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
</p>

<!-- STOP: including template: design/admin/templates/page_copyright.tpl (design/admin/templates/page_copyright.tpl) -->
';

$setArray = $oldSetArray_26ad6ad62a1e9f507c3dde3bbee620cf;
$tpl->Level--;
?>
