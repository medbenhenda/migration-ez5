{cache-block expiry=300 keys=array($block.custom_attributes.source, $block.custom_attributes.limit, $block.custom_attributes.offset)}

{def $source = $block.custom_attributes.source
     $limit = $block.custom_attributes.limit
     $offset = $block.custom_attributes.offset
     $link_view_all = $block.custom_attributes.link
     $res = dcdfeedreader( $source, $limit, $offset, $link_view_all )
     $urldatacenter=ezini('ImportantNodeID', 'URLDataCenter', 'group.ini')
}

<div class="block block_right">

    <div class="datacenter">
        <h2>{$block.name|wash()|upcase()} <span class="view"><a title="{$block.name|wash()}" href={$link_view_all|ezurl()} target="_blank">{"View All"|i18n("dcdgroup/blockrss")}</a></span></h2>
        {foreach $res.items as $index => $item}
        {def $day = $item.published|datetime(custom,"%d")
             $day_string = $item.published|datetime(custom,"%l")
             $month = $item.published|datetime(custom,"%F")
             $year = $item.published|datetime(custom,"%Y ")
             $full_date = $item.published|datetime(custom,"%d %M %Y %H %i %s")
             $creator_explode=$item.creator|explode(" ")
             $url_creator=concat($urldatacenter, $creator_explode.0|downcase(),"-", $creator_explode.1|downcase())}
            <ul class="none">
                <li>
                    <p class="dateformate">
                    <span>{$day}</span>
                    {$day_string}, {$month}. {$year}
                    </p>
                    <a href={$item.links.0|ezurl()} title="{$item.title|wash()}">{$item.title|wash()}</a>
                    by
                    <a href={$url_creator|ezurl} title="{$item.creator|wash()}">{$item.creator|wash()}</a>
                    on {$full_date} GMT
                    <br>
                    <a title="{$item.title|wash()}" href={$item.links.0|ezurl()}>{"Read More..."|i18n("dcdgroup/blockrss")}</a>
                </li>
            </ul>
            {undef $day_string $month $day $year $full_date $creator_explode $creator_explode}
        {/foreach}
    </div>
    <div class="clr"></div>

{undef $source $limit $offset $res $link_view_all $urldatacenter}
</div>
{/cache-block}
