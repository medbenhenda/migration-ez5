<?php
// URI:       extension/ezdemo/design/ezdemo/override/templates/block/feed_reader.tpl
// Filename:  extension/ezdemo/design/ezdemo/override/templates/block/feed_reader.tpl
// Timestamp: 1360064234 (Tue Feb 5 12:37:14 CET 2013)
$oldSetArray_f3176a13c147c5ed07833342edf1e7be = isset( $setArray ) ? $setArray : array();
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

unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$cacheKeys2 = compiledFetchAttribute( $cacheKeys1, 'custom_attributes' );
unset( $cacheKeys1 );
$cacheKeys1 = $cacheKeys2;
$cacheKeys2 = compiledFetchAttribute( $cacheKeys1, 'source' );
unset( $cacheKeys1 );
$cacheKeys1 = $cacheKeys2;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$cacheKeys3 = compiledFetchAttribute( $cacheKeys2, 'custom_attributes' );
unset( $cacheKeys2 );
$cacheKeys2 = $cacheKeys3;
$cacheKeys3 = compiledFetchAttribute( $cacheKeys2, 'limit' );
unset( $cacheKeys2 );
$cacheKeys2 = $cacheKeys3;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
unset( $cacheKeys3 );
unset( $cacheKeys3 );
$cacheKeys3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$cacheKeys4 = compiledFetchAttribute( $cacheKeys3, 'custom_attributes' );
unset( $cacheKeys3 );
$cacheKeys3 = $cacheKeys4;
$cacheKeys4 = compiledFetchAttribute( $cacheKeys3, 'offset' );
unset( $cacheKeys3 );
$cacheKeys3 = $cacheKeys4;
if (! isset( $cacheKeys3 ) ) $cacheKeys3 = NULL;
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2, $cacheKeys3 );unset( $cacheKeys1, $cacheKeys2, $cacheKeys3 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "1_0_1_131_extension/ezdemo/design/ezdemo/override/templates/block/feed_reader.tpl", "eng" );

list($cacheHandler_7b1391ed7f68936946f47692a50f6470, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 300, true );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
// def $source
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'custom_attributes' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'source' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'source', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'source' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 6,
    1 => 50,
    2 => 324,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/block/feed_reader.tpl',
) );
    $tpl->setVariable( 'source', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'source', $var, $rootNamespace );
}

// def $limit
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'custom_attributes' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'limit' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'limit', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'limit' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 6,
    1 => 50,
    2 => 324,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/block/feed_reader.tpl',
) );
    $tpl->setVariable( 'limit', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'limit', $var, $rootNamespace );
}

// def $offset
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'custom_attributes' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'offset' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'offset', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'offset' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 6,
    1 => 50,
    2 => 324,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/block/feed_reader.tpl',
) );
    $tpl->setVariable( 'offset', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'offset', $var, $rootNamespace );
}

// def $res
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'feedreader',
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
        2 => 'source',
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'limit',
      ),
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'offset',
      ),
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
if ( $tpl->hasVariable( 'res', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'res' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 136,
  ),
  1 => 
  array (
    0 => 6,
    1 => 50,
    2 => 324,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/block/feed_reader.tpl',
) );
    $tpl->setVariable( 'res', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'res', $var, $rootNamespace );
}

$text .= '
<div class="block-type-feed-reader item-list">
    <div class="attribute-header">
        <h2>
            <a href="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'res', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['res'] : null;
$var1 = compiledFetchAttribute( $var, 'links' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 0 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'res', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['res'] : null;
$var2 = compiledFetchAttribute( $var1, 'title' );
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

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'res', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['res'] : null;
$var2 = compiledFetchAttribute( $var1, 'title' );
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

$text .= '</a>
        </h2>
    </div>
    <article>
        <ul>
        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_7a25975849028dae4f26f7890fb9ea68_9 ) ) $fe_variable_stack_7a25975849028dae4f26f7890fb9ea68_9 = array();
$fe_variable_stack_7a25975849028dae4f26f7890fb9ea68_9[] = compact( 'fe_array_7a25975849028dae4f26f7890fb9ea68_9', 'fe_array_keys_7a25975849028dae4f26f7890fb9ea68_9', 'fe_n_items_7a25975849028dae4f26f7890fb9ea68_9', 'fe_n_items_processed_7a25975849028dae4f26f7890fb9ea68_9', 'fe_i_7a25975849028dae4f26f7890fb9ea68_9', 'fe_key_7a25975849028dae4f26f7890fb9ea68_9', 'fe_val_7a25975849028dae4f26f7890fb9ea68_9', 'fe_offset_7a25975849028dae4f26f7890fb9ea68_9', 'fe_max_7a25975849028dae4f26f7890fb9ea68_9', 'fe_reverse_7a25975849028dae4f26f7890fb9ea68_9', 'fe_first_val_7a25975849028dae4f26f7890fb9ea68_9', 'fe_last_val_7a25975849028dae4f26f7890fb9ea68_9' );
unset( $fe_array_7a25975849028dae4f26f7890fb9ea68_9 );
unset( $fe_array_7a25975849028dae4f26f7890fb9ea68_9 );
$fe_array_7a25975849028dae4f26f7890fb9ea68_9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'res', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['res'] : null;
$fe_array_7a25975849028dae4f26f7890fb9ea68_91 = compiledFetchAttribute( $fe_array_7a25975849028dae4f26f7890fb9ea68_9, 'items' );
unset( $fe_array_7a25975849028dae4f26f7890fb9ea68_9 );
$fe_array_7a25975849028dae4f26f7890fb9ea68_9 = $fe_array_7a25975849028dae4f26f7890fb9ea68_91;
if (! isset( $fe_array_7a25975849028dae4f26f7890fb9ea68_9 ) ) $fe_array_7a25975849028dae4f26f7890fb9ea68_9 = NULL;
while ( is_object( $fe_array_7a25975849028dae4f26f7890fb9ea68_9 ) and method_exists( $fe_array_7a25975849028dae4f26f7890fb9ea68_9, 'templateValue' ) )
    $fe_array_7a25975849028dae4f26f7890fb9ea68_9 = $fe_array_7a25975849028dae4f26f7890fb9ea68_9->templateValue();

$fe_array_keys_7a25975849028dae4f26f7890fb9ea68_9 = is_array( $fe_array_7a25975849028dae4f26f7890fb9ea68_9 ) ? array_keys( $fe_array_7a25975849028dae4f26f7890fb9ea68_9 ) : array();
$fe_n_items_7a25975849028dae4f26f7890fb9ea68_9 = count( $fe_array_keys_7a25975849028dae4f26f7890fb9ea68_9 );
$fe_n_items_processed_7a25975849028dae4f26f7890fb9ea68_9 = 0;
$fe_offset_7a25975849028dae4f26f7890fb9ea68_9 = 0;
$fe_max_7a25975849028dae4f26f7890fb9ea68_9 = $fe_n_items_7a25975849028dae4f26f7890fb9ea68_9 - $fe_offset_7a25975849028dae4f26f7890fb9ea68_9;
$fe_reverse_7a25975849028dae4f26f7890fb9ea68_9 = false;
if ( $fe_offset_7a25975849028dae4f26f7890fb9ea68_9 < 0 || $fe_offset_7a25975849028dae4f26f7890fb9ea68_9 >= $fe_n_items_7a25975849028dae4f26f7890fb9ea68_9 )
{
    $fe_offset_7a25975849028dae4f26f7890fb9ea68_9 = ( $fe_offset_7a25975849028dae4f26f7890fb9ea68_9 < 0 ) ? 0 : $fe_n_items_7a25975849028dae4f26f7890fb9ea68_9;
    if ( $fe_n_items_7a25975849028dae4f26f7890fb9ea68_9 || $fe_offset_7a25975849028dae4f26f7890fb9ea68_9 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_7a25975849028dae4f26f7890fb9ea68_9'. Array count: $fe_n_items_7a25975849028dae4f26f7890fb9ea68_9");   
}
}
if ( $fe_max_7a25975849028dae4f26f7890fb9ea68_9 < 0 || $fe_offset_7a25975849028dae4f26f7890fb9ea68_9 + $fe_max_7a25975849028dae4f26f7890fb9ea68_9 > $fe_n_items_7a25975849028dae4f26f7890fb9ea68_9 )
{
    if ( $fe_max_7a25975849028dae4f26f7890fb9ea68_9 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_7a25975849028dae4f26f7890fb9ea68_9");
    $fe_max_7a25975849028dae4f26f7890fb9ea68_9 = $fe_n_items_7a25975849028dae4f26f7890fb9ea68_9 - $fe_offset_7a25975849028dae4f26f7890fb9ea68_9;
}
if ( $fe_reverse_7a25975849028dae4f26f7890fb9ea68_9 )
{
    $fe_first_val_7a25975849028dae4f26f7890fb9ea68_9 = $fe_n_items_7a25975849028dae4f26f7890fb9ea68_9 - 1 - $fe_offset_7a25975849028dae4f26f7890fb9ea68_9;
    $fe_last_val_7a25975849028dae4f26f7890fb9ea68_9  = 0;
}
else
{
    $fe_first_val_7a25975849028dae4f26f7890fb9ea68_9 = $fe_offset_7a25975849028dae4f26f7890fb9ea68_9;
    $fe_last_val_7a25975849028dae4f26f7890fb9ea68_9  = $fe_n_items_7a25975849028dae4f26f7890fb9ea68_9 - 1;
}
// foreach
for ( $fe_i_7a25975849028dae4f26f7890fb9ea68_9 = $fe_first_val_7a25975849028dae4f26f7890fb9ea68_9; $fe_n_items_processed_7a25975849028dae4f26f7890fb9ea68_9 < $fe_max_7a25975849028dae4f26f7890fb9ea68_9 && ( $fe_reverse_7a25975849028dae4f26f7890fb9ea68_9 ? $fe_i_7a25975849028dae4f26f7890fb9ea68_9 >= $fe_last_val_7a25975849028dae4f26f7890fb9ea68_9 : $fe_i_7a25975849028dae4f26f7890fb9ea68_9 <= $fe_last_val_7a25975849028dae4f26f7890fb9ea68_9 ); $fe_reverse_7a25975849028dae4f26f7890fb9ea68_9 ? $fe_i_7a25975849028dae4f26f7890fb9ea68_9-- : $fe_i_7a25975849028dae4f26f7890fb9ea68_9++ )
{
$fe_key_7a25975849028dae4f26f7890fb9ea68_9 = $fe_array_keys_7a25975849028dae4f26f7890fb9ea68_9[$fe_i_7a25975849028dae4f26f7890fb9ea68_9];
$fe_val_7a25975849028dae4f26f7890fb9ea68_9 = $fe_array_7a25975849028dae4f26f7890fb9ea68_9[$fe_key_7a25975849028dae4f26f7890fb9ea68_9];
$vars[$rootNamespace]['item'] = $fe_val_7a25975849028dae4f26f7890fb9ea68_9;
$text .= '            <li>
                <a href="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'links' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 0 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'title' );
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

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'title' );
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

$text .= '</a>
            </li>
        ';
$fe_n_items_processed_7a25975849028dae4f26f7890fb9ea68_9++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_7a25975849028dae4f26f7890fb9ea68_9 ) ) extract( array_pop( $fe_variable_stack_7a25975849028dae4f26f7890fb9ea68_9 ) );

else
{

unset( $fe_array_7a25975849028dae4f26f7890fb9ea68_9 );

unset( $fe_array_keys_7a25975849028dae4f26f7890fb9ea68_9 );

unset( $fe_n_items_7a25975849028dae4f26f7890fb9ea68_9 );

unset( $fe_n_items_processed_7a25975849028dae4f26f7890fb9ea68_9 );

unset( $fe_i_7a25975849028dae4f26f7890fb9ea68_9 );

unset( $fe_key_7a25975849028dae4f26f7890fb9ea68_9 );

unset( $fe_val_7a25975849028dae4f26f7890fb9ea68_9 );

unset( $fe_offset_7a25975849028dae4f26f7890fb9ea68_9 );

unset( $fe_max_7a25975849028dae4f26f7890fb9ea68_9 );

unset( $fe_reverse_7a25975849028dae4f26f7890fb9ea68_9 );

unset( $fe_first_val_7a25975849028dae4f26f7890fb9ea68_9 );

unset( $fe_last_val_7a25975849028dae4f26f7890fb9ea68_9 );

unset( $fe_variable_stack_7a25975849028dae4f26f7890fb9ea68_9 );

}

// foreach ends
$text .= '        </ul>
    </article>
</div>';
$cachedText = $text;
$cacheHandler_7b1391ed7f68936946f47692a50f6470->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_7b1391ed7f68936946f47692a50f6470 );
}


$setArray = $oldSetArray_f3176a13c147c5ed07833342edf1e7be;
$tpl->Level--;
?>
