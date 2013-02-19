<form enctype="multipart/form-data"  action={"/user/register/"|ezurl} method="post" name="Register" id="userregister">

	<h2>{"Register user"|i18n("design/ezwebin/user/register")}</h2>
	
	{if and( and( is_set( $checkErrNodeId ), $checkErrNodeId ), eq( $checkErrNodeId, true() ) )}
	    <div class="message-error">
	        <h2><span class="time">[{currentdate()|l10n( shortdatetime )}]</span> {$errMsg}</h2>
	    </div>
	{/if}
	
	{if $validation.processed}
	
	    {if $validation.attributes|count|gt(0)}
	        <div class="warning">
	        <h2>{"Input did not validate"|i18n("design/ezwebin/user/register")}</h2>
	        <ul>
	        {foreach $validation.attributes as $attribute}
	            <li>{$attribute.name}: {$attribute.description}</li>
	        {/foreach}
	        </ul>
	        </div>
	    {else}
	        <div class="feedback">
	        <h2>{"Input was stored successfully"|i18n("design/ezwebin/user/register")}</h2>
	        </div>
	    {/if}
	
	{/if}

	{if count($content_attributes)|gt(0)}

	<table style="width: 300px; text-align: left; margin: auto;">
        <tbody>

		    {foreach $content_attributes as $key => $attribute max 3}
			  	{if $key|eq(2)}
			  		{attribute_edit_gui attribute=$attribute}
			  	{else}
			  	<tr>
		            <td style="width: 90px; text-align: left;">
		            	<div class="form-element">
			      			<input type="hidden" name="ContentObjectAttribute_id[]" value="{$attribute.id}" />
			                <label for="email">{$attribute.contentclass_attribute.name}</label>
			            </div>
		            </td>
		            <td>
		            	<div class="form-element">
                  			{attribute_edit_gui attribute=$attribute}
                  		</div>
		            </td>
		        </tr>
		        {/if}
		    {/foreach}
               <tr>
            </tr>
            <tr>
            	<td colspan="2" class="buttonblock">
                    <input class="button" type="hidden" name="UserID" value="{$content_attributes[0].contentobject_id}" />
				    {if and( is_set( $checkErrNodeId ), $checkErrNodeId )|not()}
				        <input class="button" type="submit" id="PublishButton" name="PublishButton" value="{'Register'|i18n('design/ezwebin/user/register')}" onclick="window.setTimeout( disableButtons, 1 ); return true;" style="float: right;"/>
				    {else}    
				        <input class="button" type="submit" id="PublishButton" name="PublishButton" disabled="disabled" value="{'Register'|i18n('design/ezwebin/user/register')}" onclick="window.setTimeout( disableButtons, 1 ); return true;" style="float:right;"/>
				    {/if}
                </td>
            </tr>
        </tbody></table>
    
	{else}
	    <div class="warning">
	         <h2>{"Unable to register new user"|i18n("design/ezwebin/user/register")}</h2>
	    </div>
	    <input class="button" type="submit" id="CancelButton" name="CancelButton" value="{'Back'|i18n('design/ezwebin/user/register')}" onclick="window.setTimeout( disableButtons, 1 ); return true;" />
	{/if}
</form>

{literal}
<script type="text/javascript">
    function disableButtons()
    {
        document.getElementById( 'PublishButton' ).disabled = true;
        document.getElementById( 'CancelButton' ).disabled = true;
    }
</script>
{/literal}