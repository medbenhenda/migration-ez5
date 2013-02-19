	<h2>{$node.data_map.title.content|wash}</h2>
	
	    {include name=Validation uri='design:content/collectedinfo_validation.tpl'
	         class='message-warning'
	         validation=$validation collection_attributes=$collection_attributes}
	
	<div class="columns">
		<div class="attribute-long">
		   {attribute_view_gui attribute=$node.data_map.description}
		</div>
	
		<div id="prospectus_form">
		
			<form method="post" action={"content/action"|ezurl}>
		        <div style="color: red;"><small>* {'Required Fields'|i18n( 'dcdpro/feedback_form' )}</small></div>
				<div class="validationErrors" style="text-align: center;"></div>
	
				<div class="form-element">
					<label for="{$node.data_map.firstname.contentclass_attribute.identifier}">{$node.data_map.firstname.contentclass_attribute.name}:{if $node.data_map.firstname.contentclass_attribute.is_required}<span style="color: red;">*</span>{/if}</label>
					{attribute_view_gui attribute=$node.data_map.firstname}
				</div>
	
				<div class="form-element">
					<label for="{$node.data_map.last_name.contentclass_attribute.identifier}">{$node.data_map.last_name.contentclass_attribute.name}:{if $node.data_map.last_name.contentclass_attribute.is_required}<span style="color: red;">*</span>{/if}</label>
					{attribute_view_gui attribute=$node.data_map.last_name}
				</div>
				
				<div class="form-element">
					<label for="{$node.data_map.company.contentclass_attribute.identifier}">{$node.data_map.company.contentclass_attribute.name}:{if $node.data_map.company.contentclass_attribute.is_required}<span style="color: red;">*</span>{/if}</label>
					{attribute_view_gui attribute=$node.data_map.company}
				</div>						
		
		        <div class="form-element">
		        	<label for="{$node.data_map.position.contentclass_attribute.identifier}">{$node.data_map.position.contentclass_attribute.name}:{if $node.data_map.position.contentclass_attribute.is_required}<span style="color: red;">*</span>{/if}</label>
	                {attribute_view_gui attribute=$node.data_map.position}
		        </div>
	
		        <div class="form-element">
		        	<label for="{$node.data_map.email.contentclass_attribute.identifier}">{$node.data_map.email.contentclass_attribute.name}:{if $node.data_map.email.contentclass_attribute.is_required}<span style="color: red;">*</span>{/if}</label>
	                {attribute_view_gui attribute=$node.data_map.email}
		        </div>
	
		        <div class="form-element">
		        	<label for="{$node.data_map.telephone.contentclass_attribute.identifier}">{$node.data_map.telephone.contentclass_attribute.name}:{if $node.data_map.telephone.contentclass_attribute.is_required}<span style="color: red;">*</span>{/if}</label>
	                {attribute_view_gui attribute=$node.data_map.telephone}
		        </div>
	
		        <div class="form-element">
		        	<label for="{$node.data_map.mobile.contentclass_attribute.identifier}">{$node.data_map.mobile.contentclass_attribute.name}:{if $node.data_map.mobile.contentclass_attribute.is_required}<span style="color: red;">*</span>{/if}</label>
	                {attribute_view_gui attribute=$node.data_map.mobile}
		        </div>
	
		        <div class="form-element">
		        	<label for="{$node.data_map.country.contentclass_attribute.identifier}">{$node.data_map.country.contentclass_attribute.name}:{if $node.data_map.country.contentclass_attribute.is_required}<span style="color: red;">*</span>{/if}</label>
	                {attribute_view_gui attribute=$node.data_map.country}
		        </div>
		
		        <div class="form-element">
		        	<label for="{$node.data_map.interests.contentclass_attribute.identifier}">{$node.data_map.interests.contentclass_attribute.name}:{if $node.data_map.interests.contentclass_attribute.is_required}<span style="color: red;">*</span>{/if}</label>
	                {* attribute_view_gui attribute=$node.data_map.interests *}
	                
                   {attribute_view_gui attribute=$node.data_map.interests}

		        </div>
		
		        <div class="form-element">
	               <label> </label> {attribute_view_gui attribute=$node.data_map.newsletter}
		        </div>
		
				<div class="form-element">
					<label>&nbsp;</label>
			        <input type="submit" class="defaultbutton" name="ActionCollectInformation" value="{"Continue →"|i18n("design/ezwebin/full/feedback_form")}"  onclick="_gaq.push(['_trackPageview','/individual-prospectus-download']);"/>
		            <input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
		            <input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
		            <input type="hidden" name="ViewMode" value="full" />
		        </div>
	        </form>
		</div>
	</div>