<?php
$selection = get_field('link-typ');
$link_name = get_field('mehr-infos-name');
if ($selection == 'intern') :
    $url = get_field('interner_link');
elseif ($selection == 'extern') :
    $url = get_field('mehr-infos-url');
else :
    $url = get_field('mehr-infos-url');
endif; ?>
<?php if ($link_name) : ?>
    <a class="btn btn-inverse <?php echo $selection; ?>" href="<?php echo $url; ?>" title="<?php the_title(); ?>">
    <?php echo $link_name; ?>
    </a>
<?php endif; ?>