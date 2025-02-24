<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for theme reivew notice.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Patterns_Bakery
 * @subpackage Patterns_Bakery/Patterns_Bakery_Intro
 */

global $current_user;
?>
<div id='patterns-bakery-review-notice' class="notice updated patterns-bakery-review-notice at-p at-pos">
	<button class="patterns-bakery-rn-permanent-close notice-dismiss at-flx at-al-itm-ctr">
		<?php esc_html_e( 'Dismiss', 'patterns-bakery' ); ?>
	</button>
	<p>
		<?php
		printf(
		/* Translators: %1$s current user display name. */
			esc_html__(
				'Howdy, %1$s! It seems that you have been using this theme for more than 15 days. We hope you are happy with everything that the theme has to offer. If you can spare a minute, please help us by leaving a review on WordPress.org. By spreading the love, we can continue to develop new amazing features in the future!',
				'patterns-bakery'
			),
			'<strong>' . esc_html( $current_user->display_name ) . '</strong>'
		);
		?>
	</p>

	<div class="links">
		<a href="https://wordpress.org/support/theme/patterns-bakery/reviews/#new-post" class="patterns-bakery-rn-temporary-close patterns-bakery-btn-primary button-primary at-inl-flx at-al-itm-ctr at-gap" target="_blank" rel="noopener noreferrer nofollow">
			<span class="dashicons dashicons-thumbs-up"></span>
			<span><?php esc_html_e( 'Sure', 'patterns-bakery' ); ?></span>
		</a>

		<button class="patterns-bakery-rn-temporary-close patterns-bakery-btn-secondary button-primary at-inl-flx at-al-itm-ctr at-gap">
			<span class="dashicons dashicons-calendar"></span>
			<span><?php esc_html_e( 'Maybe later', 'patterns-bakery' ); ?></span>
		</button>

		<button class="patterns-bakery-rn-permanent-close patterns-bakery-btn-default button-primary at-inl-flx at-al-itm-ctr at-gap">
			<span class="dashicons dashicons-smiley"></span>
			<span><?php esc_html_e( 'I already did', 'patterns-bakery' ); ?></span>
		</button>

		<a href="<?php echo esc_url( 'https://wordpress.org/support/theme/patterns-bakery' ); ?>" class="patterns-bakery-rn-temporary-close button-secondary at-inl-flx at-al-itm-ctr at-gap" target="_blank" rel="noopener noreferrer nofollow">
			<span class="dashicons dashicons-edit"></span>
			<span><?php esc_html_e( 'Got theme support question?', 'patterns-bakery' ); ?></span>
		</a>
	</div>
</div>
