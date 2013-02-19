{cache-block expiry=300 keys=array($block.custom_attributes.source, $block.custom_attributes.limit, $block.custom_attributes.offset)}

{def $source = $block.custom_attributes.source
     $limit = $block.custom_attributes.limit
     $offset = $block.custom_attributes.offset
     $link_view_all = $block.custom_attributes.link
     $res = dcdfeedreader( $source, $limit, $offset, $link_view_all )}

<div class="c_block">
    <h2>{$block.name|wash()|upcase()}<span class="view"><a href={$link_view_all|ezurl()} title="{$block.name|wash()}" target="_blank">View All</a></span></h2>
    <div class="blockbox">
        <div class=" jcarousel-skin-tango_big">
            <div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
                <div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;">
                    <ul id="mycarouse2" class="jcarousel-skin-tango_big">
                      {foreach $res.items as $index => $item}
                        <li>
                        <img {return_image($item.description)} width="470" height="274" alt="{$item.title|wash()}"/>
                            <div class="info">
                                <a href={$item.links.0|ezurl()} title="{$item.title|wash()}"><p class="info-title">{$item.title|wash()}</p></a>
                                
                                <p>{$item.description|strip_tags|shorten(100)}</p>
                            </div>
                       </li>
                    {/foreach}
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
{undef $source $limit $offset $link_view_all $res}
{/cache-block}

