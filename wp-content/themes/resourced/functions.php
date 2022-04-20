<?php

add_theme_support( 'menus' );
add_theme_support( 'widgets' );
add_theme_support( 'post-thumbnails' );

//remove_filter('the_content', 'wpautop');

register_nav_menus(array(
    'header-menu'     => 'Header menu',
));

function res_get_menu_id($location){
    $locations = get_nav_menu_locations();

    $menu_id = $locations[$location];

    return ! empty( $menu_id ) ? $menu_id : '';
}

function res_get_submenus($menu_array, $parent_id) {
    $submenus = [];

    foreach( $menu_array as $menu ) {

        if( intval( $menu->menu_item_parent ) === $parent_id ) {
            $submenus[] = $menu;
        }
    }

    return $submenus;
}

add_action( 'init', function() {
    if ( isset( $_GET['post'] ) && in_array(get_page_template_slug( $_GET['post'] ),
            array(
             'page-main.php',
            ) ) ) {
        remove_post_type_support( 'page', 'editor' );
    }
});


add_action( 'wp_enqueue_scripts', 'res_enqueue_scripts');
function res_enqueue_scripts(){
    wp_enqueue_script('vendor-js', get_template_directory_uri() . '/assets/js/vendors.js');
    wp_enqueue_script('app', get_template_directory_uri() . '/app.js');
   // wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), false, true);
    wp_enqueue_style('css', get_template_directory_uri() . '/assets/css/application.css');
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css');
}


add_action( 'wp_enqueue_scripts', 'myajax_data', 99 );
function myajax_data(){

    wp_localize_script('vendor-js', 'myajax',
        array(
            'url' => admin_url('admin-ajax.php')
        )
    );
}

add_action('admin_menu', 'remove_admin_menu');
function remove_admin_menu() {
   // remove_menu_page('edit-comments.php'); // Комментарии
}


if( function_exists('acf_add_options_page') ) {
    $options = acf_add_options_page();
    acf_add_options_sub_page(array(
        'page_title'    => 'Footer',
        'parent_slug' => $options['menu_slug'],
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Contacts',
        'parent_slug' => $options['menu_slug'],
    ));
}