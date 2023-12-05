<?php

/**
 * Plugin Name: Ridwans Elementor Addon
 * Description: Ridwans Custom Elementor addon.
 * Plugin URI:  
 * Version:     1.0.0
 * Author:      MD.Ridwan
 * Author URI:  https://github.com/ridwan-shakil
 * Text Domain: ridwans-elementor-addon
 * 
 * Elementor tested up to: 3.16.0
 * Elementor Pro tested up to: 3.16.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function elementor_test_addon() {

    // Load plugin file
    require_once(__DIR__ . '/includes/plugin.php');

    // Run the plugin
    \Elementor_Test_Addon\Plugin::instance();
}
add_action('plugins_loaded', 'elementor_test_addon');
