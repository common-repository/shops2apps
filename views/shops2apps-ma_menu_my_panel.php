<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $s2aUtil;

if ( ! $s2aUtil->isRegistered() ) {
	echo '<script>jQuery(document).ready(function($){ showCreateAccount(); });</script>';
}
?>
<h1 class="s2a-pull-left">
	<img src="<?php echo Shops2AppsMobileAppConstant::$PATH_URL_PLUGIN . '/images/logo.png' ?>">
</h1>
<div class="s2a-notification-red s2a-pull-right s2a-margin-top">
	<span class="s2a-pull-left s2a-margin-right" style="line-height: 30px;">Design and test your app for free. Choose your plan when you're ready to publish it.</span>
	<a href="http://shops2apps.com/prices/" class="button button-primary button-large" target="_blank">See Pricing &amp; Publish Your App</a>
</div>
<div class="s2a-clearfix"></div>

<h2 class="nav-tab-wrapper">
	<a class="nav-tab <?php echo( ( sanitize_text_field( $_GET['tab'] ) === '' || sanitize_text_field( $_GET['tab'] ) === 'design' ) ? 'nav-tab-active' : '' ); ?>" href="javascript:void(0);"
	   onclick="location.href = '<?php echo $s2aUtil->generateTabUrl( 0, 0 ); ?>'">
		<span class="s2a-nav-background-circle <?php echo( ( sanitize_text_field( $_GET['tab'] ) === '' || sanitize_text_field( $_GET['tab'] ) === 'design' ) ? 's2a-active' : '' ); ?>">1</span>
		Design
		<i class="fa fa-clone"></i>
	</a>
	<a class="nav-tab <?php echo( ( sanitize_text_field( $_GET['tab'] ) === 'menu' ) ? 'nav-tab-active' : '' ); ?>" href="javascript:void(0);" onclick="location.href = '<?php echo $s2aUtil->generateTabUrl( 0, 1 ); ?>'">
		<span class="s2a-nav-background-circle <?php echo( ( sanitize_text_field( $_GET['tab'] ) === 'menu' ) ? 's2a-active' : '' ); ?>">2</span>
		Add to App
		<i class="fa fa-navicon"></i>
	</a>
	<a class="nav-tab <?php echo( ( sanitize_text_field( $_GET['tab'] ) === 'preview' ) ? 'nav-tab-active' : '' ); ?>" href="javascript:void(0);" onclick="location.href = '<?php echo $s2aUtil->generateTabUrl( 0, 2 ); ?>'">
		<span class="s2a-nav-background-circle <?php echo( ( sanitize_text_field( $_GET['tab'] ) === 'preview' ) ? 's2a-active' : '' ); ?>">3</span>
		Request Preview/Demo App Here
		<i class="fa fa-mobile-phone"></i>
	</a>
	<a class="nav-tab <?php echo( ( sanitize_text_field( $_GET['tab'] ) === 'publish' ) ? 'nav-tab-active' : '' ); ?>" href="javascript:void(0);" onclick="location.href = '<?php echo $s2aUtil->generateTabUrl( 0, 3 ); ?>'">
		<span class="s2a-nav-background-circle <?php echo( ( sanitize_text_field( $_GET['tab'] ) === 'publish' ) ? 's2a-active' : '' ); ?>">4</span>
		Publishing Your Application!
		<i class="fa fa-check-square-o"></i>
	</a>
	<!--<a class="button button-primary" href="javascript:void(0);" onclick="location.href = '<?php echo $s2aUtil->generateTabUrl( 1, null ); ?>'">
        <i class="fa fa-gear"></i>
        More Settings
    </a>-->
	<a class="button button-secondary" href="http://shops2apps.com/contact/" target="_blank">
		<i class="fa fa-envelope-o"></i>
		Need Support ?
	</a>
</h2>