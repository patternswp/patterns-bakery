<?php
/**
 * Title: Hero Banner
 * Slug: patterns-bakery/hero-banner
 * Categories: banner
 * Description: A layout for displaying hero banner content with a background and SVGs.
 *
 * @package    Patterns_Bakery
 * @subpackage Patterns_Bakery/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg","dimRatio":30,"overlayColor":"accent","minHeight":80,"minHeightUnit":"vh","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="padding-top:0px;padding-right:var(--wp--preset--spacing--30);padding-bottom:0px;padding-left:var(--wp--preset--spacing--30);min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-accent-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg" data-object-fit="cover"/>

<div class="wp-block-cover__inner-container">
<!-- wp:pattern {"slug":"patterns-bakery/hero-banner-content"} /-->
</div>

</div>
<!-- /wp:cover -->
