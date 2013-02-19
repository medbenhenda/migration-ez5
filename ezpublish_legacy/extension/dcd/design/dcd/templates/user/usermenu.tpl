<aside id="factsheet">
	<h2>{"Profile Information"|i18n('dcd/user')}</h2>
	<ul id="course_meta" style="clear:both;">
    	{*
    	<li>
    		<a href={"user/edit"|ezurl} title="{"My Profile"|i18n("dcd/user")}">{"My profile"|i18n("dcd/user")}</a>
    	</li>
    	*}
    	<li>
			<p><a href={concat("/shop/customerorderview/", $userID, "/", $userAccount.email)|ezurl}>{"My orders"|i18n("design/ezwebin/user/edit")}</a></p>
    	</li>
	</ul>
	
	{* include uri="design:user/moodle_register.tpl" *}
	
</aside>