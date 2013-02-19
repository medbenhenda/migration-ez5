{if $node.data_map.image.has_content}

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
	
{else}
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