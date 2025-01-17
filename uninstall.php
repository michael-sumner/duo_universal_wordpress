<?php
/**
 * Uninstall the Duo Universal plugin
 *
 * Deletes persistent data from the Duo Universal plugin.
 * Note that transients created by the plugin are not deleted
 * and left to expire normally.
 *
 * @link https://duo.com/docs/wordpress
 *
 * @package Duo Universal
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// if uninstall not called from WordPress exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}
// Delete Duo credentials in wp_options
// TODO these will need to be renamed as well
delete_option( 'duoup_client_id' );
delete_option( 'duoup_client_secret' );
delete_option( 'duoup_api_host' );
delete_option( 'duoup_roles' );
delete_option( 'duoup_failmode' );
delete_option( 'duoup_xmlrpc' );

// Delete Duo credentials in wp_sitemeta
delete_site_option( 'duoup_client_id' );
delete_site_option( 'duoup_client_secret' );
delete_site_option( 'duoup_api_host' );
delete_site_option( 'duoup_roles' );
delete_site_option( 'duoup_failmode' );
delete_site_option( 'duoup_xmlrpc' );
