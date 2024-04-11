<?php
    if (!defined('ABSPATH')) {
        die('Direct access forbidden.');
    }

    /**
     * Theme’s ajax
     */

    function sendEmail ($postArr) {
        if (isset($_POST)) {
            if (count(fw_get_db_settings_option('ul_general_email_list')) > 0) {
                $recipients = fw_get_db_settings_option('ul_general_email_list');
            } else {
                $recipients = array(get_option('admin_email'));
            }

            $headers = 'From: '.get_bloginfo('name').' <' . $recipients[0] . '>' . "\r\n";
            $headers .= 'MIME-Version: 1.0' . "\r\n";
            $headers .= "Content-Type: text/html;\r\n";

            $subject = __('Сообщение с сайта -', 'ul' ) . ' ' . get_bloginfo('name');
            $message_body = '<h2>'.$subject.'</h2>';

            if(!empty($_POST['name'])) { $message_body .= "<p><b>Имя : </b>".$_POST['name']."</p>"; }
            if(!empty($_POST['phone'])) { $message_body .= "<p><b>Телефон : </b>".$_POST['phone']."</p>"; }
            if(!empty($_POST['email'])) { $message_body .= "<p><b>E-mail : </b>".$_POST['email']."</p>"; }
            if(!empty($_POST['message'])) { $message_body .= "<p><b>Сообщение : </b>".$_POST['message']."</p>"; }
            if(!empty($_POST['order'])) { $message_body .= "<p><b>Заказ : </b>".$_POST['order']."</p>"; }
            if(!empty($_POST['form_name'])) { $message_body .= "<p><b>Форма : </b>".$_POST['form_name']."</p>"; }

            $mail = wp_mail($recipients, $subject, $message_body, $headers);

            echo $mail;
        } 
    }


    function sendRoistat ($postArr) {
        if (isset($postArr)) {
            $roistatData = array(
                'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : 'nocookie',
                'key'     => 'NzM5OWZiZDU2MGU3ZDI3Y2IyODIwMWUzZjQyMWYzM2M6MjQyODAw',
                'title'   => 'Заявка с сайта mtk-metall.ru',
                'sync'    => '0', 
                'is_need_check_order_in_processing' => '1', // Включение проверки заявок на дубли
                'is_need_check_order_in_processing_append' => '1', // Если создана дублирующая заявка, в нее будет добавлен комментарий об этом
                'is_skip_sending' => '0', // Не отправлять заявку в CRM.
            );


            if(isset($_POST['name'])) {
                $roistatData['name'] = $_POST['name'];
            }
            if(isset($_POST['phone'])) {
                $roistatData['phone'] = $_POST['phone'];
            }
            if(isset($_POST['email'])) {
                $roistatData['email'] = $_POST['email'];
            }
            if(isset($_POST['form_name'])) {
                $roistatData['comment'] = 'Форма - ' . $_POST['form_name'];
            }

            $roistatResults = file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));

            var_dump($roistatResults);
        }
    }


    function ul_send_message_callback () {
        // Roistat
        sendRoistat($_POST);

        // Send on email
        sendEmail($_POST);

        wp_die();
    }

    // Send message to email
    add_action( 'wp_ajax_send_message', 'ul_send_message_callback' ); // For logged in users
    add_action( 'wp_ajax_nopriv_send_message', 'ul_send_message_callback' ); // For anonymous users


    // Подгрузка проектов домов
    function ul_load_projects_posts_callback () {
        if (isset($_POST)) {
            $args = unserialize( stripslashes( $_POST['query'] ) );
            $args['paged'] = $_POST['page'] + 1; // следующая страница
            $args['post_status'] = 'publish';

            $posts = query_posts( $args );

            if( count($posts) > 0 ) {
                foreach ($posts as $key => $post) : 
                    // get_template_part( 'template-parts/project-list-item', null, array(
                    //     'id' => $post->ID,
                    //     'image-load-type' => 'src',
                    // ));

                    $isHidden = ($key > 5) ? true : false;
                    get_template_part('template-parts/catalog-card', null, array(
                        'id' => $post->ID, 
                        'img-src' => 'src',
                        'hidden' => $isHidden
                    ));

                endforeach;
            }
        }
        
        wp_die();
    }
    add_action( 'wp_ajax_load_projects_posts', 'ul_load_projects_posts_callback' ); // For logged in users
    add_action( 'wp_ajax_nopriv_load_projects_posts', 'ul_load_projects_posts_callback' ); // For anonymous users


    // Подгрузка домов из портфолио
    function ul_load_portfolio_posts_callback () {
        if (isset($_POST)) {
            if ($_POST['load_type'] == 'more') {
                $args = unserialize( stripslashes( $_POST['query'] ) );
                $args['paged'] = $_POST['page'] + 1; // следующая страница
                $args['post_status'] = 'publish';
                $posts = query_posts( $args );

                if( count($posts) > 0 ) {
                    foreach ($posts as $key => $post) : 
                        get_template_part( 'template-parts/portfolio-list-item', null, array(
                            'id' => $post->ID,
                            'image-load-type' => 'src',
                        ));
                    endforeach;
                }
            } else {
                $queryPortfolio = new WP_Query(
                    array(
                        'post_type' => 'portfolio',
                        'posts_per_page' => -1,
                        'order' => 'ASC', 
                        'orderby' => 'title',
                    )
                );

                $postArr = [];
                if ($queryPortfolio->posts) {
                    if ($_POST['load_type'] != NULL) {
                        foreach ($queryPortfolio->posts as $key => $post) : 
                            $text = array();
                            foreach (fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_tech') as $key => $value) {
                                array_push($text, $key);
                            }

                            foreach ($_POST['load_type'] as $key => $type) {
                                if (in_array($type, $text)) {
                                    array_push($postArr, $post);
                                }
                            }
                        endforeach;
                    } else {
                        $postArr = $queryPortfolio->posts;
                    }
                }

                if (count($postArr) > 0) {
                    foreach (array_unique($postArr, SORT_REGULAR) as $key => $post) : 
                        get_template_part( 'template-parts/portfolio-list-item', null, array(
                            'id' => $post->ID,
                            'image-load-type' => 'src',
                        ));
                    endforeach;
                } else {
                    echo '<div class="not-found"><p>Объекты не найдены :(</p></div>';
                }

                wp_reset_query();
            }
        }
        
        wp_die();
    }
    add_action( 'wp_ajax_load_portfolio_posts', 'ul_load_portfolio_posts_callback' ); // For logged in users
    add_action( 'wp_ajax_nopriv_load_portfolio_posts', 'ul_load_portfolio_posts_callback' ); // For anonymous users
    


    // Добавление нового отзыва
    function ul_add_review_callback () {
        if (isset($_POST)) {
            $post_data = array(
                'post_title' => sanitize_text_field( $_POST['name'] ) . ' - ' . date('d.m.Y | H:i', strtotime("now -3 GMT")) . '(GMT+3)',
                'post_content' => $_POST['message'],
                'post_status' => 'pending',
                'post_author' => 1,
                'post_type' => 'testimonials',
            );

            $post_id = wp_insert_post( $post_data );

            if ($post_id && is_int($post_id)) {
                fw_set_db_post_option($post_id, 'plotnikoff_testimonials_name', $_POST['name']);
                fw_set_db_post_option($post_id, 'plotnikoff_testimonials_phone', $_POST['phone']);
                fw_set_db_post_option($post_id, 'plotnikoff_testimonials_rating', $_POST['rating']);
            }
        }

        wp_die();
    }
    add_action( 'wp_ajax_add_review', 'ul_add_review_callback' );
    add_action( 'wp_ajax_nopriv_add_review', 'ul_add_review_callback' );


    // Отображение нового отзыва
    function ul_view_review_callback () {
        if (isset($_POST)) {
            $id = $_POST['id'];
            $content_post = get_post($id);

            echo '<div class="review-single-title">';
                if (fw_get_db_post_option($id, 'plotnikoff_testimonials_name') != '') {
                    echo '<div class="review-single-title-img">';
                        $nameArr = explode(' ', fw_get_db_post_option($id, 'plotnikoff_testimonials_name'));
                        $name = '';

                        foreach ($nameArr as $key => $item) {
                            if ($key <= 1) {
                                $name .= strtoupper(mb_strimwidth($item, 0, 1));
                            }
                        }

                        echo '<p>' . $name . '</p>';
                    echo '</div>';
                }
                echo '<div class="review-single-title-text">';
                    if ($content_post->post_date != '') {
                        echo '<time class="date">' . date("d.m.Y", strtotime($content_post->post_date)) . '</time>';
                    }
                    if (fw_get_db_post_option($id, 'plotnikoff_testimonials_name') != '') {
                        echo '<p class="name">' . fw_get_db_post_option($id, 'plotnikoff_testimonials_name') . '</p>';
                    }
                echo '</div>';
            echo '</div>';
            

            if ($content_post->post_content != '') {
                $content = apply_filters('the_content',$content_post->post_content);

                echo '<div class="review-single-text">';
                    echo $content;
                echo '</div>';
            }
            echo '<div class="review-single-bottom">';
                echo '<div class="close" data-bs-dismiss="modal">';
                    echo '<span>Закрыть</span>';
                echo '</div>';
                if (fw_get_db_post_option($id, 'plotnikoff_testimonials_rating') != '') {
                    echo '<div class="rating">' . fw_get_db_post_option($id, 'plotnikoff_testimonials_rating') . '</div>';
                }
            echo '</div>';

        }

        wp_die();
    }
    add_action( 'wp_ajax_view_review', 'ul_view_review_callback' );
    add_action( 'wp_ajax_nopriv_view_review', 'ul_view_review_callback' );


    function ul_load_blog_posts_callback () {
        if (isset($_POST)) {

            $args = unserialize( stripslashes( $_POST['query'] ) );
            $args['paged'] = $_POST['page'] + 1; // следующая страница
            $args['post_status'] = 'publish';
            $posts = query_posts( $args );

            if( count($posts) > 0 ) {
                foreach ($posts as $key => $post) : 
                    get_template_part( 'template-parts/blog-list-item', null, array(
                        'id' => $post->ID,
                        'image-load-type' => 'src',
                    ));
                endforeach;
            }

        }

        wp_die();
    }
    add_action( 'wp_ajax_load_blog_posts', 'ul_load_blog_posts_callback' );
    add_action( 'wp_ajax_nopriv_load_blog_posts', 'ul_load_blog_posts_callback' );



    function ul_load_products_list_callback () {
        if (isset($_POST)) {
            $slug = '`' . preg_replace('/catalog\//', '', trim($_POST['slug'], '/')) . '`';


            $params = array(
                'offset' => (int)$_POST['offset'],
                'limit' => (int)$_POST['limit']
            );

            if ($_POST['filters']) {
                $params['filters'] = $_POST['filters'];
            }

            $data = getCategoryProducts($slug, $params);

            echo json_encode($data, true);
        }

        wp_die();
    }
    add_action( 'wp_ajax_load_products_list', 'ul_load_products_list_callback' );
    add_action( 'wp_ajax_nopriv_load_products_list', 'ul_load_products_list_callback' );

    
