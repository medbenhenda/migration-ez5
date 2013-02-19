		<div id="person_listing">
			<article>
				<h2>{$node.name|wash()}</h2>
				{def $people = fetch('content', 'list', hash(	'parent_node_id', $node.node_id, 
																'sort_by', array( 'priority', false() ),
													            'class_filter_type',  'include',
													            'class_filter_array', array( 'people' )
															 ))}
				
				<section>
					{foreach $people as $person}
						{node_view_gui content_node=$person view='person_full'}
					{/foreach}
				</section>
				
			</article>
		</div>

{set scope=global persistent_variable=hash('extra_body_class', 'about-us')}
