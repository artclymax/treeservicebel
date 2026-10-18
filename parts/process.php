<?php
$class_add = $args['class'] ?? '';
$title = $args['title'] ?? get_field('slider_title');
$descr = $args['descr'] ?? get_field('slider_descr');
$list = $args['list'] ?? get_field('slider_list');

$class = "section process " . $class_add;
?>
<section class="<?php echo $class ?>" id="process">
	<div class="container">
		<h2 class="process__title title-1"><?php echo $title ?></h2>
		<?php if (!empty($descr)): ?>
			<div class="process__descr descr-box"><?php echo $descr ?></div>
		<?php endif ?>
	</div>
	<div class="container process__container">
		<div class="swiper swiper-process">
			<div class="swiper-wrapper swiper-process__wrapper">
				<?php if (!empty($list)): ?>
					<?php foreach ($list as $item): ?>
						<!-- Slide -->
						<div class="swiper-slide process-slide">
							<div class="process-slide__wrapper">
								<div class="process-slide__icon">
									<img src="<?php echo $item['icon'] ?>" alt="">
								</div>
								<p class="process-slide__text">
									<?php echo $item['text'] ?>
								</p>
							</div>
						</div>
					<?php endforeach ?>
				<?php endif ?>
			</div>
		</div>
	</div>
</section>