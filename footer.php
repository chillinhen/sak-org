
<!-- footer -->
<footer id="footer" role="contentinfo">
    <div class="service-links">
        <?php wp_nav_menu(array('theme_location' => 'service-menu', 'menu_class' => 'footer-menu left', 'container' => '', 'fallback_cb' => 'my_menu')); ?>
    </div>
    <div id="accordion">
        <h4 class="collapseHeadline">
            <a data-toggle="collapse" data-parent="#accordion" href="#sitemap" aria-expanded="true" aria-controls="collapseOne">
                <?php _e('Sitemap', 'html5blank'); ?>
            </a>
        </h4>
        <div id="sitemap" class="collapse">
            <?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => 'footer-main-menu', 'container' => '', 'fallback_cb' => 'my_menu')); ?>
        </div>
    </div>
    <div class="footer-info">
        <?php wp_nav_menu(array('theme_location' => 'footer-links', 'menu_class' => 'menu clearfix')); ?>
        <?php get_template_part('partials/footer','contact');?>
        <div class="footer-logo">
            <svg><use xlink:href="#logo-only"></use></svg>
        </div>

    </div>
</footer>
<!-- /footer -->

</main>
<!-- copyright -->
<p class="copyright container">
    &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
</p>
<!-- /copyright -->
<div class="scroll-to-top"><i class="fa fa-angle-up fa-2x"></i></div>
</div>
<?php get_template_part('partials/nav', 'off-canvas'); ?>
<?php
dynamic_sidebar('languages');
?>

<!-- /container -->

<?php wp_footer(); ?>

<!-- analytics -->
<?php
$analytics = get_field('analytics', 'option');
if ($analytics):
    ?>
    <script>
    <?php echo strip_tags($analytics); ?>
    </script>
<?php endif; ?>
<!-- analytics -->  

</body>
</html>
