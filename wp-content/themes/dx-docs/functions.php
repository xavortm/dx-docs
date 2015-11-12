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
	wp_enqueue_style( 'dxdocs', get_template_directory_uri() . '/assets/css/master.css' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'epiceditor', get_template_directory_uri() . '/assets/scripts/epiceditor.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/scripts/scripts.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'dxdocs_scripts' );

function dxdocs_js_vars() {

	$can_edit = false;

	if( is_user_logged_in() && current_user_can( 'edit_pages' ) ) {
		$can_edit = true;
	}

	wp_localize_script( 'scripts', 'WPOBJ', array(
		'home' => get_option('siteurl'),
		'resources' => get_template_directory_uri(),
		'canEdit' => $can_edit
	) );
}

add_action( 'wp_enqueue_scripts', 'dxdocs_js_vars' );