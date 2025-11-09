<?php

function onepage_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'onepage_setup');

function onepage_scripts() {
    // Načíst hlavní styl
    wp_enqueue_style('onepage-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'));

    // Načíst JS
    wp_enqueue_script('onepage-script', get_template_directory_uri() . '/script/script.js', array(), filemtime(get_template_directory() . '/script/script.js'), true);
}
add_action('wp_enqueue_scripts', 'onepage_scripts');