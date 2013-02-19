<!doctype html>
<head>
    <title>{'DCProfessional Development :: Admin Notification | Redeemed Voucher'|i18n('dcdpro/email/redeemed_voucher_notification')}</title>
    <meta charset="utf-8">
</head>

<body>
    <div id="main">
        <div id="container">
            <h4 style="">{'To all Admin Recipients:'|i18n('dcdpro/email/redeemed_voucher_notification')}</h4>

            <p>{'This is to inform you that voucher'|i18n('dcdpro/email/redeemed_voucher_notification')} <b>{$VOUCHER_CODE}</b> {'has been successfully redeemed by:'|i18n('dcdpro/email/redeemed_voucher_notification')}</p><br />

            <table>
                <tbody>
                    <tr><td><label><b>{'Source:'|i18n('dcdpro/email/redeemed_voucher_notification')}</b></label> {$SOURCE_WEBSITE}</td></tr>
					<tr><td><label><b>{'First Name:'|i18n('dcdpro/email/redeemed_voucher_notification')}</b></label> {$FIRST_NAME}</td></tr>
                    <tr><td><label><b>{'Last Name:'|i18n('dcdpro/email/redeemed_voucher_notification')}</b></label> {$LAST_NAME}</td></tr>
                    <tr><td><label><b>{'Email:'|i18n('dcdpro/email/redeemed_voucher_notification')}</b></label> {$EMAIL}</td></tr>
                    <tr><td><label><b>{'Telephone:'|i18n('dcdpro/email/redeemed_voucher_notification')}</b></label> {$PHONE_NUMBER}</td></tr>
                    <tr><td><label><b>{'Group:'|i18n('dcdpro/email/redeemed_voucher_notification')}</b></label> {$USER_GROUP}</td></tr>
                </tbody>
            </table><br />

            <hr />

            <p>{'They have been enrolled into the following:'|i18n('dcdpro/email/redeemed_voucher_notification')}

            <table>
            	<tbody>
            		<tr><td><label><b>{'Course Name:'|i18n('dcdpro/email/redeemed_voucher_notification')}</b></label> {$COURSE_NAME}</td></tr>
            		<tr><td><label><b>{'Type:'|i18n('dcdpro/email/redeemed_voucher_notification')}</b></label> {$COURSE_TYPE}</td></tr>
                    {$COURSE_DATE}
                    {$COURSE_COUNTRY}
                    {$COURSE_VENUE}
            	</tbody>
            </table>

            <hr />

            <p>
                {'Best regards,'|i18n('dcdpro/email/redeemed_voucher_notification')} <br />
                {'DC Professional Development Team'|i18n('dcdpro/email/redeemed_voucher_notification')}
            </p>
        </div>
    </div>
</body>
</html>