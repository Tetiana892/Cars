<?php
/**
 * Redux Custom Fonts Sample config.
 *
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Custom Fonts', 'geniuscourses' ),
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'geniuscourses' ) . '<a href="https://devs.redux.io/core-extensions/custom-fonts.html" target="_blank">https://devs.redux.io/core-extensions/custom-fonts.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'   => 'custom_fonts',
				'type' => 'custom_fonts',
			),
			array(
				'id'          => 'custom_fonts_typography',
				'type'        => 'typography',
				'title'       => esc_html__( 'Custom Fonts Typography', 'geniuscourses' ),
				'subtitle'    => 'This will modify the font family of the .entry-title classes.',
				'output'      => '.site-title, .widget-title, .entry-title, .wp-block-site-title',
				'font-size'   => false,
				'line-height' => false,
				'text-align'  => false,
			),
		),
	)
);
