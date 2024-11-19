<?php
/**
 * Redux Framework spacing config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Spacing', 'geniuscourses' ),
		'id'         => 'design-spacing',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'geniuscourses' ) . '<a href="https://devs.redux.io/core-fields/spacing.html" target="_blank">https://devs.redux.io/core-fields/spacing.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'            => 'opt-spacing',
				'type'          => 'spacing',
				'output'        => array( '.site-header, header' ),

				// absolute, padding, margin, defaults to padding.
				'mode'          => 'margin',

				// Have one field that applies to all.
				'all'           => true,

				// You can specify a unit value. Possible: px, em, %.
				'units'         => 'em',

				// Set to false to hide the units if the units are specified.
				'display_units' => false,
				'title'         => esc_html__( 'Padding/Margin Option', 'geniuscourses' ),
				'subtitle'      => esc_html__( 'Allow your users to choose the spacing or margin they want.', 'geniuscourses' ),
				'desc'          => esc_html__( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'geniuscourses' ),
				'default'       => array(
					'margin-top'    => '1',
					'margin-right'  => '2',
					'margin-bottom' => '3',
					'margin-left'   => '4',
					'units'         => 'em',
				),

				// phpcs:ignore Squiz.PHP.CommentedOutCode
				// Allow users to select any type of unit.
				// 'units_extended'=> 'true',    // Enable extended units.
				// 'top'           => false,     // Disable the top.
				// 'right'         => false,     // Disable the right.
				// 'bottom'        => false,     // Disable the bottom.
				// 'left'          => false,     // Disable the left.
			),
			array(
				'id'             => 'opt-spacing-expanded',
				'type'           => 'spacing',
				'mode'           => 'margin',
				'all'            => false,
				'units'          => array( 'em', 'px', '%' ),
				'units_extended' => true,
				'title'          => __( 'Padding/Margin Option', 'geniuscourses' ),
				'subtitle'       => __( 'Allow your users to choose the spacing or margin they want.', 'geniuscourses' ),
				'desc'           => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'geniuscourses' ),
				'default'        => array(
					'margin-top'    => '1',
					'margin-right'  => '2',
					'margin-bottom' => '3',
					'margin-left'   => '5',
					'units'         => 'em',
				),
			),
		),
	)
);
