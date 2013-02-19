		<div id="person_listing">
			<article>
				<h2>{$node.parent.name}</h2>
				<section>
						<article class="wide">
						 	<div class="avatar">
								{attribute_view_gui attribute=$node.data_map.image image_class='trainee' image_css='avatar' border_size='' margin_size=''}
							</div>
							<div class="meta">
								<h3>{$node.name}</h3>
								<p class="title">{$node.data_map.title.content}</p>
								{attribute_view_gui attribute=$node.data_map.description}
						</article>
				</section>
			</article>
		</div>

{set scope=global persistent_variable=hash('extra_body_class', 'courses')}