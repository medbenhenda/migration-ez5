<?php
// URI:       design:block/view/view.tpl
// Filename:  extension/ezflow/design/standard/templates/block/view/view.tpl
// Timestamp: 1360064235 (Tue Feb 5 12:37:15 CET 2013)
$oldSetArray_0365196804fa77bce2499aafb19dc37a = isset( $setArray ) ? $setArray : array();
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
    0 => 1,
    1 => 37,
    2 => 38,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/view/view.tpl',
) );
    $tpl->setVariable( 'valid_nodes', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'valid_nodes', $var, $rootNamespace );
}

$text .= '
<h2>Block: ';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezini',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'block',
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
          1 => 'type',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'Name',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'block.ini',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h2>

<ul>';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_8a6b95cb96974c13ece92d0080018485_7 ) ) $fe_variable_stack_8a6b95cb96974c13ece92d0080018485_7 = array();
$fe_variable_stack_8a6b95cb96974c13ece92d0080018485_7[] = compact( 'fe_array_8a6b95cb96974c13ece92d0080018485_7', 'fe_array_keys_8a6b95cb96974c13ece92d0080018485_7', 'fe_n_items_8a6b95cb96974c13ece92d0080018485_7', 'fe_n_items_processed_8a6b95cb96974c13ece92d0080018485_7', 'fe_i_8a6b95cb96974c13ece92d0080018485_7', 'fe_key_8a6b95cb96974c13ece92d0080018485_7', 'fe_val_8a6b95cb96974c13ece92d0080018485_7', 'fe_offset_8a6b95cb96974c13ece92d0080018485_7', 'fe_max_8a6b95cb96974c13ece92d0080018485_7', 'fe_reverse_8a6b95cb96974c13ece92d0080018485_7', 'fe_first_val_8a6b95cb96974c13ece92d0080018485_7', 'fe_last_val_8a6b95cb96974c13ece92d0080018485_7' );
unset( $fe_array_8a6b95cb96974c13ece92d0080018485_7 );
unset( $fe_array_8a6b95cb96974c13ece92d0080018485_7 );
$fe_array_8a6b95cb96974c13ece92d0080018485_7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_nodes'] : null;
if (! isset( $fe_array_8a6b95cb96974c13ece92d0080018485_7 ) ) $fe_array_8a6b95cb96974c13ece92d0080018485_7 = NULL;
while ( is_object( $fe_array_8a6b95cb96974c13ece92d0080018485_7 ) and method_exists( $fe_array_8a6b95cb96974c13ece92d0080018485_7, 'templateValue' ) )
    $fe_array_8a6b95cb96974c13ece92d0080018485_7 = $fe_array_8a6b95cb96974c13ece92d0080018485_7->templateValue();

$fe_array_keys_8a6b95cb96974c13ece92d0080018485_7 = is_array( $fe_array_8a6b95cb96974c13ece92d0080018485_7 ) ? array_keys( $fe_array_8a6b95cb96974c13ece92d0080018485_7 ) : array();
$fe_n_items_8a6b95cb96974c13ece92d0080018485_7 = count( $fe_array_keys_8a6b95cb96974c13ece92d0080018485_7 );
$fe_n_items_processed_8a6b95cb96974c13ece92d0080018485_7 = 0;
$fe_offset_8a6b95cb96974c13ece92d0080018485_7 = 0;
$fe_max_8a6b95cb96974c13ece92d0080018485_7 = $fe_n_items_8a6b95cb96974c13ece92d0080018485_7 - $fe_offset_8a6b95cb96974c13ece92d0080018485_7;
$fe_reverse_8a6b95cb96974c13ece92d0080018485_7 = false;
if ( $fe_offset_8a6b95cb96974c13ece92d0080018485_7 < 0 || $fe_offset_8a6b95cb96974c13ece92d0080018485_7 >= $fe_n_items_8a6b95cb96974c13ece92d0080018485_7 )
{
    $fe_offset_8a6b95cb96974c13ece92d0080018485_7 = ( $fe_offset_8a6b95cb96974c13ece92d0080018485_7 < 0 ) ? 0 : $fe_n_items_8a6b95cb96974c13ece92d0080018485_7;
    if ( $fe_n_items_8a6b95cb96974c13ece92d0080018485_7 || $fe_offset_8a6b95cb96974c13ece92d0080018485_7 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_8a6b95cb96974c13ece92d0080018485_7'. Array count: $fe_n_items_8a6b95cb96974c13ece92d0080018485_7");   
}
}
if ( $fe_max_8a6b95cb96974c13ece92d0080018485_7 < 0 || $fe_offset_8a6b95cb96974c13ece92d0080018485_7 + $fe_max_8a6b95cb96974c13ece92d0080018485_7 > $fe_n_items_8a6b95cb96974c13ece92d0080018485_7 )
{
    if ( $fe_max_8a6b95cb96974c13ece92d0080018485_7 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_8a6b95cb96974c13ece92d0080018485_7");
    $fe_max_8a6b95cb96974c13ece92d0080018485_7 = $fe_n_items_8a6b95cb96974c13ece92d0080018485_7 - $fe_offset_8a6b95cb96974c13ece92d0080018485_7;
}
if ( $fe_reverse_8a6b95cb96974c13ece92d0080018485_7 )
{
    $fe_first_val_8a6b95cb96974c13ece92d0080018485_7 = $fe_n_items_8a6b95cb96974c13ece92d0080018485_7 - 1 - $fe_offset_8a6b95cb96974c13ece92d0080018485_7;
    $fe_last_val_8a6b95cb96974c13ece92d0080018485_7  = 0;
}
else
{
    $fe_first_val_8a6b95cb96974c13ece92d0080018485_7 = $fe_offset_8a6b95cb96974c13ece92d0080018485_7;
    $fe_last_val_8a6b95cb96974c13ece92d0080018485_7  = $fe_n_items_8a6b95cb96974c13ece92d0080018485_7 - 1;
}
// foreach
for ( $fe_i_8a6b95cb96974c13ece92d0080018485_7 = $fe_first_val_8a6b95cb96974c13ece92d0080018485_7; $fe_n_items_processed_8a6b95cb96974c13ece92d0080018485_7 < $fe_max_8a6b95cb96974c13ece92d0080018485_7 && ( $fe_reverse_8a6b95cb96974c13ece92d0080018485_7 ? $fe_i_8a6b95cb96974c13ece92d0080018485_7 >= $fe_last_val_8a6b95cb96974c13ece92d0080018485_7 : $fe_i_8a6b95cb96974c13ece92d0080018485_7 <= $fe_last_val_8a6b95cb96974c13ece92d0080018485_7 ); $fe_reverse_8a6b95cb96974c13ece92d0080018485_7 ? $fe_i_8a6b95cb96974c13ece92d0080018485_7-- : $fe_i_8a6b95cb96974c13ece92d0080018485_7++ )
{
$fe_key_8a6b95cb96974c13ece92d0080018485_7 = $fe_array_keys_8a6b95cb96974c13ece92d0080018485_7[$fe_i_8a6b95cb96974c13ece92d0080018485_7];
$fe_val_8a6b95cb96974c13ece92d0080018485_7 = $fe_array_8a6b95cb96974c13ece92d0080018485_7[$fe_key_8a6b95cb96974c13ece92d0080018485_7];
$vars[$rootNamespace]['valid_node'] = $fe_val_8a6b95cb96974c13ece92d0080018485_7;
$text .= '    <li>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
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

$text .= '</li>';
$fe_n_items_processed_8a6b95cb96974c13ece92d0080018485_7++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_8a6b95cb96974c13ece92d0080018485_7 ) ) extract( array_pop( $fe_variable_stack_8a6b95cb96974c13ece92d0080018485_7 ) );

else
{

unset( $fe_array_8a6b95cb96974c13ece92d0080018485_7 );

unset( $fe_array_keys_8a6b95cb96974c13ece92d0080018485_7 );

unset( $fe_n_items_8a6b95cb96974c13ece92d0080018485_7 );

unset( $fe_n_items_processed_8a6b95cb96974c13ece92d0080018485_7 );

unset( $fe_i_8a6b95cb96974c13ece92d0080018485_7 );

unset( $fe_key_8a6b95cb96974c13ece92d0080018485_7 );

unset( $fe_val_8a6b95cb96974c13ece92d0080018485_7 );

unset( $fe_offset_8a6b95cb96974c13ece92d0080018485_7 );

unset( $fe_max_8a6b95cb96974c13ece92d0080018485_7 );

unset( $fe_reverse_8a6b95cb96974c13ece92d0080018485_7 );

unset( $fe_first_val_8a6b95cb96974c13ece92d0080018485_7 );

unset( $fe_last_val_8a6b95cb96974c13ece92d0080018485_7 );

unset( $fe_variable_stack_8a6b95cb96974c13ece92d0080018485_7 );

}

// foreach ends
$text .= '</ul>
';
// undef $valid_nodes
$tpl->unsetLocalVariable( 'valid_nodes', $rootNamespace );


$setArray = $oldSetArray_0365196804fa77bce2499aafb19dc37a;
$tpl->Level--;
?>
