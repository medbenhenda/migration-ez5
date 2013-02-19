<?php
// URI:       extension/ezdemo/design/ezdemo/templates/canonical_link.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/canonical_link.tpl
// Timestamp: 1360064234 (Tue Feb 5 12:37:14 CET 2013)
$oldSetArray_c094ef310cf8c6eae27755b35168458e = isset( $setArray ) ? $setArray : array();
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

unset( $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_27 );
unset( $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_27 );
$elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_27 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_271 = compiledFetchAttribute( $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_27, 'canonical_language_url' );
unset( $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_27 );
$elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_27 = $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_271;
if (! isset( $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_27 ) ) $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_27 = NULL;
while ( is_object( $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_27 ) and method_exists( $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_27, 'templateValue' ) )
    $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_27 = $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_27->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'canonical_url' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    
    <link rel="canonical" href="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var2 = compiledFetchAttribute( $var1, 'canonical_url' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, 'full' );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />';
}
elseif ( $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_27 )
{
$text .= '    
    <link rel="canonical" href="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var2 = compiledFetchAttribute( $var1, 'canonical_language_url' );
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

$text .= '" />';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_27 );


$setArray = $oldSetArray_c094ef310cf8c6eae27755b35168458e;
$tpl->Level--;
?>
