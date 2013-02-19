{def $session = get_moodle_session()} 

<script type="text/javascript">
{* literal}
	var hashstring = window.location.hash;
	var hasharray = hashstring.split("=");
	if(loggedin== true && hasharray[1] != 'loggedin')
	{
		window.location.href= {/literal}"{$node.url_alias|ezurl('no')}{literal}#_demoForm=loggedin";
	}
	if(loggedin== false)
	{
		if(hasharray[1] == "loggedin" || hasharray == '')
		{
			window.location.href= {/literal}"{$node.url_alias|ezurl('no')}{literal}#_demoForm=first";
		}else{
			window.location.href= {/literal}"{$node.url_alias|ezurl('no')}{literal}#_demoForm="+hasharray[1];
		}
	}
{/literal *}
</script>

<div role="main" id="main">
	<div id="content">
		<article>
			<div class="columns ">
			 <h2 style="margin: 20px 0 0 0;">{"Book this course now"|i18n('dcdpro/book')}</h2>
				<p>
                    </p>
                    <table style="width: 350px; display:inline-block">
                        <tbody>
                        <tr>
                            <td style="width:  90px;">
                                <strong>{"Course:"|i18n('dcdpro/book')}</strong>
                            </td>
                            <td data-eventid="{$event.node_id}" data-id="{$node.node_id}" id="findcid">
                               <a href={$node.url_alias|ezurl} title="{$node.data_map.title.content|wash()}">{$node.data_map.title.content|wash()}</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>{"Location:"|i18n('dcdpro/book')}</strong>
                            </td>
                            <td>
                               {def $country_code = get_country_code( $event.data_map.country.content )}
                             <img src={concat("flags/", $country_code.0.id , ".png")|ezimage} style="float:left; height:11px;width:16px;"/>  {$event.data_map.city.content|wash()} 
                               {undef $country_code}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>{"Start Date"|i18n('dcdpro/book')}</strong>
                            </td>
                            <td>
                               {$event.data_map.from_time.content.timestamp|datetime('custom', '%d/%m/%y')}
                            </td>
                        </tr>
                        <tr>
                            <td>
                            	<strong>{"Duration:"|i18n('dcdpro/book')}</strong>
                            </td>
                            <td>{$event.data_map.duration.content|div(24)|ceil} {'Days'|i18n('dcdpro/course')}</td>
                        </tr>
                        <tr>
                            <td>
                            	<strong>{"Venue:"|i18n('dcdpro/book')}</strong>
                            </td>
                            <td>{$event.data_map.venue.content}</td>
                        </tr>
                        <tr>
                            <td>
                            	<strong>{"Fee:"|i18n('dcdpro/book')}</strong>
                            </td>
                            <td>{$node.data_map.fees.content}</td>
                        </tr>                                                
                    </tbody>
                   </table>
                   
                    {*
                    TODO Check continent of visitor
                    *}
                    {*
                    if( $_SESSION['visitor_continent'] == 'eu' || $_SESSION['visitor_country'] == 'gb' )
                    {
                      
                        <div style="display: inline-block; width: 200px; padding: 10px !important" class="errorBox alert-info">
                            <strong>{"EC TAX RULES"|i18n('dcdpro/book')}</strong><br /><br />
                            <p style="margin: 0;">{"If you do not provide a valid EC VAT number you will be charged the prevailing sales tax."|i18n('dcdpro/book')}</p>
                        </div>
                      
                    }
                    *}
                   
                <p></p>

                <div id="bookingForm">
                    <div id="demoWrapper">
                        <h5 id="status"></h5>
                        <form class="bbq ui-formwizard" method="post" id="demoForm">
                            <div id="fieldWrapper">
								<fieldset style="width: 100%; clear: both; display: none;" id="first" class="step ui-formwizard-content">
									<h2 style="margin-left: 0;">{"Login"|i18n('dcdpro/book')}</h2>
                                    <div>
                                        {"You must have a student account to proceed with a booking."|i18n('dcdpro/book')}<a class="registerLink" href="register">{"Click here to create an account"|i18n('dcdpro/book')}</a><br>
                                    </div>

                                    <div class="clear">&nbsp;</div>
                                    <div style="margin: 0 auto; text-align: center;">
                                        <div style="">
                                            <div class="hide" id="loginMessage"></div>
                                            <table style="width: 300px; text-align: left;"> <!-- 570px -->
                                                <tbody><tr>
                                                    <td style="width: 90px; text-align: left;">
                                                        <div class="form-element">
                                                            <label for="email">{"Email:"|i18n('dcdpro/book')}</label><br>
                                                        </div>
                                                    </td>
                                                    <td>
                                                          <div class="form-element"><input type="email" id="registrationEmail" name="email" class="text ui-wizard-content" disabled="disabled"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="height: 5px;" colspan="2">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        <div class="form-element">
                                                            <label for="password">{"Password:"|i18n('dcdpro/book')} </label><br>
                                                        </div>
                                                    </td>
                                                    <td>
                                                           <div class="form-element"><input type="password" id="regPassword" name="password" class="text ui-wizard-content" disabled="disabled"></div><br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right;" colspan="2">
                                                        <a style=" margin-top: 3px;height: 4px; width:50px; line-height: 4px; float: right;" class="button" onclick="_gaq.push(['_trackPageview','/booking-form-registration']);" id="bookingLogin">{"Login!"|i18n('dcdpro/book')}</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <a class="forgotPasswordLink" href="forgot">{"Forgot Password?"|i18n('dcdpro/book')}</a>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </div>
                                    </div>
                                </fieldset>

                                <!-- BEGIN Logged In -->
                                <fieldset style="width: 100%; clear: both; display: block;" class="step ui-formwizard-content" id="loggedin">
                                    <table style="width: 350px; margin-bottom: 10px;">
                                        <tbody>
                                            <tr>
                                                <td style="padding-top: 10px"><strong>{"Discount:"|i18n('dcdpro/book')}</strong></td>
                                                <td>
                                        <div style="padding: 0 !important;" class="form-element appended-form">
                                            <input type="text" placeholder="Enter Code " style="width:80px" class="text form-autocomplete append-to ui-wizard-content" id="discountCode">
                                            <a class="appended" id="discountButton">{"Location"|i18n('dcdpro/book')}</a>
                                        </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- Show Buttons For Payment Options-->
                                    <div style="float: left; display: inline; width: 200px; clear:both;">
                                        <h2 style="margin-left: 0;">{"Your details"|i18n('dcdpro/book')}</h2>
                                        <address style="font-style:normal;"> ... </address>
                                    </div>
                                    <div class="errorBox">
                                        <h2 class="errorTitle"></h2>
                                        <p class="errorMessage"></p>
                                    </div>
                                    <div style="clear: both;"></div>

									<div id="tnc">
										<div style="float: left; display: inline; width: 200px; clear:both;">
											<h2 style="margin-left: 0;">{"Terms And Conditions"|i18n('dcdpro/book')}</h2>
										</div>
										<div style="clear:left;">
											<p style="margin:0px;"><input type="checkbox" autocomplete="off" id="check" class="input ui-wizard-content" value="iagree" name="input_toc" style="float:left;">  {"I understand and agree to the following"|i18n('dcdpro/book')} <a href="http://staging.dc-professional.com//downloads/en/Terms-and-conditions.pdf" target="_blank">{"Terms And Conditions"|i18n('dcdpro/book')}</a> </p><br>
										</div>
									</div>

									<p style="margin:0;">
                                        </p><h2 style="margin-left: 0;">{"Choose Payment Method"|i18n('dcdpro/book')}</h2>
                                        <div id="paymentOptions">
                                            <table>
                                                <tbody><tr>
                                                    <td style="width: 50%">
                                                        <a data-continent="uk" data-country="gb" style="height:16px; display:inline-block;" onclick="_gaq.push(['_trackPageview','/request-pro-forma-invoice']);" id="proforma" class="button red" href={concat("/course/booking/?invoice&amp;cid=", $node.node_id, "&amp;eid=" , $event.node_id)|ezurl} >{"Send me a Pro-Forma Invoice"|i18n('dcdpro/book')}</a>
                                                        <div style="display: none;" id="proformaTaxNumber">
                                                            <div style="padding: 0 !important;" class="form-element appended-form">
                                                                <input type="text" placeholder="{"Valid VAT Number"|i18n('dcdpro/book')}" class="text append-to ui-wizard-content">
                                                                <a id="proformaContinue" class="appended">{"Continue"|i18n('dcdpro/book')}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td style="width: 50%">
                                                        <div style="padding: 0 !important;" class="form-element appended-form">
                                                            <input type="text" placeholder="{"Enter Voucher Code"|i18n('dcdpro/book')}" style="width:180px" class="text form-autocomplete append-to ui-wizard-content" id="voucherCode">
                                                            <a class="appended" id="voucherButton">{"Redeem!"|i18n('dcdpro/book')}</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 10px; padding: 5px 40px 5px 0px;">
                                                        {"Your will be emailed a pro-forma invoice instantly. Upon receipt of payment you will be granted access to your e-Learning module(s) or to materials for your classroom course. For all classroom courses, payment is required 21 days prior to the start date."|i18n('dcdpro/book')}</td>
                                                    <td style="font-size: 10px; padding: 5px 11px 11px 0;">{"If you are part of a corporate training plan or have purchased a training passport, please enter your voucher code here and you will be automatically enrolled on the course of your choice."|i18n('dcdpro/book')}</td>
                                                </tr>
                                            </tbody></table>
                                        </div>
                                    <p></p>

                                    <p>
                                        <strong>
                                            {"Having trouble booking onto a course? Please call your local client management team on +44 (0) 207 377 1907."|i18n('dcdpro/book')}
                                        </strong>
                                    </p>

                                </fieldset>
                                <fieldset style="width: 100%; clear: both; display: none;" class="step ui-formwizard-content" id="forgot">
                                    <h2>{"Forgot Password"|i18n('dcdpro/book')}</h2>
                                    <div>
                                        <div id="forgotEmailErrors"></div>
                                        <div class="form-element">
                                        <label for="forgotEmail">{"Email Address"|i18n('dcdpro/book')}</label>
                                            <input type="email" class="text ui-wizard-content" name="email" id="registrationemail" disabled="disabled">
                                            <br>
                                            <a style="margin-top: 3px;height: 4px; line-height: 4px; float: right;" class="button" id="forgotPasswordLink">
                                                {"Send Me a New Password"|i18n('dcdpro/book')}
                                            </a>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset style="width: 100%; clear: both; display: none;" class="step ui-formwizard-content" id="register">
                                    <h2>{"create Account"|i18n('dcdpro/book')}</h2>
                                    
                                        <div class="form-element">
                                            <label for="regusername">
                                                {"Username"|i18n('dcdpro/book')}
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" style="background-color: #CCEFFC;" id="regusername" name="regusername" class="text ui-wizard-content" disabled="disabled">
                                        </div>

                                        <div class="form-element">
                                            <label for="regpassword">
                                                {"Password"|i18n('dcdpro/book')}
                                                <span class="required">*</span>
                                            </label>
                                            <input type="password" style="background-color: #CCEFFC;" id="regpassword" name="regpassword" class="text ui-wizard-content" disabled="disabled">
                                            <i class="icon"></i>
                                        </div>

                                        <div class="form-element">
                                            <label for="regconfpassword">
                                                {"Confirm Password"|i18n('dcdpro/book')}
                                                <span class="required">*</span>
                                            </label>
                                            <input type="password" style="background-color: #CCEFFC;" id="regconfpassword" name="regconfpassword" class="text ui-wizard-content" disabled="disabled">
                                        </div>

                                        <div class="form-element">
                                            <label for="regemail">
                                                {"Email"|i18n('dcdpro/book')}
                                                <span class="required">*</span>
                                            </label>
                                            <input type="email" id="regemail" name="regemail" class="text ui-wizard-content" disabled="disabled">
                                            <i class="icon"></i>
                                            <small class="regFormError" id="regEmailNotif"></small>
                                        </div>

                                        <div class="form-element">
                                            <label for="regconfemail">
                                                {"Confirm Email"|i18n('dcdpro/book')}
                                                <span class="required">*</span>
                                            </label>
                                            <input type="email" id="regconfemail" name="regconfemail" class="text ui-wizard-content" disabled="disabled">
                                            <small class="regFormError" id="regConfEmailNotif"></small>
                                        </div>

                                        <div class="form-element">
                                            <label for="regfirstname">
                                                {"First Name"|i18n('dcdpro/book')}
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" id="regfirstname" name="regfirstname" class="text ui-wizard-content" disabled="disabled">
                                        </div>

                                        <div class="form-element">
                                            <label for="reglastname">
                                                {"Last Name"|i18n('dcdpro/book')}
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" id="reglastname" name="reglastname" class="text ui-wizard-content" disabled="disabled">
                                        </div>

                                        <div class="form-element">
                                            <label for="regjobtitle">
                                                {"Job Title"|i18n('dcdpro/book')}
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" id="regjobtitle" name="regjobtitle" class="text ui-wizard-content" disabled="disabled">
                                        </div>

                                        <div class="form-element">
                                            <label for="regcompanyname">
                                                {"Company Name"|i18n('dcdpro/book')}
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" id="regcompanyname" name="regcompanyname" class="text ui-wizard-content" disabled="disabled">
                                        </div>

                                        <div class="form-element">
                                            <label for="regaddress1">
                                                {"Address Line 1"|i18n('dcdpro/book')}
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" id="regaddress1" name="regaddress1" class="text ui-wizard-content" disabled="disabled">
                                        </div>

                                        <div class="form-element">
                                            <label for="regaddress2">
                                                {"Address Line 2"|i18n('dcdpro/book')}
                                            </label>
                                            <input type="text" name="regaddress2" class="text ui-wizard-content" disabled="disabled">
                                        </div>

                                        <div class="form-element">
                                            <label for="regaddress3">
                                                {"Address Line 3"|i18n('dcdpro/book')}
                                            </label>
                                            <input type="text" name="regaddress3" class="text ui-wizard-content" disabled="disabled">
                                        </div>

                                        <div class="form-element">
                                            <label for="regcity">
                                                {"Town / City"|i18n('dcdpro/book')}
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" id="regcity" name="regcity" class="text ui-wizard-content" disabled="disabled">
                                        </div>

                                        <div class="form-element">
                                            <label for="regprovince">
                                                {"County / Province"|i18n('dcdpro/book')}
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" id="regProvince" name="regprovince" class="text ui-wizard-content" disabled="disabled">
                                        </div>

                                        <div class="form-element">
                                            <label for="regZip">
                                                {"Postal / Zip Code"|i18n('dcdpro/book')}
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" id="regZip" name="regZip" class="text ui-wizard-content" disabled="disabled">
                                        </div>

                                        <div class="form-element">
                                            <label for="regState">
                                                {"US State"|i18n('dcdpro/book')}
                                                <span class="required">*</span>
                                            </label>
                                            <select class="wizard-ignore ui-wizard-content" disabled="disabled" id="regState" name="regState">
                                                <option value="NA"> - Non US - </option>
                                                <option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona </option><option value="AR">Arkansas</option><option value="CA">California </option><option value="CO">Colorado </option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia </option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>                                            </select>
                                        </div>

                                        <div class="form-element">
                                            <label for="regCountry">
                                                 {"Country"|i18n('dcdpro/book')}
                                            </label>
                                            <select name="regCountry" disabled="disabled" class="ui-wizard-content">
                                                                                                    <option value="NA">{"Please select your country"|i18n('dcdpro/book')}</option>
                                                                                                    <option value="AF">AFGHANISTAN</option>
                                                                                                    <option value="AL">ALBANIA</option>
                                                                                                    <option value="DZ">ALGERIA</option>
                                                                                                    <option value="AS">AMERICAN SAMOA</option>
                                                                                                    <option value="AD">ANDORRA</option>
                                                                                                    <option value="AO">ANGOLA</option>
                                                                                                    <option value="AI">ANGUILLA</option>
                                                                                                    <option value="AQ">ANTARCTICA</option>
                                                                                                    <option value="AG">ANTIGUA AND BARBUDA</option>
                                                                                                    <option value="AR">ARGENTINA</option>
                                                                                                    <option value="AM">ARMENIA</option>
                                                                                                    <option value="AW">ARUBA</option>
                                                                                                    <option value="AU">AUSTRALIA</option>
                                                                                                    <option value="AT">AUSTRIA</option>
                                                                                                    <option value="AZ">AZERBAIJAN</option>
                                                                                                    <option value="BS">BAHAMAS</option>
                                                                                                    <option value="BH">BAHRAIN</option>
                                                                                                    <option value="BD">BANGLADESH</option>
                                                                                                    <option value="BB">BARBADOS</option>
                                                                                                    <option value="BY">BELARUS</option>
                                                                                                    <option value="BE">BELGIUM</option>
                                                                                                    <option value="BZ">BELIZE</option>
                                                                                                    <option value="BJ">BENIN</option>
                                                                                                    <option value="BM">BERMUDA</option>
                                                                                                    <option value="BT">BHUTAN</option>
                                                                                                    <option value="BO">BOLIVIA</option>
                                                                                                    <option value="BA">BOSNIA AND HERZEGOVINA</option>
                                                                                                    <option value="BW">BOTSWANA</option>
                                                                                                    <option value="BV">BOUVET ISLAND</option>
                                                                                                    <option value="BR">BRAZIL</option>
                                                                                                    <option value="IO">BRITISH INDIAN OCEAN TERRITORY</option>
                                                                                                    <option value="BN">BRUNEI DARUSSALAM</option>
                                                                                                    <option value="BG">BULGARIA</option>
                                                                                                    <option value="BF">BURKINA FASO</option>
                                                                                                    <option value="BI">BURUNDI</option>
                                                                                                    <option value="KH">CAMBODIA</option>
                                                                                                    <option value="CM">CAMEROON</option>
                                                                                                    <option value="CA">CANADA</option>
                                                                                                    <option value="CV">CAPE VERDE</option>
                                                                                                    <option value="KY">CAYMAN ISLANDS</option>
                                                                                                    <option value="CF">CENTRAL AFRICAN REPUBLIC</option>
                                                                                                    <option value="TD">CHAD</option>
                                                                                                    <option value="CL">CHILE</option>
                                                                                                    <option value="CN">CHINA</option>
                                                                                                    <option value="CX">CHRISTMAS ISLAND</option>
                                                                                                    <option value="CC">COCOS (KEELING) ISLANDS</option>
                                                                                                    <option value="CO">COLOMBIA</option>
                                                                                                    <option value="KM">COMOROS</option>
                                                                                                    <option value="CG">CONGO</option>
                                                                                                    <option value="CD">CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
                                                                                                    <option value="CK">COOK ISLANDS</option>
                                                                                                    <option value="CR">COSTA RICA</option>
                                                                                                    <option value="CI">COTE D IVOIRE</option>
                                                                                                    <option value="HR">CROATIA</option>
                                                                                                    <option value="CU">CUBA</option>
                                                                                                    <option value="CY">CYPRUS</option>
                                                                                                    <option value="CZ">CZECH REPUBLIC</option>
                                                                                                    <option value="DK">DENMARK</option>
                                                                                                    <option value="DJ">DJIBOUTI</option>
                                                                                                    <option value="DM">DOMINICA</option>
                                                                                                    <option value="DO">DOMINICAN REPUBLIC</option>
                                                                                                    <option value="TP">EAST TIMOR</option>
                                                                                                    <option value="EC">ECUADOR</option>
                                                                                                    <option value="EG">EGYPT</option>
                                                                                                    <option value="SV">EL SALVADOR</option>
                                                                                                    <option value="GQ">EQUATORIAL GUINEA</option>
                                                                                                    <option value="ER">ERITREA</option>
                                                                                                    <option value="EE">ESTONIA</option>
                                                                                                    <option value="ET">ETHIOPIA</option>
                                                                                                    <option value="FK">FALKLAND ISLANDS (MALVINAS)</option>
                                                                                                    <option value="FO">FAROE ISLANDS</option>
                                                                                                    <option value="FJ">FIJI</option>
                                                                                                    <option value="FI">FINLAND</option>
                                                                                                    <option value="FR">FRANCE</option>
                                                                                                    <option value="GF">FRENCH GUIANA</option>
                                                                                                    <option value="PF">FRENCH POLYNESIA</option>
                                                                                                    <option value="TF">FRENCH SOUTHERN TERRITORIES</option>
                                                                                                    <option value="GA">GABON</option>
                                                                                                    <option value="GM">GAMBIA</option>
                                                                                                    <option value="GE">GEORGIA</option>
                                                                                                    <option value="DE">GERMANY</option>
                                                                                                    <option value="GH">GHANA</option>
                                                                                                    <option value="GI">GIBRALTAR</option>
                                                                                                    <option value="GR">GREECE</option>
                                                                                                    <option value="GL">GREENLAND</option>
                                                                                                    <option value="GD">GRENADA</option>
                                                                                                    <option value="GP">GUADELOUPE</option>
                                                                                                    <option value="GU">GUAM</option>
                                                                                                    <option value="GT">GUATEMALA</option>
                                                                                                    <option value="GN">GUINEA</option>
                                                                                                    <option value="GW">GUINEA-BISSAU</option>
                                                                                                    <option value="GY">GUYANA</option>
                                                                                                    <option value="HT">HAITI</option>
                                                                                                    <option value="HM">HEARD ISLAND AND MCDONALD ISLANDS</option>
                                                                                                    <option value="VA">HOLY SEE (VATICAN CITY STATE)</option>
                                                                                                    <option value="HN">HONDURAS</option>
                                                                                                    <option value="HK">HONG KONG</option>
                                                                                                    <option value="HU">HUNGARY</option>
                                                                                                    <option value="IS">ICELAND</option>
                                                                                                    <option value="IN">INDIA</option>
                                                                                                    <option value="ID">INDONESIA</option>
                                                                                                    <option value="IR">IRAN, ISLAMIC REPUBLIC OF</option>
                                                                                                    <option value="IQ">IRAQ</option>
                                                                                                    <option value="IE">IRELAND</option>
                                                                                                    <option value="IL">ISRAEL</option>
                                                                                                    <option value="IT">ITALY</option>
                                                                                                    <option value="JM">JAMAICA</option>
                                                                                                    <option value="JP">JAPAN</option>
                                                                                                    <option value="JO">JORDAN</option>
                                                                                                    <option value="KZ">KAZAKSTAN</option>
                                                                                                    <option value="KE">KENYA</option>
                                                                                                    <option value="KI">KIRIBATI</option>
                                                                                                    <option value="KP">KOREA DEMOCRATIC PEOPLES REPUBLIC OF</option>
                                                                                                    <option value="KR">KOREA REPUBLIC OF</option>
                                                                                                    <option value="KW">KUWAIT</option>
                                                                                                    <option value="KG">KYRGYZSTAN</option>
                                                                                                    <option value="LA">LAO PEOPLES DEMOCRATIC REPUBLIC</option>
                                                                                                    <option value="LV">LATVIA</option>
                                                                                                    <option value="LB">LEBANON</option>
                                                                                                    <option value="LS">LESOTHO</option>
                                                                                                    <option value="LR">LIBERIA</option>
                                                                                                    <option value="LY">LIBYAN ARAB JAMAHIRIYA</option>
                                                                                                    <option value="LI">LIECHTENSTEIN</option>
                                                                                                    <option value="LT">LITHUANIA</option>
                                                                                                    <option value="LU">LUXEMBOURG</option>
                                                                                                    <option value="MO">MACAU</option>
                                                                                                    <option value="MK">MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>
                                                                                                    <option value="MG">MADAGASCAR</option>
                                                                                                    <option value="MW">MALAWI</option>
                                                                                                    <option value="MY">MALAYSIA</option>
                                                                                                    <option value="MV">MALDIVES</option>
                                                                                                    <option value="ML">MALI</option>
                                                                                                    <option value="MT">MALTA</option>
                                                                                                    <option value="MH">MARSHALL ISLANDS</option>
                                                                                                    <option value="MQ">MARTINIQUE</option>
                                                                                                    <option value="MR">MAURITANIA</option>
                                                                                                    <option value="MU">MAURITIUS</option>
                                                                                                    <option value="YT">MAYOTTE</option>
                                                                                                    <option value="MX">MEXICO</option>
                                                                                                    <option value="FM">MICRONESIA, FEDERATED STATES OF</option>
                                                                                                    <option value="MD">MOLDOVA, REPUBLIC OF</option>
                                                                                                    <option value="MC">MONACO</option>
                                                                                                    <option value="MN">MONGOLIA</option>
                                                                                                    <option value="MS">MONTSERRAT</option>
                                                                                                    <option value="MA">MOROCCO</option>
                                                                                                    <option value="MZ">MOZAMBIQUE</option>
                                                                                                    <option value="MM">MYANMAR</option>
                                                                                                    <option value="NA">NAMIBIA</option>
                                                                                                    <option value="NR">NAURU</option>
                                                                                                    <option value="NP">NEPAL</option>
                                                                                                    <option value="NL">NETHERLANDS</option>
                                                                                                    <option value="AN">NETHERLANDS ANTILLES</option>
                                                                                                    <option value="NC">NEW CALEDONIA</option>
                                                                                                    <option value="NZ">NEW ZEALAND</option>
                                                                                                    <option value="NI">NICARAGUA</option>
                                                                                                    <option value="NE">NIGER</option>
                                                                                                    <option value="NG">NIGERIA</option>
                                                                                                    <option value="NU">NIUE</option>
                                                                                                    <option value="NF">NORFOLK ISLAND</option>
                                                                                                    <option value="MP">NORTHERN MARIANA ISLANDS</option>
                                                                                                    <option value="NO">NORWAY</option>
                                                                                                    <option value="OM">OMAN</option>
                                                                                                    <option value="PK">PAKISTAN</option>
                                                                                                    <option value="PW">PALAU</option>
                                                                                                    <option value="PS">PALESTINIAN TERRITORY, OCCUPIED</option>
                                                                                                    <option value="PA">PANAMA</option>
                                                                                                    <option value="PG">PAPUA NEW GUINEA</option>
                                                                                                    <option value="PY">PARAGUAY</option>
                                                                                                    <option value="PE">PERU</option>
                                                                                                    <option value="PH">PHILIPPINES</option>
                                                                                                    <option value="PN">PITCAIRN</option>
                                                                                                    <option value="PL">POLAND</option>
                                                                                                    <option value="PT">PORTUGAL</option>
                                                                                                    <option value="PR">PUERTO RICO</option>
                                                                                                    <option value="QA">QATAR</option>
                                                                                                    <option value="RE">REUNION</option>
                                                                                                    <option value="RO">ROMANIA</option>
                                                                                                    <option value="RU">RUSSIAN FEDERATION</option>
                                                                                                    <option value="RW">RWANDA</option>
                                                                                                    <option value="SH">SAINT HELENA</option>
                                                                                                    <option value="KN">SAINT KITTS AND NEVIS</option>
                                                                                                    <option value="LC">SAINT LUCIA</option>
                                                                                                    <option value="PM">SAINT PIERRE AND MIQUELON</option>
                                                                                                    <option value="VC">SAINT VINCENT AND THE GRENADINES</option>
                                                                                                    <option value="WS">SAMOA</option>
                                                                                                    <option value="SM">SAN MARINO</option>
                                                                                                    <option value="ST">SAO TOME AND PRINCIPE</option>
                                                                                                    <option value="SA">SAUDI ARABIA</option>
                                                                                                    <option value="SN">SENEGAL</option>
                                                                                                    <option value="SC">SEYCHELLES</option>
                                                                                                    <option value="SL">SIERRA LEONE</option>
                                                                                                    <option value="SG">SINGAPORE</option>
                                                                                                    <option value="SK">SLOVAKIA</option>
                                                                                                    <option value="SI">SLOVENIA</option>
                                                                                                    <option value="SB">SOLOMON ISLANDS</option>
                                                                                                    <option value="SO">SOMALIA</option>
                                                                                                    <option value="ZA">SOUTH AFRICA</option>
                                                                                                    <option value="GS">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
                                                                                                    <option value="ES">SPAIN</option>
                                                                                                    <option value="LK">SRI LANKA</option>
                                                                                                    <option value="SD">SUDAN</option>
                                                                                                    <option value="SR">SURINAME</option>
                                                                                                    <option value="SJ">SVALBARD AND JAN MAYEN</option>
                                                                                                    <option value="SZ">SWAZILAND</option>
                                                                                                    <option value="SE">SWEDEN</option>
                                                                                                    <option value="CH">SWITZERLAND</option>
                                                                                                    <option value="SY">SYRIAN ARAB REPUBLIC</option>
                                                                                                    <option value="TW">TAIWAN, PROVINCE OF CHINA</option>
                                                                                                    <option value="TJ">TAJIKISTAN</option>
                                                                                                    <option value="TZ">TANZANIA, UNITED REPUBLIC OF</option>
                                                                                                    <option value="TH">THAILAND</option>
                                                                                                    <option value="TG">TOGO</option>
                                                                                                    <option value="TK">TOKELAU</option>
                                                                                                    <option value="TO">TONGA</option>
                                                                                                    <option value="TT">TRINIDAD AND TOBAGO</option>
                                                                                                    <option value="TN">TUNISIA</option>
                                                                                                    <option value="TR">TURKEY</option>
                                                                                                    <option value="TM">TURKMENISTAN</option>
                                                                                                    <option value="TC">TURKS AND CAICOS ISLANDS</option>
                                                                                                    <option value="TV">TUVALU</option>
                                                                                                    <option value="UG">UGANDA</option>
                                                                                                    <option value="UA">UKRAINE</option>
                                                                                                    <option value="AE">UNITED ARAB EMIRATES</option>
                                                                                                    <option value="GB" selected="selected">UNITED KINGDOM</option>
                                                                                                    <option value="US">UNITED STATES</option>
                                                                                                    <option value="UM">UNITED STATES MINOR OUTLYING ISLANDS</option>
                                                                                                    <option value="UY">URUGUAY</option>
                                                                                                    <option value="UZ">UZBEKISTAN</option>
                                                                                                    <option value="VU">VANUATU</option>
                                                                                                    <option value="VE">VENEZUELA</option>
                                                                                                    <option value="VN">VIET NAM</option>
                                                                                                    <option value="VG">VIRGIN ISLANDS, BRITISH</option>
                                                                                                    <option value="VI">VIRGIN ISLANDS, U.S.</option>
                                                                                                    <option value="WF">WALLIS AND FUTUNA</option>
                                                                                                    <option value="EH">WESTERN SAHARA</option>
                                                                                                    <option value="YE">YEMEN</option>
                                                                                                    <option value="YU">YUGOSLAVIA</option>
                                                                                                    <option value="ZM">ZAMBIA</option>
                                                                                                    <option value="ZW">ZIMBABWE</option>
                                                                                          </select>
                                        </div>

                                        <div class="form-element">
                                            <label for="regCellCountry">
                                                 {"Mobile Telephone"|i18n('dcdpro/book')}
                                                 <span class="required">*</span>
                                            </label>
                                            <input type="text" style="width:40px;" id="regCellCountry" name="regCellCountry" class="text countryCode ui-wizard-content" disabled="disabled">
                                            <input type="text" style="width:185px;" id="regCell" name="regCell" class="text ui-wizard-content" disabled="disabled">
                                        </div>

                                        <div class="form-element">
                                            <label for="regTelephone">
                                                 {"other Telephone"|i18n('dcdpro/book')}
                                            </label>
                                            <input type="text" style="width:40px;" id="regTelCountry" name="regTelCountry" class="text countryCode ui-wizard-content" disabled="disabled">
                                            <input type="text" style="width:185px;" id="regTel" name="regTel" class="text ui-wizard-content" disabled="disabled">
                                        </div>
                                        <a style="margin-top: 3px;height: 4px; line-height: 4px; float: right;" onclick="_gaq.push(['_trackPageview','/booking-form-registration']);" class="button" id="registerButton">
                                        	{"create Your Account !"|i18n('dcdpro/book')}
                                        </a>
                                    
                                </fieldset>
                            </div></form>
                        
                        <p id="data"></p>
                    </div>
                </div>

                <!-- Registration Message Pop up  -->
                <div id="regPopup">
                    <div id="boxes">
                        <div class="window" id="dialog">
                            <a class="closeButton">x</a>
                            <h2 style="color: green;">Success</h2>
                            <p>
                                {"Congratulations! You have successfully created your account with us."|i18n('dcdpro/book')}<br />
								{"You will now be directed to the booking page."|i18n('dcdpro/book')}
								<span style="color: #CC5500;">
									{"Please note that in order to complete the enrollment process you have to verify your account."|i18n('dcdpro/book')}
								</span> <br />
								{"You may do so by clicking on the link sent to your email at the end of this process. This email is sent from noreply@dc-professional.com."|i18n('dcdpro/book')} 
								{"Remember to check your SPAM folder, as your email provider may automatically redirect it there."|i18n('dcdpro/book')}
								<br />
								{"Thank you."|i18n('dcdpro/book')}
							</p>
                        </div>
                        <!-- Do not remove div#mask, because you'll need it to fill the whole screen -->
                        <div id="mask"></div>
                    </div>
                </div>

                <!-- Pop up for outdated Profiles (prior April 5th) -->
                <div id="updateProfile">
                    <div id="boxes">
                        <div class="window" id="dialog">
                            <div class="closeButton">x</div>
                            <img style="text-align: center; width:auto; height:auto;" src={"design/icons/alert.png"|ezimage}>
                            <p>
                                {"We have just launched a new student account and proforma payment system."|i18n('dcdpro/book')}
                                <br />
                                {"Students enrolled on DCProfessional online and classroom courses prior to April 5th, 2012, will need to update their profile information in order to request a proforma invoice."|i18n('dcdpro/book')}
                                <br /><br />
                                {"Please click"|i18n('dcdpro/book')} <a href="https://my.dc-professional.com/user/editadvanced.php">{"here to login"|i18n('dcdpro/book')}</a>.
                            </p>
                        </div>
                    </div>
                    <div id="mask"></div>
                </div>

        </div></article>
    </div>
</div>

{include uri="design:course/factsheet.tpl"}

{set scope=global persistent_variable=hash('no_left_column', 'true' , 'extra_body_class', 'course book')}
