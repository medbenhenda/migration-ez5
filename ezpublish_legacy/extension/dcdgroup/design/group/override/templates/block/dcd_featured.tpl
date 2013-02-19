{def $valid_nodes = $block.valid_nodes}
<div class="c_block">
    <h2>{$block.name|wash()|upcase()}<span class="view"><a title="{$block.name|wash()}" href="#">{"View All"|i18n("dcdgroup/blockrss")}</a></span></h2>
    <div class="blockbox">      
        {foreach $valid_nodes as $index => $valid_node}
            <div class="featured">
                <h3><a href="{$valid_node.url_alias|ezurl}" title="{$valid_node.name|wash()}">{$valid_node.name|wash()}</a></h3>
                <p class="date">{"Posted on"|i18n("dcdgroup/blockrss")}: {$valid_node.data_map.publish_date.value.timestamp|datetime(custom,"%d %M %Y %H %i %s")} GMT</p>
                {attribute_view_gui attribute=$valid_node.data_map.intro max_length=40}
            </div>
        {/foreach}
    </div>
</div>
{undef $valid_nodes}