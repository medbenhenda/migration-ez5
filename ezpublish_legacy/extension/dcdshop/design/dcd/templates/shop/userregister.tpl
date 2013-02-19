

<div id="main" role="main">
	<div id="content">
		<article>

			<div class="attribute-header">
			     <h1 class="long">{"Billing Address"|i18n("design/ezwebin/shop/userregister")}</h1>
			</div>
			
			{if $input_error}
				<div class="warning" style="color:red;">
				<p>
				{"Input did not validate. All fields marked with * must be filled in."|i18n("design/ezwebin/shop/userregister")}
				</p>
				</div>
			{/if}
			
			<div id="not_logged_in" style="display:none;">
				<div style="margin:20px;" id="check_login">
					<a href={"user/login"|ezurl} onclick="$.colorbox({ldelim} html:	$('#header_login_form').html() {rdelim}); return false;">{"Already registered? Click here to login."|i18n('dcd/userregister')}</a>
				</div>	
			</div>
			
			<div id="billing_address_form">
				<form method="post" action={"/dcdshop/userregister/"|ezurl} id="userregister">
					<table>
					    <tbody><tr>
					        <td>
					            <div class="form-element">
					                <label for="FirstName">{"First name"|i18n("design/ezwebin/shop/userregister")}:*</label>
					            </div>
					        </td>
					        <td>
					              <div class="form-element">
					        			<input class="text required" type="text" name="FirstName" id="FirstName" size="20" value="{$first_name|wash}" />
					              </div>
					        </td>
					    </tr>
					    <tr>
					        <td style="text-align: left;">
					            <div class="form-element">
					                <label for="LastName">{"Last name"|i18n("design/ezwebin/shop/userregister")}:*</label>
					            </div>
					        </td>
					        <td>
					           <div class="form-element">
					           		<input class="text required" type="text" name="LastName" id="LastName" size="20" value="{$last_name|wash}" />
					           </div>
					           
					           	<label for="id2"></label>
					        </td>
					    </tr>
					    <tr>
					        <td style="text-align: left;">
					            <div class="form-element">
					                <label for="EMail">{"Email"|i18n("design/ezwebin/shop/userregister")}:*</label>
					            </div>
					        </td>
					        <td style="border-top: 1px solid #DDD;">
					           <div class="form-element">
					           		<input class="text required email" type="text" name="EMail" id="EMail" size="20" value="{$email|wash}" />
					           		<span class="email_message" id="existing_user_message" style="display:none;"><i class="icon icopos" style="float:left;"></i> <a href={"user/login"|ezurl} title="{"Login user"|i18n('dcdshop/billing_address')}" onclick="$.colorbox({ldelim} html: $('#header_login_form').html() {rdelim});return false;" >{"Login user"|i18n('dcdshop/billing_address')}<a/></span>
					           		<span class="email_message" id="new_user_message" style="display:none;"><i class="icon icopos"></i> {"Account available"|i18n('dcdshop/billing_address')}</span>
					           </div>
					           	<label for="id2"></label>
					        </td>
					    </tr>
				        <tr class="login_password_row" style="display:none;">
				        	<td>
				            	<div class="form-element">
					                <label for="customer_password">{"Password"|i18n('dcdshop/userregister')}:*</label>
					            </div>
					    	</td>
					    	<td>
					    		<div class="form-element">
					                <input class="text required password" value="" title="{"Password"|i18n('dcdshop/userregister')}" id="customer_password" name="customer_password" type="password">	            
					        	</div>
					    	</td>
				        </tr>
				        <tr class="login_password_row" style="display:none;">
				        	<td>
				  				<div class="form-element">
									 <label for="confirm_password_confirm">{"Confirm password"|i18n('dcdshop/userregister')}:</label>
				                </div>
					    	</td>
					    	<td>
					    	     <div class="form-element">
					                <input class="text password" value="" id="confirm_password_confirm" title="{"Confirm Password"|i18n('dcdshop/userregister')}" name="confirm_password" type="password">
					            </div>
					    	</td>        
				        </tr>
					    <tr>
					        <td style="text-align: left;">
					            <div class="form-element">
					                <label for="company">{"Company"|i18n("design/ezwebin/shop/userregister")}:*</label>
					            </div>
					        </td>
					        <td style="border-top: 1px solid #DDD;">
					           <div class="form-element" >
					           		<input class="text required" type="text" name="company" id="company" size="20" value="{$company|wash}" />
					           </div>
					           
					           	<label for="id2"></label>
					        </td>
					    </tr>
					    <tr>
					        <td style="text-align: left;">
					            <div class="form-element">
					                <label for="jobtitle">{"Job title"|i18n("dcdshop/userregister")}:*</label>
					            </div>
					        </td>
					        <td style="border-top: 1px solid #DDD;">
					           <div class="form-element" >
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
					           
					           		<select size="6" id="jobtitle" name="jobtitle" class="required" style="float:left;">
					           			{foreach $jobtitles as $job_id => $jobtitle_name}
						           			<option value="{$job_id}" {if $jobtitle_name|eq( $jobtitle) }selected="selected"{/if} label="{$jobtitle_name}">{$jobtitle_name}</option>
										{/foreach}								
									</select>
					           </div>
					           
					           	<label for="id2"></label>
					        </td>
					    </tr>	    
					    <tr>
					        <td style="text-align: left;">
					            <div class="form-element">
					                <label for="Street1">{"Street"|i18n("design/ezwebin/shop/userregister")}:*</label>
					            </div>
					        </td>
					        <td>
					           <div class="form-element">
					           		<input class="text required" type="text" name="Street1" id="Street1" size="20" value="{$street1|wash}" />
					           </div>
					           
					           	<label for="id2"></label>
					        </td>
					    </tr>   
					    <tr>
					        <td style="text-align: left;">
					            <div class="form-element">
					                <label for="Zip"> {"Zip"|i18n("design/ezwebin/shop/userregister")}:*</label>
					            </div>
					        </td>
					        <td>
					           <div class="form-element">
					           		 <input class="text required" type="text" name="Zip" id="Zip" size="20" value="{$zip|wash}" />
					           </div>
					           
					           	<label for="id2"></label>
					        </td>
					    </tr>
					    <tr>
					        <td style="text-align: left;">
					            <div class="form-element">
					                <label for="Place"> {"Town"|i18n("design/ezwebin/shop/userregister")}:*</label>
					            </div>
					        </td>
					        <td>
					           <div class="form-element">
					           		 <input class="text required" type="text" name="Place" id="Place" size="20" value="{$place|wash}" />
					           </div>
					           	<label for="id2"></label>
					        </td>
					    </tr>  
					    <tr>
					        <td style="text-align: left;">
					            <div class="form-element">
					                <label for="State">{"State"|i18n("design/ezwebin/shop/userregister")}:</label>
					            </div>
					        </td>
					        <td>
					           <div class="form-element">
					           		 <input class="text" type="text" name="State" id="State" size="20" value="{$state|wash}" />
					           </div>	           
					           	<label for="id2"></label>
					        </td>
					    </tr>                                  
					    <tr>
					        <td style="text-align: left;">
					            <div class="form-element">
					                <label for="Country">{"Country"|i18n("design/ezwebin/shop/userregister")}:*</label>
					            </div>
					        </td>
					        <td style="width: 410px;">
					           <div class="form-element" style="float:left;width:170px;" id="register_country">
					           		{include uri='design:shop/country/edit.tpl' select_name='Country' select_size=5 current_val=$country}
					           </div>
					           <script type="text/javascript">
					           		{literal}
					           		
					           		$().ready(function() {
					
										$('#register_country select').bind('change', display_eu_tax_rules_message);
										
										display_eu_tax_rules_message();
										
									});
					
									var eu_countries = [{/literal}{foreach ezini('VatEUCountries', 'Country', 'dcdshop.ini') as $country}'{$country}'{delimiter}, {/delimiter}{/foreach}{literal}];
					
									var other_eu_countries = [{/literal}{foreach ezini('VatDisplayCountries', 'Country', 'dcdshop.ini') as $country}'{$country}'{delimiter}, {/delimiter}{/foreach}{literal}];
					
					
									function display_eu_tax_rules_message(){ 
												
												$('#register_country select option:selected').each(function(){
					
													$.ajax('/dcdshop/update_entity/' + $(this).val() );
					
													if($.inArray( $(this).val(),  eu_countries) >= 0 || $.inArray( $(this).val(),  other_eu_countries) >= 0 ){
														
														$('input#vatnumber').css( 'background', '#D9EDF7' );
														$('#country_tax_rule').show( 'slow' );
													}
													else{
														$('#country_tax_rule').hide( 'slow' );
														$('input#vatnumber').css( 'background', 'none' );
														
													}
												});
									}
									{/literal}
					           </script>
					           
					           <div class="errorBox alert-info" style="display: none; width: 180px; padding: 5px; margin:5px 5px 0 0;" id="country_tax_rule">
					                <strong>{"EC TAX RULES"|i18n('dcdshop/userregister')}</strong><br><br>
					                <p style="margin: 0;">{"If you do not provide a valid EC VAT number you will be charged the prevailing sales tax."|i18n('dcdshop/userregister')}</p>
					            </div>
					            
					            <div class="errorBox alert-info" style="display: none; width: 180px; padding: 5px; margin:5px 5px 0 0;" id="other_tax_rule">
					                <strong>{"EC TAX RULES"|i18n('dcdshop/userregister')}</strong><br><br>
					                <p style="margin: 0;">{"If you do not provide a valid EC VAT number you should be charged the prevailing sales tax."|i18n('dcdshop/userregister')}</p>
					            </div>
					            
					           <br>
					           	<label for="id2"></label>
					        </td>
					    </tr>
					    <tr>
					        <td style="text-align: left;">
					            <div class="form-element">
					                <label for="vatnumber">{"Valid VAT Number"|i18n("design/ezwebin/shop/userregister")}:</label>
					            </div>
					        </td>
					        <td>
					           <div class="form-element">
					           		<input id="vatnumber" class="text vatnumber" type="text" name="vatnumber" size="20" value="{$vatnumber|wash}"  />
					               </div>
					               	<label for="id2"></label>
					   
				            </td>
				        </tr>  
				        <tr>
				            <td> </td>
				            <td>
				               <div class="form-element">
				               		 <input class="button" type="submit" name="StoreButton" value="{"Continue"|i18n( 'design/ezwebin/shop/userregister')}" />
				           		</div>
				           		<label for="id2"></label>
					        </td>
					    </tr>                   
					 </table>
				</form>
				
				<p>
					{"All fields marked with * must be filled in."|i18n("design/ezwebin/shop/userregister")}
				</p>
			</div>

			{* this impacts the template within *}
		    <script type="text/javascript">
				if(is_logged_in == undefined || is_logged_in != "1")
				{ldelim}
					$('#not_logged_in').show();
					$('.login_password_row').show();
				{rdelim}
				
					{if count($errors)|gt(0)}
						$().ready(function() {ldelim}
							$('{foreach $errors as $error}{if array('jobtitle', 'Country')|contains($error)}select{else}input{/if}[name={$error}]{delimiter},{/delimiter}{/foreach}').addClass('error');
						{rdelim} );
					
					{/if}
				
			</script>
			
		</article>
		<br />
	</div>
</div>

{include uri="design:shop/status.tpl" status='info'}