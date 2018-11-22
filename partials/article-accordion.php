<article id="post-<?php the_ID(); ?>" <?php post_class('accordion-item'); ?>>
    <header>
        <h2 class="collapseHeadline" itemprop="headline">
            <a role="button" data-toggle="collapse" data-parent="#post-<?php the_ID(); ?>" href="#collapse_<?php the_ID(); ?>" aria-expanded="true" aria-controls="collapse_<?php the_ID(); ?>">
                <?php the_title(); ?>
            </a>
            <?php edit_post_link(); ?>
        </h2>
    </header>
    <section id="collapse_<?php the_ID(); ?>" class="post_content collapse">
        <div class="main">
            <?php the_content(); ?>
        </div>
        <div class="side">
            <?php get_template_part('partials/panel', 'kontakt'); ?>
        </div> 
    </section>
</article>