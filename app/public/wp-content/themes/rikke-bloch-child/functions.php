<?php
// Enqueue the parent theme stylesheet
function understrap_child_enqueue_styles() {
    // Enqueue the parent theme stylesheet
    wp_enqueue_style( 'understrap-parent-style', get_template_directory_uri() . '/style.css' );

    // Enqueue the child theme stylesheet (if you want to add custom styles)
    wp_enqueue_style( 'understrap-child-style', get_stylesheet_directory_uri() . '/style.css', array('understrap-parent-style') );
}

add_action( 'wp_enqueue_scripts', 'understrap_child_enqueue_styles' );
