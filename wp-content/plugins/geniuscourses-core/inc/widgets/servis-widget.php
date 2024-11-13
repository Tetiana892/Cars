<?php
class Elementor_Servis_Widget extends \Elementor\Widget_Base {

  public function get_name(): string {
    return 'geniuscourses_servis';
  }

  public function get_title(): string {
    return esc_html__( 'Geniuscourses Servis', 'geniuscourses-core' );
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

    $this->add_control(
      'geniuscourses_title_one',
      [
        'label' => esc_html__( 'Title One', 'textdomain' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => '02',
        'placeholder' => esc_html__( 'Enter your title', 'textdomain' ),
      ]
    );

    $this->add_control(
      'geniuscourses_title_two',
      [
        'label' => esc_html__( 'Title Two', 'textdomain' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => 'Our Services',
        'placeholder' => esc_html__( 'Enter your title', 'textdomain' ),
      ]
    );

    $repeater = new \Elementor\Repeater();

    $repeater->add_control(
      'icon_class',
      [
        'label' => esc_html__( 'Icon Class', 'textdomain' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => 'fa-taxi',
        'placeholder' => esc_html__( 'Enter FontAwesome icon class', 'textdomain' ),
      ]
    );

    $repeater->add_control(
      'service_number',
      [
          'label' => esc_html__('Service Number', 'textdomain'),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => '01',
          'placeholder' => esc_html__('Enter number', 'textdomain'),
      ]
  );  
    
    $repeater->add_control(
      'geniuscourses_title',
      [
        'label' => esc_html__( 'Title', 'textdomain' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => 'Car Rental',
        'placeholder' => esc_html__( 'Enter your title', 'textdomain' ),
      ]
    );

    $repeater->add_control(
      'geniuscourses_description',
      [
        'label' => esc_html__( 'Description', 'textdomain' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => 'Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed',
        'rows' => 10,
        'placeholder' => esc_html__( 'Enter your description', 'textdomain' ),
      ]
    );

    $this->add_control(
      'slider',
      [
        'label' => esc_html__( 'Slider', 'textdomain' ),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $repeater->get_controls(),
        'title_field' => '{{{ geniuscourses_title }}}',
      ]
    );

    $this->end_controls_section();
  }

  protected function render(): void {
    $settings = $this->get_settings_for_display();
    ?>
    <div class="container-fluid py-5">
      <div class="container pt-5 pb-3">
        <?php if($settings['geniuscourses_title_one']) { ?><h1 class="display-1 text-primary text-center">
          <?php echo esc_html($settings['geniuscourses_title_one']); ?></h1><?php } ?>
        <h1 class="display-4 text-uppercase text-center mb-5"><?php echo esc_html($settings['geniuscourses_title_two']); ?></h1>

        <div class="row">
          <?php if ( $settings['slider'] ) {
            foreach ( $settings['slider'] as $item ) { ?>
              <div class="col-lg-4 col-md-6 mb-2">
                <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                    <i class="fa fa-2x <?php echo esc_attr($item['icon_class']); ?> text-secondary"></i>
                    </div>
                    <h1 class="display-2 text-white mt-n2 m-0"><?php echo esc_html($item['service_number']); ?></h1>
                  </div>
                  <h4 class="text-uppercase mb-3"><?php echo esc_html( $item['geniuscourses_title'] ); ?></h4>
                  <p class="m-0"><?php echo esc_html( $item['geniuscourses_description'] ); ?></p>
                </div>
              </div>
            <?php } 
          } ?>
        </div>

      </div>
    </div>
    <?php 
  }
}
