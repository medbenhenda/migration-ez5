<!doctype html>
<head>
        <title>{'DCProfessional Development :: Classroom Enrollment & Registration Confirmation'|i18n('dcpro/email/admin_classroom_confirmation')}</title>
        <meta charset="utf-8" />
</head>
<body>
        <div id="main">
            <div id="container">
                <h4 style="">{'Dear'|i18n('dcpro/email/admin_classroom_confirmation')} {$FIRST_NAME} {$LAST_NAME},</h4>
                <p>{'We are pleased to confirm that you have successfully been enrolled in:'|i18n('dcpro/email/admin_classroom_confirmation')}</p><br />

				{def $event = fetch('content', 'node', hash('node_id', $product_id) )} 
				{def $course = fetch('content', 'node', hash('node_id', $event.data_map.course.content.relation_list.0.node_id ))}
				
                <table>
	                <tbody>
	                    <tr><td><label><b>{'Course:'|i18n('dcpro/email/admin_classroom_confirmation')}</b></label> {$course.name}</td></tr>
	                    <tr><td><label><b>{'Location:'|i18n('dcpro/email/admin_classroom_confirmation')}</b></label> {$event.data_map.venue.content} - {$event.data_map.city.content}</td></tr>
	                    <tr><td><label><b>{'Date:'|i18n('dcpro/email/admin_classroom_confirmation')}</b></label> {$event.data_map.from_time.content.timestamp|datetime('custom', '%d/%m/%y')}</td></tr>
	                    <tr><td><label><b>{'Duration:'|i18n('dcpro/email/admin_classroom_confirmation')}</b></label> {$event.data_map.duration.content|div(24)|ceil} {'Days'|i18n('dcdpro/course')}</td></tr>
	                </tbody>
                </table><br />

                <p>{'You will now be able to view full details pertaining to this course when you login to your student account on the DCProfessional Learning Management Platform at'|i18n('dcpro/email/admin_classroom_confirmation')} <a href="{$BOOKING_URL}">{'myDCP Portal'|i18n('dcpro/email/admin_classroom_confirmation')}</a>
                    {'You will be sent automated messages to remind you of the course date and any preparation work you need to do in advance.'|i18n('dcpro/email/admin_classroom_confirmation')}
                    {'Once you have completed the course and passed any necessary examinations, you will be able to print certificates when you login to your student account &#45; full details can be viewed online.'|i18n('dcpro/email/admin_classroom_confirmation')}
                </p><br />
                
                {def $company = fetch('content', 'node', hash( 'node_id', $company_id	))}
				{foreach $companies as $obj}
						{if eq($obj.data_map.country.sort_key_string, $event.data_map.country.sort_key_string)} 
							{set $company = $obj}
							{break}
						{/if}
				{/foreach} 
                
                <p>{'If you require further assistance please contact'|i18n('dcpro/email/admin_classroom_confirmation')} {$company.data_map.regional_manager_name.content}:</p>
                <p>
                {$company.data_map.regional_manager_email.content}<br />
                {$company.data_map.regional_manager_phone.content}<br />
                </p><br />

                <p>{'Thank you for choosing DCProfessional Development for your specialist data center training requirements. We look forward to seeing you in'|i18n('dcpro/email/admin_classroom_confirmation')} {$event.data_map.city.content} {'and thank you for your interest in DCProfessional Development.'|i18n('dcpro/email/admin_classroom_confirmation')}</p><br />

                <p>
                	{'Best regards,'|i18n('dcpro/email/admin_classroom_confirmation')}<br />
                        {'DC Professional Development Team'|i18n('dcpro/email/admin_classroom_confirmation')}
                </p>
            </div>
        </div>
</body>
</html>