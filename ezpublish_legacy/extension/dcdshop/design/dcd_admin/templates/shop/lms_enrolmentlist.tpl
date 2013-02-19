<div class="context-block">
	<div class="box-header">
		<div class="box-ml">
			<h1 class="context-title">{'Ordered products (%count)'|i18n( 'design/admin/shop/orderlist',, hash( '%count', $order_list_count ) )}</h1>
			<div class="header-mainline"></div>
		</div>
	</div>

	<div class="box-ml">
		<div class="box-mr">
			
			{*
			<div class="context-toolbar">
						<br /> 
				{include name=navigator
				         uri='design:navigator/google.tpl'
				         page_uri='/dcdshop/lms_enrolments'
				         item_count=$order_list_count
				         view_parameters=$view_parameters
				         item_limit=$limit}
				         <br />
			</div>	
			*} 
			<div class="box-content">
			    <div class="button-left">
			    	<form action={"dcdshop/lms_enrolments"|ezurl} method="post" >
				        <select name="ProductClass" title="{'Select product class.'|i18n( 'design/admin/shop/productsoverview' )}" >
				         	<option value="all" {if eq( $product_class, "all" )}selected="selected"{/if}>{"-- All --"|i18n('dcdshop/lmslist')}</option>
				            {foreach $product_class_list as $class}
				                <option value="{$class.identifier}" {if and( $product_class, eq( $class.identifier, $product_class ))}selected="selected"{/if}>{$class.name|wash()}</option>
				            {/foreach}
				        </select>

{*
				        <select name="RegionFilter" title="{'-- Region --'|i18n( 'dcdshop/lmslist' )}" >
				         	<option value="">{"-- Region --"|i18n('dcdshop/lmslist')}</option>
				            {foreach $region_list as $region}
				                <option value="{$region}" {if eq( $region, $regionFilter )}selected="selected"{/if}>{$region}</option>
				            {/foreach}
				        </select>
*}				      
				        <select name="CountryFilter" title="{'Select a country.'|i18n( 'dcdshop/lmslist' )}" >
				         	<option value="all" {if eq( $country_list, "all" )}selected="selected"{/if}>{"-- Country --"|i18n('dcdshop/lmslist')}</option>
				            {foreach $country_list as $country}
				                <option value="{$country.name|wash}" {if eq( $country.name, $countryFilter )}selected="selected"{/if}>{$country.name|wash()}</option>
				            {/foreach}
				        </select>

				        <select name="CityFilter" title="{'Select a city.'|i18n( 'dcdshop/lmslist' )}" >
				         	<option value="all" {if eq( $product_class, "all" )}selected="selected"{/if}>{"-- City --"|i18n('dcdshop/lmslist')}</option>
				            {foreach $city_list as $city}
				                <option value="{$city.name|wash}" {if eq( $cityFilter, $city.name )}selected="selected"{/if}>{$city.name|wash()}</option>
				            {/foreach}
				        </select>
				        
				         <input name="TextFilter" type="text" value="{$textFilter}" placeholder="{"Invoice #, Client Email"|i18n('dcdhop/lmslist')}"/>
				        
				         <input class="button" type="submit" name="ShowProductsButton" value="{'Filter products'|i18n( 'dcdshop/lmslist' )}" title="{'Filter products'|i18n( 'dcdshop/lmslist' )}" />
			        </form>
			        {* Show button *}
			      
			    </div>
			</div>			
			<div class="box-content">
				{if count($orders)|gt(0)}
				<div class="context-toolbar">
				
					<div class="button-right">
						<p class="table-preferences">
							{if eq( ezpreference( 'lmslist_sortorder' ), 'desc' )}
							    <a href={'/user/preferences/set/lmslist_sortorder/asc/dcdshop/lms_enrolments/'|ezurl}>{'Ascending'|i18n( 'design/admin/shop/orderlist' )}</a>
							    <span class="current">{'Descending'|i18n( 'design/admin/shop/orderlist' )}</span>
							{else}
							    <span class="current">{'Ascending'|i18n( 'design/admin/shop/orderlist' )}</span>
							    <a href={'/user/preferences/set/lmslist_sortorder/desc/dcdshop/lms_enrolments/'|ezurl}>{'Descending'|i18n( 'design/admin/shop/orderlist' )}</a>
							{/if}
						</p>
					</div>				
					<div class="button-right">
						<p class="table-preferences">
							{if eq( ezpreference( 'lmslist_sortfield' ), 'user_name' )}
							    <a href={'/user/preferences/set/lmslist_sortfield/time/dcdshop/lms_enrolments/'|ezurl}>{'Time'|i18n( 'design/admin/shop/orderlist' )}</a>
							    <a href={'/user/preferences/set/lmslist_sortfield/session/dcdshop/lms_enrolments/'|ezurl}>{'Course'|i18n( 'design/admin/shop/orderlist' )}</a>
							    <span class="current">{'Customer'|i18n( 'design/admin/shop/orderlist' )}</span>
							{elseif eq( ezpreference( 'lmslist_sortfield' ), 'session' )}
							    <a href={'/user/preferences/set/lmslist_sortfield/time/dcdshop/lms_enrolments/'|ezurl}>{'Time'|i18n( 'design/admin/shop/orderlist' )}</a>
							    <span class="current">{'Course'|i18n( 'design/admin/shop/orderlist' )}</span>
							    <a href={'/user/preferences/set/lmslist_sortfield/user_name/dcdshop/lms_enrolments/'|ezurl}>{'Customer'|i18n( 'design/admin/shop/orderlist' )}</a>
							{else}
							    <span class="current">{'Time'|i18n( 'design/admin/shop/orderlist' )}</span>
							    <a href={'/user/preferences/set/lmslist_sortfield/session/dcdshop/lms_enrolments/'|ezurl}>{'Course'|i18n( 'design/admin/shop/orderlist' )}</a>
							    <a href={'/user/preferences/set/lmslist_sortfield/user_name/dcdshop/lms_enrolments/'|ezurl}>{'Customer'|i18n( 'design/admin/shop/orderlist' )}</a>
							{/if}
						</p>
					</div>
					
					<div class="button-right">
					    <p class="table-preferences">
					    {switch match=$limit}
					
					        {case match=25}
					        <a href={'/user/preferences/set/lmslist_limit/10'|ezurl} title="{'Show 10 items per page.'|i18n( 'design/admin/shop/productsoverview' )}">10</a>
					        <span class="current">25</span>
					        <a href={'/user/preferences/set/lmslist_limit/50'|ezurl} title="{'Show 50 items per page.'|i18n( 'design/admin/shop/productsoverview' )}">50</a>
					        {/case}
					
					        {case match=50}
					        <a href={'/user/preferences/set/lmslist_limit/10'|ezurl} title="{'Show 10 items per page.'|i18n( 'design/admin/shop/productsoverview' )}">10</a>
					        <a href={'/user/preferences/set/lmslist_limit/25'|ezurl} title="{'Show 25 items per page.'|i18n( 'design/admin/shop/productsoverview' )}">25</a>
					        <span class="current">50</span>
					        {/case}
					
					        {case}
					        <span class="current">10</span>
					        <a href={'/user/preferences/set/lmslist_limit/25'|ezurl} title="{'Show 25 items per page.'|i18n( 'design/admin/shop/productsoverview' )}">25</a>
					        <a href={'/user/preferences/set/lmslist_limit/50'|ezurl} title="{'Show 50 items per page.'|i18n( 'design/admin/shop/productsoverview' )}">50</a>
					        {/case}
					
					        {/switch}
					    </p>
					</div>
					
					<div class="float-break"></div>
				</div>
		
				
				{def $currency = false()
				     $locale = false()
				     $symbol = false()}
				
					<table class="table table-bordered" cellspacing="0">
					<tr>
					{*     <th class="tight"><img src={'toggle-button-16x16.gif'|ezimage} width="16" height="16" alt="{'Invert selection.'|i18n( 'design/admin/shop/orderlist' )}" title="{'Invert selection.'|i18n( 'design/admin/shop/orderlist' )}" onclick="ezjs_toggleCheckboxes( document.orderlist, 'OrderIDArray[]' ); return false;" /></th> *}
					    <th class="tight">{'Order #'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="wide">{'Billed To'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="tight">{'Course Code'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="wide">{'Session'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="tight">{'Payment Status'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="tight">{'Enrollment Status'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="wide">{'Time of Order'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="tight"></th>
					</tr>
					{foreach $orders as $line_number => $order sequence=array( bglight, bgdark )}
						{def $product = fetch('content', 'object', hash('object_id', $order.product.id) )}
						{* def $enrolled_amount = get_enrolled_amount($order.id, $order.product.id) *} 
						{def $course = fetch('content', 'object', hash('object_id', $product.data_map.course.content.relation_list.0.contentobject_id) )}					
						<tr class="{$order.sequence}">
					{* 	    <td><input type="checkbox" name="orderIDArray[]" value="{$order.order_nr}" title="{'Select order for removal.'|i18n( 'design/admin/shop/orderlist' )}" /></td> *}
						    <td>
					    		<a href={concat( '/shop/orderview/', $order.id )|ezurl} title="{"Order #"|i18n('dcdshop/lmslist')} {$order.order_nr}">{$order.order_nr}</a>
						    </td>
						    <td>
						        <a href={concat( '/shop/customerorderview/', $order.user_id, '/', $order.email )|ezurl}>{first_set($order.email, $order.login)}</a>
						    </td>
						    <td>
								{if $product.data_map.course_code.content}
						    		{$product.data_map.course_code.content}
								{elseif $course.data_map.course_code.content}
									{$course.data_map.course_code.content}
								{else}
									N/A
						    	{/if}
						    </td>
						    <td>
								<a href={concat( '/content/view/full/', $product.main_node_id )|ezurl}>{$product.name}</a>
							</td>
							<td>
								<form name="orderlist" method="post" action={concat( '/dcdshop/lms_enrolments', $view_parameters.offset|gt(0)|choose( '', concat( '/(offset)/', $view_parameters.offset ) ) )|ezurl}>
								  {let order_status_list=$order.order.status_modification_list}
								  
									    {if $order_status_list|count|gt( 0 )}
									        {set can_apply=true()}
									        <select name="StatusList[{$order.id}]">
									        {foreach $order_status_list as $status}
									            <option value="{$status.status_id}"
									                {if eq( $status.status_id, $order.status_id )}selected="selected"{/if}>
									                {$status.name|wash}</option>
									        {/foreach}
									        </select>
									    {else}
									        {* Lets just show the name if we don't have access to change the status *}
									        {$order.order.status_name|wash}
									    {/if}
								    
								    {/let}
									<input class="button" type="submit" name="SaveOrderStatusButton" value="{'Apply changes'|i18n( 'design/admin/shop/orderlist' )}" title="{'Click this button to store changes if you have modified any of the fields above.'|i18n( 'design/admin/shop/orderlist' )}" />
							    </form>
							</td>
							<td>
								{$order.enrolments.stats.enrolled} / {$$order.enrolments.stats.total}
							</td>
						    <td>{$order.created|l10n( shortdatetime )}</td>
						    <td>
						    	<a href="#" onclick="$('#more_options_' + {$line_number}).toggle('slow');return false;">{"More"|i18n( 'design/admin/shop/orderlist')}</a>
						    </td>
						</tr>
						<tr id="more_options_{$line_number}" style="display:none;">
							<td colspan="9"> 
								<div class="row" style="margin:auto;">
									<h2>
										{'Order Information'|i18n( 'design/admin/shop/orderlist' )}
										<small>{'Detailed Information about the Order'|i18n( 'design/admin/shop/orderlist' )}</small>
									</h2>
									<div style="margin: 0px auto; width: 970px;">
										<div class="row">
											<div class="span2"><h5 style="margin: 0;">{'Invoice Number'|i18n( 'design/admin/shop/orderlist' )}:</h5></div>
											<div class="span2"><a href={concat( '/shop/orderview/', $order.id )|ezurl} title="{"Order #"|i18n('dcdshop/lmslist')} {$order.order_nr}">{$order.order_nr}</a></div>
											<div class="span2"><h5 style="margin: 0;">{'Time Requested'|i18n( 'design/admin/shop/orderlist' )}:</h5></div>
											<div class="span2">{$order.order.created|l10n( shortdatetime )}</div>
											<div class="span2"><h5 style="margin: 0;">{'Order Status'|i18n( 'design/admin/shop/orderlist' )}:</h5></div>
											<div class="span2">
													<form name="orderlist" method="post" action={concat( '/dcdshop/lms_enrolments', $view_parameters.offset|gt(0)|choose( '', concat( '/(offset)/', $view_parameters.offset ) ) )|ezurl}>
													  {let order_status_list=$order.order.status_modification_list}
													  
														    {if $order_status_list|count|gt( 0 )}
														        {set can_apply=true()}
														        <select name="StatusList[{$order.id}]">
														        {foreach $order_status_list as $status}
														            <option value="{$status.status_id}"
														                {if eq( $status.status_id, $order.status_id )}selected="selected"{/if}>
														                {$status.name|wash}</option>
														        {/foreach}
														        </select>
														    {else}
														        {* Lets just show the name if we don't have access to change the status *}
														        {$order.order.status_name|wash}
														    {/if}
													    
													    {/let}
														<input class="button" type="submit" name="SaveOrderStatusButton" value="{'Apply changes'|i18n( 'design/admin/shop/orderlist' )}" title="{'Click this button to store changes if you have modified any of the fields above.'|i18n( 'design/admin/shop/orderlist' )}" />
												    </form>
											</div>
										</div>
										<div class="row">
											<div class="span2"><h5 style="margin: 0;">{'Payment Amount (NET)'|i18n( 'design/admin/shop/orderlist' )}:</h5></div>
											<div class="span2">
												{*$product.data_map|attribute('show',2)*}
											</div>
											<div class="span2"><h5 style="margin: 0;">{'Payment Amount (TAX)'|i18n( 'design/admin/shop/orderlist' )}:</h5></div>
											<div class="span2">
												{def $tax_amount = sub( $product.data_map.price.content.inc_vat_price, $product.data_map.price.content.ex_vat_price)}
												{$tax_amount}
												{undef $tax_amount}
											</div>
											<div class="span2"><h5 style="margin: 0;">{'Payment Amount (TOTAL)'|i18n( 'design/admin/shop/orderlist' )}:</h5></div>
											<div class="span2">{$product.data_map.price.content.inc_vat_price}</div>
										</div>
									</div>
								</div>
								<div class="row" style="margin:auto;">
									<h2>
										{'Course Information'|i18n( 'design/admin/shop/orderlist' )}
										<small>{'Detailed Information about the Course / Session'|i18n( 'design/admin/shop/orderlist' )}</small>
									</h2>
									<div style="margin: 0px auto; width: 970px;">
										<div class="row">
											<div class="span2"><h5 style="margin: 0;">{'Course Name'|i18n( 'design/admin/shop/orderlist' )}:</h5></div>
											<div class="span2"><a href={$product.url_alias|ezurl} title="{$product.data_map.title.content|wash}">{$product.data_map.title.content}</a></div>
											<div class="span2"><h5 style="margin: 0;">{'Course Code'|i18n( 'design/admin/shop/orderlist' )}:</h5></div>
											<div class="span2">
									    		{first_set( $product.data_map.course_code.content, $course.data_map.course_code.content, '' )}
										    </div>
											<div class="span2"><h5 style="margin: 0;">{'Course Type'|i18n( 'design/admin/shop/orderlist' )}:</h5></div>
											<div class="span2">
											{if and($product.data_map.course_code.has_content, is_set($enrolment.course_code))}
												{if or( eq( $product.data_map.course_code.content|extract( 0, 1), 'C'), 
													eq( $course.data_map.course_code.content|extract( 0, 1), 'C'))}
													{'Classroom'|i18n( 'design/admin/shop/orderlist' )}
												{elseif eq( $product.data_map.course_code.content|extract( 0, 1), 'E')}
													{'Online'|i18n( 'design/admin/shop/orderlist' )}
												{else}
													{'Package'|i18n( 'design/admin/shop/orderlist' )}
												{/if}
											{/if}
											</div>
										</div>
										{if and($product.data_map.course_code.has_content, is_set($enrolment.course_code))}
											{if or( eq( $product.data_map.course_code.content|extract( 0, 1), 'C'),
												eq( $order.course_code|extract( 0, 1), 'C'))}
											<div class="row">
												<div class="span2"><h5 style="margin: 0;">{'Session Date'|i18n( 'design/admin/shop/orderlist' )}:</h5></div>
												<div class="span2">{$product.data_map.from_time.content.timestamp|l10n( shortdatetime )}</div>
												<div class="span2"><h5 style="margin: 0;">{'Session Location'|i18n( 'design/admin/shop/orderlist' )}:</h5></div>
												<div class="span2">{$product.data_map.venue.content} - {$product.data_map.city.content}</div>
											</div>
											{/if}
										{/if}
									</div>
								</div>
								<div class="row" style="margin:auto;">
									<h2>
										{'Enroled Student Information'|i18n( 'design/admin/shop/orderlist' )} ( {$order.enrolments.stats.enrolled} / {$$order.enrolments.stats.total} )
										<small>{'Detailed Information about the Students'|i18n( 'design/admin/shop/orderlist' )}</small>
									</h2>
									
									{if $order.enrolments.stats.enrolled|gt(0)}
									
										{foreach $order.enrolments[$product.id] as $student}
											<div style="margin: 0px auto; width: 970px;">
												<div class="row">
													<div class="span2"><h5 style="margin: 0;">{'First Name'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}:</h5></div>
													<div class="span2">{$student.firstname}</div>
													<div class="span2"><h5 style="margin: 0;">{'Last Name'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}:</h5></div>
													<div class="span2">{$student.lastname}</div>
													<div class="span2"><h5 style="margin: 0;">{'Email'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}:</h5></div>
													<div class="span2">{$student.email}</div>
												</div>
												<div class="row">
													<div class="span4">
														<fieldset>
															<legend><h5>{'Address'|i18n( 'dcdshop/manageorder' )}:</h5></legend>
															<table class="list" cellspacing="0">
																<tbody>
																	<tr>
																		<td>{'Street'|i18n( 'design/ezwebin/shop/userregister')}</td>
																		<td>{$student.Address1}</td>
																	</tr>
																	{if ne( $student.Address2, '' )}
																	<tr>
																		<td>{'Address'|i18n( 'design/ezwebin/shop/userregister')} 2</td>
																		<td>{$student.Address2}</td>
																	</tr>
																	{/if}
																	{if ne( $student.Address3, '' )}
																	<tr>
																		<td>{'Address'|i18n( 'design/ezwebin/shop/userregister')} 3</td>
																		<td>{$student.Address3}</td>
																	</tr>
																	{/if}
																	{if ne( $student.city, '' )}
																	<tr>
																		<td>{'City'|i18n( 'design/ezwebin/shop/userregister')}</td>
																		<td>{$student.city}</td>
																	</tr>
																	{/if}
																	{if ne( $student.prov, '' )}
																	<tr>
																		<td>{'Province'|i18n( 'design/ezwebin/shop/userregister')}</td>
																		<td>{$student.prov}</td>
																	</tr>
																	{/if}
																	<tr>
																		<td>{'Country/Region'|i18n( 'design/ezwebin/shop/userregister')}</td>
																		<td>{$student.country}</td>
																	</tr>
																	<tr>
																		<td>{'Zip/Postal Code'|i18n( 'design/ezwebin/shop/userregister')}</td>
																		<td>{$student.Zip}</td>
																	</tr>
																</tbody>
															</table>
														</fieldset>
													</div>
													<div class="span2"><h5 style="margin: 0;">{'Telephone Number'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}:</h5></div>
													<div class="span2">{$student.mobile}<br />{$student.telephone2}</div>
												</div>
											</div>
										{/foreach}
									{/if}
								</div>
							</td>
						</tr>
						{undef $course}
						{undef $product}
						{undef $enrolled_amount}
					{/foreach}
					</table>
				{else}
					<div class="block">
					<p>{'The order list is empty.'|i18n( 'design/admin/shop/orderlist' )}</p>
					</div>
				{/if}

			<div class="context-toolbar">
			{include name=navigator
			         uri='design:navigator/google.tpl'
			         page_uri='/dcdshop/lms_enrolments'
			         item_count=$order_list_count
			         view_parameters=$view_parameters
			         item_limit=$limit}
			</div>

		</div>
	</div>
</div>

<div class="controlbar">
	<div class="box-bc">
		<div class="box-ml">

			<div class="block">
				<div class="button-left">
					
				</div>
				<div class="button-right">
				    <a style="float:right; margin-top: 20px;" href={"dcdshop/lms_enrolments?csv=true"|ezurl} class="btn btn-small btn-info">
							<i class="icon-download-alt icon-white"></i>
							{"Download CSV of Results"|i18n('dcdshop/lms_enrolments')}
		             </a>
				</div>
				<div class="break"></div>
			
			</div>

		</div>
	</div>
</div>
