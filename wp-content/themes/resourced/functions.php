<?php

add_theme_support( 'menus' );
add_theme_support( 'widgets' );
add_theme_support( 'post-thumbnails' );

//remove_filter('the_content', 'wpautop');

register_nav_menus(array(
    'header-menu'     => 'Header Menu',
    'footer-menu1'     => 'Footer Menu 1',
    'footer-menu2'     => 'Footer Menu 2',
    'footer-menu3'     => 'Footer Menu 3',
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
             'page-about.php',
             'page-contact.php',
             'page-pricing.php',
            ) ) ) {
        remove_post_type_support( 'page', 'editor' );
    }
});


add_action( 'wp_enqueue_scripts', 'res_enqueue_scripts');
function res_enqueue_scripts(){
    //wp_enqueue_script('jquery');
    wp_enqueue_script('vendor-js', get_template_directory_uri() . '/assets/js/vendors.js');
    wp_enqueue_script('app', get_template_directory_uri() . '/app.js');
    //wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), false, true);
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
   remove_menu_page('edit-comments.php'); // Комментарии
   remove_menu_page('edit.php'); // Posts
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
    acf_add_options_sub_page(array(
        'page_title'    => 'Blocks',
        'parent_slug' => $options['menu_slug'],
    ));
}

add_shortcode( 'brands', function() {
    $brands = get_field( 'brands', 'option' );
    $brands_block = '<span class="pricing-partners__title">' . get_field( 'brands_title', 'option' ) . '</span>';

    if( ! empty( $brands ) ):
        $brands_block .= '<div class="pricing-partners__wrapper">';
            foreach( $brands as $brand ):
                $brands_block .= '<div>
                    <picture>
                        <!--<source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.webp" data-original="<?php /*echo get_template_directory_uri() */?>/images/partners/brand-01.webp"
                                class="lazy-web" type="image/webp">
                        <source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.png" data-original="<?php /*echo get_template_directory_uri() */?>/images/partners/brand-01.png"
                                class="lazy-web" type="image/png">-->
                        <img src="' . get_template_directory_uri() . '/images/pixel.png" data-original="' . $brand['url'] . '" class="lazy" alt="">
                    </picture>
                </div>';
            endforeach;
        $brands_block .= '</div>';
    endif;

    echo $brands_block;
});

add_shortcode( 'subscribe', function() {
    echo '<div class="pricing-partners__subscribe">
                <div class="pricing-partners__subscribe-txt">'.get_field( 'register_text', 'option' ).'</div>
                <div class="pricing-partners__subscribe-form">
                    <form class="ajax_form" action="">
                        <input class="hidden" type="text" name="request" data-title="Request" value="Subscribe">
                        <input type="text" name="email" data-title="Email" placeholder="Your e-mail" data-validate-email="Wrong email" data-validate-required="Required">
                        <button type="submit" class="btn">Confirm</button>
                    </form>
                </div>
            </div>';
});


add_shortcode( 'subscribe', function() {
    $circle = get_field('sol_circle', 'option');
    $circle_section = '<div class="section library-section">';
    if( ! empty( $circle ) ):
        $circle_section .= '<div class="library-bg">
                <img src="'.get_template_directory_uri().'/images/qw.svg" alt="">
                <div class="library-items">
                    <div class="centra">
                        <span>
                          <picture>
                            <!--<source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.webp" data-original="<?php /*echo get_template_directory_uri() */?>/images/orbits/orbits-centra.webp"
                                    class="lazy-web" type="image/webp">
                            <source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.png" data-original="<?php /*echo get_template_directory_uri() */?>/images/orbits/orbits-centra.png"
                                    class="lazy-web" type="image/png">-->
                            <img src="'. get_template_directory_uri().'/images/pixel.png" data-original="'.$circle['outer']['outer_1']['url'].'" class="lazy"
                                 alt="">
                          </picture>
                        </span>
                    </div>
                    <div class="ms2">
                        <span>
                          <picture>
                            <!--<source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.webp" data-original="<?php /*echo get_template_directory_uri() */?>/images/orbits/orbits-ms.webp"
                                    class="lazy-web" type="image/webp">
                            <source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.png" data-original="<?php /*echo get_template_directory_uri() */?>/images/orbits/orbits-ms.png"
                                    class="lazy-web" type="image/png">-->
                            <img src="'. get_template_directory_uri().'/images/pixel.png" data-original="'.$circle['outer']['outer_2']['url'].'" class="lazy" alt="">
                          </picture>
                        </span>
                    </div>
                    <div class="extend">
                <span>
                  <picture>
                    <!--<source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.webp" data-original="<?php /*echo get_template_directory_uri() */?>/images/orbits/orbits-sap.webp"
                            class="lazy-web" type="image/webp">
                    <source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.png" data-original="<?php /*echo get_template_directory_uri() */?>/images/orbits/orbits-sap.png"
                            class="lazy-web" type="image/png">-->
                    <img src="'.get_template_directory_uri().'/images/pixel.png" data-original="'. $circle['outer']['outer_3']['url'].'" class="lazy"
                         alt="">
                  </picture>
                </span>
                    </div>
                </div>
                <div class="library-items library-items__sm">
                    <div class="shopify">
                        <span>
                          <picture>
                            <!--source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.webp" data-original="<?php /*echo get_template_directory_uri() */?>/images/orbits/orbits-shopify.webp"
                                    class="lazy-web" type="image/webp">
                            <source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.png" data-original="<?php /*echo get_template_directory_uri() */?>/images/orbits/orbits-shopify.png"
                                    class="lazy-web" type="image/png">-->
                            <img src="'.get_template_directory_uri().'/images/pixel.png" data-original="'.$circle['inner']['inner_1']['url'].'" class="lazy"
                                 alt="">
                          </picture>
                        </span>
                    </div>
                    <div class="madden">
                        <span>
                          <picture>
                            <!--<source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.webp" data-original="<?php /*echo get_template_directory_uri() */?>/images/orbits/orbits-madden.webp"
                                    class="lazy-web" type="image/webp">
                            <source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.png" data-original="<?php /*echo get_template_directory_uri() */?>/images/orbits/orbits-madden.png"
                                    class="lazy-web" type="image/png">-->
                            <img src="'.get_template_directory_uri().'/images/pixel.png" data-original="'.$circle['inner']['inner_2']['url'].'" class="lazy"
                                 alt="">
                          </picture>
                        </span>
                    </div>
                    <div class="b-come">
                <span>
                  <picture>
                    <!--<source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.webp" data-original="<?php /*echo get_template_directory_uri() */?>/images/orbits/orbits-b-come.webp"
                            class="lazy-web" type="image/webp">
                    <source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.png" data-original="<?php /*echo get_template_directory_uri() */?>/images/orbits/orbits-b-come.png"
                            class="lazy-web" type="image/png">-->
                    <img src="'.get_template_directory_uri().'/images/pixel.png" data-original="'.$circle['inner']['inner_3']['url'].'" class="lazy"
                         alt="">
                  </picture>
                </span>
                    </div>
                </div>
            </div>';
        endif;
         $circle_section .= '<div class="container">
            <div class="library-inner">
                <p>'.get_field('sol_title', 'option').'</p>
                <a href="javascript:void(0)" class="btn popup-btn" data-mfp-src="#signup-popup" data-effect="mfp-zoom-in">Get started</a>
            </div>
        </div>
        <span>'.get_field('sol_text', 'option'). '</span>
    </div>';

    echo $circle_section;
});


add_action( 'init', 'res_init' );

function res_init()
{
    $labels = array(
        'name' => 'Subscribers',
        'singular_name' => 'Subscriber',
        'add_new' => 'Add new',
        'add_new_item' => 'Add new subscriber',
        'edit_item' => 'Edit subscriber',
        'new_item' => 'New subscriber',
        'view_item' => 'View subscriber',
        'search_items' => 'Search subscriber',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in trash',
        'parent_item_colon' => '',
        'menu_name' => 'Subscribers'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => null,
        'supports' => array('title'),
        'capabilities' => array(
            'create_posts' => false,
        ),
        'query_var' => false,
        'publicly_queryable' => false,
        'exclude_from_search' => true,
        'show_in_nav_menus' => false,
        'map_meta_cap' => true,
        'menu_icon' => 'dashicons-email-alt'
    );

    register_post_type('subscriber', $args);
}