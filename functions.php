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
        'rewrite'            => array('slug' => 'services', 'with_front' => false),
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-carrot',
        'supports'           => array('title', 'editor', 'thumbnail')
    ));
}

add_action('init', 'register_service_type');

function register_product_type()
{

    register_post_type('product', array(
        'labels'             => array(
            'name'               => 'Продукт',
            'singular_name'      => __('Продукта'),
            'add_new'            => __('Добавить Продукт'),
            'add_new_item'       => __('Добавить новый Продукт'),
            'edit_item'          => __('Редактировать Продукт'),
            'new_item'           => __('Новый Продукт'),
            'view_item'          => __('Посмотреть Продукт'),
            'search_items'       => __('Найти Продукт'),
            'not_found'          => __('Продукт не найден'),
            'not_found_in_trash' => __('В корзине Продукты не найдено'),
            'menu_name'          => 'Продукты',
            'items_archive'      => 'Продукты архив',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'products', 'with_front' => false),
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-products',
        'supports'           => array('title', 'editor', 'thumbnail')
    ));
}

add_action('init', 'register_product_type');
