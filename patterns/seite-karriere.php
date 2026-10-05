<?php
/**
 * Title: Seite „Karriere“
 * Slug: webfire-starter/seite-karriere
 * Categories: webfire, pages
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1400
 * Description: Einleitung, offene Stellen als aufklappbare Einträge und Hinweis auf Initiativbewerbungen.
 */

$stellen = array(
	array(
		__( 'Architektin oder Architekt (m/w/d)', 'webfire-starter' ),
		__( 'Vollzeit · Fulda · ab sofort', 'webfire-starter' ),
		__( 'Sie betreuen Projekte von der Entwurfsplanung bis zur Ausführung, stimmen sich mit Fachplanern ab und sind Ansprechperson für unsere Bauherren. Sie haben einige Jahre Berufserfahrung, sind sicher in ArchiCAD oder einem vergleichbaren Programm und haben Freude an Holz- und Bestandsbauten.', 'webfire-starter' ),
	),
	array(
		__( 'Bauzeichnerin oder Bauzeichner (m/w/d)', 'webfire-starter' ),
		__( 'Teilzeit oder Vollzeit · Fulda', 'webfire-starter' ),
		__( 'Sie erstellen Werk- und Detailpläne, pflegen Planstände und unterstützen das Team bei Ausschreibungen. Eine abgeschlossene Ausbildung und Erfahrung mit CAD setzen wir voraus, alles Weitere zeigen wir Ihnen gern.', 'webfire-starter' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-bottom">
		<!-- wp:column {"verticalAlignment":"bottom","width":"60%"} --><div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%">
			<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"300"}}} --><h1 class="wp-block-heading" style="font-weight:300"><?php esc_html_e( 'Arbeiten bei Kessler Aho', 'webfire-starter' ); ?></h1><!-- /wp:heading -->
		</div><!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} --><div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%">
			<!-- wp:paragraph {"textColor":"contrast-2"} --><p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Kleine Teams, kurze Wege, echte Verantwortung. Dazu flexible Arbeitszeiten, ein Tag Homeoffice pro Woche und Weiterbildung, die wir bezahlen.', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
		</div><!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
<?php foreach ( $stellen as $stelle ) : ?>
		<!-- wp:details {"className":"wfs-job"} -->
		<details class="wp-block-details wfs-job"><summary><span class="wfs-job__title"><?php echo esc_html( $stelle[0] ); ?></span> <span class="wfs-job__meta"><?php echo esc_html( $stelle[1] ); ?></span></summary>
			<!-- wp:paragraph --><p><?php echo esc_html( $stelle[2] ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph --><p><?php esc_html_e( 'Bewerbung bitte als ein PDF an', 'webfire-starter' ); ?> <a href="mailto:jobs@example.com">jobs@example.com</a>.</p><!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->
<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
	<!-- wp:paragraph {"textColor":"contrast-2"} --><p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Nichts Passendes dabei? Initiativbewerbungen lesen wir genauso gern.', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
