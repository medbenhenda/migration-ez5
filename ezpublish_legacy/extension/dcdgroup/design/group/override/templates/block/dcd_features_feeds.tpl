{cache-block expiry=300 keys=array($block.custom_attributes.source, $block.custom_attributes.limit, $block.custom_attributes.offset)}

{def $source = $block.custom_attributes.source
     $limit = $block.custom_attributes.limit
     $offset = $block.custom_attributes.offset
     $link_view_all = $block.custom_attributes.link
     $res = feedreader( $source, $limit, $offset,$link_view_all )}

<div class="c_block">

<h2>{$block.name|wash()|upcase()} <span class="view"><a title="{$block.name|wash()}" href={$link_view_all|ezurl()} target="_blank">{"View All"|i18n("dcdgroup/blockrss")}</a></span></h2>
<div class="blockbox newsblock">
    {foreach $res.items as $index => $item}
        <div class="featured">
            <h3><a href={$item.links.0|ezurl()} title="{$item.title|wash()}">{$item.title|wash()}</a></h3>
            <p class="date">{"Posted on"|i18n("dcdgroup/blockrss")}: {$item.published|datetime(custom,"%d %M %Y %H %i %s")} GMT</p>
            {$item.description|strip_tags|shorten(40,'...')}
        </div>
    {/foreach}
</div>
<div class="clr"></div>

{undef $source $limit $offset $res $link_view_all}
</div>
{/cache-block}
