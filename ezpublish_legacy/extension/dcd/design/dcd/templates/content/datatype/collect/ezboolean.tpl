{default attribute_base='ContentObjectAttribute'}
{let data_int=cond( is_set( $#collection_attributes[$attribute.id]), $#collection_attributes[$attribute.id].data_int, $attribute.data_int )}

<ul>
	<li>
	<input type="checkbox" name="{$attribute_base}_data_boolean_{$attribute.id}" {$data_int|choose( '', 'checked="checked"' )} id="{$attribute.contentclass_attribute_identifier}"/>
	{$attribute.contentclass_attribute_name|wash}
	</li>
</ul>

{/let}
{/default}