<?php
class Elementor_About_Widget extends \Elementor\Widget_Base {

public function get_name(): string {
  return 'about_theme';
}

public function get_title(): mixed {
  return esc_html__( 'About Theme', 'geniuscourses-core' );
}

public function get_icon(): string {
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
      'label' => esc_html__( 'Content', 'elementor-oembed-widget' ),
      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
  );

  $this->add_control(
    'url',
    [
      'label' => esc_html__( 'URL to embed', 'elementor-oembed-widget' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'input_type' => 'url',
      'placeholder' => esc_html__( 'https://your-link.com', 'elementor-oembed-widget' ),
    ]
  );

  $this->end_controls_section();

}


protected function render(): void {
  $settings = $this->get_settings_for_display();

  if ( empty( $settings['url'] ) ) {
    return;
  }

  $html = wp_oembed_get( $settings['url'] );
  ?>
  <div class="oembed-elementor-widget">
    <?php echo ( $html ) ? $html : $settings['url']; ?>
  </div>
  <?php
}

}