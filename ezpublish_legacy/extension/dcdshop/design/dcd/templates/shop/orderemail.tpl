{set-block scope=root variable=subject}{"DC-Professional Development - Your Pro Forma Invoice"|i18n("dcd/shop/email")}{/set-block}
{set-block scope=root variable=content_type["type"]}text/html{/set-block}

{def $currency = fetch( 'shop', 'currency', hash( 'code', $order.productcollection.currency_code ) )
         $locale = false()
         $symbol = false()
         $order_info = $order.order_info}



{if $currency}
    {set locale = $currency.locale
         symbol = $currency.symbol}

	{def $currency_code = ''}
	{if $currency.symbol|eq('$')}
		{set $currency_code =  $currency.code}
	{/if}

{/if}

<!doctype html>
<head>
	<title><a href="http://{ezsys(hostname)}">{'DCProfessional Development :: Pro-forma Invoice'|i18n('dcd/shop/orderemail')}</a></title>
	<meta charset="utf-8" />
	<style type="text/css">

		{literal}
		     * {
		        font-family: Verdana, Arial, Helvetica, sans-serif;
		        font-size: 12px;
		        font-style: normal;
		     }
		     h3 {
		        font-size: 15px;
		        font-weight: bold;
		     }
		     td { height: 25px; padding: 0px 10px; }
		     table.main, table.data {border: 1px none #000000; border-collapse: collapse; width:720px; }
		     table.data, table.header, table.footer { width:100%; }
		     table.footer, table.header { color: #8E8F91; }
		     td.data { border: 1px none #000000; border-left-style:solid; border-collapse: separate;}
		     table.total {border: 1px solid #8E8F91; width:100%; border-collapse: collapse; padding:5px; border-spacing:1px;}
		     table.total {width: 300px; padding: 5px;}
		     tr.title { color: #FFFFFF; background-color: #8E8F91; text-align: center; font-weight: bold;}
		     td.title { border: 1px solid #8E8F91; height: 50px; valign:middle; padding:5px;}
		     tr.item {
		        color: #000000;
		        background-color: #FFFFFF;
		    }
		     .item, td.item_total, td.item_total_detail, td.item_total_project {
		        valign:middle;
		        border: 1px none #8E8F91;
		     }
		     td.item_total_total {
		     }
		    td.item {
		            border-bottom-style: solid;
		     }
		     td.item_total_project {
		        border: 1px none #8E8F91;
		        border-top-style: solid;
		     }
		    #logo {
		        width: 400px;
		    }
		{/literal}
	 </style>
</head>
<body>

	<table class="main" width="720" align="center" style="font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;font-style: normal; color#fff;">
	    <tr>
	        <td>
	            <table class="header" width="100%">
	            
		         {def $company = fetch('content', 'node', hash( 'node_id', $order.account_information.company_id	))}

				{* TODO
				 	Replace fetch followed by loop with clean country attribute filter 
				*}
					
				{def $event = fetch('content', 'node', hash('node_id', $order.product_items.0.node_id))}
					
				{foreach $companies as $obj}
						{if eq($obj.data_map.country.sort_key_string, $event.data_map.country.sort_key_string)} 
							{set $company = $obj}
							{break}
						{/if}
				{/foreach} 
										  
	                <tr>
	                    <td align="left" valgin="top">
	                        <img src="http://{ezsys(hostname)}{'email/dcp_boxed_logo.png'|ezimage('no')}" width="400" alt="" />
	                    </td>
	                    <td align="right">
	                        {attribute_view_gui attribute=$company.data_map.name}<br />
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
	                        {if $company.data_map.country.has_content}
		                        {attribute_view_gui attribute=$company.data_map.country}<br />
	                        {/if}
	                        {'Phone:'|i18n('dcd/shop/orderemail')} {attribute_view_gui attribute=$company.data_map.regional_manager_phone} <br />
	                        {'Email:'|i18n('dcd/shop/orderemail')} <a href="mailto:{$company.data_map.regional_manager_email.content}">{$company.data_map.regional_manager_email.content}</a><br />
	                        {'Company No:'|i18n('dcd/shop/orderemail')}  {attribute_view_gui attribute=$company.data_map.registration_number}<br />
	                        {'Vat Reg No:'|i18n('dcd/shop/orderemail')} {attribute_view_gui attribute=$company.data_map.tax_number}
	                    </td>
	                </tr>
	            </table>
	        </td>
	    </tr>
	    <tr>
	        <td height="40px"></td>
	    </tr>
	    <tr>
	        <td>
	            <table class="data" width="100%">
	                <tr>
	                    <td class="data" align="left" width="60%" style="border-left:1px solid black; padding: 0px 10px;">
	                        <b>{'Bill To:'|i18n('dcd/shop/orderemail')} </b><br />
							
							{$order.account_information.first_name} {$order.account_information.last_name}<br />
							
							{$order.account_information.street1}<br />
							{$order.account_information.street2}<br />
							{$order.account_information.zip}<br />
							{$order.account_information.place}<br />
							{$order.account_information.state}<br />
							{$order.account_information.country}<br />
							
							{$order.account_information.email}<br />
							{if and( is_set($order.account_information.vatnumber), $order.account_information.vatnumber|ne('') )}
								{'VAT Number'|i18n('design/standard/shop')}: {$order.account_information.vatnumber}<br />
							{/if}
	                    </td>
	                    <td class="data" align="left" width="40%" style="border-left:1px solid black; padding: 0px 10px;">
	                        <span style="font-size: 20px; font-weight: bold; color:#8E8F91;"> {'PRO-FORMA INVOICE'|i18n('dcd/shop/orderemail')} </span> <br />
	                        <b>{'INVOICE #'|i18n('dcd/shop/orderemail')}</b> {$order.order_nr} {* $INVOICE_NUMBER *} <br />
	                        <b>{'DATE:'|i18n('dcd/shop/orderemail')} </b> {currentdate()|datetime(custom, '%d-%m-%Y')} <br />
	                    </td>
	                </tr>
	            </table>
	        </td>
	    </tr>
	    <tr>
	        <td height="40px"></td>
	    </tr>
	    <tr>
	        <td>
	            <table class="data" width="100%">
	                <tr>
	                    <td class="data" style="border: 0px;" align="left" width="60%">
	                    </td>
	                    
	                    {def $bank = fetch('content', 'node', hash( 'node_id', $company.data_map.bank.content.relation_list.0.node_id))}
	                    
	                    {foreach $bank.data_map.accounts.content.relation_list as $account}
	                    	{def $account = fetch('content', 'node', hash('node_id', $bank.data_map.accounts.content.relation_list.0.node_id))}
	                    
		                    {if $company_currency|eq($account.data_map.currency.class_content.options[$account.data_map.currency.content.0])}
		                    	{break}		                    
		                    {/if}
		                    	
		                    {undef $account}
	                    {/foreach}
	                    
	                    <td class="data" align="left" width="40%" style="border-left:1px solid black;padding: 0px 10px;">
	                        <b>{'Pay by Bank Transfer:'|i18n('dcd/shop/orderemail')}</b> <br />
	
	                        <b>{'Bank:'|i18n('dcd/shop/orderemail')}</b> {$bank.name} <br />
	                        <b>{'Account Number:'|i18n('dcd/shop/orderemail')}</b> {$account.data_map.account_number.content}<br />
	                        <b>{'Sort code:'|i18n('dcd/shop/orderemail')}</b> {$account.data_map.sort_code.content}<br />
	                        <b>{'Swift:'|i18n('dcd/shop/orderemail')}</b> {$account.data_map.swift.content}<br />
	                        <b>{'IBAN:'|i18n('dcd/shop/orderemail')}</b> {$account.data_map.iban.content}<br />
	                    </td>
	                </tr>
	            </table>
	        </td>
	    </tr>
	    <tr>
	        <td height="40px"></td>
	    </tr>
	    <tr>
	        <td>
	            <table class="detail" width="100%" cellspacing="0" cellpadding="5" border="0">
	                <tr class="title" style="background-color:#8E8F91;color:#fff;font-weight:bold;height:50px;text-align:center;">
	                    <td class="title" style="width: 6%; height: 50px;padding: 5px;">{'Course Code'|i18n('dcd/shop/orderemail')}</td>
	                    <td class="title" style="width: 40%; height: 50px;padding: 5px;">{'Course Name'|i18n('dcd/shop/orderemail')}</td>
	                    <td class="title" style="width: 15%; height: 50px;padding: 5px;">{'Unit Price'|i18n('dcd/shop/orderemail')}</td>
	                    <td class="title" style="width: 4%; height: 50px;padding: 5px;">{'Quantity'|i18n('dcd/shop/orderemail')}</td>
	                    <td class="title" style="width: 15%; height: 50px;padding: 5px;">{'Net'|i18n('dcd/shop/orderemail')}</td>
	                </tr>

					{foreach $order.product_items as $item}
					<tr>
					    <td class="item" align="left">
						{if $item.item_object.contentobject.class_identifier|eq('event')}
				   			{def $course = fetch('content', 'node', hash('node_id', $item.item_object.contentobject.data_map.course.content.relation_list.0.node_id ))}
				   			{if $course.data_map.course_code.has_content}
								{$course.data_map.course_code.content}	
							{/if}
						    {undef $course}
						{else}
							{$item.item_object.contentobject.data_map.course_code.content}
						{/if}
						</td>
	                    <td class="item" align="left">{$item.object_name}
	                    {if $item.item_object.contentobject.class_identifier|eq('event')}
	                    	 - {$item.item_object.contentobject.data_map.city.content} {attribute_view_gui attribute=$item.item_object.contentobject.data_map.from_time.content.timestamp|datetime('custom', '%d/%m/%y')}
	                   	{/if}
	                    
	                    </td>
	                    <td class="item" align="right">{$item.price_ex_vat|l10n( 'currency', $locale, $symbol )} {$currency_code}</td>
	                    <td class="item" align="right">{$item.item_count}</td>
	                   	<td class="item" align="right">{$item.total_price_ex_vat|l10n( 'currency', $locale, $symbol )} {$currency_code}</td>
	                </tr>
					{/foreach}
	                <tr class="item">
	                    <td class="noBorder"></td>
	                    <td class="noBorder"></td>
	                    <td colspan="2" class="item_total_total" align="right"><b>{'Total'|i18n('dcd/shop/orderemail')}</b></td>
	                    <td class="item_total_total" align="right">{$order.product_total_ex_vat|l10n( 'currency', $locale, $symbol )} {$currency_code}</td>
	                </tr>
	                <tr>
	                    <td class="noBorder"></td>
	                    <td class="noBorder"></td>
	                    <td colspan="2" colspan="" class="item_total_total" align="right"><b>{'Tax'|i18n('dcd/shop/orderemail')}</b></td>
	                    <td class="item_total_total" align="right">{sub($order.product_total_inc_vat, $order.product_total_ex_vat)|l10n( 'currency', $locale, $symbol )} {$currency_code}</td>
	                </tr>
	                <tr style="border-top: 1px solid #8E8F91;">
	                    <td class="noBorder"></td>
	                    <td class="noBorder"></td>
	                    <td colspan="2" class="item_total_project item_total_detail" align="right"><b>{'TOTAL DUE'|i18n('dcd/shop/orderemail')}</b></td>
	                    <td class="item_total_project" align="right">{$order.product_total_inc_vat|l10n( 'currency', $locale, $symbol )} {$currency_code}</td>
	                </tr>
					{undef $currency $locale $symbol}
	            </table>
	        </td>
	    </tr>
	    <tr><td>
		</td></tr>
	    <tr><td height="100px"  class="footer" style="border:solid #009444;padding:10px;text-align:center;font-size: 14px;">
	    	{"You can visualise this pro-form invoice or make payments by following this url:"|i18n('dcdshop/confirmorder')}
	    	<br />
			<a href="http://{ezsys(hostname)}/shop/orderview/{$order.id}" title="">http://{ezsys(hostname)}/shop/orderview/{$order.id}</a>
	    </td></tr>
	    <tr>
	        <td>
	            <table class="footer" width="100%">
	                <tr>
	                    <td width="100%">
	                        <h3>{'Polite Notice: Payment needs to be made in full prior to a student attending a classroom course or before commencing an online educational product.'|i18n('dcd/shop/orderemail')}
	                        {'A tax invoice will be issued upon payment.'|i18n('dcd/shop/orderemail')}</h3>
	                    </td>
	                </tr>
	                <tr>
	                    <td align="center" width="100%">
	                        {'NB PLEASE QUOTE INVOICE REFERENCE WHEN MAKING YOUR PAYMENT'|i18n('dcd/shop/orderemail')}
	                    </td>
	                </tr>
	                <tr>
	                    <td align="center" width="100%">
	                        {'TO PAY WITH A CREDIT CARD PLEASE CALL'|i18n('dcd/shop/orderemail')} {attribute_view_gui attribute=$company.data_map.regional_manager_phone}
	                    </td>
	                </tr>
	                <tr>
	                    <td align="center" width="100%">
	                        {'If you have any questions or concerns with this invoice <b>PLEASE CONTACT</b>:'|i18n('dcd/shop/orderemail')} <br />
	                        <b><i>{'DCProfessional Development Ltd;'|i18n('dcd/shop/orderemail')} {attribute_view_gui attribute=$company.data_map.regional_manager_phone} {"DCProfessional Development, 28 Scrutton Street, London, EC2A 4RP, United Kingdom"|i18n('dcd/shop/orderemail')}</i></b> <br />
	                    </td>
	                </tr>
	            </table>
	        </td>
	    </tr>
	</table>
</body>
</html>