<?php

    if (!defined('ABSPATH')) {
        die('Direct access forbidden.');
    }

    /**
     * Theme’s static files
     */

    if (!is_admin()) {
        // Main
        wp_enqueue_style('main', UL_CSS . '/main.css', null, UL_VERSION);

        // Custom
        wp_enqueue_style('mobile', UL_CSS . '/mobile.css', null, UL_VERSION);
        wp_enqueue_style('custom', UL_CSS . '/custom.css', null, UL_VERSION);
    }

    if (!is_admin()) {
        wp_enqueue_script( 'jquery' );

        // wp_enqueue_script('ymaps',  'https://api-maps.yandex.ru/2.1/?apikey=850bea4a-0b91-48bf-9198-49aad2f55170&lang=ru_RU&ver=1.0', array('jquery'), UL_VERSION, true);

        $googleKey = 'AIzaSyDyG4tUN_TDbI7l99Xtz40WGKFwE3ilIgw';
        wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?key=' . $googleKey .' &language=ru', array('jquery'), UL_VERSION, true);
        
        wp_enqueue_script('libs', UL_SCRIPTS . '/libs.js', array('jquery'), UL_VERSION, true);
        wp_enqueue_script('main', UL_SCRIPTS . '/main.js', array('jquery'), UL_VERSION, true);
        wp_enqueue_script('custom', UL_SCRIPTS . '/custom.js', array('jquery'), UL_VERSION, true);

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
