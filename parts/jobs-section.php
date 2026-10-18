<?php
$title = $args['title'] ?? 'Наши услуги';

$args_post = array(
	'post_type' => 'jobs',
	'posts_per_page' => -1, // или любое число
);

$query = new WP_Query($args_post);
?>
<section class="section jobs-section" id="jobs-section">
	<div class="container jobs-section__container">
		<h2 class="jobs-section__title title-1">Текущие вакансии</h2>
		<div class="jobs-section__list card-list">
			<?php if ($query->have_posts()):
				while ($query->have_posts()):
					$query->the_post(); ?>
					<div class="card-list__item jobs-card">
						<h3 class="jobs-card__title"><?php the_title(); ?></h3>
						<div class="jobs-card__descr-box descr-box">
							<?php the_content() ?>
						</div>
					</div>
				<?php endwhile;
				wp_reset_postdata();
			endif; ?>
		</div>
	</div>
</section>