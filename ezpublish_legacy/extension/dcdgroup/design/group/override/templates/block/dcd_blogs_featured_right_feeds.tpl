{cache-block expiry=300 keys=array($block.custom_attributes.source, $block.custom_attributes.limit, $block.custom_attributes.offset)}

{def $source_blog = $block.custom_attributes.source_blog
     $limit_blog = $block.custom_attributes.limit_blog
     $offset_blog = $block.custom_attributes.offset_blog
     $link_blog = $block.custom_attributes.link_blog
     $res_blog = dcdfeedreader( $source_blog, $limit_blog, $offset_blog, $link_blog )
     $source_featured = $block.custom_attributes.source_featured
     $limit_featured = $block.custom_attributes.limit_featured
     $offset_featured = $block.custom_attributes.offset_featured
     $link_featured = $block.custom_attributes.link_featured
     $res_featured = dcdfeedreader( $source_featured, $limit_featured, $offset_featured, $link_featured )
     $urldatacenter=ezini('ImportantNodeID', 'URLDataCenter', 'group.ini')
}

<div class="block block_right">
        <div class="datacenter focus">

            <h2>{"Blogs"|i18n("dcdgroup/blockrss")}
                <span class="view">
                    <a title={"Blogs"|i18n("dcdgroup/blockrss")} href={$link_blog|ezurl()} target="_blank">{"View All"|i18n("dcdgroup/blockrss")}</a>
                </span></h2>
                <ul>
                    {foreach $res_blog.items as $index => $item}
                        {def $creator_explode=$item.creator|explode(" ")
                             $url_creator=concat($urldatacenter, $creator_explode.0|downcase(),"-", $creator_explode.1|downcase())}
                        <li>
                            <a href={$item.links.0|ezurl()} title="{$item.title|wash()}">{$item.title|wash()|shorten(25, '...')}</a>
                            {"by"|i18n("dcdgroup/blockrss")}
                            <a href={$url_creator|ezurl} title="{$item.creator|wash()}">{$item.creator|wash()}</a>
                            {"on"|i18n("dcdgroup/blockrss")} {$item.published|datetime(custom,"%d %M %Y %H %i %s")} GMT
                            <br>
                            <a title="{$item.title|wash()}" href={$item.links[0]|ezurl()}>{"Read More..."|i18n("dcdgroup/blockrss")}</a>
                        </li>
                        {undef $creator_explode $url_creator}
                    {/foreach}
                </ul>

            <h2>{"Features"|i18n("dcdgroup/blockrss")} <span class="view"><a title={"Features"|i18n("dcdgroup/blockrss")} href={$link_featured|ezurl()} target="_blank">{"View All"|i18n("dcdgroup/blockrss")}</a></span></h2>
                <ul>
                    {foreach $res_featured.items as $index => $item}
                         {def $creator_explode=$item.creator|explode(" ")
                             $url_creator=concat($urldatacenter, $creator_explode.0|downcase(),"-", $creator_explode.1|downcase())}
                        <li> 
                            <a href={$item.links.0|ezurl()} title="{$item.title|wash()}">{$item.title|wash()|shorten(25, '...')}</a>
                            {"by"|i18n("dcdgroup/blockrss")}
                            <a href={$url_creator|ezurl} title="{$item.creator|wash()}">{$item.creator|wash()}</a>
                            {"on"|i18n("dcdgroup/blockrss")} {$item.published|datetime(custom,"%d %M %Y %H %i %s")} GMT
                            <br>
                            <a title="{$item.title|wash()}" href={$item.links.0|ezurl()}>{"Read More..."|i18n("dcdgroup/blockrss")}</a>
                            
                        </li>
                        {undef $creator_explode $url_creator}
                    {/foreach}
                </ul>
            {undef $source_blog $limit_blog $offset_blog $res_blog $source_featured $limit_featured $offset_featured $res_featured $link_blog $link_featured $urldatacenter}
        </div>
</div>
{/cache-block}
