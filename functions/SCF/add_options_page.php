<?php
// ACF - вкладки
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Общие настройки',
		'menu_title' => 'Общие настройки',
		'menu_slug' => 'theme_settings',
		//'menu_position' => 5,
		//'menu_icon' => 'dashicons-portfolio',
	));
}
