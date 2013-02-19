    {if array('event', 'package', 'course', 'product')|contains( $node.class_identifier )}
    
    {def $orders = get_product_orders( $node.contentobject_id )}
    
    <h1 class="context-title">( {count($orders)} ) {"Orders"|i18n('dcd_admin/tabs/enrolments')}</h1>
    
     <table cellspacing="0" class="list" id="tab-enrolments-list">
		<tbody>
			<tr>
				<th> </th>
			    <th>{"Order ID"|i18n('dcd_admin/tabs/enrolments')}</th>
			    <th>{"Billing User"|i18n('dcd_admin/tabs/enrolments')}</th>
			    <th>{"Billing Address"|i18n('dcd_admin/tabs/enrolments')}</th>
			    <th>{"Order"|i18n('dcd_admin/tabs/enrolments')}</th>
			    <th>{"Quantity"|i18n('dcd_admin/tabs/enrolments')}</th>
			    <th>{"Price"|i18n('dcd_admin/tabs/enrolments')}</th>
			    <th>{"Discount"|i18n('dcd_admin/tabs/enrolments')}</th>
			    <th>{"VAT"|i18n('dcd_admin/tabs/enrolments')}</th>
			    <th>{"Date of order"|i18n('dcd_admin/tabs/enrolments')}</th>
			    <th>{"Status"|i18n('dcd_admin/tabs/enrolments')}</th>
			</tr>
			{foreach $orders as $id => $order}
			{if $order.order_nr|ne(0)}
		    	<tr>
		    		<td>
		    			{$id|sum(1)}
		    	 	</td>
		    	 	<td>
		    	 		{def $user_info = xml_to_array($order.data_text_1)}
		    	 		{$user_info.['first-name']} {$user_info.['last-name']}
		    	 	
		    	 	</td>
		    	 	<td>
		    	 		<br />{$user_info.['street1']}
		    	 		<br />{$user_info.['street2']}
		    	 		<br />{$user_info.['zip']}
		    	 		<br />{$user_info.['place']}
		    	 		<br />{$user_info.['country']}
		    	 	</td>
		    	 	<td>
		    	 		<a href={concat( $order.ez_user_id )|ezurl} title="{$order.email|wash}">{$user_info.['email']}</a>
		    	 	</td>
		    	 	{undef $user_info}
		    	 	<td>
		    	 		<a href={concat("shop/orderview/" , $order.id )|ezurl} title="{"Order"|i18n('dcd_admin/tabs/enrolments')} #{$order.order_nr}">#{$order.order_nr}</a>
		    	 	</td>
		    	 	<td>
		    	 		{$order.item_count}
		    	 	</td>
		    	 	<td>
		    	 		{$order.price}
		    	 	</td>
		    	 	<td>
		    	 		{$order.discount} %
		    	 	</td>
		    	 	<td>
		    	 		{$order.vat_value}
		    	 	</td>	    	 	
		    	 	<td>
		    	 		{$order.created|datetime('custom', '%d/%m/%y')}
		    	 	</td>
		    	 	<td>
		    	 		{def $status_name = status_name($order.status_id)}
		    	 		
		    	 		{$status_name.name}
		    	 		
		    	 		{undef $status_name}
		    	 	</td>
		    	 </tr>
		    	{/if}
	    	 {/foreach}
    	 </tbody>
    </table>
    {else}
    
    	<h1 class="context-title">{"No orders available for this type of object"|i18n('dcd_admin/tabs/enrolments')}</h1>
    
    {/if}