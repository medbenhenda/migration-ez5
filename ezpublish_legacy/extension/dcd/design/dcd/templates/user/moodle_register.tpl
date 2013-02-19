<script type="text/javascript" src={"javascript/jquery.validate.js"|ezdesign}></script>

<form name="registration_form" method="post" action={"course/register"|ezurl} class="registration_form registration_lightbox" id="registration_form">
 <h2>{"create Account"|i18n('dcdpro/book')}</h2>
        
    <div class="warning_message" id="lightbox_warning_message">
	  			
	</div>
        
    <div class="form-element">
        <label for="regusername">
            {"Username"|i18n('dcdpro/book')}
            <span class="required">*</span>
        </label>
        <input type="text" style="background-color: #CCEFFC;" id="regusername" name="regusername" class="text required" />
    </div>

    <div class="form-element">
        <label for="regpassword">
            {"Password"|i18n('dcdpro/book')}
            <span class="required">*</span>
        </label>
        <input type="password" style="background-color: #CCEFFC;" id="regpassword" name="regpassword" class="text required" />
        <i class="icon"></i>
    </div>

    <div class="form-element">
        <label for="regconfpassword">
            {"Confirm Password"|i18n('dcdpro/book')}
            <span class="required">*</span>
        </label>
        <input type="password" style="background-color: #CCEFFC;" id="regconfpassword" name="regconfpassword" class="text required" />
    </div>

    <div class="form-element">
        <label for="regemail">
            {"Email"|i18n('dcdpro/book')}
            <span class="required">*</span>
        </label>
        <input type="email" id="regemail" name="regemail" class="text email required" />
        <i class="icon"></i>
        <small class="regFormError" id="regEmailNotif"></small>
    </div>

    <div class="form-element">
        <label for="regconfemail">
            {"Confirm Email"|i18n('dcdpro/book')}
            <span class="required">*</span>
        </label>
        <input type="email" id="regconfemail" name="regconfemail" class="text email required" />
        <small class="regFormError" id="regConfEmailNotif"></small>
    </div>

    <div class="form-element">
        <label for="regfirstname">
            {"First Name"|i18n('dcdpro/book')}
            <span class="required">*</span>
        </label>
        <input type="text" id="regfirstname" name="regfirstname" class="text required" />
    </div>

    <div class="form-element">
        <label for="reglastname">
            {"Last Name"|i18n('dcdpro/book')}
            <span class="required">*</span>
        </label>
        <input type="text" id="reglastname" name="reglastname" class="text required" />
    </div>

    <div class="form-element">
        <label for="regjobtitle">
            {"Job Title"|i18n('dcdpro/book')}
            <span class="required">*</span>
        </label>
        <input type="text" id="regjobtitle" name="regjobtitle"  class="text required" />
    </div>

    <div class="form-element">
        <label for="regcompanyname">
            {"Company Name"|i18n('dcdpro/book')}
            <span class="required">*</span>
        </label>
        <input type="text" id="regcompanyname" name="regcompanyname" class="text required" />
    </div>

    <div class="form-element">
        <label for="regaddress1">
            {"Address Line 1"|i18n('dcdpro/book')}
            <span class="required">*</span>
        </label>
        <input type="text" id="regaddress1" name="regaddress1" class="text required" />
    </div>

    <div class="form-element">
        <label for="regaddress2">
            {"Address Line 2"|i18n('dcdpro/book')}
        </label>
        <input type="text" name="regaddress2" class="text">
    </div>

    <div class="form-element">
        <label for="regaddress3">
            {"Address Line 3"|i18n('dcdpro/book')}
        </label>
        <input type="text" name="regaddress3" class="text">
    </div>

    <div class="form-element">
        <label for="regcity">
            {"Town / City"|i18n('dcdpro/book')}
            <span class="required">*</span>
        </label>
        <input type="text" id="regcity" name="regcity" class="text required">
    </div>

    <div class="form-element">
        <label for="regprovince">
            {"County / Province"|i18n('dcdpro/book')}
            <span class="required">*</span>
        </label>
        <input type="text" id="regProvince" name="regprovince" class="text required">
    </div>

    <div class="form-element">
        <label for="regZip">
            {"Postal / Zip Code"|i18n('dcdpro/book')}
            <span class="required">*</span>
        </label>
        <input type="text" id="regZip" name="regZip" class="text required">
    </div>

    <div class="form-element">
        <label for="regState">
            {"US State"|i18n('dcdpro/book')}
            <span class="required">*</span>
        </label>
        <select id="regState" name="regState">
            <option value="NA"> - {"Non US"|i18n('dcdpro/book')} - </option>
            <option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona </option><option value="AR">Arkansas</option><option value="CA">California </option><option value="CO">Colorado </option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia </option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>                                            
         </select>
    </div>

    <div class="form-element">
        <label for="regCountry">
             {"Country"|i18n('dcdpro/book')}
        </label>
    	{let countries=fetch( 'content', 'country_list' )}

		<select name="regCountry" class="required">
	        <option  value="">{'Not specified'|i18n( 'design/standard/content/datatype' )}</option>
			{def $alpha_2 = ''}
			{foreach $countries as $key => $current_country}
			    		{set $alpha_2 = $current_country.Alpha2}
			            <option value="{$alpha_2}">{$current_country.Name}</option>
			{/foreach}
		</select>
    </div>

    <div class="form-element">
        <label for="regCellCountry">
             {"Mobile Telephone"|i18n('dcdpro/book')}
             <span class="required">*</span>
        </label>
        <input type="text" id="regCell" name="regCell"  class="text required">
    </div>

    <div class="form-element">
        <label for="regTelephone">
             {"other Telephone"|i18n('dcdpro/book')}
        </label>
        <input type="text" id="regTel" name="regTel" class="text">
    </div>
    
   	<div class="form-element">
        <label>
        	&nbsp;
        </label>
    	<input type="submit" value="{"Create an Account !"|i18n('dcdpro/book')}" class="button registerbutton" />
    </div>
        
</form>