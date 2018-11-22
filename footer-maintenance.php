
<!-- footer -->
<footer id="footer" role="contentinfo">

    <div class="footer-info">
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
<?php #get_template_part('partials/nav', 'off-canvas'); ?>
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
