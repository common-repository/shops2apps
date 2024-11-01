<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $s2aUtil;
$config = $s2aUtil->readConfig();
?>
<div class="wrap">
	<?php include 'shops2apps-ma_menu_my_panel_settings.php'; ?>

	<div class="s2a-container">
		<div class="s2a-row">
			<div class="s2a-col-full">
				<h3>Application Information</h3>
				<hr>
				<div class="s2a-col-half">
					<table class="s2a-table-ai">
						<tbody>
						<tr>
							<td class="s2a-text-right" style="width: 35%;"><label for="appName">Name</label></td>
							<td><input type="text" id="appName" name="appName" value="<?php echo $config['setting-general']['name']; ?>"></td>
						</tr>
						<tr>
							<td class="s2a-text-right"><label for="appDescription">Description</label></td>
							<td><input type="text" id="appDescription" name="appDescription" value="<?php echo $config['setting-general']['description']; ?>"></td>
						</tr>
						<tr>
							<td class="s2a-text-right"><label for="appAccount">Have developer&apos;s account</label></td>
							<td>
								<select id="appAccount" name="appAccount">
									<option value="No" <?php echo $config['setting-general']['have_account'] === 'No' ? 'selected' : '' ?>>No</option>
									<option value="Yes" <?php echo $config['setting-general']['have_account'] === 'Yes' ? 'selected' : '' ?>>Yes</option>
								</select>
							</td>
						</tr>
						</tbody>
						<tfoot>
						<tr>
							<td></td>
							<td><input id="save" name="save" class="button button-primary" type="button" value="Save Setting"></td>
						</tr>
						</tfoot>
					</table>
				</div>
				<div class="s2a-col-half"></div>
			</div>
		</div>
	</div>
</div>

<script>
	jQuery(document).ready(function ($) {
		//s2aMobile init static
		s2aMobile.PAGE = '<?php echo Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES[1] ?>';
		s2aMobile.TAB = '<?php echo Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES_TAB[Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES[1]][0] ?>';
		$('#save').on('click', function () {
			if (confirm('Save setting ?')) {
				var _data = {
					name: $('#appName').val(),
					description: $('#appDescription').val(),
					haveAccount: $('#appAccount').val()
				};

				s2aMobile.saveConfiguration(_data);
			}
		});
	});
</script>