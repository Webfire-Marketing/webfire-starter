<?php
/**
 * Title: Leistungen – eine Hauptleistung, zwei Ergänzungen
 * Slug: webfire-starter/leistungen
 * Categories: webfire
 * Keywords: leistungen, angebot, karten
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"anchor":"leistungen","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" id="leistungen" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"className":"is-style-eyebrow"} --><p class="is-style-eyebrow"><?php esc_html_e( 'Leistungen', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
	<!-- wp:heading --><h2 class="wp-block-heading"><?php esc_html_e( 'Was wir für Sie übernehmen', 'webfire-starter' ); ?></h2><!-- /wp:heading -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column {"width":"46%"} -->
		<div class="wp-block-column" style="flex-basis:46%">
			<!-- wp:group {"className":"wf-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"surface","layout":{"type":"default"}} -->
			<div class="wp-block-group wf-card has-surface-background-color has-background" style="padding:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"level":3,"fontSize":"x-large"} --><h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Hauptleistung', 'webfire-starter' ); ?></h3><!-- /wp:heading -->
				<!-- wp:paragraph --><p><?php esc_html_e( 'Die Leistung, mit der der Betrieb das meiste Geschäft macht, bekommt bewusst mehr Platz als der Rest.', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"27%"} -->
		<div class="wp-block-column" style="flex-basis:27%">
			<!-- wp:group {"className":"wf-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group wf-card" style="padding:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Ergänzung', 'webfire-starter' ); ?></h3><!-- /wp:heading -->
				<!-- wp:paragraph --><p><?php esc_html_e( 'Kurz und konkret: was, für wen, mit welchem Ergebnis.', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"27%"} -->
		<div class="wp-block-column" style="flex-basis:27%">
			<!-- wp:group {"className":"wf-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group wf-card" style="padding:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Ergänzung', 'webfire-starter' ); ?></h3><!-- /wp:heading -->
				<!-- wp:paragraph --><p><?php esc_html_e( 'Kurz und konkret: was, für wen, mit welchem Ergebnis.', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
