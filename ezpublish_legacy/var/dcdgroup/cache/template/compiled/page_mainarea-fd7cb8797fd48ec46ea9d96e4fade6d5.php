<?php
// URI:       extension/ezdemo/design/ezdemo/templates/page_mainarea.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/page_mainarea.tpl
// Timestamp: 1360064234 (Tue Feb 5 12:37:14 CET 2013)
$oldSetArray_c54d477ff7b9263881396679fcf13c52 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/ezdemo/design/ezdemo/templates/page_mainarea.tpl (extension/ezdemo/design/ezdemo/templates/page_mainarea.tpl) -->
<div class="span';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'inner_column_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['inner_column_size'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' main-content">
    <!-- Main area content: START -->
    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
    <!-- Main area content: END -->
</div>

<!-- STOP: including template: extension/ezdemo/design/ezdemo/templates/page_mainarea.tpl (extension/ezdemo/design/ezdemo/templates/page_mainarea.tpl) -->
';

$setArray = $oldSetArray_c54d477ff7b9263881396679fcf13c52;
$tpl->Level--;
?>
