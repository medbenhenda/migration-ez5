			<h2>{'Courses Near Your Locations'|i18n('dcdpro/calendar')}</h2>
							<p>{'Sorry, there are no events scheduled in your country at this time.'|i18n('dcdpro/calendar')}</p>
			<h2>{'Courses in other Locations'|i18n('dcdpro/calendar')}</h2>
				<table class="events_listing">
					<thead>
						<tr>
							<th>{'Course'|i18n('dcdpro/calendar')}</th>
							<th>{'Location'|i18n('dcdpro/calendar')}</th>
							<th>{'Date'|i18n('dcdpro/calendar')}</th>
							<th>{'Duration'|i18n('dcdpro/calendar')}</th>
							<th style="width: 165px">{'Book'|i18n('dcdpro/calendar')}</th>
						</tr>
					</thead>

					{def $events = fetch('content', 'list', hash('parent_node_id', $node.node_id, 
																'sort_by', array( 'priority', false() ),
													            'class_filter_type',  'include',
													            'class_filter_array', array( 'event' )  )) )}

					<tbody>
					
					{foreach $events as $event}
						<tr>
							<td><a href={$event.url_alias|ezurl}><strong>{$event.data_map.title.content}</strong></a></td>
							<td>{* <strong>{$event.data_map.venue.content}</strong>,<br/> *} {$event.data_map.city.content}</td>
							<td>{attribute_view_gui attribute=$event.data_map.from_time}</td>
							<td>{$event.data_map.duration.content} Days</td>
							<td style="width: 150px">
									<a href={$event.data_map.booking_url.content} style="text-align: left;color: #ff0000;">{'Book now'|i18n('dcdpro/calendar')}</a>
							</td>
						</tr>
					{/foreach}
					</tbody>
				</table>
