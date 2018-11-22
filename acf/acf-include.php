<?php

// 1. customize ACF path
#add_filter('acf/settings/path', 'my_acf_settings_path');

function my_acf_settings_path($path) {

    // update path
    $path = get_stylesheet_directory() . '/acf/';

    // return
    return $path;
}

// 2. customize ACF dir
#add_filter('acf/settings/dir', 'my_acf_settings_dir');

function my_acf_settings_dir($dir) {

    // update path
    $dir = get_stylesheet_directory_uri() . '/acf/';

    // return
    return $dir;
}

// 3. Hide ACF field group menu item
if (!is_admin()) {
    add_filter('acf/settings/show_admin', '__return_false');
}
// 4. Include ACF
include_once( get_stylesheet_directory() . '/acf/all-parent-fields.php' );

if (function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(array(
        'page_title' => __('Theme General Settings', 'spraachen-org'),
        'menu_title' => __('Theme Settings', 'spraachen-org'),
        'position' => '63.3',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

// 5. if you have some extras
//Shortcodes in ACF
function acf_format_value_for_api($value, $post_id, $field) {
    return str_replace(']]>', ']]>', apply_filters('the_content', $value));
}

function acf_on_init() {
    if (!is_admin()) {
        add_filter('acf/format_value_for_api/type=wysiwyg', 'acf_format_value_for_api', 10, 3);
    }
}

add_action('init', 'acf_on_init');
?>