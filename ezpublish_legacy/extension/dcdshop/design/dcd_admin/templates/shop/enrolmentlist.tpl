<div class="context-block">
	<div class="box-header">
		<div class="box-ml">
			<h1 class="context-title">{'Enrolments (%count)'|i18n( 'design/admin/shop/orderlist',, hash( '%count', $enrolments|count ) )}</h1>
			<div class="header-mainline"></div>
		</div>
	</div>

	<div class="box-ml">
		<div class="box-mr">
			<div class="box-content">
				{if count($enrolments)|gt(0)}
				<div class="context-toolbar">
				<div class="button-left">
				<p class="table-preferences">
				{* if eq( ezpreference( 'admin_enrolmentlist_sortfield' ), 'user_name' )}
				    <a href={'/user/preferences/set/admin_enrolmentlist_sortfield/time/dcdshop/enrolments/'|ezurl}>{'Time'|i18n( 'design/admin/shop/orderlist' )}</a>
				    <a href={'/user/preferences/set/admin_enrolmentlist_sortfield/session/dcdshop/enrolments/'|ezurl}>{'Session'|i18n( 'design/admin/shop/orderlist' )}</a>
				    <span class="current">{'Customer'|i18n( 'design/admin/shop/orderlist' )}</span>
				{elseif eq( ezpreference( 'admin_enrolmentlist_sortfield' ), 'session' )}
				    <a href={'/user/preferences/set/admin_enrolmentlist_sortfield/time/dcdshop/enrolments/'|ezurl}>{'Time'|i18n( 'design/admin/shop/orderlist' )}</a>
				    <span class="current">{'Session'|i18n( 'design/admin/shop/orderlist' )}</span>
				    <a href={'/user/preferences/set/admin_enrolmentlist_sortfield/user_name/dcdshop/enrolments/'|ezurl}>{'Customer'|i18n( 'design/admin/shop/orderlist' )}</a>
				{else}
				    <span class="current">{'Time'|i18n( 'design/admin/shop/orderlist' )}</span>
				    <a href={'/user/preferences/set/admin_enrolmentlist_sortfield/session/dcdshop/enrolments/'|ezurl}>{'Session'|i18n( 'design/admin/shop/orderlist' )}</a>
				    <a href={'/user/preferences/set/admin_enrolmentlist_sortfield/user_name/dcdshop/enrolments/'|ezurl}>{'Customer'|i18n( 'design/admin/shop/orderlist' )}</a>
				{/if *}
				</p>
				</div>
				<div class="button-right">
				<p class="table-preferences">
				{*
				 
				if eq( ezpreference( 'admin_enrolmentlist_sortorder' ), 'desc' )}
				    <a href={'/user/preferences/set/admin_enrolmentlist_sortorder/asc/dcdshop/enrolments/'|ezurl}>{'Ascending'|i18n( 'design/admin/shop/orderlist' )}</a>
				    <span class="current">{'Descending'|i18n( 'design/admin/shop/orderlist' )}</span>
				{else}
				    <span class="current">{'Ascending'|i18n( 'design/admin/shop/orderlist' )}</span>
				    <a href={'/user/preferences/set/admin_enrolmentlist_sortorder/desc/dcdshop/enrolments/'|ezurl}>{'Descending'|i18n( 'design/admin/shop/orderlist' )}</a>
				{/if
				
				*}
				</p>
				</div>
				
				<div class="float-break"></div>
				</div>
				
				{def $currency = false()
				     $locale = false()
				     $symbol = false()}
				
				


					<table class="table table-bordered" cellspacing="0">
					<tr>
					    <th class="tight"><img src={'toggle-button-16x16.gif'|ezimage} width="16" height="16" alt="{'Invert selection.'|i18n( 'design/admin/shop/orderlist' )}" title="{'Invert selection.'|i18n( 'design/admin/shop/orderlist' )}" onclick="ezjs_toggleCheckboxes( document.orderlist, 'OrderIDArray[]' ); return false;" /></th>
					    <th class="tight">{'Order #'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="wide">{'Billed To'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="tight">{'Course Code'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="wide">{'Session'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="tight">{'Payment Status'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="tight">{'Enrollment Status'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="wide">{'Time of Enrolment'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="tight"></th>
					</tr>
					{foreach $enrolments as $line_number => $enrolment sequence=array( bglight, bgdark ) as $sequence}
						{def $enrolled_amount = get_enrolled_amount($enrolment.order_id)}						
						<tr  class="{$sequence}">
						    <td><input type="checkbox" name="EnrolmentIDArray[]" value="{$enrolment.id}" title="{'Select enrolment for removal.'|i18n( 'design/admin/shop/orderlist' )}" /></td>
						    <td>
					    		<a href={concat( '/shop/orderview/', $enrolment.order_id )|ezurl}>{$enrolment.order_id}</a>
						    </td>
						    <td>
						        <a href={concat( '/shop/customerorderview/', $enrolment.ez_user_id, '/', $enrolment.email )|ezurl}>{first_set($enrolment.email, $enrolment.login)}</a>
						    </td>
						    <td>
								{def $product = fetch('content', 'object', hash('object_id', $enrolment.product_id) )}
								{if $enrolment.course_code}
									{$enrolment.course_code}
								{else}
						    		{$product.data_map.course_code.content}
						    	{/if}
						    </td>
						    <td>
								<a href={concat( '/content/view/full/', $product.main_node_id )|ezurl}>{$product.name}</a>
							</td>
							<td>
								{$enrolment.order.status_name}
							</td>

							<td>
								{if $enrolment.enrolment_status}
									{'Closed'|i18n( 'design/admin/shop/orderlist' )}
								{else}
									{'Open'|i18n( 'design/admin/shop/orderlist' )}
								{/if}
							</td>
						    <td>{$enrolment.published|l10n( shortdatetime )}</td>
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
											<div class="span2">{$enrolment.order_id}</div>
											<div class="span2"><h5 style="margin: 0;">{'Time Requested'|i18n( 'design/admin/shop/orderlist' )}:</h5></div>
											<div class="span2">{$enrolment.order.created|l10n( shortdatetime )}</div>
											<div class="span2"><h5 style="margin: 0;">{'Order Status'|i18n( 'design/admin/shop/orderlist' )}:</h5></div>
											<div class="span2">{$enrolment.order.status_name}</div>
										</div>
										<div class="row">
											<div class="span2"><h5 style="margin: 0;">{'Payment Amount (NET)'|i18n( 'design/admin/shop/orderlist' )}:</h5></div>
											<div class="span2">{$enrolment.order.product_items.$line_number.price_ex_vat}</div>
											<div class="span2"><h5 style="margin: 0;">{'Payment Amount (TAX)'|i18n( 'design/admin/shop/orderlist' )}:</h5></div>
											<div class="span2">
												{def $tax_amount = sub( $enrolment.order.product_items.$line_number.price_inc_vat, $enrolment.order.product_items.$line_number.price_ex_vat )}
												{$tax_amount}
												{undef $tax_amount}
											</div>
											<div class="span2"><h5 style="margin: 0;">{'Payment Amount (TOTAL)'|i18n( 'design/admin/shop/orderlist' )}:</h5></div>
											<div class="span2">{$enrolment.order.product_items.$line_number.price_inc_vat}</div>
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
											<div class="span2">{$product.data_map.title.content}</div>
											<div class="span2"><h5 style="margin: 0;">{'Course Code'|i18n( 'design/admin/shop/orderlist' )}:</h5></div>
											<div class="span2">
											{if $enrolment.course_code}
												{$enrolment.course_code}
											{else}
									    		{first_set($product.data_map.course_code.content, '')}
									    	{/if}
										    </div>
											<div class="span2"><h5 style="margin: 0;">{'Course Type'|i18n( 'design/admin/shop/orderlist' )}:</h5></div>
											<div class="span2">
												{if and($product.data_map.course_code.has_content, is_set($enrolment.course_code))}
													{if or( eq( $product.data_map.course_code.content|extract( 0, 1), 'C'), 
														eq( $enrolment.course_code|extract( 0, 1), 'C'))}
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
												eq( $enrolment.course_code|extract( 0, 1), 'C'))}
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
										{'Student Information'|i18n( 'design/admin/shop/orderlist' )}
										<small>{'Detailed Information about the Student'|i18n( 'design/admin/shop/orderlist' )}</small>
									</h2>
									<div style="margin: 0px auto; width: 970px;">
										<div class="row">
											<div class="span2"><h5 style="margin: 0;">{'First Name'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}:</h5></div>
											<div class="span2">{$enrolment.account_user_id.firstname}</div>
											<div class="span2"><h5 style="margin: 0;">{'Last Name'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}:</h5></div>
											<div class="span2">{$enrolment.account_user_id.lastname}</div>
											<div class="span2"><h5 style="margin: 0;">{'Email'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}:</h5></div>
											<div class="span2">{$enrolment.account_user_id.email}</div>
										</div>
										<div class="row">
									
											<div class="span4">
												<fieldset>
													<legend><h5>{'Address'|i18n( 'dcdshop/manageorder' )}:</h5></legend>
													<table class="list" cellspacing="0">
														<tbody>
															<tr>
																<td>{'Street'|i18n( 'design/ezwebin/shop/userregister')}</td>
																<td>{$enrolment.account_user_id.Address1}</td>
															</tr>
															{if ne( $enrolment.account_user_id.Address2, '' )}
															<tr>
																<td>{'Address'|i18n( 'design/ezwebin/shop/userregister')} 2</td>
																<td>{$enrolment.account_user_id.Address2}</td>
															</tr>
															{/if}
															{if ne( $enrolment.account_user_id.Address3, '' )}
															<tr>
																<td>{'Address'|i18n( 'design/ezwebin/shop/userregister')} 3</td>
																<td>{$enrolment.account_user_id.Address3}</td>
															</tr>
															{/if}
															{if ne( $enrolment.account_user_id.city, '' )}
															<tr>
																<td>{'City'|i18n( 'design/ezwebin/shop/userregister')}</td>
																<td>{$enrolment.account_user_id.city}</td>
															</tr>
															{/if}
															{if ne( $enrolment.account_user_id.prov, '' )}
															<tr>
																<td>{'Province'|i18n( 'design/ezwebin/shop/userregister')}</td>
																<td>{$enrolment.account_user_id.prov}</td>
															</tr>
															{/if}
															<tr>
																<td>{'Country/Region'|i18n( 'design/ezwebin/shop/userregister')}</td>
																<td>{$enrolment.account_user_id.country}</td>
															</tr>
															<tr>
																<td>{'Zip/Postal Code'|i18n( 'design/ezwebin/shop/userregister')}</td>
																<td>{$enrolment.account_user_id.Zip}</td>
															</tr>
														</tbody>
													</table>
												</fieldset>
											</div>
											<div class="span2"><h5 style="margin: 0;">{'Telephone Number'|i18n( 'design/admin/shop/accounthandlers/html/ez' )}:</h5></div>
											<div class="span2">{$enrolment.account_user_id.mobile}<br />{$enrolment.account_user_id.telephone2}</div>
										</div>
									</div>
								</div>
							</td>
						</tr>
						{undef $product}
						{undef $enrolled_amount}
					{/foreach}
					</table>
				{else}
					<div class="block">
					<p>{'The enrolment list is empty.'|i18n( 'design/admin/shop/orderlist' )}</p>
					</div>
				{/if}

			<div class="context-toolbar">
			{include name=navigator
			         uri='design:navigator/google.tpl'
			         page_uri='/shop/orderlist'
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
				{if $order_list}
				    <input class="button" type="submit" name="ArchiveButton" value="{'Archive selected'|i18n( 'design/admin/shop/orderlist' )}" title="{'Archive selected orders.'|i18n( 'design/admin/shop/orderlist' )}" />
				{else}
				    <input class="button-disabled" type="submit" name="ArchiveButton" value="{'Archive selected'|i18n( 'design/admin/shop/orderlist' )}" disabled="disabled" />
				{/if}
				</div>
				<div class="button-right">
				    {if and( $order_list|count|gt( 0 ), $can_apply )}
				    <input class="button" type="submit" name="SaveOrderStatusButton" value="{'Apply changes'|i18n( 'design/admin/shop/orderlist' )}" title="{'Click this button to store changes if you have modified any of the fields above.'|i18n( 'design/admin/shop/orderlist' )}" />
				    {else}
				    <input class="button-disabled" type="submit" name="SaveOrderStatusButton" value="{'Apply changes'|i18n( 'design/admin/shop/orderlist' )}" disabled="disabled" />
				    {/if}
				</div>
				<div class="break"></div>
			
			</div>

		</div>
	</div>
</div>
