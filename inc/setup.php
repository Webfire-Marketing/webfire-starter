<?php
/**
 * Theme-Supports, Assets, Pattern-Kategorie und eigene Blöcke.
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

/**
 * Block-Themes bringen das meiste mit – hier nur das, was zusätzlich nötig ist.
 */
function theme_supports(): void {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/theme.css' );
	add_theme_support( 'responsive-embeds' );
	remove_theme_support( 'core-block-patterns' ); // Nur eigene, geprüfte Patterns anbieten.
}

/**
 * Eine kleine CSS-Datei für Dinge, die theme.json (noch) nicht abbildet.
 * Version aus dem Dateizeitstempel, damit Browser-Caches nach Deploys greifen.
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
 * Eigene Blöcke liegen in /blocks/<name>/block.json und kommen ohne Build-Step aus.
 */
function register_blocks(): void {
	foreach ( glob( get_template_directory() . '/blocks/*/block.json' ) ?: array() as $block_json ) {
		register_block_type( dirname( $block_json ) );
	}
}
