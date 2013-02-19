<!DOCTYPE html>
<html lang="{$site.http_equiv.Content-language|wash}">
<head>
	{def     $user_hash         = concat( $current_user.role_id_list|implode( ',' ), ',', $current_user.limited_assignment_value_list|implode( ',' ) )}
	
	{include uri='design:page_head_displaystyles.tpl'}
	{if is_set( $extra_cache_key )|not}
	    {def $extra_cache_key = ''}
	{/if}
	
	{* cache-block keys=array( $module_result.uri, $basket_is_empty, $current_user.contentobject_id, $extra_cache_key ) *}
	{def $pagedata         = ezpagedata()
	     $pagestyle        = $pagedata.css_classes
	     $locales          = fetch( 'content', 'translation_list' )
	     $pagedesign       = $pagedata.template_look
	     $current_node_id  = $pagedata.node_id}
	
	{include uri='design:page_head.tpl'}
	{include uri='design:page_head_style.tpl'}
	{include uri='design:page_head_script.tpl'}

	<script type="text/javascript">
		var is_logged_in = "{first_set($current_user.is_logged_in, "false")}";
		
		{if $current_user.is_logged_in}
			var user_id = {first_set($current_user.contentobject_id, "0")};
			var user_login = "{first_set($current_user.login, "0")}";
			var user_email = "{first_set($current_user.email, "0")}";
			var user_login_count = "{first_set($current_user.login_count, "0")}";
		{/if}
	</script>
	
</head>
{* To simplify IE css targeting. IE9 conforms, so threat as rest
<!--[if lt IE 7 ]><body class="ie6"><![endif]-->
<!--[if IE 7 ]>   <body class="ie7"><![endif]-->
<!--[if IE 8 ]>   <body class="ie8"><![endif]-->
<!--[if (gt IE 8)|!(IE)]><!--> *}
{def $rootnode = ezini( 'NodeSettings', 'RootNode', 'content.ini' )}

{def $home = fetch('content', 'node', hash('node_id', $rootnode ))}

<body id="{if $module_result.node_id|eq( $rootnode )}index{else}individuals{/if}" class="{if $module_result.node_id|eq( $rootnode )}index{else}individuals{/if} {$module_result.content_info.class_identifier} {if is_set( $pagedata.persistent_variable.extra_body_class )}{$pagedata.persistent_variable.extra_body_class}{/if} {$module_result.ui_component}{if $module_result.ui_component|eq('dcdshop')} shop{/if}">

{* def $visitor_country = get_visitor_country() *} 

<div id="container" class="{$pagestyle}">

  {if and( is_set( $pagedata.persistent_variable.extra_template_list ),
             $pagedata.persistent_variable.extra_template_list|count() )}
    {foreach $pagedata.persistent_variable.extra_template_list as $extra_template}
      {include uri=concat('design:extra/', $extra_template)}
    {/foreach}
  {/if}

  {include uri='design:page_header.tpl'}

  {cache-block keys=array( $module_result.uri, $user_hash, $extra_cache_key ) }

  <nav>
	  {include uri='design:page_topmenu.tpl'}
	
	  {if $pagedata.show_path}
	    {include uri='design:page_toppath.tpl'}
	  {/if}
 </nav>
 
  {if and( $pagedata.website_toolbar, $pagedata.is_edit|not)}
    {include uri='design:page_toolbar.tpl'}
  {/if}

   {if $module_result.node_id|ne( $rootnode )}
   
        {if and( is_set( $pagedata.persistent_variable.header_image) , $pagedata.persistent_variable.header_image|eq('true') )}
                <div class="title_image" id="header_image">
                        
                </div>
        {else}
                {include uri='design:boxes/course_search_facility.tpl' }
        {/if}
    {/if}

  {/cache-block}
{* /cache-block *}

		{if or($pagedata.persistent_variable.no_left_column|eq('true'), array('shop', 'dcdshop', 'user')|contains($module_result.ui_component) )}
		      {$module_result.content}
		{else}
			{include uri='design:boxes/left_nav.tpl' }
			<div role="main" id="main">
				<div id="content">
					<article>
			      	{$module_result.content}
			      	</article>
				</div>
			</div>
		{/if}

	{if $module_result.node_id|eq( $rootnode )}
		{include uri='design:boxes/course_search_facility.tpl' }
	{/if}
	
	{include uri='design:boxes/banners.tpl'}

	<div style="clear:both"></div>

{cache-block keys=array( $module_result.uri, $user_hash, $access_type.name, $extra_cache_key ) }

    {if is_unset($pagedesign)}
        {def $pagedata   = ezpagedata()
             $pagedesign = $pagedata.template_look}
    {/if}

    {if $pagedata.extra_menu}
        {include uri='design:page_extramenu.tpl'}
    {/if}

  {include uri='design:page_footer.tpl'}

</div>

{include uri='design:page_footer_script.tpl'}

{/cache-block}

{* This comment will be replaced with actual debug report (if debug is on). *}
<!--DEBUG_REPORT-->
</body>
</html>
