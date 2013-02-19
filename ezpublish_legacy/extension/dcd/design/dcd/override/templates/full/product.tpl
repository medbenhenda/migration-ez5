<div id="main" role="main">
	<div id="content">
		<article>
			<h2>{$node.name|wash()}</h2>
			<ul id="course_meta">
				<li><span>{'Languages'|i18n('dcdpro/product')}:</span> {$node.data_map.languages.content|wash()}</li>
				<li><span>{'Fees'|i18n('dcdpro/product')}:</span> {$node.data_map.fees.content|wash()}</li>
				{if $node.data_map.product_number.has_content}
				<li>
				{if $node.data_map.type.content.0|eq('0')}
					<a target="_blank" class="dpdcart iframe" href="http://dcdintelligence.eventbrite.co.uk/event/{$node.data_map.product_number.content}" onclick="this.href = _gat._getTrackerByName()._getLinkerUrl(this.href);">
						<img border="0" alt="{"Add to Cart"|i18n('dcdpro/product')}" src={"shop/dpd_addtocart_4_sm.png"|ezimage}>
					</a>
				{else}
				
					{def $values = $node.data_map.product_number.content|explode(',')}
						<a target="_blank" class="dpdcart iframe" href="https://dcd-intelligence.dpdcart.com/cart/add?product_id={$values.0}&amp;method_id={first_set( $values.1, '49865')} " onclick="this.href = _gat._getTrackerByName()._getLinkerUrl(this.href);">
							<img border="0" alt="{"Add to Cart"|i18n('dcdpro/product')}" src={"shop/dpd_addtocart_4_sm.png"|ezimage}>
						</a>
					{undef $values} 
					
					{*
					       <a target="_blank" class="dpdcart iframe" href="https://dcd-intelligence.dpdcart.com/cart/add?product_id={$node.data_map.product_number.content}&amp;method_id=49865" onclick="this.href = _gat._getTrackerByName()._getLinkerUrl(this.href);">
                              <img border="0" alt="{"Add to Cart"|i18n('dcdpro/product')}" src={"shop/dpd_addtocart_4_sm.png"|ezimage}>
                           </a>
					*}
					
				{/if}
				</li>
				{/if}
			</ul>
			
	        {if $node.data_map.body.content.is_empty|not}
	            <div class="attribute-long">
	                {attribute_view_gui attribute=$node.data_map.body}
	            </div>
	        {/if}		

		{if $node.data_map.outline.has_content}
			<div id="course_outline">
					<h3>{'Outline and Main Topics'|i18n('dcdpro/product')}</h3>
	
					 {attribute_view_gui attribute=$node.data_map.outline}
			</div>
		{/if}

		</article>
	
	</div>
</div>

<aside id="factsheet">
		{if $node.data_map.right.has_content}
			<div>
				{attribute_view_gui attribute=$node.data_map.right}
			</div>
		{/if}
			
		{if $node.data_map.accreditations.content.relation_list|count|gt(0)}
			<div id="accreditations">
				{foreach $node.data_map.accreditations.content.relation_list as $acc}
					{def $accreditation=fetch( 'content', 'node', hash( 'node_id', $acc.node_id ) )}
						<a href="{$accreditation.data_map.url.content}" title="{$accreditation.name|wash}" target="_blank">
							{attribute_view_gui attribute=$accreditation.data_map.image image_class='accreditation'}
						</a>
					{undef $accreditation}
				{/foreach}
			</div>
		{/if}
		
</aside>

{set scope=global persistent_variable=hash('no_left_column', 'true', 'extra_body_class', 'course schedule', 'site_title', $node.name|wash(), 'description', $node.data_map.summary.data_text|strip_tags()|shorten(250)|wash(), 'keywords', $node.data_map.tags.content|wash() )}

{include uri="design:include/inner_page_header_banner.tpl"}
