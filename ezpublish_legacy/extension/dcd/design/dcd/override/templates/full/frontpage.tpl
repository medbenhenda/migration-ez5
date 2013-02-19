<div role="main" id="main">
	
	{def $gallery = fetch('content', 'list', hash( 'parent_node_id', $node.node_id, 
									              'class_filter_type',  'include',
									              'class_filter_array', array( 'gallery' ) 
										  ))}
	
	<div id="content_brief">
		{def $slides = fetch('content', 'list', hash( 'parent_node_id', $gallery.0.node_id, 
										              'class_filter_type',  'include',
										              'class_filter_array', array( 'banner' ), 
													  'sort_by', array( 'priority', false() ) 
											  ))}

		<div class="slides_container">
			{foreach $slides as $slide}
					<article style="cursor: hand;cursor: pointer; background: url({$slide.data_map.image.content.original.url|ezroot('single')}) no-repeat scroll 0 0 transparent;" onclick="location.href='{$slide.data_map.url.value}';" class="meta">
					</article>
			{/foreach}
		</div>
		
	</div>

	{def $articles = fetch('content', 'list', hash( 'parent_node_id', $node.node_id, 
									              'class_filter_type',  'include',
									              'class_filter_array', array( 'article' ), 
												  'sort_by', array( 'priority', false(),
												  'limit', 4 ) 
										  ))}
	<div id="content">
		<nav>
			<ul>
				{foreach $articles as $key => $article}
				
					{def $path_string = $article.path_identification_string|explode('/')}
						<li {if $key|eq(0)}class="selected"{/if}><a data-show="{$path_string[count($path_string)|sub(1)]}" href="#">{$article.name}</a></li>
					{undef $path_string}
				{/foreach}
			</ul>
		</nav>
			{foreach $articles as $key => $article}
				{def $path_string = $article.path_identification_string|explode('/')}
					<article id="{$path_string[count($path_string)|sub(1)]}" {if $key|eq(0)}style="display:block;"{else}style="display:none;"{/if}>
						<h2>{attribute_view_gui attribute=$article.data_map.title}</h2>
				
						<div class="columns">
							{attribute_view_gui attribute=$article.data_map.body}
						</div>
			
					</article>
				{undef $path_string}
			{/foreach}
	</div>
	
</div>

{set scope=global persistent_variable=hash('no_left_column', 'true')}