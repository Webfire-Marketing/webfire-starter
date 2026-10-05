<?php
/**
 * CPT team: Name = Titel, Foto = Beitragsbild, Rolle = Meta team_rolle.
 * Sortierung über menu_order. Einzelseiten leiten auf /buero/ um.
 *
 * @package WebfireStarter
 */

declare( strict_types=1 );

namespace WebfireStarter\Team;

defined( 'ABSPATH' ) || exit;

const POST_TYPE = 'team';

add_action( 'init', __NAMESPACE__ . '\\register' );
add_action( 'template_redirect', __NAMESPACE__ . '\\redirect_single' );

function register(): void {
	register_post_type(
		POST_TYPE,
		array(
			'labels'        => array(
				'name'          => __( 'Team', 'webfire-starter' ),
				'singular_name' => __( 'Person', 'webfire-starter' ),
				'add_new_item'  => __( 'Neue Person', 'webfire-starter' ),
				'edit_item'     => __( 'Person bearbeiten', 'webfire-starter' ),
				'all_items'     => __( 'Alle Personen', 'webfire-starter' ),
			),
			// public nötig, sonst ignoriert der Query-Loop den Typ
			'public'        => true,
			'has_archive'   => false,
			'rewrite'       => array( 'slug' => 'team' ),
			'menu_icon'     => 'dashicons-groups',
			'menu_position' => 21,
			'show_in_rest'  => true,
			'supports'      => array( 'title', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes' ),
		)
	);

	register_post_meta(
		POST_TYPE,
		'team_rolle',
		array(
			'label'             => __( 'Rolle', 'webfire-starter' ),
			'type'              => 'string',
			'single'            => true,
			'show_in_rest'      => true,
			'sanitize_callback' => 'sanitize_text_field',
			'auth_callback'     => static fn(): bool => current_user_can( 'edit_posts' ),
		)
	);
}

function redirect_single(): void {
	if ( ! is_singular( POST_TYPE ) ) {
		return;
	}
	$buero = get_page_by_path( 'buero' );
	wp_safe_redirect( $buero ? get_permalink( $buero ) : home_url( '/' ), 301 );
	exit;
}
