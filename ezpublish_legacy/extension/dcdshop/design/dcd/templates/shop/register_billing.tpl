<form method="post" action={"/dcdshop/userregister/"|ezurl} id="userregister">
	<table>
	    <tbody><tr>
	        <td>
	            <div class="form-element">
	                <label>{"First name"|i18n("design/ezwebin/shop/userregister")}:*</label><br>
	            </div>
	        </td>
	        <td>
	              <div class="form-element">
	        			<input class="text required" type="text" name="FirstName" size="20" value="{$first_name|wash}" />
	              </div>
	        </td>
	    </tr>
	    <tr>
	        <td style="text-align: left;">
	            <div class="form-element">
	                <label>{"Last name"|i18n("design/ezwebin/shop/userregister")}:*</label><br>
	            </div>
	        </td>
	        <td>
	           <div class="form-element">
	           		<input class="text required" type="text" name="LastName" size="20" value="{$last_name|wash}" />
	           </div><br>
	           
	           	<label for="id2"></label>
	        </td>
	    </tr>
	    <tr>
	        <td style="text-align: left;">
	            <div class="form-element">
	                <label>{"Email"|i18n("design/ezwebin/shop/userregister")}:*</label><br>
	            </div>
	        </td>
	        <td>
	           <div class="form-element">
	           		<input class="text required email" type="text" name="EMail" size="20" value="{$email|wash}" />
	           </div><br>
	           
	           	<label for="id2"></label>
	        </td>
	    </tr>                
	    <tr>
	        <td style="text-align: left;">
	            <div class="form-element">
	                <label>{"Company"|i18n("design/ezwebin/shop/userregister")}:</label><br>
	            </div>
	        </td>
	        <td>
	           <div class="form-element">
	           		<input class="text" type="text" name="Street1" size="20" value="{$street1|wash}" />
	           </div><br>
	           
	           	<label for="id2"></label>
	        </td>
	    </tr>
	    <tr>
	        <td style="text-align: left;">
	            <div class="form-element">
	                <label>{"Street"|i18n("design/ezwebin/shop/userregister")}:*</label><br>
	            </div>
	        </td>
	        <td>
	           <div class="form-element">
	           		<input class="text required" type="text" name="Street2" size="20" value="{$street2|wash}" />
	           </div><br>
	           
	           	<label for="id2"></label>
	        </td>
	    </tr>   
	    <tr>
	        <td style="text-align: left;">
	            <div class="form-element">
	                <label> {"Zip"|i18n("design/ezwebin/shop/userregister")}:*</label><br>
	            </div>
	        </td>
	        <td>
	           <div class="form-element">
	           		 <input class="text required" type="text" name="Zip" size="20" value="{$zip|wash}" />
	           </div><br>
	           
	           	<label for="id2"></label>
	        </td>
	    </tr>
	    <tr>
	        <td style="text-align: left;">
	            <div class="form-element">
	                <label> {"Town"|i18n("design/ezwebin/shop/userregister")}:*</label><br>
	            </div>
	        </td>
	        <td>
	           <div class="form-element">
	           		 <input class="text required" type="text" name="Place" size="20" value="{$place|wash}" />
	           </div><br>
	           	<label for="id2"></label>
	        </td>
	    </tr>  
	    <tr>
	        <td style="text-align: left;">
	            <div class="form-element">
	                <label>{"State"|i18n("design/ezwebin/shop/userregister")}:</label><br>
	            </div>
	        </td>
	        <td>
	           <div class="form-element">
	           		 <input class="text" type="text" name="State" size="20" value="{$state|wash}" />
	           </div><br>
	           
	           	<label for="id2"></label>
	        </td>
	    </tr>                                  
	    <tr>
	        <td style="text-align: left;">
	            <div class="form-element">
	                <label>{"Country"|i18n("design/ezwebin/shop/userregister")}:*</label><br>
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
	                <label>{"Valid VAT Number"|i18n("design/ezwebin/shop/userregister")}:</label><br>
	            </div>
	        </td>
	        <td>
	           <div class="form-element">
	           		<input id="vatnumber" class="text vatnumber" type="text" name="vatnumber" size="20" value="{$vatnumber|wash}"  />
	               </div><br>
	               
	               	<label for="id2"></label>
	   
	            </td>
	        </tr>  
	        <tr>
	            <td> </td>
	            <td>
	               <div class="form-element">
	               		 <input class="button" type="submit" name="StoreButton" value="{"Continue"|i18n( 'design/ezwebin/shop/userregister')}" />
	           </div><br>
	           
	           	<label for="id2"></label>
	        </td>
	    </tr>                   
	 </table>
</form>

<p>
	{"All fields marked with * must be filled in."|i18n("design/ezwebin/shop/userregister")}
</p>