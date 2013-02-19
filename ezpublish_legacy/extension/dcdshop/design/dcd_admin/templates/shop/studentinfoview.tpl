<div class="context-block">
<div class="box-header"><div class="box-ml">
<h1 class="context-title">{'Student information'|i18n( 'dcdshop/studentinfo' )}</h1>

<div class="header-mainline"></div>

</div></div>

<div class="box-bc"><div class="box-ml"><div class="box-content">

<div class="context-attributes">
	<div class="block row-fluid">
		<label class="span1">{'First name'|i18n( 'design/ezwebin/shop/userregister')}:</label>
		<div class="span2">{$user_info.firstname}</div>

		<label class="span1">{'Last name'|i18n( 'design/ezwebin/shop/userregister')}:</label>
		<div class="span2">{$user_info.lastname}</div>

		<label class="span1">{'Email'|i18n( 'design/ezwebin/shop/userregister')}:</label>
		<div class="span2">{$user_info.email}</div>

		<label class="span1">{'Contact'|i18n( 'design/ezwebin/shop/userregister')}:</label>
		<div class="span2">
			{$user_info.mobile}<br />
			{$user_info.telephone2}
		</div>
	</div>

	<div class="block">
		<fieldset>
			<legend>{'Address'|i18n( 'dcdshop/manageorder' )}:</legend>
			<table class="list" cellspacing="0">
				<tbody>
					<tr>
						<td>{'Company'|i18n( 'design/ezwebin/shop/userregister')}</td>
						<td>{$user_info.Co}</td>
					</tr>
					<tr>
						<td>{'Position'|i18n( 'design/ezwebin/shop/userregister')}</td>
						<td>{$user_info.Pos}</td>
					</tr>
					<tr>
						<td>{'Street'|i18n( 'design/ezwebin/shop/userregister')}</td>
						<td>{$user_info.Address1}</td>
					</tr>
					{if ne( $user_info.Address2, '' )}
					<tr>
						<td>{'Address'|i18n( 'design/ezwebin/shop/userregister')} 2</td>
						<td>{$user_info.Address2}</td>
					</tr>
					{/if}
					{if ne( $user_info.Address3, '' )}
					<tr>
						<td>{'Address'|i18n( 'design/ezwebin/shop/userregister')} 3</td>
						<td>{$user_info.Address3}</td>
					</tr>
					{/if}
					{if ne( $user_info.city, '' )}
					<tr>
						<td>{'City'|i18n( 'design/ezwebin/shop/userregister')}</td>
						<td>{$user_info.city}</td>
					</tr>
					{/if}
					{if ne( $user_info.prov, '' )}
					<tr>
						<td>{'Province'|i18n( 'design/ezwebin/shop/userregister')}</td>
						<td>{$user_info.prov}</td>
					</tr>
					{/if}
					<tr>
						<td>{'Country/Region'|i18n( 'design/ezwebin/shop/userregister')}</td>
						<td>{$user_info.country}</td>
					</tr>
					<tr>
						<td>{'Zip/Postal Code'|i18n( 'design/ezwebin/shop/userregister')}</td>
						<td>{$user_info.Zip}</td>
					</tr>
				</tbody>
			</table>
		</fieldset>
	</div>
</div>

{* DESIGN: Content END *}</div></div></div>

</div>