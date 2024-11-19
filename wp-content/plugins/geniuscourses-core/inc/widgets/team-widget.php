<?php
class Elementor_Team_Widget extends \Elementor\Widget_Base {

  public function get_script_depends(): array{   
    if(\Elementor\Plugin::$instance->preview->is_preview_mode()){
      wp_register_script('gc-team', plugins_url('/js/gc-team.js', __FILE__),
       ['elementor-frontend'], '1.0', true);
      return ['gc-team'];
    }
    return [];
  }

public function get_name(): string {
  return 'geniuscourses_team';
}

public function get_title(): string{
  return esc_html__( 'Geniuscourses Team', 'geniuscourses-core' );
}

public function get_icon(): string {
  return 'eicon-lock-user';
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

   $repeater = new \Elementor\Repeater();

   $repeater->add_control(
  'geniuscourses_title_one',
  [
    'label' => esc_html__( 'Title One', 'textdomain' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => 'Full Name',
      'placeholder' => esc_html__( 'Enter your title', 'textdomain' ),
  ]
  );
  $repeater->add_control(
    'geniuscourses_title_two',
    [
      'label' => esc_html__( 'Title Two', 'textdomain' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => 'Designation',
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
<div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-1 text-primary text-center">04</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Meet Our Team</h1>
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
            <?php 
              if ( $settings['slider'] ) {
                $first_item = true;
                foreach ( $settings['slider'] as $item ) { 
          ?>
           <div class="team-item">
                    <?php if($item['image']['url']){?><img class="img-fluid w-100" src="<?php echo esc_url($item['image']['url'])?>" alt=""><?php } ?>
                    <div class="position-relative py-4">
                      <?php if($item['geniuscourses_title_one']) {?>  
                        <h4 class="text-uppercase"><?php echo esc_html__($item['geniuscourses_title_one'])?></h4><?php } ?>
                        <p class="m-0"><?php echo esc_html__($item['geniuscourses_title_two'])?></p>
                        <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
          <?php
                }
              }
                
              ?>  
            </div>
        </div>
    </div>
<?php 
}

}