		<h2>{$node.data_map.short_name.content|wash}</h2>

		{def $accreditations = fetch('content', 'list', hash( 'parent_node_id', $node.node_id,
													'sort_by', array( 'priority', false() ),
										            'class_filter_type',  'include',
										            'class_filter_array', array( 'accreditation' )
								            ))}
		<ul>
			{foreach $accreditations as $accreditation}
				<li>
					<a href={$accreditation.url_alias|ezurl} title="{$accreditation.name|wash}" class="accreditation_logo">
							{attribute_view_gui attribute=$accreditation.data_map.image image_class="accreditation_home"}
					</a>
					<div class="accreditation_content">
						<h3><a href={$accreditation.url_alias|ezurl} title="{$accreditation.name|wash}">{$accreditation.name|wash}</a></h3>
						{attribute_view_gui attribute=$accreditation.data_map.summary}
						
						<a class="accreditation_url" href={$accreditation.url_alias|ezurl} title="{$accreditation.name|wash}">View Details</a>
					</div>
				</li>
			{/foreach}
		</ul>

{set scope=global persistent_variable=hash('extra_body_class', 'accreditations')}

{include uri="design:include/inner_page_header_banner.tpl"}