<?php
// Carousels
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_573589a45e34d',
	'title' => 'Carousel',
	'fields' => array (
		array (
			'key' => 'field_573589bcf10a1',
			'label' => 'Carousel',
			'name' => 'carousel',
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
				0 => 'carousel-item',
			),
			'taxonomy' => array (
			),
			'filters' => array (
				0 => 'search',
				1 => 'taxonomy',
			),
			'elements' => array (
				0 => 'featured_image',
			),
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
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
?>