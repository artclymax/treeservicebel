<?php get_header(); ?>


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
		<?php if (!empty(get_field('slider_list'))) {
			get_template_part('parts/process', null, ['class' => 'arrow-mobile arrow-2 slide-4']);
		} ?>
		<?php
		if (!empty(get_field('block_descr'))) {
			get_template_part('parts/block', null, ['title' => get_field('block_title'), 'descr' => get_field('block_descr')]);
		} ?>
		<!-- INFO TABLE -->
		<?php if (!empty(get_field('table_descr_body'))): ?>
			<?php
			get_template_part('parts/section-table', null, [
				'title' => get_field('table_descr_title'),
				'descr' => get_field('table_descr_descr'),
				'thead' => get_field('table_descr_head'),
				'tbody' => get_field('table_descr_body'),
				'row_key' => 'table_descr_cell',
			]) ?>
		<?php endif ?>
		<!-- PRICE-TABLE -->
		<?php if (!empty(get_field('table_price_body'))): ?>
			<?php
			get_template_part('parts/section-table', null, [
				'title' => get_field('table_price_title'),
				'descr' => get_field('table_price_descr'),
				'thead' => get_field('table_price_head'),
				'tbody' => get_field('table_price_body'),
				'row_key' => 'table_price_row',
			]) ?>
		<?php endif ?>
		<?php
		get_template_part('parts/process', null, ['title' => get_field('process_title', 'options'), 'list' => get_field('process_list', 'options'), 'descr' => '']); ?>
		<?php
		get_template_part('parts/section-form', null, ['title' => get_field('form_title'), 'text' => get_field('form_descr')]) ?>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>