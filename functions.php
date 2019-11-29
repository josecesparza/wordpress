<?php

function load_stylesheets()
{
    wp_register_style('bootstrapp', get_template_directory_uri() . '/bootstrap.min.css', '', 1, 'all');
    wp_enqueue_style('bootstrapp');

    wp_register_style('woocommerce', get_template_directory_uri() . '/woocommerce.css', '', 1, 'all');
    wp_enqueue_style('woocommerce');

    wp_register_style('style', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('style');
}

function load_js()
{
    wp_register_style('bootstrapp', get_template_directory_uri() . '/bootstrap.bundle.min.js', '', 1, 'all');
    wp_enqueue_style('bootstrapp');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'load_js');

function bootstrapstarter_wp_setup()
{
    add_theme_support('menu');

    register_nav_menus(array('top-right-nav' => 'Top Right Nav'));
    register_nav_menus(array('top-left-nav' => 'Top Left Nav'));
}

add_action('after_setup_theme', 'bootstrapstarter_wp_setup');

function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

//Enable widgets
function widgets_init()
{
    register_sidebar(array(
        'name' => __('Header Sidebar', 'smallenvelop'),
        'id' => 'header-sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => __('Sidebar', 'smallenvelop'),
        'id' => 'sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="goodbye">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Searcher', 'smallenvelop'),
        'id' => 'searcher',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="goodbye">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'widgets_init');
