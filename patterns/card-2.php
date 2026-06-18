<?php
/**
 * Title: Card 2
 * Slug: patterns-bakery/card-2
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Bakery
 * @subpackage Patterns_Bakery/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="border-radius:5px"><!-- wp:heading {"level":4,"align":"wide","style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1"}},"textColor":"base","fontSize":"xx-large"} -->
<h4 class="wp-block-heading alignwide has-base-color has-text-color has-xx-large-font-size" style="margin-bottom:0px;font-style:normal;font-weight:400;line-height:1"><?php esc_html_e( '01', 'patterns-bakery' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"level":5,"align":"wide","style":{"spacing":{"margin":{"bottom":"15px","top":"var:preset|spacing|40"}},"typography":{"lineHeight":"0.6","fontSize":"24px","fontStyle":"normal","fontWeight":"400"}},"textColor":"base"} -->
<h5 class="wp-block-heading alignwide has-base-color has-text-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:15px;font-size:24px;font-style:normal;font-weight:400;line-height:0.6"><?php esc_html_e( 'Choose the Cake', 'patterns-bakery' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"lineHeight":"1.8"}},"textColor":"tertiary"} -->
<p class="has-text-align-center has-tertiary-color has-text-color has-open-sans-font-family" style="margin-bottom:0px;line-height:1.8"><?php esc_html_e( 'Lorem ipsum dolor sit amet, tempus iaculis. Duis pretium pretium tortor sagittis, at odio', 'patterns-bakery' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
