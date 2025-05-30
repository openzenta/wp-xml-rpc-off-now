<?php
/**
 * Plugin Name:     xml rpc off now
 * Plugin URI:      https://openzenta.com/plugins/xml-rpc-off-now
 * Description:     Disables XML-RPC functionality in WordPress for improved security and shows an admin notice.
 * Version:         1.0
 * Author:          openvexa25
 * Author URI:      https://openzenta.com
 * License:         GPLv2 or later
 * Text Domain:     xml-rpc-off-now
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Disable XML-RPC completely.
 */
add_filter( 'xmlrpc_enabled', '__return_false' );

/**
 * Display an admin notice on the dashboard when XML-RPC is disabled.
 */
function xro_admin_notice() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    $screen = get_current_screen();
    if ( $screen && $screen->base !== 'dashboard' ) {
        return;
    }

    echo '<div class="notice notice-success xmlrpc-disabled-notice">'
       . '<p>' . esc_html__( 'XML-RPC has been disabled for security reasons.', 'xml-rpc-off-now' ) . '</p>'
       . '</div>';
}
add_action( 'admin_notices', 'xro_admin_notice' );

/**
 * Enqueue admin CSS for the notice.
 *
 * @param string $hook_suffix The current admin page.
 */
function xro_admin_enqueue_styles( $hook_suffix ) {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    $screen = get_current_screen();
    if ( $screen && $screen->base !== 'dashboard' ) {
        return;
    }

    // Register and enqueue the CSS file
    $css_file = plugin_dir_path( __FILE__ ) . 'css/admin.css';
    wp_enqueue_style(
        'xro-admin-css',                           // Handle
        plugins_url( 'css/admin.css', __FILE__ ),  // URL to file
        array(),                                   // Dependencies
        filemtime( $css_file ),                    // Version: file modification time
        'all'                                      // Media
    );
}
add_action( 'admin_enqueue_scripts', 'xro_admin_enqueue_styles' );

