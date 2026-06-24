<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for getting started notice.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Patterns_Bakery
 * @subpackage Patterns_Bakery/Patterns_Bakery_Intro
 */
?>
<div id="patterns-bakery-gsn" class="updated notice-info patterns-bakery-gsn at-pos">
	<button class="patterns-bakery-gsn-close notice-dismiss at-flx at-al-itm-ctr">
		<?php esc_html_e( 'Dismiss', 'patterns-bakery' ); ?>
	</button>
	<div class="patterns-bakery-gsn-container at-flx at-gap at-p">
		<img class="patterns-bakery-gsn-screenshot at-w" src="<?php echo esc_url( PATTERNS_BAKERY_URL . 'screenshot.png' ); ?>" alt="<?php esc_attr_e( 'Patterns Bakery', 'patterns-bakery' ); ?>" />
		<div class="patterns-bakery-gsn-notice">
			<h2>
				<?php
				printf(
					/* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
					esc_html__( 'Welcome! Thank you for choosing %1$s! To fully take advantage of the best our theme can offer, please make sure you visit our %2$swelcome page%3$s.', 'patterns-bakery' ),
					'<strong>' . esc_html( wp_get_theme()->get( 'Name' ) ) . '</strong>',
					'<a href="' . esc_url( menu_page_url( PATTERNS_BAKERY_THEME_NAME, false ) ) . '">',
					'</a>'
				);
				?>
			</h2>
			<?php
			$plugin_names = patterns_bakery_get_plugin_names();
			if ( $plugin_names ) {
				?>
				<p>
					<?php
					$plugin_count = count( explode( ', ', $plugin_names ) );
					printf(
						/* translators: %s: singular/plural . */
						esc_html__( 'Clicking the button below will install and activate the following %s:', 'patterns-bakery' ),
						$plugin_count > 1 ? esc_html__( 'plugins', 'patterns-bakery' ) : esc_html__( 'plugin', 'patterns-bakery' )
					);
					echo ' ';
					echo esc_html( $plugin_names );
					?>
				</p>
				<?php
			}
			?>
			<button class="patterns-bakery-btn-primary button button-primary button-hero patterns-bakery-install-plugins">
				<?php esc_html_e( 'Get started with Patterns Bakery', 'patterns-bakery' ); ?>
			</button>
		</div>
	</div>
</div>
