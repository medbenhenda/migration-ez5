{def $topmenu = fetch('content','list',
     						hash(	  parent_node_id, $rootnode ,
						              'class_filter_type',  'include',
						              'class_filter_array', array('folder', 'link'), 
									  'sort_by', array( 'priority', false() ),
									  'limit', 6
     							)) }

	<ul>
		{foreach $topmenu as $item}
			<li>
			  {if eq( $item.class_identifier, 'link')}
                <a href={$item.data_map.location.content|ezurl}{if and( is_set( $item.data_map.open_in_new_window ), $item.data_map.open_in_new_window.data_int )} target="_blank"{/if} title="{$item.data_map.location.data_text|wash}" rel={$item.url_alias|ezurl}><span>{if $item.data_map.location.data_text}{$item.data_map.location.data_text|wash}{else}{$item.name|wash}{/if}</a>
            {else}
                <a href={$item.url_alias|ezurl} title="{$item.name|wash}" >{$item.name|wash}</a>
            {/if}
			</li>
		{/foreach}
	</ul>
