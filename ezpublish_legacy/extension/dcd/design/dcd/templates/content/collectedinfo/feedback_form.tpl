{def $collection = cond( $collection_id, fetch( content, collected_info_collection, hash( collection_id, $collection_id ) ),
                          fetch( content, collected_info_collection, hash( contentobject_id, $node.contentobject_id ) ) )}

{set-block scope=global variable=title}{'Form %formname'|i18n( 'design/ezwebin/collectedinfo/form', , hash( '%formname', $node.name|wash() ) )}{/set-block}
<div role="main" id="main">
	<div id="content">
		<article>
	
		<h2>{$object.name|wash}</h2>
	
			<div class="columns">
	
				{if $object.data_map.response.has_content}
					{attribute_view_gui attribute=$object.data_map.response}
				{else}
					<p>{'Thank you for your interest in DCProfessional Development.'|i18n( 'dcdpro/collectedinfo' )}</p>
					<p>{'Your prospectus will be emailed to you.'|i18n( 'dcdpro/collectedinfo' )}</p>
					<p>{'If you require additional information, please do not hesitate to contact us.'|i18n( 'dcdpro/collectedinfo' )}</p>
					<p>{'Your prospectus will be emailed to you.'|i18n( 'dcdpro/collectedinfo' )}</p>
					<p>{'Don’t forget to check back often, as we are constantly updating our calendar of classroom-based courses.'|i18n( 'dcdpro/collectedinfo' )}</p>
				{/if}	
			
				{if $error}
					{if $error_existing_data}
					<p>{'You have already submitted this form. The data you entered was:'|i18n('design/ezwebin/collectedinfo/form')}</p>
					{/if}
				{/if}
				
				{* foreach $collection.attributes as $attribute}
					<p><strong>{$attribute.contentclass_attribute_name|wash}:</strong> {attribute_result_gui view=info attribute=$attribute} </p>
				{/foreach *}
				<p />
				
			</div>
			
		</article>
	</div>
</div>