<?php

function load_stylesheets(){
    wp_register_style('bootstrapp', get_template_directory_uri() . '/bootstrap.min.css', '', 1, 'all' );
    wp_enqueue_style( 'bootstrapp');

    wp_register_style('woocommerce', get_template_directory_uri() . '/woocommerce.css', '', 1, 'all' );
    wp_enqueue_style( 'woocommerce'); 
   
    wp_register_style('style', get_template_directory_uri() . '/style.css', '', 1, 'all' );
    wp_enqueue_style( 'style'); 
}

function load_js(){
    wp_register_style('bootstrapp', get_template_directory_uri() . '/bootstrap.bundle.min.js', '', 1, 'all' );
    wp_enqueue_style( 'bootstrapp');
}

add_action( 'wp_enqueue_scripts', 'load_stylesheets' );
add_action( 'wp_enqueue_scripts', 'load_js' );

function bootstrapstarter_wp_setup() {
    add_theme_support( 'menu' );

    register_nav_menus(array('top-nav' => 'Top Nav' ));

}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );



//Enable widgets
function widgets_init() {
    register_sidebar( array(
        'name' => __( 'Header Sidebar', 'smallenvelop' ),
        'id' => 'header-sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
}
add_action( 'widgets_init', 'widgets_init' );
