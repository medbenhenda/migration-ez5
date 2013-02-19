<!doctype html>
<head>
    <title>{'DCProfessional Development :: Online Enrollment & Registration Confirmation'|i18n('dcpro/email/admin_online_confirmation')}</title>
    <meta charset="utf-8">
</head>
<body>
    <div id="main">
        <div id="container">
            <h4 style="">{'Dear'|i18n('dcpro/email/admin_online_confirmation')} {$FIRST_NAME} {$LAST_NAME},</h4>
       		{def $course = fetch('content', 'node', hash('node_id', $product_id) )} 
            <p>{'We are pleased to confirm your registration in'|i18n('dcpro/email/admin_online_confirmation')} {$course.name}.</p><br />
            <p>
                {'Your online e-learning module(s) are ready for you to start.'|i18n('dcpro/email/admin_online_confirmation')}
                {'Please login to your student account on the  DCProfessional  Learning Management Platform at'|i18n('dcpro/email/admin_online_confirmation')} <a href="{$BOOKING_URL}">{'myDCP Portal'|i18n('dcpro/email/admin_online_confirmation')}</a>
                {'Once you have completed the course and passed the necessary examinations/course work, you will be able to print certificates from your student account.'|i18n('dcpro/email/admin_online_confirmation')}
            </p><br />
                {def $company = fetch('content', 'node', hash( 'node_id', $company_id	))}
				{foreach $companies as $obj}
						{if eq($obj.data_map.country.sort_key_string, $event.data_map.country.sort_key_string)} 
							{set $company = $obj}
							{break}
						{/if}
				{/foreach} 
            <p>
                {'If you require further assistance please contact'|i18n('dcpro/email/admin_online_confirmation')} {$company.data_map.regional_manager_name.content}:
            </p><br />
            <p>
                {$company.data_map.regional_manager_email.content}<br />
                {$company.data_map.regional_manager_phone.content}<br />
            </p><br />
            <p>
                {'Thank you for choosing DCProfessional Development for your specialist data center training requirements. We hope you find the course valuable.'|i18n('dcpro/email/admin_online_confirmation')}
            </p><br />
            <p>
                {'Best regards,'|i18n('dcpro/email/admin_online_confirmation')}
                {'DC Professional Development Team'|i18n('dcpro/email/admin_online_confirmation')}
            </p>
        </div>
    </div>
</body>
</html>