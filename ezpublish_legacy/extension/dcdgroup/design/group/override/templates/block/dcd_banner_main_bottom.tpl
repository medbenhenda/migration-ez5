{def $valid_nodes = $block.valid_nodes}

<div class="banner_bottom">
    {foreach $valid_nodes as $valid_node}
         <a title="{$valid_node.name|wash()}" href={$valid_node.data_map.url.value|ezurl()}>
            {attribute_view_gui attribute=$valid_node.data_map.image image_class='original'}
         </a>
    {/foreach}
</div>

{undef $valid_nodes}