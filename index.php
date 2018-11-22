<?php get_header(); ?>
<?php get_template_part('partials/banner'); ?>

<div class="site-content">
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

        <?php while ($newsQuery->have_posts()) : $newsQuery->the_post();?>
            <div class="main-content">
                <?php get_template_part('partials/article', 'page'); ?>
                <hr>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();?>

    <?php endif; ?>

</div>

<?php get_footer(); ?>