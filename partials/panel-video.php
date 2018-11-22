<?php
$sidebarVideo = get_field('video');

if($sidebarVideo) :?>
<div class="iframe-elastic">
	<?php the_field('video'); ?>
</div>
<?php endif;?>