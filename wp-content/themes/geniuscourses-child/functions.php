<?php 
 function geniuscourses_child_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'New Pages Sidebar', 'geniuscourses' ),
			'id'            => 'newsidebar',
			'description'   => esc_html__( 'Appear as a Sidebar on New Pages.', 'geniuscourses' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'geniuscourses_child_widgets_init' );