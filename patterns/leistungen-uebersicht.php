<?php
/**
 * Title: Leistungen mit Unterseiten
 * Slug: webfire-starter/leistungen-uebersicht
 * Categories: webfire, services
 * Keywords: leistungen, angebot, services
 * Viewport Width: 1400
 * Description: Liste der Leistungen, jede Zeile verlinkt auf ihre Detailseite unter /leistungen/.
 */

$leistungen = array(
	'neubau'           => array( __( 'Neubau', 'webfire-starter' ), __( 'Wohnhäuser, Büro- und Gemeindebauten – vom ersten Entwurf über den Bauantrag bis zur Abnahme.', 'webfire-starter' ) ),
	'umbau-bestand'    => array( __( 'Umbau & Bestand', 'webfire-starter' ), __( 'Scheunen, Fachwerk und Nachkriegsbauten, die mit wenigen Eingriffen ein zweites Leben bekommen.', 'webfire-starter' ) ),
	'innenarchitektur' => array( __( 'Innenarchitektur', 'webfire-starter' ), __( 'Räume, Einbauten und Materialien aus einer Hand, abgestimmt auf die Architektur.', 'webfire-starter' ) ),
	'bauleitung'       => array( __( 'Bauleitung', 'webfire-starter' ), __( 'Wir koordinieren die Gewerke vor Ort und behalten Kosten und Termine im Blick.', 'webfire-starter' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group">
		<!-- wp:heading --><h2 class="wp-block-heading"><?php esc_html_e( 'Leistungen', 'webfire-starter' ); ?></h2><!-- /wp:heading -->
		<!-- wp:paragraph {"className":"wfs-arrow","fontSize":"small"} --><p class="wfs-arrow has-small-font-size"><a href="<?php echo esc_url( home_url( '/leistungen/' ) ); ?>"><?php esc_html_e( 'Alle Leistungen', 'webfire-starter' ); ?></a></p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
<?php
$i = 0;
foreach ( $leistungen as $slug => $item ) :
	++$i;
	?>
		<!-- wp:columns {"verticalAlignment":"top","className":"wfs-row wfs-row--link","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":{"left":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-top wfs-row wfs-row--link" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
			<!-- wp:column {"verticalAlignment":"top","width":"10%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:10%"><!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} --><p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html( sprintf( '%02d', $i ) ); ?></p><!-- /wp:paragraph --></div><!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"top","width":"35%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:35%"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><a href="<?php echo esc_url( home_url( '/leistungen/' . $slug . '/' ) ); ?>"><?php echo esc_html( $item[0] ); ?></a></h3><!-- /wp:heading --></div><!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"top","width":"55%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:55%"><!-- wp:paragraph {"textColor":"contrast-2"} --><p class="has-contrast-2-color has-text-color"><?php echo esc_html( $item[1] ); ?></p><!-- /wp:paragraph --></div><!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
