<?php 
function geniuscourses_acf_metaboxes() {
  acf_add_local_field_group([
    'key' => 'carsettings',
    'title' => 'Car Settings For ACF from Code',
    'fields' => [
      [
        'key' => 'custom_price', 
        'label' => 'Car Price',
        'name' => 'custom_price',
        'type' => 'text',
      ],
      [
        'key' => 'custom_engine_type', 
        'label' => 'Car Engine Type',
        'name' => 'custom_engine_type',
        'type' => 'select',
        'choices'=>[
          'manual' => esc_html__( ('Manual'), 'geniuscourses' ),
          'automatic' =>'Automatic'
        ],
        'allow_null' => 1
      ],
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'car',
        ]
      ]
        ],
        'menu_order' => 0,
        'position'=> 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hode_one_screen' => [],

  ]);
}
add_action('acf/init', 'geniuscourses_acf_metaboxes');
