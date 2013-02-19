<article class="course_list">
        <header>
            <h4><a href={$node.url_alias|ezurl}>{$node.data_map.title.content|wash}</a></h4>
        </header>
        
    {section show=$node.data_map.image.has_content}
        <div class="attribute-image">
            {attribute_view_gui image_class=articlethumbnail href=$node.url_alias|ezurl attribute=$node.data_map.image}
        </div>
    {/section}

    {section show=$node.data_map.summary.content.is_empty|not}
	    <div class="attribute-short">
	        {attribute_view_gui attribute=$node.data_map.summary}
	    </div>
    {/section}

        <table>
            <tbody><tr>
                <td class="title">{"Course Code"|i18n('dcdpro/preview')}:</td>
                <td>{$node.data_map.course_code.content}</td>
            </tr>
            <tr>
                <td class="title">{"Type"|i18n('dcdpro/preview')}:</td>
                <td>{attribute_view_gui attribute=$node.data_map.type}</td>
            </tr>
            <tr>
                <td class="title">{"Level"|i18n('dcdpro/preview')}:</td>
                <td>{$node.data_map.level.content}</td>
            </tr>
          {*
            <tr>
                <td class="title">{"Areas of Interest"|i18n('dcdpro/preview')}:</td>
                <td>{attribute_view_gui attribute=$node.data_map.disciplines}</td>
            </tr>
           *}            
        </tbody></table>
        <a class="button" href={$node.url_alias|ezurl} title="{"More Information"|i18n('dcdpro/preview')}">{"More Information"|i18n('dcdpro/preview')}</a>
    </article>