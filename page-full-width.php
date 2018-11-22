<?php /* Template Name: Full Width Page */ get_header(); ?>
<?php get_template_part('partials/banner'); ?>
<div class="site-content">
    <?php if (have_posts()): ?>
        <div id="breadcrumb"><?php breadcrumb_trail(); ?></div>
        <?php while (have_posts()) : the_post(); ?>
    
            <div class="full-width">
                <?php get_template_part('partials/article', 'page'); ?>
            </div>
        <?php endwhile;
    else:
        ?>
        <div class="full-width">
    <?php get_template_part('partials/article', '404'); ?>
        </div>

<?php endif; ?>
</div>
<?php get_template_part('partials/related', 'articles'); ?>

<?php get_footer(); ?>