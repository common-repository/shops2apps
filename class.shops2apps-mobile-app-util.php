<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

Class Shops2AppsMobileAppUtil {

	public function generateTabUrl( $pageIndex, $tabIndex = null ) {
		$page = Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES[ $pageIndex ];
		$url  = Shops2AppsMobileAppConstant::$PLUGIN_URL . 'page=' . $page;

		if ( $tabIndex !== null ) {
			$url = $url . '&tab=' . Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES_TAB[ $page ][ $tabIndex ];
		}

		return $url;
	}

	public function isRegistered() {
		$s2aUser = $this->readConfig( 'conf.user.json' );
		if ( ! is_array( $s2aUser ) || ! isset( $s2aUser['user']['api_key'] ) || $s2aUser['user']['api_key'] === '' ) {
			return false;
		} else {
			return true;
		}
	}

	public function readConfig( $filename = 'conf.user-setting.json' ) {
		$config = json_decode( file_get_contents( dirname( __FILE__ ) . '/configs/' . $filename ), true );

		return $config;
	}

	public function writeConfig( $json, $filename = 'conf.user-setting.json' ) {
		file_put_contents( dirname( __FILE__ ) . '/configs/' . $filename, json_encode( $json ) );
	}

	public function in_array_r( $needle, $haystack, $strict = false ) {
		foreach ( $haystack as $item ) {
			if ( ( $strict ? $item === $needle : $item == $needle ) || ( is_array( $item ) && $this->in_array_r( $needle, $item, $strict ) ) ) {
				return true;
			}
		}

		return false;
	}

	public function get_demo_url( $platform, $preview ) {
		foreach ( $preview as $link ) {
			if ( $link[0] === $platform ) {
				return $link[1];
			}
		}

		return '';
	}

}