<?php
$args_post = array(
	'post_type' => 'clients',
	'posts_per_page' => -1, // или любое число
);

$query = new WP_Query($args_post);
?>
<section class="section section-clients" id="section-clients">
	<div class="container section-clients__container">
		<ul class="section-clients__list card-list">
			<?php if ($query->have_posts()):
				while ($query->have_posts()):
					$query->the_post(); ?>
					<li class="card-list__item news-card">
						<div class="news-card__image image-box">
							<img src="<?php the_field('clients_image_post'); ?>" alt="">
						</div>
						<h3 class="news-card__title title-3">
							<?php echo get_field('clients_title_post') ?? get_the_title(); ?>
						</h3>
						<a class="news-card__btn btn" href="<?php the_permalink(); ?>">Подробнее</a>
					</li>
				<?php endwhile;
				wp_reset_postdata();
			endif; ?>
		</ul>
	</div>
</section>