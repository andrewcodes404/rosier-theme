<?php
function apd_theme_styles(){

    // internal style sheet - for the theme
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css');

    // internal fonts
    wp_enqueue_style( 'fonts_css', get_template_directory_uri() . '/assets/fonts/playlist-plus-raleway/stylesheet.css');

    ///the reset.css
    wp_enqueue_style( 'reset_css' , get_template_directory_uri() . '/assets/css/reset.css');

    //this is the compiled sass in main.css
    // wp_enqueue_style( 'main_css' , get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style( 'main_css' , get_template_directory_uri() . '/assets/css/main-with-prefixes.css');

    //font-awesome
    wp_enqueue_style( 'font-awesome' , get_template_directory_uri() . '/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');
}

///and don't forget to call it
add_action( 'wp_enqueue_scripts', 'apd_theme_styles' );

function apd_theme_js(){
    ///for your basic app.js
    wp_enqueue_script( 'app_js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '', true );

    /// for another .js script example
    // wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/assets/js/modernizr.js', '', '', false );
    //
  }

///and don't forget to call it
add_action( 'wp_enqueue_scripts', 'apd_theme_js' );

////add theme support
add_theme_support( 'post-thumbnails' );
add_image_size( 'hero-size', 500, 624, true );
add_theme_support('menus');
add_theme_support( "title-tag" );


///////Custom Functions
require('inc/widget_maker.php');
require('inc/menu_maker.php');
