<div id="main" role="main">
	<div id="content">
		<article class="basket">
		<div class="shop-orderview">
		
			<div class="attribute-header">
			  <h1 class="long">{'Order %order_id [%order_status]'|i18n( 'design/ezwebin/shop/orderview',,
			       hash( '%order_id', $order.order_nr,
			             '%order_status', $order.status_name ) )}</h1>
			</div>
			
			{include uri="design:shop/order_info.tpl"}
					
			{def $currency = fetch( 'shop', 'currency', hash( 'code', $order.productcollection.currency_code ) )
			         $locale = false()
			         $symbol = false()}
			
			{if $currency}
			    {set locale = $currency.locale
			         symbol = $currency.symbol}
			{/if}
			<br />
			<h3>{'Product items'|i18n( 'design/ezwebin/shop/orderview' )}</h3>
			<table class="list" width="100%" cellspacing="0" cellpadding="0" border="0">
			<tr>
			    <th>
			    {'Product'|i18n( 'design/ezwebin/shop/orderview' )}
			    </th>
			    <th>
			    {'Count'|i18n( 'design/ezwebin/shop/orderview' )}
			    </th>
			    <th>
			    {'VAT'|i18n( 'design/ezwebin/shop/orderview' )}
			    </th>
			    <th>
			    {'Price inc. VAT'|i18n( 'design/ezwebin/shop/orderview' )}
			    </th>
			    <th>
			    {'Discount'|i18n( 'design/ezwebin/shop/orderview' )}
			    </th>
			    <th>
			    {'Total price ex. VAT'|i18n( 'design/ezwebin/shop/orderview' )}
			    </th>
			    <th>
			    {'Total price inc. VAT'|i18n( 'design/ezwebin/shop/orderview' )}
			    </th>
			</tr>
			{if $order.product_items|count()}
			{foreach $order.product_items as $product_item sequence array( 'bglight', 'bgdark' ) as $style}
			<tr class="{$style}">
			    <td>
			    		{if $product_item.item_object.contentobject.class_identifier|eq('event')}
				   			{def $course = fetch('content', 'node', hash('node_id', $product_item.item_object.contentobject.data_map.course.content.relation_list.0.node_id ))}
						    <a href={$course.url_alias|ezurl} title="{$course.name|wash}">{$product_item.object_name}</a>
						    {undef $course}
						{else}
							<a href={$product_item.url_alias|ezurl}>{$product_item.object_name}</a>
						{/if}
			    </td>
			    <td>
			    {$product_item.item_count}
			    </td>
			    <td>
			    {$product_item.vat_value} %
			    </td>
			    <td>
			    {$product_item.price_inc_vat|l10n( 'currency', $locale, $symbol )}
			    </td>
			    <td>
			    {$product_item.discount_percent}%
			    </td>
			    <td>
			    {$product_item.total_price_ex_vat|l10n( 'currency', $locale, $symbol )}
			    </td>
			    <td>
			    {$product_item.total_price_inc_vat|l10n( 'currency', $locale, $symbol )}
			    </td>
			</tr>
			{/foreach}
			{/if}
			</table>
			
			<h3>{'Order summary'|i18n( 'design/ezwebin/shop/orderview' )}:</h3>
			<table class="list" cellspacing="0" cellpadding="0" border="0">
			<tr>
			    <th>
			    {'Summary'|i18n( 'design/ezwebin/shop/orderview' )}:
			    </th>
			    <th>
			    {'Total price ex. VAT'|i18n( 'design/ezwebin/shop/orderview' )}
			    </th>
			    <th>
			    {'Total price inc. VAT'|i18n( 'design/ezwebin/shop/orderview' )}
			    </th>
			</tr>
			{* since no shipping cost this part is removed for now
			 <tr class="bglight">
			    <td>
			    {'Subtotal of items'|i18n( 'design/ezwebin/shop/orderview' )}:
			    </td>
			    <td>
			    {$order.product_total_ex_vat|l10n( 'currency', $locale, $symbol )}
			    </td>
			    <td>
			    {$order.product_total_inc_vat|l10n( 'currency', $locale, $symbol )}
			    </td>
			</tr>
			*}
			{if $order.order_items|count()}
			{foreach $order.order_items as $order_item sequence array( 'bglight', 'bgdark' ) as $style}
			<tr class="{$style}">
			    <td>
			    {$order_item.description}:
			    </td>
			    <td>
			    {$order_item.price_ex_vat|l10n( 'currency', $locale, $symbol )}
			    </td>
			    <td>
			    {$order_item.price_inc_vat|l10n( 'currency', $locale, $symbol )}
			    </td>
			</tr>
			{/foreach}
			{/if}
			<tr class="bgdark">
			    <td>
			        {'Order total'|i18n( 'design/ezwebin/shop/orderview' )}
			    </td>
			    <td>
			        {$order.total_ex_vat|l10n( 'currency', $locale, $symbol )}
			    </td>
			    <td>
			        {$order.total_inc_vat|l10n( 'currency', $locale, $symbol )}
			    </td>
			</tr>
			</table>
		
			{if $order.status_id|eq(1)}
				{def $company = fetch('content', 'node', hash( 'node_id', $order.account_information.company_id	))}
			
				<h3>{"Payment Method"|i18n("design/ezwebin/shop/confirmorder")}:</h3>
				
				{def $terms_and_conditions = fetch('content', 'node', hash('node_id', ezini('dcdNodes', 'TermsAndConditions', 'dcpro.ini') ))}
				<table class="list" cellspacing="0" cellpadding="0" border="0">
				    <tr>
	                    <td width="100%" colspan="3">
	                        <h3>{'Polite Notice: Payment needs to be made in full prior to a student attending a classroom course or before commencing an online educational product.'|i18n('dcd/shop/orderemail')}
	                        {'A tax invoice will be issued upon payment.'|i18n('dcd/shop/orderemail')}</h3>
	                    </td>
	                </tr>
					<tr  class="payment_method"> 
						<td style="text-align:center;">
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="paypal_checkout" class="buttonblock">  
								 <input type="hidden" name="cmd" value="_cart">  
								 <input type="hidden" name="upload" value="1">  
								 <input type="hidden" name="business" value="{ezini('dcdShop', 'PayPalCustomerID', 'dcdshop.ini')}">
		 						 <input type="hidden" name="currency_code" value="{$order.productcollection.currency_code}" />  
								 <input type="hidden" name="invoice" value="{$order.id}" />  
								 
							 	{foreach $order.product_items as $key => $item}
							 		 <input type="hidden" name="item_name_{$key|sum(1)}" value="{$item.object_name|wash}">  
									 <input type="hidden" name="amount_{$key|sum(1)}" value="{$item.total_price_inc_vat}">
									 <input type="hidden" name="quantity_{$key}" value="{$item.item_count}">
									 <input type="hidden" name="tax_{$key}" value="{sub($item.total_price_inc_vat, $item.total_price_ex_vat)}">
								{/foreach}
	
								<input type="submit" class="button" value="{"Pay by Card or Paypal"|i18n('dcd/shop/confirmorder')}" border="0" name="submit" alt="PayPal — The safer, easier way to pay online." style="float:none; margin:0 auto;"/>
								<img border="0" src={"cards.png"|ezimage}>
			
								 <input type="hidden" name="first_name" value="{$order.account_information.first_name|wash}" />  
								 <input type="hidden" name="last_name" value="{$order.account_information.last_name|wash}" />  
								 <input type="hidden" name="address1" value="{$order.account_information.street1|wash}" />
								 <input type="hidden" name="address2" value="{$order.account_information.street2|wash}" />
								 <input type="hidden" name="city" value="{$order.account_information.place|wash}" />  
								 <input type="hidden" name="zip" value="{$order.account_information.zip|wash}" />  
								 <input type="hidden" name="country" value="{$order.account_information.country|wash}" />
								 <input type="hidden" name="night_phone_a" value="{$order.account_information.phone}" />  
								
							</form> 
						</td>
						<td>
							<input class="button" value="{"Pay by Bank Transfer"|i18n('dcd/shop/confirmorder')}" border="0" onclick="$('.payment_information').hide();$('#bank_transfer_info').show();return false;" />
						</td>
						<td>
							<input class="button" value="{"Pay by Cheque"|i18n('dcd/shop/confirmorder')}" border="0" onclick="$('.payment_information').hide();$('#check_payment_info').show();return false;" />
						</td>
					</tr>
				    <tr style="display:none;" id="bank_transfer_info" class="payment_information">
	                    <td align="center" width="100%" colspan="3">
	                        <p>
			                    {def $bank = fetch('content', 'node', hash( 'node_id', $company.data_map.bank.content.relation_list.0.node_id))}
			                    
			                    {foreach $bank.data_map.accounts.content.relation_list as $account}
			                    	{def $account = fetch('content', 'node', hash('node_id', $bank.data_map.accounts.content.relation_list.0.node_id))}
			                    
				                    {if $company_currency|eq($account.data_map.currency.class_content.options[$account.data_map.currency.content.0])}
				                     	
				                     	{undef $account}
				                     	
				                    	{break}		                    
				                    {/if}
				                    	
				                    {undef $account}
			                    {/foreach}
			                    
		                        <b>{'Pay by Bank Transfer to:'|i18n('dcd/shop/orderemail')}</b> <br /><br />
		
		                        <b>{'Bank:'|i18n('dcd/shop/orderemail')}</b> {$bank.name} <br />
		                        <b>{'Account Number:'|i18n('dcd/shop/orderemail')}</b> {$account.data_map.account_number.content}<br />
		                        <b>{'Sort code:'|i18n('dcd/shop/orderemail')}</b> {$account.data_map.sort_code.content}<br />
		                        <b>{'Swift:'|i18n('dcd/shop/orderemail')}</b> {$account.data_map.swift.content}<br />
		                        <b>{'IBAN:'|i18n('dcd/shop/orderemail')}</b> {$account.data_map.iban.content}<br />
                        </p>
                        
                         <p align="center" width="100%" style="color:#8e8f91;font-weight:bold;">
	                        {'NB PLEASE QUOTE ORDER REFERENCE WHEN MAKING YOUR PAYMENT'|i18n('dcd/shop/orderemail')}
	                    </p>
                        
	                    </td>
	                </tr>
					<tr style="display:none;" id="check_payment_info" class="payment_information">
	                    <td align="center" width="100%" colspan="3">
	                        <h3>{"Pay by Cheque information"|i18n('dcdshop/orderview')}</h3>
	                        <p>
	                        	{"1. Write at the back of the cheque the Reference number:"|i18n('dcdshop/orderview')}<br />
	                        	{"Order ID:"|i18n( 'dcdshop/orderview' )} {$order.order_nr}<br /><br />
	                        	{"2. Fill in cheque details:"|i18n('dcdshop/orderview')}<br />
	                        	{"To:"|i18n('dcdshop/orderview')} {$company.data_map.name.content}<br />
	                        	{"Amount:"|i18n('dcdshop/orderview')} {$order.total_inc_vat|l10n( 'currency', $locale, $symbol )}<br /><br />
	                        	{"3. Send the cheque to the following address:"|i18n('dcdshop/orderview')}<br />
								<p>
									{$company.data_map.name.content}<br />
				                    {attribute_view_gui attribute=$company.data_map.address}
				                    {if $company.data_map.address_2.has_content}
				                    	{attribute_view_gui attribute=$company.data_map.address_2}<br />
				                    {/if}
				                    {if $company.data_map.address_3.has_content}
				                        {attribute_view_gui attribute=$company.data_map.address_3}<br />
				                    {/if}
				                    {if $company.data_map.city.has_content}
				                        {attribute_view_gui attribute=$company.data_map.city}<br />
				                    {/if}
				                    {if $company.data_map.zip.has_content}
				                        {attribute_view_gui attribute=$company.data_map.zip}<br />
				                    {/if}
				                </p>
				                {if $company.data_map.country.has_content}
				                    {attribute_view_gui attribute=$company.data_map.country}<br />
				                {/if}
                     
	                    </td>
	                </tr>
				</table>
			{/if}		
			
			<h3>{'Order history'|i18n( 'design/ezwebin/shop/orderview' )}:</h3>
			<table class="list" cellspacing="0" cellpadding="0" border="0">
			<tr>
			    <th>{'Date'|i18n( 'design/ezwebin/shop/orderview' )}</th>
			    <th>{'Order status'|i18n( 'design/ezwebin/shop/orderview' )}</th>
			</tr>
			{def $order_status_history=fetch( 'shop', 'order_status_history', hash( 'order_id', $order.order_nr ) )}
			{if $order_status_history|count()}
				{foreach $order_status_history as $history sequence array( 'bglight', 'bgdark' ) as $style}
				<tr class="{$style} ">
				    <td class="date">{$history.modified|l10n( 'shortdatetime' )}</td>
				    <td>{$history.status_name|wash}</td>
				</tr>
				{/foreach}
			{/if}
			</table>
		</div>
		</article>
	</div>
</div>

{include uri="design:shop/status.tpl" status='payment'}