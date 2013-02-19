<aside id="course_search_critera">

	<h3>{"Search Facilty"|i18n('intel/boxes/course_search_facility')}</h3>

	{def $environments = fetch('content', 'list', hash( 'parent_node_id', 99, 
									              'class_filter_type',  'include',
									              'class_filter_array', array( 'environment' ), 
												  'sort_by', array( 'priority', false() ) 
										  ))}

	<form action={"dcpro/search"|ezurl} method="get" accept-charset="utf-8">
		<select name="q" id="course_type" class="filter_type">
			<option value="">{"Choose Product Type"|i18n('intel/boxes/course_search_facility')}</option>
			<option value="{"Seminars"|i18n('intel/boxes/course_search_facility')}">{"Seminars"|i18n('intel/boxes/course_search_facility')}</option>
			<option value="{"Market Trend Reports"|i18n('intel/boxes/course_search_facility')}">{"Market Trend Reports"|i18n('intel/boxes/course_search_facility')}</option>
			<option value="{"Short Reports"|i18n('intel/boxes/course_search_facility')}">{"Short Reports"|i18n('intel/boxes/course_search_facility')}</option>
			<option value="{"Bespoke Reports"|i18n('intel/boxes/course_search_facility')}">{"Bespoke Reports"|i18n('intel/boxes/course_search_facility')}</option>
		</select>
		
		{def $areas = fetch('content', 'list', hash( 'parent_node_id', 102, 
										              'class_filter_type',  'include',
										              'class_filter_array', array( 'interest_area' ), 
													  'sort_by', array( 'priority', false() ) 
												  ))}
	
		<select name="disciplines" id="course_type">
				<option value="">{"Choose Area Of Interest"|i18n('dcdpro/boxes/course_search_facility')}</option>
				<option value="{"Market Trends & Investment"|i18n('intel/boxes/course_search_facility')}">{"Market Trends & Investment"|i18n('intel/boxes/course_search_facility')}</option>
				<option value="{"Colocation & Outsourcing"|i18n('intel/boxes/course_search_facility')}">{"Colocation & Outsourcing"|i18n('intel/boxes/course_search_facility')}</option>
				<option value="{"IT & Networks"|i18n('intel/boxes/course_search_facility')}">{"IT & Networks"|i18n('intel/boxes/course_search_facility')}</option>
		</select>
		
		{def $locations = fetch('content', 'list', hash( 'parent_node_id', 101, 
										              'class_filter_type',  'include',
										              'class_filter_array', array( 'location' ), 
													  'sort_by', array( 'priority', false() ) 
												  ))}
		
		<select name="course_filter_location" id="course_type" class="disable_location" >
		    <option value="">{"Choose Region"|i18n('dcdpro/boxes/course_search_facility')}</option>
					{foreach $locations as $location}
						<option value="{$location.data_map.identifier.content}" >{$location.name}</option>
					{/foreach}
		</select>
		<input type="hidden" value="61" name="SearchContentClassID[]" />
		
		<input type="submit" class="submit_button" value="{"Search"|i18n('dcdpro/boxes/course_search_facility')}" />
	
	</form>
</aside>

{undef $locations $areas $environment}