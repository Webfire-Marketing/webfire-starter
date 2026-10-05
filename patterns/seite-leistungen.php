<?php
/**
 * Title: Seite „Leistungen“
 * Slug: webfire-starter/seite-leistungen
 * Categories: webfire, pages
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1400
 * Description: Übersicht aller Leistungen mit Ablauf und Kontakt-Aufforderung.
 */

$schritte = array(
	array( __( 'Kennenlernen', 'webfire-starter' ), __( 'Wir schauen uns Grundstück oder Bestand gemeinsam an und klären Wünsche, Budget und Zeitrahmen.', 'webfire-starter' ) ),
	array( __( 'Entwurf', 'webfire-starter' ), __( 'Skizzen, Modelle, Varianten – so lange, bis es passt. Erst dann geht es ins Detail.', 'webfire-starter' ) ),
	array( __( 'Genehmigung', 'webfire-starter' ), __( 'Wir erstellen den Bauantrag und stimmen uns mit Bauamt, Statik und Energieberatung ab.', 'webfire-starter' ) ),
	array( __( 'Bau', 'webfire-starter' ), __( 'Ausschreibung, Vergabe und Bauleitung aus einer Hand – bis zur Übergabe und darüber hinaus.', 'webfire-starter' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-bottom">
		<!-- wp:column {"verticalAlignment":"bottom","width":"60%"} --><div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%">
			<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"300"}}} --><h1 class="wp-block-heading" style="font-weight:300"><?php esc_html_e( 'Vom ersten Strich bis zum Richtfest.', 'webfire-starter' ); ?></h1><!-- /wp:heading -->
		</div><!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} --><div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%">
			<!-- wp:paragraph {"textColor":"contrast-2"} --><p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Wir übernehmen alle Leistungsphasen der HOAI – oder nur die, die Sie brauchen.', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
		</div><!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"webfire-starter/leistungen-uebersicht"} /-->

<!-- wp:group {"align":"full","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading --><h2 class="wp-block-heading"><?php esc_html_e( 'So arbeiten wir', 'webfire-starter' ); ?></h2><!-- /wp:heading -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns">
<?php foreach ( $schritte as $i => $schritt ) : ?>
		<!-- wp:column {"className":"wfs-row","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}}} --><div class="wp-block-column wfs-row" style="padding-top:var(--wp--preset--spacing--20)">
			<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} --><p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php echo esc_html( $schritt[0] ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"contrast-2"} --><p class="has-contrast-2-color has-text-color"><?php echo esc_html( $schritt[1] ); ?></p><!-- /wp:paragraph -->
		</div><!-- /wp:column -->
<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"webfire-starter/kontakt-cta"} /-->
