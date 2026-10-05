<?php
/**
 * Webfire Starter
 *
 * @package WebfireStarter
 */

declare( strict_types=1 );

defined( 'ABSPATH' ) || exit;

define( 'WEBFIRE_STARTER_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'WEBFIRE_STARTER_DIR', get_template_directory() );

require WEBFIRE_STARTER_DIR . '/inc/setup.php';
require WEBFIRE_STARTER_DIR . '/inc/cleanup.php';
require WEBFIRE_STARTER_DIR . '/inc/contact-form.php';
require WEBFIRE_STARTER_DIR . '/inc/projects.php';
require WEBFIRE_STARTER_DIR . '/inc/team.php';
