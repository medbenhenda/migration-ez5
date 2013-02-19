{default attribute_base=ContentObjectAttribute}

{if ne( $attribute_base, 'ContentObjectAttribute' )}
    {def $id_base = concat( 'ezcoa-', $attribute_base, '-', $attribute.contentclassattribute_id, '_', $attribute.contentclass_attribute_identifier )}
{else}
    {def $id_base = concat( 'ezcoa-', $attribute.contentclassattribute_id, '_', $attribute.contentclass_attribute_identifier )}
{/if}

  	<tr>
        <td style="width: 90px; text-align: left;">
  			<input type="hidden" name="ContentObjectAttribute_id[]" value="{$attribute.id}" />
            <div class="form-element">
                 <label for="{$id_base}_login">{'Username'|i18n( 'design/standard/content/datatype' )}:</label>
            </div>
        </td>
        <td>
              <div class="form-element">
              		<input id="{$id_base}_login" class="text ezcc-{$attribute.object.content_class.identifier} ezcca-{$attribute.object.content_class.identifier}_{$attribute.contentclass_attribute_identifier}" type="text" name="{$attribute_base}_data_user_login_{$attribute.id}" size="16" value="{$attribute.content.login}" />
              </div>
        </td>
    </tr>

 	<tr>
        <td style="width: 90px; text-align: left;">
  			<input type="hidden" name="ContentObjectAttribute_id[]" value="{$attribute.id}" />
            <div class="form-element">
                 <label for="{$id_base}_password">{'Password'|i18n( 'design/standard/content/datatype' )}:</label>
            </div>
        </td>
        <td>
              <div class="form-element">
              		<input id="{$id_base}_password" class="text ezcc-{$attribute.object.content_class.identifier} ezcca-{$attribute.object.content_class.identifier}_{$attribute.contentclass_attribute_identifier}" type="password" name="{$attribute_base}_data_user_password_{$attribute.id}" size="16" value="{if $attribute.content.original_password}{$attribute.content.original_password}{else}{if $attribute.content.has_stored_login}_ezpassword{/if}{/if}" />
              </div>
        </td>
    </tr>

 	<tr>
        <td style="width: 90px; text-align: left;">
  			<input type="hidden" name="ContentObjectAttribute_id[]" value="{$attribute.id}" />
            <div class="form-element">
			    <label for="{$id_base}_password_confirm">{'Confirm password'|i18n( 'design/standard/content/datatype' )}:</label>
            </div>
        </td>
        <td>
              <div class="form-element">
			    <input id="{$id_base}_password_confirm" class="text ezcc-{$attribute.object.content_class.identifier} ezcca-{$attribute.object.content_class.identifier}_{$attribute.contentclass_attribute_identifier}" type="password" name="{$attribute_base}_data_user_password_confirm_{$attribute.id}" size="16" value="{if $attribute.content.original_password_confirm}{$attribute.content.original_password_confirm}{else}{if $attribute.content.has_stored_login}_ezpassword{/if}{/if}" />
              </div>
        </td>
    </tr>

 	<tr>
        <td style="width: 90px; text-align: left;">
  			<input type="hidden" name="ContentObjectAttribute_id[]" value="{$attribute.id}" />
            <div class="form-element">
			    <label for="{$id_base}_email">{'Email'|i18n( 'design/standard/content/datatype' )}:</label>
            </div>
        </td>
        <td>
              <div class="form-element">
				<input id="{$id_base}_email" class="text ezcc-{$attribute.object.content_class.identifier} ezcca-{$attribute.object.content_class.identifier}_{$attribute.contentclass_attribute_identifier}" type="text" name="{$attribute_base}_data_user_email_{$attribute.id}" size="28" value="{$attribute.content.email|wash( xhtml )}" />
              </div>
        </td>
    </tr>

	{* Email #2. Require e-mail confirmation *}
	{if ezini( 'UserSettings', 'RequireConfirmEmail' )|eq( 'true' )}
	 	<tr>
	        <td style="width: 90px; text-align: left;">
	  			<input type="hidden" name="ContentObjectAttribute_id[]" value="{$attribute.id}" />
	            <div class="form-element">
					<label for="{$id_base}_email_confirm">{'Confirm email'|i18n( 'design/standard/content/datatype' )}:</label>
	            </div>
	        </td>
	        <td>
	              <div class="form-element">
				    <input id="{$id_base}_email_confirm" class="text ezcc-{$attribute.object.content_class.identifier} ezcca-{$attribute.object.content_class.identifier}_{$attribute.contentclass_attribute_identifier}" type="text" name="{$attribute_base}_data_user_email_confirm_{$attribute.id}" size="28" value="{cond( ezhttp_hasvariable( concat( $attribute_base, '_data_user_email_confirm_', $attribute.id ), 'post' ), ezhttp( concat( $attribute_base, '_data_user_email_confirm_', $attribute.id ), 'post')|wash( xhtml ), $attribute.content.email )}" />
			      </div>
	        </td>
	    </tr>
	{/if}

{/default}
