<?php
/**
 * Title: Projekt-Filter
 * Slug: webfire-starter/projekt-filter
 * Categories: webfire
 * Inserter: no
 * Description: Links auf alle Leistungen, die mindestens ein Projekt haben. Die aktive ist markiert.
 */

$terms   = get_terms( array( 'taxonomy' => 'leistung', 'hide_empty' => true ) );
$current = is_tax( 'leistung' ) ? get_queried_object_id() : 0;
$links   = array(
	sprintf(
		'<a href="%s"%s>%s</a>',
		esc_url( get_post_type_archive_link( 'projekt' ) ?: home_url( '/projekte/' ) ),
		$current ? '' : ' aria-current="page"',
		esc_html__( 'Alle', 'webfire-starter' )
	),
);
foreach ( is_array( $terms ) ? $terms : array() as $term ) {
	$links[] = sprintf(
		'<a href="%s"%s>%s</a>',
		esc_url( get_term_link( $term ) ),
		$current === $term->term_id ? ' aria-current="page"' : '',
		esc_html( $term->name )
	);
}
?>
<!-- wp:paragraph {"className":"wfs-filter","fontSize":"small"} -->
<p class="wfs-filter has-small-font-size"><?php echo implode( ' ', $links ); // phpcs:ignore WordPress.Security.EscapeOutput -- Teile oben einzeln escaped. ?></p>
<!-- /wp:paragraph -->
