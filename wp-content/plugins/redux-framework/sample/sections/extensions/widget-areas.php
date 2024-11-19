<?php
/**
 * Redux Widget Areas Sample config.
 *
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux
 */

defined( 'ABSPATH' ) || exit;

// --> Below this line not needed. This is just for demonstration purposes.
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Widget Areas', 'geniuscourses' ),
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'widget_areas',
				'type'     => 'info',
				'style'    => 'info',
				'notice'   => true,
				'title'    => esc_html__( 'Widget Areas is Already Running!', 'geniuscourses' ),

				// translators: %1$s: Widget Admin URL.
				'subtitle' => sprintf( esc_html__( 'To see it in action, head over to your %1$s', 'geniuscourses' ), '<a href="' . admin_url( 'widgets.php' ) . '">' . esc_html__( 'Widgets page', 'geniuscourses' ) . '</a> (Applicable for Classic Widgets only).' ),
			),
		),
	)
);
