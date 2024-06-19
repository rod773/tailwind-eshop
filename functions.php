<?php

//echo get_stylesheet_uri();
// echo get_template_directory_uri();
// $site_url = network_site_url("/");
// echo $site_url;

//exit();


function mytheme_theme_setup(){
    
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_image_size('home-featured',680,400,array('center','center'));
    add_theme_support('automatic-feed-links');

    register_nav_menus(array(
        'primary' => __('Primary Menu','superstore')
    ));
}

add_action('after_setup_theme', 'mytheme_theme_setup');


function mytheme_scripts_enqueue(){

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts','mytheme_scripts_enqueue');