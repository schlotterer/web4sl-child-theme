<?php

namespace Web4SL\Child_Theme;

// Enqueue styles
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_styles' );
add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\enqueue_styles' );
function enqueue_styles() {
    wp_enqueue_style( 'child-theme-style', get_stylesheet_directory_uri() . '/style.css' );
}


