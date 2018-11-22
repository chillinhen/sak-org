<?php
/* Template Name: Maintenance */
?><?php get_header('maintenance'); ?>
<div class="site-content">
    <?php if (have_posts()): ?>

        <?php while (have_posts()) : the_post(); ?>
            <div class="main-content">
                <h2 itemprop="headline">
			<?php the_title(); ?>
		</h2>
                <?php get_template_part('partials/article', 'page'); ?>
            </div>
        <?php endwhile;
  wp_reset_postdata();
    else:
        ?>
        <div class="main-content">
    <?php get_template_part('partials/article', '404'); ?>
        </div>

<?php endif; ?>
</div>

<?php get_footer('maintenance'); ?>