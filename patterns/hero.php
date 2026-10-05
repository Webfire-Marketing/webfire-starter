<?php
/**
 * Title: Einstieg mit Leitsatz und Bild
 * Slug: webfire-starter/hero
 * Categories: webfire, featured
 * Keywords: hero, einstieg, startseite
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-bottom">
		<!-- wp:column {"verticalAlignment":"bottom","width":"66%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:66%">
			<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"300"}}} -->
			<h1 class="wp-block-heading" style="font-weight:300"><?php esc_html_e( 'Wir bauen Häuser, die zu ihrem Ort passen.', 'webfire-starter' ); ?></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","width":"34%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:34%">
			<!-- wp:paragraph {"textColor":"contrast-2"} -->
			<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Kessler Aho ist ein Architekturbüro aus Fulda. Seit 2011 planen wir Wohnhäuser, Umbauten und öffentliche Gebäude in Osthessen und der Rhön.', 'webfire-starter' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"wfs-arrow","fontSize":"small"} -->
			<p class="wfs-arrow has-small-font-size"><a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>"><?php esc_html_e( 'Projekt anfragen', 'webfire-starter' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:image {"align":"wide","sizeSlug":"full","linkDestination":"none","aspectRatio":"16/9","scale":"cover"} -->
	<figure class="wp-block-image alignwide size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.webp' ) ); ?>" alt="<?php esc_attr_e( 'Wohnhaus aus Holz und Beton mit großer Glasfront am Waldrand', 'webfire-starter' ); ?>" style="aspect-ratio:16/9;object-fit:cover"/><figcaption class="wp-element-caption"><?php esc_html_e( 'Haus am Waldrand, Rhön – 2021', 'webfire-starter' ); ?></figcaption></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
