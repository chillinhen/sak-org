<?php
$selection = get_field('panels_oder_accordions');
$parent = $post->ID;
$filter = array(
    'post_type' => 'page',
    'post_parent' => $parent,
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
);
$subLoop = new WP_Query($filter);
if ($subLoop->found_posts >= 3) :
    #echo '<h1>passt</h1>';
    $columnGrid = ' subpanels';
else : 
    #echo '<h1>passt nicht</h1>';
    $columnGrid = ' smallpanels';
endif;
if ($subLoop->have_posts()) : ?>
<div class="<?php echo $selection;echo $columnGrid ;?>">
    <?php while ($subLoop->have_posts()) : $subLoop->the_post(); 
            if ($selection == 'panels') :
                get_template_part('partials/panels', 'thumbnails');
            elseif ($selection == 'accordion') :
                get_template_part('partials/article', 'accordion');
            endif;
    endwhile; wp_reset_postdata(); ?>
</div>
<?php endif; ?>


