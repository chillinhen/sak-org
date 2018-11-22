<?php
add_action('after_setup_theme', 'spraachen_theme_setup');

function spraachen_theme_setup() {





  
    
    //reset original gallery
    remove_shortcode('gallery', 'gallery_shortcode_tbs');
    add_shortcode('gallery', 'gallery_shortcode');
    


    
}


?>