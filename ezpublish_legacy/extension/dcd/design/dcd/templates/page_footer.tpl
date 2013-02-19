<footer>

{def $sections = fetch('content','list',
     						hash(	  parent_node_id, $rootnode ,
						              'class_filter_type',  'include',
						              'class_filter_array', array( 'folder' ),
						              'limit', 5, 
									  'sort_by', array( 'priority', false() )
     							)) }
     	{foreach $sections as $section} 					
		
		<section>
			<h4>{$section.name|shorten( 25 )}</h4>
			<nav>
			{def $articles = fetch('content','list',
     						  		hash( 	'parent_node_id', $section.node_id,
							              	'class_filter_type',  'include',
							              	'class_filter_array', array( 'article', 'feedback_form', 'feedback_form_dcpro', 'ceeda_form', 'folder', 'event_calendar', 'package' ), 
											'sort_by', array( 'priority', false() )
     										)) }
     			
				<ul>
					{foreach $articles as $article}
							<li>
								<a href={$article.url_alias|ezurl} title="{$article.name|wash}">{$article.name|shorten( 25 )}</a>
							</li>
					{/foreach}
				</ul>
			{undef $articles}
			</nav>
		</section>
		
		{/foreach}

 	{if $pagedesign.data_map.footer_text.has_content}
 		<div id="copyright">
        	{$pagedesign.data_map.footer_text.content} 
        </div>
    {/if}
    </footer>
    
    
    
