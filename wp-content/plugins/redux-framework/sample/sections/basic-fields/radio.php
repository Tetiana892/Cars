<?php
/**
 * Redux Framework radio box config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Radio', 'geniuscourses' ),
		'id'               => 'basic-radio',
		'subsection'       => true,
		'customizer_width' => '500px',
		'desc'             => esc_html__( 'For full documentation on this field, visit: ', 'geniuscourses' ) . '<a href="https://devs.redux.io/core-fields/radio.html" target="_blank">https://devs.redux.io/core-fields/radio.html</a>',
		'fields'           => array(
			array(
				'id'       => 'opt-radio',
				'type'     => 'radio',
				'title'    => esc_html__( 'Radio Option', 'geniuscourses' ),
				'subtitle' => esc_html__( 'No validation can be done on this field type', 'geniuscourses' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'geniuscourses' ),

				// Must provide key => value pairs for radio options.
				'options'  => array(
					'1' => 'Opt 1',
					'2' => 'Opt 2',
					'3' => 'Opt 3',
				),
				'default'  => '2',
			),
			array(
				'id'       => 'opt-radio-data',
				'type'     => 'radio',
				'title'    => esc_html__( 'Radio Option w/ Menu Data', 'geniuscourses' ),
				'subtitle' => esc_html__( 'No validation can be done on this field type', 'geniuscourses' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'geniuscourses' ),
				'data'     => 'menu',
			),
		),
	)
);
