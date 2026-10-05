<?php
/**
 * Title: Seite „Kontakt“
 * Slug: webfire-starter/seite-kontakt
 * Categories: webfire, pages, contact
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1400
 * Description: Kontaktdaten, Öffnungszeiten, Anfahrt und Formular.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"300"}}} --><h1 class="wp-block-heading" style="font-weight:300"><?php esc_html_e( 'Kontakt', 'webfire-starter' ); ?></h1><!-- /wp:heading -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:group {"className":"wfs-row","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"},"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group wfs-row" style="padding-top:var(--wp--preset--spacing--20)">
				<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} --><p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e( 'Büro', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph --><p>Kessler Aho Architekten<br>Heinrichstraße 12<br>36037 Fulda</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"wfs-row","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"},"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group wfs-row" style="padding-top:var(--wp--preset--spacing--20)">
				<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} --><p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e( 'Telefon & E-Mail', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph --><p><a href="tel:+49661000000">0661 000 000</a><br><a href="mailto:buero@example.com">buero@example.com</a></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"wfs-row","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"},"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group wfs-row" style="padding-top:var(--wp--preset--spacing--20)">
				<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} --><p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e( 'Erreichbar', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph --><p><?php esc_html_e( 'Montag bis Donnerstag 8 – 17 Uhr', 'webfire-starter' ); ?><br><?php esc_html_e( 'Freitag 8 – 14 Uhr', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"wfs-row","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"},"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group wfs-row" style="padding-top:var(--wp--preset--spacing--20)">
				<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} --><p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e( 'Anfahrt', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"contrast-2"} --><p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Fünf Minuten zu Fuß vom Bahnhof. Parken im Parkhaus Heinrichstraße, Kundenparkplätze im Hof nach Absprache.', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size"><?php esc_html_e( 'Erzählen Sie uns kurz, worum es geht – wir melden uns innerhalb von zwei Werktagen.', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:webfire/kontaktformular {"buttonLabel":"Nachricht senden"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
