<?php 
//Variables
$descriptionDE = get_field('meta_description_de', 'option');
$descriptionEN = get_field('meta_description_en', 'option');
$descriptionZN = get_field('meta_description_zn', 'option');

$keywordsDE = get_field('meta_keywords_de', 'option');
$keywordsEN = get_field('meta_keywords_en', 'option');
$keywordsZN = get_field('meta_keywords_zn', 'option');
?>
<?php if ($descriptionDE) : ?>
<meta name="description" lang="de_DE" content="<?php echo strip_tags($descriptionDE); ?>" />
<?php endif; ?>
<?php if ($descriptionEN) : ?>
<meta name="description" lang="en_US" content="<?php echo strip_tags($descriptionEN); ?>" />
<?php endif; ?>
<?php if ($descriptionZN) : ?>
<meta name="description" lang="zh_CN" content="<?php echo strip_tags($descriptionZN); ?>" />
<?php endif; ?>
<?php if ($keywordsDE) : ?>
    <meta name="keywords" lang="de_DE" content="<?php echo strip_tags($keywordsDE); ?>" />
<?php endif; ?>
<?php if ($keywordsEN) : ?>
    <meta name="keywords" lang="en_US" content="<?php echo strip_tags($keywordsEN); ?>" />
<?php endif; ?>
<?php if ($keywordsZN) : ?>
    <meta name="keywords" lang="zh_CN" content="<?php echo strip_tags($keywordsZN); ?>" />
<?php endif; ?>

