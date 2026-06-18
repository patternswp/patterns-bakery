<?php
/**
 * Title: Card 5
 * Slug: patterns-bakery/card-5
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Bakery
 * @subpackage Patterns_Bakery/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|tertiary","style":"dashed","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--tertiary);border-bottom-style:dashed;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"horizontal"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|tertiary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-2.png" style="width:40px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"typography":{"fontSize":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h6 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:20px"><?php esc_html_e( 'Tomato Bruschetta', 'patterns-bakery' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Tomatoes, Olive Oil, Cheese', 'patterns-bakery' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"17px"}}} -->
<p style="font-size:17px;font-style:normal;font-weight:700"><?php esc_html_e( '$5.00', 'patterns-bakery' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
