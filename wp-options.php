<?php
/*
Plugin Name: Options
Plugin URI: http://github.com/mirkolofio/wp-options-dashboard
Description: Easily manage Wordpress Options by the Settings > Options (options.php) page
Author: Mirco Babini
Version: 1.0.1
Author URI: http://github.com/mirkolofio
*/
if (is_admin ()) {
	add_action ('admin_menu' , function () {
		global $submenu;
		$submenu['options-general.php'][666] = array( 'Options', 'manage_options' , '/wp-admin/options.php' ); 
		$submenu['plugins.php'][4] = array( '', 'manage_options' , '/wp-admin/plugins.php?plugin_status=active' ); 
		ksort ($submenu['plugins.php']);
	});

	if (!isset ($_GET['ghosts'])) {
		
		add_filter ('all_plugins', function ($plugins) {
			unset ($plugins[plugin_basename (__FILE__)]);
			return $plugins;
		});
	}
}
