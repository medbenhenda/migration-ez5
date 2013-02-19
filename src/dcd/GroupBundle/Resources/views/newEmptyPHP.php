<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
{foreach $locations_market as $index => $item}
                                                    <li class="views-row views-row-1 views-row-odd {if eq($index,0)}views-row-first{elseif eq($index, $count_locations)}views-row-last{/if}">
                                                        {attribute_view_gui attribute=$item.data_map.flag image_class='original'}
                                                        <a class="following_year_link" href={$item.data_map.link.value|ezurl()} title="{$item.name|wash()}">{$item.name|wash()}</a>
                                                    </li>
                                                {/foreach}
                                                <li class="region">
                <div class="top_country">
                    <div id="region">{"Region"|i18n("dcdgroup/header")}
                        <div id="regionlist">
                            <ul>
	                            {foreach $regions as $region}
	                                <li><a href={$region.data_map.link.value|ezurl()} title="{$region.data_map.region_name.data_text|wash()}">{$region.data_map.region_name.data_text|wash()}</a></li>
	                            {/foreach}
                            </ul>

                            <div class="clear"></div>
                        </div>
                    </div>                                
                </div>
            </li>
            <li>
                {% include 'dcdGroupBundle::page_header_searchbox.html.twig' %}

            </li>
            
            
            
            
            
    <div class="container">

        <a class="btn btn-navbar" data-action="toggleclass" data-class="nav-collapse" data-target=".main-navi .nav-collapse"></a>

        <div class="nav-collapse">
            <ul class="nav">
                {% for location in locationList %}
                    {% if location.contentInfo.contentType.identifer == 'link' %}
                        <li id=""><a href="#">{{ location.contentInfo.name }}</a></li>
                    {% else %}
                        <li id=""><a href="{{ path( location ) }}">{{ location.contentInfo.name }}</a></li>
                    {% endif %}
                {% endfor %}
            </ul>
        </div>

    </div>