<aside id="factsheet">
	<h3>{'Course Factsheet'|i18n('dcdpro/course')} </h3>

		{if $node.data_map.target_audience.has_content}
			<div id="who_should_attend">
				<h4>{'Who should attend'|i18n('dcdpro/course')}:</h4>
				{attribute_view_gui attribute=$node.data_map.target_audience}
			</div>
		{/if}
	
		{if $node.data_map.restrictions.has_content}
			<div id="including_but_not_restricted_to">
				<h4>{'Including but not restricted to'|i18n('dcdpro/course')}:</h4>
				{attribute_view_gui attribute=$node.data_map.restrictions}
			</div>
		{/if}
	
		{if $node.data_map.min_requirements.has_content}
			<div id="minimum_requirements">
				<h4>{'Recommended minimum requirements'|i18n('dcdpro/course')}:</h4>
				{attribute_view_gui attribute=$node.data_map.min_requirements}
			</div>
		{/if}
		
		{if $node.data_map.pre_requisites.has_content}
			<div id="pre_requisites">
				<h4>{'Pre-requisites for enrolment'|i18n('dcdpro/course')}:</h4>
				{attribute_view_gui attribute=$node.data_map.pre_requisites}
			</div>
		{/if}
		
		{if $node.data_map.certification.has_content}
			<div id="certification">
				<h4>{'Certification Accreditation'|i18n('dcdpro/course')}</h4>
				{if $node.data_map.certification.has_content}
					{attribute_view_gui attribute=$node.data_map.certification}
				{/if}
			</div>
		{/if}
		
		{if $node.data_map.accreditations.content.relation_list|count|gt(0)}
			<div id="accreditations">
				<br />
				{foreach $node.data_map.accreditations.content.relation_list as $acc}
					{def $accreditation=fetch( 'content', 'node', hash( 'node_id', $acc.node_id ) )}
						<a href="{$accreditation.data_map.url.content}" title="{$accreditation.name|wash}" target="_blank">
							{attribute_view_gui attribute=$accreditation.data_map.image image_class='accreditation'}
						</a>
					{undef $accreditation}
				{/foreach}
			</div>
		{/if}
		
</aside>