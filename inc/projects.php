<?php
/**
 * CPT projekt + Taxonomie leistung.
 * Meta projekt_ort / projekt_jahr werden per Block Bindings ausgegeben (WP 6.5+).
 *
 * TODO bei Kundenprojekten: CPTs in ein Plugin auslagern, sonst sind die Inhalte beim Theme-Wechsel weg.
 *
 * @package WebfireStarter
 */

declare( strict_types=1 );

namespace WebfireStarter\Projects;

defined( 'ABSPATH' ) || exit;

const POST_TYPE = 'projekt';
const TAXONOMY  = 'leistung';

add_action( 'init', __NAMESPACE__ . '\\register' );
add_action( 'after_switch_theme', 'flush_rewrite_rules' );

function register(): void {
	// vor dem CPT registrieren, sonst greifen die Rewrite-Regeln von projekt zuerst
	register_taxonomy(
		TAXONOMY,
		POST_TYPE,
		array(
			'labels'            => array(
				'name'          => __( 'Leistungen', 'webfire-starter' ),
				'singular_name' => __( 'Leistung', 'webfire-starter' ),
				'all_items'     => __( 'Alle Leistungen', 'webfire-starter' ),
				'add_new_item'  => __( 'Neue Leistung', 'webfire-starter' ),
			),
			'hierarchical'      => true,
			'public'            => true,
			'show_in_rest'      => true,
			'show_admin_column' => true,
			'rewrite'           => array( 'slug' => 'projekte/leistung' ),
		)
	);

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
		'projekt_ort'  => __( 'Ort', 'webfire-starter' ),
		'projekt_jahr' => __( 'Jahr', 'webfire-starter' ),
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
