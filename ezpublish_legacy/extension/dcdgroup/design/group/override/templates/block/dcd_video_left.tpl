{cache-block expiry=300 keys=array($block.custom_attributes.source, $block.custom_attributes.limit, $block.custom_attributes.offset)}

{def $source = $block.custom_attributes.source
     $limit = $block.custom_attributes.limit
     $offset = $block.custom_attributes.offset
     $link_view_all = $block.custom_attributes.link
     $res = dcdfeedreader( $source, $limit, $offset, $link_view_all )}

<div class="block block_left">

    <div class="datacenter">
        <h2>{$block.name|wash()|upcase()}<span class="view">
	        	<a href={$link_view_all|ezurl()} title="{$block.name|wash()}" target="_blank">
	        		{"View All"|i18n("dcdgroup/blockrss")}
	        	</a>
        	</span>
        </h2>
        <ul class="none">
	        {foreach $res.items as $index => $item}
	        {def $day = $item.published|datetime(custom,"%d")
	             $day_string = $item.published|datetime(custom,"%l")
	             $month = $item.published|datetime(custom,"%F")
	             $year = $item.published|datetime(custom,"%Y ")
	             $full_date = $item.published|datetime(custom,"%d %M %Y %H %i %s")}
	
	        	
					<li>
						<img {return_image($item.description)} width="147" height="93" alt="{$item.title|wash()}"/>
						<p>
							<a href={$item.links.0|ezurl()} title="{$item.title|wash()}">{$item.title|wash()}</a>
						</p>
						<p class="dateformate">
							<span>{$day}</span> {$day_string}, {$month} {$year}
						</p>
					</li>
				
	            {undef $day_string $month $day $year $full_date}
	        {/foreach}
        </ul>
    </div>
    <div class="clr"></div>

{undef $source $limit $offset $res $link_view_all}
</div>
{/cache-block}
