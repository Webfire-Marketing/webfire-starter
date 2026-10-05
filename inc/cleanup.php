<?php
/**
 * Entfernt Ballast, den eine Firmenwebsite nicht braucht.
 * Jeder Eingriff ist einzeln begründet, damit er bei Bedarf leicht rückgängig zu machen ist.
 *
 * @package WebfireStarter
 */

declare( strict_types=1 );

namespace WebfireStarter\Cleanup;

defined( 'ABSPATH' ) || exit;

// Emoji-Skript und -Styles: moderne Browser rendern Emojis selbst.
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// Versionsnummer nicht im Quelltext verraten.
remove_action( 'wp_head', 'wp_generator' );

// Windows-Live-Writer- und RSD-Links werden nicht gebraucht.
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );

// XML-RPC ist ein beliebtes Angriffsziel und wird auf Firmenwebsites selten genutzt.
add_filter( 'xmlrpc_enabled', '__return_false' );

/**
 * Autoren-Archive (?author=1) verraten Benutzernamen – auf Firmenwebsites unnötig.
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
