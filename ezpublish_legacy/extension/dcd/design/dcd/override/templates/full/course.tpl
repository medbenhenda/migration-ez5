

<div id="main" role="main">
	<div id="content">
		<article>
			<h2>{$node.data_map.title.content|wash()}</h2>
			
			<ul id="course_meta">
				<li><span>{'Framework'|i18n('dcdpro/course')}:</span> Level {$node.data_map.level.content}</li>
				<li><span>{'PDHs'|i18n('dcdpro/course')}:</span> {$node.data_map.pdhs.content}</li>
				<li><span>{'Duration'|i18n('dcdpro/course')}:</span> {$node.data_map.duration.content|wash()}</li>
				
				{if $node.data_map.type.data_text|eq(1)} 
					<li class="add_basket_button online_course">
						<span>{'Booking'|i18n('dcdpro/course')}:</span>
						
						<form method="post" action={"content/action"|ezurl}>
					        <div class="content-action">
					            <input type="submit" class="button" style="float:left;" name="ActionAddToBasket" value="{"Add to basket"|i18n("design/ezwebin/full/product")}" title="{"Courses must be located in same area. Adding this product will empty your basket before hand."|i18n("dcd/course")}"/>
					            <input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
					            <input type="hidden" name="ContentObjectID" value="{$node.contentobject_id}" />
					            <input type="hidden" name="ViewMode" value="full" />
					        </div>
						</form>
						
					</li>
				{else}
					{def $events = fetch( 'content', 'reverse_related_objects', hash('object_id', $node.contentobject_id,
			    				  													 'attribute_identifier', 435) )}
					<li>
							<div id="no_locations" style="display:none;">
								<span>{'Locations'|i18n('dcdpro/course')}:</span>
								{'Sorry, there are no events scheduled at this time.'|i18n('dcdpro/course')}
							</div>

								<div id="current_locations_table">
								<span>{'Locations'|i18n('dcdpro/course')}:</span>
									<div style="clear: both;"></div>
									<table class="events_listing" id="event_listing" style="width: 100%;">
											<tr>
												<td colspan="2"><strong>{"Location"|i18n('dcdpro/course')}</strong></td>
												<td><strong>{"Date"|i18n('dcdpro/course')}</strong></td>
												<td><strong>{"Duration"|i18n('dcdpro/course')}</strong></td>
												<td><strong>{"Basket"|i18n('dcdpro/course')}</strong></td>
												<td> </td>
											</tr>
										{def $count_events = 0}
										{foreach $events as $event}
											{if $event.data_map.from_time.content.timestamp|gt( currentdate() )}
												{def $entity = get_course_entity( $event.data_map.country.content.value )}
												{set $count_events = $count_events|sum(1)}
												{def $country_code = get_country_code( $event.data_map.country_name.content )}
												<tr class="entity_line entity_line_{first_set( $entity.node_id, '' )}" id="session_{$event.data_map.from_time.content.timestamp}_{first_set( $event.node_id, '' )}">
													<td>
													{if count($country_code)|gt(0)}
														<img src={concat("flags/", $country_code.0.id , ".png")|ezimage} /></td>
													{else}
														{set $country_code = get_country_code( $event.data_map.country.data_text )}
														<img src={concat("flags/", $country_code.0.id|downcase() , ".png")|ezimage} /></td>
													{/if}
													<td>{$event.data_map.city.content}</td>
													<td>{$event.data_map.from_time.content.timestamp|datetime('custom', '%d/%m/%y')}</td>
													<td>{$event.data_map.duration.content|div(24)|ceil} {'Days'|i18n('dcdpro/course')}</td>
													<td class="add_basket_button">
														{def $fully_booked = fully_booked( $event.data_map.id.content )}
															<form method="post" action={"content/action"|ezurl}>
																{if $fully_booked['fully_booked']}
																	<div class="content-action">
																		<input style="background-color: red; float:left;" type="submit" disabled="disabled" class="button entity_{first_set( $entity.node_id, '' )}" value="{"Fully Booked"|i18n("dcdpro/course")}" />
																	</div>
																{else}
																	<div class="content-action localised_course_booking_button">
																		<input type="submit" class="button entity_{first_set( $entity.node_id, '' )}" style="float:left;" name="ActionAddToBasket" value="{"Add to basket"|i18n("design/ezwebin/full/product")}" />
																		<input type="hidden" name="ContentNodeID" value="{$event.main_node_id}" />
																		<input type="hidden" name="ContentObjectID" value="{$event.id}" />
																		<input type="hidden" name="ViewMode" value="full" />
																	</div>
																{/if}
															</form>
														{undef $fully_booked}
													</td>
													<td>
														{$entity.name}
													</td> 
												</tr>
												{undef $entity_id $country_code $entity}
											{/if}
										{/foreach}
									</table>
								</div>
								<div id="other_locations_table" style="display:none">
								<div style="clear: both;"></div>
									<span>{'Other Locations'|i18n('dcdpro/course')}:</span>
									
									<table class="events_listing" id="event_listing_other" style="width: 100%;">
											<tr>
												<td colspan="2"><strong>{"Location"|i18n('dcdpro/course')}</strong></td>
												<td><strong>{"Date"|i18n('dcdpro/course')}</strong></td>
												<td><strong>{"Duration"|i18n('dcdpro/course')}</strong></td>
												<td><strong>{"Basket"|i18n('dcdpro/course')}</strong></td>
												<td> </td>
											</tr>
										{set $count_events = 0}
										{foreach $events as $event}
											{if $event.data_map.from_time.content.timestamp|gt( currentdate() )}
												{def $entity = get_course_entity( $event.data_map.country.content.value )}
												{set $count_events = $count_events|sum(1)}
												
												{def $country_code = get_country_code( $event.data_map.country_name.content )}
												<tr class="entity_line entity_line_{first_set( $entity.node_id, '' )}" id="session_other_{$event.data_map.from_time.content.timestamp}_{first_set( $event.node_id, '' )}">
													<td>
													{if count($country_code)|gt(0)}
														<img src={concat("flags/", $country_code.0.id , ".png")|ezimage} /></td>
													{else}
													
														{set $country_code = get_country_code( $event.data_map.country.data_text )}
														<img src={concat("flags/", $country_code.0.id|downcase() , ".png")|ezimage} /></td>
														
													{/if}
													<td>{$event.data_map.city.content}</td>
													<td>{$event.data_map.from_time.content.timestamp|datetime('custom', '%d/%m/%y')}</td>
													<td>{$event.data_map.duration.content|div(24)|ceil} {'Days'|i18n('dcdpro/course')}</td>
													<td class="add_basket_button">
														{def $fully_booked = fully_booked( $event.data_map.id.content )}
															<form method="post" action={"dcdshop/basket"|ezurl}>
																{if $fully_booked['fully_booked']}
																	<div class="content-action">
																		<input style="background-color: red; float:left;" type="submit" disabled="disabled" class="button entity_{first_set( $entity.node_id, '' )}" value="{"Fully Booked"|i18n("dcdpro/course")}" />
																	</div>
																{else}
																	<div class="content-action localised_course_booking_button">
															            <input type="submit" class="button entity_{first_set( $entity.node_id, '' )} AddAndClearButton" style="float:left;" name="ActionClearAndAddToBasket" value="{"Clear & Add to basket"|i18n("dcd/course")}" title="{"Courses must be located in same area. Adding this product will empty your basket before hand."|i18n("dcd/course")}"/>
															            <input type="hidden" name="ContentNodeID" value="{$event.main_node_id}" />
															            <input type="hidden" name="ContentObjectID" value="{$event.id}" />
															            <input type="hidden" name="ViewMode" value="full" />
															        </div>
																{/if}
															</form>
														{undef $fully_booked}
													</td>
													<td>
														{$entity.name}
													</td> 
												</tr>
												{undef $entity_id $country_code $entity}
											{/if}
										{/foreach}
									</table>
								</div>
						</li>
					{/if}
				<li><span>{'Languages'|i18n('dcdpro/course')}:</span> {$node.data_map.languages.content|wash()}</li>
				<li><span>{'Fees'|i18n('dcdpro/course')}:</span> {$node.data_map.fees.content|wash()}</li>
			</ul>
			
	        {if $node.data_map.body.content.is_empty|not}
	            <div class="attribute-long">
	                {attribute_view_gui attribute=$node.data_map.body}

	            </div>
	        {/if}	
	        
		</article>
		{if $node.data_map.course_outline.has_content}
			<div id="course_outline">
					<h3>{'Course Outline and Main Topics Covered'|i18n('dcdpro/course')}</h3>
	
					 {attribute_view_gui attribute=$node.data_map.course_outline}
			</div>
		{/if}
        <br />
	</div>
</div>

{include uri="design:course/factsheet.tpl"}

{set scope=global persistent_variable=hash('no_left_column', 'true', 'extra_body_class', 'schedule' )}
