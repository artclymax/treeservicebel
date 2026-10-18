<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="wrapper">
		<header class="header">
			<div class="container header__container">
				<div class="logo header__logo">
					<?php the_custom_logo(); ?>
				</div>
				<div class="header__info phone-menu">
					<div class="header__address"
						style="--address-icon: url('<?php echo get_template_directory_uri(); ?>/assets/images/icons/pin.svg');">
						<div class="descr-box">
							<?php the_field('opt_contact-address', 'options');?>
						</div>
					</div>
					<?php get_template_part('parts/phone-box', null, ['class' => 'header__phone-box']) ?>
					<?php get_template_part('parts/contact-btn', null, ['class' => 'header__btn']) ?>
				</div>
				<button class="header__phone-btn phone-btn" type="button">
					<svg width="28" height="30" viewBox="0 0 28 30" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M5.63889 12.9917C7.87889 17.7083 11.48 21.5667 15.89 23.9667L19.3122 20.2917C19.74 19.8333 20.3544 19.7 20.8911 19.8833C22.6333 20.5 24.5078 20.8333 26.4444 20.8333C27.3078 20.8333 28 21.575 28 22.5V28.3333C28 29.2583 27.3078 30 26.4444 30C11.8378 30 0 17.3167 0 1.66667C0 0.741667 0.7 0 1.55556 0H7C7.86333 0 8.55556 0.741667 8.55556 1.66667C8.55556 3.74167 8.86667 5.75 9.44222 7.61667C9.61333 8.19167 9.48889 8.85 9.06111 9.30833L5.63889 12.9917Z"
							fill="currentColor" />
					</svg>
				</button>
				<button class="header__burger-btn burger-btn" type="button"><span></span></button>
			</div>
			<div class="container">
				<nav class="header-menu header__menu">
					<?php
					$menu = wp_nav_menu(
						array(
							'theme_location' => 'header-menu',
							'container' => false,
							'menu_class' => 'header-menu__list',
						)
					);
					echo htmlspecialchars($menu); ?>
				</nav>
			</div>
		</header>
		<main class="main">
			<?php
			if (!is_front_page() && !is_404() && !is_page('thanks')): ?>
				<?php get_template_part('parts/hero-page') ?>
				<div class="container section breadcrumbs-section">
					<div class="breadcrumbs">
						<?php if (function_exists('bcn_display')) {
							bcn_display();
						} ?>
					</div>
				</div>
			<?php endif; ?>