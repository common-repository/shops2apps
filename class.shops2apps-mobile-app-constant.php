<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

Class Shops2AppsMobileAppConstant {

	public static $ARRAY_PLUGIN_PAGES = array( 'shops2apps-ma', 'shops2apps-ma-settings' );
	public static $ARRAY_PLUGIN_PAGES_TAB = array(
		'shops2apps-ma'          => array( 'design', 'menu', 'preview', 'publish' ),
		'shops2apps-ma-settings' => array( 'general', 'registration' )
	);

	public static $PATH_DIR_PLUGIN;
	public static $PATH_DIR_PLUGIN_VIEWS;

	public static $PATH_URL_PLUGIN;

	public static $PLUGIN_CONTENT_URL;
	public static $PLUGIN_DATA;
	public static $PLUGIN_URL;

	public static $SUPPORT_MAIL = 'support@shops2apps.com';
	public static $SUPPORT_MAIL_SUBJECT = '[Support][Mobile App Plugin] ';

	public static function init() {
		self::$PATH_DIR_PLUGIN       = plugin_dir_path( __FILE__ );
		self::$PATH_DIR_PLUGIN_VIEWS = self::$PATH_DIR_PLUGIN . 'views/';

		self::$PATH_URL_PLUGIN = plugins_url( '', __FILE__ );

		self::$PLUGIN_CONTENT_URL = content_url( '/plugins/shops2apps-mobile-app-plugin/pages/' );
		self::$PLUGIN_URL         = get_admin_url() . 'admin.php?';
	}

	public static function set_plugin_data( $plugin_data ) {
		self::$PLUGIN_DATA = $plugin_data;
	}

}

Shops2AppsMobileAppConstant::init();