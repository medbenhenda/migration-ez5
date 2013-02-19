<?php
/**
 * @package nxcSocialNetworks
 * @class   nxcSocialNetworksLoginHanlderLinkedIn
 * @author  Serhey Dolgushev <serhey.dolgushev@nxc.no>
 * @date    16 Sep 2012
 **/

class nxcSocialNetworksLoginHanlderLinkedIn extends nxcSocialNetworksLoginHanlder
{
	private $profile = null;

	protected function __construct() {
		parent::__construct();

		$this->OAunth2Connection = nxcSocialNetworksOAuth2::getInstanceByType( 'linkedin' );
	}

	public function getScopes() {
		return array( 'r_emailaddress' );
	}

	public function getCallbackURL() {
		return '/nxc_social_network_login/callback/linkedin';
	}

	public function getUserRemoteID() {
		$this->OAunth2Connection->getAccessToken();

		$profile = $this->OAunth2Connection->connection->profile( '~:(id,first-name,last-name,picture-url,email-address)' );
		$this->profile = (array) new SimpleXMLElement( $profile['linkedin'] );
		if( isset( $this->profile['id'] ) === false ) {
			throw new Exception( 'Could not get user ID. Refresh the page or try again later.' );
		}

		return 'linkedin_user_' . $this->profile['id'];
	}

	public function getUserData() {
		if( isset( $this->profile['id'] ) === false ) {
			throw new Exception( 'Could not get user ID. Refresh the page or try again later.' );
		}

		$login = 'LinkedInUser_' . $this->profile['id'];
		$email = $this->profile['email-address'];
		if( empty( $email ) ) {
			$email = $this->profile['id'] . '@nospam.linkedin.com';
		}

		$attributes = array(
			'user_account' => self::getUserAccountString( $login, $email ),
			'first_name'   => $this->profile['first-name'],
			'last_name'    => $this->profile['last-name']
		);

		// Downloading user profile image
		if( $this->profile['picture-url'] ) {
			$picture = 'var/cache/linkdedin_profile_' .  $this->profile['id'] . '.jpg';
			$fp = fopen( $picture, 'w' );
			$ch = curl_init( $this->profile['picture-url'] );
			curl_setopt( $ch, CURLOPT_TIMEOUT, 10 );
			curl_setopt( $ch, CURLOPT_FILE, $fp );
			curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
			curl_exec( $ch );
			curl_close( $ch );
			fclose( $fp );
			$attributes['image'] = $picture;
		}

		return $attributes;
	}
}
?>
