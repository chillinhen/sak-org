<!-- sidebar -->
<aside class="sidebar" role="complementary">
        <?php
    //Post Thumbnail
    if (has_post_thumbnail()) :?>
    <div class="widget">
       <?php the_post_thumbnail('wpbs-article');?>
        </div>
    <?php endif;?>

	<?php get_template_part('searchform'); ?>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /sidebar -->
