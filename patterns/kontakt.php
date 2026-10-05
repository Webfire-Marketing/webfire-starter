<?php
/**
 * Title: Kontakt mit Formular
 * Slug: webfire-starter/kontakt
 * Categories: webfire
 * Keywords: kontakt, formular, anfrage
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"anchor":"kontakt","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" id="kontakt" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} --><p class="is-style-eyebrow"><?php esc_html_e( 'Kontakt', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading --><h2 class="wp-block-heading"><?php esc_html_e( 'Schreiben Sie uns', 'webfire-starter' ); ?></h2><!-- /wp:heading -->
			<!-- wp:paragraph --><p><?php esc_html_e( 'Wir melden uns innerhalb eines Werktags. Lieber telefonieren? Die Nummer gehört hierher, gut sichtbar und klickbar.', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:webfire/kontaktformular /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
