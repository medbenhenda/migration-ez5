{* DO NOT EDIT THIS FILE! Use an override template instead. *}
{* For compatibility with eZPublish 3.4 admin interface *}

{default view_mode = 'all'}
    {include uri = concat( 'design:url/view/', $view_mode, '.tpl' ) view_parameters = $:view_parameters}
{/default}

