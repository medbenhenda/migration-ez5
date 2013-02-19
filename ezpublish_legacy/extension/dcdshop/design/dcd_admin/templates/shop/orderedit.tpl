<div class="context-block">

		
		<div class="box-header">
			<div class="box-ml">
				<h1 class="context-title">{'Edit Order'|i18n( 'design/admin/shop/orderview')} #{$order.id}</h1>
				<div class="header-mainline"></div>
			</div>
		</div>
		
		<div class="box-ml">
			<div class="box-mr">
				<div class="box-content">
					<div class="context-attributes">
						<form action={concat("dcdshop/orderedit/", $order.id)|ezurl} method="post" name="OrderAddress">
						
						{shop_account_view_gui view=edit order=$order}
							<div class="controlbar">
								<div class="box-bc">
									<div class="box-ml">
										<div class="block">
											<input class="button" type="submit" name="UpdateAddressButton" value="{'Save Address'|i18n( 'dcdshop/orderedit' )}" title="{'Save changes to this order.'|i18n( 'dcdshop/orderedit' )}" />
										</div>
									</div>
								</div>
							</div>
						</form>
						
						{def $currency = fetch( 'shop', 'currency', hash( 'code', $order.productcollection.currency_code ) )
						     $locale = false()
						     $symbol = false()}
						{if $currency}
						    {set locale = $currency.locale
						         symbol = $currency.symbol}
						{/if}
						<form action={concat("dcdshop/orderedit/", $order.id)|ezurl} method="post" name="OrderProducts">
							<input type="hidden" value="{$order.id}" name="order_id"/>
							<b>{'Product items'|i18n( 'design/admin/shop/orderview' )}</b>
							<table class="list" width="100%" cellspacing="0" cellpadding="0" border="0">
							<tr>
							    <th>{'Product'|i18n( 'design/admin/shop/orderview' )}</th>
							    <th>{'Count'|i18n( 'design/admin/shop/orderview' )}</th>
							    <th>{'VAT'|i18n( 'design/admin/shop/orderview' )}</th>
							    <th>{'Price ex. VAT'|i18n( 'design/admin/shop/orderview' )}</th>
							    <th>{'Price inc. VAT'|i18n( 'design/admin/shop/orderview' )}</th>
							    <th>{'Discount'|i18n( 'design/admin/shop/orderview' )}</th>
							    <th>{'Total price ex. VAT'|i18n( 'design/admin/shop/orderview' )}</th>
							    <th>{'Total price inc. VAT'|i18n( 'design/admin/shop/orderview' )}</th>
							</tr>
							{foreach $order.product_items as $item}
							<tr>
							    {if and( $item.item_object.contentobject, $item.item_object.contentobject.main_node )}
							    {let node_url=$item.item_object.contentobject.main_node.url_alias}
							    <td>{$item.item_object.contentobject.class_identifier|class_icon( small,$item.item_object.contentobject.class_name )}&nbsp;{if $:node_url}<a href={$:node_url|ezurl}>{/if}{$item.item_object.contentobject.name|wash}{if $:node_url}</a>{/if}</td>
							    {/let}
							    {else}
							    <td>{false()|class_icon( small )}&nbsp;{$item.item_object.name|wash}</td>
							    {/if}
							    <td class="number" align="right"><input type="text" value="{$item.item_count}" name="item[{$item.id}][count]" size="5"/></td>
							    <td class="number" align="right"><input type="text" value="{$item.vat_value}" name="item[{$item.id}][vat]" size="5"/>&nbsp;%</td>
							    <td class="number" align="right">{$item.price_ex_vat|l10n( 'currency', $locale, $symbol )}</td>
							    <td class="number" align="right">{$symbol} <input type="text" value="{$item.price_inc_vat}" name="item[{$item.id}][price]" size="10"/></td>
							    {* <td class="number" align="right"><input type="text" value="{$item.discount_percent}" name="item[{$item.id}][discount]" size="5" />&nbsp;%</td> *}
							    <td class="number" align="right">{$item.discount_percent}&nbsp;%</td>
							    <td class="number" align="right">{$item.total_price_ex_vat|l10n( 'currency', $locale, $symbol )}</td>
							    <td class="number" align="right">{$item.total_price_inc_vat|l10n( 'currency', $locale, $symbol )}</td>
							</tr>
							{section show=$item.item_object.option_list}
							<tr>
							    <td colspan='3'>
							    <table border="0">
							    <tr>
							        <td colspan='3'>{'Selected options'|i18n( 'design/admin/shop/orderview' )}</td>
							    </tr>
							    {section var=Options loop=$ProductItem:item.item_object.option_list}
							    <tr>
							        <td>{$:Options.item.name|wash}</td>
							        <td>{$:Options.item.value}</td>
							        <td class="number" align="right">{$:Options.item.price|l10n( 'currency', $locale, $symbol )}</td>
							    </tr>
							    {/section}
							    </table>
							    </td>
							    <td colspan='5'>
							  </td>
							</tr>
							{/section}
							{/section}
							</table>

							<div class="controlbar">
								<div class="box-bc">
									<div class="box-ml">
										<div class="block">
											<input class="button" type="submit" name="UpdateOrderPrice" value="{'Update Order price'|i18n( 'dcdshop/orderedit' )}" title="{'Save changes to this order.'|i18n( 'dcdshop/orderedit' )}" />
											<input class="button" type="button" name="SendInvoice" value="{'Resend Invoice'|i18n( 'dcdshop/orderedit' )}" title="{'Resend invoice.'|i18n( 'dcdshop/orderedit' )}" />
										</div>
									</div>
								</div>
							</div>
						</form>

						
						<b>{'Order summary'|i18n( 'design/admin/shop/orderview' )}:</b><br />
						<table class="list" cellspacing="0">
						<tr>
						    <td>{'Subtotal of items'|i18n( 'design/admin/shop/orderview' )}:</td>
						    <td class="number" align="right">{$order.product_total_ex_vat|l10n( 'currency', $locale, $symbol )}</td>
						    <td class="number" align="right">{$order.product_total_inc_vat|l10n( 'currency', $locale, $symbol )}</td>
						</tr>
						
						{section name=OrderItem loop=$order.order_items show=$order.order_items}
						<tr>
						    <td>{$OrderItem:item.description}:</td>
						    <td class="number" align="right">{$OrderItem:item.price_ex_vat|l10n( 'currency', $locale, $symbol )}</td>
						    <td class="number" align="right">{$OrderItem:item.price_inc_vat|l10n( 'currency', $locale, $symbol )}</td>
						</tr>
						{/section}
						<tr>
						    <td><b>{'Order total'|i18n( 'design/admin/shop/orderview' )}</b></td>
						    <td class="number" align="right"><b>{$order.total_ex_vat|l10n( 'currency', $locale, $symbol )}</b></td>
						    <td class="number" align="right"><b>{$order.total_inc_vat|l10n( 'currency', $locale, $symbol )}</b></td>
						</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		
</div>

<div class="context-block">
	<div class="box-header">
		<div class="box-ml">
			<h2 class="context-title">{'Status history (%status_count)'|i18n( 'design/admin/shop/orderview',,
		                            hash( '%status_count', fetch( shop, order_status_history_count, hash( 'order_id', $order.order_nr ) ) ) )}
			</h2>
		</div>
	</div>
	
	<div class="box-bc">
		<div class="box-ml">
			<div class="box-content">
				{let order_status_history=fetch( shop, order_status_history, hash( 'order_id', $order.order_nr ) )}
					{section show=$order_status_history|count|gt( 0 )}
						<table class="list" cellspacing="0">
							<tr>
							    <th>{'Date'|i18n( 'design/admin/shop/orderview' )}</th>
							    <th>{'Status'|i18n( 'design/admin/shop/orderview' )}</th>
							    <th>{'Person'|i18n( 'design/admin/shop/orderview' )}</th>
							</tr>
							
							{section var=history loop=$order_status_history sequence=array( bglight, bgdark )}
								<tr class="{$history.sequence}">
								    {if eq( $order.status_modified, $history.modified )}
									    {* The current history element should be highlighted *}
									
									    <td class="date"><strong>{$history.modified|l10n( shortdatetime )}</strong></td>
									    <td><strong>{$history.status_name|wash}</strong></td>
									
									    {let modifier=$history.modifier}
									    <td><a href={$modifier.main_node.url|ezurl} title="{'This is the person who modified the status of the order. Click to view the user information.'|i18n( 'design/admin/shop/orderview' )}"><strong>{$modifier.name|wash}</strong></a></td>
									    {/let}
								    {else}
									    <td class="date">{$history.modified|l10n( shortdatetime )}</td>
									    <td>{$history.status_name|wash}</td>
									
									    {let modifier=$history.modifier}
										    <td><a href={$modifier.main_node.url|ezurl} title="{'This is the person who modified the status of the order. Click to view the user information.'|i18n( 'design/admin/shop/orderview' )}">{$modifier.name|wash}</a></td>
									    {/let}
								    {/if}
								</tr>
							{/section}
						</table>
					{/section}
				{/let}
			</div>
		</div>
	</div>
</div>