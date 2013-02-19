<?php
// URI:       design/admin/templates/package/navigator.tpl
// Filename:  design/admin/templates/package/navigator.tpl
// Timestamp: 1359052386 (Thu Jan 24 19:33:06 CET 2013)
$oldSetArray_5675e3d175d1b74952766da3ef6e4e13 = isset( $setArray ) ? $setArray : array();
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

$text .= '
</div> 

</div></div></div>
<div class="controlbar">


';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_step', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_step'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'next_step' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="block">
        <input class="button" type="submit" name="NextStepButton" value="';
unset( $var );
$var3 = array();
foreach ( array (
  '%arrowright' => '&raquo;',
) as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'Next %arrowright', $var3 );
unset( $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
    </div>';
}
else
{
$text .= '    <div class="block">
        <input class="button" type="submit" name="NextStepButton" value="Continue" />
    </div>';
}
unset( $if_cond );
// if ends

$text .= '


</div>
';

$setArray = $oldSetArray_5675e3d175d1b74952766da3ef6e4e13;
$tpl->Level--;
?>
