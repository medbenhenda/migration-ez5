<div id="main" role="main">
	<div id="content">
		<article class="basket">
			<h2>{"Basket"|i18n("design/ezwebin/shop/basket")}</h2>
			
			<div class="shop-basket">
					{if $removed_items}
						<div class="warning">
						    <h2>{"The following items were removed from your basket because the products were changed."|i18n("design/ezwebin/shop/basket",,)}</h2>
						    <ul>
							    {foreach $removed_items as $item}
							        <li> <a href={$item.contentobject.main_node.url_alias|ezurl} title="{$item.contentobject.name|wash}">{$item.contentobject.name|wash}</a></li>
							    {/section}
						    </ul>
						</div>
					{/if}
					
					{if not( $vat_is_known )}
						<div class="message-warning">
						<h2>{'VAT is unknown'|i18n( 'design/ezwebin/shop/basket' )}</h2>
						{'VAT percentage is not yet known for some of the items being purchased.'|i18n( 'design/ezwebin/shop/basket' )}<br/>
						{'This probably means that some information about you is not yet available and will be obtained during checkout.'|i18n( 'design/ezwebin/shop/basket' )}
						</div>
					{/if}
					
					{section show=$error}
						<div class="error">
						{section show=$error|eq(1)}
							<h2>{"Attempted to add object without price to basket."|i18n("design/ezwebin/shop/basket",,)}</h2>
						{/section}
						</div>
					{/section}
					
					{section show=$error}
						<div class="error">
							{section show=eq($error, "aborted")}
								<h2>{"Your payment was aborted."|i18n("design/ezwebin/shop/basket",,)}</h2>
							{/section}
						</div>
					{/section}
					
				    {def $currency = fetch( 'shop', 'currency', hash( 'code', $basket.productcollection.currency_code ) )
				         $locale = false()
				         $symbol = false()}
				         
				    {if $currency}
				        {set locale = $currency.locale
				             symbol = $currency.symbol}
				    {/if}
				
					{def $currency_code = ''}
					{if $currency.symbol|eq('$')}
						{set $currency_code =  $currency.code}
					{/if}
				
					{if $basket.items}
					
						<form method="post" action={"/dcdshop/basket/"|ezurl}>
							<table class="list"  width="100%" cellspacing="0" cellpadding="0" border="0">
							<tr>
								<td>
							    	<strong>{"Course Code"|i18n("dcd/shop/basket")}</strong>
							    </td>
								<td>
							    	<strong>{"Course Name"|i18n("dcd/shop/basket")}</strong>
							    </td>					    
							    <td>
							    	<strong>{"Net Price"|i18n("dcd/shop/basket")}</strong>
							    </td>
							    <td>
							    	<strong>{"Quantity"|i18n("dcd/shop/basket")}</strong>
							    </td>
							    {if and( is_set($discount_info), $discount_info.valid_discounts|gt(0) )}
								    <td>
								    	<strong>{"Discount"|i18n("dcd/shop/basket")}</strong>
								    </td>					    	
							    {/if}
							    <td>
							    	<strong>{"Subtotal"|i18n("dcd/shop/basket")}</strong>
							    </td>
							</tr>
							
							{foreach $basket.items as $item}
							<tr>
								<td>
									<input type="hidden" name="ProductItemIDList[]" value="{$item.id}" />
									
									{if $item.item_object.contentobject.class_identifier|eq('event')}
							   			{def $course = fetch('content', 'node', hash('node_id', $item.item_object.contentobject.data_map.course.content.relation_list.0.node_id ))}
							   		
										{if $course.data_map.course_code.has_content}
											{$course.data_map.course_code.content}	
										{/if}
									{else}
										{$item.item_object.contentobject.data_map.course_code.content}
									{/if}
									
								</td>
								<td>
								<input type="checkbox" name="RemoveProductItemDeleteList[]" value="{$item.id}" style="float:left; margin-right: 5px;" />
									{if $item.item_object.contentobject.class_identifier|eq('event')}
										<a href={$course.url_alias|ezurl} title="{$item.object_name|wash}">{$item.object_name}</a>
									{else}
										<a href={$item.item_object.contentobject.main_node.url_alias|ezurl} title="{$item.name|wash}">{$item.object_name}</a>
									{/if}
								</td>
							    <td>
							     	{$item.price_ex_vat|l10n( 'currency', $locale, $symbol )} {$currency_code}
							    </td>
					    		<td>
							    	<input type="text" name="ProductItemCountList[]" value="{$item.item_count}" size="5" />
							    </td>
							     {if and( is_set($discount_info), $discount_info.valid_discounts|gt(0) )}
								    <td>
								    	{if $item.item_object.contentobject.class_identifier|eq('event')}
								    		{$discount_info.classroom_discount} %
								    	{elseif $item.item_object.contentobject.class_identifier|eq('course')}
								    		{$discount_info.online_discount} %
								    	{/if}
								    </td>							    	
							    {/if}
							    
							    <td>
							     	{$item.total_price_ex_vat|l10n( 'currency', $locale, $symbol )} {$currency_code}
							    </td>
							</tr>
							
							{/foreach}
							
							
							<tr class="cart_footer">
							    <td colspan=" {if and( is_set($discount_info), $discount_info.valid_discounts|gt(0) )}6{else}5{/if}">
							    	<input class="button" type="submit" name="ContinueShoppingButton" value="{'Continue shopping'|i18n('design/ezwebin/shop/basket')}" />
							    	<input class="button" type="submit" name="RemoveProductItemButton" value="{'Remove Selected'|i18n('design/ezwebin/shop/basket')}" />
							    	<input class="button" type="submit" name="StoreChangesButton" value="{'Update'|i18n('design/ezwebin/shop/basket')}" /> 
							    </td>
							</tr>
							
							
							{if is_set( $shipping_info )}
								{* Show shipping type/cost. *}
								<tr>
								     <td colspan="3">
								     <a href={$shipping_info.management_link|ezurl}>{'Shipping'|i18n( 'design/ezwebin/shop/basket' )}{if $shipping_info.description} ({$shipping_info.description}){/if}</a>:
								     </td>
								     <td>
								     {$shipping_info.cost|l10n( 'currency', $locale, $symbol )} {$currency_code}:
								     </td>
								     <td>
								     {$shipping_info.cost|l10n( 'currency', $locale, $symbol )} {$currency_code}:
								     </td>
								</tr>
								{* Show order total *}
								<tr>
								     <td colspan="3">
								     	<strong>{'Order total'|i18n( 'design/ezwebin/shop/basket' )}</strong>:
								     </td>
								     <td>
								     	<strong>{$total_inc_shipping_ex_vat|l10n( 'currency', $locale, $symbol )}</strong>
								     </td>
								     <td>
								     	<strong>{$total_inc_shipping_inc_vat|l10n( 'currency', $locale, $symbol )}</strong>
								     </td>
								</tr>
							{/if}
							
							<tr>
							     <td colspan=" {if and( is_set($discount_info), $discount_info.valid_discounts|gt(0) )}4{else}3{/if}">
							     </td>
							     <td>
							     <strong>{"Total"|i18n("design/ezwebin/shop/basket")}</strong>:
							     </td>
							     <td>
							     {$basket.total_ex_vat|l10n( 'currency', $locale, $symbol )}  {$currency_code}
							     </td>
							</tr>
							
							<tr>
								<td colspan=" {if and( is_set($discount_info), $discount_info.valid_discounts|gt(0) )}6{else}5{/if}">
									<input style="float: right;" class="button" type="submit" name="CheckoutButton" value="{"Checkout"|i18n('design/ezwebin/shop/basket')}" /> &nbsp;
								</td>
							</tr>
						</table>

					</form>
					{undef $currency $locale $symbol}
					
				{else}
					
					<div class="feedback">
					<h2>{"You have no products in your basket."|i18n("design/ezwebin/shop/basket")}</h2>
					</div>
					
				{/if}
				
				<table>
					<tr>
					     <td colspan="5">
					     	<strong>{"Discount codes"|i18n('dcdshop/basket')}</strong>
					     </td>
					</tr>
					<tr class="cart_footer">
					     <td colspan="5">
							<form action={'dcdshop/discount'|ezurl} method="post">
					  			  <input value="" placeholder="{"Coupon Code"|i18n('dcd/basket')}" class="text" name="discount" style="float:left" />
						          <input class="button" type="submit" value="{'Apply Coupon'|i18n( 'design/standard/shop/preferredcurrency' )}" />
					        </form>
					     </td>
					</tr>
					
					{if and( is_set($discount_info), count( $discount_info.discounts)|gt(0) )}
						<tr>
						     <td>
								<strong>{"Remove Discount"|i18n('dcdshop/basket')}</strong>
						     </td>
						     <td>
						     	<strong>{"Discount Name"|i18n('dcdshop/basket')}</strong>
						     </td>
						     <td>
						     	<strong>{"Discount Type"|i18n('dcdshop/basket')}</strong>
						     </td>
						     <td>
						     	<strong>{"Discount Value"|i18n('dcdshop/basket')}</strong>
						     </td>
						     <td>
						     	<strong>{"Expiration Date"|i18n('dcdshop/basket')}</strong>
						     </td>
						</tr>
						{foreach $discount_info.discounts as $discount}
							<tr class="cart_footer">
							     <td>
							      	<form action={'dcdshop/discount'|ezurl} method="post" >
							     		<input type="hidden" value="{$discount.node_id}" name="discount_id"/>
							     		<input type="submit" class="button" value="{"Remove Coupon"|i18n('dcdshop/basket')}" name="remove_discount"/>
							     	</form>
							     </td>
							     <td>
							     	 {$discount.name}
							     </td>
							     <td>
							     	 {$discount.type}
							     </td>
							     <td>
							     	{$discount.percentage} %
							     </td>
							     <td>
							     	{if $discount.expiration|lt(currentdate())}
							     		<span style="color:red;">{$discount.expiration|datetime('custom', '%d/%m/%Y')} - {"expired"|i18n('dcdshop/basket')}</span>
							     	{else}
							     		{$discount.expiration|datetime('custom', '%d/%m/%Y')}
							     	{/if}
							     </td>							     
							</tr>
						{/foreach}
					{/if}
				</table>
			</div>
		
		</article>
	</div>
</div>

{include uri="design:shop/status.tpl" status='basket'}

{set scope=global persistent_variable=hash('no_left_column', 'true', 'extra_body_class', 'course schedule' )}