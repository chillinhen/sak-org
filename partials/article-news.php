<?php
//
global $more;
$more = 0;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
    <div class="bubble">
        <div class="inner">
            <h3 class="news-title" itemprop="headline"><?php the_title(); ?></h3>
            <?php
            #the_excerpt();
            the_content(__('continue reading', 'html5blank'));
            ?>

        </div>
    </div>
</article>
