	<h2>{$node.name}</h2>

    <article class="course_list">
        <h2 style="text-decoration:underline;">
        Classroom Courses</h2>
        
        
        {def $classroom_courses = fetch('content', 'list', hash('parent_node_id', 65, 
														'sort_by', array( 'priority', false() ),
											            'class_filter_type',  'include',
											            'class_filter_array', array( 'course' ),
											            'attribute_filter', array( array( '378', '=', 0 ) )
        													) )}
                        
        <table style="width:100%;">
        	 <tbody>
            	 {foreach $classroom_courses as $course} 
                	 <tr colspan="2" class="course_listing">
                	    <td class="course_code">{$course.data_map.course_code.content}</td>
                        <td class="course_links"><a href={$course.url_alias|ezurl} title="{$course.name|wash}">{$course.name}</a></td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </article>
    <article class="course_list">
        <h2 style="text-decoration:underline;">Online Coures</h2>
        
        {def $classroom_courses = fetch('content', 'list', hash('parent_node_id', 65, 
										'sort_by', array( 'priority', false() ),
							            'class_filter_type',  'include',
							            'class_filter_array', array( 'course' ),
							            'attribute_filter', array( array( '378', '=', 1 ) )
											) )}
        													
                <table style="width:100%;">
                        <tbody>
                    	{foreach $classroom_courses as $course} 
		                	 <tr colspan="2" class="course_listing">
		                	    <td class="course_code">{$course.data_map.course_code.content}</td>
		                        <td class="course_links"><a href={$course.url_alias|ezurl} title="{$course.name|wash}">{$course.name}</a></td>
		                    </tr>
	                    {/foreach}   
                    </tbody></table>
    </article>
    <article class="course_list">
        <h2 style="text-decoration:underline;">{"Certificate Programmes / Passports Courses"|i18n('dcdpro/course')}</h2>
            <table style="width:100%;">
                <tbody><tr colspan="2" class="course_listing">
                <td class="course_code">E000</td>
                <td class="course_links"><a href="/courses/package/2/foundations-in-mission-critical-infrastructure">Foundations in Mission Critical Infrastructure</a></td>
           		 </tr>
                    <tr colspan="2" class="course_listing">
                        <td class="course_code">DCEP</td>
                        <td class="course_links"><a href="/courses/package/3/dcep-datacenter-certified-energy-practitioner">[DCEP] Datacenter Certified Energy Practitioner</a></td>
                    </tr>
                    <tr colspan="2" class="course_listing">
                        <td class="course_code">DCS</td>
                        <td class="course_links"><a href="/courses/package/7/dcs-passport---design">DCS Passport - Design</a></td>
                    </tr>
               	     <tr colspan="2" class="course_listing">
                        <td class="course_code"></td>
                        <td class="course_links"><a href="/courses/package/15/dcs-passport---operations">DCS Passport - Operations</a></td>
           			</tr>	
        </tbody></table>
    </article>

{set scope=global persistent_variable=hash('extra_body_class', 'courses')}