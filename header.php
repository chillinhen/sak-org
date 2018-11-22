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
        <?php get_template_part('inc/favicon'); ?>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

        <meta name="description" content="<?php bloginfo('description'); ?>">
        
        <?php wp_head(); ?>
        <meta name="google-site-verification" content="BywRw57oqJKP3kshHwjbRSFE-sHi-wl1A5RXiL-1frg" />
    </head>
    <body <?php body_class(); ?>>
        <?php get_template_part('library/svg/inline', 'icons.svg'); ?>
        <div id="wrapper">
            <!-- header -->
            <header id="header" class="container">

                <!-- logo -->
                <?php if (is_front_page()) : ?>
                    <h1 class="logo">
                    <?php else: ?>
                        <div class="logo">
                        <?php endif; ?>
                        <a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo('name'); ?>">
                            <?php if (is_front_page()) : ?>
                            <span class="no-display">
                                <?php echo get_bloginfo('name') . ' - ' . get_bloginfo('description'); ?>
                            
                            </span>
                            <?php endif; ?>
                            <?php if (has_custom_logo()) : ?>

                                <?php the_custom_logo(); ?>

                            <?php else : ?>

                                <svg><use xlink:href="#logo"></use></svg>
                                <!-- code for site title and description when there's no image -->
                            <?php endif; ?>
                        </a>
                        <?php if (is_front_page()) : ?>
                    </h1>
                <?php else: ?>
            </div>
        <?php endif; ?>
        <!-- /logo -->
        <!-- contact data -->
        <div class="contact-data">
            <?php get_template_part('partials/header', 'contact'); ?>
        </div>
        <a class="toggle-nav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

    </header>
    <!-- /header -->
    <!-- wrapper -->
    <main class="container">
        <!-- nav -->
        <nav id="mainNav" role="navigation">
            <a class="affix-logo" href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo('name'); ?>"> </a>
            <?php html5blank_nav(); ?>
        </nav>
        <!-- /nav -->
