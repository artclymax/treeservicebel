<?php
$page = get_page_by_path('home');
$title = $args['title'] ?? get_field('services_title', $page->ID);

$args_post = array(
	'post_type' => 'services',
	'posts_per_page' => -1, // или любое число
);

$query = new WP_Query($args_post);
?>
<section class="section services-section" id="services">
	<div class="container services-section__container">
		<h2 class="title-1 upcase services-section__title"><?php echo $title ?></h2>
		<ul class="services-section__list card-list">
			<?php if ($query->have_posts()):
				while ($query->have_posts()):
					$query->the_post(); ?>
					<li class="card-list__item service-card">
						<div class="service-card__content">
							<div class="service-card__wrapper">
								<h3 class="service-card__title"><?php the_title(); ?></h3>

								<p class="service-card__price"
									style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/service-badge.png')"><?php the_field('service_price'); ?>
									</p>
							</div>
							<a class="service-card__btn btn" href="<?php the_permalink(); ?>"><?php the_field('service_btn_post'); ?></a>
						</div>
						<div class="service-card__image-box image-box">
							<img src="<?php the_field('service_image_post'); ?>" alt="">
						</div>
					</li>
				<?php endwhile;
				wp_reset_postdata();
			endif; ?>
		</ul>
	</div>
</section>