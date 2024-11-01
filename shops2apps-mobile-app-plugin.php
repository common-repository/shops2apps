<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
Plugin Name: Shops2Apps Mobile App Plugin
Description: The Best Tool for transferring to publish iOs and Android mobile apps for your site or store. Start now for FREE.
Version: 0.1.0
Author: Shops2Apps
Author URI: http://shops2apps.com
*/

if ( is_admin() ) {
	// fired it : only for admin
	require_once( 'class.shops2apps-mobile-app.php' );
	require_once( 'class.shops2apps-mobile-app-constant.php' );
	require_once( 'class.shops2apps-mobile-app-util.php' );
	require_once( 'class.shops2apps-mobile-app-ajax.php' );

	if ( class_exists( 'Shops2AppsMobileApp', false ) ) {
		if ( class_exists( 'Shops2AppsMobileAppUtil', false ) ) {
			$s2aUtil = new Shops2AppsMobileAppUtil();
		}

		$shops2AppsMobileApp = new Shops2AppsMobileApp();
		$shops2AppsMobileApp->init();

		$shops2AppsMobileAppAjax = new Shops2AppsMobileAppAjax();
		$shops2AppsMobileAppAjax->registerAjax();
	}
}

register_activation_hook( __FILE__, array( 'Shops2AppsMobileApp', 'register_register_activation_hook' ) );