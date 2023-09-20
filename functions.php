<?php
/**
 * citrus-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package citrus-theme
 */

if (file_exists(get_stylesheet_directory() . '/vendor/autoload.php')) {
	require get_stylesheet_directory() . '/vendor/autoload.php';
}

if (!defined('GUIDELINES_CHILD_DIR_PATH')) {
	define('GUIDELINES_CHILD_DIR_PATH', untrailingslashit(get_stylesheet_directory()));
}

if (!defined('GUIDELINES_CHILD_DIR_URI')) {
	define('GUIDELINES_CHILD_DIR_URI', untrailingslashit(get_stylesheet_directory_uri()));
}

if (!defined('GUIDELINES_CHILD_BUILD_URI')) {
	define('GUIDELINES_CHILD_BUILD_URI', untrailingslashit(get_stylesheet_directory_uri()) . '/assets/build');
}

if (!defined('GUIDELINES_CHILD_BUILD_DIR_PATH')) {
	define('GUIDELINES_CHILD_BUILD_DIR_PATH', untrailingslashit(get_stylesheet_directory()) . '/assets/build');
}

if (!defined('GUIDELINES_CHILD_BUILD_JS_URI')) {
	define('GUIDELINES_CHILD_BUILD_JS_URI', untrailingslashit(get_stylesheet_directory_uri()) . '/assets/build/js');
}

if (!defined('GUIDELINES_CHILD_BUILD_JS_DIR_PATH')) {
	define('GUIDELINES_CHILD_BUILD_JS_DIR_PATH', untrailingslashit(get_stylesheet_directory()) . '/assets/build/js');
}

if (!defined('GUIDELINES_CHILD_BUILD_IMG_URI')) {
	define('GUIDELINES_CHILD_BUILD_IMG_URI', untrailingslashit(get_stylesheet_directory_uri()) . '/assets/build/img');
}

if (!defined('GUIDELINES_CHILD_BUILD_CSS_URI')) {
	define('GUIDELINES_CHILD_BUILD_CSS_URI', untrailingslashit(get_stylesheet_directory_uri()) . '/assets/build/css');
}

if (!defined('GUIDELINES_CHILD_BUILD_CSS_DIR_PATH')) {
	define('GUIDELINES_CHILD_BUILD_CSS_DIR_PATH', untrailingslashit(get_stylesheet_directory()) . '/assets/build/css');
}

if (!defined('GUIDELINES_CHILD_LIB_CSS_URI')) {
	define('GUIDELINES_CHILD_LIB_CSS_URI', untrailingslashit(get_stylesheet_directory_uri()) . '/assets/libraries/css');
}

if (!defined('GUIDELINES_CHILD_LIB_JS_URI')) {
	define('GUIDELINES_CHILD_LIB_JS_URI', untrailingslashit(get_stylesheet_directory_uri()) . '/assets/libraries/js');
}

if (!defined('GUIDELINES_CHILD_LIB_JS_DIR_PATH')) {
	define('GUIDELINES_CHILD_LIB_JS_DIR_PATH', untrailingslashit(get_stylesheet_directory()) . '/assets/libraries/js');
}

if (!defined('GUIDELINES_CHILD_LIB_CSS_DIR_PATH')) {
	define('GUIDELINES_CHILD_LIB_CSS_DIR_PATH', untrailingslashit(get_stylesheet_directory()) . '/assets/libraries/css');
}

if (!defined('GUIDELINES_CHILD_BLOCKS_DIR_PATH')) {
	define('GUIDELINES_CHILD_BLOCKS_DIR_PATH', untrailingslashit(get_stylesheet_directory()) . '/blocks');
}

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_stylesheet_directory() . '/inc/template-functions.php';

/**
 * Theme Filters
 */
require get_stylesheet_directory() . '/inc/template-filters.php';

/**
 * Theme Actions
 */
require get_stylesheet_directory() . '/inc/template-actions.php';

/**
 * Post Types
 */
require get_stylesheet_directory() . '/inc/post-types.php';

/**
 * Taxonomies
 */
require get_stylesheet_directory() . '/inc/taxonomies.php';

/**
 * ACF
 */
require get_stylesheet_directory() . '/inc/acf.php';

/**
 * ACF Blocks
 */
require get_stylesheet_directory() . '/inc/blocks.php';
