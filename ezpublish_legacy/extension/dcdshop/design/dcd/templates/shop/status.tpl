<aside id="factsheet">

			<h2>{"Current Status"|i18n('dcd/shop')}</h2>
			<ul id="course_meta" style="clear:both;">
		    	{if $status|eq('basket')}
		    	<li class="selected">
		    		1. {"Shopping basket"|i18n("design/ezwebin/shop/basket")}
		    	</li>
		    	{else}
		    	<li>
		    		1. <a href={"shop/basket"|ezurl} title="{"Shopping basket"|i18n("design/ezwebin/shop/basket")}">{"Shopping basket"|i18n("design/ezwebin/shop/basket")}</a>
		    	</li>
		    	{/if}
			   	</li>
			    <li{if $status|eq('info')} class="selected"{/if}>2. {"Billing Address"|i18n("design/ezwebin/shop/basket")}</li>
			    <li{if $status|eq('confirm')} class="selected"{/if}>3. {"Order confirmation"|i18n("design/ezwebin/shop/basket")}</li>
			    <li{if $status|eq('payment')} class="selected"{/if}>4. {"Payment"|i18n("design/ezwebin/shop/basket")}</li>
			</ul>
		
</aside>