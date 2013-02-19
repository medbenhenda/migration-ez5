{def $item_menu_footer=fetch('content', 'list', hash(
											'parent_node_id',  ezini('ImportantNodeID', 'FooterNodeID', 'group.ini') ,
                                        	'class_filter_type',  'include',
                                            'class_filter_array', array('folder'), 
                                            'sort_by', array( 'priority', true() ),
                                            'limit', 3
													
								)
							)
	 $item_menu_footer_right=fetch('content', 'list', hash(
											'parent_node_id',  ezini('ImportantNodeID', 'FooterRightNodeID', 'group.ini') ,
                                        	'class_filter_type',  'include',
                                            'class_filter_array', array('link'), 
                                            'sort_by', array( 'priority', true() )
													
								)
							)
	 $count_footer=$item_menu_footer|count|sub(1)
	 $last =''
}
<div class="footer_wrapper">
    <div class="footer">
        <div class="footer_data">
            <div class="foot_logo"></div>

            
            {foreach $item_menu_footer as $index => $item}
            {if eq($index, $count_footer)}
            	{set $last="last"}
            {/if}
            <div class="fot_nav {$last}">
            	<h4>{$item.name|wash}</h4>
            	{def $items_menu=fetch('content', 'list', hash(
											'parent_node_id',  $item.node_id ,
                                        	'class_filter_type',  'include',
                                            'class_filter_array', array('link'), 
                                            'sort_by', array( 'priority', true() )
													
								)
							)
				}
				<ul>
					{foreach $items_menu as $element}
						
	                    <li>
                                {if $element.data_map.location.has_content}
                                    <a href={$element.data_map.location.content|ezurl()} target="_blank" title="{$element.data_map.location.data_text|wash}">
                                        {$element.data_map.location.data_text|wash}
                                    </a>
                                {else}
                                    <a href={$element.data_map.location.content|ezurl()} target="_blank" title="{$element.data_map.location.data_text|wash}">
                                        {$element.data_map.location.content}
                                    </a>
                                {/if}
	                    </li>
	                
					{/foreach}
				</ul>
				{undef $items_menu}
				</div><!--foot_nav end-->
            {/foreach}
                
            

        </div><!--footer_data end-->

        <div class="footer_right">
            <div class="fot_nav last">
                <h4>About this Site</h4>
                	<ul>
                		{foreach $item_menu_footer_right as $item_right}
                    		<li><a href={$item_right.data_map.location.value|ezurl()} title="{$item_right.name|wash}">{$item_right.name|wash}</a></li>
                    	{/foreach}
                </ul>
            </div>
        </div><!--footer_right end-->


        <div class="clr"></div>
        <p class="copyright">&copy; Copyright DatacenterDynamics 2012</p>
    </div><!--footer end-->

</div><!--footer_wrapper end-->
{undef $item_menu_footer $count_footer $item_menu_footer_right $last}
