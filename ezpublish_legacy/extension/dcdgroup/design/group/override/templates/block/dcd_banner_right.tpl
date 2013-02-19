{def $valid_nodes = $block.valid_nodes}
<div class="block block_right">
    {foreach $valid_nodes as $valid_node}
        <a title="{$valid_node.name|wash()}" href={$valid_node.data_map.url.value|ezurl()}>
        	{attribute_view_gui attribute=$valid_node.data_map.image  image_class='banner_right'}
    	</a>
    {/foreach}
</div><!--block end-->
{undef $valid_nodes}