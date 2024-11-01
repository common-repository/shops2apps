<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $s2aUtil, $wpdb;
$config = $s2aUtil->readConfig();
?>
<div class="wrap">
	<?php include 'shops2apps-ma_menu_my_panel.php'; ?>

	<div class="s2a-container">
		<div class="s2a-row">
			<div class="s2a-col-half s2a-border-box">
				<div class="s2a-row">
					<div class="s2a-col-full">
						<div class="s2a-logo-preview s2a-margin-right">
							<?php echo empty( $config['design']['logo'] ) ? '<span class="s2a-no-logo s2a-border-box">NO LOGO</span>' : '<img src="' . $config['design']['logo'] . '" title="logo" style="width: 100%">'; ?>
						</div>

						<h3><label class="s2a-form-label" for="changeLogo">App Logo</label></h3>

						<div class="s2a-form-content">
							<p>You can change your app logo here and for best result please upload (512px X 512px)</p>
							<input id="logo" name="logo" type="file" accept="image/jpeg, image/png" style="display: none;">
							<button id="changeLogo" name="changeLogo" class="button button-secondary">Change Logo</button>
							<br>
						</div>
					</div>
				</div>

				<div class="s2a-row">
					<div class="s2a-col-full">
						<h3><label class="s2a-form-label" for="s2aNavBarColor">Navigation Bar Color</label></h3>

						<div class="s2a-form-content">
							<input id="s2aNavBarColor" name="s2aNavBarColor" type="text" value="<?php echo $config['design']['bar_color']; ?>">
						</div>
					</div>
				</div>

				<div class="s2a-row">
					<div class="s2a-col-full">
						<h3><label class="s2a-form-label" for="s2aHomeScreen">Home Screen</label></h3>

						<div class="s2a-form-content">
							<p>Please select what to show on App home screen.</p>
							<table class="s2a-table-radio">
								<tbody>
								<tr>
									<td><input id="s2aHomeScreen" name="s2aHomeScreen" type="radio" value="Article List" <?php echo $config['design']['home_screen_type'] === 'Article List' ? 'checked' : ''; ?>></td>
									<td colspan="2">Article List</td>
								</tr>
								<tr>
									<td><input id="s2aHomeScreen" name="s2aHomeScreen" type="radio" value="Page" <?php echo $config['design']['home_screen_type'] === 'Page' ? 'checked' : ''; ?>></td>
									<td>Page</td>
									<td>
										<select id="s2aHomeScreenUrl" name="s2aHomeScreenUrl">
											<?php
											$result = $wpdb->get_results( "SELECT ID, post_title FROM $wpdb->posts p WHERE p.post_type = 'page' AND p.post_status = 'publish' ORDER BY post_title", ARRAY_A );
											foreach ( $result as $row ) {
												$url = get_page_link( $row['ID'] );
												echo $url;
												$isChecked = $config['design']['home_screen_type'] === 'Page' ? ( $config['design']['home_screen_content'] === $url ? 'selected' : '' ) : '';
												echo '<option value="' . $url . '" ' . $isChecked . '>' . $row['post_title'] . '</option>';
											}
											?>
										</select>
									</td>
								</tr>
								<tr>
									<td><input id="s2aHomeScreen" name="s2aHomeScreen" type="radio" value="Custom URL" <?php echo $config['design']['home_screen_type'] === 'Custom URL' ? 'checked' : ''; ?>></td>
									<td>URL</td>
									<td><input id="s2aHomeScreenUrl" name="s2aHomeScreenUrl" type="text" placeholder="http://example.com/page"
									           value="<?php echo $config['design']['home_screen_type'] === 'Custom URL' ? $config['design']['home_screen_content'] : ''; ?>"></td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="s2a-row s2a-margin-top">
					<div class="s2a-col-full">
						<button id="save" class="button button-primary">Save Changes</button>
					</div>
				</div>
			</div>
			<div class="s2a-col-half s2a-border-box">
				<div class="s2a-row">
					<div class="s2a-col-full">
						<h3><label class="s2a-form-label" for="s2aPreviewOn">Preview On</label></h3>

						<div class="s2a-form-content">
							<label class="s2a-margin-right"><input id="s2aPreviewOnIOs" name="s2aPreviewOnIOs" type="checkbox" <?php echo $config['design']['preview_ios'] === 'true' ? 'checked' : ''; ?>> iOS</label>
							<label><input id="s2aPreviewOnAndroid" name="s2aPreviewOnAndroid" type="checkbox" <?php echo $config['design']['preview_android'] === 'true' ? 'checked' : ''; ?>> Android</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="update-nag s2a-border-box" style="margin-right: 0; width: 100%;">
		Above configuration will be used on actual preview you can request it on <a href="admin.php?page=shops2apps&tab=preview"><strong>Test Section</strong></a> section.
	</div>
</div>

<script>
	jQuery(document).ready(function ($) {
		$('#s2aNavBarColor').wpColorPicker();

		$('#changeLogo').on('click', function () {
			$('#logo').trigger('click');
			//var data = new FormData();
		});

		$('#logo').on('change', function () {
			console.log(this.files[0]);
			var formData = new FormData();
			formData.append('action', 's2a_mobile_upload_image');
			formData.append('file', this.files[0]);
			formData.append('page', '<?php echo Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES[0]; ?>');
			$.ajax({
				url: ajaxurl,
				type: 'post',
				data: formData,
				dataType: 'json',
				processData: false,  // tell jQuery not to process the data
				contentType: false,   // tell jQuery not to set contentType
				success: function (json) {
					if (json.isError === 0) {
						$('#logo').data('url', json.url);
						$('.s2a-logo-preview').html('<img src="' + json.url + '" title="logo" style="width: 100%">');
					} else {
						alert('Upload logo failed: ' + json.message);
					}
				}
			});
		});

		//s2aMobile init static
		s2aMobile.PAGE = '<?php echo Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES[0] ?>';
		s2aMobile.TAB = '<?php echo Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES_TAB[Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES[0]][0] ?>';
		$('#save').on('click', function () {
			if (confirm('Save setting ?')) {
				var _data = {
					logo: $('#logo').data('url'),
					barColor: $('#s2aNavBarColor').val(),
					homeScreenType: $('#s2aHomeScreen:checked').val(),
					homeScreenContent: $('input[id="s2aHomeScreen"]:checked').parent().next().next().children().val(),
					previewIOs: $('#s2aPreviewOnIOs').is(':checked'),
					previewAndroid: $('#s2aPreviewOnAndroid').is(':checked')
				};

				s2aMobile.saveConfiguration(_data);
			}
		});
	});
</script>