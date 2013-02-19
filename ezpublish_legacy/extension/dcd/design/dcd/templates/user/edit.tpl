<div id="main" role="main">
	<div id="content">
		<article>
			<form action={concat($module.functions.edit.uri,"/",$userID)|ezurl} method="post" name="Edit">
			
			<div class="user-profile">
			
				<h2>{"User profile"|i18n("design/ezwebin/user/edit")}</h2>
			
				<table class="list"  width="100%" cellspacing="0" cellpadding="0" border="0">
						<tr>
							<td>
								<label>{"Username"|i18n("design/ezwebin/user/edit")}</label><div class="labelbreak"></div>
							</td>
							<td>
								<p class="box">{$userAccount.login|wash}</p>
							</td>
						</tr>
						<tr>
							<td>
								<label>{"Email"|i18n("design/ezwebin/user/edit")}</label><div class="labelbreak"></div>
							</td>
							<td>
								<p class="box">{$userAccount.email|wash(email)}</p>
							</td>
						</tr>
						<tr>
							<td>
								<label>{"Name"|i18n("design/ezwebin/user/edit")}</label><div class="labelbreak"></div>
							</td>
							<td>
								<p class="box">{$userAccount.contentobject.name|wash}</p>
							</td>
						</tr>		
						<tr class="buttonblock">
							{*
								<td>
									<input class="button" type="submit" name="EditButton" value="{'Edit profile'|i18n('design/ezwebin/user/edit')}" />
								</td>
							*}
							<td>
								<input class="button" type="submit" name="ChangePasswordButton" value="{'Change password'|i18n('design/ezwebin/user/edit')}" />
							</td>
						</tr>
						
					{if fetch( 'user', 'has_access_to', hash( 'module', 'shop',
					                                          'function', 'administrate' ) )}
							<tr>
								<td colspan="2">
									<p><a href={concat("/shop/customerorderview/", $userID, "/", $userAccount.email)|ezurl}>{"My orders"|i18n("design/ezwebin/user/edit")}</a></p>
								</td>
							</tr>
					{/if}
							
				</table>
				
				<div class="buttonblock">
					
					
				</div>
			
			</div>
			
			</form>
		</article>
		<br />
	</div>
</div>

{include uri="design:user/usermenu.tpl" status='edit'}

{set scope=global persistent_variable=hash('no_left_column', 'true'}
