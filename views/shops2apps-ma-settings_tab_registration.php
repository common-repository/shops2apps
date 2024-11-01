<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $s2aUtil;
$config = $s2aUtil->readConfig( 'conf.user.json' );
?>
<div class="wrap">
	<?php include 'shops2apps-ma_menu_my_panel_settings.php'; ?>

	<div class="s2a-container">
		<div class="s2a-row">
			<div class="s2a-col-full">
				<h3>Account Information</h3>
				<hr>
				<div class="s2a-col-half">
					<table class="s2a-table-ai">
						<tbody>
						<tr>
							<td class="s2a-text-right">Email</td>
							<td><?php echo ( isset( $config['user']['email_address'] ) && ! empty( $config['user']['email_address'] ) ) ? $config['user']['email_address'] : 'registered.email@address.com' ?></td>
						</tr>
						<tr>
							<td class="s2a-text-right">Registered On</td>
							<td><?php echo ( isset( $config['user']['created_date'] ) && ! empty( $config['user']['created_date'] ) ) ? $config['user']['created_date'] : 'January 01, 2015 00:00' ?></td>
						</tr>
						</tbody>
						<tfoot>
						<tr>
							<td></td>
							<td><input id="logout" class="button" type="button" value="Logout"
							           style="background-color: rgb(213, 78, 33); border: medium none; box-shadow: none; color: rgb(255, 255, 255);" <?php echo ( is_array( $config ) && ! empty( $config['user']['api_key'] ) ) ? '' : 'disabled' ?>>
							</td>
						</tr>
						</tfoot>
					</table>
				</div>
				<div class="s2a-col-half">
					<table class="s2a-table-ai">
						<tbody>
						<tr>
							<td class="s2a-text-right">API-Key</td>
							<td><?php echo ( isset( $config['user']['api_key'] ) && ! empty( $config['user']['api_key'] ) ) ? $config['user']['api_key'] : '00000000-0000-0000-0000-000000000000' ?></td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	jQuery(document).ready(function ($) {
		//s2aMobile init static
		s2aMobile.PAGE = '<?php echo Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES[1] ?>';
		s2aMobile.TAB = '<?php echo Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES_TAB[Shops2AppsMobileAppConstant::$ARRAY_PLUGIN_PAGES[1]][1] ?>';

		$('#logout').on('click', function () {
			$(this).attr('disabled', 'disabled').css('cursor', 'wait');

			var _data = {
				emailAddress: '',
				apiKey: '',
				createdDate: ''
			};
			s2aMobile.saveUser(_data);
		});
	});
</script>