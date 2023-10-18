<?php
function enqueue_my_assets() {
    // Enqueue your main stylesheet
    wp_enqueue_style('my-stylesheet', get_stylesheet_directory_uri() . './style.css');
    

    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css');
    
    // Enqueue Bootstrap JavaScript
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js', array('jquery'), null, true);
    
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese');
    
    // Enqueue your JavaScript
    wp_enqueue_script('my-scripts', get_stylesheet_directory_uri() . '/js/match-height.js', array('jquery'), null, true);

    wp_enqueue_style('my-images', get_template_directory_uri() . './images');
}
add_action('wp_enqueue_scripts', 'enqueue_my_assets');

