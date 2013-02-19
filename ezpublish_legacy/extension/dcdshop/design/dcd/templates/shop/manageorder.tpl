{*  
	Export this line from the template or use the ezscript_load template operator
 *}
<script type="text/javascript" src={"javascript/jquery.validate.js"|ezdesign}></script>
{*

*}

<div id="main" role="main">
	<div id="content">
		<article class="basket">
		<div class="shop-orderview">
		
			<div class="attribute-header">
			  <h1 class="long">{'Manage Courses'|i18n( 'dcd/ordermanage' )}</h1>
			</div>
		
			<div id="warning_message">
			
			</div>
			
			<table class="list" style="width:600px" cellspacing="0" cellpadding="0" border="0">
			<tr>
			    <td>
			    	<strong>{'ID'|i18n( 'dcd/ordermanage' )}</strong>
			    </td>
			    <td>
			    	<strong>{'Course Information'|i18n( 'dcd/ordermanage' )}</strong>
			    </td>
			    <td>
			    	<strong>{'Student Information'|i18n( 'dcd/ordermanage' )}</strong>
			    </td>
			</tr>
			{if $order.product_items|count()}
			{foreach $order.product_items as $line_id => $product_item sequence array( 'bglight', 'bgdark' ) as $style}

		    	{for 1 to $product_item.item_count as $student_index} 
		    	
					<tr class="{$style}">
					    <td>
							{$student_index} / {$product_item.item_count}
					    </td>
					    <td>
					    	{if $product_item.item_object.contentobject.class_identifier|eq('event')}

					   			{def $course = fetch('content', 'node', hash('node_id', $product_item.item_object.contentobject.data_map.course.content.relation_list.0.node_id ))}
					   			<a href={$course.url_alias|ezurl} title="{$course.name|wash}">{$course.name|wash}</a><br />
					   			<strong>{"Location"|i18n('dcd/manageorder')}:</strong> {$product_item.item_object.contentobject.data_map.city.content}<br />
					   			<strong>{"Country"|i18n('dcd/manageorder')}:</strong> {attribute_view_gui attribute=$product_item.item_object.contentobject.data_map.country}<br />
					   			<strong>{"Date"|i18n('dcd/manageorder')}:</strong> {$product_item.item_object.contentobject.data_map.from_time.content.timestamp|datetime('custom', '%d/%m/%y')}<br />
					   			<strong>{"Duration"|i18n('dcd/manageorder')}:</strong> {$product_item.item_object.contentobject.data_map.duration.content|div(24)|ceil} {'Days'|i18n('dcdpro/course')}

							{elseif $product_item.item_object.contentobject.class_identifier|eq('package')}

					   			{def $course = fetch('content', 'node', hash('node_id', $product_item.item_object.contentobject.data_map.course.content.relation_list.0.node_id ))}
					   			<a href={$course.url_alias|ezurl} title="{$course.name|wash}">{$course.name|wash}</a><br />
					   			<strong>{"Location"|i18n('dcd/manageorder')}:</strong> {$product_item.item_object.contentobject.data_map.city.content}<br />
					   			<strong>{"Country"|i18n('dcd/manageorder')}:</strong> {attribute_view_gui attribute=$product_item.item_object.contentobject.data_map.country}<br />
					   			<strong>{"Date"|i18n('dcd/manageorder')}:</strong> {$product_item.item_object.contentobject.data_map.from_time.content.timestamp|datetime('custom', '%d/%m/%y')}<br />
					   			<strong>{"Duration"|i18n('dcd/manageorder')}:</strong> {$product_item.item_object.contentobject.data_map.duration.content|div(24)|ceil} {'Days'|i18n('dcdpro/course')}

							{else}

								{def $course = fetch('content', 'node', hash('node_id', $product_item.item_object.contentobject.main_node_id))}
					   			<a href={$course.url_alias|ezurl} title="{$course.name|wash}">{$product_item.item_object.contentobject.data_map.title.content}</a><br />
				    			<br />
				    			{"This is an online course and has no starting date"|i18n('dcd/manageorder')}

							{/if}
					    </td>
					    
					    <td class="enrol_information_block buttonblock">
					    	{if sum( count($enrolments[$product_item.item_object.contentobject_id]), 1 )|gt( $student_index )}
					    	
					    			<table style="width:300px">
					    				<tr>
					    					<td>
					    						<strong>{"Name"|i18n('dcdshop/manageorder')}</strong>
							    			</td>
							    			<td>
					    						{$enrolments[$product_item.item_object.contentobject_id][sub($student_index, 1)]['firstname']} {$enrolments[$product_item.item_object.contentobject_id][sub($student_index, 1)]['lastname']}
							    			</td>
							    		</tr>
					    				<tr>
					    					<td>
					    						<strong>{"Email"|i18n('dcdshop/manageorder')}</strong>
							    			</td>
							    			<td>
					    						{$enrolments[$product_item.item_object.contentobject_id][sub($student_index, 1)]['email']}
							    			</td>
							    		</tr>
					    				<tr>
					    					<td>
					    						<strong>{"Address"|i18n('dcdshop/manageorder')}</strong>
							    			</td>
							    			<td>
					    						{$enrolments[$product_item.item_object.contentobject_id][sub($student_index, 1)]['Address1']}<br />
					    						{$enrolments[$product_item.item_object.contentobject_id][sub($student_index, 1)]['city']}<br />
					    						{$enrolments[$product_item.item_object.contentobject_id][sub($student_index, 1)]['Zip']}<br />
					    						{$enrolments[$product_item.item_object.contentobject_id][sub($student_index, 1)]['country']}<br />
					    						{$enrolments[$product_item.item_object.contentobject_id][sub($student_index, 1)]['mobile']}<br />
							    			</td>
							    		</tr>
							    	</table>
					    	{else}
					    	<div>
								<form action={"dcdshop/enrolstudent"|ezurl} name="manage_student_info_{$line_id}_{$student_index}" class="enrol_student_form enrol_student_{$line_id}_{$student_index}" id="enrol_form_{$line_id}_{$student_index}" method="post">
									 <h2>{"Enrol Student"|i18n('dcdpro/book')}</h2>
									 
						  			<div id="warning_message_{$line_id}_{$student_index}" class="warning_message">
					    			
									</div>
					    			 
									 <div class="error" style="display:none;"></div>
									<input type="hidden" name="product_id" value="{$product_item.item_object.contentobject_id}"  />
									<input type="hidden" name="order_id" value="{$order.id}"  />
						
								    <div class="form-element">
                                        <label for="regemail" style="width:90px;">
                                            {"Student Email"|i18n('dcdpro/book')}
                                            <span class="required">*</span>
                                        </label>

                                        <input type="email" id="enrolmail" name="enrolmail" class="text email required" value="{$user.email}" style="width:185px;"/>
                                        <i class="icon"></i>
                                        <small class="regFormError" id="regEmailNotif"></small>
                                    </div>
									
									<div class="form-element">
                                    	<input type="submit" name="enrol_student" value="{'Enrol Existing student'|i18n('dcd/manageorder') }" class="button enrol_student_button" id="enrol_student_{$line_id}_{$student_index}"/>
                                    	<input type="button" name="register_student" value="{'Register student'|i18n('dcd/manageorder') }" class="button register_button" id="register_{$line_id}_{$student_index}"/>
                                    </div>
									
								</form>
							</div>
									
							{/if}
					    </td>	
					</tr>
				{/for}
				{undef $course}
			
			{/foreach}

			{/if}
			</table>

		</div>
		
		</article>
	</div>
</div>

	<div class="register_form user_form" style="display:none;" id="registration_html">
			{include uri="design:user/moodle_register.tpl"}	
	</div>

{include uri="design:user/usermenu.tpl" status='manageorder'}