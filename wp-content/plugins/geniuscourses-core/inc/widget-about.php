<?php 

if ( ! class_exists( 'Geniuscourses_About_Widget' ) ) {
	class Geniuscourses_About_Widget extends WP_Widget {
		function __construct() {
			parent::__construct( 'geniuscourses_about_widget', esc_html__( 'About Widget', 'geniuscourses' ), [
				'description' => esc_html( 'Our First Widget', 'geniuscourses' ),
			] );
		}

		public function widget( $args, $instance ) {
			// Front-end display
			extract( $args );

			$title = apply_filters( 'widget_title', $instance['title'] );
			$text  = apply_filters( 'the_content', $instance['text'] );

			echo wp_kses_post( $before_widget );


			if ( ! empty( $title ) ) {
				echo wp_kses_post($before_title) . esc_html( $title ) . wp_kses_post($after_title);
			}

			if ( ! empty( $text ) ) {
				echo wp_kses_post( $text );
			}

			echo wp_kses_post($after_widget);
		}

		public function form( $instance ) {
			$title = isset( $instance['title'] ) ? $instance['title'] : '';
			$text  = isset( $instance['text'] ) ? $instance['text'] : '';
			?>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>">
					<?php esc_html_e( 'Title', 'geniuscourses' ); ?>
				</label>
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"
				       name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>"
				       value="<?php echo esc_attr( $title ); ?>" type="text"/>
			</p>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'text' )); ?>">
					<?php esc_html_e( 'Text', 'geniuscourses' ); ?>
				</label>
				<textarea class="widefat" id="<?php echo esc_attr($this->get_field_id( 'text' )); ?>"
				          name="<?php echo esc_attr($this->get_field_name( 'text' )); ?>"><?php echo esc_textarea( $text ); ?></textarea>
			</p>
			<?php
		}

		public function update( $new_instance, $old_instance ) {
			$instance          = $old_instance;
			$instance['title'] = strip_tags( $new_instance['title'] );
			$instance['text']  = wp_kses_post( $new_instance['text'] );

			return $instance;
		}
	}
}
function geniuscourses_register_about_widget() {
	register_widget( 'Geniuscourses_About_Widget' );
}

add_action( 'widgets_init', 'geniuscourses_register_about_widget' );

