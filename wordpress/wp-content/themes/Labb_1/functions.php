<?php

function wpdocs_theme_name_scripts() {
    // Register a CSS stylesheet.
    wp_register_style('styles', get_template_directory_uri() . '/css/custom.css', array(), 1, 'all');
    // Enqueue a CSS stylesheet.
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '0.1.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '0.1.0', 'all');
wp_enqueue_style('styles');


}
// Fires when scripts and styles are enqueued.
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

/* Register meny */
add_theme_support('menus');
register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
        'side-menu' => 'Side Menu',
        'page-one4' => 'Pages4'
    )
); 

//   Adds a callback function to a filter hook//
function searchfilter($query) {
 
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('post'));
    }
 
return $query;
}
 
add_filter('pre_get_posts','searchfilter');