<div id="main" role="main">
	<div id="content">
		<article>
			<form action={concat($module.functions.password.uri,"/",$userID)|ezurl} method="post" name="Password">
			
			<div class="attribute-header">
			<h1 class="long">{"Change password for user"|i18n("design/ezwebin/user/password")} {$userAccount.login}</h1>
			</div>
			
				{if $message}
					{if or( $oldPasswordNotValid, $newPasswordNotMatch, $newPasswordTooShort )}
					    {if $oldPasswordNotValid}
					        <div class="warning">
					            <h2>{'Please retype your old password.'|i18n('design/ezwebin/user/password')}</h2>
					        </div>
					    {/if}
					    {if $newPasswordNotMatch}
					        <div class="warning">
					            <h2>{"Password didn't match, please retype your new password."|i18n('design/ezwebin/user/password')}</h2>
					        </div>
					    {/if}
					    {if $newPasswordTooShort}
					        <div class="warning">
					            <h2>{"The new password must be at least %1 characters long, please retype your new password."|i18n( 'design/ezwebin/user/password','',array( ezini('UserSettings','MinPasswordLength') ) )}</h2>
					        </div>
					    {/if}
					
					{else}
					    <div class="feedback">
					        <h2>{'Password successfully updated.'|i18n('design/ezwebin/user/password')}</h2>
					    </div>
					{/if}
				
				{/if}
				
				<table>
				    <tr>
				        <td style="width: 90px; text-align: left;">
				            <div class="form-element">
				            	{if $oldPasswordNotValid}*{/if}
								<label>{"Old password"|i18n("design/ezwebin/user/password")}</label><div class="labelbreak"></div>
					        </div>
				        </td>
				        <td>
				              <div class="form-element">
							        <input class="halfbox" type="password" name="oldPassword" size="11" value="{$oldPassword|wash}" />			              
				              </div>
				        </td>
					</tr>
					<tr>
				        <td style="width: 90px; text-align: left;">
				            <div class="form-element">
					            {if $newPasswordNotMatch}*{/if}
								<label>{"New password"|i18n("design/ezwebin/user/password")}</label><div class="labelbreak"></div>
							</div>
				        </td>
				        <td>
				              <div class="form-element">
							    	<input class="halfbox" type="password" name="newPassword" size="11" value="{$newPassword|wash}" />			              
				              </div>
				        </td>
					</tr>
					<tr>
				        <td style="width: 90px; text-align: left;">
				            <div class="form-element">
								{if $newPasswordNotMatch}*{/if}
								<label>{"Retype password"|i18n("design/ezwebin/user/password")}</label><div class="labelbreak"></div>
					        </div>
				        </td>
				        <td>
				              <div class="form-element">
									<input class="halfbox" type="password" name="confirmPassword" size="11" value="{$confirmPassword|wash}" />
				              </div>
				        </td>
			        </tr>
			   		<tr>
				   		<td>     
						   <div class="buttonblock">
								<input class="button" type="submit" name="OKButton" value="{'OK'|i18n('design/ezwebin/user/password')}" />
							</div>
				        </td>
				     </tr>
				</table>
			
			</form>

      		</article>
		<br />
	</div>
</div>

{include uri="design:user/usermenu.tpl" status='edit'}