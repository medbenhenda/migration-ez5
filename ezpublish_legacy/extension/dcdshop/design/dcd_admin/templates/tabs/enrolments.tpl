    {if array('event', 'course')|contains( $node.class_identifier )}
 
    {def $enrolled_list = get_product_enrolments( $node.contentobject_id )}
    <h1 class="context-title">( {count($enrolled_list)} ) {"Enrolments"|i18n('dcd_admin/tabs/enrolments')}</h1>
     <table cellspacing="0" class="list" id="tab-enrolments-list">
		<tbody>
			<tr>
			    <th>{"Enrolment ID"|i18n('dcd_admin/tabs/enrolments')}</th>
			    <th>{"LMS User"|i18n('dcd_admin/tabs/enrolments')}</th>
			    <th>{"Brochure User"|i18n('dcd_admin/tabs/enrolments')}</th>
			    <th>{"Billing User"|i18n('dcd_admin/tabs/enrolments')}</th>
			    <th>{"Order ID"|i18n('dcd_admin/tabs/enrolments')}</th>
			    <th>{"Date of enrolment"|i18n('dcd_admin/tabs/enrolments')}</th>
			    <th>{"Status"|i18n('dcd_admin/tabs/enrolments')}</th>
			</tr>
			{foreach $enrolled_list as $id => $enrolment}
	    	<tr>
	    		<td>
	    			{$id|sum(1)}
	    	 	</td>
	    	 	<td>
	    	 		{def $moodle_user = moodle_user( $enrolment.account_user_id )}
	    	 		<a href="http://my.dc-professional.com/user/profile.php?id={$enrolment.account_user_id}" >{$moodle_user.firstname} {$moodle_user.lastname}</a>
	    	 		<br/><a href="mailto:{$moodle_user.email}" >{$moodle_user.email}</a>
	    	 	</td>
	    	 	<td>
	    	 		{$moodle_user.Co}
	    	 		<br/>{$moodle_user.Pos}
	    	 		<br/>{$moodle_user.Address1}
	    	 		<br/>{$moodle_user.Address2}	    	 		
	    	 		<br/>{$moodle_user.city}
	    	 		<br/>{$moodle_user.country}
	    	 		<br/>{$moodle_user.Zip}
	    	 		<br/>{$moodle_user.mobile}
	    	 		<br/>{$moodle_user.telephone2}
	    	 	</td>
	    	 	<td>
	    	 		<a href={concat( $enrolment.ez_user_id )|ezurl} title="{$enrolment.email|wash}">{$enrolment.email}</a>
	    	 	</td>
	    	 	<td>
	    	 		<a href={concat("shop/orderview/" , $enrolment.order_id )|ezurl} title="{"Order"|i18n('dcd_admin/tabs/enrolments')} {$enrolment.order_id}">{$enrolment.order_id}</a>
	    	 	</td>
	    	 	<td>
	    	 		{$enrolment.published|datetime('custom', '%d/%m/%y')}
	    	 	</td>
	    	 	<td>
	    	 		{$enrolment.status}
	    	 	</td>
	    	 </tr>
	    	 {/foreach}
    	 </tbody>
    </table>
     {else}
    
    	<h1 class="context-title">{"No enrolments available for this type of object"|i18n('dcd_admin/tabs/enrolments')}</h1>
    
    {/if}