<?php
/**
 * Title: Section Title 1
 * Slug: patterns-bakery/section-title-1
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Bakery
 * @subpackage Patterns_Bakery/patterns
 * @since      1.0.0
 */

?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"right","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.1","textTransform":"capitalize"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"base","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-right has-base-color has-text-color has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--20);font-style:normal;font-weight:700;line-height:1.1;text-transform:capitalize"><?php esc_html_e( 'Serving Fresh Bread Every Day', 'patterns-bakery' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"15px"}},"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.8"}},"textColor":"tertiary","fontSize":"medium"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-medium-font-size" style="margin-bottom:15px;font-style:normal;font-weight:300;line-height:1.8"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis', 'patterns-bakery' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"lineHeight":"1.7"}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-small-font-size" style="margin-bottom:0px;line-height:1.7"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis', 'patterns-bakery' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
