<?php
$posts = get_field('related_posts');
if ($posts):
    ?>
    <div class="full-content">
        <?php if (!(is_front_page())) : ?>
            <h2><?php _e('More options', 'html5blank'); ?></h2>
        <?php endif; ?>
            <div class="related">
            <?php
            foreach ($posts as $post): // variable must be called $post (IMPORTANT) 
                setup_postdata($post);
                get_template_part('partials/article', 'related');
            endforeach;
            ?>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly    ?>
    </div>
<?php endif; ?>
