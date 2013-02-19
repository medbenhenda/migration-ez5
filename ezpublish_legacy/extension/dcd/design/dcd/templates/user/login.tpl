 <div id="main" role="main">
	<div id="content">
		<article>
		  <script type="text/javascript" src={"javascript/jquery.validate.js"|ezdesign}></script>
		
		    <h2>{"Login"|i18n("design/ezwebin/user/login")}</h2>
		
			<div class="columns">
			
				{if $User:warning.bad_login}
					<div class="warning">
						<h2>{"Could not login"|i18n("design/ezwebin/user/login")}</h2>
						<ul>
						    <li>{"A valid username and password is required to login."|i18n("design/ezwebin/user/login")}</li>
						</ul>
					</div>
				{else}
					{if $site_access.allowed|not}
						<div class="warning">
							<h2>{"Access not allowed"|i18n("design/ezwebin/user/login")}</h2>
							<ul>
							    <li>{"You are not allowed to access %1."|i18n("design/ezwebin/user/login",,array($site_access.name))}</li>
							</ul>
						</div>
					{/if}
				{/if}
			
				{include uri="design:user/simple_login.tpl"}
			</div>
		</article>
		<br />
	</div>
</div>	
	{* include uri='design:social_networks/login.tpl' *}