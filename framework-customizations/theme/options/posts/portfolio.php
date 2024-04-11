<?php
    if (!defined('FW')) {
        die('Forbidden');
    }

    $options = array(
        'plotnikoff_portfolio_box' => array(
            'type' => 'box',
            'title' => __('Дополнительные поля', 'ul'),
            'options' => array(
                'plotnikoff_portfolio_tech' => array(
                    'type'  => 'checkboxes',
                    'value' => '',
                    'label' => __('Технология строительства', 'ul'),
                    'choices' => array(
                        'glue_brus' => __('Клееный брус', 'ul'),
                        'carkas' => __('Каркасный дом', 'ul'),
                        'gasbeton' => __('Газобетон', 'ul'),
                        'brus' => __('Брус', 'ul'),
                        'brick' => __('Кирпич', 'ul'),
                        'monolit' => __('Монолитный каркас', 'ul'),
                    ),
                ),
                'plotnikoff_portfolio_area' => array(
                    'type' => 'text',
                    'label' => __('Общая площадь', 'ul'),
                    'value' => '',
                ),
                // 'plotnikoff_portfolio_area_heat' => array(
                //     'type' => 'text',
                //     'label' => __('Площадь теплого контура', 'ul'),
                //     'value' => '',
                // ),
                // 'plotnikoff_portfolio_floor' => array(
                //     'type'  => 'select',
                //     'value' => '',
                //     'label' => __('Этажность', 'ul'),
                //     'choices' => array(
                //         'none' => __('Не выбрано', 'ul'),
                //         'floor_1' => __('I', 'ul'),
                //         'floor_1_mansandra' => __('I + мансарда', 'ul'),
                //         'floor_2' => __('II', 'ul'),
                //         'floor_2_mansandra' => __('II + мансарда', 'ul'),
                //         'floor_3' => __('III', 'ul'),
                //         'floor_3_mansandra' => __('III + мансарда', 'ul'),
                //     ),
                // ),
                'plotnikoff_portfolio_kp_group' => array(
                    'type' => 'group',
                    'options' => array(
                        'plotnikoff_portfolio_kp_title' => array(
                            'type' => 'text',
                            'label' => __('Коттеджный посёлок, название', 'ul'),
                            'value' => '',
                        ),
                        'plotnikoff_portfolio_kp_location' => array(
                            'type' => 'text',
                            'label' => __('Коттеджный посёлок, ссылка на карту', 'ul'),
                            'value' => '',
                        ),
                    )
                ),
                'plotnikoff_portfolio_rooms_group' => array(
                    'type' => 'group',
                    'options' => array(
                        'plotnikoff_portfolio_livingroom' => array(
                            'type' => 'number',
                            'label' => __('Комнат', 'ul'),
                            'value' => '',
                        ),
                        'plotnikoff_portfolio_bathroom' => array(
                            'type' => 'number',
                            'label' => __('Сан.узлов', 'ul'),
                            'value' => '',
                        ),
                        // 'plotnikoff_portfolio_bedroom' => array(
                        //     'type' => 'number',
                        //     'label' => __('Спальни', 'ul'),
                        //     'value' => '',
                        // ),
                        // 'plotnikoff_portfolio_halls' => array(
                        //     'type' => 'number',
                        //     'label' => __('Холлов', 'ul'),
                        //     'value' => '',
                        // ),
                    )
                ),

                'plotnikoff_portfolio_address' => array(
                    'type' => 'text',
                    'label' => __('Адрес', 'ul'),
                    'value' => '',
                ),
                'plotnikoff_portfolio_house_project' => array(
                    'type' => 'projects',
                    'label' => __('Проект дома', 'ul'),
                    'value' => 'none',
                ),
                'plotnikoff_portfolio_images' => array(
                    'type' => 'multi-upload',
                    'label' => __('Изображения', 'ul'),
                    'images_only' => true,
                ),
            ),
        ),
    );
