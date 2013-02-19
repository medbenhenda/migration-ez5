{def $banner_top_id=ezini('ImportantNodeID', 'BannerTopNodeID', 'group.ini')
	 $banner_top=fetch('content', 'list', hash(
			'parent_node_id', $banner_top_id, 
			'sort_by', array( 'published', false() ),
			'limit', 1,
            'class_filter_type', 'include',
            'class_filter_array', array( 'banner')
			)
		)
}

<div class="bannet-top">
{foreach $banner_top as $banner}
    <object type="application/x-shockwave-flash" data="{$banner.data_map.image.value.original.url}" width="728" height="90">
<param name="movie" value="{$banner.data_map.image.value.original.url}">
<param name="quality" value="high">
<param name="loop" value="false" />
<param name="menu" value="false" />
<param name="scale" value="noscale" />
<param name="salign" value="lt" />
<param name="bgcolor" value="#FFFFFF" />
<embed src="{$banner.data_map.image.value.original.url}" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="728" height="90"/>
</object>
{/foreach}
</div>
{undef $banner_top_id $banner_top}