<?php
/**
 * Title: Latest Comments
 * Slug: patterns-bakery/latest-comments
 * Categories: posts
 * Description: Display latest comments, commonly placed in sidebars or footers.
 *
 * @package    Patterns_Bakery
 * @subpackage Patterns_Bakery/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"40px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:40px"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"30px"}},"typography":{"fontSize":"24px"}}} -->
<h4 class="wp-block-heading" style="margin-bottom:30px;font-size:24px"><?php esc_html_e( 'Recent comments', 'patterns-bakery' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:latest-comments {"displayExcerpt":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /--></div>
<!-- /wp:group -->
