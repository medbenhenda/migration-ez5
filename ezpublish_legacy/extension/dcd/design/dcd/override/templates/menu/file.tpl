{* override of menu link for files for color override *}

{def $attribute = $node.data_map.file}
<li>
	<a href={concat("content/download/",$attribute.contentobject_id,"/",$attribute.id,"/file/",$attribute.content.original_filename)|ezurl} title="{$node.name|wash( xhtml )}">{$node.name|wash( xhtml )}</a>
</li>