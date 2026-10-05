<?php
/**
 * Title: Kontakt mit Formular
 * Slug: webfire-starter/kontakt
 * Categories: webfire, contact
 * Keywords: kontakt, formular, anfrage
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"anchor":"kontakt","align":"full","backgroundColor":"contrast","textColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" id="kontakt" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">
			<!-- wp:heading {"style":{"typography":{"fontWeight":"300"}},"fontSize":"xx-large"} --><h2 class="wp-block-heading has-xx-large-font-size" style="font-weight:300"><?php esc_html_e( 'Erzählen Sie uns von Ihrem Vorhaben.', 'webfire-starter' ); ?></h2><!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#bdb9b0"}}} --><p class="has-text-color" style="color:#bdb9b0"><?php esc_html_e( 'Ein erstes Gespräch ist kostenlos. Wir melden uns innerhalb von zwei Werktagen.', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph --><p><a href="tel:+49661000000">0661 000 000</a><br><a href="mailto:buero@example.com">buero@example.com</a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">
			<!-- wp:webfire/kontaktformular {"buttonLabel":"Nachricht senden"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
