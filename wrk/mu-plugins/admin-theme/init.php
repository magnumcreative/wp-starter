<?php

/*
Plugin Name: Custom Admin Theme
Plugin URI:
Description: Custom admin theme, adds stylesheets and or js
Author: MAGNUM Creative
Version: 1.0
Author URI: http://magnumcreative.ca
*/

function my_admin_theme_style() {
    wp_enqueue_style('my-admin-theme', plugins_url('wp-admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');

?>