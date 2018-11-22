<!-- Social Media -->
<?php $lang = strtolower(get_locale()); ?> 
<?php if (have_rows('social_media_links', 'option')) : ?>

    <?php while (have_rows('social_media_links', 'option')) : the_row(); ?>

        <a class="<?php the_sub_field('label'); ?>" href="<?php the_sub_field('link'); ?>" target="_blank">
            <i class="fa fa-<?php the_sub_field('label'); ?>"></i>
            <?php if ($lang == "en_us") : ?>
                <span><?php the_sub_field('text_en'); ?></span>
            <?php elseif ($lang == "de_de") : ?>
                 <span><?php the_sub_field('text_de'); ?></span>
            <?php elseif ($lang == "zh_CN") : ?>
                 <span><?php the_sub_field('text_zh'); ?></span>
            <?php endif;?>
        </a>
    <?php endwhile; ?>

<?php endif; ?>
<!-- Mail & Telefon-->
<?php
$mail = get_field('e-mailadresse', 'option');
$phone = get_field('telefon', 'option');
$phoneLink = get_field('telefon_link', 'option');
?>
<a href="mailto:<?php echo $mail; ?>">
    <i class="fa fa-envelope"></i> 
    <span><?php echo $mail; ?></span>
</a>
<a href="tel:<?php echo $phoneLink;?>">
    <i class="fa fa-phone"></i> 
    <span>
        <?php echo $phone;?>
    </span>
</a>