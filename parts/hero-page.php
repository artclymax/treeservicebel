<?php
$image = get_field('hero_image');

if (empty($image)) {
	$image = get_template_directory_uri() . '/assets/images/hero.jpg';
}
?>

<section class="section hero-page hero jarallax" id="hero">
	<div class="container hero__container">
		<h2 class="title-1 hero__title"><?php the_title() ?></h2>
	</div>
	<div class="hero__image image-box jarallax-img" aria-hidden>
		<img src="<?php echo $image ?>" alt="">
	</div>
</section>