<?php

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

function register_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}

add_action('init', 'register_menus');

?>