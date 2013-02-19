<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td valign="top">
			<p>
				<b>{"Customer"|i18n("design/standard/shop")}</b><br />
				{'Name'|i18n('design/standard/shop')}: {$order.account_information.first_name} {$order.account_information.last_name}<br />
				{'Email'|i18n('design/standard/shop')}: {$order.account_information.email}<br />
			</p>
			
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
		<td valign="top">
   				{def $company = fetch('content', 'node', hash( 'node_id', $order.account_information.company_id	))}
   
            	<p>
                <b>{'For any enquiries please contact:'|i18n('dcd/shop/orderemail')}</b> <br />
                {attribute_view_gui attribute=$company.data_map.regional_manager_name} <br />
   				{$company.data_map.name.content}<br />

 	            <a href="mailto:{$company.data_map.regional_manager_email.content}">{$company.data_map.regional_manager_email.content}</a><br />
               {attribute_view_gui attribute=$company.data_map.regional_manager_phone} <br />

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
		
                <p>
                {attribute_view_gui attribute=$company.data_map.regional_manager_phone} <br />
            
                {'Company No:'|i18n('dcd/shop/orderemail')}  {attribute_view_gui attribute=$company.data_map.registration_number}<br />
                {'Vat Reg No:'|i18n('dcd/shop/orderemail')} {attribute_view_gui attribute=$company.data_map.tax_number}
			</p>
	
		</td>
	</tr>
</table>