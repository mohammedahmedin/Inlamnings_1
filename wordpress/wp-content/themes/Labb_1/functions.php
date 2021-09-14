<?php

function wpdocs_theme_name_scripts() {
    wp_register_style('styles', get_template_directory_uri() . '/css/custom.css', array(), 1, 'all');
 
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '0.1.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '0.1.0', 'all');
wp_enqueue_style('styles');


}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

/* Registrera meny */
add_theme_support('menus');
register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
    )
); 