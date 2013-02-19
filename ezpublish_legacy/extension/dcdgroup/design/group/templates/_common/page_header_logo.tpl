<div id="logo" class="logo">
    {if $pagedesign.data_map.image.content.is_valid|not()}
    <h1><a href={"/"|ezurl} title="{ezini('SiteSettings','SiteName')|wash}">{ezini('SiteSettings','SiteName')|wash}</a></h1>
    {else}
        <a href={"/"|ezurl} title="{ezini('SiteSettings','SiteName')|wash}">
            <img src={"logo.png"|ezimage()} alt="{$site.title}" />
        </a>
</div>