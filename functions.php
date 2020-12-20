<?php

function unicorn_theme_support(){
    add_theme_support('title-tag'); //adds dynamic title tag support
    add_theme_support('post-thumbnails'); //adds thumbnails to post
}
add_action( 'after_setup_theme', 'unicorn_theme_support' );

function unicorn_menus(){
    $menu_setup = array(
        'primary'   => "Desktop primary Top Menu",
        'footer'    => "Footer Menu Items"
    );

    register_nav_menus($menu_setup);
}
add_action( 'init', 'unicorn_menus' );

function unicorn_register_styles(){
    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'unicorn-style', get_template_directory_uri() . '/style.css', array('unicorn-bootstrap'), $version, 'all');
    wp_enqueue_style( 'unicorn-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css", array(), '4.5.3', 'all');
    wp_enqueue_style( 'unicorn-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'unicorn_register_styles' );

function unicorn_register_scripts(){
    wp_enqueue_script( 'unicorn-jquery', "https://code.jquery.com/jquery-3.5.1.slim.min.js", array(), '3.5.1', true);
    wp_enqueue_script( 'unicorn-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js", array(), '1.16.1', true);
    wp_enqueue_script( 'unicorn-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js", array(), '4.5.3', true);
    wp_enqueue_script( 'unicorn-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);

}
add_action( 'wp_enqueue_scripts', 'unicorn_register_scripts' );

?>