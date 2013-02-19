<?php
// URI:       extension/ezdemo/design/ezdemo/override/templates/block/campaign.tpl
// Filename:  extension/ezdemo/design/ezdemo/override/templates/block/campaign.tpl
// Timestamp: 1360064234 (Tue Feb 5 12:37:14 CET 2013)
$oldSetArray_c2d72018b86a6bf90b1d6d2044f729d8 = isset( $setArray ) ? $setArray : array();
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

// def $valid_nodes
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'valid_nodes' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'valid_nodes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'valid_nodes' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 3,
    1 => 42,
    2 => 104,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/block/campaign.tpl',
) );
    $tpl->setVariable( 'valid_nodes', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'valid_nodes', $var, $rootNamespace );
}

// def $images
if ( $tpl->hasVariable( 'images', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'images' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 3,
    1 => 42,
    2 => 104,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/block/campaign.tpl',
) );
    $tpl->setVariable( 'images', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'images', array (
), $rootNamespace );
}

// def $several
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_nodes'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var1Data = array( 'value' => $var1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $var1Data, false, false );
$var1 = $var1Data['value'];
unset( $var1Data );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = ( ( $var1 ) > ( 1 ) );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'several', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'several' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 3,
    1 => 42,
    2 => 104,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/block/campaign.tpl',
) );
    $tpl->setVariable( 'several', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'several', $var, $rootNamespace );
}

$text .= '<!-- BLOCK: START -->
<div class="block-type-campaign">
    <div class="campaign">
        <a href="#" class="navig prev" style="opacity:0;"><span class="hide">&lt;</span></a>
        <a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'several', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['several'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "valid_nodes", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["valid_nodes"] : null;
$var4 = compiledFetchAttribute( $var3, 1 );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, "url_alias" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

eZURI::transformURI( $var3, false, eZURI::getTransformURIMode() );
$var3 = "\"" . $var3 . "\"";
$var2 = $var3;
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    $var = $var2;
}
else
{
    
    $var = '"#"';
}
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' class="navig next';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'several', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['several'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = !( $var2 );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    $var = " disabled";
}
else
{
    
    $var = '';
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"><span class="hide">&gt;</span></a>
        <ul class="indicator';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'several', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['several'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = !( $var2 );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    $var = " disabled";
}
else
{
    
    $var = '';
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">
            ';
// for begins
if ( !isset( $for_variable_stack_7bbb3fe0db154c0fe51f5bd48db44db3_1 ) ) $for_variable_stack_7bbb3fe0db154c0fe51f5bd48db44db3_1 = array();
$for_variable_stack_7bbb3fe0db154c0fe51f5bd48db44db3_1[] = compact( 'for_firstval_7bbb3fe0db154c0fe51f5bd48db44db3_1', 'for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1', 'for_i_7bbb3fe0db154c0fe51f5bd48db44db3_1' );
$for_firstval_7bbb3fe0db154c0fe51f5bd48db44db3_1 = 1;
unset( $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1 );
unset( $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1 );
$for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_nodes'] : null;
if (! isset( $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1 ) ) $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1 = NULL;
while ( is_object( $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1 ) and method_exists( $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1, 'templateValue' ) )
    $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1 = $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1->templateValue();
$for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1Data = array( 'value' => $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1Data, false, false );
$for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1 = $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1Data['value'];
unset( $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1Data );
if (! isset( $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1 ) ) $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1 = NULL;
while ( is_object( $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1 ) and method_exists( $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1, 'templateValue' ) )
    $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1 = $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1->templateValue();

$skipDelimiter = true;
for ( $for_i_7bbb3fe0db154c0fe51f5bd48db44db3_1 = $for_firstval_7bbb3fe0db154c0fe51f5bd48db44db3_1 ; ; $for_firstval_7bbb3fe0db154c0fe51f5bd48db44db3_1 < $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1 ? $for_i_7bbb3fe0db154c0fe51f5bd48db44db3_1++ : $for_i_7bbb3fe0db154c0fe51f5bd48db44db3_1-- )
{
$vars[$rootNamespace]['i'] = $for_i_7bbb3fe0db154c0fe51f5bd48db44db3_1;
if ( !( $for_firstval_7bbb3fe0db154c0fe51f5bd48db44db3_1 < $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1 ? $for_i_7bbb3fe0db154c0fe51f5bd48db44db3_1 <= $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1 : $for_i_7bbb3fe0db154c0fe51f5bd48db44db3_1 >= $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1 ) )
   break;

$text .= '            <li';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'i', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['i'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( ( $var2 ) == ( 1 ) );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    $var = " class=\"selected\"";
}
else
{
    
    $var = '';
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '><span class="hide">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'i', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['i'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</span></li>
            ';
} // for
if ( count( $for_variable_stack_7bbb3fe0db154c0fe51f5bd48db44db3_1 ) ) extract( array_pop( $for_variable_stack_7bbb3fe0db154c0fe51f5bd48db44db3_1 ) );

else
{

unset( $vars[$rootNamespace]['i'] );
unset( $for_firstval_7bbb3fe0db154c0fe51f5bd48db44db3_1 );

unset( $for_lastval_7bbb3fe0db154c0fe51f5bd48db44db3_1 );

unset( $for_i_7bbb3fe0db154c0fe51f5bd48db44db3_1 );

unset( $for_variable_stack_7bbb3fe0db154c0fe51f5bd48db44db3_1 );

}

$skipDelimiter = false;
// for ends

$text .= '        </ul>
        <ul class="images">
        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_7bbb3fe0db154c0fe51f5bd48db44db3_3 ) ) $fe_variable_stack_7bbb3fe0db154c0fe51f5bd48db44db3_3 = array();
$fe_variable_stack_7bbb3fe0db154c0fe51f5bd48db44db3_3[] = compact( 'fe_array_7bbb3fe0db154c0fe51f5bd48db44db3_3', 'fe_array_keys_7bbb3fe0db154c0fe51f5bd48db44db3_3', 'fe_n_items_7bbb3fe0db154c0fe51f5bd48db44db3_3', 'fe_n_items_processed_7bbb3fe0db154c0fe51f5bd48db44db3_3', 'fe_i_7bbb3fe0db154c0fe51f5bd48db44db3_3', 'fe_key_7bbb3fe0db154c0fe51f5bd48db44db3_3', 'fe_val_7bbb3fe0db154c0fe51f5bd48db44db3_3', 'fe_offset_7bbb3fe0db154c0fe51f5bd48db44db3_3', 'fe_max_7bbb3fe0db154c0fe51f5bd48db44db3_3', 'fe_reverse_7bbb3fe0db154c0fe51f5bd48db44db3_3', 'fe_first_val_7bbb3fe0db154c0fe51f5bd48db44db3_3', 'fe_last_val_7bbb3fe0db154c0fe51f5bd48db44db3_3' );
unset( $fe_array_7bbb3fe0db154c0fe51f5bd48db44db3_3 );
unset( $fe_array_7bbb3fe0db154c0fe51f5bd48db44db3_3 );
$fe_array_7bbb3fe0db154c0fe51f5bd48db44db3_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_nodes'] : null;
if (! isset( $fe_array_7bbb3fe0db154c0fe51f5bd48db44db3_3 ) ) $fe_array_7bbb3fe0db154c0fe51f5bd48db44db3_3 = NULL;
while ( is_object( $fe_array_7bbb3fe0db154c0fe51f5bd48db44db3_3 ) and method_exists( $fe_array_7bbb3fe0db154c0fe51f5bd48db44db3_3, 'templateValue' ) )
    $fe_array_7bbb3fe0db154c0fe51f5bd48db44db3_3 = $fe_array_7bbb3fe0db154c0fe51f5bd48db44db3_3->templateValue();

$fe_array_keys_7bbb3fe0db154c0fe51f5bd48db44db3_3 = is_array( $fe_array_7bbb3fe0db154c0fe51f5bd48db44db3_3 ) ? array_keys( $fe_array_7bbb3fe0db154c0fe51f5bd48db44db3_3 ) : array();
$fe_n_items_7bbb3fe0db154c0fe51f5bd48db44db3_3 = count( $fe_array_keys_7bbb3fe0db154c0fe51f5bd48db44db3_3 );
$fe_n_items_processed_7bbb3fe0db154c0fe51f5bd48db44db3_3 = 0;
$fe_offset_7bbb3fe0db154c0fe51f5bd48db44db3_3 = 0;
$fe_max_7bbb3fe0db154c0fe51f5bd48db44db3_3 = $fe_n_items_7bbb3fe0db154c0fe51f5bd48db44db3_3 - $fe_offset_7bbb3fe0db154c0fe51f5bd48db44db3_3;
$fe_reverse_7bbb3fe0db154c0fe51f5bd48db44db3_3 = false;
if ( $fe_offset_7bbb3fe0db154c0fe51f5bd48db44db3_3 < 0 || $fe_offset_7bbb3fe0db154c0fe51f5bd48db44db3_3 >= $fe_n_items_7bbb3fe0db154c0fe51f5bd48db44db3_3 )
{
    $fe_offset_7bbb3fe0db154c0fe51f5bd48db44db3_3 = ( $fe_offset_7bbb3fe0db154c0fe51f5bd48db44db3_3 < 0 ) ? 0 : $fe_n_items_7bbb3fe0db154c0fe51f5bd48db44db3_3;
    if ( $fe_n_items_7bbb3fe0db154c0fe51f5bd48db44db3_3 || $fe_offset_7bbb3fe0db154c0fe51f5bd48db44db3_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_7bbb3fe0db154c0fe51f5bd48db44db3_3'. Array count: $fe_n_items_7bbb3fe0db154c0fe51f5bd48db44db3_3");   
}
}
if ( $fe_max_7bbb3fe0db154c0fe51f5bd48db44db3_3 < 0 || $fe_offset_7bbb3fe0db154c0fe51f5bd48db44db3_3 + $fe_max_7bbb3fe0db154c0fe51f5bd48db44db3_3 > $fe_n_items_7bbb3fe0db154c0fe51f5bd48db44db3_3 )
{
    if ( $fe_max_7bbb3fe0db154c0fe51f5bd48db44db3_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_7bbb3fe0db154c0fe51f5bd48db44db3_3");
    $fe_max_7bbb3fe0db154c0fe51f5bd48db44db3_3 = $fe_n_items_7bbb3fe0db154c0fe51f5bd48db44db3_3 - $fe_offset_7bbb3fe0db154c0fe51f5bd48db44db3_3;
}
if ( $fe_reverse_7bbb3fe0db154c0fe51f5bd48db44db3_3 )
{
    $fe_first_val_7bbb3fe0db154c0fe51f5bd48db44db3_3 = $fe_n_items_7bbb3fe0db154c0fe51f5bd48db44db3_3 - 1 - $fe_offset_7bbb3fe0db154c0fe51f5bd48db44db3_3;
    $fe_last_val_7bbb3fe0db154c0fe51f5bd48db44db3_3  = 0;
}
else
{
    $fe_first_val_7bbb3fe0db154c0fe51f5bd48db44db3_3 = $fe_offset_7bbb3fe0db154c0fe51f5bd48db44db3_3;
    $fe_last_val_7bbb3fe0db154c0fe51f5bd48db44db3_3  = $fe_n_items_7bbb3fe0db154c0fe51f5bd48db44db3_3 - 1;
}
// foreach
for ( $fe_i_7bbb3fe0db154c0fe51f5bd48db44db3_3 = $fe_first_val_7bbb3fe0db154c0fe51f5bd48db44db3_3; $fe_n_items_processed_7bbb3fe0db154c0fe51f5bd48db44db3_3 < $fe_max_7bbb3fe0db154c0fe51f5bd48db44db3_3 && ( $fe_reverse_7bbb3fe0db154c0fe51f5bd48db44db3_3 ? $fe_i_7bbb3fe0db154c0fe51f5bd48db44db3_3 >= $fe_last_val_7bbb3fe0db154c0fe51f5bd48db44db3_3 : $fe_i_7bbb3fe0db154c0fe51f5bd48db44db3_3 <= $fe_last_val_7bbb3fe0db154c0fe51f5bd48db44db3_3 ); $fe_reverse_7bbb3fe0db154c0fe51f5bd48db44db3_3 ? $fe_i_7bbb3fe0db154c0fe51f5bd48db44db3_3-- : $fe_i_7bbb3fe0db154c0fe51f5bd48db44db3_3++ )
{
$fe_key_7bbb3fe0db154c0fe51f5bd48db44db3_3 = $fe_array_keys_7bbb3fe0db154c0fe51f5bd48db44db3_3[$fe_i_7bbb3fe0db154c0fe51f5bd48db44db3_3];
$fe_val_7bbb3fe0db154c0fe51f5bd48db44db3_3 = $fe_array_7bbb3fe0db154c0fe51f5bd48db44db3_3[$fe_key_7bbb3fe0db154c0fe51f5bd48db44db3_3];
$vars[$rootNamespace]['img_node'] = $fe_val_7bbb3fe0db154c0fe51f5bd48db44db3_3;
$vars[$rootNamespace]['k'] = $fe_key_7bbb3fe0db154c0fe51f5bd48db44db3_3;
$text .= '<li>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'img_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['img_node'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['node'] = $var;
unset( $var );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['image_class'] = 'campaign';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( 'design' );
    $dKeys = $resH->keys();
}
if ( !isset( $dKeysStack ) )
{
    $dKeysStack = array();
}
$dKeysStack[] = $dKeys;
unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentobject_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent_node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'depth' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["depth"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'url_alias' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["url_alias"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_object_remote_id"] = $dKey;
unset( $dKey );

if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/article-59859c683fc58dd4a6e88c3ca5545971.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block_item_campaign/article.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/article-59859c683fc58dd4a6e88c3ca5545971.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block_item_campaign/article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "image", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "image" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/image-7253b39493282456b9ce65ce4a195d55.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block_item_campaign/image.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/image-7253b39493282456b9ce65ce4a195d55.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block_item_campaign/image.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else 
{

if (false)
{
}
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/node/view/block_item_campaign.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );

}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['node'] );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['image_class'] );
$text .= '</li>';
$fe_n_items_processed_7bbb3fe0db154c0fe51f5bd48db44db3_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_7bbb3fe0db154c0fe51f5bd48db44db3_3 ) ) extract( array_pop( $fe_variable_stack_7bbb3fe0db154c0fe51f5bd48db44db3_3 ) );

else
{

unset( $fe_array_7bbb3fe0db154c0fe51f5bd48db44db3_3 );

unset( $fe_array_keys_7bbb3fe0db154c0fe51f5bd48db44db3_3 );

unset( $fe_n_items_7bbb3fe0db154c0fe51f5bd48db44db3_3 );

unset( $fe_n_items_processed_7bbb3fe0db154c0fe51f5bd48db44db3_3 );

unset( $fe_i_7bbb3fe0db154c0fe51f5bd48db44db3_3 );

unset( $fe_key_7bbb3fe0db154c0fe51f5bd48db44db3_3 );

unset( $fe_val_7bbb3fe0db154c0fe51f5bd48db44db3_3 );

unset( $fe_offset_7bbb3fe0db154c0fe51f5bd48db44db3_3 );

unset( $fe_max_7bbb3fe0db154c0fe51f5bd48db44db3_3 );

unset( $fe_reverse_7bbb3fe0db154c0fe51f5bd48db44db3_3 );

unset( $fe_first_val_7bbb3fe0db154c0fe51f5bd48db44db3_3 );

unset( $fe_last_val_7bbb3fe0db154c0fe51f5bd48db44db3_3 );

unset( $fe_variable_stack_7bbb3fe0db154c0fe51f5bd48db44db3_3 );

}

// foreach ends
$text .= '        </ul>
    </div>
</div>
<!-- BLOCK: END -->';
if ( !isset( $GLOBALS['eZTemplateRunOnceKeys']["cb9e935e3cf7acca7ff7b38ab299b99a"] ) )
{
    $GLOBALS['eZTemplateRunOnceKeys']["cb9e935e3cf7acca7ff7b38ab299b99a"] = array( array( 20,
              0,
              936 ),
       array( 20,
              8,
              944 ),
       "extension/ezdemo/design/ezdemo/override/templates/block/campaign.tpl" );
$text .= '<script type="text/javascript">

YUI(YUI3_config).use(\'event\', \'ezsimplegallery\', function (Y) {
    Y.on(\'domready\', function () {
        Y.all(\'.block-type-campaign\').each(function () {
            var gal = new Y.eZ.SimpleGallery({
                gallery: this
            });
        });
    });
});

</script>';
}
// undef $valid_nodes
$tpl->unsetLocalVariable( 'valid_nodes', $rootNamespace );

// undef $images
$tpl->unsetLocalVariable( 'images', $rootNamespace );

// undef $several
$tpl->unsetLocalVariable( 'several', $rootNamespace );


$setArray = $oldSetArray_c2d72018b86a6bf90b1d6d2044f729d8;
$tpl->Level--;
?>
