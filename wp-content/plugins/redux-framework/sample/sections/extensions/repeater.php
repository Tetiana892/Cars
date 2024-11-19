<?php
/**
 * Redux Repeater Sample config.
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => __( 'Repeater', 'geniuscourses' ),
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'geniuscourses' ) . '<a href="https://devs.redux.io/core-extensions/repeater.html" target="_blank">https://devs.redux.io/core-extensions/repeater.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'repeater-field-id',
				'type'        => 'repeater',
				'title'       => esc_html__( 'Repeater Demo', 'geniuscourses' ),
				'full_width'  => true,
				'subtitle'    => esc_html__( 'Repeater', 'geniuscourses' ),
				'item_name'   => '',
				'sortable'    => true,
				'active'      => false,
				'collapsible' => false,
				'fields'      => array(
					array(
						'id'          => 'title_field',
						'type'        => 'text',
						'placeholder' => esc_html__( 'Title', 'geniuscourses' ),
					),
					array(
						'id'          => 'textarea_field',
						'type'        => 'textarea',
						'placeholder' => esc_html__( 'Text Field', 'geniuscourses' ),
						'default'     => 'Text Field here',
						'title'       => esc_html__( 'Title', 'your-domain-here' ),
					),
					array(
						'id'          => 'select_field',
						'type'        => 'select',
						'multi'       => true,
						'title'       => esc_html__( 'Select Field', 'geniuscourses' ),
						'options'     => array(
							'1' => esc_html__( 'Option 1', 'geniuscourses' ),
							'2' => esc_html__( 'Option 2', 'geniuscourses' ),
							'3' => esc_html__( 'Option 3', 'geniuscourses' ),
						),
						'placeholder' => esc_html__( 'Listing Field', 'geniuscourses' ),
					),
					array(
						'id'          => 'switch_field',
						'type'        => 'switch',
						'placeholder' => esc_html__( 'Switch Field', 'geniuscourses' ),
						'default'     => true,
					),
					array(
						'id'          => 'text_field',
						'title'       => esc_html__( 'Text Field', 'geniuscourses' ),
						'type'        => 'text',
						'placeholder' => esc_html__( 'Text Field', 'geniuscourses' ),
						'required'    => array( 'switch_field', '=', false ),
						'default'     => 'Text Field here',
					),
				),
			),
		),
	)
);
