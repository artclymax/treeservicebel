<?php

add_action('after_setup_theme', function () {
	register_nav_menus(
		array(
			'header-menu' => __('Меню шапки', 'wptest'),
			'footer-menu' => __('Меню подвала', 'wptest'),
		)
	);
});