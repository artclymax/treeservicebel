</main>
<footer class="footer section">
	<div class="container footer__container">
		<div class="logo footer__logo">
			<?php the_custom_logo(); ?>
		</div>
		<nav class="footer-menu footer__menu">
			<?php
			$menu = wp_nav_menu(
				array(
					'theme_location' => 'footer-menu',
					'container' => false,
					'menu_class' => 'footer-menu__list',
				)
			);
			echo htmlspecialchars($menu); ?>
		</nav>
		<?php get_template_part('parts/phone-box', null, ['class' => 'footer__phone-box']) ?>
		<div class="footer__info descr-box">
			<?php the_field('opt_footer_contacts_descr', 'options') ?>
		</div>
		<?php get_template_part('parts/contact-btn', null, ['class' => 'footer__btn']) ?>
		<div class="footer__copy-box">
			<small class="footer__copy-small">&copy; <span>
					<?php the_field('opt_footer_contacts_copy', 'options') ?></span>, <?php echo date('Y'); ?></small>
			<ul class="footer__copy-links">
				<?php
				$list = get_field('opt_footer_links', 'options');

				if (!empty($list)) {
					foreach ($list as $item) { ?>
						<li><a href="<?php echo $item['link']?>"><?php echo $item['text']?></a></li>
					<?php }
				}
				?>
			</ul>
		</div>
	</div>
</footer>
<div class="modal" id="form-modal" data-modal>
	<div class="modal__box" data-modal-box
		style="background-image: url('<?php the_field('opt_modal_image', 'options') ?>');">
		<button class="modal__close-btn" data-modal-close aria-label="Закрыть">
			<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M16.875 1.96231L14.9127 0L8.4375 6.47519L1.96231 0L0 1.96231L6.47519 8.4375L0 14.9127L1.96231 16.875L8.4375 10.3998L14.9127 16.875L16.875 14.9127L10.3998 8.4375L16.875 1.96231Z"
					fill="currentColor" />
			</svg>
		</button>
		<div class="form-modal">
			<div class="form-modal__wrapper">
				<h3 class="form-modal__title title-3">
					<?php the_field('opt_modal_title', 'options') ?>
				</h3>
				<div class="hero-form form-modal__form">
					<?php echo do_shortcode('[contact-form-7 id="3234005" title="Контактная форма 1"]') ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_template_part('parts/cookie-banner') ?>
<?php wp_footer(); ?>
</body>

</html>