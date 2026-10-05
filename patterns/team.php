<?php
/**
 * Title: Team
 * Slug: webfire-starter/team
 * Categories: webfire, team
 * Keywords: team, personen, mitarbeiter
 * Viewport Width: 1400
 * Description: Alle Personen aus dem Inhaltstyp „Team“ mit Foto, Name und Rolle.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading --><h2 class="wp-block-heading"><?php esc_html_e( 'Team', 'webfire-starter' ); ?></h2><!-- /wp:heading -->
	<!-- wp:query {"queryId":41,"query":{"perPage":12,"postType":"team","order":"asc","orderBy":"menu_order","inherit":false},"className":"wfs-team"} -->
	<div class="wp-block-query wfs-team">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":4}} -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:post-featured-image {"aspectRatio":"4/5","sizeSlug":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} /-->
				<!-- wp:post-title {"level":3,"fontSize":"medium","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontWeight":"500","letterSpacing":"0"}}} /-->
				<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small","metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"team_rolle"}}}}} --><p class="has-contrast-2-color has-text-color has-small-font-size"></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
