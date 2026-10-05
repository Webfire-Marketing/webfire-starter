<?php
/**
 * Title: Büro – Kurzvorstellung
 * Slug: webfire-starter/buero-kurz
 * Categories: webfire, about
 * Keywords: über uns, büro, team
 * Viewport Width: 1400
 * Description: Bild und kurzer Text mit Link auf die Büro-Seite – für die Startseite.
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.webp' ) ); ?>" alt="<?php esc_attr_e( 'Arbeitsraum des Büros mit Modellen und Plänen', 'webfire-starter' ); ?>" style="aspect-ratio:4/3;object-fit:cover" loading="lazy"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:heading --><h2 class="wp-block-heading"><?php esc_html_e( 'Erst zuhören, dann zeichnen.', 'webfire-starter' ); ?></h2><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"contrast-2"} --><p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Jedes Projekt beginnt bei uns mit einem Spaziergang über das Grundstück. Wir sind zwölf Leute in einem alten Ladenlokal in der Fuldaer Innenstadt – und bleiben von der ersten Skizze bis zur Schlüsselübergabe an Ihrer Seite.', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"wfs-arrow","fontSize":"small"} --><p class="wfs-arrow has-small-font-size"><a href="<?php echo esc_url( home_url( '/buero/' ) ); ?>"><?php esc_html_e( 'Büro und Team kennenlernen', 'webfire-starter' ); ?></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
