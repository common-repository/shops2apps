<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $s2aUtil;
?>
<div class="wrap">
	<?php include 'shops2apps-ma_menu_my_panel.php'; ?>

	<div class="s2a-container">
		<div class="s2a-row">
			<div class="s2a-col-full">
				<h3>Are you ready to publish your app? Sign up for one of pricing plans.</h3>
				<hr>
				<button class="button button-primary button-hero" onclick="window.open('http://shops2apps.com/prices/');">See Pricing &amp; Publish Your App</button>
				<p>Test our services with special 14 days free trial!</p>

				<h3>What are the next steps?</h3>
				<hr>
				<p>After you sign up, we will provide you a simple form for some details requires to get your application published on marketplaces. Please note that you can publish apps on your developers accounts as well if needed. </p>

				<h3>Still have question?</h3>
				<hr>
				<p>We will be glad to answer your questions.</p>
				<button class="button button-primary" onclick="window.open('http://shops2apps.com/contact/');">Send Us a Message</button>
			</div>
		</div>
	</div>
</div>

<script>
	jQuery(document).ready(function ($) {
		//s2aMobile init static
		s2aMobile.PAGE = '<?php echo Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES[0] ?>';
		s2aMobile.TAB = '<?php echo Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES_TAB[Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES[0]][3] ?>';
	});
</script>