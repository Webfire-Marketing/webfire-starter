<?php
/**
 * Title: Über das Büro
 * Slug: webfire-starter/buero
 * Categories: webfire, about
 * Keywords: über uns, team, büro
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"anchor":"buero","align":"full","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" id="buero" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:heading --><h2 class="wp-block-heading"><?php esc_html_e( 'Das Büro', 'webfire-starter' ); ?></h2><!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size"><?php esc_html_e( 'Wir sind zwölf Architektinnen, Architekten und Bauzeichner. Jedes Projekt beginnt bei uns mit einem Spaziergang über das Grundstück – nicht mit einem Entwurf.', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"contrast-2"} --><p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Wir arbeiten gern mit Holz, Ziegel und Stampflehm, mit Handwerksbetrieben aus der Region und mit Bauherren, die lieber einmal mehr fragen. Von der ersten Skizze bis zur Bauleitung bleibt dieselbe Person Ihre Ansprechpartnerin.', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:column --><div class="wp-block-column">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|heading"}},"fontSize":"x-large"} --><p class="has-x-large-font-size" style="font-family:var(--wp--preset--font-family--heading)">2011</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} --><p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e( 'gegründet', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
				</div><!-- /wp:column -->
				<!-- wp:column --><div class="wp-block-column">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|heading"}},"fontSize":"x-large"} --><p class="has-x-large-font-size" style="font-family:var(--wp--preset--font-family--heading)">48</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} --><p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e( 'realisierte Bauten', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
				</div><!-- /wp:column -->
				<!-- wp:column --><div class="wp-block-column">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|heading"}},"fontSize":"x-large"} --><p class="has-x-large-font-size" style="font-family:var(--wp--preset--font-family--heading)">12</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} --><p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e( 'Menschen im Team', 'webfire-starter' ); ?></p><!-- /wp:paragraph -->
				</div><!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:image {"aspectRatio":"21/9","scale":"cover","sizeSlug":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<figure class="wp-block-image size-full" style="margin-top:var(--wp--preset--spacing--50)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.webp' ) ); ?>" alt="<?php esc_attr_e( 'Arbeitsraum des Büros mit Modellen und Plänen', 'webfire-starter' ); ?>" style="aspect-ratio:21/9;object-fit:cover" loading="lazy"/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
