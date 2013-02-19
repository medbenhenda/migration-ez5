<div class="context-block">
	<div class="box-header">
		<div class="box-ml">
			<h1 class="context-title">{'Manage Vouchers'|i18n( 'dcdshop/vouchers')}</h1>
			<div class="header-mainline">			
				<small>{'List of Vouchers, Enter search values or Select a course'|i18n( 'dcdshop/vouchers' )}</small>
			</div>
		</div>
	</div>

	<div class="box-ml">

	    <h2 class="context-title">{'Create New Vouchers'|i18n( 'dcdshop/vouchers')}</h2>
		
		<div class="box-mr" id="new_voucher_form" >
			<form action={"dcdshop/vouchers"|ezurl} id="voucherGen" method="post" name="voucherGen">
                <div class="validationErrors" style="text-align: center;"></div>
                
                <table cellspacing="0" class="list">
					<tbody>
						<tr>
						    <th>{"Invoice #:"|i18n( 'dcdshop/vouchers' )} <span style="color: red;"> *</span></th>
						    <th>{"Client Manager's Email"|i18n( 'dcdshop/vouchers' )}</th>
						    <th>{"DCD Staff Email"|i18n( 'dcdshop/vouchers' )}<span style="color: red;"> *</span></th>
						    <th>{"Group"|i18n( 'dcdshop/vouchers' )}<span style="color: red;"> *</span></th>
						    <th>{"Type:"|i18n( 'dcdshop/vouchers' )}<span style="color: red;"> *</span></th>
								<!-- Online Div
				                    <div id="onlineDiv" style="display:none;">
									   <h2>Quantity:</h2>
									   <input type="text" id="qty" name="quantity"/><br />
				                    </div> 
			                    -->
						    <th>{"Quantity:"|i18n( 'dcdshop/vouchers' )}<span style="color: red;"> *</span></th>
						    <th>{"Expiration Date:"|i18n( 'dcdshop/vouchers' )}<span style="color: red;"> *</span></th>
						    <th>{"Client Manager's Email"|i18n( 'dcdshop/vouchers' )}</th>
						    <th></th>
						</tr>
						    <tr class="bglight">
						    <td><input type="text" id="invoiceNo" name="invoice" class="text required" /></td>
						    <td><input type="text" id="managerEmail" class="text" name="managerEmail" /></td>
						    <td><input type="text" id="dcdEmail" class="text required" name="dcdEmail" /></td>
						    <td><input type="text" id="groupName" class="text required" name="group" /></td>
						    <td>
								<select class="text required" id="type" name="type">
									<option value="">{"Select course type..."|i18n( 'dcdshop/vouchers' )}</option>
									<option value="online">{"Online"|i18n( 'dcdshop/vouchers' )}</option>
									<option id="classroom" value="classroom">{"Classroom"|i18n( 'dcdshop/vouchers' )}</option>
								</select>
							</td>
						    <td>
							<!-- ClassroomTable Div
								<div style="display:none;" id="classroomTable">
			                        <h3>Classroom Courses: <span style="color: red;"> *</span></h3>
			                        <select class="text" id="classroomSelection" name="classroomID">
			            				<option value="">Select course...</option>
			            				{foreach $courseList as $course}
							         		{if $course.courseid|ne(0)}
							         			<option value="{$course.courseid}" {if eq( $course.courseid, $courseID )}selected="selected"{/if}>{$course.title}</option>
							         		{/if}
										{/foreach}		
			            			</select>
								</div>
							-->
								<input type="text" class="text" name="quantity" id="qty">
							</td>
						    <td>
						    	{def $current_time = currentdate()}
						    	<label for="expMonth" style="float:left;">{"Month"|i18n('dcdshop/vouchers' )}</label>
		                          <select name="expMonth" id="expMonth" style="float:left;">
		                            {for 1 to 12 as $month}
		                            	<option {if $current_time|datetime('custom', '%n')|eq($month)}selected="selected"{/if} value"{$month}">{$month}</option>
		                            {/for}
									</select>
		                          <label for="expDay" style="float:left;clear:both;">{"Day"|i18n('dcdshop/vouchers' )}</label>
		                          <select name="expDay" id="expDay" style="float:left;">
	                            	{for 1 to 31 as $day}
	                            		<option {if $current_time|datetime('custom', '%j')|eq($day)}selected="selected"{/if} value="{$day}">{$day}</option>
	                            	{/for}
		                           </select>
		                          <label for="expYear" style="float:left;clear:both;">{"Year"|i18n('dcdshop/vouchers' )}</label>
		                          <select name="expYear" id="expYear" style="float:left;">
		                            {for $current_time|datetime('custom', '%Y') to $current_time|datetime('custom', '%Y')|sum(5) as $year}
		                            	<option {if $current_time|datetime('custom', '%Y')|eq($year)}selected="selected"{/if} value="{$year}">{$year}</option>
		                            {/for}
		                          </select>
						    </td>
						    <td>
						    	<input type="button" id="generateKeysButton" onclick="generateKeys()" value="{"Generate Vouchers"|i18n( 'dcdshop/vouchers' )}">
						    </td>
						</tr>
						<tr id="vouchers_zone" style="display:none;">
							<td colspan="7" style="">
								<textarea name="voucherCode" id="vouchers" style="overflow: auto;width: 30%; height: 120px;"></textarea>
							</td>
							<td>
                        		<input type="submit" value="Submit" name="GenerateVoucherButton">
                        	</td>
						</tr>
					</tbody>
				</table>
                   
                    <div >
    					
                    </div>
                    <!-- View of Generated Vouchers -->
                    <div id="Generated_vouchers" style="display:none;">
                        <h2>List of Generated Vouchers:</h2>
                    </div>
			</form>
		</div>
	</div>
</div>
 <br /><br />
 <div class="context-block">
	<div class="box-ml">
		<h2 class="context-title">{'Vouchers list'|i18n( 'dcdshop/vouchers')} ( {$vouchers_count} )</h2>
	
		<div class="box-mr">
			
			<div class="box-content">
			    <div class="button-left">
			    	<form action={"dcdshop/vouchers"|ezurl} method="post" >
				       
				       <input name="TextFilter" type="text" value="{$textFilter}" placeholder="{"Enter Search Value"|i18n('dcdshop/vouchers')}"/>
				       
				        <select name="CourseFilter" title="{'Select course.'|i18n( 'dcdshop/vouchers' )}" >
				         	<option value="0" {if eq( $product_class, "0" )}selected="selected"{/if}>{"-- All --"|i18n('dcdshop/vouchers')}</option>
				         	{foreach $courseList as $course}
				         		{if $course.courseid|ne(0)}
				         			<option value="{$course.courseid}" {if eq( $course.courseid, $courseID )}selected="selected"{/if}>{$course.title}</option>
				         		{/if}
							{/foreach}			         					   
				        </select>
	 
				         <input class="button" type="submit" name="ShowProductsButton" value="{'Filter vouchers'|i18n( 'dcdshop/vouchers' )}" title="{'Filter products'|i18n( 'dcdshop/vouchers' )}" />
			        </form>
			      
			    </div>
			</div>			
			<div class="box-content">
				{if count($vouchers)|gt(0)}
				<div class="context-toolbar">
				
					<div class="button-right">
						<p class="table-preferences">
							{if eq( ezpreference( 'vouchers_sortorder' ), 'desc' )}
							    <a href={'/user/preferences/set/vouchers_sortorder/asc/dcdshop/vouchers/'|ezurl}>{'Ascending'|i18n( 'design/admin/shop/orderlist' )}</a>
							    <span class="current">{'Descending'|i18n( 'design/admin/shop/orderlist' )}</span>
							{else}
							    <span class="current">{'Ascending'|i18n( 'design/admin/shop/orderlist' )}</span>
							    <a href={'/user/preferences/set/vouchers_sortorder/desc/dcdshop/vouchers/'|ezurl}>{'Descending'|i18n( 'design/admin/shop/orderlist' )}</a>
							{/if}
						</p>
					</div>				
					<div class="button-right">
						<p class="table-preferences">
							{if eq( ezpreference( 'vouchers_sortfield' ), 'user_name' )}
							    <a href={'/user/preferences/set/vouchers_sortfield/time/dcdshop/vouchers/'|ezurl}>{'Time'|i18n( 'design/admin/shop/orderlist' )}</a>
							    <span class="current">{'Customer'|i18n( 'design/admin/shop/orderlist' )}</span>
							{else}
							    <span class="current">{'Time'|i18n( 'design/admin/shop/orderlist' )}</span>
							    <a href={'/user/preferences/set/vouchers_sortfield/user_name/dcdshop/vouchers/'|ezurl}>{'Customer'|i18n( 'design/admin/shop/orderlist' )}</a>
							{/if}
						</p>
					</div>
					
					<div class="button-right">
					    <p class="table-preferences">
					    {switch match=$limit}
					
					        {case match=25}
					        <a href={'/user/preferences/set/vouchers_limit/10'|ezurl} title="{'Show 10 items per page.'|i18n( 'design/admin/shop/productsoverview' )}">10</a>
					        <span class="current">25</span>
					        <a href={'/user/preferences/set/vouchers_limit/50'|ezurl} title="{'Show 50 items per page.'|i18n( 'design/admin/shop/productsoverview' )}">50</a>
					        {/case}
					
					        {case match=50}
					        <a href={'/user/preferences/set/vouchers_limit/10'|ezurl} title="{'Show 10 items per page.'|i18n( 'design/admin/shop/productsoverview' )}">10</a>
					        <a href={'/user/preferences/set/vouchers_limit/25'|ezurl} title="{'Show 25 items per page.'|i18n( 'design/admin/shop/productsoverview' )}">25</a>
					        <span class="current">50</span>
					        {/case}
					
					        {case}
					        <span class="current">10</span>
					        <a href={'/user/preferences/set/vouchers_limit/25'|ezurl} title="{'Show 25 items per page.'|i18n( 'design/admin/shop/productsoverview' )}">25</a>
					        <a href={'/user/preferences/set/vouchers_limit/50'|ezurl} title="{'Show 50 items per page.'|i18n( 'design/admin/shop/productsoverview' )}">50</a>
					        {/case}
					
					        {/switch}
					    </p>
					</div>
					
					<div class="float-break"></div>
				</div>
		
				
					<table class="table table-bordered" cellspacing="0">
					<tr>
					{*     <th class="tight"><img src={'toggle-button-16x16.gif'|ezimage} width="16" height="16" alt="{'Invert selection.'|i18n( 'design/admin/shop/orderlist' )}" title="{'Invert selection.'|i18n( 'design/admin/shop/orderlist' )}" onclick="ezjs_toggleCheckboxes( document.orderlist, 'OrderIDArray[]' ); return false;" /></th> *}
					    <th class="tight">{'Invoice #'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="wide">{'Client Managers Email'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="tight">{'DCD STaff Email'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="wide">{'Group'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="tight">{'Course'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="tight">{'Key'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="tight">{'Redeemed'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="wide">{'Expires'|i18n( 'design/admin/shop/orderlist' )}</th>
					    <th class="wide">{'Date Created'|i18n( 'design/admin/shop/orderlist' )}</th>
					</tr>
					{foreach $vouchers as $line_number => $voucher}
						<tr>
						    <td>
								{$voucher.invoice}
						    </td>
						    <td>
								{$voucher.client_manager_email}
						    </td>
						    <td>
								{$voucher.dcd_staff_email}
						    </td>
						    <td>
								{$voucher.userGroup}
						    </td>
						    <td>
								{$voucher.code}
							</td>
							<td>
								{$voucher.voucher_code}
							</td>
							<td>
								{if $voucher.used}
									{"Yes"|i18n('dcdshop/vouchers')}
								{else}
									{"No"|i18n('dcdshop/vouchers')}
								{/if}	
							</td>
						    <td>
								{$voucher.expDate}	
							</td>
						    <td>
								{$voucher.timecreated}	
							</td>							
						</tr>
					{/foreach}
					</table>
				{else}
					<div class="block">
					<p>{'The Vouchers list is empty.'|i18n( 'dcdshop/vouchers' )}</p>
					</div>
				{/if}


			<div class="context-toolbar">
			{include name=navigator
			         uri='design:navigator/google.tpl'
			         page_uri='/dcdshop/vouchers'
			         item_count=$vouchers_count
			         view_parameters=$view_parameters
			         item_limit=$limit}
			</div>

		</div>
	</div>
</div>