<?php
$excerpt = get_field('excerpt');
$title = $excerpt['title'];
$descr = $excerpt['descr'];
?>
<section class="section excerpt" id="excerpt">
	<div class="container excerpt__container">
		<div class="excerpt__title title-1"><?php echo $title ?></div>
		<?php if ($descr): ?>
			<div class="excerpt__descr-box descr-box"><?php echo $descr ?></div>
		<?php endif; ?>
	</div>
</section>