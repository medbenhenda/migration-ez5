
{if $module_result.node_id|eq( $rootnode )}
	{def $parent_node_id = $module_result.node_id}
{else}
	{def $parent_node_id = $module_result.path.2.node_id}
{/if}

{if $module_result.content_info.class_identifier|ne('course')}
	{def $banners = fetch('content', 'list', hash( 'parent_node_id', $parent_node_id, 
									              'class_filter_type',  'include',
									              'class_filter_array', array( 'banner' ), 
												  'sort_by', array( 'priority', false() ) 
										  ))}
	
		{if $banners|count|gt(0)}
			<aside class="banners">
			
				<ul>
					{foreach $banners as $banner}
					<li>
						<a title="{$banner.name|wash}" target="_blank" href={$banner.data_map.url.content|wash}>
							{if and( $module_result.node_id|eq( $rootnode ), $banner.data_map.home_image.has_content)}
								{attribute_view_gui attribute=$banner.data_map.home_image image_class="home_banner"}
							{else}
								{attribute_view_gui attribute=$banner.data_map.image image_class="page_banner"}
							{/if}
							
						</a>
					</li>
					{/foreach}
				</ul>
			
			</aside>
		{/if}
	{undef $banners}
{/if}
