{set-block scope=root variable=cache_ttl}600{/set-block}
{* Event - Full view *}
<div id="main" role="main">
	<div id="content">
		<article>
		<div class="content-view-full">
		    <div class="class-event">
		    
			    {if $node.data_map.title.has_content}
			        <h2>{$node.data_map.title.content|wash()}</h2>
			    {else}
			        <h2>{$node.name|wash()}</h2>
			    {/if}
		    
			    <div class="attribute-long">
			    <p>
			    {if $node.object.data_map.category.has_content}
				    <span class="ezagenda_keyword">
				    {"Category"|i18n("design/ezwebin/full/event")}:
				    {attribute_view_gui attribute=$node.object.data_map.category}
				    </span>
			    {/if}
			    
			    <span class="ezagenda_date">{$node.object.data_map.from_time.content.timestamp|datetime(custom,"%j %M %H:%i")}
				    {if $node.object.data_map.to_time.has_content}
				          - {$node.object.data_map.to_time.content.timestamp|datetime(custom,"%j %M %H:%i")}
				    {/if}
			    </span>
			    </p>
			    </div>
			
			    {if $node.object.data_map.text.has_content}
			        <div class="attribute-short">{attribute_view_gui attribute=$node.object.data_map.text}</div>
			    {/if}
			
			  </div>
		</div>
        <br />
	</div>
</div>