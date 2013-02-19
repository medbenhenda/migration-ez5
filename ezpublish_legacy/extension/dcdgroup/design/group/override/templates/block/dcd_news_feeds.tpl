{cache-block expiry=300 keys=array($block.custom_attributes.source, $block.custom_attributes.limit, $block.custom_attributes.offset)}

{def $source = $block.custom_attributes.source
     $limit = $block.custom_attributes.limit
     $offset = $block.custom_attributes.offset
     $link_view_all = $block.custom_attributes.link
     $res = dcdfeedreader( $source, $limit, $offset, $link_view_all )}

<div class="c_block">

<h2>{$block.name|wash()|upcase()} <span class="view"><a title="{$block.name|wash()}" href={$link_view_all|ezurl()} target="_blank">{"View All"|i18n("dcdgroup/blockrss")}</a></span></h2>
<div class="blockbox newsblock">
    <div class="news_left">
        {foreach $res.items as $index => $item}
            {if or($index|eq(0), $index|eq(1), $index|eq(2))}
                {if $index|eq(0)}
                    <div class="news_top infobox">
                {elseif $index|eq(1)}
                    <div class="topleft infobox">
                {elseif $index|eq(2)}
                    <div class="topleft last infobox">
                {/if}

                <div class=" infobox">

                    <img {return_image($item.description)} width="161" height="99" alt="{$item.title|wash()}"/>
                    <div class="info">
                        {$item.description|strip_tags|shorten(40,'...')}
                        <p class="more">
                            <a title="{$item.title|wash}" href={$item.links[0]|ezurl()}>{"more"|i18n("dcdgroup/blockrss")}</a>
                        </p>
                    </div>
                </div>
                </div>
            {/if}
        {/foreach}
    </div>
    {foreach $res.items as $index => $item}
        {if or($index|eq(3), $index|eq(4))}
            <div class="news_right infobox">
                {if $index|eq(3)}
                    <img {return_image($item.description)} width="135" height="99" alt="{$item.title|wash()}"/>
                    <div class="info">
                        {$item.description|strip_tags|shorten(40,'...')}
                        <p class="more">
                            <a title="{$item.title|wash}" href={$item.links[0]|ezurl()}>{"more"|i18n("dcdgroup/blockrss")}</a>
                        </p>
                    </div>
                {else}
                    <div class="info">
                        {$item.description|strip_tags|shorten(90,'...')}
                        <p class="more">
                            <a title="{$item.title|wash}" href={$item.links[0]|ezurl()}>{"more"|i18n("dcdgroup/blockrss")}</a>
                        </p>
                    </div>
                {/if}
            </div>
        {/if}
    {/foreach}
</div>
<div class="clr"></div>

{undef $source $limit $offset $link_view_all $res}
</div>
{/cache-block}
