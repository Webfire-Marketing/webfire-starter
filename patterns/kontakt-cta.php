<?php
/**
 * Title: Kontakt-Aufforderung
 * Slug: webfire-starter/kontakt-cta
 * Categories: webfire, call-to-action
 * Keywords: kontakt, cta, anfrage
 * Viewport Width: 1400
 * Description: Dunkler Abschluss mit Überschrift und Button zur Kontaktseite.
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"contrast","textColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-bottom">
		<!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%">
			<!-- wp:heading {"style":{"typography":{"fontWeight":"300"}},"fontSize":"xx-large"} --><h2 class="wp-block-heading has-xx-large-font-size" style="font-weight:300"><?php esc_html_e( 'Erzählen Sie uns von Ihrem Vorhaben.', 'webfire-starter' ); ?></h2><!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%">
			<!-- wp:paragraph {"style":{"color":{"text":"#bdb9b0"}}} --><p class="has-text-color" style="color:#bdb9b0"><?php esc_html_e( 'Ein erstes Gespräch ist kostenlos. Wir melden uns innerhalb von zwei Werktagen.', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"is-style-fill"} --><div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>"><?php esc_html_e( 'Kontakt aufnehmen', 'webfire-starter' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
