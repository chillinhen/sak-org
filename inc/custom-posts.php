<?php
//create custom posts
//
//carousels
function my_custom_post_carousel() {
    $labels = array(
        "name" => "Carousel",
        "singular_name" => "Carousel",
    );
    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "carousel-item", "with_front" => true),
        "query_var" => true,
        "menu_position" => 12, 
        "supports" => array("thumbnail","title", "editor", "custom-fields", "revisions", "author", "page-attributes"), "taxonomies" => array("category"));
    register_post_type("carousel-item", $args);
}

add_action('init', 'my_custom_post_carousel');
?>