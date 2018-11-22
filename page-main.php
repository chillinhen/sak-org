<?php /* Template Name: Uebersicht */ get_header(); ?>
<?php get_template_part('partials/banner'); ?>
<div class="site-content">
    <?php if (have_posts()): ?>

        <?php while (have_posts()) : the_post(); ?>
            <div class="main-content">
                <?php get_template_part('partials/article', 'page'); ?>
            </div>
            <?php get_sidebar('zusatzinfos'); ?>
        <?php endwhile; ?>

    <?php else:
        ?>
        <div class="main-content">
            <?php get_template_part('partials/article', '404'); ?>
        </div>
    <?php endif; ?>
</div>
<!-- Children -->
<?php get_template_part('partials/subpages'); ?>
<?php get_footer(); ?>