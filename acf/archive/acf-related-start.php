<?php
acf_add_local_field_group(array (
	'key' => 'group_56de6227ccf7d',
	'title' => 'Startseiten-Beiträge',
	'fields' => array (
		array (
			'key' => 'field_573476b86954f',
			'label' => 'Verknüpfte Beiträge',
			'name' => 'linked_posts',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
				0 => 'page',
				1 => 'post',
			),
			'taxonomy' => array (
			),
			'filters' => array (
				0 => 'search',
				1 => 'post_type',
			),
			'elements' => '',
			'min' => '',
			'max' => '',
			'return_format' => 'object',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-home.php',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));
?>