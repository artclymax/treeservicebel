<?php
$image = get_field('hero_image') ?? get_template_directory_uri() . '/assets/images/hero.jpg';
?>
<section class="section hero hero-404 jarallax" id="hero">
	<div class="container hero__container">
		<div class="hero__content">
			<h2 class="title-1 hero__title">Страница не найдена</h2>
			<p class="hero__404">404</p>
			<div class="hero__text descr-box">
				<?php the_content(); ?>
			</div>
			<a class="hero__thanks-btn btn" href="<?php echo esc_url(home_url('/')); ?>">Вернуться на главную</a>
		</div>
	</div>

	<div class="hero__image image-box jarallax-img" aria-hidden>
		<img src="<?php echo $image ?>" alt="<?php the_title() ?>">
	</div>
</section>