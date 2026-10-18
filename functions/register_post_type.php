<?php

add_action('init', function () {
	register_post_type('services', array(
		'labels' => array(
			'name' => 'Услуги',
			'singular_name' => 'Услуги',
			'menu_name' => 'Услуги',
			'name_admin_bar' => 'Услуги',
			'add_new' => 'Добавить услугу',
			'add_new_item' => 'Добавить новую услугу',
			'new_item' => 'Новая услугу',
			'edit_item' => 'Редактировать услугу',
			'view_item' => 'Посмотреть услугу',
			'all_items' => 'Все услуги',
			'search_items' => 'Поиск услуг',
			'not_found' => 'Услуги не найдены',
			'not_found_in_trash' => 'Услуги не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'services',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => false, // true
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-hammer',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
	));
});
add_action('init', function () {
	register_post_type('clients', array(
		'labels' => array(
			'name' => 'Клиенты',
			'singular_name' => 'Клиенты',
			'menu_name' => 'Клиенты',
			'name_admin_bar' => 'Клиенты',
			'add_new' => 'Добавить клиента',
			'add_new_item' => 'Добавить нового клиента',
			'new_item' => 'Новый клиент',
			'edit_item' => 'Редактировать клиента',
			'view_item' => 'Посмотреть клиента',
			'all_items' => 'Все клиенты',
			'search_items' => 'Поиск клиентов',
			'not_found' => 'Клиенты не найдены',
			'not_found_in_trash' => 'Клиенты не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'clients',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => false, // true
		'hierarchical' => false,
		'menu_position' => 6,
		'menu_icon' => 'dashicons-groups',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
	));
});
add_action('init', function () {
	register_post_type('reviews', array(
		'labels' => array(
			'name' => 'Отзывы',
			'singular_name' => 'Отзывы',
			'menu_name' => 'Отзывы',
			'name_admin_bar' => 'Отзывы',
			'add_new' => 'Добавить отзыв',
			'add_new_item' => 'Добавить новый отзыв',
			'new_item' => 'Новый отзыв',
			'edit_item' => 'Редактировать отзыв',
			'view_item' => 'Посмотреть отзыв',
			'all_items' => 'Все отзывы',
			'search_items' => 'Поиск клиентов',
			'not_found' => 'Отзывы не найдены',
			'not_found_in_trash' => 'Отзывы не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'reviews',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => false, // true
		'hierarchical' => false,
		'menu_position' => 7,
		'menu_icon' => 'dashicons-id',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
	));
});
add_action('init', function () {
	register_post_type('jobs', array(
		'labels' => array(
			'name' => 'Вакансии',
			'singular_name' => 'Вакансии',
			'menu_name' => 'Вакансии',
			'name_admin_bar' => 'Вакансии',
			'add_new' => 'Добавить вакансию',
			'add_new_item' => 'Добавить новый вакансию',
			'new_item' => 'Новый вакансия',
			'edit_item' => 'Редактировать вакансию',
			'view_item' => 'Посмотреть вакансию',
			'all_items' => 'Все вакансии',
			'search_items' => 'Поиск вакансии',
			'not_found' => 'Вакансии не найдены',
			'not_found_in_trash' => 'Вакансии не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'jobs',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => false, // true
		'hierarchical' => false,
		'menu_position' => 8,
		'menu_icon' => 'dashicons-nametag',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
	));
});

add_action('init', function () {
	register_post_type('news', array(
		'labels' => array(
			'name' => 'Новости',
			'singular_name' => 'Новости',
			'menu_name' => 'Новости',
			'name_admin_bar' => 'Новости',
			'add_new' => 'Добавить новость',
			'add_new_item' => 'Добавить новую новость',
			'new_item' => 'Новые новости',
			'edit_item' => 'Редактировать новость',
			'view_item' => 'Посмотреть новость',
			'all_items' => 'Все новости',
			'search_items' => 'Поиск новостей',
			'not_found' => 'Новости не найдены',
			'not_found_in_trash' => 'Новости не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'news',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => false, // true
		'hierarchical' => false,
		'menu_position' => 8,
		'menu_icon' => 'dashicons-admin-site',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
	));
});

// сколько выводить записей
//add_action('pre_get_posts', function ($query) {
//	if (!is_admin() && $query->is_main_query() && $query->is_post_type_archive('news')) {
//		$query->set('posts_per_page', 18);
//	}
//});

