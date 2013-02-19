<!doctype html>
<head>
    <title>{'DCProfessional Development :: Email Confirmation'|i18n('dcdpro/email/email_confirmation')}</title>
    <meta charset="utf-8">
</head>

<body>
    <div id="main">
        <div id="container">
            <h4 style="">{'Dear'|i18n('dcdpro/email/email_confirmation')} {$FIRST_NAME},</h4>

            <p>{'You have successfully registered for web portal access.'|i18n('dcdpro/email/email_confirmation')}</p><br />
            <p>{'Click on the following link to finalize the registration process and begin viewing courses:'|i18n('dcdpro/email/email_confirmation')} <a href='{$MOODLE_URL}{$CONFIRMATION_CODE}'>{'myDCP Portal'|i18n('dcdpro/email/email_confirmation')}</a></p><br />
          	<p>{'Your account information is displayed below, please save them in your records:'|i18n('dcdpro/email/email_confirmation')}</p><br />

            <table>
            	<tbody>
            		<tr><td><label><b>{'Username:'|i18n('dcdpro/email/email_confirmation')}</b></label> {$USER_NAME}</td></tr>
            		<tr><td><label><b>{'Password:'|i18n('dcdpro/email/email_confirmation')}</b></label> {$PASSWORD}</td></tr>
            	</tbody>
            </table><br />

            <p>
                {'Best regards,'|i18n('dcdpro/email/email_confirmation')} <br />
                {'DC Professional Development Team'|i18n('dcdpro/email/email_confirmation')}
            </p>
        </div>
    </div>
</body>
</html>