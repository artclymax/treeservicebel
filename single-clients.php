<?php

get_header(); ?>


<?php if (have_posts()): ?>
	<?php while (have_posts()):
		the_post(); ?>

		<div class="section content" id="content">
			<div class="container content__container">
				<div class="descr-box">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<?php get_template_part('parts/gallery'); ?>

		<?php $page = get_page_by_path('clients');
		get_template_part('parts/block', null, ['title' => get_field('block_title', $page->ID), 'descr' => get_field('block_descr', $page->ID)]); ?>
		<?php get_template_part('parts/reviews'); ?>
		<?php
		get_template_part('parts/section-form', null, ['title' => 'Хотите стать нашим клиентом?', 'text' => 'TreeServiceBel готова помочь вам в уходе за территорией, удалении деревьев и расчистке участков. Мы гарантируем честность, аккуратность и результат.']) ?>

	<?php endwhile; ?>
<?php else: ?>
	<p>Записей не найдено.</p>
<?php endif; ?>


<?php get_footer(); ?>