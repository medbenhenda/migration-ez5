  <header>
		<a href="/" id="logo" title="{$home.name|wash}">
			<h1>{'DC Professional Development'|i18n('dcdpro/page_header')}</h1>
			{$home.data_map.title.content}
		</a>

		<div>
			<a class="button" id="account_login" href="http://my.dc-professional.com/login/index.php">{"My DC-Pro"|i18n('dcd/page_header')}</a>
			{attribute_view_gui attribute=$home.data_map.header}

	        {include uri='design:page_header_searchbox.tpl'}
	        {include uri='design:page_header_links.tpl'}
	        
	        {include uri='design:shop/preferred_currency.tpl'}
	        
	        {* include uri='design:page_header_languages.tpl' *}
		</div>

	</header>
