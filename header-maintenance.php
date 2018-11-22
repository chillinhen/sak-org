<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <?php
        if (!function_exists('_wp_render_title_tag')) :

            function theme_slug_render_title() {
                ?>
                <title><?php wp_title('|', true, 'right'); ?></title>
                <?php
            }

            add_action('wp_head', 'theme_slug_render_title');
        endif;
        ?>
        <?php get_template_part('inc/meta'); ?>
        <!--<link href="//www.google-analytics.com" rel="dns-prefetch">-->
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <?php wp_head(); ?>
        <script>
            // conditionizr.com
            // configure environment tests
            conditionizr.config({
                assets: '<?php echo get_template_directory_uri(); ?>',
                tests: {}
            });
        </script>

    </head>
    <body <?php body_class(); ?>>
        <?php get_template_part('library/svg/inline', 'icons.svg'); ?>
          <div id="wrapper">
        <!-- header -->
        <header id="header" class="container">

            <!-- logo -->
            <div class="logo">
                <a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo('name'); ?>">
                    <?php if (has_custom_logo()) : ?>

                        <?php the_custom_logo(); ?>

                    <?php else : ?>

                        <svg><use xlink:href="#logo"></use></svg>
                        <!-- code for site title and description when there's no image -->
                    <?php endif; ?>
                </a>
            </div>
            <!-- /logo -->
            <!-- contact data -->
            <div class="contact-data">
                <?php #get_template_part('partials/header', 'contact'); ?>
            </div>

        </header>
        <!-- /header -->
        <!-- wrapper -->
        <main class="container">
