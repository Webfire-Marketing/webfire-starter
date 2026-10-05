<?php
/**
 * Title: Fußbereich
 * Slug: webfire-starter/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<footer class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:site-title {"level":0} /-->
			<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} --><p class="has-contrast-2-color has-text-color has-small-font-size">Heinrichstraße 12<br>36037 Fulda</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} --><p class="has-contrast-2-color has-text-color has-small-font-size">Kontakt</p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size"><a href="tel:+49661000000">0661 000 000</a><br><a href="mailto:buero@example.com">buero@example.com</a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} --><p class="has-contrast-2-color has-text-color has-small-font-size">Seiten</p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/projekte/' ) ); ?>">Projekte</a><br><a href="<?php echo esc_url( home_url( '/leistungen/' ) ); ?>">Leistungen</a><br><a href="<?php echo esc_url( home_url( '/buero/' ) ); ?>">Büro</a><br><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>">Journal</a><br><a href="<?php echo esc_url( home_url( '/karriere/' ) ); ?>">Karriere</a><br><a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>">Kontakt</a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|line","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--line);border-top-width:1px;padding-top:var(--wp--preset--spacing--20)">
		<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} --><p class="has-contrast-2-color has-text-color has-small-font-size">Fiktives Demo-Büro – alle Inhalte und Bilder sind Beispiele. · <a href="<?php echo esc_url( home_url( '/impressum/' ) ); ?>">Impressum</a> · <a href="<?php echo esc_url( home_url( '/datenschutz/' ) ); ?>">Datenschutz</a></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} --><p class="has-contrast-2-color has-text-color has-small-font-size">Theme: <a href="https://github.com/Webfire-Marketing/webfire-starter">Webfire Starter</a></p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</footer>
<!-- /wp:group -->
