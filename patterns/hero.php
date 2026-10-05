<?php
/**
 * Title: Hero mit Text und Aktion
 * Slug: webfire-starter/hero
 * Categories: webfire
 * Keywords: hero, einstieg, startseite
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} --><p class="is-style-eyebrow"><?php esc_html_e( 'Ihr Fachbetrieb in der Region', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":1} --><h1 class="wp-block-heading"><?php esc_html_e( 'Eine klare Aussage, warum Kunden genau hier richtig sind.', 'webfire-starter' ); ?></h1><!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"large","textColor":"ink-soft"} --><p class="has-ink-soft-color has-text-color has-large-font-size"><?php esc_html_e( 'Ein bis zwei Sätze, die das wichtigste Versprechen konkret machen – mit einer Zahl, einem Ort oder einem Ergebnis statt Floskeln.', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:buttons --><div class="wp-block-buttons">
				<!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#kontakt"><?php esc_html_e( 'Termin anfragen', 'webfire-starter' ); ?></a></div><!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#leistungen"><?php esc_html_e( 'Leistungen ansehen', 'webfire-starter' ); ?></a></div><!-- /wp:button -->
			</div><!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"},"border":{"left":{"color":"var:preset|color|accent","width":"3px"}}},"backgroundColor":"paper","layout":{"type":"default"}} -->
			<div class="wp-block-group has-paper-background-color has-background" style="border-left-color:var(--wp--preset--color--accent);border-left-width:3px;padding:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"fontFamily":"serif","fontSize":"x-large"} --><p class="has-serif-font-family has-x-large-font-size"><?php esc_html_e( 'Seit 2009', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"ink-soft"} --><p class="has-ink-soft-color has-text-color"><?php esc_html_e( 'Ein belegbarer Fakt statt Stockfoto – Jahre, Projekte oder Bewertungen.', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
