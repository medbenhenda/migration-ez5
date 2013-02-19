{cache-block expiry=300 keys=array($block.custom_attributes.source, $block.custom_attributes.limit, $block.custom_attributes.offset)}

{def $source = $block.custom_attributes.source
     $limit = $block.custom_attributes.limit
     $offset = $block.custom_attributes.offset
     $link_view_all = $block.custom_attributes.link
     $res = feedreader( $source, $limit, $offset, $link_view_all )}

<div class="c_block">

<h2>{$block.name|wash()|upcase()} <span class="view"><a title="{$block.name|wash()}" href={$link_view_all|ezurl()} target="_blank">{"View All"|i18n("dcdgroup/blockrss")}</a></span></h2>
 <div class="blockbox">
    <ul id="mycarousel" class="jcarousel-skin-tango">
        {foreach $res.items as $index => $item}
           <li><a href={$item.links.0|ezurl()} title="{$item.title|wash()}"> <img {return_image($item.description)} width="150" height="98" alt="{$item.title|wash()}"/></a></li>
        {/foreach}
    </ul>
</div>
<div class="clr"></div>

{undef $source $limit $offset $link_view_all $res}
</div>
{/cache-block}
