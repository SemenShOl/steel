<?php
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}

	if (get_post()->post_name == 'home') {
		$options = array(
			'page_home_boxs' => array(
				'title' => __('Параметры страницы', 'ul'),
				'type' => 'box',
				'options' => array(
					'plotnikoff_home_online_broadcast_list' => array(
						'type'  => 'addable-popup',
	                    'value' => array(),
	                    'label'   => __('Прямые трансляция со строительных площадок', 'ul'),
	                    'add-button-text' => __('Добавить', 'ul'),
	                    'sortable' => true,
	                    'template' => '{{- title }}',
	                    'popup-options' => array(
	                    	'title' => array(
	                            'label' => __('Заголовок', 'ul'),
	                            'type'  => 'text',
	                            'value' => '',
	                        ),
	                    	'link' => array(
	                            'label' => __('Ссылка на трансляцию', 'ul'),
	                            'type'  => 'text',
	                            'value' => '',
	                        ),
							'image' => array(
								'type' => 'upload',
								'label' => __('Изображения', 'ul'),
								'images_only' => true,
							),
						)
					)
				)
			)
		);
	} else if (get_post()->post_name == 'faq') {
		$options = array(
			'page_faq_boxs' => array(
				'title' => __('Параметры страницы', 'ul'),
				'type' => 'box',
				'options' => array(
					'plotnikoff_faq_list' => array(
						'type'  => 'addable-popup',
	                    'value' => array(),
	                    'label'   => __('Список вопросов', 'ul'),
	                    'add-button-text' => __('Добавить', 'ul'),
	                    'sortable' => true,
	                    'template' => '{{- title }}',
	                    'popup-options' => array(
	                    	'title' => array(
	                            'label' => __('Вопрос', 'ul'),
	                            'type'  => 'text',
	                            'value' => '',
	                        ),
	                    	'text' => array(
								'type' => 'wp-editor',
								'label' => __('Ответ', 'ul'),
								'value' => '',
								'editor_height' => 250,
								'wpautop' => true,
	                        ),
						)
					)
				)
			)
		);
	} else if (get_post()->post_name == 'gallery') {
		$options = array(
			'page_faq_boxs' => array(
				'title' => __('Параметры страницы', 'ul'),
				'type' => 'box',
				'options' => array(
					'gallery_video' => array(
						'type'  => 'upload',
						'value' => '',
						'label' => __('Видео на странице галлереи', 'ul'),
					),
					'gallery_video_preview' => array(
						'type'  => 'upload',
						'value' => '',
						'label' => __('Превью видео', 'ul'),
						'desc' => __('Cокращенная версия в низком разрешенини', 'ul'),
					)
				)
			)
		);
	} else if (get_post()->post_name == 'o-kompanii') {
		$options = array(
			'page_about_boxs' => array(
				'title' => __('Параметры страницы', 'ul'),
				'type' => 'box',
				'options' => array(
					'achievements' => array(
						'type'  => 'multi-upload',
						'value' => '',
						'label' => __('Картинки для "Наши достижения"', 'ul'),
					)
				)
			)
		);
	} else {
		$options = array();
	}