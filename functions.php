<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Patterns Bakery functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Patterns Bakery
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'PATTERNS_BAKERY_PATH', trailingslashit( get_template_directory() ) );
define( 'PATTERNS_BAKERY_URL', trailingslashit( get_template_directory_uri() ) );
define( 'PATTERNS_BAKERY_VERSION', '1.0.3' );
define( 'PATTERNS_BAKERY_THEME_NAME', 'patterns-bakery' );
define( 'PATTERNS_BAKERY_OPTION_NAME', 'patterns-bakery' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PATTERNS_BAKERY_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function patterns_bakery_run() {
	new Patterns_Bakery();
}
patterns_bakery_run();
