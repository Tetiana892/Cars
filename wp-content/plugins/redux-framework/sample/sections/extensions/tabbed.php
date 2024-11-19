<?php
/**
 * Redux Framework tabbed config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework\Sample\Tabbed
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Tabbed', 'geniuscourses' ),
		'id'         => 'additional-tabbed',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'geniuscourses' ) . '<a href="https://devs.redux.io/core-fields/tabbed.html" target="_blank">https://devs.redux.io/core-fields/tabbed.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'    => 'opt-tabbed-1',
				'type'  => 'tabbed',
				'title' => 'Tabbed Layout 1',
				'tabs'  => array(
					array(
						'title'  => 'Basic Fields',
						'icon'   => 'fas fa-gear',
						'fields' => array(
							array(
								'id'       => 'opt-tab-checkbox-1',
								'type'     => 'checkbox',
								'title'    => esc_html__( 'Checkbox', 'geniuscourses' ),
								'subtitle' => esc_html__( 'Basic Checkbox field.', 'geniuscourses' ),
								'default'  => true,
							),
							array(
								'id'       => 'opt-tab-radio',
								'type'     => 'radio',
								'title'    => esc_html__( 'Radio Button', 'geniuscourses' ),
								'subtitle' => esc_html__( 'Basic Radio Button field.', 'geniuscourses' ),
								'options'  => array(
									'1' => esc_html__( 'Option 1', 'geniuscourses' ),
									'2' => esc_html__( 'Option 2', 'geniuscourses' ),
									'3' => esc_html__( 'Option 3', 'geniuscourses' ),
								),
								'default'  => '2',
							),
							array(
								'id'       => 'opt-tab-media',
								'type'     => 'media',
								'url'      => true,
								'title'    => esc_html__( 'Media w/ URL', 'geniuscourses' ),
								'compiler' => 'true',
								'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'geniuscourses' ),
								'subtitle' => esc_html__( 'Upload any media using the WordPress native uploader', 'geniuscourses' ),
								'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
							),
							array(
								'id'       => 'opt-tab-gallery',
								'type'     => 'gallery',
								'title'    => esc_html__( 'Add/Edit Gallery', 'geniuscourses' ),
								'subtitle' => esc_html__( 'Create a new Gallery by selecting existing or uploading new images using the WordPress native uploader', 'geniuscourses' ),
								'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'geniuscourses' ),
							),
							array(
								'id'      => 'opt-tab-slider',
								'type'    => 'slider',
								'title'   => esc_html__( 'JQuery UI Slider Example 2 w/ Steps (5)', 'geniuscourses' ),
								'desc'    => esc_html__( 'JQuery UI slider description. Min: 0, max: 300, step: 5, default value: 75', 'geniuscourses' ),
								'default' => '0',
								'min'     => '0',
								'step'    => '5',
								'max'     => '300',
							),
							array(
								'id'      => 'opt-tab-spinner',
								'type'    => 'spinner',
								'title'   => esc_html__( 'JQuery UI Spinner Example 1', 'geniuscourses' ),
								'desc'    => esc_html__( 'JQuery UI spinner description. Min:20, max: 100, step:20, default value: 40', 'geniuscourses' ),
								'default' => '40',
								'min'     => '20',
								'step'    => '20',
								'max'     => '100',
							),

							array(
								'id'       => 'opt-tab-switch-on',
								'type'     => 'switch',
								'title'    => esc_html__( 'Switch On', 'geniuscourses' ),
								'subtitle' => esc_html__( 'Look, it\'s on!', 'geniuscourses' ),
								'default'  => 1,
							),
						),
					),

					array(
						'title'  => 'Text Fields',
						'icon'   => 'fas fa-font',
						'fields' => array(
							array(
								'title' => esc_html__( 'Text Field', 'geniuscourses' ),
								'id'    => 'opt-tab-text',
								'type'  => 'text',
							),
							array(
								'title' => esc_html__( 'Textarea Field', 'geniuscourses' ),
								'id'    => 'opt-tab-textarea',
								'type'  => 'textarea',
							),
						),
					),
					array(
						'title'  => esc_html__( 'Color Fields', 'geniuscourses' ),
						'icon'   => 'fas fa-palette',
						'fields' => array(
							array(
								'id'    => 'opt-tab-color-1',
								'type'  => 'color',
								'title' => esc_html__( 'Color 1', 'geniuscourses' ),
							),
							array(
								'id'    => 'opt-tab-color-2',
								'type'  => 'color',
								'title' => esc_html__( 'Color 2', 'geniuscourses' ),
							),
						),
					),
				),
			),

			array(
				'id'    => 'opt-tabbed-2',
				'type'  => 'tabbed',
				'title' => 'Tabbed Layout 2',
				'tabs'  => array(
					array(
						'title'  => 'Layout',
						'fields' => array(
							array(
								'id'       => 'opt-tab-homepage_blocks',
								'type'     => 'sorter',
								'title'    => 'Homepage Layout Manager',
								'desc'     => 'Organize how you want the layout to appear on the homepage',
								'compiler' => 'true',
								'options'  => array(
									'enabled'  => array(
										'placebo'    => 'placebo',
										'highlights' => 'Highlights',
										'slider'     => 'Slider',
										'staticpage' => 'Static Page',
										'services'   => 'Services',
									),
									'disabled' => array(
										'placebo' => 'placebo',
									),
								),
							),
							array(
								'id'       => 'opt-tab-slides',
								'type'     => 'slides',
								'title'    => esc_html__( 'Slides Options', 'geniuscourses' ),
								'subtitle' => esc_html__( 'Unlimited slides with drag and drop sorting.', 'geniuscourses' ),
								'desc'     => esc_html__( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'geniuscourses' ),
							),
						),
					),
					array(
						'title'  => 'Advanced Text',
						'fields' => array(
							array(
								'title' => esc_html__( 'WP Editor', 'geniuscourses' ),
								'id'    => 'opt-tab-editor',
								'type'  => 'editor',
							),
							array(
								'title' => esc_html__( 'ACE Editor', 'geniuscourses' ),
								'id'    => 'opt-tab-ace',
								'type'  => 'ace_editor',
							),
						),
					),
				),
			),
		),
	)
);
