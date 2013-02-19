   <article class="course_list">
        <header>
            <h4><a href={$node.url_alias|ezurl} title="{$node.name|wash}">{$node.name|wash}</a></h4>
        </header>
	
	    {if and(is_set($node.data_map.intro), $node.data_map.intro.content.is_empty|not)}
	    <div class="attribute-short">
	        {attribute_view_gui attribute=$node.data_map.intro}
	    </div>
	    {elseif and(is_set( $node.data_map.summary ), $node.data_map.summary.content.is_empty|not)}
	    <div class="attribute-short">
	        {attribute_view_gui attribute=$node.data_map.summary}
	    </div>
	    {elseif and(is_set($node.data_map.short_description), $node.data_map.short_description.content.is_empty|not)}
	    <div class="attribute-short">
	        {attribute_view_gui attribute=$node.data_map.short_description}
	    </div>	
	    {/if}
	    
        <a class="button" href={$node.url_alias|ezurl} title="{$node.name|wash}">{"More Information"|i18n('dcdpro/preview')} </a>
    </article>