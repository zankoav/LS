<?php
if (!defined('ABSPATH')) {
    exit;
}

require __DIR__ . '/backend/Assets.php';
require __DIR__ . '/backend/CMB2/index.php';
require __DIR__ . '/backend/ajax.php';



add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
});


add_action('wp_enqueue_scripts', 'page_scripts');

function page_scripts()
{
    wp_dequeue_script('jquery');
    wp_dequeue_script('jquery-core');
    wp_dequeue_script('jquery-migrate');
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-blocks-style');
}


function register_service_type()
{

    register_post_type('service', array(
        'labels'             => array(
            'name'               => 'Услуга',
            'singular_name'      => __('Услуга'),
            'add_new'            => __('Добавить Услугу'),
            'add_new_item'       => __('Добавить новыю Услугу'),
            'edit_item'          => __('Редактировать Услугу'),
            'new_item'           => __('Новая Услуга'),
            'view_item'          => __('Посмотреть Услугу'),
            'search_items'       => __('Найти Услугу'),
            'not_found'          => __('Услуга не найдено'),
            'not_found_in_trash' => __('В корзине Услуги не найдено'),
            'menu_name'          => 'Услуги',
            'items_archive'      => 'Услуги архив',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'service', 'with_front' => false),
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-carrot',
        'supports'           => array('title', 'editor', 'thumbnail')
    ));
}

add_action('init', 'register_service_type');
