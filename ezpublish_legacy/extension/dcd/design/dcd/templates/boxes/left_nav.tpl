{def $menu = fetch('content', 'list', hash( 'parent_node_id', first_set($pagedata.persistent_variable.nav_parent_id, $module_result.path.2.node_id), 
											'sort_by', array( 'priority', false() ),
								            'class_filter_type',  'include',
								            'class_filter_array', array( 'article', 'feedback_form', 'feedback_form_dcpro', 'ceeda_form', 'file', 'folder', 'package', 'event_calendar' )  ))}

<aside id="secondary_navigation">
	<nav>
		<ul>
		{foreach $menu as $item}
				{node_view_gui content_node=$item view="menu"}
		{/foreach}
		</ul>
	</nav>
</aside>
