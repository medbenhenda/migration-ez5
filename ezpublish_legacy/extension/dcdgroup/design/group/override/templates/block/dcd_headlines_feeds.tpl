{cache-block expiry=300 keys=array($block.custom_attributes.source, $block.custom_attributes.limit, $block.custom_attributes.offset)}

{def $source = $block.custom_attributes.source
     $limit = $block.custom_attributes.limit
     $offset = $block.custom_attributes.offset
     $res = feedreader( $source, $limit, $offset )}

<div class="c_block">
   
 <h2>{$block.name|wash()|upcase()}</h2>
 <div class="blockbox">
    {foreach $res.items as $index => $item}
        {if $index|eq(0)}
            <div class="news_details">
                <img {return_image($item.description)} width="219" height="149" alt="{$item.title|wash()}"/>
                <h3><a href="{$item.links[0]}" title="{$item.title|wash()}">{$item.title|wash()}</a></h3>
                <p class="date">{"Published on"|i18n("dcdgroup/blockrss")}: {$item.published|datetime(custom,"%d %M %Y %H %i %s")} GMT</p>
                {$item.description|strip_tags|shorten(400,'...')}
            </div>
        {else}
            {if $index|eq(1)}
                <div class="news_summary">
            {/if}
                <div class="summary">
                    <h3><a href="{$item.links[0]}" title="{$item.title|wash()}">{$item.title|wash()}</a></h3>
                    {$item.description|strip_tags|shorten(70,'...')}
                    <p class="more"><a href={$item.links[0]|ezurl()} title="{$item.title|wash()}">{"more"|i18n("dcdgroup/blockrss")}</a></p>
                </div>
           {if $index|eq(sub($item|count, 1))} </div>{/if}
        {/if}
    {/foreach}
</div>
    <div class="clr"></div>
 
{undef $source $limit $offset $res}
</div>
{/cache-block}
