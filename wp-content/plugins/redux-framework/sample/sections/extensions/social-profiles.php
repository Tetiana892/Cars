<?php
/**
 * Redux Social Profiles Sample config.
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Social Profiles', 'geniuscourses' ),
		'desc'             => esc_html__( 'For full documentation on this field, visit: ', 'geniuscourses' ) . '<a href="https://devs.redux.io/core-extensions/social-profiles.html" target="_blank">https://devs.redux.io/core-extensions/social-profiles.html</a>',
		'subtitle'         => esc_html__( 'Click an icon to activate it, drag and drop to change the icon order.', 'geniuscourses' ),
		'subsection'       => true,
		'customizer_width' => '350px',
		'fields'           => array(
			array(
				'id'              => 'opt-social-profiles',
				'type'            => 'social_profiles',
				'title'           => esc_html__( 'Social Profiles', 'geniuscourses' ),
				'subtitle'        => esc_html__( 'Click an icon to activate it, drag and drop to change the icon order.', 'geniuscourses' ),
				'hide_widget_msg' => true,
			),
		),
	)
);
