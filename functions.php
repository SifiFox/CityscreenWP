<?php

if(!function_exists('cityscreen_setup')){
    function cityscreen_setup(){
        add_theme_support('custom-logo', [
            'unlink-homepage-logo' => false
        ]);

        add_theme_support( 'title-tag' );
    }

    add_action('after_setup_theme', 'cityscreen_setup');
}

/*
Подключение стилей и скриптов
*/
add_action('wp_enqueue_scripts', 'cityscreen_scripts');

function cityscreen_scripts()
{
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/utils/reset.css');
    wp_enqueue_style('variables', get_template_directory_uri() . '/css/utils/variables.css');
    wp_enqueue_style('styles', get_template_directory_uri() . '/css/styles.css');
    wp_enqueue_style('table', get_template_directory_uri() . '/css/modules/table.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/modules/main.css');
    wp_enqueue_style('our_screens', get_template_directory_uri() . '/css/modules/our-screens.css');
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}


function cityscreen_menus()
{
    $locations = array(
        'main' => __('main menu', 'cityscreen'),
        'secondary' => __('secondary menu', 'cityscreen'),
    );
    register_nav_menus($locations);
}
add_action('init', 'cityscreen_menus');


add_filter('nav_menu_css_class', 'custom_nav_menu_css_class', 10, 1);

function custom_nav_menu_css_class($classes)
{
    $classes[] = 'nav-list__item';

    return $classes;
}
//add_filter('nav_menu_link_attributes', 'custom_nav_menu_link_attributes', 10);
//function custom_nav_menu_link_attributes($attrs){
//    $attrs['class'] = 'link nav-list__link';
//    return $attrs;
//}