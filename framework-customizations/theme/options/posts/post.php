<?php
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}

    $options = array(
        'post_boxs' => array(
            'title' => __('Параметры записи', 'ul'),
            'type' => 'box',
            'options' => array(
                'plotnikoff_post_video_group' => array(
                    'type' => 'group',
                    'options' => array(
                        // 'plotnikoff_post_video_bg' => array(
                        //     'type' => 'upload',
                        //     'label' => __('Основное видео - Видеофон', 'ul'),
                        // ),
                        'plotnikoff_post_video_poster' => array(
                            'type' => 'upload',
                            'label' => __('Основное видео - Изображение фона', 'ul'),
                            'images_only' => true,
                        ),
                        'plotnikoff_post_video_url' => array(
                            'type' => 'text',
                            'label' => __('Основное видео - Ссылка на YouTube', 'ul'),
                            'value' => '',
                        ),
                    ),
                ),
                'plotnikoff_post_sidebar_group' => array(
                    'type' => 'group',
                    'options' => array(
                        'plotnikoff_post_sidebar_title' => array(
                            'type' => 'text',
                            'label' => __('Сайдбар - Заголовок', 'ul'),
                            'value' => '',
                        ),
                        'plotnikoff_post_sidebar_subtitle' => array(
                            'type' => 'text',
                            'label' => __('Сайдбар - Подзаголовок', 'ul'),
                            'value' => '',
                        ),
                        'plotnikoff_post_sidebar_link' => array(
                            'type' => 'text',
                            'label' => __('Сайдбар - Ссылка на кнопке', 'ul'),
                            'value' => '',
                        ),
                        'plotnikoff_post_sidebar_modal_open' => array(
                            'type' => 'text',
                            'label' => __('Сайдбар - Открыть модальное окно', 'ul'),
                            'value' => '',
                            'desc' => __('ID окна, например: modalCallback', 'ul'),
                        ),
                        'plotnikoff_post_sidebar_btn_text' => array(
                            'type' => 'text',
                            'label' => __('Сайдбар - Текст кнопки', 'ul'),
                            'value' => '',
                        ),
                        'plotnikoff_post_sidebar_bg' => array(
                            'type' => 'upload',
                            'label' => __('Сайдбар - Фоновая картинка', 'ul'),
                            'images_only' => true,
                        ),
                    )
                ),
                'plotnikoff_post_author_group' => array(
                    'type' => 'group',
                    'options' => array(
                        // 'plotnikoff_post_video_bg' => array(
                        //     'type' => 'upload',
                        //     'label' => __('Основное видео - Видеофон', 'ul'),
                        // ),
                        'plotnikoff_post_author_name' => array(
                            'type' => 'text',
                            'label' => __('Автор - Имя', 'ul'),
                            'value' => '',
                        ),
                        'plotnikoff_post_author_position' => array(
                            'type' => 'text',
                            'label' => __('Автор - Должность', 'ul'),
                            'value' => '', 
                        ),
                        'plotnikoff_post_author_img' => array(
                            'type' => 'upload',
                            'label' => __('Автор - Фото', 'ul'),
                            'images_only' => true,
                        ),
                    ),
                ),
            )
        )
    );