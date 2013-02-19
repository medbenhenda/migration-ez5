	<div class="avatar">
		{attribute_view_gui attribute=$node.data_map.image image_class='person' border_size='' margin_size=''}
	</div>
	<div class="meta">
		<h3>{$node.name}</h3>
		<p class="title">{$node.data_map.title.content}</p>
		{attribute_view_gui attribute=$node.data_map.description}
	</div>
