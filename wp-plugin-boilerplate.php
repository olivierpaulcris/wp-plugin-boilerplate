<?php 

/**
 * Plugin Name:       WP Plugin Boilerplate
 * Plugin URI:        http://creativominimal.com/
 * Description:       WordPress plugin boilerplate.
 * Version:           1.0
 * Requires PHP:      7.2
 * Author:            Paul Cristerna
 * Author URI:        http://creativominimal.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-plugin-boilerplate
 */

add_shortcode('hello', 'hello_shortcode');

function hello_shortcode() {
    return "Hello World";
}