<?php 
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_56de62289c7db',
	'title' => 'Termine (NEU)',
	'fields' => array (
		array (
			'key' => 'field_573c5806a5f97',
			'label' => 'Termine',
			'name' => 'termine',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Eintrag hinzufügen',
			'sub_fields' => array (
				array (
					'key' => 'field_573c5817a5f98',
					'label' => 'Shortcode',
					'name' => 'shortcode',
					'type' => 'text',
					'instructions' => 'Hier den Shortcode der Tabelle eintragen',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-sub.php',
			),
		),
	),
	'menu_order' => 13,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'custom_fields',
		1 => 'discussion',
		2 => 'comments',
	),
	'active' => 1,
	'description' => '',
));

endif;
?>