<?php
$page = get_page_by_path('home');

$args_post = array(
	'post_type' => 'news',
	'posts_per_page' => -1, // или любое число
);

$query = new WP_Query($args_post);

?>
<section class="section section-news" id="section-news">
	<div class="container section-news__container">
		<h2 class="title-1 upcase section-news__title"><?php the_field('news_title', $page->ID) ?></h2>
		<ul class="section-news__list card-list">
			<?php
			$index = 0;
			if ($query->have_posts()):
				while ($query->have_posts()):
					$query->the_post();
					?>
					<li class="card-list__item news-card">
						<div class="news-card__image image-box">
							<img src="<?php the_post_thumbnail(); ?>" alt="<?php the_title() ?>">
						</div>
						<h3 class="news-card__title title-3">
							<?php the_title() ?>
						</h3>
						<button class="news-card__btn btn"
							data-modal-btn="news-<?php echo $index ?>"><?php the_field('news_btn', $page->ID) ?></button>
					</li>
					<?php
					$index++;
				endwhile;
			endif; ?>
		</ul>
	</div>
	<?php
	$index = 0;
	if ($query->have_posts()):
		while ($query->have_posts()):
			$query->the_post();
			?>
			<div class="modal" id="news-<?php echo $index ?>" data-modal>
				<div class="modal__box" data-modal-box
					style="background-image: url('<?php the_field('opt_modal_news_image', 'options');?>');">
					<button class="modal__close-btn" data-modal-close aria-label="Закрыть">
						<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M16.875 1.96231L14.9127 0L8.4375 6.47519L1.96231 0L0 1.96231L6.47519 8.4375L0 14.9127L1.96231 16.875L8.4375 10.3998L14.9127 16.875L16.875 14.9127L10.3998 8.4375L16.875 1.96231Z"
								fill="currentColor" />
						</svg>
					</button>
					<div class="news-modal">
						<h3 class="news-modal__title title-2">
							<?php the_title() ?>
						</h3>
						<div class="descr-box news-modal__descr">
							<?php the_content() ?>
						</div>

						<blockquote class="news-modal__important descr-box"
							style="--icon: url('<?php echo get_template_directory_uri(); ?>/assets/images/icons/hint.png');">
							<?php the_excerpt() ?>
						</blockquote>
						<?php get_template_part('parts/contact-btn', null, ['class' => 'news-modal__btn', 'text' => 'Заказать бесплатную оценку участка']) ?>
					</div>
				</div>
			</div>
			<?php $index++;
		endwhile;
		wp_reset_postdata();
	endif; ?>
</section>