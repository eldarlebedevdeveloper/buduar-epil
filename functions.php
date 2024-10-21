<?php

function my_custom_theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/css/swiper-bundle.min.css');
    wp_enqueue_style('all-css', get_template_directory_uri() . '/css/all.css');
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_styles');

function my_custom_theme_enqueue_scripts() {
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper.min.js');
    // wp_enqueue_script('swiper-bundle-js', get_template_directory_uri() . '/js/swiper-bundle.min.js'); 
    wp_enqueue_script('index-swiper-js', get_template_directory_uri() . '/js/index-swiper.js');
    wp_enqueue_script('index-js', get_template_directory_uri() . '/js/index.js');
    wp_enqueue_script('maskedinput-js', get_template_directory_uri() . '/js/jquery.maskedinput.min.js');
} 
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_scripts');
 
function my_custom_favicon() {
    echo '<link rel="apple-touch-icon" sizes="180x180" href="' . get_template_directory_uri() . '/favicon/apple-touch-icon.png">';
    echo '<link rel="apple-touch-icon" sizes="32x32" href="' . get_template_directory_uri() . '/favicon/favicon-32x32.png">';
    echo '<link rel="apple-touch-icon" sizes="16x16" href="' . get_template_directory_uri() . '/favicon/favicon-16x16.png">';
    echo '<link rel="manifest" href="' . get_template_directory_uri() . '/favicon/site.webmanifest">';
}
add_action('wp_head', 'my_custom_favicon');



function my_theme_setup() {
    load_theme_textdomain( 'buduar-epil-theme', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

// function switch_language_for_specific_page() {
//     if (is_home()) { // Наприклад, для сторінки з ID 42
//         switch_to_locale('uk');
//     }
// }
// add_action('wp', 'switch_language_for_specific_page');
// add_action( 'after_setup_theme', 'my_theme_setup' );

//     switch_to_locale('uk');

// function my_custom_language_switch() {
//     if (isset($_GET['lang']) && $_GET['lang'] === 'uk') {
//         switch_to_locale('uk');
//     } else {
//         switch_to_locale('en_US');
//     }
// }
// add_action('init', 'my_custom_language_switch');


function register_my_menu() {
    register_nav_menu('primary-menu', __( 'Primary Menu', 'buduar-epil-theme' ));
}
add_action( 'init', 'register_my_menu' );