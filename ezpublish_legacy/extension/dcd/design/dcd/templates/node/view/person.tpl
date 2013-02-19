<article>
	<a class="avatar" href={$node.url_alias|ezurl} title="{$node.name|wash}">
		{attribute_view_gui attribute=$node.data_map.image image_class='trainee' image_css='avatar' border_size='' margin_size=''}
	</a>
	<div class="meta">
		<h3><a href={$node.url_alias|ezurl} title="{$node.name|wash}">{$node.name}</a></h3>
		<p class="title">{$node.data_map.title.content}</p>
	</div>
</article>