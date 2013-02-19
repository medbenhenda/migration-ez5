<div id="main" role="main">
	<div id="content">
		<article>
			<div class="shop-customerorderview">
			    <div class="attribute-header">
			        <h1 class="long">{"Customer information"|i18n("design/ezwebin/shop/customerorderview")}</h1>
			    </div>
			    
				{shop_account_view_gui view=html order=$order_list[0]}
				
				<div class="attribute-header">
				    <h1>{"Order list"|i18n("design/ezwebin/shop/customerorderview")}</h1>
				</div>
				
				{def $currency = false()
				     $locale = false()
				     $symbol = false()
				     $product_info_count = false()}
				
				{if $order_list}
					<table class="list" width="100%" cellspacing="0" cellpadding="0" border="0">
						<tr>
						    <th>
						    {"ID"|i18n("design/ezwebin/shop/customerorderview")}
						    </th>
						    <th>
						    {"Date"|i18n("design/ezwebin/shop/customerorderview")}
						    </th>
						    <th>
						    {"Status"|i18n("dcd/shop/customerorderview")}
						    </th>
						    <th>
						    {"Amount of items"|i18n("dcd/shop/customerorderview")}
						    </th>
						    <th>
						    
						    </th>
						</tr>
						{foreach $order_list as $item)}
						{set currency = fetch( 'shop', 'currency', hash( 'code', $item.productcollection.currency_code ) ) }
						{if $currency}
						    {set locale = $currency.locale
						         symbol = $currency.symbol}
						{else}
						    {set locale = false()
						         symbol = false()}
						{/if}
						
						<tr>
						    <td>
						    {$item.order_nr}
						    </td>
						    <td>
						    {$item.created|l10n(shortdatetime)}
						    </td>
						    <td>
						    {$item.status_name}
						    </td>
						    <td>
						    	{count( $item.product_items )}
						    </td>
						    <td>
						    	<a href={concat("/shop/orderview/",$item.id,"/")|ezurl}>{"view"|i18n('dcdshop/customerorderview')}</a>
						    </td>
							<td>
								{if $item.status_name|eq('Delivered')}
						    		<a href={concat("/dcdshop/manageorder/",$item.id,"/")|ezurl}>{"Confirm Students Booking"|i18n('dcdshop/customerorderview')}</a>
						    	{/if}
						    </td>		    
						</tr>
					{/foreach}
					</table>
				{/if}
				
				
				<div class="attribute-header">
				  <h1>{"Purchase list"|i18n("design/ezwebin/shop/customerorderview")}</h1>
				</div>
				
				{section show=$product_list}
				<table class="list" width="100%" cellspacing="0" cellpadding="0" border="0">
				<tr>
				    <th>
				    {"Product"|i18n("design/ezwebin/shop/customerorderview")}
				    </th>
				    <th>
				    {"Amount"|i18n("design/ezwebin/shop/customerorderview")}
				    </th>
				    <th>
				    {"Total ex. VAT"|i18n("design/ezwebin/shop/customerorderview")}
				    </th>
				    <th>
				    {"Total inc. VAT"|i18n("design/ezwebin/shop/customerorderview")}
				    </th>
				</tr>
				
				{def $quantity_text = ''
				     $total_ex_vat_text = ''
				     $total_inc_vat_text = ''
				     $br_tag = ''}
				
				{section var="Product" loop=$product_list sequence=array(bglight,bgdark)}
				
				    {set quantity_text = ''
				         total_ex_vat_text = ''
				         total_inc_vat_text = ''
				         br_tag = ''}
				
				    {foreach $Product.product_info as $currency_code => $info}
				        {if $currency_code}
				            {set currency = fetch( 'shop', 'currency', hash( 'code', $currency_code ) ) }
				        {else}
				            {set currency = false()}
				        {/if}
				        {if $currency}
				            {set locale = $currency.locale
				                 symbol = $currency.symbol}
				        {else}
				            {set locale = false()
				                 symbol = false()}
				        {/if}
				
				        {set quantity_text = concat( $quantity_text, $br_tag, $info.sum_count) }
				        {set total_ex_vat_text = concat($total_ex_vat_text, $br_tag, $info.sum_ex_vat|l10n( 'currency', $locale, $symbol )) }
				        {set total_inc_vat_text = concat($total_inc_vat_text, $br_tag, $info.sum_inc_vat|l10n( 'currency', $locale, $symbol )) }
				
				        {if $br_tag|not()}
				            {set br_tag = '<br />'}
				        {/if}
				    {/foreach}
				
				    <tr class="{$Product.sequence}">
				        <td>{content_view_gui view=text_linked content_object=$Product.product}</td>
				        <td align="right">{$quantity_text}</td>
				        <td align="right">{$total_ex_vat_text}</td>
				        <td align="right">{$total_inc_vat_text}</td>
				    </tr>
				
				{/section}
				
				</table>
				{/section}
				{undef}
			
			</div>
			
		</article>
		<br />
	</div>
</div>

{include uri="design:user/usermenu.tpl" status='orderview'}

{set scope=global persistent_variable=hash('no_left_column', 'true', 'extra_body_class', 'course schedule user')}