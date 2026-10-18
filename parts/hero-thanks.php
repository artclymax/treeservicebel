<section class="section hero hero-thanks jarallax" id="hero">
	<div class="container hero__container">
		<div class="hero__content">
			<h2 class="title-1 hero__title"><?php the_title(); ?></h2>
			<div class="hero__text descr-box">
				<?php the_content(); ?>
			</div>
			<div class="hero__thanks-form">
				<input class="input" type="text" value="<?php echo $_GET['text-469'] ?? ''; ?>" placeholder="Имя" readonly>
				<input class="input" type="text" value="+<?php echo $_GET['tel-448'] ?? ''; ?>" placeholder="Телефон" readonly>
				<a class="hero__thanks-btn btn" href="<?php echo esc_url(home_url('/')); ?>">Вернуться на главную</a>
			</div>
		</div>
	</div>

	<div class="hero__image image-box jarallax-img" aria-hidden>
		<img src="<?php the_field('hero_image') ?>" alt="<?php the_title() ?>">
	</div>
</section>