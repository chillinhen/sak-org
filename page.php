<?php get_header(); ?>
<?php get_template_part('partials/banner'); ?>
<div class="site-content">
    <div id="breadcrumb"><?php breadcrumb_trail(); ?></div>
    <?php if (have_posts()): ?>

        <?php while (have_posts()) : the_post(); ?>
            <div class="main-content">
                <?php get_template_part('partials/article', 'page'); ?>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
    else:
        ?>
        <div class="main-content">
    <?php get_template_part('partials/article', '404'); ?>
        </div>

    <?php endif; ?>
<?php get_sidebar('zusatzinfos'); ?>
</div>
<?php get_template_part('partials/related', 'articles'); ?>

<?php get_footer(); ?>