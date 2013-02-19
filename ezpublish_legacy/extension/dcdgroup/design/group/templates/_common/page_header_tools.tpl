{def $marketnode=ezini('ImportantNodeID', 'MarketNodeID', 'group.ini') 
	$locations=fetch('content', 'list', hash( 
                                                'parent_node_id', $marketnode,
                                                'class_filter_type', 'include',
                                                'class_filter_array', array( 'folder'),
                                                'depth', 2
                                                )
                    )
	$regionnode=ezini('ImportantNodeID', 'RegionNodeID', 'group.ini') 
	$regions=fetch('content', 'list', hash( 
                                                'parent_node_id', $regionnode,
                                                'sort_by', array( 'priority', true() ),
                                                'class_filter_type', 'include',
                                                'class_filter_array', array( 'region')
                                                )
                    )
	$id_region="region_north"
}
{*def $items_menu = dcdgetitems('http://www.datacenterdynamics.com/rss-feeds', '8', '0', 'global_nav');*}
<div class="topsearch">
    <ul>
        <li class=""><div class="top_country">
            <span id="country2">{"Market"|i18n("dcdgroup/header")}</span>
            <div id="countries">
                <div id="countries_content">
                	<h2>{"DatacenterDynamics by Country"|i18n("dcdgroup/header")}</h2>
                    {foreach $locations as $element}
                    	{switch match=$element.name}
                    		{case match="North America"}
                    			{set $id_region="region_north"}
                    		{/case}
                    		{case match="Latin America"}
                    			{set $id_region="region_latin"}
                    		{/case}
                    		{case match="Europe"}
                    			{set $id_region="region_europe"}
                    		{/case}
                    		{case match="Middle East/ Africa"}
                    			{set $id_region="region_africa"}
                    		{/case}
                    		{case match="Asia Pacific"}
                    			{set $id_region="region_asia"}
                    		{/case}
                    	{/switch}
                        <div id="{$id_region}" class="region">
                            <h3>{$element.name|wash}</h3>
                            <ul>
                                <div class="view view-conference-listing-NA-market view-id-conference_listing_NA_market view-display-id-default view-dom-id-1">
                                    <div class="view-content">
                                        <div class="item-list">

                                            {def $locations_market=fetch('content', 'list', hash( 
                                                        'parent_node_id', $element.node_id,
                                                        'class_filter_type', 'include',
                                                        'class_filter_array', array( 'location_market')
                                                        )
                                            )
                                                $count_locations=$locations_market|count
                                            }
                                            <ul>
                                            {foreach $locations_market as $index => $item}

                                                <li class="views-row views-row-1 views-row-odd {if eq($index,0)}views-row-first{elseif eq($index, $count_locations)}views-row-last{/if}">
                                                        {attribute_view_gui attribute=$item.data_map.flag image_class='original'}
                                                        <a class="following_year_link" href={$item.data_map.link.value|ezurl()} title="{$item.name|wash()}">{$item.name|wash()}</a>
                                                </li>
                                            {/foreach}
                                            </ul>
                                                        {undef $locations_market}
                                                </div>
                                        </div>
                                </div>
                            </ul> 
                            
                        </div>      
                    {/foreach}
                </div>
            </div>
            </div>
            </li>
            <li class="region">
                <div class="top_country">
                    <div id="region">{"Region"|i18n("dcdgroup/header")}
                        <div id="regionlist">
                            <ul>
	                            {foreach $regions as $region}
	                                <li><a href={$region.data_map.link.value|ezurl()} title="{$region.data_map.region_name.data_text|wash()}">{$region.data_map.region_name.data_text|wash()}</a></li>
	                            {/foreach}
                            </ul>

                            <div class="clear"></div>
                        </div>
                    </div>                                
                </div>
            </li>
            <li>
                {include uri='design:_common/page_header_searchbox.tpl'}
            </li>
    </ul>
</div>
<div class="clr"></div>
 <!-- Top menu area: START -->
{if $pagedata.top_menu}
    {include uri='design:page_topmenu.tpl'}
{/if}
{undef $marketnode $locations $regionnode $regions}
<!-- Top menu area: END -->