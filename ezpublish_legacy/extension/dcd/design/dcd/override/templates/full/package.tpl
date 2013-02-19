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
   
  <div class="no-columns">                   
  		{attribute_view_gui attribute=$node.data_map.description}
  		
  		{*
  		   Option for buying full packages...
  		*}
  		<form method="post" action={"content/action"|ezurl} >
	        <div class="content-action">
	            <input type="submit" class="button" style="float:left;" name="ActionAddToBasket" value="{"Add Package to basket"|i18n("design/ezwebin/full/product")}" />
	            <input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
	            <input type="hidden" name="ContentObjectID" value="{$node.contentobject_id}" />
	            <input type="hidden" name="ViewMode" value="full" />
	        </div>
		</form>
		
  		<br style="clear:both;"/>
  </div>
                        
  {foreach $node.data_map.courses.content.relation_list as $item}
      	{def $course = fetch('content', 'node', hash('node_id' , $item.node_id ))}
	      	{node_view_gui content_node=$course view="preview"}
      	{undef $course}
  {/foreach}

{set scope=global persistent_variable=hash('extra_body_class', 'courses')}
