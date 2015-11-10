<?php
/**
 * Register the doc pages post type. It must be different than the regulst page
 * since there should be clear difference if you want to add extra pages to
 * the site.
 *
 * @since DX Docs v0.0.1
 */

/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
function dxdocs_docs_page() {

	// Visual representation for the post type
	$labels = array(
		'name'                => __( 'Docs Pages', THEME_DOMAIN ),
		'singular_name'       => __( 'Docs Page', THEME_DOMAIN ),
		'add_new'             => _x( 'Add New Docs Page', THEME_DOMAIN, THEME_DOMAIN ),
		'add_new_item'        => __( 'Add New Docs Page', THEME_DOMAIN ),
		'edit_item'           => __( 'Edit Docs Page', THEME_DOMAIN ),
		'new_item'            => __( 'New Docs Page', THEME_DOMAIN ),
		'view_item'           => __( 'View Docs Page', THEME_DOMAIN ),
		'search_items'        => __( 'Search Docs Pages', THEME_DOMAIN ),
		'not_found'           => __( 'No Docs Pages found', THEME_DOMAIN ),
		'not_found_in_trash'  => __( 'No Docs Pages found in Trash', THEME_DOMAIN ),
		'parent_item_colon'   => __( 'Parent Docs Page:', THEME_DOMAIN ),
		'menu_name'           => __( 'Docs Pages', THEME_DOMAIN ),
	);

	// Post type setup.
	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => true,
		'description'         => 'Set your documentation pages',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-welcome-write-blog',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'author','custom-fields', 'revisions', 'page-attributes'
		)
	);

	// Finally register the post type.
	register_post_type( 'docs-page', $args );
}

add_action( 'init', 'dxdocs_docs_page' );
