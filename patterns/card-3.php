<?php
/**
 * Title: Card 3
 * Slug: patterns-bakery/card-3
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Bakery
 * @subpackage Patterns_Bakery/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.jpg","dimRatio":70,"overlayColor":"base","contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:5px;padding-right:var(--wp--preset--spacing--10);padding-bottom:5px;padding-left:var(--wp--preset--spacing--10)"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"13px","lineHeight":"1.2","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default"} -->
<p class="has-text-align-left has-default-color has-text-color has-link-color" style="margin-bottom:0px;font-size:13px;letter-spacing:1px;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'Oil Bread Recipe', 'patterns-bakery' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"align":"wide","style":{"spacing":{"margin":{"bottom":"15px","top":"15px"}},"typography":{"lineHeight":"0.6","fontStyle":"normal","fontWeight":"400"}},"textColor":"default","fontSize":"large"} -->
<h4 class="wp-block-heading alignwide has-default-color has-text-color has-large-font-size" style="margin-top:15px;margin-bottom:15px;font-style:normal;font-weight:400;line-height:0.6"><?php esc_html_e( 'Download Course', 'patterns-bakery' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"lineHeight":"1.8"}},"textColor":"default"} -->
<p class="has-text-align-left has-default-color has-text-color" style="margin-bottom:0px;line-height:1.8"><?php esc_html_e( 'Lorem ipsum dolor sit amet, tempus iaculis. Duis pretium pretium tortor sagittis, at odio', 'patterns-bakery' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Download Course', 'patterns-bakery' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
