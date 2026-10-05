<?php
/**
 * Unnötiges aus dem WP-Head und Co. entfernen.
 *
 * @package WebfireStarter
 */

declare( strict_types=1 );

namespace WebfireStarter\Cleanup;

defined( 'ABSPATH' ) || exit;

// Emoji-Script, Browser können das selbst
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// WP-Version nicht ausgeben
remove_action( 'wp_head', 'wp_generator' );

// RSD, WLW
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );

// XML-RPC aus (wird nicht gebraucht, häufiges Angriffsziel)
add_filter( 'xmlrpc_enabled', '__return_false' );

/**
 * Autorenarchive umleiten, sonst sind Usernamen über ?author=1 abrufbar.
 */
add_action(
	'template_redirect',
	static function (): void {
		if ( is_author() ) {
			wp_safe_redirect( home_url( '/' ), 301 );
			exit;
		}
	}
);
