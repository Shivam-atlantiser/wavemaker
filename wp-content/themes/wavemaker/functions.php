<?php
/**
 * 
 * Theme Functions
 * 
 * @package Wavemaker
 * 
 */

 function wavemake_enqueue_scripts(){

    wp_register_style('main-css', get_stylesheet_uri(), [], filemtime(get_template_directory().'/style.css' ), 'all' );
    wp_register_style('theme-css', get_template_directory_uri().'/assets/css/theme.css' , [], filemtime(get_template_directory().'/assets/css/theme.css' ), 'all' );
    // wp_register_style('theme-min-css-map', get_template_directory_uri().'/assets/css/theme.min.css.map' , [], filemtime(get_template_directory().'/assets/css/theme.min.css.map' ), 'all' );
    wp_register_style('vendor-min-css', get_template_directory_uri().'/assets/css/vendor.min.css' , [], filemtime(get_template_directory().'/assets/css/vendor.min.css' ), 'all' );

    wp_register_script('theme-js', get_template_directory_uri().'/assets/js/theme.js', [], filemtime(get_template_directory().'/assets/js/theme.js' ));
    wp_register_script('theme-min-js', get_template_directory_uri().'/assets/js/theme.min.js', [], filemtime(get_template_directory().'/assets/js/theme.min.js' ));
    wp_register_script('theme-min-js-map', get_template_directory_uri().'/assets/js/theme.min.js.map', [], filemtime(get_template_directory().'/assets/js/theme.min.js.map' ));
    wp_register_script('vendor-min-js', get_template_directory_uri().'/assets/js/vendor.min.js', [], filemtime(get_template_directory().'/assets/js/vendor.min.js' ));

    wp_enqueue_style('main-css');
    wp_enqueue_style('theme-css');
    // wp_enqueue_style('theme-min-css-map');
    wp_enqueue_style('vendor-min-css');
    wp_enqueue_script('theme-js');
    wp_enqueue_script('theme-min-js');
    wp_enqueue_script('theme-min-js-map');
    wp_enqueue_script('vendor-min-js');


}

add_theme_support( 'post-thumbnails' );


add_action('wp_enqueue_scripts', 'wavemake_enqueue_scripts');

 ?>