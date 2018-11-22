<?php
$posts = get_field('linked_posts');

if ($posts): ?>
<div class="panels subpanels">
	<?php foreach ($posts as $post): // variable must be called $post (IMPORTANT) ?>
		<?php setup_postdata($post); ?>
		<?php get_template_part('partials/panels', 'thumbnails'); ?>
	<?php endforeach; wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	</div>
<?php endif; ?>