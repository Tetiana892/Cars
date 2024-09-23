<?php
/**
 * Geniuscourses functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Geniuscourses
 */

 function geniuscourses_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'geniuscourses' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'geniuscourses' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Car Pages Sidebar', 'geniuscourses' ),
			'id'            => 'carsidebar',
			'description'   => esc_html__( 'Appear as a Sidebar on Car Pages.', 'geniuscourses' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'geniuscourses_widgets_init' );


function geniuscourses_enqueue_scripts(){
wp_enqueue_style( 'geniuscourses-general', get_template_directory_uri().'/assets/css/general.css', array(),'1.0', 'all');

wp_enqueue_script('geniuscourses-scripts', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '1.0',true);

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}
}

add_action( 'wp_enqueue_scripts', 'geniuscourses_enqueue_scripts');

function geniuscourses_theme_init(){

	//Регістрація локацій меню
register_nav_menus( array(
	'header_nav' => 'Header Navigation',
	'footer_nav' => 'Footer Navigation'
) );

//Підтримка тегов html5
add_theme_support(
	'html5',
	array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	)
);

// Підтримка багатомовності
load_theme_textdomain('geniuscourses', get_template_directory( ).'/lang' );


// Підтримка тумб
add_theme_support( 'post-thumbnails' );

add_theme_support( 'post-formats', 
[
	'video',
	'quote',
	'image',
	'gallery'
]
);
add_post_type_support( 'car', 'post-formats' );

}
add_action('after_setup_theme','geniuscourses_theme_init', 0);


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


// завжди при реєстрації пост тайпу має бути цей хук, не буде проблем з 404 помилкою
function geniuscourses_rewrite_rules(){
	geniuscourses_register_post_type();
	flush_rewrite_rules();
}

add_action('after_switch_theme', 'geniuscourses_rewrite_rules');


if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function geniuscourses_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Geniuscourses, use a find and replace
		* to change 'geniuscourses' to the name of your theme in all the template files.
		*/
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/


	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'geniuscourses_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'geniuscourses_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function geniuscourses_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'geniuscourses_content_width', 640 );
}
add_action( 'after_setup_theme', 'geniuscourses_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

