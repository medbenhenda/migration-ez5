<!doctype html>
<head>
    <title>{'DCProfessional Development :: Email Confirmation'|i18n('dcdpro/email/forgot_password')}</title>
    <meta charset="utf-8">
</head>

<body>
    <div id="main">
        <div id="container">
            <p>{'You are receiving this email as you requested that your password be reset at DC-Professional.com'|i18n('dcdpro/email/forgot_password')}<br /><Br />

			<p>{'Your new temporary password is:'|i18n('dcdpro/email/forgot_password')} {$NEW_PASS}.</p><br />
			<p>{'Please note that passwords are case-sensitive'|i18n('dcdpro/email/forgot_password')}</p><br /><Br />

			<p>{'We recommend that you log in as soon as possible, and change your password.'|i18n('dcdpro/email/forgot_password')}</p><br /><Br />

			<p>{'This password reset request was made by: IP Address:'|i18n('dcdpro/email/forgot_password')} {$REMOTE_IP}</p><br /><Br />

			<p>{'If you believe that this request was not authorised by yourself, please inform DCProfessional Development support immediately at admin@dc-professional.com'|i18n('dcdpro/email/forgot_password')}</p><br /><Br />

			<p>{'The DCProfessional Development Team'|i18n('dcdpro/email/forgot_password')}
        </div>
    </div>
</body>
</html>