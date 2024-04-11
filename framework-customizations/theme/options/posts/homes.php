<?php
    if (!defined('FW')) {
        die('Forbidden');
    }

    $options = array(
        'plotnikoff_homes_box' => array(
            'type' => 'box',
            'title' => __('Дополнительные поля', 'ul'),
            'options' => array(
                'plotnikoff_homes_group_items_group' => array(
                    'type' => 'group',
                    'options' => array(
                        'plotnikoff_homes_group_items_status' => array(
                            'type'  => 'switch',
                            'label' => __('Группа проектов', 'ul'),
                            'value' => 'off',
                            'left-choice' => array(
                                'value' => 'off',
                                'label' => __('Выкл.', 'ul'),
                            ),
                            'right-choice' => array(
                                'value' => 'on',
                                'label' => __('Вкл.', 'ul'),
                            ),
                        ),
                        'plotnikoff_homes_group_items_title' => array(
                            'type'  => 'text',
                            'label' => __('Название группы проектов', 'ul'),
                            'value' => '',
                        ),
                    )
                ),
                'plotnikoff_homes_special' => array(
                    'type'  => 'switch',
                    'label' => __('Спец. предложение', 'ul'),
                    'value' => 'off',
                    'left-choice' => array(
                        'value' => 'off',
                        'label' => __('Выкл.', 'ul'),
                    ),
                    'right-choice' => array(
                        'value' => 'on',
                        'label' => __('Вкл.', 'ul'),
                    ),
                ),
                'plotnikoff_homes_group_1' => array(
                    'type' => 'group',
                    'options' => array(
                        'plotnikoff_homes_brus' => array(
                            'type'  => 'select',
                            'value' => 'brus',
                            'label' => __('Материал стен по типовому проекту', 'ul'),
                            'choices' => array(
                                'carkas' => __('Каркас', 'ul'),
                                'carkasbrus' => __('Каркас + брус', 'ul'),
                                'brus' => __('Брус', 'ul'),
                                'brick' => __('Кирпич', 'ul'),
                                'gasbeton' => __('Газобетон', 'ul'),
                                'profbrus' => __('Профилирован­ный брус', 'ul'),
                                'monolit' => __('Монолитный каркас', 'ul'),
                            ),
                            'fw-storage' => array(
                                'type' => 'post-meta',
                                'post-meta' => 'fw_option:plotnikoff_homes_brus',
                            ),
                        ),
                        'plotnikoff_homes_area_glob' => array(
                            'type'  => 'text',
                            'value' => '',
                            'label' => __('Общая площадь', 'ul'),
                            'desc'  => __('Укажите в м2', 'ul'),
                            'fw-storage' => array(
                                'type' => 'post-meta',
                                'post-meta' => 'fw_option:plotnikoff_homes_area_glob',
                            ),
                        ),
                        // 'plotnikoff_homes_area_heat' => array(
                        //     'type'  => 'text',
                        //     'value' => '',
                        //     'label' => __('Площадь теплого контура', 'ul'),
                        //     'desc'  => __('Укажите в м2', 'ul'),
                        //     'fw-storage' => array(
                        //         'type' => 'post-meta',
                        //         'post-meta' => 'fw_option:plotnikoff_homes_area_heat',
                        //     ),
                        // ),
                        // 'plotnikoff_homes_floor' => array(
                        //     'type'  => 'select',
                        //     'value' => 'floor-1',
                        //     'label' => __('Количество этажей', 'ul'),
                        //     'choices' => array(
                        //         'floor-1' => __('I', 'ul'),
                        //         'floor-2' => __('II', 'ul'),
                        //         'floor-2-mansarda' => __('II + мансарда', 'ul'),
                        //     ),
                        //     'fw-storage' => array(
                        //         'type' => 'post-meta',
                        //         'post-meta' => 'fw_option:plotnikoff_homes_floor',
                        //     ),
                        // ),
                        'plotnikoff_homes_rooms' => array(
                            'type'  => 'number',
                            'value' => '',
                            'label' => __('Количество комнат', 'ul'),
                        ),
                        // 'plotnikoff_homes_bedroom' => array(
                        //     'type'  => 'number',
                        //     'value' => '',
                        //     'label' => __('Количество спален', 'ul'),
                        // ),
                        'plotnikoff_homes_bathroom' => array(
                            'type'  => 'number',
                            'value' => '',
                            'label' => __('Количество сан. узлов', 'ul'),
                        ),
                        // 'plotnikoff_homes_hall' => array(
                        //     'type'  => 'number',
                        //     'value' => '',
                        //     'label' => __('Количество холлов', 'ul'),
                        // ),
                    )
                ),

                'plotnikoff_homes_presentation_file' => array(
                    'type' => 'upload',
                    'label' => __('Презентация проекта', 'ul'),
                    'value' => '',
                ),

                'plotnikoff_homes_group_2' => array(
                    'type' => 'group',
                    'options' => array(
                        'plotnikoff_homes_terassa' => array(
                            'type'  => 'switch',
                            'label' => __('Терраса', 'ul'),
                            'value' => 'off',
                            'left-choice' => array(
                                'value' => 'off',
                                'label' => __('Нет', 'ul'),
                            ),
                            'right-choice' => array(
                                'value' => 'on',
                                'label' => __('Есть', 'ul'),
                            ),
                        ),
                        'plotnikoff_homes_tech' => array(
                            'type'  => 'switch',
                            'label' => __('Мастерская', 'ul'),
                            'value' => 'off',
                            'left-choice' => array(
                                'value' => 'off',
                                'label' => __('Нет', 'ul'),
                            ),
                            'right-choice' => array(
                                'value' => 'on',
                                'label' => __('Есть', 'ul'),
                            ),
                        ),
                        'plotnikoff_homes_crawlspace' => array(
                            'type'  => 'switch',
                            'label' => __('Антресоль', 'ul'),
                            'value' => 'off',
                            'left-choice' => array(
                                'value' => 'off',
                                'label' => __('Нет', 'ul'),
                            ),
                            'right-choice' => array(
                                'value' => 'on',
                                'label' => __('Есть', 'ul'),
                            ),
                        ),
                        'plotnikoff_homes_wardrobe' => array(
                            'type'  => 'switch',
                            'label' => __('Гардеробная', 'ul'),
                            'value' => 'off',
                            'left-choice' => array(
                                'value' => 'off',
                                'label' => __('Нет', 'ul'),
                            ),
                            'right-choice' => array(
                                'value' => 'on',
                                'label' => __('Есть', 'ul'),
                            ),
                        ),
                        'plotnikoff_homes_garage' => array(
                            'type'  => 'switch',
                            'label' => __('Гараж', 'ul'),
                            'value' => 'off',
                            'left-choice' => array(
                                'value' => 'off',
                                'label' => __('Нет', 'ul'),
                            ),
                            'right-choice' => array(
                                'value' => 'on',
                                'label' => __('Есть', 'ul'),
                            ),
                        ),
                        'plotnikoff_homes_swimming' => array(
                            'type'  => 'switch',
                            'label' => __('Бассейн', 'ul'),
                            'value' => 'off',
                            'left-choice' => array(
                                'value' => 'off',
                                'label' => __('Нет', 'ul'),
                            ),
                            'right-choice' => array(
                                'value' => 'on',
                                'label' => __('Есть', 'ul'),
                            ),
                        ),
                        'plotnikoff_homes_sauna' => array(
                            'type'  => 'switch',
                            'label' => __('Сауна', 'ul'),
                            'value' => 'off',
                            'left-choice' => array(
                                'value' => 'off',
                                'label' => __('Нет', 'ul'),
                            ),
                            'right-choice' => array(
                                'value' => 'on',
                                'label' => __('Есть', 'ul'),
                            ),
                        ),
                        
                    )
                ),
                'plotnikoff_homes_price' => array(
                    'type'  => 'group',
                    'options'  => array(
                        'plotnikoff_homes_price_basic' => array(
                            'type'  => 'text',
                            'value' => '',
                            'label' => __('Цена - Базовая комплектация', 'ul'),
                            'desc'  => __('Например: 2300000', 'ul'),
                            'fw-storage' => array(
                                'type' => 'post-meta',
                                'post-meta' => 'fw_option:plotnikoff_homes_price_basic',
                            ),
                        ),
                        'plotnikoff_homes_price_hot_kontur' => array(
                            'type'  => 'text',
                            'value' => '',
                            'label' => __('Цена - Тепловой контур', 'ul'),
                            'desc'  => __('Например: 2600000', 'ul'),
                        ),
                        'plotnikoff_homes_price_pod_otdelky' => array(
                            'type'  => 'text',
                            'value' => '',
                            'label' => __('Цена - Под отделку', 'ul'),
                            'desc'  => __('Например: 2900000', 'ul'),
                        ),
                        'plotnikoff_homes_price_stock' => array(
                            'type'  => 'text',
                            'value' => '',
                            'label' => __('Цена - Под ключ', 'ul'),
                            'desc'  => __('Например: 2300000', 'ul'),
                        ),
                    ),
                ),

                'plotnikoff_homes_description_group' => array(
                    'type'  => 'group',
                    'options'  => array(
                        'plotnikoff_homes_description_video_preview' => array(
                            'type'  => 'upload',
                            'value' => '',
                            'label' => __('Описание проекта - Видео, превью', 'ul'),
                        ),
                        'plotnikoff_homes_description_video_link' => array(
                            'type'  => 'text',
                            'value' => '',
                            'label' => __('Описание проекта - Видео, ссылка на youtube', 'ul'),
                        ),
                    ),
                ),
                'plotnikoff_homes_images' => array(
                    'type'  => 'addable-box',
                    'label' => __('Изображения - Основные', 'ul'),
                    'template' => '<img src="{{- image.url }}" style="width:120px;height:80px;object-fit:cover;">',
                    'box-options' => array(
                        'image' => array(
                            'type' => 'upload',
                            'label' => __('Изображение', 'ul'),
                        ),
                    ),
                    'value' => array(
                        array(
                            'image' => '',
                        ),
                    ),
                    'limit' => 0,
                    'add-button-text' => __('Добавить', 'ul'),
                    'sortable' => true,
                ),
                'plotnikoff_homes_images_layouts' => array(
                    'type'  => 'addable-box',
                    'label' => __('Изображения - Планировки', 'ul'),
                    'template' => '<img src="{{- image.url }}" style="width:120px;height:80px;object-fit:cover;">',
                    'box-options' => array(
                        'image' => array(
                            'type' => 'upload',
                            'label' => __('Изображение', 'ul'),
                            'images_only' => true,
                        ),
                        'area' => array(
                            'type' => 'text',
                            'label' => __('Площадь, м2', 'ul'),
                            'value' => '',
                        ),
                        'floor' => array(
                            'type'  => 'select',
                            'value' => 'none',
                            'label' => __('Этаж', 'ul'),
                            'choices' => array(
                                'none' => __('Не выбрано', 'ul'),
                                'floor_1' => __('1 этаж', 'ul'),
                                'floor_2' => __('2 этаж', 'ul'),
                                'floor_3' => __('2 этаж', 'ul'),
                                'floor_mansard' => __('Мансарда', 'ul'),
                            ),
                        ),
                    ),
                    'limit' => 0,
                    'add-button-text' => __('Добавить', 'ul'),
                    'sortable' => true,
                ),
                // 'plotnikoff_homes_images_fasad' => array(
                //     'type'  => 'addable-box',
                //     'label' => __('Изображения - Фасады', 'ul'),
                //     'template' => '<img src="{{- image.url }}" style="width:120px;height:80px;object-fit:cover;">',
                //     'box-options' => array(
                //         'image' => array(
                //             'type' => 'upload',
                //             'label' => __('Изображение', 'ul'),
                //         ),
                //     ),
                //     'limit' => 0,
                //     'add-button-text' => __('Добавить', 'ul'),
                //     'sortable' => true,
                // ),
                // 'plotnikoff_homes_images_razrez' => array(
                //     'type'  => 'addable-box',
                //     'label' => __('Изображения - В разрезе', 'ul'),
                //     'template' => '<img src="{{- image.url }}" style="width:120px;height:80px;object-fit:cover;">',
                //     'box-options' => array(
                //         'image' => array(
                //             'type' => 'upload',
                //             'label' => __('Изображение', 'ul'),
                //         ),
                //     ),
                //     'limit' => 0,
                //     'add-button-text' => __('Добавить', 'ul'),
                //     'sortable' => true,
                // ),
            ),
        ),
    );
