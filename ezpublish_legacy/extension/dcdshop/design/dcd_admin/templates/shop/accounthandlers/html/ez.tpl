{* Name. *}
<div class="block">
<label>{'Name'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}:</label>
{let customer_user=fetch( content, object, hash( object_id, $order.user_id ) )}
<a href={$customer_user.main_node.url_alias|ezurl}>{$order.account_information.first_name}&nbsp;{$order.account_information.last_name}</a>
{/let}
</div>

{* Email. *}
<div class="block">
<label>{'Email'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}:</label>
<a href="mailto:{$order.account_information.email}">{$order.account_information.email}</a>
</div>

{* Address. *}
<div class="block">
<fieldset>
<legend>{'Address'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}</legend>

<table class="list" cellspacing="0">
<tr>
    <td>{'Company'|i18n( 'dcdshop/accounthandlers/html/ez' )}</td>
    <td>{$order.account_information.company}</td>
</tr>
<tr>
    <td>{'Job Title'|i18n( 'dcdshop/accounthandlers/html/ez' )}</td>
    
               	{def $jobtitles = hash( 'AdminAssistant', "Admin Assistant"|i18n("dcdshop/userregister"),
								           					'CEOorMDorChairmanorPartnerorOwner',           "CEO/MD/Chairman/Partner/Owner"|i18n("dcdshop/userregister"),
								           					'CIOorCTO',           "CIO/CTO"|i18n("dcdshop/userregister"),
								           					'Consultant',           "Consultant"|i18n("dcdshop/userregister"),
								           					'DataCenterDesign',           "Data Center Design"|i18n("dcdshop/userregister"),
															"DatacenterManager",           "Datacenter Manager"|i18n("dcdshop/userregister"),         
															"FacilityManager",           "Facility Manager"|i18n("dcdshop/userregister"),          
															"FinanceDirector",           "Finance Director"|i18n("dcdshop/userregister"),          
															"InfrastructureManager",           "Infrastructure Manager"|i18n("dcdshop/userregister"),
															"IT",           "IT"|i18n("dcdshop/userregister"),         
															"ITDirector",           "IT Director"|i18n("dcdshop/userregister"),          
															"ITorMISManager",           "IT/MIS Manager"|i18n("dcdshop/userregister"),   
															"Marketing",           "Marketing"|i18n("dcdshop/userregister"),          
															"NetworkManager",           "Network Manager"|i18n("dcdshop/userregister"), 
															"Operations",           "Operations"|i18n("dcdshop/userregister"),        
															"ProjectManager",           "Project Manager"|i18n("dcdshop/userregister"), 
															"PurchasingManagerorCorporateBuyer",           "Purchasing Manager/Corporate Buyer"|i18n("dcdshop/userregister"),  
															"Research",           "Research"|i18n("dcdshop/userregister"),         
															"Sales",           "Sales"|i18n("dcdshop/userregister"),    
															"SystemSecurityManager",           "System Security Manager"|i18n("dcdshop/userregister"),   
															"SystemsManager",           "Systems Manager"|i18n("dcdshop/userregister"),  
															"Other",           "Other"|i18n("dcdshop/userregister")   
					           					  )}
    
    <td>
    {foreach $jobtitles as $job_id => $jobtitle}
    	{if $job_id|eq($order.account_information.jobtitle)}
    		{$jobtitle}
    	{/if}
    {/foreach}
    </td>
</tr>
<tr>
    <td>{'Street'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}</td>
    <td>{$order.account_information.street1} {$order.account_information.street2}</td>
</tr>
<tr>
    <td>{'Zip code'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}</td>
    <td>{$order.account_information.zip}</td>
</tr>
<tr>
    <td>{'Place'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}</td>
    <td>{$order.account_information.place}</td>
</tr>
<tr>
    <td>{'State'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}</td>
    <td>{$order.account_information.state}</td>
</tr>
<tr>
    <td>{'Country/region'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}</td>
    <td>{$order.account_information.country}</td>
</tr>
{if is_set($order.account_information.vatnumber)}
	<tr>
	    <td>{'VAT Number'|i18n( 'dcdshop/admin/shop/accounthandlers/html/ez' )}</td>
	    <td>{$order.account_information.vatnumber}</td>
	</tr>
{/if}
<tr>
    <td>{'Billing Company'|i18n( 'dcdshop/admin/shop' )}</td>
    {def $company = fetch('content', 'node', hash('node_id', $order.account_information.company_id) )}
    <td><a href={$company.url_alias|ezurl} title="{$company.name|wash}">{$company.name}</a></td>
</tr>
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
