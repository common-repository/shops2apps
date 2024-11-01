<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $s2aUtil;
$config        = $s2aUtil->readConfig();
$configUser    = $s2aUtil->readConfig( 'conf.user.json' );
$configDemoApp = $s2aUtil->readConfig( 'conf.demo-app.json' );
?>
<div class="wrap">
	<?php include 'shops2apps-ma_menu_my_panel.php'; ?>

	<div class="s2a-container">
		<div class="s2a-row">
			<div class="s2a-col-half">
				<h3>Request Preview/Demo App Here</h3>
				<hr>
				<p>Click here to request free preview of your demo app. Your demo app will be ready within 48 hours.</p>
				<button id="request" class="button button-primary button-hero" <?php echo empty( $configUser['user']['api_key'] ) ? 'disabled' : ''; ?>>Request Demo App</button>

				<h3 class="left">Your Request Status</h3>
				<input id="refresh" name="refresh" class="button button-secondary right" type="button" value="Refresh" <?php echo empty( $configDemoApp['demo']['id'] ) ? 'disabled' : ''; ?>>
				<hr>
				<table class="s2a-table-status">
					<tbody>
					<tr>
						<td>Request ID</td>
						<td><?php echo isset( $configDemoApp['demo']['id'] ) ? '#' . $configDemoApp['demo']['id'] : '<i>-</i>'; ?></td>
					</tr>
					<tr>
						<td>Request Date</td>
						<td><?php echo isset( $configDemoApp['demo']['date'] ) ? $configDemoApp['demo']['date'] : '<i>-</i>'; ?></td>
					</tr>
					<tr>
						<td>Status</td>
						<td><?php echo isset( $configDemoApp['demo']['status'] ) ? $configDemoApp['demo']['status'] : '<i>-</i>'; ?></td>
					</tr>
					<tr>
						<td>Android Preview</td>
						<td>
							<button class="button button-secondary s2a-ma-preview" <?php echo $s2aUtil->in_array_r( 'android', $configDemoApp['demo']['preview'], true ) ? '' : 'disabled'; ?>
							        data-href="<?php echo $s2aUtil->in_array_r( 'android', $configDemoApp['demo']['preview'], true ) ? $s2aUtil->get_demo_url( 'android', $configDemoApp['demo']['preview'] ) : '#'; ?>">
								Android
								<i class="fa fa-android"></i>
							</button>
						</td>
					</tr>
					<tr>
						<td>iOS Preview</td>
						<td>
							<button class="button button-secondary s2a-ma-preview" <?php echo $s2aUtil->in_array_r( 'ios', $configDemoApp['demo']['preview'], true ) ? '' : 'disabled'; ?>
							        data-href="<?php echo $s2aUtil->in_array_r( 'ios', $configDemoApp['demo']['preview'], true ) ? $s2aUtil->get_demo_url( 'ios', $configDemoApp['demo']['preview'] ) : '#'; ?>">
								iOS
								<i class="fa fa-apple"></i>
							</button>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
			<div class="s2a-col-half s2a-text-right">
				<iframe id="s2aPreview" class="s2a-preview-iframe"></iframe>
			</div>
		</div>
	</div>
</div>

<script>
	jQuery(document).ready(function ($) {
		//s2aMobile init static
		s2aMobile.PAGE = '<?php echo Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES[0] ?>';
		s2aMobile.TAB = '<?php echo Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES_TAB[Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES[0]][2] ?>';

		if ('<?php echo !($config['design']['preview_ios'] === 'true' || $config['design']['preview_android'] === 'true')  ? 'null' : '1' ?>' !== 'null') {
			$('#request').on('click', function () {
				$.ajax({
					url: s2aMobile.URL_API, type: 'post',
					data: {action: 'requestDemoApp', apiKey: '<?php echo $configUser['user']['api_key']; ?>', json: JSON.stringify('<?php echo json_encode($config); ?>')}, dataType: 'json',
					headers: {'X-SHOPS2APPS-ANIKETOS': 'Unconquerable'},
					beforeSend: function () {
						$('#request').attr('disabled', 'disabled').css('cursor', 'wait');
					},
					success: function (json) {
						if (json.status === 0) {
							var _data = {
								id: json.id,
								status: json.statusMessage,
								date: json.date
							};
							s2aMobile.saveDemoApp(_data);
						} else {
							alert(json.message);
						}
					}
				});
			});

			if ('<?php echo $configDemoApp['demo']['id']; ?>' !== 'null') {
				$('#refresh').on('click', function () {
					jQuery.ajax({
						url: s2aMobile.URL_API, type: 'post',
						data: {action: 'requestDemoAppStatus', apiKey: '<?php echo $configUser['user']['api_key']; ?>', id: '<?php echo $configDemoApp['demo']['id']; ?>'}, dataType: 'json',
						headers: {'X-SHOPS2APPS-ANIKETOS': 'Unconquerable'},
						beforeSend: function () {
							jQuery('#refresh').attr('disabled', 'disabled').css('cursor', 'wait');
						},
						success: function (json) {
							if (json.status !== -1) {
								var _links = [];
								for (var i = 0; i < json.length; i++) {
									_links.push([json[i][1].toLowerCase(), json[i][2]]);
								}

								var _data = {
									status: json[0][0],
									links: _links
								};

								s2aMobile.saveDemoAppStatus(_data);
							} else {
								alert(json.message);
							}
						}
					});
				});

				$('.button.s2a-ma-preview').on('click', function () {
					$('#s2aPreview').attr('src', $(this).data('href'));
				});
			}
		} else {
			$('#request').on('click', function () {
				alert('At least you select preview for Android or iOS on General Tab!');
			});
		}
	});
</script>