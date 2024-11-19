<?php
/**
 * Redux Framework ACE editor config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'ACE Editor', 'geniuscourses' ),
		'id'         => 'editor-ace',
		'subsection' => true,
		'desc'       => esc_html__( 'For full documentation on the this field, visit: ', 'geniuscourses' ) . '<a href="https://devs.redux.io/core-fields/ace-editor.html" target="_blank">https://devs.redux.io/core-fields/ace-editor.html</a>',
		'fields'     => array(
			array(
				'id'       => 'opt-ace-editor-css',
				'type'     => 'ace_editor',
				'title'    => esc_html__( 'CSS Code', 'geniuscourses' ),
				'subtitle' => esc_html__( 'Paste your CSS code here.', 'geniuscourses' ),
				'mode'     => 'css',
				'theme'    => 'monokai',
				'desc'     => 'Possible modes can be found at <a href="//ace.c9.io" target="_blank">ace.c9.io/</a>.',
				'default'  => '#header{
	margin: 0 auto;
}',
			),
			array(
				'id'       => 'opt-ace-editor-js',
				'type'     => 'ace_editor',
				'title'    => esc_html__( 'JS Code', 'geniuscourses' ),
				'subtitle' => esc_html__( 'Paste your JS code here.', 'geniuscourses' ),
				'mode'     => 'javascript',
				'theme'    => 'chrome',
				'desc'     => 'Possible modes can be found at <a href="//ace.c9.io" target="_blank">ace.c9.io/</a>.',
				'default'  => 'jQuery(document).ready(function(){\n\n});',
			),
			array(
				'id'         => 'opt-ace-editor-php',
				'type'       => 'ace_editor',
				'full_width' => true,
				'title'      => esc_html__( 'PHP Code', 'geniuscourses' ),
				'subtitle'   => esc_html__( 'Paste your PHP code here.', 'geniuscourses' ),
				'mode'       => 'php',
				'theme'      => 'chrome',
				'desc'       => 'Possible modes can be found at <a href="//ace.c9.io" target="_blank">ace.c9.io/</a>.',
				'default'    => '<?php
    echo "PHP String";',
			),
		),
	)
);
