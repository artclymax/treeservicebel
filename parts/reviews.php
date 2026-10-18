<?php
$args_post = array(
	'post_type' => 'reviews',
	'posts_per_page' => -1, // или любое число
);

$query = new WP_Query($args_post);
?>
<section class="section reviews" id="reviews">
	<div class="container reviews__container">
		<h2 class="reviews__title title-1">Что говорят наши клиенты</h2>
		<div class="reviews__swiper">
			<div class="swiper swiper-review">
				<div class="swiper-wrapper swiper-review__wrapper">
					<?php if ($query->have_posts()):
						while ($query->have_posts()):
							$query->the_post(); ?>
							<div class="swiper-slide review-slide">
								<div class="review-slide__wrapper">
									<a class="review-slide__image-link image-box" href="<?php the_field('review_image'); ?>"
										data-fancybox>
										<img src="<?php the_field('review_image'); ?>" alt="<?php the_title(); ?>">
									</a>
									<h3 class="review-slide__title title-3"><?php the_title(); ?></h3>
									<p class="review-slide__meta"><?php the_field('review_author'); ?></p>
									<div class="review-slide__descr descr-box">
										<?php the_content(); ?>
									</div>
								</div>
							</div>
						<?php endwhile;
						wp_reset_postdata();
					endif; ?>
				</div>
			</div>

			<div class="swiper-review__pagination"></div>
			<button class="swiper-review__btn swiper-review__btn-prev swiper-btn swiper-btn__prev" type="button">
				<svg width="15" height="28" viewBox="0 0 15 28" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M13.833 1.00033L0.999676 13.8337L13.833 26.667" stroke="currentColor" stroke-width="2"
						stroke-linecap="round" stroke-linejoin="round" />
				</svg>

			</button>
			<button class="swiper-review__btn swiper-review__btn-next swiper-btn swiper-btn__next" type="button">
				<svg width="15" height="28" viewBox="0 0 15 28" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0.999999 1.00033L13.8333 13.8337L1 26.667" stroke="currentColor" stroke-width="2"
						stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</button>
		</div>

	</div>
</section>