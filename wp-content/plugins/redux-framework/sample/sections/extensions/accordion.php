<?php
/**
 * Accordion config.
 *
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Accordion', 'geniuscourses' ),
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'geniuscourses' ) . '<a href="https://devs.redux.io/core-extensions/accordion.html" target="_blank">https://devs.redux.io/core-extensions/accordion.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'accordion-section-1',
				'type'     => 'accordion',
				'title'    => esc_html__( 'Accordion Section One', 'geniuscourses' ),
				'subtitle' => esc_html__( 'Section one with subtitle', 'geniuscourses' ),
				'position' => 'start',
			),
			array(
				'id'       => 'opt-blank-text-1',
				'type'     => 'text',
				'title'    => esc_html__( 'Text box for some noble purpose.', 'geniuscourses' ),
				'subtitle' => esc_html__( 'Frailty, thy name is woman!', 'geniuscourses' ),
			),
			array(
				'id'       => 'opt-switch-1',
				'type'     => 'switch',
				'title'    => esc_html__( 'Switch, for some other important task!', 'geniuscourses' ),
				'subtitle' => esc_html__( 'Physician, heal thyself!', 'geniuscourses' ),
			),
			array(
				'id'       => 'accordion-section-end-1',
				'type'     => 'accordion',
				'position' => 'end',
			),
			array(
				'id'       => 'accordion-section-2',
				'type'     => 'accordion',
				'title'    => esc_html__( 'Accordion Section Two (no subtitle)', 'geniuscourses' ),
				'position' => 'start',
				'open'     => true,
			),
			array(
				'id'       => 'opt-blank-text-3',
				'type'     => 'text',
				'title'    => esc_html__( 'Look, another sample text box.', 'geniuscourses' ),
				'subtitle' => esc_html__( 'The tartness of his face sours ripe grapes.', 'geniuscourses' ),
			),
			array(
				'id'       => 'opt-switch-2',
				'type'     => 'switch',
				'title'    => esc_html__( 'Yes, another switch, but you\'re free to use any field you like.', 'geniuscourses' ),
				'subtitle' => esc_html__( 'I scorn you, scurvy companion!', 'geniuscourses' ),
			),
			array(
				'id'       => 'accordion-section-end-2',
				'type'     => 'accordion',
				'position' => 'end',
			),
		),
	)
);
