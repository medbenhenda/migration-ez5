<div id="main" role="main">
	<div id="content">
		<article class="basket">

		<div class="shop-confirmorder">
		
			<div class="attribute-header">
			    <h1 class="long">{"Confirm order"|i18n("design/ezwebin/shop/confirmorder")}</h1>
			</div>
			
			<table width="100%" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td valign="top">
						<p>
							<b>{"Customer"|i18n("design/standard/shop")}</b><br />
							{'Name'|i18n('design/standard/shop')}: {$order.account_information.first_name} {$order.account_information.last_name}<br />
							{'Email'|i18n('design/standard/shop')}: {$order.account_information.email}<br />
						</p>
					</td>
					<td valign="top">
						<p>
							<b>{"Billing Address"|i18n("design/standard/shop")}</b><br />
							{'Company'|i18n('design/standard/shop')}: {$order.account_information.street1}<br />
						    {'Street'|i18n('design/standard/shop')}: {$order.account_information.street2}<br />
							{'Postcode'|i18n('design/standard/shop')}: {$order.account_information.zip}<br />
							{'Town'|i18n('design/standard/shop')}: {$order.account_information.place}<br />
							{'State'|i18n('design/standard/shop')}: {$order.account_information.state}<br />
							{'Country/region'|i18n('design/standard/shop')}: {$order.account_information.country}<br />
							{if and( is_set($order.account_information.vatnumber), $order.account_information.vatnumber|ne('') )}
								{'VAT Number'|i18n('design/standard/shop')}: {$order.account_information.vatnumber}<br />
							{/if}
						</p>
					</td>
				</tr>
			</table>
			
			{def $currency = fetch( 'shop', 'currency', hash( 'code', $order.productcollection.currency_code ) )
			     $locale = false()
			     $symbol = false()}
			
			{def $currency_code = ''}
			{if $currency.symbol|eq('$')}
				{set $currency_code =  $currency.code}
			{/if}
			
			{if $currency}
			    {set locale = $currency.locale
			         symbol = $currency.symbol}
			{/if}
			
				<h3>{"Product items"|i18n("design/ezwebin/shop/confirmorder")}</h3>
					<table class="list" width="100%" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<th style="width: 40px;">
					    {"Course Code"|i18n("dcd/shop/confirmorder")}
					    </th>
						<th>
					    {"Course Name"|i18n("dcd/shop/confirmorder")}
					    </th>
					    <th>
					    {"Quantity"|i18n("dcd/shop/confirmorder")}
					    </th>
					    <th>
					    {"Unit Price"|i18n("dcd/shop/confirmorder")}
					    </th>
					    <th>
					    {"VAT"|i18n("dcd/shop/confirmorder")}
					    </th>	
					    {if $discount_info.valid_discounts|gt(0)}
					    <th>
					    {'Discount'|i18n( 'dcd/shop/confirmorder' )}
					    </th>
					    {/if}				    
					    <th>
					    {"Net"|i18n("dcd/shop/confirmorder")}
					    </th>
					</tr>
			
					{foreach $order.product_items as $item}
					
						<tr class="bglight">
							<td>
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
								{if $item.item_object.contentobject.class_identifier|eq('event')}
								    <a href={$course.url_alias|ezurl} title="{$course.name|wash}">{$item.object_name}</a>
								    {undef $course}
								{else}
									<a href={$item.item_object.contentobject.main_node.url_alias|ezurl} title="{$item.name|wash}">{$item.object_name}</a>
								{/if}
							</td>
						    <td>
						    	{$item.item_count}
						    </td>
						    <td>
						    {$item.price_ex_vat|l10n( 'currency', $locale, $symbol )} {$currency_code}
						    </td>
						   	<td>
						    	{$item.vat_value} %
						    </td>
						    {if $discount_info.valid_discounts|gt(0)}
						    <td>
						    	{$item.discount_percent}%
						    </td>
						    {/if}
						    <td>
						    {$item.total_price_inc_vat|l10n( 'currency', $locale, $symbol )} {$currency_code}
						    </td>
						</tr>
						{if $item.item_object.option_list}
						<tr>
						  <td colspan="6" style="padding: 0;">
						     <table width="100%" cellpadding="0" cellspacing="0">
								 <tr>
									<td colspan="3">
										{"Selected options"|i18n("design/ezwebin/shop/confirmorder")}
									</td>
								 </tr>
							     {foreach $item.item_object.option_list as $option}
							      <tr>
							        <td width="33%">{$option.name}</td>
							        <td width="33%">{$option.value}</td>
							        <td width="33%">{$option.price|l10n( 'currency', $locale, $symbol )} {$currency_code}</td>
							      </tr>
							     {/foreach}
						     </table>
						   </td>
						</tr>
						{/if}
					
					{/foreach}
				</table>
				
				<h3>{"Order summary"|i18n("design/ezwebin/shop/confirmorder")}:</h3>
				<table class="list" cellspacing="0" cellpadding="0" border="0">
					<tr>
					    <th>{"Summary"|i18n("design/ezwebin/shop/confirmorder")}</th>
					    <th>{"Total ex. VAT"|i18n("design/ezwebin/shop/confirmorder")}</th>
					    <th>{"Total inc. VAT"|i18n("design/ezwebin/shop/confirmorder")}</th>
					</tr>
					<tr class="bglight">
					    <td>
					    {"Subtotal of items"|i18n("design/ezwebin/shop/confirmorder")}:
					    </td>
					    <td>
					    {$order.product_total_ex_vat|l10n( 'currency', $locale, $symbol )} {$currency_code}
					    </td>
					    <td>
					    {$order.product_total_inc_vat|l10n( 'currency', $locale, $symbol )} {$currency_code}
					    </td>
					</tr>
					
					{foreach $order.order_items as $item}
					<tr>
					    <td>
					    {$item.description}:
					    </td>
					    <td>
					    {$item.price_ex_vat|l10n( 'currency', $locale, $symbol )} {$currency_code}
					    </td>
					    <td>
					    {$item.price_inc_vat|l10n( 'currency', $locale, $symbol )} {$currency_code}
					    </td>
					</tr>
					{/foreach}
					<tr class="bgdark">
					    <td>
					    {"Order total"|i18n("design/ezwebin/shop/confirmorder")}:
					    </td>
					    <td>
					    {$order.total_ex_vat|l10n( 'currency', $locale, $symbol )} {$currency_code}
					    </td>
					    <td>
					    {$order.total_inc_vat|l10n( 'currency', $locale, $symbol )} {$currency_code}
					    </td>
					</tr>
				</table>
				
				<h3>{"Payment Method"|i18n("design/ezwebin/shop/confirmorder")}:</h3>
				
				{def $terms_and_conditions = fetch('content', 'node', hash('node_id', ezini('dcdNodes', 'TermsAndConditions', 'dcpro.ini') ))}
				
				<table class="list" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td clospan="2">
						     <input type="checkbox" value="1" name="accept_terms" id="id_accept_terms" class="required-entry" style="float:left;margin-right:7px;">
					    	<div class="onestepcheckout-enable-terms" style="margin-top: 1px;">
					    		{if $terms_and_conditions.data_map.file.has_content}
							    	{def $file = $terms_and_conditions.data_map.file}
							    		<label for="id_accept_terms">{"I accept the"|i18n('dcdshop/confirmorder')} <a href={concat("content/download/", $file.contentobject_id, "/", $file.id, "/file/", $file.content.original_filename)|ezurl} target="_blank">{"Terms and Conditions"|i18n('dcdshop/confirmorder')}</a></label>
	        		                {undef $file}
							    {/if}
				            </div>
				       
					    </td>
					</tr>
					<tr>
						<td colspan="2">	
							<div class="buttonblock">
								<form method="post" action={"/shop/confirmorder/"|ezurl}>
									
									{foreach $order.product_items as $item}
										<input type="hidden" name="ProductItemIDList[]" value="{$item.id}" />
									{/foreach}
									<br />
									<input class="button" type="submit" name="ConfirmOrderButton" value="{'Place order now'|i18n('dcd/confirmorder')}" /> &nbsp;
								</form>	
							</div>
						</td>
					</tr>
					
				</table>
				
				<div id="message-validate_tc" style="display:none;">
					{"Please accept the terms and conditions to proceed"|i18n('dcd/shop/confirmorder')}
				</div>
		</div>
		</article>
	</div>
</div>

{include uri="design:shop/status.tpl" status='confirm'}