{default attribute_base=ContentObjectAttribute}
{let countries=fetch( 'content', 'country_list' )
     class_content=$attribute.class_content}

{def $country = $attribute.content.value}

{if $class_content.multiple_choice}
	<div>
	{"Selected countries"|i18n('dcd_admin/content/edit/ezcountry')}
			<div id="selected_countries" style='color:red;font-weight:bold;'>
			
			</div>
	</div>
	<script type="text/javascript">
		{literal}
	
			function highlight_selected_countries(){
				var str = "";
				$('#ezcoa-{/literal}{if ne( $attribute_base, 'ContentObjectAttribute' )}{$attribute_base}-{/if}{$attribute.contentclassattribute_id}_{$attribute.contentclass_attribute_identifier}{literal} option:selected').each(function(){
							str += $(this).text() + ", ";
				});
				
				$('#selected_countries').html( str);
			}
	
			$().ready(function() {
				
				$('#ezcoa-{/literal}{if ne( $attribute_base, 'ContentObjectAttribute' )}{$attribute_base}-{/if}{$attribute.contentclassattribute_id}_{$attribute.contentclass_attribute_identifier}{literal}').bind('change', highlight_selected_countries);
				highlight_selected_countries();
				
			});
			
		{/literal}
	</script>
	
	<select id="ezcoa-{if ne( $attribute_base, 'ContentObjectAttribute' )}{$attribute_base}-{/if}{$attribute.contentclassattribute_id}_{$attribute.contentclass_attribute_identifier}" class="ezcc-{$attribute.object.content_class.identifier} ezcca-{$attribute.object.content_class.identifier}_{$attribute.contentclass_attribute_identifier}" name="{$attribute_base}_country_{$attribute.id}[]" {if $class_content.multiple_choice}multiple="multiple" style="height:300px;"{/if} >
	     {if $class_content.multiple_choice|not}
	        <option  value="">{'Not specified'|i18n( 'design/standard/content/datatype' )}</option>
	     {/if}
		{def $alpha_2 = ''}
		{foreach $countries as $key => $current_country}
		     {set $alpha_2 = $current_country.Alpha2}
		     {if $country|ne( '' )}
		        {if $country|is_array|not}
		            {* Backwards compatability *}
		            <option {if $country|eq( $current_country.Name )}selected="selected"{/if} value="{$alpha_2}">{$current_country.Name}</option>
		        {else}
		            <option {if is_set( $country.$alpha_2 )}selected="selected"{/if} value="{$alpha_2}">{$current_country.Name}</option>
		        {/if}
		     {else}
		            <option {if is_set( $class_content.default_countries.$alpha_2 )}selected="selected"{/if} value="{$alpha_2}">{$current_country.Name}</option>
		     {/if}
		{/foreach}
	</select>
{else}

	{def $country = $attribute.content.value}
	<select id="ezcoa-{if ne( $attribute_base, 'ContentObjectAttribute' )}{$attribute_base}-{/if}{$attribute.contentclassattribute_id}_{$attribute.contentclass_attribute_identifier}" class="ezcc-{$attribute.object.content_class.identifier} ezcca-{$attribute.object.content_class.identifier}_{$attribute.contentclass_attribute_identifier}" name="{$attribute_base}_country_{$attribute.id}[]" {if $class_content.multiple_choice}multiple="multiple"{/if}>
	     {if $class_content.multiple_choice|not}
	        <option  value="">{'Not specified'|i18n( 'design/standard/content/datatype' )}</option>
	     {/if}
	{def $alpha_2 = ''}
	{foreach $countries as $key => $current_country}
	     {set $alpha_2 = $current_country.Alpha2}
	     {if $country|ne( '' )}
	        {if $country|is_array|not}
	            {* Backwards compatability *}
	            <option {if $country|eq( $current_country.Name )}selected="selected"{/if} value="{$alpha_2}">{$current_country.Name}</option>
	        {else}
	            <option {if is_set( $country.$alpha_2 )}selected="selected"{/if} value="{$alpha_2}">{$current_country.Name}</option>
	        {/if}
	     {else}
	            <option {if is_set( $class_content.default_countries.$alpha_2 )}selected="selected"{/if} value="{$alpha_2}">{$current_country.Name}</option>
	     {/if}
	{/foreach}
	</select>

{/if}
{/let}
{/default}