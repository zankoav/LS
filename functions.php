<?php
if (!defined('ABSPATH')) {
    exit;
}

require __DIR__ . '/backend/Assets.php';
require __DIR__ . '/backend/CMB2/index.php';
require __DIR__ . '/backend/ajax.php';



add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_image_size('product', 560, 640,  array('center', 'center'));
});


add_action('wp_enqueue_scripts', 'page_scripts');

function page_scripts()
{
    wp_dequeue_script('jquery');
    wp_dequeue_script('jquery-core');
    wp_dequeue_script('jquery-migrate');

    $assets = new Assets();

    $runtime = $assets->asset('runtime.js');
    wp_enqueue_script('runtime', $runtime);

    if (wp_is_mobile()) {
        if (is_page_template('template-page-home.php')) {
            $target = $assets->asset('mobile_index.js');
            wp_enqueue_script('mobile_index', $target);
        } else if (is_404()) {
            $target = $assets->asset('mobile_p404.js');
            wp_enqueue_script('mobile_p404', $target);
        }
    } else {
        if (is_page_template('template-page-home.php')) {
            $target = $assets->asset('desktop_index.js');
            wp_enqueue_script('desktop_index', $target);
        } else if (is_404()) {
            $target = $assets->asset('desktop_p404.js');
            wp_enqueue_script('desktop_p404', $target);
        }
    }

    // add_filter('script_loader_tag', 'change_my_script', 10, 3);

    // function change_my_script($tag, $handle, $src)
    // {

    //     if (
    //         'desktop_index' === $handle or
    //         'desktop_p404' === $handle or
    //         'mobile_index' === $handle or
    //         'mobile_p404' === $handle
    //     ) {
    //         return str_replace(' src', ' async src', $tag);
    //     } else if ('runtime' === $handle) {
    //         return str_replace(' src', ' defer src', $tag);
    //     }

    //     return $tag;
    // }
}
