<?php

/**
 * Account user.
 *
 * @package          Flatsome/WooCommerce/Templates
 * @flatsome-version 3.16.0
 */

?>
<div class="account-user circle user-box">
	<div class="image mr-half text-center mb-3">
		<?php
		$current_user = wp_get_current_user();
		$user_id = $current_user->ID;
		echo get_avatar($user_id, 70);
		?>
	</div>
	<div class="user-name text-center">
		<?php
		echo $current_user->display_name;
		?>
		<em class="user-id op-5"><?php echo '#' . $user_id; ?></em>
	</div>

	<?php do_action('flatsome_after_account_user'); ?>
</div>