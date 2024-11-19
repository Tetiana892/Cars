<?php
/**
 * Redux Framework disable section config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Disable Section', 'geniuscourses' ),
		'id'               => 'basic-checkbox-section-disable',
		'subsection'       => true,
		'customizer_width' => '450px',
		'disabled'         => true,
		'desc'             => esc_html__( 'For full documentation on this field, visit: ', 'geniuscourses' ) . '<a href="https://devs.redux.io/core-fields/checkbox.html" target="_blank">https://devs.redux.io/core-fields/checkbox.html</a>',
		'fields'           => array(
			array(
				'id'       => 'opt-checkbox-section-disable',
				'type'     => 'checkbox',
				'title'    => esc_html__( 'Checkbox Option', 'geniuscourses' ),
				'subtitle' => esc_html__( 'No validation can be done on this field type', 'geniuscourses' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'geniuscourses' ),
				'default'  => '1', // 1 = on | 0 = off.
			),
		),
	)
);
