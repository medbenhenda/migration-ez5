 <div id="links">
 	<a href="#choose_language" title="{"Change Location"|i18n('dcd/header')}" id="language_header_link" class="choose_language_link"><img src={"globe.png"|ezimage} /> {"Change location"|i18n('dcdpro/header')} </a>
 	{if $basket_is_empty|not()}
		<a href={"/dcdshop/basket/"|ezurl} title="{$pagedesign.data_map.shopping_basket_label.data_text|wash}" id="basket_head_link">{"Basket"|i18n('dcdpro/header')} </a>
    {/if}
    {if $current_user.is_logged_in}
        {if $pagedesign.data_map.my_profile_label.has_content}
        <a href={"dcdshop/dashboard"|ezurl} title="{$pagedesign.data_map.my_profile_label.data_text|wash}">{$pagedesign.data_map.my_profile_label.data_text|wash}</a>
        {/if}
        {if $pagedesign.data_map.logout_label.has_content}
        <a href={"/user/logout"|ezurl} title="{$pagedesign.data_map.logout_label.data_text|wash}">{$pagedesign.data_map.logout_label.data_text|wash} ( {$current_user.contentobject.name|wash} )</a>
        {/if}
    {else}
        {if and( $pagedesign.data_map.register_user_label.has_content, ezmodule( 'user/register' ) )}
        <a href={"/user/register"|ezurl} title="{$pagedesign.data_map.register_user_label.data_text|wash}">{$pagedesign.data_map.register_user_label.data_text|wash}</a>
        {/if}
        {if $pagedesign.data_map.login_label.has_content}
        <a href={"/user/login"|ezurl} onclick="$.colorbox({ldelim} html:		$('#header_login_form').html() {rdelim});return false;" title="{$pagedesign.data_map.login_label.data_text|wash}">{$pagedesign.data_map.login_label.data_text|wash}</a>
        
		<div id="header_login_form" style="display:none;">
			{include uri="design:user/simple_login.tpl"}
		</div>
        
        {/if}
    {/if}
</div>

{include uri="design:include/choose_language.tpl"}