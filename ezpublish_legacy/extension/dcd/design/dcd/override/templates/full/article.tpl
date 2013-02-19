<h2>{$node.data_map.title.content|wash()}</h2>
<div class="columns">
	{if $node.data_map.body.content.is_empty|not}
	    <div class="attribute-long">
	        {attribute_view_gui attribute=$node.data_map.body}
	    </div>
	{/if}		
</div>

{include uri="design:include/page_header_banner.tpl"}