<?php
/**
 * Redux Framework Sample Metabox Config File
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux_Metaboxes' ) ) {
	return;
}

Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'opt-metaboxes',
		'title'      => esc_html__( 'Metabox Options', 'geniuscourses' ),
		'post_types' => array( 'page', 'post' ),
		'position'   => 'normal', // normal, advanced, side.
		'priority'   => 'high', // high, core, default, low.
		'sections'   => array(
			array(
				'title'  => esc_html__( 'Basic Fields', 'geniuscourses' ),
				'id'     => 'opt-basic-fields',
				'desc'   => esc_html__( 'Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at:', 'geniuscourses' ) . '  <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>',
				'icon'   => 'el-icon-cogs',
				'fields' => array(
					array(
						'id'       => 'opt-checkbox',
						'type'     => 'checkbox',
						'title'    => esc_html__( 'Checkbox', 'geniuscourses' ),
						'subtitle' => esc_html__( 'Basic Checkbox field.', 'geniuscourses' ),
						'default'  => true,
					),
					array(
						'id'       => 'opt-radio',
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
						'id'       => 'opt-media',
						'type'     => 'media',
						'url'      => true,
						'title'    => esc_html__( 'Media w/ URL', 'geniuscourses' ),
						'compiler' => 'true',
						'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'geniuscourses' ),
						'subtitle' => esc_html__( 'Upload any media using the WordPress native uploader', 'geniuscourses' ),
						'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
					),
					array(
						'id'       => 'gallery',
						'type'     => 'gallery',
						'title'    => esc_html__( 'Add/Edit Gallery', 'geniuscourses' ),
						'subtitle' => esc_html__( 'Create a new Gallery by selecting existing or uploading new images using the WordPress native uploader', 'geniuscourses' ),
						'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'geniuscourses' ),
					),
					array(
						'id'      => 'opt-slider',
						'type'    => 'slider',
						'title'   => esc_html__( 'JQuery UI Slider Example 2 w/ Steps (5)', 'geniuscourses' ),
						'desc'    => esc_html__( 'JQuery UI slider description. Min: 0, max: 300, step: 5, default value: 75', 'geniuscourses' ),
						'default' => '0',
						'min'     => '0',
						'step'    => '5',
						'max'     => '300',
					),
					array(
						'id'      => 'opt-spinner',
						'type'    => 'spinner',
						'title'   => esc_html__( 'JQuery UI Spinner Example 1', 'geniuscourses' ),
						'desc'    => esc_html__( 'JQuery UI spinner description. Min:20, max: 100, step:20, default value: 40', 'geniuscourses' ),
						'default' => '40',
						'min'     => '20',
						'step'    => '20',
						'max'     => '100',
					),

					array(
						'id'       => 'switch-on',
						'type'     => 'switch',
						'title'    => esc_html__( 'Switch On', 'geniuscourses' ),
						'subtitle' => esc_html__( 'Look, it\'s on!', 'geniuscourses' ),
						'default'  => 1,
					),
				),
			),

			array(
				'title'      => esc_html__( 'Text Fields', 'geniuscourses' ),
				'desc'       => esc_html__( 'Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at:', 'geniuscourses' ) . '  <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>',
				'icon'       => 'el-icon-cog',
				'id'         => 'opt-text-fields',
				'subsection' => true,
				'fields'     => array(
					array(
						'title' => esc_html__( 'Text Field', 'geniuscourses' ),
						'id'    => 'opt-text',
						'type'  => 'text',
					),
					array(
						'title' => esc_html__( 'Textarea Field', 'geniuscourses' ),
						'id'    => 'opt-textarea',
						'type'  => 'textarea',
					),
				),
			),

			array(
				'title'  => esc_html__( 'Color Field', 'geniuscourses' ),
				'desc'   => esc_html__( 'Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at:', 'geniuscourses' ) . '  <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>',
				'icon'   => 'el-icon-pencil',
				'id'     => 'color-section',
				'fields' => array(
					array(
						'id'       => 'opt-color',
						'type'     => 'color',
						'title'    => esc_html__( 'Color Field', 'geniuscourses' ),
						'default'  => '#333333',
						'required' => array( 'opt-layout', '=', 'on' ),
					),
				),
			),
			array(
				'title'  => esc_html__( 'Layout', 'geniuscourses' ),
				'desc'   => esc_html__( 'Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at:', 'geniuscourses' ) . '  <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>',
				'icon'   => 'el-icon-pencil',
				'id'     => 'home-layout',
				'fields' => array(
					array(
						'id'       => 'homepage_blocks',
						'type'     => 'sorter',
						'title'    => 'Homepage Layout Manager',
						'desc'     => 'Organize how you want the layout to appear on the homepage',
						'compiler' => 'true',
						'required' => array( 'layout', '=', '1' ),
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
						'id'       => 'slides',
						'type'     => 'slides',
						'title'    => esc_html__( 'Slides Options', 'geniuscourses' ),
						'subtitle' => esc_html__( 'Unlimited slides with drag and drop sorting.', 'geniuscourses' ),
						'desc'     => esc_html__( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'geniuscourses' ),
					),
				),
			),
		),
	)
);


Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'opt-metaboxes-2',
		'post_types' => array( 'page', 'post' ),
		'position'   => 'side', // normal, advanced, side.
		'priority'   => 'high', // high, core, default, low.
		'sections'   => array(
			array(
				'icon_class' => 'icon-large',
				'icon'       => 'el-icon-home',
				'fields'     => array(
					array(
						'title'   => esc_html__( 'Cross Box Required', 'geniuscourses' ),
						'desc'    => esc_html__( 'Required arguments work across metaboxes! Click on Color Field under Metabox Options then adjust this field to see the fields within show or hide.', 'geniuscourses' ),
						'id'      => 'opt-layout',
						'type'    => 'radio',
						'options' => array(
							'on'  => esc_html__( 'On', 'geniuscourses' ),
							'off' => esc_html__( 'Off', 'geniuscourses' ),
						),
						'default' => 'on',
					),
				),
			),
		),
	)
);

Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'opt-metaboxes-3',
		'post_types' => array( 'page', 'post' ),
		'position'   => 'side', // normal, advanced, side.
		'priority'   => 'high', // high, core, default, low.
		'sections'   => array(
			array(
				'icon_class' => 'icon-large',
				'icon'       => 'el-icon-home',
				'fields'     => array(
					array(
						'id'      => 'sidebar',
						'title'   => esc_html__( 'Sidebar', 'geniuscourses' ),
						'desc'    => esc_html__( 'Please select the sidebar you would like to display on this page. Note: You must first create the sidebar under Appearance > Widgets.', 'geniuscourses' ),
						'type'    => 'select',
						'data'    => 'sidebars',
						'default' => 'None',
					),
				),
			),
		),
	)
);
