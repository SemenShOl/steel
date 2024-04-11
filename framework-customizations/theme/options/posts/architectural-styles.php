
<?php
    if (!defined('FW')) {
        die('Forbidden');
    }

    $options = array(
        'plotnikoff_architectural_styles_box' => array(
            'type' => 'box',
            'title' => __('Дополнительные поля', 'ul'),
            'options' => array(
                'service-formated' => array(
                    'type'  => 'text',
                    'value' => '',
                    'label' => __('Название в винительном падеже с маленькой буквы', 'ul'),
                    'desc' => __('Узнать стоимость на...', 'ul'),
                ),
                // 'services' => array(
                //     'type'  => 'select',
                //     'value' => 'none',
                //     'label' => __('Каталог домов, какой список отображать', 'ul'),
                //     'choices' => array(
                //         'none' => __('Не выбрано', 'ul'),
                //         'carkas' => __('Каркас по типовому решению', 'ul'),
                //         'brus' => __('Брус', 'ul'),
                //         'brick' => __('Кирпич', 'ul'),
                //         'gasbeton' => __('Газобетон', 'ul'),
                //         'profbrus' => __('Профилирован­ный брус', 'ul'),
                //         'monolit' => __('Монолитный каркас', 'ul'),
                //     ),
                // ),
                // 'plotnikoff_portfolio_kp_title' => array(
                //     'type' => 'text',
                //     'label' => __('Коттеджный посёлок', 'ul'),
                //     'value' => '',
                // ),
                // 'plotnikoff_portfolio_tech' => array(
                //     'type'  => 'checkboxes',
                //     'value' => '',
                //     'label' => __('Технология строительства', 'ul'),
                //     'choices' => array(
                //         'carkas' => __('Каркасные дома', 'ul'),
                //         'gasbeton' => __('Газобетон', 'ul'),
                //         'brus' => __('Брус', 'ul'),
                //         'brick' => __('Кирпич', 'ul'),
                //     ),
                // ),

                // 'plotnikoff_architectural_styles_introvideo_group' => array(
                //     'type'  => 'group',
                //     'options'  => array(
                //         'plotnikoff_architectural_styles_introvideo_preview' => array(
                //             'type'  => 'upload',
                //             'value' => '',
                //             'label' => __('Интро видео, превью', 'ul'),
                //         ),
                //         'plotnikoff_architectural_styles_introvideo_link' => array(
                //             'type'  => 'text',
                //             'value' => '',
                //             'label' => __('Интро видео, ссылка на youtube, id видео', 'ul'),
                //             'desc' => __('Например: l-o5jHhvyk8', 'ul'),
                //         ),
                //         // 'plotnikoff_architectural_styles_introvideo_duration' => array(
                //         //     'type'  => 'text',
                //         //     'value' => '0:00',
                //         //     'label' => __('Интро видео, продолжительность', 'ul'),
                //         //     'desc' => __('Например: 0:47', 'ul'),
                //         // ),
                //     ),
                // ),
                // 'plotnikoff_architectural_styles_description_group' => array(
                //     'type'  => 'group',
                //     'options'  => array(
                //         'plotnikoff_architectural_styles_description' => array(
                //             'type' => 'wp-editor',
                //             'label' => __('Технические характеристики, описание', 'ul'),
                //             'value' => '',
                //             'editor_height' => 250,
                //             'wpautop' => true,
                //         ),
                //         'plotnikoff_architectural_styles_params' => array(
                //             'type'  => 'addable-box',
                //             'label' => __('Технические характеристики, параметры', 'ul'),
                //             'template' => '{{- title }}',
                //             'box-options' => array(
                //                 'title' => array(
                //                     'type' => 'text',
                //                     'label' => __('Заголовок', 'ul'),
                //                 ),
                //                 'text' => array(
                //                     'type' => 'wp-editor',
                //                     'label' => __('Описание', 'ul'),
                //                     'value' => '',
                //                     'editor_height' => 300,
                //                     'wpautop' => true,
                //                 ),
                //             ),
                //             'limit' => 0,
                //             'add-button-text' => __('Добавить', 'ul'),
                //             'sortable' => true,
                //         ),
                //     )
                // ),
                // 'plotnikoff_architectural_styles_media_list' => array(
                //     'type'  => 'addable-box',
                //     'label' => __('Медиа', 'ul'),
                //     'template' => '<img src="{{- image.url }}" style="width:120px;height:80px;object-fit:cover;">',
                //     'box-options' => array(
                //         'image' => array(
                //             'type' => 'upload',
                //             'label' => __('Изображение', 'ul'),
                //             'images_only' => true,
                //             'desc' => __('Если видео добавлено, это изображение будет превью видео', 'ul'),
                //         ),
                //         'video_link' => array(
                //             'type' => 'text',
                //             'label' => __('Ссылка на youtube, id видео', 'ul'),
                //             'desc' => __('Например: l-o5jHhvyk8', 'ul'),
                //         ),
                //     ),
                //     'limit' => 0,
                //     'add-button-text' => __('Добавить', 'ul'),
                //     'sortable' => true,
                // ),
                // 'plotnikoff_architectural_styles_catalog_type' => array(
                //     'type'  => 'select',
                //     'value' => 'none',
                //     'label' => __('Каталог домов, какой список отображать', 'ul'),
                //     'choices' => array(
                //         'none' => __('Не выбрано', 'ul'),
                //         'carkas' => __('Каркас по типовому решению', 'ul'),
                //         'brus' => __('Брус', 'ul'),
                //         'brick' => __('Кирпич', 'ul'),
                //         'gasbeton' => __('Газобетон', 'ul'),
                //         'profbrus' => __('Профилирован­ный брус', 'ul'),
                //         'monolit' => __('Монолитный каркас', 'ul'),
                //     ),
                // ),
            ),
        ),
    );
