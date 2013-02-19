{set-block scope=root variable=subject}{"Your requested DCPro Prospectus"|i18n("dcdpro/collectedinfomail")}{/set-block}

{foreach $collection.attributes as $attribute}
	{if and( eq( $attribute.contentclass_attribute_name, 'Email'), $attribute.has_content)}
		{set-block scope=root variable=email_receiver}{$attribute.data_text}{/set-block}
	{/if}
{/foreach}

{set-block scope=root variable=content_type}text/html{/set-block}
{def $file = $object.data_map.file}
<div class="prospectus-content">
	<p>{"Your requested prospectus from DCProfessional Development is available for download here: "|i18n('dcdpro/collectedinfomail')} <a href={concat("content/download/", $file.contentobject_id, "/", $file.id, "/file/", $file.content.original_filename)|ezurl(,'full')}>{"DCProfessional Prospectus"|i18n("dcdpro/collectedinfomail")}</a></p>
	<p>{"Included are comprehensive course descriptions of both our classroom-based and online offerings, as well as detailed information about PDHs available via the accrediting bodies with whom we are affiliated. If you require additional information, or if you are a corporate client, please do not hesitate to contact us for information specific to your business need."|i18n("dcdpro/collectedinfomail")}</p>
</div>