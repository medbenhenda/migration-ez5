<aside id="course_search_critera">

	<h3>{"Course Search Facility"|i18n('dcdpro/boxes/course_search_facility')}</h3>

	{def $environments = fetch('content', 'list', hash( 'parent_node_id', 99, 
									              'class_filter_type',  'include',
									              'class_filter_array', array( 'environment' ), 
												  'sort_by', array( 'priority', false() ) 
										  ))}

	<form action={"dcpro/search"|ezurl} method="get" accept-charset="utf-8">
		<select name="course_type" id="course_type" class="filter_type">
			<option value="course">{"Choose Teaching Environment"|i18n('dcdpro/boxes/course_search_facility')}</option>
			<option value="online">{"Online Education"|i18n('dcdpro/boxes/course_search_facility')} </option>
			<option value="classroom">{"Classroom Education"|i18n('dcdpro/boxes/course_search_facility')} </option>
		</select>
		
		
		{def $areas = fetch('content', 'list', hash( 'parent_node_id', 102, 
										              'class_filter_type',  'include',
										              'class_filter_array', array( 'interest_area' ), 
													  'sort_by', array( 'priority', false() ) 
												  ))}
	
		<select name="disciplines" id="course_type">
				<option value="">{"Choose Area Of Interest"|i18n('dcdpro/boxes/course_search_facility')}</option>
				<option value="{"Critical Power Systems"|i18n('dcdpro/boxes/course_search_facility')}">{"Critical Power Systems"|i18n('dcdpro/boxes/course_search_facility')}</option>
				<option value="{"Energy Efficiency"|i18n('dcdpro/boxes/course_search_facility')}">{"Energy Efficiency"|i18n('dcdpro/boxes/course_search_facility')}</option>
				<option value="{"Foundational / Generalist"|i18n('dcdpro/boxes/course_search_facility')}">{"Foundational / Generalist"|i18n('dcdpro/boxes/course_search_facility')}</option>
				<option value="{"HVAC and Cooling"|i18n('dcdpro/boxes/course_search_facility')}">{"HVAC and Cooling"|i18n('dcdpro/boxes/course_search_facility')}</option>
				<option value="{"Operations Maintenance"|i18n('dcdpro/boxes/course_search_facility')}">{"Operations Maintenance"|i18n('dcdpro/boxes/course_search_facility')}</option>
		</select>
		
		{def $locations = fetch('content', 'list', hash( 'parent_node_id', 101, 
										              'class_filter_type',  'include',
										              'class_filter_array', array( 'location' ), 
													  'sort_by', array( 'priority', false() ) 
												  ))}
		
		<select name="course_filter_location" id="course_type" class="disable_location" >
		    <option value="">{"Choose Location"|i18n('dcdpro/boxes/course_search_facility')}</option>
					{foreach $locations as $location}
						<option value="{$location.data_map.identifier.content}" >{$location.name}</option>
					{/foreach}
		</select>
		<input type="hidden" value="45" name="SearchContentClassID[]" />
		
		<input type="submit" class="submit_button" value="{"Search Courses"|i18n('dcdpro/boxes/course_search_facility')}">
	
	</form>
</aside>

{undef $locations $areas $environment}