<?php get_header(); ?>

<div class="site-content">

    <?php if (have_posts()): ?>

        <?php while (have_posts()) : the_post(); ?>
					<div class="main-content">
			<?php get_template_part('partials/article', '404'); ?>
					</div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>


    <?php endif; ?>

</div>

<?php get_footer(); ?>
