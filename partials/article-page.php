<?php global $more; $more = FALSE; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope>
	<hgroup>
		<h2 class="page-title" itemprop="headline">
			<?php the_title(); ?>
		</h2>
	</hgroup>
	<section class="post_content" itemprop="articleBody">
		<?php the_content(); ?>
	</section> <!-- end article section -->
	<footer>
		<?php edit_post_link(); ?>
		<?php #get_template_part('partials/edit'); ?>
	</footer> <!-- end article footer -->

</article>