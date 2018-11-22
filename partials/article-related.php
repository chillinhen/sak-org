<?php
global $more;
$more = 0;
?>
<?php
$selection = get_field('link-typ');
$link_name = get_field('mehr-infos-name');
if ($selection == 'intern') :
    $url = get_field('interner_link');
elseif ($selection == 'extern') :
    $url = get_field('mehr-infos-url');
else :
    $url = get_field('mehr-infos-url');
endif; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('related'); ?> role="article">
    <!-- headline -->
        <?php if (!($selection == 'none')) : ?>
    <h3 class="page-title" itemprop="headline">
        
        <a class="<?php echo $selection; ?>" href="<?php echo $url; ?>" title="<?php the_title(); ?>">
        <?php the_title(); ?>
        </a>
    </h3>
    <?php else : ?> 
    <h3 class="page-title" itemprop="headline"><?php the_title(); ?></h3>
    <?php endif;?>
    <!-- end headline -->
    <?php if ( is_front_page() ) : 
   if ( has_post_thumbnail() ) : 
       if (!($selection == 'none')) : ?>
    <a class="<?php echo $selection; ?>" href="<?php echo $url; ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('wpbs-article');?></a>
    <?php else : ?>
        <?php the_post_thumbnail('wpbs-article');?>
   <?php  endif; 
            endif;
                endif;?>
    <!-- end Thumbnail -->

    

    <p><?php the_excerpt(); ?></p>
 <!-- show Button 'learn more' per custom field -->
  <?php if (!( is_front_page() )) : 
    get_template_part('partials/button', 'more_info'); 
  endif;
  ?>
    <footer class="clearfix">
	<?php #get_template_part('partials/edit', 'infos'); ?>
    </footer> <!-- end article footer -->

</article> <!-- end article -->