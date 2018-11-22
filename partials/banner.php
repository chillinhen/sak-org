<?php
// Titles
$headline = get_field('banner_headline');
$subHeadline = get_field('banner_sub_headline');
$bannerImage = get_field('banner_bild');
$url = $bannerImage['url'];
$alt = $bannerImage['alt'];

// thumbnail
$sizeBanner = 'wpbs-banner';
$thumbBanner = $bannerImage['sizes'][ $sizeBanner ];




?>
<!-- post thumbnail -->
<div id="banner" class="row">
<?php if ($bannerImage) : ?>
    <div class="banner-image">
        <img class="attachment-acf-banner" src="<?php echo $thumbBanner; ?>"  alt="<?php echo $bannerImage['alt'];?>">
    </div>
    <?php endif; ?>
    <div class="<?php echo ($bannerImage) ? 'banner-half' : 'banner-full';?>">
        <hgroup>
    <?php if ($headline) : ?>
        <h1><?php echo $headline; ?></h1>
    <?php else : ?>
        <h1><?php the_title(); ?></h1>    
    <?php endif; ?>
    <?php if ($subHeadline) : ?>
        <h2><?php echo $subHeadline; ?></h2>
    <?php endif; ?>
</hgroup>
    </div>

<!-- /post thumbnail -->

</div>