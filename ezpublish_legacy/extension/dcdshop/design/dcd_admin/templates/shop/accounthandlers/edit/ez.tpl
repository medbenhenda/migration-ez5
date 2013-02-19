
<input type="hidden" value="{$order.id}" name="order_id"/>

<div class="block">
<label>{'Name'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}:</label>
{let customer_user=fetch( content, object, hash( object_id, $order.user_id ) )}
<a href={$customer_user.main_node.url_alias|ezurl}>{$order.account_information.first_name}&nbsp;{$order.account_information.last_name}</a>
{/let}
</div>

<div class="block">
<label>{'First Name'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}:</label>
<input type="text" value="{$order.account_information.first_name}" name="firstname"/>
</div>

<div class="block">
<label>{'Last Name'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}:</label>
<input type="text" value="{$order.account_information.last_name}" name="lastname"/>
</div>

<div class="block">
<label>{'Email'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}:</label>
<input type="email" value="{$order.account_information.email}" name="email"/>
</div>

<div class="block">
	<fieldset>
		<legend>{'Billing Address'|i18n( 'dcdshop/accounthandlers/edit' )}</legend>
		
		<table class="list" cellspacing="0">
			<tr>
			    <td>{'Company'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}</td>
			    <td><input type="text" value="{$order.account_information.street1}" name="street1" /></td>
			</tr>
			<tr>
			    <td>{'Street'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}</td>
			    <td><input type="text" value="{$order.account_information.street2}" name="street2" /></td>
			</tr>
			<tr>
			    <td>{'Zip code'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}</td>
			    <td><input type="text" value="{$order.account_information.zip}" name="zipcode" /></td>
			</tr>
			<tr>
			    <td>{'Place'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}</td>
			    <td><input type="text" value="{$order.account_information.place}" name="place" /></td>
			</tr>
			<tr>
			    <td>{'State'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}</td>
			    <td><input type="text" value="{$order.account_information.state}" name="state" /></td>
			</tr>
			<tr>
			    <td>{'Country/region'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}</td>
			    <td><input type="text" value="{$order.account_information.country}" name="country" /></td>
			</tr>
			{if is_set($order.account_information.vatnumber)}
				<tr>
				    <td>{'VAT Number'|i18n( 'dcdshop/admin/shop/accounthandlers/html/ez' )}</td>
				    <td><input type="text" value="{$order.account_information.vatnumber}" name="vatnumber" /></td>
				</tr>
				{else}
				<tr>
				    <td>{'VAT Number'|i18n( 'dcdshop/admin/shop/accounthandlers/html/ez' )}</td>
				    <td><input type="text" value="" name="vatnumber" /></td>
				</tr>
			{/if}
			<tr>
			    <td>{'Billing Company'|i18n( 'dcdshop/admin/shop' )}</td>
			    {def $company = fetch('content', 'node', hash('node_id', $order.account_information.company_id) )}
			    <td><input type="text" value="{$company.name}" name="company" /></a></td>
			</tr>
			{if is_set($order.account_information.comment)}
				<tr>
				    <td>{'Comment'|i18n( 'dcdshop/admin/shop' )}</td>
				    <td><input type="text" value="{$order.account_information.comment}" name="comment" /></a></td>
				</tr>
			{/if}
		
		</table>
	
	</fieldset>
</div>

{* Comment *}
{if $order.account_information.comment}
<div class="block">
<label>{'Comment'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}:</label>
<p>{$order.account_information.comment|wash|nl2br}</p>
</div>
{/if}
