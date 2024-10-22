<?php 
function geniuscourses_register_post_type(){
	$args = [
		'labels' => [
			'name'              => esc_html_x('Brands', 'taxonomy general name', 'geniuscourses'),
			'singular_name'     => esc_html_x('Brand', 'taxonomy singular name', 'geniuscourses'),
			'search_items'      => esc_html__('Search Brands', 'geniuscourses'),
			'all_items'         => esc_html__('All Brands', 'geniuscourses'),
			'parent_item'       => esc_html__('Parent Brand', 'geniuscourses'),
			'parent_item_colon' => esc_html__('Parent Brand:', 'geniuscourses'),
			'edit_item'         => esc_html__('Edit Brand', 'geniuscourses'),
			'update_item'       => esc_html__('Update Brand', 'geniuscourses'),
			'add_new_item'      => esc_html__('Add New Brand', 'geniuscourses'),
			'new_item_name'     => esc_html__('New Brand Name', 'geniuscourses'),
			'menu_name'         => esc_html__('Brand', 'geniuscourses'),
		],
	'show_ui' => true,
	'rewrite' => [
    'slug' => 'brands',
    'with_front' => true,  // Добавляет передний префикс
    'hierarchical' => false,  // Устанавливает неиерархическую структуру
],
	'query_var' => true,
	'show_in_rest'  => true,
	'show_admin_column' => true
	
	];
	if(!taxonomy_exists( 'brand' )){
		register_taxonomy( 'brand', ['car'], $args);
	}
	
	unset($args);


	$args = [
	'labels' => [
    'name'              => esc_html_x('Manufactures', 'taxonomy general name', 'geniuscourses'),
    'singular_name'     => esc_html_x('Manufacture', 'taxonomy singular name', 'geniuscourses'),
    'search_items'      => esc_html__('Search Manufactures', 'geniuscourses'),
    'all_items'         => esc_html__('All Manufactures', 'geniuscourses'),
    'parent_item'       => esc_html__('Parent Manufacture', 'geniuscourses'),
    'parent_item_colon' => esc_html__('Parent Manufacture:', 'geniuscourses'),
    'edit_item'         => esc_html__('Edit Manufacture', 'geniuscourses'),
    'update_item'       => esc_html__('Update Manufacture', 'geniuscourses'),
    'add_new_item'      => esc_html__('Add New Manufacture', 'geniuscourses'),
    'new_item_name'     => esc_html__('New Manufacture Name', 'geniuscourses'),
    'menu_name'         => esc_html__('Manufacture', 'geniuscourses'),
	],

	'show_ui' => true,
'rewrite' => [
    'slug' => 'manufactures',
    'with_front' => true,
    'hierarchical' => true,
],
	'query_var' => true,
	'show_in_rest'  => true,
	'show_admin_column' => true
	];

	register_taxonomy( 'manufacture', ['car'], $args);
	unset($args);

	$args = [
			'label' => esc_html__( 'Cars', 'geniuscourses'),
			'labels' => [
		    'name'                     => esc_html__('Cars', 'Post type generate name ','geniuscourses'),
        'singular_name'            => esc_html__('Car', 'geniuscourses'),
        'add_new'                  => esc_html__('Add New', 'geniuscourses'),
        'add_new_item'             => esc_html__('Add New Car', 'geniuscourses'),
        'edit_item'                => esc_html__('Edit Car', 'geniuscourses'),
        'new_item'                 => esc_html__('New Car', 'geniuscourses'),
        'view_item'                => esc_html__('View Car', 'geniuscourses'),
        'view_items'               => esc_html__('View Cars', 'geniuscourses'),
        'search_items'             => esc_html__('Search Cars', 'geniuscourses'),
        'not_found'                => esc_html__('No Cars found', 'geniuscourses'),
        'not_found_in_trash'       => esc_html__('No Cars found in Trash', 'geniuscourses'),
        'parent_item_colon'        => esc_html__('Parent Car:', 'geniuscourses'),
        'all_items'                => esc_html__('All Cars', 'geniuscourses'),
        'archives'                 => esc_html__('Car Archives', 'geniuscourses'),
        'attributes'               => esc_html__('Car Attributes', 'geniuscourses'),
        'insert_into_item'         => esc_html__('Insert into Car', 'geniuscourses'),
        'uploaded_to_this_item'    => esc_html__('Uploaded to this Car', 'geniuscourses'),
        'featured_image'           => esc_html__('Featured Image', 'geniuscourses'),
        'set_featured_image'       => esc_html__('Set featured image', 'geniuscourses'),
        'remove_featured_image'    => esc_html__('Remove featured image', 'geniuscourses'),
        'use_featured_image'       => esc_html__('Use as featured image', 'geniuscourses'),
        'menu_name'                => esc_html__('Cars', 'geniuscourses'),
        'filter_items_list'        => esc_html__('Filter Cars list', 'geniuscourses'),
        'items_list_navigation'    => esc_html__('Cars list navigation', 'geniuscourses'),
        'items_list'               => esc_html__('Cars list', 'geniuscourses'),
        'name_admin_bar'           => esc_html__('Car', 'geniuscourses'),
        'item_published'           => esc_html__('Car published', 'geniuscourses'),
        'item_published_privately' => esc_html__('Car published privately', 'geniuscourses'),
        'item_reverted_to_draft'   => esc_html__('Car reverted to draft', 'geniuscourses'),
        'item_scheduled'           => esc_html__('Car scheduled', 'geniuscourses'),
        'item_updated'             => esc_html__('Car updated', 'geniuscourses'),
			],
			'supports'              => ['title', 'editor', 'thumbnail', 'author', 'excerpt', 'post-formats'],
			'public' => true,
			'public_queryable' => true,
			'rewrite'               => ['slug' => 'cars'],
			'show_ui' => true,
			'show-in_menu' => true,
			'has_archive' => true,
			'show_in_admin_bar' => false,
			'menu_icon' => 'dashicons-smiley',
			'show_in_rest'  => true,
		];
	register_post_type( 'car', $args);
	
}
add_action('init','geniuscourses_register_post_type');