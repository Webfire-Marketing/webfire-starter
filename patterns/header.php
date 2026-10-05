<?php
/**
 * Title: Kopfbereich
 * Slug: webfire-starter/header
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"header","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<header class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:site-title {"level":0} /-->
		<!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
			<!-- wp:navigation-link {"label":"Projekte","url":"<?php echo esc_url( home_url( '/projekte/' ) ); ?>","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"Büro","url":"<?php echo esc_url( home_url( '/#buero' ) ); ?>","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"Leistungen","url":"<?php echo esc_url( home_url( '/#leistungen' ) ); ?>","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"Kontakt","url":"<?php echo esc_url( home_url( '/#kontakt' ) ); ?>","kind":"custom"} /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</header>
<!-- /wp:group -->
