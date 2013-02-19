<?php /* #?ini charset="utf-8"?

[General]
# It could be email or remote_id
UniqueUserIdentifier=email

OAuth2[facebook]=nxcSocialNetworksOAuth2Facebook
OAuth2[twitter]=nxcSocialNetworksOAuth2Twitter
OAuth2[linkedin]=nxcSocialNetworksOAuth2LinkedIn
OAuth2[google]=nxcSocialNetworksOAuth2Google

LoginHandlers[facebook]=nxcSocialNetworksLoginHanlderFacebook
LoginHandlers[twitter]=nxcSocialNetworksLoginHanlderTwitter
LoginHandlers[linkedin]=nxcSocialNetworksLoginHanlderLinkedIn
LoginHandlers[google]=nxcSocialNetworksLoginHanlderGoogle

PublishHandlers[facebook]=nxcSocialNetworksPublishHanlderFacebook
PublishHandlers[twitter]=nxcSocialNetworksPublishHanlderTwitter
PublishHandlers[linkedin]=nxcSocialNetworksPublishHanlderLinkedIn

# New application can be created at https://developers.facebook.com/apps
# Set the following application settings
# - Basic info > App Domains = yoursite.com
# - Website with Facebook Login > Site URL = yoursite.com
[FacebookApplication]
Key=446502418740218
Secret=3ea551d778f131f649d3a2844da2e839

# New application can be created at https://dev.twitter.com/apps/new
# Set the following application settings
# - Access level = Read and write
[TwitterApplication]
Key=cRACdvBvd74Bw4gtqtlQ
Secret=jD81UH24wXP9f8UscgQbqaqVzbHIxKagadb5BZCwcg

# New application can be created at https://www.linkedin.com/secure/developer
# Set the following application settings
# - Application Info > Website URL = yoursite.com
[LinkedInApplication]
Key=54b5bpmfccwh
Secret=AcfsXn0pKjntiXzV

$ 1. Go to https://code.google.com/apis/console > Services and enable "Google+ API"
# 2. Go to https://code.google.com/apis/console > API Access  and click on "Create an OAuth2 client ID"
# Set the following application setting
# - Client ID for web applications > Redirect URIs:
# http://path_to_your_ezp_admin_siteaccess/nxc_social_network_token/get_access_token/google
# http://yoursite.com/nxc_social_network_login/callback/google ogle
[GoogleApplication]
Key=73620309723-2mhrhgjd76qbe40ovtv1ao4s63b0c606.apps.googleusercontent.com
Secret=3qzEo880hnTuQEeZKCJ9Y9Ra

*/ ?>
