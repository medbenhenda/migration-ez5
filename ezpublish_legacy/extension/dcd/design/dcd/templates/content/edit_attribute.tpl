{default $view_parameters            = array()
         $attribute_categorys        = ezini( 'ClassAttributeSettings', 'CategoryList', 'content.ini' )
         $attribute_default_category = ezini( 'ClassAttributeSettings', 'DefaultCategory', 'content.ini' )}

{foreach $content_attributes_grouped_data_map as $attribute_group => $content_attributes_grouped}
	{foreach $content_attributes_grouped as $attribute_identifier => $attribute}
	{def $contentclass_attribute = $attribute.contentclass_attribute}
	
	  
			{if and( eq( $attribute.can_translate, 0 ), ne( $object.initial_language_code, $attribute.language_code ) )}
				<tr>
			        <td style="width: 90px; text-align: left;" class="block ezcca-edit-datatype-{$attribute.data_type_string} ezcca-edit-{$attribute_identifier}">
			  			<input type="hidden" name="ContentObjectAttribute_id[]" value="{$attribute.id}" />
			            <div class="form-element">
			                 <label>{first_set( $contentclass_attribute.nameList[$content_language], $contentclass_attribute.name )|wash}
						        {if $attribute.can_translate|not} <span class="nontranslatable">({'not translatable'|i18n( 'design/admin/content/edit_attribute' )})</span>{/if}:
						        {if $contentclass_attribute.description} <span class="classattribute-description">{first_set( $contentclass_attribute.descriptionList[$content_language], $contentclass_attribute.description)|wash}</span>{/if}
						    </label>
			            </div>
			        </td>
			        <td>
			              <div class="form-element">
			              		{attribute_view_gui attribute_base=$attribute_base attribute=$attribute view_parameters=$view_parameters}
			        			<input type="hidden" name="ContentObjectAttribute_id[]" value="{$attribute.id}" />
			              </div>
			        </td>
			      </tr>
			{else}
			
				{if $attribute.data_type_string|eq('ezuser')}
			              
			        {attribute_edit_gui attribute_base=$attribute_base attribute=$attribute view_parameters=$view_parameters}
			        <input type="hidden" name="ContentObjectAttribute_id[]" value="{$attribute.id}" />
			    {else}
			    	<tr>
				        <td style="width: 90px; text-align: left;" class="block ezcca-edit-datatype-{$attribute.data_type_string} ezcca-edit-{$attribute_identifier}">
				  			<input type="hidden" name="ContentObjectAttribute_id[]" value="{$attribute.id}" />
				            <div class="form-element">
						        <label{if $attribute.has_validation_error} class="message-error"{/if}>{first_set( $contentclass_attribute.nameList[$content_language], $contentclass_attribute.name )|wash}
						            {if $attribute.is_required} <span class="required">({'required'|i18n( 'design/admin/content/edit_attribute' )})</span>{/if}
						            {if $attribute.is_information_collector} <span class="collector">({'information collector'|i18n( 'design/admin/content/edit_attribute' )})</span>{/if}:
						            {if $contentclass_attribute.description} <span class="classattribute-description">{first_set( $contentclass_attribute.descriptionList[$content_language], $contentclass_attribute.description)|wash}</span>{/if}
						        </label>
				            </div>
				        </td>
				        <td>
				              <div class="form-element">
							        {attribute_edit_gui attribute_base=$attribute_base attribute=$attribute view_parameters=$view_parameters}
							        <input type="hidden" name="ContentObjectAttribute_id[]" value="{$attribute.id}" />			              
				              </div>
				        </td>
			        </tr>
		        {/if}
			{/if}
	    
	{undef $contentclass_attribute}
	{/foreach}
{/foreach}
{run-once}
{* if is_set( $content_attributes_grouped_data_map[1] ) *}
{ezscript_require(array( 'ezjsc::jquery' ) )}
<script type="text/javascript">
{literal}

jQuery(function( $ )
{
    $('fieldset.ezcca-collapsible legend a').click( function()
    {
		var container = $( this.parentNode.parentNode ), inner = container.find('div.ezcca-collapsible-fieldset-content');
		if ( container.hasClass('ezcca-collapsed') )
		{
			container.removeClass('ezcca-collapsed');
			inner.slideDown( 150 );
	    }
		else
		{
			inner.slideUp( 150, function(){
            	$( this.parentNode ).addClass('ezcca-collapsed');
            });
        }
    });
    // Collapse by default
    $('fieldset.ezcca-collapsible').addClass('ezcca-collapsed').find('div.ezcca-collapsible-fieldset-content').hide();
});

{/literal}
</script>
{* /if *}
{/run-once}
{/default}
