<div id="main" role="main">
	<div id="content">
		<article>
			
				<form name="editform" id="editform" enctype="multipart/form-data" method="post" action={concat( '/content/edit/', $object.id, '/', $edit_version, '/', $edit_language|not|choose( concat( $edit_language, '/' ), '/' ), $is_translating_content|not|choose( concat( $from_language, '/' ), '' ) )|ezurl}>
				
				    <div class="attribute-header">
				        <h1 class="long">{'Edit <%object_name>'|i18n( 'dcd/content/edit', , hash( '%object_name', $object.name ) )|wash}</h1>
				    </div>

					<table>
						{include uri='design:content/edit_attribute.tpl' view_parameters=$view_parameters}
						<tr>
							<td colspan="2">			
							    <div class="buttonblock">
								    <input class="button" type="submit" name="PublishButton" value="{'Save'|i18n( 'design/ezwebin/content/edit' )}" title="{'Save'|i18n( 'design/ezwebin/content/edit' )}" />
								    <input type="hidden" name="DiscardConfirm" value="0" />
								    <input type="hidden" name="RedirectIfDiscarded" value="{if ezhttp_hasvariable( 'LastAccessesURI', 'session' )}{ezhttp( 'LastAccessesURI', 'session' )}{/if}" />
								    <input type="hidden" name="RedirectURIAfterPublish" value="{if ezhttp_hasvariable( 'LastAccessesURI', 'session' )}{ezhttp( 'LastAccessesURI', 'session' )}{/if}" />
							    </div>
						    </td>
					    </tr>
					</table>
				
				</form>
		</article>
	    <br />
	</div>
</div>

{include uri="design:user/usermenu.tpl" status='edit'}

{set scope=global persistent_variable=hash('no_left_column', 'true', 'extra_body_class', 'schedule shop' }