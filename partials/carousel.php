<?php 
$lang = strtolower(get_locale());
if(is_front_page()) :
    $filter = 'startseite-' . $lang;
    
    else :
	$filter = $post->post_name;
    endif;
$argsCarousel = array(
    'post_type' => 'carousel-item',
    'category_name' => $filter,
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',//hier geht nur orderby dates
    'order' => 'DESC');

$bannerCarousel = new WP_Query($argsCarousel);
?>
<?php if ($bannerCarousel->have_posts()) : ?>
<div id="bannerCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000" data-pause="hover">
    	<!-- Indicators -->
    	<ol class="carousel-indicators">
	    <?php $counter = 0;?>
		<?php while ($bannerCarousel->have_posts()) : $bannerCarousel->the_post(); ?>
		    
		    <li data-target="#bannerCarousel" data-slide-to="<?php echo $counter; ?>"><?php echo $counter + 1; ?> </li>
		    <?php $counter++; ?>		    
		<?php endwhile; ?>
    	</ol>
    	<!-- Wrapper for slides -->
    	<div class="carousel-inner">
		<?php while ($bannerCarousel->have_posts()) : $bannerCarousel->the_post(); ?>
		    <?php get_template_part('partials/carousel', 'item'); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
    	</div>
    	<!-- Controls -->
    	<a class="left carousel-control" href="#bannerCarousel" data-slide="prev">
    	    <i class="fa fa-angle-left fa-2"></i><span><?php _e('Prevs','html5blank' )?></span>
    	</a>
    	<a class="right carousel-control" href="#bannerCarousel" data-slide="next">
            <i class="fa fa-angle-right fa-2"></i><span><?php _e('Next','html5blank' )?></span>
    	</a>
        </div>

<?php endif; ?>