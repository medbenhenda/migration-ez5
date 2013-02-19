<form method="post" action={"/user/login/"|ezurl} name="loginform" id="loginform">
	
	<table style="width: 300px; text-align: left;margin:auto;">
        <tbody><tr>
            <td style="width: 90px; text-align: left;">
                <div class="form-element">
                    <label for="email">{"Login"|i18n('dcdpro/login')}</label><br>
                </div>
            </td>
            <td>
                  <div class="form-element">
                  	<input class="text required" type="text" size="10" name="Login" id="id1" value="{$User:login|wash}" tabindex="1" />
                  </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: left;">
                 <div class="form-element">
                    <label for="password">{"Password"|i18n("design/ezwebin/user/login")}</label>
                 </div>
            </td>
            <td>
				<div class="form-element">
	            	<input class="text ui-wizard-content required" type="password" size="10" name="Password" id="id2" value="" tabindex="1" />
				</div>
            </td>
        </tr>
        <tr>
             <td class="buttonblock" colspan="2">
	    		<a href={'/user/forgotpassword'|ezurl} class="forgotPasswordLink">{'Forgot your password?'|i18n( 'design/ezwebin/user/login' )}</a>
	    		- <a href={'/user/register'|ezurl} >{'Sign up'|i18n( 'design/ezwebin/user/login' )}</a>
                <input class="button" type="submit" name="LoginButton" style="float: right;" value="{'Login'|i18n('design/ezwebin/user/login','Button')}" tabindex="1" />
            </td>
        </tr>
    </tbody></table>
	
	{if ezini( 'Session', 'RememberMeTimeout' )}
		<div class="block">
			<input type="checkbox" tabindex="1" name="Cookie" id="id4" /><label for="id4" style="display:inline;">{"Remember me"|i18n("design/ezwebin/user/login")}</label>
		</div>
	{/if}
	
	<input type="hidden" name="RedirectURI" value="{$User:redirect_uri|wash}" />
	
	{if and( is_set( $User:post_data ), is_array( $User:post_data ) )}
	  {foreach $User:post_data as $key => $postData}
	     <input name="Last_{$key}" value="{$postData}" type="hidden" /><br/>
	  {/foreach}
	{/if}
</form>