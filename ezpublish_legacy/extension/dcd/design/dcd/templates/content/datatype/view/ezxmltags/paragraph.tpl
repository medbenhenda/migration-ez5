{set $classification = cond( and(is_set( $align ), $align ), concat( $classification, ' text-', $align ), $classification )}
<p{if $classification|trim} class="{$classification|wash}"{/if} style="{if is_set( $color )}color: {$color};{/if}{if is_set( $style )}{$style}{/if}">
{if eq( $content|trim(), '' )}&nbsp;{else}{$content}{/if}
</p>