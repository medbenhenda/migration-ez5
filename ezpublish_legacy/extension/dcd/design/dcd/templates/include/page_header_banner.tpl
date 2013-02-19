
{if $node.data_map.tags.has_content}
	{def $meta_description = $node.data_map.tags.content|wash}
	{set $meta_description = $meta_description|strip_tags()|wash()|trim()|shorten(250)}
{/if}

{if $node.data_map.tags.has_content}
	{def $keywords = $node.data_map.tags.content|wash}
{/if}

{set scope=global persistent_variable=hash('site_title', $node.name|wash(), 'description', first_set($meta_description, ''), 'keywords',  first_set($keywords, ''))}

{*
 if $node.data_map.image.has_content}

	<div style="display:none;" id="folder_image">
		{attribute_view_gui attribute=$node.data_map.image image_class="header_image"}
	</div>
	<script type="text/javascript">
		$('#header_image').html( $('#folder_image').html() );
	</script>
	
	{if is_set($persistent_variable)}
		{set scope=global persistent_variable=$#persistent_variable|merge( hash('header_image', 'true') )}
	{else}
		{set scope=global persistent_variable= hash('header_image', 'true') }
	{/if}
	
{else 
*}
{if $node.parent.data_map.image.has_content}

	<div style="display:none;" id="folder_image">
		{attribute_view_gui attribute=$node.parent.data_map.image image_class="header_image"}
	</div>
	<script type="text/javascript">
		$('#header_image').html( $('#folder_image').html() );
	</script>

	{if is_set($persistent_variable)}
		{set scope=global persistent_variable=$#persistent_variable|merge( hash('header_image', 'true') )}
	{else}
		{set scope=global persistent_variable= hash('header_image', 'true') }
	{/if}

{/if}