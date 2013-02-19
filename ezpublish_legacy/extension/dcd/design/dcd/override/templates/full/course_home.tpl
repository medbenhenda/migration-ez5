			<h2>{$node.name}</h2>
			
			{*
				<article style="display: none" class="course_key">
				    <h4>Key</h4>
				    <ul>
				        <li><img width="22" height="21" src={"design/course_key_dcpro.png"|ezimage}> DCPro Course</li>
				        <li><img width="22" height="21" src={"design/course_key_3rdparty.png"|ezimage}> DCPro Hosted 3rd Party Course</li>
				        <li><img width="22" height="21" src={"design/course_key_exam.png"|ezimage}> Contains Examination</li>
				        <li><img width="22" height="21" src={"design/course_key_qualification.png"|ezimage}> Qualification attributed to this course</li>
				        <li><img width="22" height="21" src={"design/course_key_pdhs.png"|ezimage}> PDH Value of this course</li>
				        <li><img width="22" height="21" src={"design/course_key_further.png"|ezimage}> Further Level II/III courses in development</li>
				    </ul>
				</article>
			*}
            <article class="course_list">
                <h2 style="text-decoration:underline;">
                {'Classroom Courses'|i18n('dcdpro/course_home')}</h2>
                
                {def $classroom_courses = fetch('content', 'list', hash('parent_node_id', $node.node_id, 
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
                <h2 style="text-decoration:underline;">{'Online Coures'|i18n('dcdpro/course_home')}</h2>
                
                {def $online_courses = fetch('content', 'list', hash('parent_node_id', $node.node_id, 
												'sort_by', array( 'priority', false() ),
									            'class_filter_type',  'include',
									            'class_filter_array', array( 'course' ),
									            'attribute_filter', array( array( '378', '=', 1 ) )
													) )}
                													
                        <table style="width:100%;">
                                <tbody>
		                    	{foreach $online_courses as $course} 
				                	 <tr colspan="2" class="course_listing">
				                	    <td class="course_code">{$course.data_map.course_code.content}</td>
				                        <td class="course_links"><a href={$course.url_alias|ezurl} title="{$course.name|wash}">{$course.name}</a></td>
				                    </tr>
			                    {/foreach}   
                            </tbody></table>
            </article>
            
            {def $packages = fetch('content', 'list', hash('parent_node_id', $node.node_id, 
								'sort_by', array( 'priority', false() ),
					            'class_filter_type',  'include',
					            'class_filter_array', array( 'package' )
									) )}
            
            
            <article class="course_list">
                <h2 style="text-decoration:underline;">{"Certificate Programmes / Passports Courses"|i18n('dcdpro/course')}</h2>
                    <table style="width:100%;">
                        <tbody>
            				{foreach $packages as $package}
		                    	<tr colspan="2" class="course_listing">
			                	    <td class="course_code">{$package.data_map.code.content}</td>
			                        <td class="course_links"><a href={$package.url_alias|ezurl} title="{$package.name|wash}">{$package.name}</a></td>
			                    </tr>
            				{/foreach}	
                		</tbody>
                	</table>
            </article>

{set scope=global persistent_variable=hash('extra_body_class', 'courses')}