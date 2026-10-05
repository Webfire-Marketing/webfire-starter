<?php
/**
 * Title: Seite „Büro“
 * Slug: webfire-starter/seite-buero
 * Categories: webfire, pages
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1400
 * Description: Komplette Büro-Seite mit Einstieg, Haltung, Team und Hinweis auf offene Stellen.
 */

$werte = array(
	array( __( 'Ort vor Form', 'webfire-starter' ), __( 'Wir entwerfen aus dem Grundstück heraus: Licht, Wege, Nachbarn, Bestand. Die Form ergibt sich daraus fast von allein.', 'webfire-starter' ) ),
	array( __( 'Wenig, aber richtig', 'webfire-starter' ), __( 'Wenige Materialien, sauber gefügt, altern besser als viele. Das spart Geld beim Bau und Ärger in zwanzig Jahren.', 'webfire-starter' ) ),
	array( __( 'Eine Ansprechperson', 'webfire-starter' ), __( 'Wer Ihr Projekt entwirft, begleitet es auch auf der Baustelle. Kein Weiterreichen, keine stille Post.', 'webfire-starter' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-bottom">
		<!-- wp:column {"verticalAlignment":"bottom","width":"60%"} --><div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%">
			<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"300"}}} --><h1 class="wp-block-heading" style="font-weight:300"><?php esc_html_e( 'Ein Büro, zwölf Leute, ein Anspruch.', 'webfire-starter' ); ?></h1><!-- /wp:heading -->
		</div><!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} --><div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%">
			<!-- wp:paragraph {"textColor":"contrast-2"} --><p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Johanna Kessler und Mikko Aho haben das Büro 2011 gegründet – damals zu zweit am Küchentisch, heute in einem alten Ladenlokal in der Heinrichstraße.', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
		</div><!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:image {"aspectRatio":"21/9","scale":"cover","sizeSlug":"full"} -->
	<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.webp' ) ); ?>" alt="<?php esc_attr_e( 'Arbeitsraum des Büros mit Modellen und Plänen', 'webfire-starter' ); ?>" style="aspect-ratio:21/9;object-fit:cover"/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading --><h2 class="wp-block-heading"><?php esc_html_e( 'Woran wir glauben', 'webfire-starter' ); ?></h2><!-- /wp:heading -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns">
<?php foreach ( $werte as $wert ) : ?>
		<!-- wp:column {"className":"wfs-row","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}}} --><div class="wp-block-column wfs-row" style="padding-top:var(--wp--preset--spacing--20)">
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php echo esc_html( $wert[0] ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"contrast-2"} --><p class="has-contrast-2-color has-text-color"><?php echo esc_html( $wert[1] ); ?></p><!-- /wp:paragraph -->
		</div><!-- /wp:column -->
<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"webfire-starter/team"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull" style="padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"className":"wfs-row","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns wfs-row" style="padding-top:var(--wp--preset--spacing--30)">
		<!-- wp:column {"width":"60%"} --><div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size"><?php esc_html_e( 'Wir suchen Verstärkung für Entwurf und Ausführung.', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
		</div><!-- /wp:column -->
		<!-- wp:column {"width":"40%"} --><div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:paragraph {"className":"wfs-arrow"} --><p class="wfs-arrow"><a href="<?php echo esc_url( home_url( '/karriere/' ) ); ?>"><?php esc_html_e( 'Offene Stellen ansehen', 'webfire-starter' ); ?></a></p><!-- /wp:paragraph -->
		</div><!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
