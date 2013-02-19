{let search=false()}
{section show=$use_template_search}
    {set page_limit=10}
    {set search=fetch(content,search,
                      hash(text,$search_text,
                           section_id,$search_section_id,
                           subtree_array,$search_subtree_array,
                           sort_by,array('modified',false()),
                           offset,$view_parameters.offset,
                           limit,$page_limit))}
    {set search_result=$search['SearchResult']}
    {set search_count=$search['SearchCount']}
    {set stop_word_array=$search['StopWordArray']}
    {set search_data=$search}
{/section}

	<h2>{"Search"|i18n("design/ezwebin/content/search")}</h2>
	
	<article class="course_list">
	
		<form action={"/dcpro/search/"|ezurl} method="get">
			
		    <input type="text" size="20" name="q" id="query" value="{$search_text|wash}" />
		    <input class="button" name="SearchButton" type="submit" value="{'Search'|i18n('design/ezwebin/content/search')}" />
		
			{section show=$stop_word_array}
			    <p>
			    {"The following words were excluded from the search:"|i18n("design/ezwebin/content/search")}:
			    {section name=StopWord loop=$stop_word_array}
			        {$StopWord:item.word|wash}
			        {delimiter}, {/delimiter}
			    {/section}
			    </p>
			{/section}
			
			{switch name=Sw match=$search_count}
			  {case match=0}
			  <div class="warning" style="clear: both;">
			  <h2>{'No results were found when searching for "%1".'|i18n("design/ezwebin/content/search",,array($search_text|wash))}</h2>
			  </div>
			    <p>{'Search tips'|i18n('design/ezwebin/content/search')}</p>
			    <ul>
			        <li>{'Check spelling of keywords.'|i18n('design/ezwebin/content/search')}</li>
			        <li>{'Try changing some keywords (eg, "car" instead of "cars").'|i18n('design/ezwebin/content/search')}</li>
			        <li>{'Try searching with less specific keywords.'|i18n('design/ezwebin/content/search')}</li>
			        <li>{'Reduce number of keywords to get more results.'|i18n('design/ezwebin/content/search')}</li>
			    </ul>
			  {/case}
			  {case}
			  <div class="feedback" style="clear: both;">
			  <h2>{'Search for "%1" returned %2 matches'|i18n("design/ezwebin/content/search",,array($search_text|wash,$search_count))}</h2>
			  </div>
			  {/case}
			{/switch}
			
		</form>
	
		
	</article>

		{include name=Navigator
		         uri='design:navigator/google.tpl'
		         page_uri='/dcpro/search'
   		         page_uri_suffix=concat('?q=', $search_text|urlencode, $search_timestamp|gt(0)|choose('',concat('&SearchTimestamp=',$search_timestamp)), 
   		         							   count($search_contentclass_id)|gt(0)|choose('', concat('&SearchContentClassID[]=', $search_contentclass_id.0 )  ), 
   		         							   is_set($search_disciplines)|choose('', concat('&disciplines=',$search_disciplines )  ), 
   		         							   is_set($search_locations)|choose('', concat('&course_filter_location=',$search_locations )  ) )
		         item_count=$search_count
		         view_parameters=$view_parameters
		         item_limit=$page_limit}

		
	{section name=SearchResult loop=$search_result show=$search_result sequence=array(bglight,bgdark)}
	   {node_view_gui view=preview sequence=$:sequence use_url_translation=$use_url_translation content_node=$:item}
	{/section}
	
		{include name=Navigator
		         uri='design:navigator/google.tpl'
		         page_uri='/dcpro/search'
   		         page_uri_suffix=concat('?q=', $search_text|urlencode, $search_timestamp|gt(0)|choose('',concat('&SearchTimestamp=',$search_timestamp)), 
   		         							   count($search_contentclass_id)|gt(0)|choose('', concat('&SearchContentClassID[]=', $search_contentclass_id.0 )  ), 
   		         							   is_set($search_disciplines)|choose('', concat('&disciplines=',$search_disciplines )  ), 
   		         							   is_set($search_locations)|choose('', concat('&course_filter_location=',$search_locations )  ) )
		         item_count=$search_count
		         view_parameters=$view_parameters
		         item_limit=$page_limit}
	         
		         
		         

	{/let}

{set scope=global persistent_variable=hash( 'nav_parent_id', first_set( ezini( 'NodeSettings', 'SearchLeftNavNode', 'content.ini' ), 64),
											'extra_body_class', 'search')}
