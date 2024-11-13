<?php
class Elementor_About_Widget extends \Elementor\Widget_Base {

public function get_name(): string {
  return 'geniuscourses_about';
}

public function get_title(){
  return esc_html__( 'Geniuscoures About', 'geniuscourses-core' );
}

public function get_icon() {
  return 'eicon-code';
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
  'geniuscourses_title',
  [
    'label' => esc_html__( 'Title', 'textdomain' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => 'Welcome To',
      'placeholder' => esc_html__( 'Enter your title', 'textdomain' ),
  ]
  );
  $this->add_control(
    'geniuscourses_title_two',
    [
      'label' => esc_html__( 'Pre Title', 'textdomain' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => 'Royal Cars',
        'placeholder' => esc_html__( 'Enter your title', 'textdomain' ),
    ]
    );
  $this->add_control(
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
    'geniuscourses_description',
    [
      'label' => esc_html__( 'Description', 'textdomain' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => 'Justo et eos et ut takimata sed sadipscing dolore lorem, et elitr labore labore voluptua no rebum sed, stet voluptua amet sed elitr ea dolor dolores no clita. Dolores diam magna clita ea eos amet, amet rebum voluptua vero vero sed clita accusam takimata. Nonumy labore ipsum sea voluptua sea eos sit justo, no ipsum sanctus sanctus no et no ipsum amet, tempor labore est labore no. Eos diam eirmod lorem ut eirmod, ipsum diam sadipscing stet dolores elitr elitr eirmod dolore. Magna elitr accusam takimata labore, et at erat eirmod consetetur tempor eirmod invidunt est, ipsum nonumy at et',
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
 <h1 class="display-4 text-uppercase text-center mb-5"><?php echo esc_html($settings['geniuscourses_title']); ?>
 <span class="text-primary"><?php echo esc_html($settings['geniuscourses_title_two']); ?></span></h1>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                   <?php if ($settings['image']['url']) {
                    ?>
                    <img class="w-75 mb-4" src="<?php echo esc_url($settings['image']['url']); ?>" alt="">
                    <?php } ?>
                    <p><?php echo esc_html($settings['geniuscourses_description']); ?></p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-headset text-secondary"></i>
                        </div>
                        <h4 class="text-uppercase m-0">24/7 Car Rental Support</h4>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-car text-secondary"></i>
                        </div>
                        <h4 class="text-light text-uppercase m-0">Car Reservation Anytime</h4>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                        </div>
                        <h4 class="text-uppercase m-0">Lots Of Pickup Locations</h4>
                    </div>
                </div>
            </div>
            </div>
            </div>
<?php 
}

}