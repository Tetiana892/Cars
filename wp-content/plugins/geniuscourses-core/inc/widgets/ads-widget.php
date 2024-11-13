<?php
class Elementor_Ads_Widget extends \Elementor\Widget_Base {

public function get_name(): string {
  return 'geniuscourses_ads';
}

public function get_title(): string{
  return esc_html__( 'Geniuscourses Ads', 'geniuscourses-core' );
}

public function get_icon() {
  return 'eicon-star';
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
  'geniuscourses_title_left',
  [
    'label' => esc_html__( 'Title Left', 'textdomain' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => 'Want to be driver?',
      'placeholder' => esc_html__( 'Enter your title', 'textdomain' ),
  ]
  );
  $this->add_control(
    'geniuscourses_title_right',
    [
      'label' => esc_html__( 'Title Right', 'textdomain' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => 'Looking for a car?',
        'placeholder' => esc_html__( 'Enter your title', 'textdomain' ),
    ]
    );
  $this->add_control(
    'image_left',
    [
      'label' => __( 'Chose Image Left', 'plugin-domain' ),
      'type' => \Elementor\Controls_Manager::MEDIA,
      'default' => [
        'url' => \Elementor\Utils::get_placeholder_image_src(),
      ]
    ]
  );
  $this->add_control(
    'image_right',
    [
      'label' => __( 'Chose Image Right', 'plugin-domain' ),
      'type' => \Elementor\Controls_Manager::MEDIA,
      'default' => [
        'url' => \Elementor\Utils::get_placeholder_image_src(),
      ]
    ]
  );
  $this->add_control(
    'geniuscourses_description_left',
    [
      'label' => esc_html__( 'Description Left', 'textdomain' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => 'Lorem justo sit sit ipsum eos lorem kasd, kasd labore',
        'rows' => 10,
        'placeholder' => esc_html__( 'Enter your title', 'textdomain' ),
    ]
    );
    $this->add_control(
      'geniuscourses_description_right',
      [
        'label' => esc_html__( 'Description Right', 'textdomain' ),
          'type' => \Elementor\Controls_Manager::TEXTAREA,
          'default' => 'Lorem justo sit sit ipsum eos lorem kasd, kasd labore',
          'rows' => 10,
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
 <div class="row mx-0">
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                       <?php if($settings['image_left']['url']) {?> <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4"
                        src="<?php echo esc_url($settings['image_left']['url']); ?>" alt=""><?php } ?>
                        <div class="text-right">
                           <?php if($settings['geniuscourses_title_left']) {?>
                            <h3 class="text-uppercase text-light mb-3">
                              <?php echo esc_html($settings['geniuscourses_title_left']); ?></h3><?php } ?>
                            <p class="mb-4"><?php echo esc_html($settings['geniuscourses_description_left']); ?></p>
                            <a class="btn btn-primary py-2 px-4" href=""><?php esc_html_e('Start Now', 'geniuscourses'); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                        <div class="text-left">
                        <?php if($settings['geniuscourses_title_right']) {?>
                          <h3 class="text-uppercase text-light mb-3">
                            <?php echo esc_html($settings['geniuscourses_title_right']); ?></h3><?php } ?>
                            <p class="mb-4"><?php echo esc_html($settings['geniuscourses_description_right']); ?></p>
                            <a class="btn btn-primary py-2 px-4" href=""><?php esc_html_e('Start Now', 'geniuscourses'); ?></a>
                        </div>
                        <?php if($settings['image_right']['url']) { ?><img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4"
                         src="<?php echo esc_url($settings['image_right']['url']); ?>" alt=""><?php } ?>
                    </div>
                </div>
            </div>
            </div>
            </div>
<?php 
}

}