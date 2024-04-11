<?php
    if (!defined('FW')) {
        die('Forbidden');
    }

    $options = array(
        'plotnikoff_testimonials_box' => array(
            'type' => 'box',
            'title' => __('Дополнительные поля', 'ul'),
            'options' => array(
                // 'plotnikoff_testimonials_name' => array(
                //     'type'  => 'text',
                //     'value' => '',
                //     'label' => __('Имя и фамилия', 'ul'),
                // ),
                // 'plotnikoff_testimonials_rating' => array(
                //     'type'  => 'text',
                //     'value' => '',
                //     'label' => __('Рейтинг', 'ul'),
                // ),
                // 'plotnikoff_testimonials_phone' => array(
                //     'type'  => 'text',
                //     'value' => '',
                //     'label' => __('Телефон', 'ul'),
                // ),
                // 'plotnikoff_testimonials_address' => array(
                //     'type'  => 'text',
                //     'value' => '',
                //     'label' => __('Адрес', 'ul'),
                // ),
                // 'plotnikoff_testimonials_home_build' => array(
                //     'type'  => 'text',
                //     'value' => '',
                //     'label' => __('Какой дом был построен', 'ul'),
                // ),
                'plotnikoff_testimonials_favorite' => array(
                    'type'  => 'switch',
                    'value' => '',
                    'label' => __('Показывать в слайдре', 'ul'),
                    'left-choice' => array(
                        'value' => 'no',
                        'label' => __('Нет', 'ul'),
                    ),
                    'right-choice' => array(
                        'value' => 'yes',
                        'label' => __('Да', 'ul'),
                    ),
                ),
                'plotnikoff_testimonials_video_group' => array(
                    'type'  => 'group',
                    'options'  => array(
                        'plotnikoff_testimonials_video_preview' => array(
                            'type'  => 'upload',
                            'value' => '',
                            'label' => __('Картинка', 'ul'),
                        )
                        // 'plotnikoff_testimonials_video_poster' => array(
                        //     'type'  => 'upload',
                        //     'value' => '',
                        //     'label' => __('Видео отзыв, постер', 'ul'),
                        // ),
                        // 'plotnikoff_testimonials_video_link' => array(
                        //     'type'  => 'text',
                        //     'value' => '',
                        //     'label' => __('Видео отзыв, ссылка на YouTube', 'ul'),
                            // 'desc' => __('Например: l-o5jHhvyk8', 'ul'),
                        // ),
                    ),
                ),
                
            ),
        ),
    );
