<?php
if (have_rows('accordion')):
    ?>
    <div class="accordion">
        <?php while (have_rows('accordion')) : the_row(); // loop through the rows of data  ?>
            <h3 class="collapseHeadline">
                <a aria-expanded="false" data-toggle="collapse" href="#<?php the_sub_field('accordion_id'); ?>">
                    <span>
                        <?php the_sub_field('headline'); //Headline   ?>
                    </span>
                </a>		
            </h3>
            <div id="<?php the_sub_field('accordion_id'); ?>" class="collapse">
                <?php the_sub_field('text'); ?>
                <?php
                // related panels
                $posts = get_sub_field('panels');
                if ($posts):
                    ?>
                    <div class="panels smallpanels">
                        <?php foreach ($posts as $post): // variable must be called $post (IMPORTANT)  ?>

                            <?php setup_postdata($post); ?>
                            <?php get_template_part('partials/panels', 'thumbnails'); ?>

                        <?php endforeach; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </div>

<?php endif; ?>

