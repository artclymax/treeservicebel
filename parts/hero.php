<?php
$excerpt = get_field('excerpt');
$title = $excerpt['title'];
$descr = $excerpt['descr'];
$image = get_field('hero_image') ?? get_template_directory_uri() . '/assets/images/hero.jpg';
$image_mobile = get_field('hero_image_mobile');

?>
<section class="section hero jarallax" id="hero">
	<div class="container hero__container">
		<div class="hero__content">
			<div class="title-1 hero__title descr-box"><?php echo $title ?></div>
			<div class="hero__text descr-box">
				<?php echo $descr ?>
			</div>
			<?php get_template_part('parts/contact-btn', null, ['class' => 'hero__btn']) ?>
		</div>
		<div class="hero__form-wrapper">
			<h3 class="title-3"><?php the_field('hero_form_title') ?></h3>
			<div class="hero-form">
				<?php echo do_shortcode('[contact-form-7 id="3234005" title="Контактная форма 1"]') ?>
			</div>
		</div>
		<a class="hero__link" href="#services" aria-label="Подробнее">
			<svg width="124" height="65" viewBox="0 0 124 65" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M62 53.8912L7.92379 1.34951C7.488 0.916924 6.97062 0.574928 6.40159 0.343315C5.83256 0.111702 5.22318 -0.00493616 4.60871 0.000160272C3.99424 0.0052567 3.38689 0.131989 2.82179 0.373009C2.25669 0.614029 1.74508 0.964554 1.31655 1.40431C0.888021 1.84407 0.551086 2.36431 0.325247 2.93494C0.099407 3.50558 -0.010855 4.11528 0.000842103 4.72874C0.0125392 5.34221 0.145963 5.94726 0.393392 6.5089C0.640821 7.07054 0.997342 7.57759 1.44232 8.00074L58.7593 63.6856C59.6269 64.5284 60.7895 65 62 65C63.2105 65 64.3731 64.5284 65.2407 63.6856L122.558 8.00075C123.003 7.5776 123.359 7.07054 123.607 6.5089C123.854 5.94726 123.987 5.34221 123.999 4.72875C124.011 4.11528 123.901 3.50558 123.675 2.93495C123.449 2.36431 123.112 1.84407 122.683 1.40431C122.255 0.964555 121.743 0.61403 121.178 0.37301C120.613 0.13199 120.006 0.00525808 119.391 0.000161641C118.777 -0.0049348 118.167 0.111703 117.598 0.343317C117.029 0.57493 116.512 0.916925 116.076 1.34951L62 53.8912Z"
					fill="#1C3F73" />
			</svg>
		</a>
	</div>

	<div class="hero__image image-box jarallax-img" aria-hidden>
		<img class="full-bg" src="<?php echo $image ?>" alt="">
		<?php if (!empty($image_mobile)): ?>
			<img class="mobile-bg" src="<?php echo $image_mobile ?>" alt="">
		<?php endif ?>
	</div>
</section>