<!doctype html>
<head>
	<title>{'DCProfessional Development :: Pro-forma Invoice'|i18n('dcdpro/email/course_pro_forma')}</title>
	<meta charset="utf-8" />
	<style type="text/css">
		{* Old Green: 8E8F91 *}
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
	                <tr>
	                    <td align="left" valgin="top">
	                        <img src="http://{ezsys(hostname)}{'email/dcp_boxed_logo.png'|ezimage('no')}" width="400" alt="" />
	                    </td>
	                    <td align="right">
	                        {$COMPANY_NAME}<br />
	                        {$COMPANY_ADDRESS}<br /><br />
	                        {'Phone:'|i18n('dcdpro/email/course_pro_forma')} {$COMPANY_PHONE} <br />
	                        {'Email:'|i18n('dcdpro/email/course_pro_forma')} {$COMPANY_EMAIL}<br />
	                        {'Company No:'|i18n('dcdpro/email/course_pro_forma')} {$COMPANY_NUMBER}<br />
	                        {'Vat Reg No:'|i18n('dcdpro/email/course_pro_forma')} {$COMPANY_VAT_NUMBER}
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
	                        <b>{'Bill To:'|i18n('dcdpro/email/course_pro_forma')} </b><br />
	
	                        {$CLIENT_NAME}<br />
	                        {$CLIENT_ADDRESS}<br />
	                        <br />
	                        {$CLIENT_TELEPHONE}<br />
	                        {$CLIENT_EMAIL}<br />
	
	                        {$VAT_CODE}
	                    </td>
	                    <td class="data" align="left" width="40%" style="border-left:1px solid black; padding: 0px 10px;">
	                        <span style="font-size: 20px; font-weight: bold; color:#8E8F91;"> {'PRO-FORMA INVOICE'|i18n('dcdpro/email/course_pro_forma')} </span> <br />
	                        <b>{'INVOICE #'|i18n('dcdpro/email/course_pro_forma')}</b> {$INVOICE_NUMBER} <br />
	                        <b>{'DATE:'|i18n('dcdpro/email/course_pro_forma')} </b> {$DATE} <br />
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
	                    <td class="data" align="left" width="40%" style="border-left:1px solid black;padding: 0px 10px;">
	                        <b>{'Pay by Bank Transfer:'|i18n('dcdpro/email/course_pro_forma')}</b> <br />
	
	                        <b>{'Bank:'|i18n('dcdpro/email/course_pro_forma')}</b>{$COMPANY_BANK_NAME} <br />
	                        <b>{'Account Number:'|i18n('dcdpro/email/course_pro_forma')}</b>{$COMPANY_ACCOUNT_NUMBER}<br />
	                        <b>{'Sort code:'|i18n('dcdpro/email/course_pro_forma')}</b> {$COMPANY_SORT_CODE}<br />
	                        <b>{'Swift:'|i18n('dcdpro/email/course_pro_forma')}</b> {$COMPANY_SWIFT_CODE}<br />
	                        <b>{'IBAN:'|i18n('dcdpro/email/course_pro_forma')}</b> {$COMPANY_IBAN}<br />
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
	                    <td class="title" style="width: 6%; height: 50px;padding: 5px;">{'Course Code'|i18n('dcdpro/email/course_pro_forma')}</td>
	                    <td class="title" style="width: 40%; height: 50px;padding: 5px;">{'Course Name'|i18n('dcdpro/email/course_pro_forma')}</td>
	                    <td class="title" style="width: 4%; height: 50px;padding: 5px;">{'Quantity'|i18n('dcdpro/email/course_pro_forma')}</td>
	                    <td class="title" style="width: 15%; height: 50px;padding: 5px;">{'Unit Price'|i18n('dcdpro/email/course_pro_forma')}</td>
	                    <td class="title" style="width: 15%; height: 50px;padding: 5px;">{'Net'|i18n('dcdpro/email/course_pro_forma')}</td>
	                    <!-- <td class="title" style="width: ;">{'Tax Rate'|i18n('dcdpro/email/course_pro_forma')}</td> -->
	                    <!-- <td class="title" style="width: 20%; height: 50px;padding: 5px;">{'Tax'|i18n('dcdpro/email/course_pro_forma')}</td> -->
	                </tr>
	                <tr class="item" style="border-bottom: 1px solid #8E8F91;">
	                    <td class="item" align="left">{$COURSE_CODE}</td>
	                    <td class="item" align="left">{$COURSE_NAME} -  {$COURSE_CITY} {$COURSE_DATE}</td>
	                    <td class="item" align="right">1.00</td>
	                    <td class="item" align="right">{$COURSE_FEE} {$CURRENCY_CODE}</td>
	                    <td class="item" align="right">{$COST_NET} {$CURRENCY_CODE}</td>
	                    <!--<td class="item" align="right">{$COURSE_TAX}&nbsp;</td>-->
	                    <!-- <td class="item" align="right">{$COST_TAX} {$CURRENCY_CODE}</td>-->
	                </tr>
	                <tr class="item">
	                    <td class="noBorder"></td>
	                    <td class="noBorder"></td>
	                    <td colspan="2" class="item_total_total" align="right"><b>{'Total'|i18n('dcdpro/email/course_pro_forma')}</b></td>
	                    <td class="item_total_total" align="right">{$CURRENCY_SYMBOL} {$COST_NET} {$CURRENCY_CODE}</td>
	                </tr>
	    			{$DISCOUNT_HTML}
	                <tr>
	                    <td class="noBorder"></td>
	                    <td class="noBorder"></td>
	                    <td colspan="2" colspan="" class="item_total_total" align="right"><b>{'Tax'|i18n('dcdpro/email/course_pro_forma')} ({$TAX_RATE} %)</b></td>
	                    <td class="item_total_total" align="right">{$CURRENCY_SYMBOL} {$COST_TAX} {$CURRENCY_CODE}</td>
	                </tr>
	                <tr style="border-top: 1px solid #8E8F91;">
	                    <td class="noBorder"></td>
	                    <td class="noBorder"></td>
	                    <td colspan="2" class="item_total_project item_total_detail" align="right"><b>{'TOTAL DUE'|i18n('dcdpro/email/course_pro_forma')}</b></td>
	                    <td class="item_total_project" align="right">{$CURRENCY_SYMBOL} {$TOTAL_FEE} {$CURRENCY_CODE}</td>
	                </tr>
	            </table>
	        </td>
	    </tr>
	    <tr><td><br /></td></tr>
	    <tr><td height="100px"></td></tr>
	    <tr>
	        <td>
	            <table class="footer" width="100%">
	                <tr>
	                    <td width="100%">
	                        <h3>{'Polite Notice: Payment needs to be made in full prior to a student attending a classroom course or before commencing an online educational product.'|i18n('dcdpro/email/course_pro_forma')}
	                        {'A tax invoice will be issued upon payment of this pro-forma invoice.'|i18n('dcdpro/email/course_pro_forma')}</h3>
	                    </td>
	                </tr>
	                <tr>
	                    <td align="center" width="100%">
	                        {'NB PLEASE QUOTE INVOICE REFERENCE WHEN MAKING YOUR PAYMENT'|i18n('dcdpro/email/course_pro_forma')}
	                    </td>
	                </tr>
	                <tr>
	                    <td align="center" width="100%">
	                        {'TO PAY WITH A CREDIT CARD PLEASE CALL'|i18n('dcdpro/email/course_pro_forma')} {$COMPANY_PHONE}
	                    </td>
	                </tr>
	                <tr>
	                    <td align="center" width="100%">
	                        {* Make checks payable to: <b>Your Company Name</b> <br /> *}
	                        {'If you have any questions or concerns with this invoice <b>PLEASE CONTACT</b>:'|i18n('dcdpro/email/course_pro_forma')} <br />
	                        <b><i>{'DCProfessional Development Ltd; +44 (0) 207 377 1907. DCProfessional Development, 28 Scrutton Street, London, EC2A 4RP, United Kingdom'|i18n('dcdpro/email/course_pro_forma')}</i></b> <br />
	                    </td>
	                </tr>
	            </table>
	        </td>
	    </tr>
	</table>
</body>
</html>