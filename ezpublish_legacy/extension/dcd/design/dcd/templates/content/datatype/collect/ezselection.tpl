{default attribute_base=ContentObjectAttribute}
{let selected_id_array=cond( is_set( $#collection_attributes[$attribute.id] ), $#collection_attributes[$attribute.id].content, $attribute.content )}

	{if $attribute.class_content.is_multiselect|eq(1)}
	
		<input type="hidden" name="{$attribute_base}_ezselect_selected_array_{$attribute.id}" value="" />
	
			<ul>
				{if is_set($options)}
					{foreach $options as $id => $option}
						<li>
							<input type="checkbox" id="{$id}" value="{$option.id}" name="{$attribute_base}_ezselect_selected_array_{$attribute.id}[]" >
							{$option|wash( xhtml )}
						</li>
					{/foreach}
				{else}
					{foreach $attribute.class_content.options as $option}
						<li>
							<input type="checkbox" id="{$option.id}" value="{$option.id}" name="{$attribute_base}_ezselect_selected_array_{$attribute.id}[]" > 
							{$option.name|wash( xhtml )}
						</li>
					{/foreach}
				{/if}
			</ul>
		
	{else}
	
		{* Always set the .._selected_array_.. variable, this circumvents the problem when nothing is selected. *}
		<input type="hidden" name="{$attribute_base}_ezselect_selected_array_{$attribute.id}" value="" />

		<select name="{$attribute_base}_ezselect_selected_array_{$attribute.id}[]" {if $attribute.class_content.is_multiselect}multiple="multiple"{/if}>
		
			{section var=Options loop=$attribute.class_content.options}
				<option value="{$Options.item.id}" {if $selected_id_array|contains( $Options.item.id )}selected="selected"{/if}>{$Options.item.name|wash( xhtml )}</option>
			{/section}

		</select>
	{/if}
	
	
{/let}
{/default}
