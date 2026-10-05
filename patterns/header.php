<?php
/**
 * Title: Kopfbereich
 * Slug: webfire-starter/header
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 */

$u = static fn( string $path ): string => esc_url( home_url( $path ) );
?>
<!-- wp:group {"tagName":"header","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<header class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:site-title {"level":0} /-->
		<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"base","overlayTextColor":"contrast","className":"wfs-nav","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
			<!-- wp:navigation-link {"label":"Projekte","url":"<?php echo $u( '/projekte/' ); ?>","kind":"custom"} /-->
			<!-- wp:navigation-submenu {"label":"Leistungen","url":"<?php echo $u( '/leistungen/' ); ?>","kind":"custom"} -->
				<!-- wp:navigation-link {"label":"Neubau","url":"<?php echo $u( '/leistungen/neubau/' ); ?>","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Umbau & Bestand","url":"<?php echo $u( '/leistungen/umbau-bestand/' ); ?>","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Innenarchitektur","url":"<?php echo $u( '/leistungen/innenarchitektur/' ); ?>","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Bauleitung","url":"<?php echo $u( '/leistungen/bauleitung/' ); ?>","kind":"custom"} /-->
			<!-- /wp:navigation-submenu -->
			<!-- wp:navigation-link {"label":"Büro","url":"<?php echo $u( '/buero/' ); ?>","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"Journal","url":"<?php echo $u( '/journal/' ); ?>","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"Karriere","url":"<?php echo $u( '/karriere/' ); ?>","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"Kontakt","url":"<?php echo $u( '/kontakt/' ); ?>","kind":"custom","className":"wfs-nav-cta"} /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</header>
<!-- /wp:group -->
