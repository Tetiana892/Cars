<?php 

  class VcGeniuscoursesAbout {
      function __construct() {
          add_action('init', array($this, 'create_shortcode'), 1000);
          add_shortcode('geniuscourses_about_shortcode', array($this, 'render_shortcode'));
      }

      public function create_shortcode(): void {
          // admin field for WPBakery
          if(!defined('WPB_VC_VERSION')){
            return;
          }
          if (function_exists('vc_map')){
          vc_map(array(
          'name' => "GS About",
          'base' => 'geniuscourses_about_shortcjde',
          'description' => '',
          'category' => 'Geniuscourses',
          'params' => [
            'type' => 'textfield',
            'heading' => 'Text',
            'param_name' => 'text',
            'value' => '',
            'description' => 'Insert Text',
          ],
          'params' => [
            'type' => 'textfield_html',
            'heading' => 'Description',
            'param_name' => 'context',
            'value' => '',
            'description' => 'Insert Description',
          ]
          ));
        }
      }

public function render_shortcode($atts, $content, $tag): string {
    // Шорткод Front
    $atts = shortcode_atts([
        'text' => '',
    ], $atts);

    $title = esc_html($atts['text']);
    $content = wpb_js_remove_wpautop($content, true);

    $result = '<h2>' . $title . '</h2>';
    $result .= '<div class="content_box">' . $content . '</div>';

    return $result;
}

  }

new VcGeniuscoursesAbout();