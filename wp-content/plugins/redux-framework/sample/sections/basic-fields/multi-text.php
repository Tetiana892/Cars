<?php
/**
 * Redux Framework multi text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Multi Text', 'geniuscourses' ),
		'id'         => 'basic-multi-text',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'geniuscourses' ) . '<a href="https://devs.redux.io/core-fields/multi-text.html" target="_blank">https://devs.redux.io/core-fields/multi-text.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-multitext',
				'type'     => 'multi_text',
				'title'    => esc_html__( 'Multi Text Option', 'geniuscourses' ),
				'subtitle' => esc_html__( 'Field subtitle', 'geniuscourses' ),
				'desc'     => esc_html__( 'Field Description', 'geniuscourses' ),
			),
		),
	)
);
