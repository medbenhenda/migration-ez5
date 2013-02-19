  <header>
		<a href="/" id="logo">
			<h1>{'DCD Intelligence'|i18n('dcdpro/page_header')}</h1>
			{$home.data_map.title.content}
		</a>

		<div>
			{attribute_view_gui attribute=$home.data_map.header}
	        {include uri='design:page_header_searchbox.tpl'}
	        {include uri='design:page_header_links.tpl' }
		</div>
    {* include uri='design:page_header_languages.tpl' *}
	</header>