<?php get_header(); ?>


<?php if (have_posts()): ?>
	<?php while (have_posts()):
		the_post(); ?>
		<div class="section container descr-box">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
<?php else: ?>
	<p>Записей не найдено.</p>
<?php endif; ?>


<?php get_footer(); ?>