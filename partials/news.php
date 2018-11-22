<?php

$lang = strtolower(get_locale());
if (is_front_page()) :
    $filter = 'aktuelles-' . $lang;

else :
    $filter = $post->post_name;
endif;
$argsCarousel = array(
    'post_type' => 'post',
    'category_name' => $filter,
    'post_status' => 'publish',
    'posts_per_page' => 10,
    'orderby' => 'date', //hier geht nur orderby dates
    'order' => 'DESC');

$newsQuery = new WP_Query($argsCarousel);
if ($newsQuery->have_posts()) : ?>
<aside class="sidebar">
    <h2 class="news category-link"><?php __('News', 'html5blank'); ?></h2>
    <div id="newsCarousel" class="carousel slide" data-ride="carousel" data-pause="hover" data-interval="10000">
        <div class="carousel-inner">
            <?php while ($newsQuery->have_posts()) : $newsQuery->the_post();?>
            <div class="item news-item">
                <?php get_template_part('partials/article', 'news'); ?>
            </div>
            <?php endwhile;wp_reset_postdata();?>
             <a class="left carousel-control" href="#newsCarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right carousel-control" href="#newsCarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
        </div>
    </div>
</aside>
<?php endif; ?>