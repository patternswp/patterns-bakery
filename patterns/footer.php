<?php
/**
 * Title: Footer
 * Slug: patterns-bakery/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A pattern for displaying the site footer.
 *
 * @package    Patterns_Bakery
 * @subpackage Patterns_Bakery/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"backgroundColor":"accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-background-color has-background"><!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"default"} -->
<h6 class="wp-block-heading has-text-align-center has-default-color has-text-color" style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e( 'Contact Info', 'patterns-bakery' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"small"} -->
<p class="has-text-align-center has-default-color has-text-color has-link-color has-small-font-size" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e( '785 15h Street, Office 478 Berlin, De 81566 6391 Elgin St. Celina, 10299', 'patterns-bakery' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","align":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"default","fontSize":"small"} -->
<p class="pwp-txt-dec-non has-text-align-center has-default-color has-text-color has-link-color has-small-font-size" style="margin-top:0px;margin-bottom:0px"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-bakery' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","align":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"default","fontSize":"medium"} -->
<p class="pwp-txt-dec-non has-text-align-center has-default-color has-text-color has-link-color has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600"><a href="<?php echo esc_url( 'callto:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-bakery' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:site-title {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"typography":{"textTransform":"uppercase"}}} /-->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"medium"} -->
<p class="has-text-align-center has-default-color has-text-color has-link-color has-medium-font-size" style="margin-bottom:0px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit utelit tellus luctus.', 'patterns-bakery' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
<!-- /wp:social-links -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"default"} -->
<h6 class="wp-block-heading has-text-align-center has-default-color has-text-color" style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e( 'Gallery', 'patterns-bakery' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"auto","height":"80px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg" style="aspect-ratio:1;object-fit:cover;width:auto;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"auto","height":"80px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.jpg" style="aspect-ratio:1;object-fit:cover;width:auto;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"auto","height":"80px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-2.jpg" style="aspect-ratio:1;object-fit:cover;width:auto;height:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"auto","height":"80px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-3.jpg" style="aspect-ratio:1;object-fit:cover;width:auto;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"auto","height":"80px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg" style="aspect-ratio:1;object-fit:cover;width:auto;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"auto","height":"80px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg" style="aspect-ratio:1;object-fit:cover;width:auto;height:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"#ffffff52","style":"solid","width":"1px"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"},"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"
    style="border-top-color:#ffffff52;border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0">

<!-- wp:navigation {"textColor":"default","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"},"typography":{"fontSize":"13px","textTransform":"none","letterSpacing":"0px"}}} -->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy', 'patterns-bakery' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Policy', 'patterns-bakery' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Terms & Conditions', 'patterns-bakery' ); ?>","url":"#"} /-->
<!-- /wp:navigation -->

<!-- wp:pattern {"slug":"patterns-bakery/copyright"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:pattern {"slug":"patterns-bakery/scroll-to-top-button"} /-->
</div>
<!-- /wp:group -->
