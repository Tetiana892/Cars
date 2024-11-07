<?php
/**
 * Geniuscourses functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Geniuscourses
 */


 require get_template_directory() . '/inc/redux-options.php';
 require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

 add_action( 'tgmpa_register', 'geniuscourses_register_required_plugins' );
 function geniuscourses_register_required_plugins() {
	$plugins = array(
		array(
				'name'               => 'Geniuscourses Core', 
				'slug'               => 'geniuscourses-core',
				'source'             => get_template_directory() . '/plugins/geniuscourses-core.zip', 
				'required'           => true, 
				'version'            => '1.0',
				'force_activation'   => false, 
				'force_deactivation' => false,
		),
		array(
				'name'      => 'Advanced Custom Fields',
				'slug'      => 'advanced-custom-fields',
				'required'  => true,
		),
		array(
			 'name'      => 'Redux Framework',
			 'slug'      => 'redux-framework',
			 'required'  => true,
	 ),
);

$config = array(
		'id'           => 'geniuscourses', 
		'default_path' => '', 
		'menu'         => 'tgmpa-install-plugins', 
		'has_notices'  => true,                    
		'dismissable'  => true,                   
		'dismiss_msg'  => '',                     
		'is_automatic' => false,                   
		'message'      => '',                     
);

tgmpa( $plugins, $config );
 }
 
function geniuscourses_paginate($query){
	$big = 99999999999;

	$paged = '';
	if(is_singular()){
		$paged = get_query_var( 'page');
	} else {
		$paged = get_query_var( 'paged' );
	}

	echo paginate_links([
'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link( $big) )),
'format'    => '?paged=%#%',
'current'   => max(1, get_query_var('paged')),
'total'     => $query->max_num_pages,
'prev_next' => false

	]);
}

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

// ajax
wp_enqueue_script('geniuscourses-ajax', get_template_directory_uri().'/assets/js/ajax.js', array('jquery'), '1.0',true);
wp_localize_script(
	'geniuscourses-ajax',
  'geniuscourses_ajax_script',
 array(
	'ajaxurl' => admin_url('admin-ajax.php'),
	'nonce'   => wp_create_nonce('ajax-nonce'),
	'string_box' => esc_html__( "Hello",'geniuscourses'),
	'string_new' => esc_html__( "Hello Word",'geniuscourses'),
 ) 
 );

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}
}

add_action( 'wp_enqueue_scripts', 'geniuscourses_enqueue_scripts');

//ajax
function geniuscourses_ajax_example(){

if(!wp_verify_nonce( $_REQUEST['nonce'], 'ajax-nonce' )){
	die;
}

if(isset($_REQUEST['string_one'])){
	echo $_REQUEST['string_one'];
}

echo "<br>";

if(isset($_REQUEST['string_two'])){
	echo $_REQUEST['string_two'];
}

$cars = new WP_Query(array(
	'post_type' => 'car',
	'post_per_page' => -1
));

if ($cars->have_posts()) : while ($cars->have_posts()) : $cars->the_post(); 

     get_template_part('partials/content', 'car'); 

  endwhile; endif; 
  wp_reset_postdata();

die;
}
add_action('wp_ajax_geniuscourses_ajax_example', 'geniuscourses_ajax_example' );
add_action('wp_ajax_nopriv_geniuscourses_ajax_example', 'geniuscourses_ajax_example' );


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

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );

// Підтримка багатомовності
load_theme_textdomain('geniuscourses', get_template_directory( ).'/lang' );


// Підтримка тумб
add_theme_support( 'post-thumbnails' );
add_image_size( 'car-cover', 240, 188, ['center', 'center']);

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




function geniuscourses_content_width(): void {
	$GLOBALS['content_width'] = apply_filters( 'geniuscourses_content_width', 640 );
}
add_action( 'after_setup_theme', 'geniuscourses_content_width', 0 );

function geniuscourses_custom_comments($comment, $args, $depth): void{
	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
} else {
		$tag       = 'li';
		$add_below = 'div-comment';
}?>
<<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
if ( 'div' != $args['style'] ) { ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
} ?>
		<div class="comment-author vcard"><?php 
				if ( $args['avatar_size'] != 0 ) {
						echo get_avatar( $comment, $args['avatar_size'] ); 
				} 
				printf( __( '<cite class="fn">Author: %s</cite>' ), get_comment_author_link() ); ?>
		</div><?php 
		if ( $comment->comment_approved == '0' ) { ?>
				<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
		} ?>
		<div class="comment-meta commentmetadata">
				<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
						/* translators: 1: date, 2: time */
						printf( 
								__('%1$s at %2$s'), 
								get_comment_date(),  
								get_comment_time() 
						); ?>
				</a><?php 
				edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
		</div>

		<?php comment_text(); ?>

		<div class="reply"><?php 
						comment_reply_link( 
								array_merge( 
										$args, 
										array( 
												'add_below' => $add_below, 
												'depth'     => $depth, 
												'max_depth' => $args['max_depth'] 
										) 
								) 
						); ?>
		</div><?php 
if ( 'div' != $args['style'] ) : ?>
		</div><?php 
endif;
}

function gc_first_function(): void{
	echo 'Hello Word<br>';
}

add_action( 'geniuscourses_our_hook', 'gc_first_function');

function gc_second_function(): void{
	echo "test<br>";
}

add_action( 'geniuscourses_our_hook', 'gc_second_function' );

function gc_first_filter($name): string{
	$name = 'Natali';
	$name = 'My name is : ' . $name;
	return $name;
}

add_filter( 'geniuscourses_first_filter', 'gc_first_filter' );

//delete filter
remove_filter( 'geniuscourses_first_filter', 'gc_first_filter' );
// remove_action( 'init','geniuscourses_register_post_type' );