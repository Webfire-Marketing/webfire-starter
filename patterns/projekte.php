<?php
/**
 * Title: Ausgewählte Projekte
 * Slug: webfire-starter/projekte
 * Categories: webfire
 * Keywords: projekte, portfolio, referenzen
 * Viewport Width: 1400
 * Description: Die vier neuesten Projekte als Raster – Daten kommen aus dem Inhaltstyp „Projekte“.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group">
		<!-- wp:heading --><h2 class="wp-block-heading"><?php esc_html_e( 'Ausgewählte Projekte', 'webfire-starter' ); ?></h2><!-- /wp:heading -->
		<!-- wp:paragraph {"className":"wfs-arrow","fontSize":"small"} --><p class="wfs-arrow has-small-font-size"><a href="<?php echo esc_url( home_url( '/projekte/' ) ); ?>"><?php esc_html_e( 'Alle Projekte', 'webfire-starter' ); ?></a></p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:query {"queryId":11,"query":{"perPage":4,"postType":"projekt","order":"desc","orderBy":"date","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":2}} -->
			<!-- wp:group {"className":"wfs-project","style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group wfs-project">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","sizeSlug":"large"} /-->
				<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /-->
				<!-- wp:group {"className":"wfs-meta","textColor":"contrast-2","fontSize":"small","layout":{"type":"default"}} -->
				<div class="wp-block-group wfs-meta has-contrast-2-color has-text-color has-small-font-size">
					<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"projekt_ort"}}}}} --><p></p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"projekt_jahr"}}}}} --><p></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
