<?php 

class Geniuscourses_About_Widget extends WP_Widget {
  function __construct(){
    parent::__construct('geniuscourses_about_widget', esc_html__( 'About Widget', 'geniuscourses' ), [
      'description' => esc_html( 'Our First Widget', 'geniuscourses' )
    ]);
  }

  public function widget($args, $instance){
    // Front-end display
    extract($args);

    $title = apply_filters('widget_title', $instance['title']);
    $text = apply_filters('the_content', $instance['text']);

    // Исправлено: $before_widget
    echo $before_widget;

    if ($title) {
      echo $before_title . esc_html($title) . $after_title;
    }

    if ($text) {
      echo wp_kses_post($text);
    }

    echo $after_widget;
  }

  public function form($instance){
    // Backend form
    $title = isset($instance['title']) ? $instance['title'] : '';
    $text = isset($instance['text']) ? $instance['text'] : '';
    ?>
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>">
        <?php esc_html_e( 'Title', 'geniuscourses'); ?>
      </label>
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
        name="<?php echo $this->get_field_name('title'); ?>"
        value="<?php echo esc_attr($title); ?>" type="text" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('text'); ?>">
        <?php esc_html_e( 'Text', 'geniuscourses'); // Исправлено "Title" на "Text" ?>
      </label>
      <textarea class="widefat" id="<?php echo $this->get_field_id('text'); ?>" 
        name="<?php echo $this->get_field_name('text'); ?>"><?php echo esc_attr($text); ?></textarea>
    </p>
    <?php
  }

  public function update($new_instance, $old_instance){
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['text'] = wp_kses_post($new_instance['text']); // wp_kses_post для текста

    return $instance;
  }
}

