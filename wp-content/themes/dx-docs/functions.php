<?php
/**
 * Functions and definitions.
 *
 * @package WordPress
 * @since DX Docs v0.0.1
 */

// Theme domain. Use this constant for translation purposes.
define( 'THEME_DOMAIN', 'dxdocs' );

// Include extra files to run the theme.
require_once( get_template_directory() . '/inc/post-types.php' );

// ----------------------------------------------------------------------------

if ( ! function_exists( 'dxdocs_setup' ) ) :

// Sets up theme defaults and registers support for various WordPress features.
function dxdocs_setup() {

	// Make theme available for translation
	load_theme_textdomain( THEME_DOMAIN, get_template_directory() . '/languages' );

}

endif;
add_action( 'after_setup_theme', 'dxdocs_setup' );

/**
 * Enqueues scripts and styles.
 *
 * @since DX Docs 0.0.1
 */
function dxdocs_scripts() {

	// Theme stylesheet.
	wp_enqueue_style( 'dxdocs-style', get_template_directory_uri() . '/assets/css/master.css' );

}
add_action( 'wp_enqueue_scripts', 'dxdocs_scripts' );