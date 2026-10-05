<?php
/**
 * Webfire Starter – Theme-Setup.
 *
 * Bewusst schlank: Design-Entscheidungen liegen in theme.json, Inhalte in
 * Patterns. PHP kümmert sich nur um das, was dort nicht hingehört.
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
