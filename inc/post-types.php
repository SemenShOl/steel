<?php
    if (! defined('ABSPATH')) {
        die('Direct access forbidden.');
    }

    /**
     * Theme’s post types
     */





    // Post Type: Проекты домов
	$homesLabels = array(
		'name' => __( 'Проекты домов', 'ul' ),
		'singular_name' => __( 'Проект дома', 'ul' ),
		'menu_name' => __( 'Проекты домов', 'ul' ),
		'all_items' => __( 'Все проекты домов', 'ul' ),
		'add_new' => __( 'Добавить', 'ul' ),
		'add_new_item' => __( 'Добавить', 'ul' ),
		'edit_item' => __( 'Изменить', 'ul' ),
		'new_item' => __( 'Добавить', 'ul' ),
		'view_item' => __( 'Посмотреть', 'ul' ),
		'view_items' => __( 'Посмотреть все', 'ul' ),
	);
	$homesArgs = array(
		'label' => __( 'Проекты домов', 'ul' ),
		'labels' => $homesLabels,
		'description' => '',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'delete_with_user' => false,
		'show_in_rest' => true,
		'rest_base' => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'has_archive' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		// 'hierarchical' => true,
		'rewrite' => array( 'slug' => 'proekty', 'with_front' => true ),
		'query_var' => true,
		'menu_icon' => 'dashicons-admin-multisite',
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'  ),
		// 'taxonomies' => array( 'category' ),
	);
	register_post_type( 'homes', $homesArgs );
   
	
	// Post Type: Наши объекты
	$objectsLabels = array(
		'name' => __( 'Наши объекты', 'ul' ),
		'singular_name' => __( 'Объект', 'ul' ),
		'menu_name' => __( 'Наши объекты', 'ul' ),
		'all_items' => __( 'Все объекты', 'ul' ),
		'add_new' => __( 'Добавить', 'ul' ),
		'add_new_item' => __( 'Добавить', 'ul' ),
		'edit_item' => __( 'Изменить', 'ul' ),
		'new_item' => __( 'Добавить', 'ul' ),
		'view_item' => __( 'Посмотреть', 'ul' ),
		'view_items' => __( 'Посмотреть все', 'ul' ),
	);
	$objectsArgs = array(
		'label' => __( 'Наши объекты', 'ul' ),
		'labels' => $objectsLabels,
		'description' => '',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'delete_with_user' => false,
		'show_in_rest' => true,
		'rest_base' => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'has_archive' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		// 'hierarchical' => true,
		'rewrite' => array( 'slug' => 'portfolio', 'with_front' => true ),
		'query_var' => true,
		'menu_icon' => 'dashicons-admin-multisite',
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'  ),
		// 'taxonomies' => array( 'category' ),
	);
	register_post_type( 'portfolio', $objectsArgs );


	// Post Type: Технологии производства
	$technologiesLabels = array(
		'name' => __( 'Технологии производства', 'ul' ),
		'singular_name' => __( 'Технология', 'ul' ),
		'menu_name' => __( 'Технологии производства', 'ul' ),
		'all_items' => __( 'Все технологии', 'ul' ),
		'add_new' => __( 'Добавить', 'ul' ),
		'add_new_item' => __( 'Добавить', 'ul' ),
		'edit_item' => __( 'Изменить', 'ul' ),
		'new_item' => __( 'Добавить', 'ul' ),
		'view_item' => __( 'Посмотреть', 'ul' ),
		'view_items' => __( 'Посмотреть все', 'ul' ),
	);
	$technologiesArgs = array(
		'label' => __( 'Технологии производства', 'ul' ),
		'labels' => $technologiesLabels,
		'description' => '',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'delete_with_user' => false,
		'show_in_rest' => true,
		'rest_base' => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'has_archive' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		// 'hierarchical' => true,
		'rewrite' => array( 'slug' => 'technologies', 'with_front' => true ),
		'query_var' => true,
		'menu_icon' => 'dashicons-layout',
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'  ),
		// 'taxonomies' => array( 'category' ),
	);
	register_post_type( 'technologies', $technologiesArgs );


	// Post Type: Архитектурные стили
	$architecturalStylesLabels = array(
		'name' => __( 'Услуги', 'ul' ),
		'singular_name' => __( 'Услуга', 'ul' ),
		'menu_name' => __( 'Услуги', 'ul' ),
		'all_items' => __( 'Все услуги', 'ul' ),
		'add_new' => __( 'Добавить', 'ul' ),
		'add_new_item' => __( 'Добавить', 'ul' ),
		'edit_item' => __( 'Изменить', 'ul' ),
		'new_item' => __( 'Добавить', 'ul' ),
		'view_item' => __( 'Посмотреть', 'ul' ),
		'view_items' => __( 'Посмотреть все', 'ul' ),
	);
	$architecturalStylesArgs = array(
		'label' => __( 'Услуги', 'ul' ),
		'labels' => $architecturalStylesLabels,
		'description' => '',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'delete_with_user' => false,
		'show_in_rest' => true,
		'rest_base' => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'has_archive' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		// 'hierarchical' => true,
		'rewrite' => array( 'slug' => 'architectural-styles', 'with_front' => true ),
		'query_var' => true,
		'menu_icon' => 'dashicons-layout',
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'  ),
		// 'taxonomies' => array( 'category' ),
	);
	register_post_type( 'architectural-styles', $architecturalStylesArgs );

		// Post Type: Производство
		$architecturalStylesLabels = array(
			'name' => __( 'Производство', 'ul' ),
			'singular_name' => __( 'Производство', 'ul' ),
			'menu_name' => __( 'Производство', 'ul' ),
			'all_items' => __( 'Всё производство', 'ul' ),
			'add_new' => __( 'Добавить', 'ul' ),
			'add_new_item' => __( 'Добавить', 'ul' ),
			'edit_item' => __( 'Изменить', 'ul' ),
			'new_item' => __( 'Добавить', 'ul' ),
			'view_item' => __( 'Посмотреть', 'ul' ),
			'view_items' => __( 'Посмотреть все', 'ul' ),
		);
		$architecturalStylesArgs = array(
			'label' => __( 'Производство', 'ul' ),
			'labels' => $architecturalStylesLabels,
			'description' => '',
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'delete_with_user' => false,
			'show_in_rest' => true,
			'rest_base' => '',
			'rest_controller_class' => 'WP_REST_Posts_Controller',
			'has_archive' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'exclude_from_search' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			// 'hierarchical' => true,
			'rewrite' => array( 'slug' => 'production', 'with_front' => true ),
			'query_var' => true,
			'menu_icon' => 'dashicons-layout',
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'  ),
			// 'taxonomies' => array( 'category' ),
		);
		register_post_type( 'production', $architecturalStylesArgs );
	

		// Post Type: Специальные предложения
		$specialsLabels = array(
			'name' => __( 'Специальные предложения', 'ul' ),
			'singular_name' => __( 'Специальное предложение', 'ul' ),
			'menu_name' => __( 'Специальные предложения', 'ul' ),
			'all_items' => __( 'Все специальные предложения', 'ul' ),
			'add_new' => __( 'Добавить', 'ul' ),
			'add_new_item' => __( 'Добавить', 'ul' ),
			'edit_item' => __( 'Изменить', 'ul' ),
			'new_item' => __( 'Добавить', 'ul' ),
			'view_item' => __( 'Посмотреть', 'ul' ),
			'view_items' => __( 'Посмотреть все', 'ul' ),
		);
		$specialsArgs = array(
			'label' => __( 'Специальные предложения', 'ul' ),
			'labels' => $specialsLabels,
			'description' => '',
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'delete_with_user' => false,
			'show_in_rest' => true,
			'rest_base' => '',
			'rest_controller_class' => 'WP_REST_Posts_Controller',
			'has_archive' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'exclude_from_search' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			// 'hierarchical' => true,
			'rewrite' => array( 'slug' => 'special', 'with_front' => true ),
			'query_var' => true,
			'menu_icon' => 'dashicons-layout',
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'  ),
			// 'taxonomies' => array( 'category' ),
		);
		register_post_type( 'special', $specialsArgs );

	// Post Type: Отзывы
	$testimonialsLabels = array(
		'name' => __( 'Галлерея', 'ul' ),
		'singular_name' => __( 'Галлерея', 'ul' ),
		'menu_name' => __( 'Галлерея', 'ul' ),
		'all_items' => __( 'Галлерея', 'ul' ),
		'add_new' => __( 'Добавить', 'ul' ),
		'add_new_item' => __( 'Добавить', 'ul' ),
		'edit_item' => __( 'Изменить', 'ul' ),
		'new_item' => __( 'Добавить', 'ul' ),
		'view_item' => __( 'Посмотреть', 'ul' ),
		'view_items' => __( 'Посмотреть все', 'ul' ),
	);
	$testimonialsArgs = array(
		'label' => __( 'Отзывы', 'ul' ),
		'labels' => $testimonialsLabels,
		'description' => '',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'delete_with_user' => false,
		'show_in_rest' => true,
		'rest_base' => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'has_archive' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		// 'hierarchical' => true,
		'rewrite' => array( 'slug' => 'testimonials', 'with_front' => true ),
		'query_var' => true,
		'menu_icon' => 'dashicons-format-status',
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'  ),
		// 'taxonomies' => array( 'category' ),
	);
	register_post_type( 'testimonials', $testimonialsArgs );





	// Post Type: Отзывы
	$testimonialsLabels = array(
		'name' => __( 'Каталог', 'ul' ),
		'singular_name' => __( 'Каталог', 'ul' ),
		'menu_name' => __( 'Каталог', 'ul' ),
		'all_items' => __( 'Каталог', 'ul' ),
		'add_new' => __( 'Добавить', 'ul' ),
		'add_new_item' => __( 'Добавить', 'ul' ),
		'edit_item' => __( 'Изменить', 'ul' ),
		'new_item' => __( 'Добавить', 'ul' ),
		'view_item' => __( 'Посмотреть', 'ul' ),
		'view_items' => __( 'Посмотреть все', 'ul' ),
	);
	$catalogArgs = array(
		'label' => __( 'Каталог', 'ul' ),
		'labels' => $catalogLabels,
		'description' => '',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'delete_with_user' => false,
		'show_in_rest' => true,
		'rest_base' => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'has_archive' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		// 'hierarchical' => true,
		'rewrite' => array( 'slug' => 'catalog', 'with_front' => true ),
		'query_var' => true,
		'menu_icon' => 'dashicons-layout',
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'  ),
		// 'taxonomies' => array( 'category' ),
	);
	register_post_type( 'catalog', $catalogArgs );







