<?php
class Elementor_Slider_Widget extends \Elementor\Widget_Base {

public function get_name(): string {
  return 'geniuscourses_slider';
}

public function get_title(): string{
  return esc_html__( 'Geniuscourses Slider', 'geniuscourses-core' );
}

public function get_icon() {
  return 'eicon-post-slider';
}

public function get_categories(): array {
  return [ 'general' ];
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

   $repeater = new \Elementor\Repeater();

   $repeater->add_control(
  'geniuscourses_title_one',
  [
    'label' => esc_html__( 'Title One', 'textdomain' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => '',
      'placeholder' => esc_html__( 'Enter your title', 'textdomain' ),
  ]
  );
  $repeater->add_control(
    'geniuscourses_title_two',
    [
      'label' => esc_html__( 'Title Two', 'textdomain' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => '',
        'placeholder' => esc_html__( 'Enter your title', 'textdomain' ),
    ]
    );

    $repeater->add_control(
    'image',
    [
      'label' => __( 'Chose Image', 'plugin-domain' ),
      'type' => \Elementor\Controls_Manager::MEDIA,
      'default' => [
        'url' => \Elementor\Utils::get_placeholder_image_src(),
      ]
    ]
  );
  $this->add_control(
    'slider',
    [
      'label' => esc_html__( 'Slider', 'textdomain' ),
      'type' => \Elementor\Controls_Manager::REPEATER,
      'fields' => $repeater->get_controls(),
      'title_field' => '{{{ geniuscourses_title_one }}}',
    ]
  );
  $this->end_controls_section();

}

protected function render(): void {
  $settings = $this->get_settings_for_display();
?>
     <div class="container-fluid p-0" style="margin-bottom: 90px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            
              <?php 
              if ( $settings['slider'] ) {
                echo '<div class="carousel-inner">';
                $first_item = true;
                foreach ( $settings['slider'] as $item ) { 
                  $active_class = $first_item ? ' active' : '';
                  $first_item = false;
          ?>
                  <div class="carousel-item<?php echo $active_class; ?>">
                      <?php if ($item['image']['url']) { ?>
                          <img class="w-100" src="<?php echo esc_url($item['image']['url']); ?>" alt="Image">
                      <?php } ?>
                      <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                          <div class="p-3" style="max-width: 900px;">
                              <?php if ($item['geniuscourses_title_one']) { ?>
                                  <h4 class="text-white text-uppercase mb-md-3"><?php echo esc_html($item['geniuscourses_title_one']); ?></h4>
                              <?php } ?>
                              <h1 class="display-1 text-white mb-md-4"><?php echo esc_html($item['geniuscourses_title_two']); ?></h1>
                              <a href="#" class="btn btn-primary py-md-3 px-md-5 mt-2">Reserve Now</a>
                          </div>
                      </div>
                  </div>
                </div>

                 <?php
                }
                echo '</div>';
              }
                
              ?>
                            
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
<?php 
}

}