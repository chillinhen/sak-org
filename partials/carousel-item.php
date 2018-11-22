<!-- item -->
<?php
if (has_post_thumbnail()) :
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);

$bg_thumbnail = $thumb_url[0];
endif;
?>
<div class="item" style="background-image:url('<?php echo $bg_thumbnail; ?>');background-position: center right;background-repeat: no-repeat;">
	<div class="carousel-caption">
	<hgroup>
		<h2><?php the_title(); ?></h2>
		<h3><?php the_content(); ?></h3>
	</hgroup>
	
	<?php get_template_part('partials/button', 'more_info'); ?>
	</div>
</div>