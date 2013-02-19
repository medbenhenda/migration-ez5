<div class="l_sidebar">

    <!-- ZONE CONTENT: START -->
    {if and( is_set( $zones[0].blocks ), $zones[0].blocks|count() )}
        {foreach $zones[0].blocks as $block}
            {include uri='design:parts/zone_block.tpl' zone=$zones[0]}
        {/foreach}
    {/if}

    <!-- ZONE CONTENT: END -->

</div>


<div class="content">

    <!-- ZONE CONTENT: START -->

    {if and( is_set( $zones[1].blocks ), $zones[1].blocks|count() )}
        {foreach $zones[1].blocks as $block}
            {if ne($block.type, 'BannerMainBottom')}
                {include uri='design:parts/zone_block.tpl' zone=$zones[1]}
            {/if}
        {/foreach}
    {/if}

    <!-- ZONE CONTENT: END -->

</div>

<div class="r_sidebar">
    {include uri='design:_common/connect.tpl'}
    {if and( is_set( $zones[2].blocks ), $zones[2].blocks|count() )}
        {foreach $zones[2].blocks as $block}
            {include uri='design:parts/zone_block.tpl' zone=$zones[2]}
        {/foreach}
    {/if}
</div>
<div class="clr"></div>
{if and( is_set( $zones[1].blocks ), $zones[1].blocks|count() )}
    {foreach $zones[1].blocks as $block}
        {if eq($block.type, 'BannerMainBottom')}
            {include uri='design:parts/zone_block.tpl' zone=$zones[1]}
        {/if}
    {/foreach}
{/if}

