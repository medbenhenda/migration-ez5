    {if $object.data_map.file.has_content}
    {def $file = $object.data_map.file}
        <a href={concat("content/download/", $file.contentobject_id, "/", $file.id, "/file/", $file.content.original_filename)|ezurl} title="{$file.content.original_filename|wash("xhtml")}">{$file.content.original_filename|wash("xhtml")}</a>
    {undef $file}
    {else}
    <div class="content-body">
        <a href={$object.main_node.url_alias|ezurl}>{$object.name|wash}</a>
    </div>
    {/if}
