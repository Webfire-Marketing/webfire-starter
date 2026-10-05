<?php
/**
 * Title: Neueste Journal-Beiträge
 * Slug: webfire-starter/journal
 * Categories: webfire, posts
 * Keywords: blog, journal, beiträge, news
 * Viewport Width: 1400
 * Description: Die drei neuesten Beiträge mit Bild, Datum und Titel.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group">
		<!-- wp:heading --><h2 class="wp-block-heading"><?php esc_html_e( 'Aus dem Journal', 'webfire-starter' ); ?></h2><!-- /wp:heading -->
		<!-- wp:paragraph {"className":"wfs-arrow","fontSize":"small"} --><p class="wfs-arrow has-small-font-size"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php esc_html_e( 'Alle Beiträge', 'webfire-starter' ); ?></a></p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:query {"queryId":31,"query":{"perPage":3,"postType":"post","order":"desc","orderBy":"date","inherit":false,"sticky":"exclude"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"wfs-project","style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group wfs-project">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","sizeSlug":"large"} /-->
				<!-- wp:group {"className":"wfs-meta","textColor":"contrast-2","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group wfs-meta has-contrast-2-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20)">
					<!-- wp:post-date {"format":"j. F Y"} /-->
					<!-- wp:post-terms {"term":"category"} /-->
				</div>
				<!-- /wp:group -->
				<!-- wp:post-title {"level":3,"isLink":true} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
