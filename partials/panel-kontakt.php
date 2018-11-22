<?php
$contactInfo = get_field('kontaktdaten');
?>
<?php
// Kontaktdaten
if ($contactInfo):
    // override $post
    $post = $contactInfo;
    setup_postdata($post);
    ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('box'); ?>>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
    <?php edit_post_link(); ?>
    </div>
    <?php
    wp_reset_postdata();
endif;
?>