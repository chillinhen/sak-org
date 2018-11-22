<div id="post-<?php the_ID(); ?>" <?php post_class('box'); ?>>

    <h3 class="clearfix">
	<a href="<?php echo the_permalink();?>">
	    <?php the_title(); ?>
	</a>
        <?php edit_post_link(); ?>
    </h3>
        
  
    <div class="text">
	<?php the_excerpt();?>
    </div>

    <!-- show Button 'learn more' per custom field -->
    <?php get_template_part('partials/button', 'more_info'); ?>
    
   	<a class="more-link-corner" href="<?php echo the_permalink();?>">
    </a>
</div>

