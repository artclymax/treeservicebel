<?php
$gallery = get_field('gallery-slide');
if (!empty($gallery)) {
	?>
	<div class="section gallery" id="gallery">
		<div class="container gallery__container">
			<div class="gallery__swiper">
				<div class="swiper swiper-review">
					<div class="swiper-wrapper swiper-review__wrapper">
						<?php
						foreach ($gallery as $item) {
							?>
							<div class="swiper-slide gallery-slide">
								<div class="gallery-slide__wrapper">
									<a class="gallery-slide__image-link image-box" href="<?php echo $item['image'] ?>" data-fancybox>
										<img src="<?php echo $item['image'] ?>" alt="<?php the_title(); ?>">
									</a>
								</div>
							</div>
						<?php }
						?>
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
	</div>
<?php } ?>