<?php /* Template Name: Startseite */ get_header(); ?>
<?php get_template_part('partials/carousel'); ?>
<?php if (have_posts()): ?>
    <div class="site-content">
        <?php while (have_posts()) : the_post(); ?>
            <div class="main-content">
                <?php the_content(); ?>
            </div>
            <!-- Sidebar Aktuelles ToDO -->

            <?php get_template_part('partials/news'); ?>

        <?php endwhile;
        ?>
    </div>
    <?php get_template_part('partials/panels', 'related'); ?>
<?php else:
    ?>
    <div class="main-content">
        <?php get_template_part('partials/article', '404'); ?>
    </div>
<?php endif; ?>
<?php get_template_part('partials/related', 'articles'); ?>
<?php get_footer(); ?>