{def $article = fetch( 'content', 'list', hash( 'parent_node_id', $node.node_id , 
											'sort_by', array( 'priority', false() ),
								            'class_filter_type',  'include',
								            'class_filter_array', array( 'article', 'feedback_form', 'feedback_form_dcpro', 'folder', 'people' ),
								            'limit',  1 ) )}

{if $article.0}
	{node_view_gui content_node=$article.0 view='full'}
{else}
	{$node.name}
{/if}