<?php
/**
 * Redux Framework textarea config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Textarea', 'geniuscourses' ),
		'id'         => 'basic-textarea',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'geniuscourses' ) . '<a href="https://devs.redux.io/core-fields/textarea.html" target="_blank">https://devs.redux.io/core-fields/textarea.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-textarea',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Textarea Option - HTML Validated Custom', 'geniuscourses' ),
				'subtitle' => esc_html__( 'Subtitle', 'geniuscourses' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'geniuscourses' ),
				'default'  => 'Default Text',
			),
		),
	)
);
