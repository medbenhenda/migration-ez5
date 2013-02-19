			<h2>{$node.name}</h2>

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


                
                {def $classroom_courses = fetch('content', 'list', hash('parent_node_id', 65, 
																'sort_by', array( 'priority', false() ),
													            'class_filter_type',  'include',
													            'class_filter_array', array( 'course' ),
													            'attribute_filter', array( array( '378', '=', 0 ) )
                													) )}
                                
                	{foreach $classroom_courses as $course} 
	                    {node_view_gui content_node=$course view="preview"}
                    {/foreach}

{set scope=global persistent_variable=hash('extra_body_class', 'courses')}