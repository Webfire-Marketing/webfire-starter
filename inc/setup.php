<?php
/**
 * Theme-Supports, Assets, Patterns, Blöcke.
 *
 * @package WebfireStarter
 */

declare( strict_types=1 );

namespace WebfireStarter\Setup;

defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', __NAMESPACE__ . '\\theme_supports' );
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_assets' );
add_action( 'init', __NAMESPACE__ . '\\register_pattern_category' );
add_action( 'init', __NAMESPACE__ . '\\register_blocks' );

function theme_supports(): void {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/theme.css' );
	add_theme_support( 'responsive-embeds' );
	remove_theme_support( 'core-block-patterns' ); // nur eigene Patterns
}

/**
 * filemtime als Version, damit nach Deploys kein alter Cache hängt.
 */
function enqueue_assets(): void {
	$path = get_template_directory() . '/assets/css/theme.css';

	wp_enqueue_style(
		'webfire-starter',
		get_template_directory_uri() . '/assets/css/theme.css',
		array(),
		(string) ( file_exists( $path ) ? filemtime( $path ) : WEBFIRE_STARTER_VERSION )
	);
}

function register_pattern_category(): void {
	register_block_pattern_category(
		'webfire',
		array( 'label' => __( 'Webfire Starter', 'webfire-starter' ) )
	);
}

/**
 * Alle Blöcke unter /blocks registrieren (je ein Ordner mit block.json).
 */
function register_blocks(): void {
	foreach ( glob( get_template_directory() . '/blocks/*/block.json' ) ?: array() as $block_json ) {
		register_block_type( dirname( $block_json ) );
	}
}
