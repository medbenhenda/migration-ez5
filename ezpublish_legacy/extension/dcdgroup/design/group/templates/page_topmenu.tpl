{def $topmenu = fetch('content', 'list', hash('parent_node_id', ezini('NodeSettings', 'RootNode', 'content.ini') ,
                                              'class_filter_type',  'include',
                                              'class_filter_array', array('link'), 
                                              'sort_by', array( 'priority', true() ),
                                              'limit', 10
                                            )
                    )
}

    <div class="menu">
	<ul>
        <li>
        	<a href={"/"|ezurl} title="{'Home'|i18n('dcdgroup/header')}" class="active">
        		{"Home"|i18n("dcdgroup/header")}
        	</a>
    	</li>
        {foreach $topmenu as $item}
            <li>
                {if eq( $item.class_identifier, 'link')}
                	{if $item.data_map.location.data_text}
                		{def $title = $item.data_map.location.data_text|wash()}
                	{else}
                		{def $title = $item.name|wash()}
            		{/if}
                    <a href={$item.data_map.location.content|ezurl}{if and( is_set( $item.data_map.open_in_new_window ), $item.data_map.open_in_new_window.data_int )} target="_blank"{/if} title="{$title}">
                    	<span>
                    		{$title}
                    	</span>
                	</a>
                {else}
                    <a href={$item.url_alias|ezurl()} title="{$item.name|wash()}" >
                    	{$item.name||wash()}
                	</a>
                {/if}
            </li>
            {undef $title}
        {/foreach}
	</ul>
    </div>
    <div class="clr"></div>
{undef $topmenu}