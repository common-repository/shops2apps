<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Shops2AppsMobileApp {

	function __construct() {
	}

	// initialize : plugin function
	function init() {
		add_action( 'admin_init', array( $this, 'register_admin_init' ) );
		add_action( 'admin_menu', array( $this, 'register_admin_menu' ) );
	}

	function action_menu() {
		$page = sanitize_text_field( $_GET['page'] );
		$tab  = isset( $_GET['tab'] ) ? sanitize_text_field( $_GET['tab'] ) : Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES_TAB[ $page ][0];
		$this->render_view( $page, $tab );
	}

	function register_admin_init() {
		// admin only! plugin data
		Shops2AppsMobileAppConstant::set_plugin_data( get_plugin_data( Shops2AppsMobileAppConstant::$PATH_DIR_PLUGIN . 'shops2apps-mobile-app-plugin.php' ) );

		// trigger on plugin page only
		if ( isset( $_GET['page'] ) && in_array( sanitize_text_field( $_GET['page'] ), Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES ) ) {
			// register js scripts
			wp_register_script( 's2a-mobile-app-script', Shops2AppsMobileAppConstant::$PATH_URL_PLUGIN . '/js/s2a-mobile-app.js', array( 'wp-color-picker' ), Shops2AppsMobileAppConstant::$PLUGIN_DATA['Version'], true );
			wp_enqueue_script( 's2a-mobile-app-script' );

			// register css styles
			wp_enqueue_style( 'wp-color-picker' );

			wp_register_style( 'font-awesome', Shops2AppsMobileAppConstant::$PATH_URL_PLUGIN . '/libraries/font-awesome-4.4.0/css/font-awesome.min.css', '', '4.4.0', 'screen' );
			wp_enqueue_style( 'font-awesome' );

			wp_register_style( 's2a-mobile-app-style', Shops2AppsMobileAppConstant::$PATH_URL_PLUGIN . '/css/s2a-mobile-app.css', '', Shops2AppsMobileAppConstant::$PLUGIN_DATA['Version'], 'screen' );
			wp_enqueue_style( 's2a-mobile-app-style' );
		}
	}

	function register_admin_menu() {
		add_menu_page( 'Shops2Apps', 'Shops2Apps', 'manage_options', '#shops2apps', '', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAARCAYAAADdRIy+AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAACxMAAAsTAQCanBgAAAPSSURBVDhPrZN/TFNXFMfvlIFs5Uf73kOyLNkPo9G5LP6x7I9lBnBEA5tMRX5K0EYNiTISTCaL4Nj+cRhHFBnJFmdblUKKG5byo/S9thTaKrYKkyAKyF7fe6W/HhPCiNns8s7ua6px/rNk20m+ue+em/N555x7D3re0obYdMLi2xbf/ncjzGw2QQsLrxr45Ljr35nKGniLYIRsFeNvIGj+t7gbZxx8nbqxeICkhcP/JBXDVcaCSEZopdyLgIFRwur/g7q+BCTjPymfEQz/mdIRuYpM/CFk5NXI5DuEevz78V6d1O+rJi3csZgYoVbF8FeQkvGXkLYAEPbQh1Qfm6kwjFGEfX4f5XoI1FA4M9XCH0nq8+cCwEZJkrZhrcfajvVeLJtnTEnzO5BMJWl+FKuMdD+8QTjCjgwzl5tO8yHUwW1OpKWPznMrw1XOZmi6dw0qRs5Cjv0L2DnyNZyb6fdJUSk/zsMsoRBnyGlw/R7ct+m19wEyZwFSBnnjWlvkTmfg0bfaB6PDn04YIFG7C9411sKqi59AsrYQXry4CxI7i6Hx587fcbYbngJxj7QYNqqieTXpWvQQjogzyRze0TYzN1vsaYaMrgpIxsGqy2Ww1VQHaZdKYt+yXtbuhU10LYwG7597HjgpO54Y7tcHFe4zErqQD8pLpTFt/vEo5JkbIVVX/BQoK9VQDi2TPR45TmHhdyMM0+LsbmN6JV6rUV/k4Kmpu/fW/XQA0nCwDEjVlcCW7hrI6v0cUnRFfwMmXN4DdTd1ARm4eoDb+QR4i7BwVQlmviHHC1+2To8vke1FsZJe0VfGeqbQFoECw4hnYAp8/kbXYahxf/cYV5WOTGxerGScnTfBJNScmVvWtosTsJWpB/R9PuQPfgVX5hjIszaCsr0cl14GL2F4omY3pOtKgeiogBPjeigcPg34Yt5BRi4XkTSnx1mOIdP8Rn3gcZY16G27MGUcJ/SlUO/5IXp9SWK7I9BUaW9aknuaM1AP5UPfwCpNARy/qQ05A3dDB2c1IEWX9yIDn4UI/HDxVEQpG7dO7oNsPQvSngbWCm9274e6SZd4/hexasDn0rxmOQL9PmdHaCXcssV1AmzCrWb5yUjSihqvKUm9bLZ8pS8QVqGXcv4qj14Yj144mQn+WT/zyNgycdWjdp+FDnYExhd8cx97T0EbKw6enrpte999HFqm73hRr1iHjP5ja8z8SdIqGOM54Zl1iAWUdb6asgePUsPz2+NuhP/8thiVCjyRGatmenDIIS639vBTTPNE11if/8G1DJtYQND+mCh59P5fQ+gvNutxOFSbbgwAAAAASUVORK5CYII=', 99.151121 );
		add_submenu_page( '#shops2apps', '', '', 'manage_options', '#shops2apps', '' );

		add_submenu_page( '#shops2apps', 'Build Your Mobile App - Shops2Apps', 'mApp - Panel', 'manage_options', Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES[0], array( $this, 'action_menu' ) );
		add_submenu_page( '#shops2apps', 'Build Your Mobile App - Settings - Shops2Apps', 'mApp - Settings', 'manage_options', Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES[1], array( $this, 'action_menu' ) );
	}

	function render_view( $view, $tab = null ) {
		$view_path = Shops2AppsMobileAppConstant::$PATH_DIR_PLUGIN_VIEWS . $view . ( $tab === null ? '' : '_tab_' . $tab ) . '.php';

		if ( file_exists( $view_path ) ) {
			include $view_path;
		}
	}

	public function register_register_activation_hook() {
		global $s2aUtil;
		$s2aUtil = new Shops2AppsMobileAppUtil();

		// set default value for [page=shops2apps-ma-settings] & [tab=general]
		$config                                    = $s2aUtil->readConfig();
		$config['setting-general']['name']         = get_bloginfo( 'name' );
		$config['setting-general']['description']  = get_bloginfo( 'description' );
		$config['setting-general']['have_account'] = 'No';
		$s2aUtil->writeConfig( $config );
	}


}