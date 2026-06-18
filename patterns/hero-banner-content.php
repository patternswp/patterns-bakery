<?php
/**
 * Title: Hero Banner Content
 * Slug: patterns-bakery/hero-banner-content
 * Categories: featured
 * Description: A layout that displays a title, content, and button group, suited for showcasing a hero banner.
 *
 * @package    Patterns_Bakery
 * @subpackage Patterns_Bakery/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"Hero content"},"align":"full","className":"patterns-bakery-hero-banner-content","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull patterns-bakery-hero-banner-content"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:separator {"className":"is-style-default","style":{"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-default"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:5px;padding-right:var(--wp--preset--spacing--10);padding-bottom:5px;padding-left:var(--wp--preset--spacing--10)"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"13px","lineHeight":"1.2","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default"} -->
<p class="has-text-align-left has-default-color has-text-color has-link-color" style="margin-bottom:0px;font-size:13px;letter-spacing:1px;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'We Care For Every Patient', 'patterns-bakery' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"layout":[],"typography":{"lineHeight":"1"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="line-height:1"><?php esc_html_e( 'Quality Breads &amp; Pastries available today', 'patterns-bakery' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":{}}} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"layout":{}},"layout":{"type":"constrained","contentSize":"500px","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px","lineHeight":1.6}}} -->
<p class="has-text-align-center" style="font-size:18px;line-height:1.6"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique', 'patterns-bakery' ); ?> </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":{}}} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"style":{"layout":{}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'view our menu', 'patterns-bakery' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
