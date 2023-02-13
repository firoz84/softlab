<?php 




/**
 * Register a custom post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 */
function softlab_codex_book_init() {
	$labels = array(
		'name'                  => _x( 'Product', 'Product', 'softlab' ),
		'singular_name'         => _x( 'Product', 'Product', 'softlab' ),
		'menu_name'             => _x( 'Product', 'Product', 'softlab' ),
		'name_admin_bar'        => _x( 'Product', 'Add New on Toolbar', 'softlab' ),
		'add_new'               => __( 'Add New', 'softlab' ),
		'add_new_item'          => __( 'Add New Product', 'softlab' ),
		'new_item'              => __( 'New Product', 'softlab' ),
		'edit_item'             => __( 'Edit Product', 'softlab' ),
		'view_item'             => __( 'View Product', 'softlab' ),
		'all_items'             => __( 'All Product', 'softlab' ),
		'search_items'          => __( 'Search Product', 'softlab' ),
		'parent_item_colon'     => __( 'Parent Product:', 'softlab' ),
		'not_found'             => __( 'No books found.', 'softlab' ),
		'not_found_in_trash'    => __( 'No books found in Trash.', 'softlab' ),
		'featured_image'        => _x( 'Product Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'softlab' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'softlab' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'softlab' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'product', $args );


	//services 
	$labels = array(
		'name'                  => _x( 'servics', 'servics', 'softlab' ),
		'singular_name'         => _x( 'servics', 'servics', 'softlab' ),
		'menu_name'             => _x( 'servics', 'servics', 'softlab' ),
		'name_admin_bar'        => _x( 'servics', 'Add New on Toolbar', 'softlab' ),
		'add_new'               => __( 'Add New', 'softlab' ),
		'add_new_item'          => __( 'Add New servics', 'softlab' ),
		'new_item'              => __( 'New servics', 'softlab' ),
		'edit_item'             => __( 'Edit servics', 'softlab' ),
		'view_item'             => __( 'View servics', 'softlab' ),
		'all_items'             => __( 'All servics', 'softlab' ),
		'search_items'          => __( 'Search servics', 'softlab' ),
		'parent_item_colon'     => __( 'Parent servics:', 'softlab' ),
		'not_found'             => __( 'No servics found.', 'softlab' ),
		'not_found_in_trash'    => __( 'No servics found in Trash.', 'softlab' ),
		'featured_image'        => _x( 'servics Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'softlab' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'softlab' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'softlab' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'servics', $args );

	//testimonials
	
	$labels = array(
		'name'                  => _x( 'Testimonials', 'Testimonials', 'softlab' ),
		'singular_name'         => _x( 'Testimonials', 'Testimonials', 'softlab' ),
		'menu_name'             => _x( 'Testimonials', 'Testimonials', 'softlab' ),
		'name_admin_bar'        => _x( 'Testimonials', 'Add New on Toolbar', 'softlab' ),
		'add_new'               => __( 'Add New', 'softlab' ),
		'add_new_item'          => __( 'Add New Testimonials', 'softlab' ),
		'new_item'              => __( 'New Testimonials', 'softlab' ),
		'edit_item'             => __( 'Edit Testimonials', 'softlab' ),
		'view_item'             => __( 'View Testimonials', 'softlab' ),
		'all_items'             => __( 'All Testimonials', 'softlab' ),
		'search_items'          => __( 'Search Testimonials', 'softlab' ),
		'parent_item_colon'     => __( 'Parent Testimonials:', 'softlab' ),
		'not_found'             => __( 'No Testimonials found.', 'softlab' ),
		'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'softlab' ),
		'featured_image'        => _x( 'Testimonials Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'softlab' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'softlab' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'softlab' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'testimonials', $args );

	//Counter for the number of
	
	$labels = array(
		'name'                  => _x( 'counter', 'counter', 'softlab' ),
		'singular_name'         => _x( 'counter', 'counter', 'softlab' ),
		'menu_name'             => _x( 'counter', 'counter', 'softlab' ),
		'name_admin_bar'        => _x( 'counter', 'Add New on Toolbar', 'softlab' ),
		'add_new'               => __( 'Add New', 'softlab' ),
		'add_new_item'          => __( 'Add New counter', 'softlab' ),
		'new_item'              => __( 'New counter', 'softlab' ),
		'edit_item'             => __( 'Edit counter', 'softlab' ),
		'view_item'             => __( 'View counter', 'softlab' ),
		'all_items'             => __( 'All counter', 'softlab' ),
		'search_items'          => __( 'Search counter', 'softlab' ),
		'parent_item_colon'     => __( 'Parent counter:', 'softlab' ),
		'not_found'             => __( 'No counter found.', 'softlab' ),
		'not_found_in_trash'    => __( 'No counter found in Trash.', 'softlab' ),
		'featured_image'        => _x( 'counter Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'softlab' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'softlab' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'softlab' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail' ),
	);

	register_post_type( 'counter', $args );
}

add_action( 'init', 'softlab_codex_book_init' );