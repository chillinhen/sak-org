<?php /* Template Name: Standorte */ get_header(); ?>
<?php get_template_part('partials/map'); ?>
<div class="site-content">
    <?php if (have_posts()): ?>

        <?php while (have_posts()) : the_post(); ?>
            <div class="main-content">
                <?php get_template_part('partials/article', 'page'); ?>
            </div>
            <?php get_sidebar('zusatzinfos'); ?>
        <?php endwhile;
    else:
        ?>
        <div class="main-content">
    <?php get_template_part('partials/article', '404'); ?>
        </div>

<?php endif; ?>
</div>
<?php get_template_part('partials/related', 'articles'); ?>

<?php get_footer(); ?>