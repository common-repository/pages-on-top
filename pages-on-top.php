<?php
/*
Plugin Name: Pages On Top
Plugin URI: http://saythissaythat.com
Description: Puts the Pages Menu above Posts
Version: 0.1
Author: Micah Gilman
Author URI: http://micahgilman.com
*/

function enable_custom_menu_order($flag) {
	return true;
}

function custom_menu_order($menu_ord) {
	return array('index.php', 'edit-pages.php');
}

add_filter('custom_menu_order', 'enable_custom_menu_order');
add_filter('menu_order', 'custom_menu_order');
?>