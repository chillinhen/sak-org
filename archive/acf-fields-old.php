<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_banner-im-top',
		'title' => 'Banner im Top',
		'fields' => array (
			array (
				'key' => 'field_53ea6f8158864',
				'label' => 'Banner Content Top',
				'name' => 'banner-content-top',
				'type' => 'post_object',
				'instructions' => 'Wenn ein zusätzlicher Banner oben auf der Seite erscheinen soll, bitte hier den \'Slug\' eintragen',
				'post_type' => array (
					0 => 'banner',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_google-maps',
		'title' => 'Google Maps',
		'fields' => array (
			array (
				'key' => 'field_5411a3b4337ac',
				'label' => 'Karte',
				'name' => 'karte',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'karten',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_startseiten-beitrage',
		'title' => 'Startseiten-Beitrage',
		'fields' => array (
			array (
				'key' => 'field_55f1732b0961b',
				'label' => 'Start Post 01',
				'name' => 'start_post_01',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'post',
					1 => 'page',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_55f1732b0ce72',
				'label' => 'Start Post 02',
				'name' => 'start_post_02',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'all',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_55f1732b0f3fe',
				'label' => 'Start Post 03',
				'name' => 'start_post_03',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'all',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_55f173715bdcd',
				'label' => 'Start Post 04',
				'name' => 'start_post_04',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'all',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-homepage.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 1,
	));
	register_field_group(array (
		'id' => 'acf_auf-einen-blick',
		'title' => 'Auf einen Blick',
		'fields' => array (
			array (
				'key' => 'field_530b8aa8aa028',
				'label' => 'Zusatzinfos',
				'name' => 'zusatzinfos',
				'type' => 'post_object',
				'instructions' => 'Gibt es Zusatzinfos, die du oben in die Sidebar hinzufügen möchtest? Dann trage hier den Artikel/- oder Seiten \'Slug\' ein',
				'post_type' => array (
					0 => 'post',
					1 => 'page',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-homepage.php',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 2,
	));
	register_field_group(array (
		'id' => 'acf_aufklappfelder-mit-passenden-artikeln',
		'title' => 'Aufklappfelder mit passenden Artikeln',
		'fields' => array (
			array (
				'key' => 'field_56c2ec869a80f',
				'label' => 'Textfeld_01',
				'name' => '',
				'type' => 'tab',
				'instructions' => 'Für zusätzliche Textabschnitte',
			),
			array (
				'key' => 'field_547c5eec8fd47',
				'label' => 'Textfeld_01',
				'name' => 'textfeld_01',
				'type' => 'wysiwyg',
				'instructions' => 'Für zusätzliche Textabschnitte',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_56c2e7f1c1a4b',
				'label' => 'Passende Artikel zu Textfeld 01-Nr_01',
				'name' => 'passende_artikel_zu_textfeld_01-nr_01',
				'type' => 'post_object',
				'instructions' => 'Hier die gewünschten Artikel zum obigen Textfeld zuordnen/auswählen.',
				'post_type' => array (
					0 => 'post',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_56c2ea2cc2e1b',
				'label' => 'Passende Artikel zu Textfeld 01-Nr_02',
				'name' => 'passende_artikel_zu_textfeld_01-nr_02',
				'type' => 'post_object',
				'instructions' => 'Hier die gewünschten Artikel zum obigen Textfeld zuordnen/auswählen.',
				'post_type' => array (
					0 => 'post',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_56c2ea34c2e1c',
				'label' => 'Passende Artikel zu Textfeld 01-Nr_03',
				'name' => 'passende_artikel_zu_textfeld_01-nr_03',
				'type' => 'post_object',
				'instructions' => 'Hier die gewünschten Artikel zum obigen Textfeld zuordnen/auswählen.',
				'post_type' => array (
					0 => 'page',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_56c2ea3bc2e1d',
				'label' => 'Passende Artikel zu Textfeld 01-Nr_04',
				'name' => 'passende_artikel_zu_textfeld_01-nr_04',
				'type' => 'post_object',
				'instructions' => 'Hier die gewünschten Artikel zum obigen Textfeld zuordnen/auswählen.',
				'post_type' => array (
					0 => 'page',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_56c2ec9d0d07a',
				'label' => 'Textfeld_02',
				'name' => '',
				'type' => 'tab',
				'instructions' => 'Für zusätzliche Textabschnitte',
			),
			array (
				'key' => 'field_547c5f1d8fd48',
				'label' => 'Textfeld_02',
				'name' => 'textfeld_02',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_56c2eba7dcf24',
				'label' => 'Passende Artikel zu Textfeld 02-Nr_01',
				'name' => 'passende_artikel_zu_textfeld_02-nr_01',
				'type' => 'post_object',
				'instructions' => 'Hier die gewünschten Artikel zum obigen Textfeld zuordnen/auswählen.',
				'post_type' => array (
					0 => 'page',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_56c2ebc6dcf25',
				'label' => 'Passende Artikel zu Textfeld 02-Nr_02',
				'name' => 'passende_artikel_zu_textfeld_02-nr_02',
				'type' => 'post_object',
				'instructions' => 'Hier die gewünschten Artikel zum obigen Textfeld zuordnen/auswählen.',
				'post_type' => array (
					0 => 'page',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_56c2ebd2dcf27',
				'label' => 'Passende Artikel zu Textfeld 02-Nr_03',
				'name' => 'passende_artikel_zu_textfeld_02-nr_03',
				'type' => 'post_object',
				'instructions' => 'Hier die gewünschten Artikel zum obigen Textfeld zuordnen/auswählen.',
				'post_type' => array (
					0 => 'page',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_56c2ebdadcf28',
				'label' => 'Passende Artikel zu Textfeld 02-Nr_04',
				'name' => 'passende_artikel_zu_textfeld_02-nr_04',
				'type' => 'post_object',
				'instructions' => 'Hier die gewünschten Artikel zum obigen Textfeld zuordnen/auswählen.',
				'post_type' => array (
					0 => 'page',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-sub-sub.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-sub-sub-v2.php',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 2,
	));
	register_field_group(array (
		'id' => 'acf_mehr-infos-button',
		'title' => '\'Mehr Infos\' Button',
		'fields' => array (
			array (
				'key' => 'field_52dfffc89c64f',
				'label' => 'Mehr-Infos-Url',
				'name' => 'mehr-infos-url',
				'type' => 'text',
				'instructions' => 'Wird ein Link benötigt, bitte hier den Link, z B. http://www.spraachen.org/categorys/deutschkurse eintragen',
				'default_value' => '',
				'placeholder' => 'hier bitte die URL eintragen',
				'prepend' => 'URL',
				'append' => 'abschicken',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52e000119c650',
				'label' => 'Mehr-Infos-Name',
				'name' => 'mehr-infos-name',
				'type' => 'text',
				'instructions' => 'Wird ein Link benötigt, bitte hier die Linkbezeichnung eintragen',
				'default_value' => 'mehr Informationen',
				'placeholder' => 'Hier bitte den Linknamen eintragen',
				'prepend' => 'Linkname',
				'append' => 'abschicken',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'custom_fields',
				1 => 'discussion',
				2 => 'comments',
				3 => 'send-trackbacks',
			),
		),
		'menu_order' => 12,
	));
	register_field_group(array (
		'id' => 'acf_termine',
		'title' => 'Termine',
		'fields' => array (
			array (
				'key' => 'field_53a0304af9c94',
				'label' => 'Termin Tabellen 01',
				'name' => 'termin-tabellen-01',
				'type' => 'text',
				'instructions' => 'Hier wird bitte den Shortcode (Bsp.: [table id=13 /]) der gewünschten Tabelle eingetragen.',
				'default_value' => '',
				'placeholder' => 'Shortcode der Tabelle',
				'prepend' => '',
				'append' => 'speichern',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5458d7a2431a0',
				'label' => 'Termin Tabellen 02',
				'name' => 'termin-tabellen-02',
				'type' => 'text',
				'instructions' => 'Hier wird bitte den Shortcode (Bsp.: [table id=13 /]) der gewünschten Tabelle eingetragen.',
				'default_value' => '',
				'placeholder' => 'Shortcode der Tabelle',
				'prepend' => '',
				'append' => 'speichern',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5458d7b8d23b9',
				'label' => 'Termin Tabellen 03',
				'name' => 'termin-tabellen-03',
				'type' => 'text',
				'instructions' => 'Hier wird bitte den Shortcode (Bsp.: [table id=13 /]) der gewünschten Tabelle eingetragen.',
				'default_value' => '',
				'placeholder' => 'Shortcode der Tabelle',
				'prepend' => '',
				'append' => 'speichern',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5458d7cc7d821',
				'label' => 'Termin Tabellen 04',
				'name' => 'termin-tabellen-04',
				'type' => 'text',
				'instructions' => 'Hier wird bitte den Shortcode (Bsp.: [table id=13 /]) der gewünschten Tabelle eingetragen.',
				'default_value' => '',
				'placeholder' => 'Shortcode der Tabelle',
				'prepend' => '',
				'append' => 'speichern',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5458d7dbaf592',
				'label' => 'Termin Tabellen 05',
				'name' => 'termin-tabellen-05',
				'type' => 'text',
				'instructions' => 'Hier wird bitte den Shortcode (Bsp.: [table id=13 /]) der gewünschten Tabelle eingetragen.',
				'default_value' => '',
				'placeholder' => 'Shortcode der Tabelle',
				'prepend' => '',
				'append' => 'speichern',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'custom_fields',
				1 => 'discussion',
				2 => 'comments',
			),
		),
		'menu_order' => 13,
	));
	register_field_group(array (
		'id' => 'acf_kontaktformulare',
		'title' => 'Kontaktformulare',
		'fields' => array (
			array (
				'key' => 'field_53027d8a7d607',
				'label' => 'Kontaktformular',
				'name' => 'kontaktformular',
				'type' => 'text',
				'instructions' => 'Hier wird bitte der Shortcode (Bsp.: [contact-form-7 id="167" title="Anfrageformular Deutsch Fachsprache Medizin"]) des gewünschten Formulars eingetragen.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => 'speichern',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-sub.php',
					'order_no' => 1,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'custom_fields',
				1 => 'discussion',
				2 => 'comments',
				3 => 'send-trackbacks',
			),
		),
		'menu_order' => 14,
	));
	register_field_group(array (
		'id' => 'acf_passende-beitraege',
		'title' => 'Passende Beiträge',
		'fields' => array (
			array (
				'key' => 'field_54118d11956d5',
				'label' => 'Related Post 01',
				'name' => 'related_post_01',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'post',
					1 => 'page',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_54118d42956d6',
				'label' => 'Related Post 02',
				'name' => 'related_post_02',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'page',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5411a0257977b',
				'label' => 'Related Post 03',
				'name' => 'related_post_03',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'page',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 16,
	));
}


?>