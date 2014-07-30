<?php
/*
Plugin Name: Memberful WP
Plugin URI: http://github.com/memberful/memberful-wp
Description: Sell memberships and restrict access to content with WordPress and Memberful.
Version: 1.10.0
Author: Memberful
Author URI: http://memberful.com
License: GPLv2 or later
*/

if ( ! defined( 'MEMBERFUL_VERSION' ) )
	define( 'MEMBERFUL_VERSION', '1.10.0' );

if ( ! defined( 'MEMBERFUL_DIR' ) )
	define( 'MEMBERFUL_DIR', dirname( __FILE__ ) );

if ( ! defined( 'MEMBERFUL_URL' ) )
	define( 'MEMBERFUL_URL', plugins_url( '', __FILE__ ) );

if ( ! defined( 'MEMBERFUL_APPS_HOST' ) )
	define( 'MEMBERFUL_APPS_HOST', 'https://apps.memberful.com' );

if ( ! defined( 'MEMBERFUL_EMBED_HOST' ) )
	define( 'MEMBERFUL_EMBED_HOST', 'https://d35xxde4fgg0cx.cloudfront.net');

// Should requests to memberful check the SSL certificate?
if ( ! defined( 'MEMBERFUL_SSL_VERIFY' ) )
	define( 'MEMBERFUL_SSL_VERIFY', TRUE );

require_once MEMBERFUL_DIR . '/src/core-ext.php';
require_once MEMBERFUL_DIR . '/src/cron.php';
require_once MEMBERFUL_DIR . '/src/urls.php';
require_once MEMBERFUL_DIR . '/src/user/map.php';
require_once MEMBERFUL_DIR . '/src/user/role_decision.php';
require_once MEMBERFUL_DIR . '/src/authenticator.php';
require_once MEMBERFUL_DIR . '/src/admin.php';
require_once MEMBERFUL_DIR . '/src/acl.php';
require_once MEMBERFUL_DIR . '/src/activator.php';
require_once MEMBERFUL_DIR . '/src/shortcodes.php';
require_once MEMBERFUL_DIR . '/src/widgets.php';
require_once MEMBERFUL_DIR . '/src/endpoints.php';
require_once MEMBERFUL_DIR . '/src/marketing_content.php';
require_once MEMBERFUL_DIR . '/src/content_filter.php';
require_once MEMBERFUL_DIR . '/src/entities.php';
require_once MEMBERFUL_DIR . '/src/embed.php';
require_once MEMBERFUL_DIR . '/src/api.php';
require_once MEMBERFUL_DIR . '/src/roles.php';
require_once MEMBERFUL_DIR . '/src/syncing.php';
require_once MEMBERFUL_DIR . '/vendor/reporting.php';

register_activation_hook( __FILE__, 'memberful_wp_plugin_activate' );

function memberful_wp_plugin_activate() {
	add_option( 'memberful_wp_activation_redirect' , true );
}
