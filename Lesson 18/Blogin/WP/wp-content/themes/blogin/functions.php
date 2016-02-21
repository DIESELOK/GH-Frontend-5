<?php
function blogin_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'blogin_resources');

//navigation Menus
register_nav_menus(array(
    'primary' => __('Primary Menu'),

));



function blogin_setup(){
    //add featured image support
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'blogin_setup');