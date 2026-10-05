<?php
/**
 * Inhaltstyp „Projekte“ für Referenzen und Portfolios.
 *
 * Ort, Jahr und Leistung liegen als registrierte Meta-Felder vor und werden in den
 * Templates per Block Bindings (WordPress 6.5+) ausgegeben – ganz ohne ACF oder Shortcodes.
 *
 * Hinweis: Inhaltstypen gehören bei Kundenprojekten eigentlich in ein Plugin, damit Inhalte
 * einen Theme-Wechsel überleben. Für dieses Starter-Theme bleibt alles bewusst an einem Ort.
 *
 * @package WebfireStarter
 */

declare( strict_types=1 );

namespace WebfireStarter\Projects;

defined( 'ABSPATH' ) || exit;

const POST_TYPE = 'projekt';

add_action( 'init', __NAMESPACE__ . '\\register' );
add_action( 'after_switch_theme', 'flush_rewrite_rules' );

function register(): void {
	register_post_type(
		POST_TYPE,
		array(
			'labels'        => array(
				'name'          => __( 'Projekte', 'webfire-starter' ),
				'singular_name' => __( 'Projekt', 'webfire-starter' ),
				'add_new_item'  => __( 'Neues Projekt', 'webfire-starter' ),
				'edit_item'     => __( 'Projekt bearbeiten', 'webfire-starter' ),
				'all_items'     => __( 'Alle Projekte', 'webfire-starter' ),
			),
			'public'        => true,
			'has_archive'   => 'projekte',
			'rewrite'       => array( 'slug' => 'projekte' ),
			'menu_icon'     => 'dashicons-building',
			'menu_position' => 20,
			'show_in_rest'  => true,
			'supports'      => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes' ),
		)
	);

	$fields = array(
		'projekt_ort'      => __( 'Ort', 'webfire-starter' ),
		'projekt_jahr'     => __( 'Jahr', 'webfire-starter' ),
		'projekt_leistung' => __( 'Leistung', 'webfire-starter' ),
	);

	foreach ( $fields as $key => $label ) {
		register_post_meta(
			POST_TYPE,
			$key,
			array(
				'label'             => $label,
				'type'              => 'string',
				'single'            => true,
				'show_in_rest'      => true,
				'sanitize_callback' => 'sanitize_text_field',
				'auth_callback'     => static fn(): bool => current_user_can( 'edit_posts' ),
			)
		);
	}
}
