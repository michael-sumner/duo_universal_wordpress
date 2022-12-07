<?php

defined('ABSPATH') or die('Direct Access Denied');
//if uninstall not called from WordPress exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) )
        exit ();
//Delete Duo credentials in wp_options
// TODO these will need to be renamed as well
delete_option('duo_client_id');
delete_option('duo_client_secret');
delete_option('duo_host');
delete_option('duo_roles');
delete_option('duo_failmode');
delete_option('duo_xmlrpc');

//Delete Duo credentials in wp_sitemeta
delete_site_option('duo_client_id');
delete_site_option('duo_client_secret');
delete_site_option('duo_host');
delete_site_option('duo_roles');
delete_site_option('duo_failmode');
delete_site_option('duo_xmlrpc');

?>
