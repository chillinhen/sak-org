<?php $lang = strtolower(get_locale()); ?>   
<address>
    &copy; 
    <?php if ($lang == "en_us") : ?>
        <?php strip_tags(the_field('adresse-en', 'option')); ?>
    <?php elseif ($lang == "de_de") : ?>
        <?php strip_tags(the_field('adresse-de', 'option')); ?>
    <?php elseif ($lang == "zh_CN") : ?>
        <?php strip_tags(the_field('adresse-zh', 'option')); ?>
    <?php endif; ?>
</address>
<a class="revoke-cookies" href="#" onclick="document.cookie='cookiebar=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/'; setupCookieBar(); return false;">
    <?php _e( 'Revoke the cookie consent', 'html5blank' ); ?></a>
