<?php

if (!defined('ABSPATH')) {
    die('Direct access forbidden.');
}

/**
 * Theme’s filters and actions
 */

/*
 * TGM REQUIRE PLUGIN
 * require or recommend plugins for your WordPress themes
 */

require_once get_template_directory() . '/inc/includes/plugin-activator.php';

/** @internal */
function _action_ul_register_required_plugins()
{

    $plugin_dir = UL_THEMEROOT . '/inc/includes/plugins';

    $plugins = array(
        array(
            'name' => 'Unyson',
            'slug' => 'unyson',
            'required' => true,
            'source' => $plugin_dir . '/unyson.2.7.21.zip',
            'force_activation' => true,
        ),
        array(
            'name' => 'Classic Editor',
            'slug' => 'classic-editor',
            'required' => true,
            'source' => $plugin_dir . '/classic-editor.1.3.zip',
            'force_activation' => true,
        ),
        array(
            'name' => 'WP translitera',
            'slug' => 'wp-translitera',
            'required' => true,
            'source' => $plugin_dir . '/wp-translitera.p1.2.5.zip',
            'force_activation' => true,
        ),
        array(
            'name' => 'Robin Image Optimizer',
            'slug' => 'robin-image-optimizer',
            'required' => true,
            'source' => $plugin_dir . '/robin-image-optimizer.zip',
            'force_activation' => true,
        ),
    );

    $config = array(
        'id' => 'ul',                    // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu' => 'tgmpa-install-plugins', // Menu slug.
        'has_notices' => true,                    // Show admin notices or not.
        'dismissable' => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg' => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message' => '',
    );

    tgmpa($plugins, $config);
}
add_action('tgmpa_register', '_action_ul_register_required_plugins');


// Кастомные типы опций для Unyson
function _action_theme_include_custom_option_types()
{
    if (is_admin()) {
        require_once dirname(__FILE__) . '/includes/option-types/projects/class-fw-option-type-projects.php';
    }
}
add_action('fw_option_types_init', '_action_theme_include_custom_option_types');





// Исключить посты проектов домом, которые группой
add_action('pre_get_posts', function ($query) {

    $exludePostIdArr = array ();

    if (count($GLOBALS['exludeHomesPostSlugArr']) > 0) {
        foreach ($GLOBALS['exludeHomesPostSlugArr'] as $key => $item) {
            $exludePost = get_page_by_path($item, OBJECT, 'homes');
            if ($exludePost) {
                array_push($exludePostIdArr, $exludePost->ID);
            }
        }
    }

    if (!is_admin() && $query->is_main_query()) {
        if (is_post_type_archive('homes')) {
            $query->set('orderby', array ('menu_order' => 'ASC'));
            $query->set('post__not_in', $exludePostIdArr);
        }
    }
});