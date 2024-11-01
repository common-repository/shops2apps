<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $s2aUtil;
$config = $s2aUtil->readConfig();
?>
<div class="wrap">
	<?php include 'shops2apps-ma_menu_my_panel.php'; ?>

	<div class="s2a-container">
		<div class="s2a-row">
			<div class="s2a-col-half">
				<h1>Available Pages</h1>
				<hr>
				<div class="s2a-pages">
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">About Us</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>web-based information page with tap-to-call, tap-to-map, etc.</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Audio Stream</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>an interactive web-based media player for your online audio stream</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Calculator</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>calculator</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Calendar</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>This page allows users to create and update an HTML calendar. It can be customized using images for every day.</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Form</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>provides a way for application users to contact you by email.</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Login</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>displays login page.</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Radio Stream</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>This page allows users to stream live radio with the help of HTML5.</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Announcements</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>This page allows users to view announcements and news for your app which have been previously delivered via Push Notifications. You can also change style of notification popup and remove old mebages.</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Feedback</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>a configurable native form (GPS, date, time, camera).</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Scan Document</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>allow scanning a document via camera and convert to the PDF file.</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Notes</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>allows users to write and save notes inside the app.</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Location Finder</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>search multiple predefined geographical locations</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Map</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>display google map with multiple locations.</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Nearby Locations</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>displays places nearby user’s current location and prompts to check-in</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Slideshow</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>slideshow page type.</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Mosaic</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>displays a collection of images.</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Slide</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>horizontally scrollable gallery with a description for every image</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">App Share</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>link to an app on available online</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Facebook</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>displays a mobile Facebook web page.</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Lindedin</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>displays a mobile Linkedin web page.</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Twitter</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>displays a mobile Twitter web page.</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Youtube</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>displays a mobile Youtube web page.</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Instagram</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>displays a mobile Instagram web page.</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Pinterest</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>displays a mobile Pinterest web page.</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Barcode Scanner</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>scan a barcode and see the product information</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Coupon</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>prompt users to scan QR codes at your sales point and offer discounts</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">GPS Coupon</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>location-based discounting system</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Loyalty</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>displays Loyalty page</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Opentable</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>displays a mobile Opentable web page</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">QR Code Scanner</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>native QR code scanner with multiple actions</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Puzzle</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>upload your artwork and let users solve a puzzle out of it</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
					<div class="s2a-pages-item">
						<div class="s2a-pages-top">
							<span class="s2a-pages-title">Memo Game</span>
                            <span class="s2a-pages-title-action">
                                <a href="javascript:void(0);" class="s2a-pages-action hide-if-no-js"><i class="fa fa-chevron-down"></i></a>
                            </span>
						</div>
						<div class="s2a-pages-inside" style="display: none;">
							<i>upload your artwork and let users play a memory game with it</i><br>
							<input type="button" value="Add to Page" class="add-to-page button-secondary right">

							<div class="s2a-clearfix"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="s2a-col-half">
				<div class="s2a-margin-left">
					<input class="button button-primary right" id="save" name="save" type="button" value="Save Setting">

					<h1>App Pages</h1>
					<hr>
					<p>You can re-order page with drag and drop to the desire place.</p>
					<ul id="pageLists" class="s2a-sortable s2a-margin-top ui-sortable">
						<?php
						foreach ( $config['menu']['pages'] as $page ) {
							echo '<li class="ui-sortable-handle">' . $page . '</li>';
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	var PAGES_ACTION_DOWN = '<i class="fa fa-chevron-down"></i>',
		PAGES_ACTION_UP = '<i class="fa fa-chevron-up"></i>';

	jQuery(document).ready(function ($) {
		$('#pageLists').sortable({
			placeholder: 'ui-state-highlight'
		});

		$('body').on('click', '.s2a-pages-action', function () {
			var $p = $(this).parent().parent().parent();

			if (!$(this).attr('data-toggled') || $(this).attr('data-toggled') == 'off') {
				$(this).attr('data-toggled', 'on');

				$p.find('.s2a-pages-inside').slideDown();
				$(this).html(PAGES_ACTION_UP)
			} else if ($(this).attr('data-toggled') == 'on') {
				$(this).attr('data-toggled', 'off');

				$p.find('.s2a-pages-inside').slideUp();
				$(this).html(PAGES_ACTION_DOWN)
			}
		}).on('click', '.add-to-page', function () {
			// validate } no duplicate pages
			var _page = $(this).parent().prev().find('.s2a-pages-title').text();

			if (jQuery('#pageLists li:contains("' + _page + '")').filter(function () {
					return jQuery(this).text() === _page
				}).length === 0) {
				$('#pageLists').append('<li class="ui-sortable-handle">' + _page + '</li>');
			}
		});

		//s2aMobile init static
		s2aMobile.PAGE = '<?php echo Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES[0] ?>';
		s2aMobile.TAB = '<?php echo Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES_TAB[Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES[0]][1] ?>';
		$('#save').on('click', function () {
			if (confirm('Save setting ?')) {
				var _pages = [];
				$('#pageLists li').each(function (i) {
					_pages[i] = $(this).text();
				});

				var _data = {pages: _pages};

				s2aMobile.saveConfiguration(_data);
			}
		});
	});
</script>