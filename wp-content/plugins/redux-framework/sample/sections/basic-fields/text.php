<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Text', 'geniuscourses' ),
		'desc'             => esc_html__( 'For full documentation on this field, visit: ', 'geniuscourses' ) . '<a href="https://devs.redux.io/core-fields/text.html" target="_blank">https://devs.redux.io/core-fields/text.html</a>',
		'id'               => 'basic-text',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'text-example',
				'type'     => 'text',
				'title'    => esc_html__( 'Text Field', 'geniuscourses' ),
				'subtitle' => esc_html__( 'Subtitle', 'geniuscourses' ),
				'desc'     => esc_html__( 'Field Description', 'geniuscourses' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'text-example-hint',
				'type'     => 'text',
				'title'    => esc_html__( 'Text Field w/ Hint', 'geniuscourses' ),
				'subtitle' => esc_html__( 'Subtitle', 'geniuscourses' ),
				'desc'     => esc_html__( 'Field Description', 'geniuscourses' ),
				'default'  => 'Default Text',
				'hint'     => array(
					'title'   => 'Hint Title',
					'content' => 'Hint content about this field!',
				),
			),
			array(
				'id'          => 'text-placeholder',
				'type'        => 'text',
				'title'       => esc_html__( 'Text Field w/ placeholder using custom data object.', 'geniuscourses' ),
				'subtitle'    => esc_html__( 'Subtitle', 'geniuscourses' ),
				'desc'        => esc_html__( 'Field Description', 'geniuscourses' ),
				'placeholder' => array(
					'box1' => 'Box One Placeholder',
					'box2' => 'Box Two Placeholder',
				),
				'data'        => array(
					'box1' => 'Box One Title',
					'box2' => 'Box Two Title',
				),
			),
		),
	)
);
