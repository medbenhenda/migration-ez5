{def $valid_nodes = $block.valid_nodes}
<div class="block block_right">

     <h2>{$block.name|upcase()}</h2>

    <img src={"region.jpg"|ezimage()} alt='{"region"|i18n("dcdgroup/blockrss")}' usemap="#Map"/>

    <map name="Map" id="Map">
         {foreach $valid_nodes as $index => $valid_node}
             {def $shape = $valid_node.data_map.shape.value.0
                  $coords = concat($valid_node.data_map.coords1.data_int, ",", $valid_node.data_map.coords2.data_int, ",",$valid_node.data_map.coords3.data_int, ",",$valid_node.data_map.coords4.data_int)
                  $link = $valid_node.data_map.link.data_text
                  $alt = $valid_node.data_map.alternative_text
                  $title = $valid_node.data_map.title.data_text
                  $contetnt_shape=""
             }
             {switch match=$shape}
                 {case match=0}
                    {set $contetnt_shape="rect"}
                 {/case}
                 {case}
                    {set $contetnt_shape="circle"}
                 {/case}
             {/switch}
             {if ne($title,"Global")}
                <area shape="{$contetnt_shape}" coords="{$coords}" href="{$link}" alt="{$alt|wash()}" title="{$title}" />
            {/if}
             {undef $shape $coords $link $alt $title}
         {/foreach}
    </map>
</div><!--block end-->
{undef $valid_nodes}