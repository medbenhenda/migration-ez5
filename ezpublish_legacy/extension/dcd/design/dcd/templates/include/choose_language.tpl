{def $companies = fetch('content', 'list', hash( 'parent_node_id', ezini('dcdNodes', 'CompanyHome', 'dcpro.ini'),
									            'class_filter_type',  'include',
									            'class_filter_array', array( 'company' ),
												'sort_by', array('priority', true()) ) )}
<div id="language_html_block">
	<div id="choose_language">

			<div class="countries">
				<h2>{"Change training center"|i18n('dcd/header')}</h2> 
				<ul class="companies_list">
					{foreach $companies as $country_count => $company}
						<li class="entity">
							<h3>
								{if $company.data_map.entity.has_content}
									{$company.data_map.entity.content}
								{elseif and(is_set($company.data_map.country), $company.data_map.country.has_content)}
									{attribute_view_gui attribute=$company.data_map.country}
								{/if}
							</h3>
							<ul>
								{def $countries = explode(',', $company.data_map.entity_countries.sort_ket_string)}
							
								{foreach $company.data_map.entity_countries.content.value as $key => $country}
									<li>
										<a href="#" id="country_{$company.node_id}_{$key}" class="country {$key}">{first_set($country.Name, '')}</a>
									</li>
								{/foreach}
								
								{undef $countries}
							</ul>
						</li>
						
						{if sum($country_count, 1)|mod(5)|eq(0)}
							<div style="clear:both;"></div>
						{/if}
						
					{/foreach}
				</ul>
			</div>
		{*	
		<div class="countries">
				<h2>{"Change language"|i18n('dcd/header')}</h2> 
				{include uri="design:page_header_languages.tpl"}
				
		</div>
		*}
	</div>
</div>
