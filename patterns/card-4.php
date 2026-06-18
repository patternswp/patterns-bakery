<?php
/**
 * Title: Card 4
 * Slug: patterns-bakery/card-4
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Bakery
 * @subpackage Patterns_Bakery/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-radius:5px"><!-- wp:image {"width":"150px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|tertiary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-2.png" style="width:150px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":5,"align":"wide","style":{"spacing":{"margin":{"bottom":"15px"}},"typography":{"lineHeight":"0.6","fontSize":"24px","fontStyle":"normal","fontWeight":"400"}},"textColor":"base"} -->
<h5 class="wp-block-heading alignwide has-base-color has-text-color" style="margin-bottom:15px;font-size:24px;font-style:normal;font-weight:400;line-height:0.6"><?php esc_html_e( 'Fresh Bread', 'patterns-bakery' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"lineHeight":"1.8"}},"textColor":"tertiary"} -->
<p class="has-text-align-left has-tertiary-color has-text-color" style="margin-bottom:0px;line-height:1.8"><?php esc_html_e( 'Lorem ipsum dolor sit amet, tempus iaculis. Duis pretium pretium tortor sagittis, at odio', 'patterns-bakery' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"15px"}}}} -->
<p class="pwp-txt-dec-non" style="margin-top:15px;text-transform:uppercase"><a href="#"><?php esc_html_e( 'Details', 'patterns-bakery' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
