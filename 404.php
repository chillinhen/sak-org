<?php get_header(); ?>
<?php #get_template_part('partials/banner'); ?>
<div class="site-content">
    <div class="main-content">
        <article id="post-not-found">
            <h1><?php _e( 'Error 404: The site you are looking for could unfortunately not be found.', 'html5blank' ); ?></h1>
            <p><?php
                        _e('Please check the URL, return to our <a href="http://spraachen.org/">home page</a> or send us your questions by email to <a href="mail@spraachen.de">mail@spraachen.de</a>.</br>Thank You!', 'html5blank');
                ?></p>
        </article>
    </div>
</div>

<?php get_footer(); ?>
