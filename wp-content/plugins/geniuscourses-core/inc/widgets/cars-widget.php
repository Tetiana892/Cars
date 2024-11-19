<?php
class Elementor_Cars_Widget extends \Elementor\Widget_Base {

public function get_name(): string {
  return 'geniuscourses_cars';
}

public function get_title(): string{
  return esc_html__( 'Geniuscourses Cars', 'geniuscourses-core' );
}

public function get_icon(): string {
  return 'eicon-post-slider';
}

public function get_categories(): array {
  return [ 'custom_category' ];
}

public function get_keywords(): array {
  return [ 'about', 'url', 'link' ];
}

public function get_custom_help_url(): string {
  return 'https://developers.elementor.com/docs/widgets/';
}


protected function register_controls(): void {

  $this->start_controls_section(
    'content_section',
    [
      'label' => esc_html__( 'Content', 'textdomain' ),
      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
  );

   $this->add_control(
  'geniuscourses_title_one',
  [
    'label' => esc_html__( 'Title One', 'textdomain' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => '',
      'placeholder' => esc_html__( 'Enter your title', 'textdomain' ),
  ]
  );
  $this->add_control(
    'geniuscourses_title_two',
    [
      'label' => esc_html__( 'Title Two', 'textdomain' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => '',
        'placeholder' => esc_html__( 'Enter your title', 'textdomain' ),
    ]
    );

  $this->end_controls_section();

}

protected function render(): void {
  $settings = $this->get_settings_for_display();
?>
     <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
           <?php if($settings['geniuscourses_title_one']) {?> <h1 class="display-1 text-primary text-center"><?php echo esc_html($settings['geniuscourses_title_one']); ?></h1><?php } ?>
            <h2 class="display-4 text-uppercase text-center mb-5"><?php echo esc_html($settings['geniuscourses_title_two']); ?></h2>
            <div class="row">
            <?php 
				 $paged = (get_query_var('paged')) ? (get_query_var('paged')) : 1;
	       $cars = new WP_Query([
		                          'post_type' => 'car',
		                          'posts_per_page' => 3,
		                          'paged' => $paged
	        ]);	
	           if($cars->have_posts()) : while($cars->have_posts()) : $cars->the_post(); ?>

	           <?php  get_template_part('partials/content', 'car'); ?>

	          <?php endwhile; ?>				

	    </div>
	    <?php
	     else : ?>
		   <?php  get_template_part('partials/content', 'none'); ?>
		   <?php endif; 
			 wp_reset_postdata();
			 ?>           
            </div>
        </div>
    </div>
<?php 
}

}