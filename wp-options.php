<?php
/*
Plugin Name: Options
Plugin URI: http://github.com/mirkolofio/wp-options
Description: Easily manage Wordpress Options. Once activated you'll find me under <strong>Settings &rarr; Options</strong>.
Author: Mirco Babini
Version: 1.0.2
Author URI: http://github.com/mirkolofio
*/
if (is_admin ()) {
	add_action ('admin_menu' , function () {
		global $submenu;
		$submenu['options-general.php'][666] = array( 'Options', 'manage_options' , '/wp-admin/options.php' ); 
	});

	// read more about the ghosts support: http://wordpress.org/plugins/ghosts/
	if (defined('WP_ENABLE_GHOSTS')) {
		WPGhosts::ghostize (__FILE__);
	}
}
