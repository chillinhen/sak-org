<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5760331642a4a',
	'title' => 'Passende Beiträge Neu',
	'fields' => array (
		array (
			'key' => 'field_57603357080fc',
			'label' => 'Passende Beiträge',
			'name' => 'related_posts',
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
				2 => 'taxonomy',
			),
			'elements' => '',
			'min' => '',
			'max' => 3,
			'return_format' => 'object',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-sub.php',
			),
		),
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-sub-sub.php',
			),
		),
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-sub-sub-v2.php',
			),
		),
	),
	'menu_order' => 20,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
?>