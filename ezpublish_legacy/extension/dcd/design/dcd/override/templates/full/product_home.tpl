	<h2>{$node.name}</h2>
	
	{def $products = fetch('content', 'list', hash(	'parent_node_id',	 	$node.node_id, 
													'sort_by', 				array( 'priority', false() ),
										            'class_filter_type',  	'include',
										            'class_filter_array',	array( 'product' ),
										            'attribute_filter', 	array( array( '526', '=', 0 ) )
        													) )}
        													
    {if $products|count|gt(0)}
        <article class="course_list">
            <h2 style="text-decoration:underline; margin:10px 0;">{'Seminars'|i18n('dcdpro/product_home')}</h2>
            
                            
            <table style="width:100%;">
            	 <tbody>
                	 {foreach $products as $product} 
	                	 <tr colspan="2" class="course_listing">
	                        <td class="course_links"><a href={$product.url_alias|ezurl} title="{$product.name|wash}">{$product.name}</a></td>
	                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </article>
    {/if}
    
    {set $products = fetch('content', 'list', hash(	'parent_node_id', $node.node_id, 
													'sort_by', array( 'priority', false() ),
										            'class_filter_type',  'include',
										            'class_filter_array', array( 'product' ),
										            'attribute_filter', array( array( '526', '=', 1 ) )
														) )}

    {if $products|count|gt(0)} 
        <article class="course_list">
            <h2 style="text-decoration:underline; margin:10px 0;">{'Market Trend Reports'|i18n('dcdpro/product_home')}</h2>
            
            													
                    <table style="width:100%;">
                            <tbody>
	                    	{foreach $products as $product} 
			                	 <tr colspan="2" class="course_listing">
			                        <td class="course_links"><a href={$product.url_alias|ezurl} title="{$product.name|wash}">{$product.name}</a></td>
			                    </tr>
		                    {/foreach}   
                        </tbody></table>
        </article>
	{/if}
    
   {set $products = fetch('content', 'list', hash(	'parent_node_id', $node.node_id, 
													'sort_by', array( 'priority', false() ),
										            'class_filter_type',  'include',
										            'class_filter_array', array( 'product' ),
										            'attribute_filter', array( array( '526', '=', 2 ) )
														) )}
    
    
    
    {if $products|count|gt(0)}
    <article class="course_list">
        <h2 style="text-decoration:underline; margin:10px 0;">{"Short Reports"|i18n('dcdpro/product_home')}</h2>
            <table style="width:100%;">
                <tbody>
    				{foreach $products as $product}
                    	<tr colspan="2" class="course_listing">
	                        <td class="course_links"><a href={$product.url_alias|ezurl} title="{$product.name|wash}">{$product.name}</a></td>
	                    </tr>
    				{/foreach}	
        		</tbody>
        	</table>
    </article>
    {/if}

 {set $products = fetch('content', 'list', hash(	'parent_node_id', $node.node_id, 
													'sort_by', array( 'priority', false() ),
										            'class_filter_type',  'include',
										            'class_filter_array', array( 'product' ),
										            'attribute_filter', array( array( '526', '=', 3 ) )
														) )}
    
    
    
    {if $products|count|gt(0)}
    <article class="course_list">
        <h2 style="text-decoration:underline; margin:10px 0;">{"Bespoke Reports"|i18n('dcdpro/product_home')}</h2>
            <table style="width:100%;">
                <tbody>
    				{foreach $products as $product}
                    	<tr colspan="2" class="course_listing">
	                        <td class="course_links"><a href={$product.url_alias|ezurl} title="{$product.name|wash}">{$product.name}</a></td>
	                    </tr>
    				{/foreach}	
        		</tbody>
        	</table>
    </article>
    {/if}


{set scope=global persistent_variable=hash('extra_body_class', 'courses')}
