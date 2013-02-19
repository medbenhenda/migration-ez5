<div class="content-view-embed">
    <div class="class-file">
    {if $object.data_map.file.has_content}
    {def $file = $object.data_map.file}
        <a class="button" style="margin-bottom: 20px" href={concat("content/download/", $file.contentobject_id, "/", $file.id, "/file/", $file.content.original_filename)|ezurl} title="{$object.name|wash}">{$object.name|wash}</a>
    {undef $file}
    {else}
    <div class="content-body">
        <a href={$object.main_node.url_alias|ezurl}>{$object.name|wash}</a>
    </div>
    {/if}
   </div>
</div>