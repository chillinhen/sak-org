<?php get_header(); ?>
<div class="site-content">

		<?php if (have_posts()): ?>
				<h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>
				<?php while (have_posts()) : the_post(); ?>
					<div class="main-content">
						<?php get_template_part('loop'); ?>
						<?php get_template_part('pagination'); ?>
					</div>
				<?php
				endwhile;
				wp_reset_postdata();
				?>


		<?php endif; ?>

</div>
	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
