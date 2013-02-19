{def $valid_nodes = $block.valid_nodes}

<h2>{$block.name|upcase()}</h2>

<ul>
{foreach $valid_nodes as $valid_node}
    <li><a href={$valid_node.data_map.location.content|ezurl()} title="{$valid_node.name|wash()}">{$valid_node.name|wash()}</a></li>
{/foreach}
</ul>

{undef $valid_nodes}