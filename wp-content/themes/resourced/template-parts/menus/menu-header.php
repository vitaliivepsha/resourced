<?php
    $header_menu_id = res_get_menu_id( 'header-menu' );
    $menus = wp_get_nav_menu_items( $header_menu_id );
?>

<?php if ( ! empty ( $menus ) ): ?>
    <div class="header-main-nav">
        <ul>
            <?php foreach( $menus as $menu ): ?>
                <!-- <li class="current"> -->
                <?php if( empty( $menu->menu_item_parent ) ):
                    $url = ! in_array('no-link', $menu->classes) ? esc_url( $menu->url ) : 'javascript:void(0)';
                    $lv1_menus = res_get_submenus( $menus, $menu->ID );
                    $item_class = '';
                    $item_class .= ! empty( $lv1_menus ) ? ' has-children"' : '';
                    $item_class .=  get_queried_object_id() == $menu->object_id ? ' current"' : '';
                    ?>
                    <li<?php echo ! empty( $item_class ) ? ' class="' . $item_class . '"' : ''; ?>>
                        <a href="<?php echo $url; ?>"><?php echo esc_html( $menu->title ); ?></a>
                        <?php if( ! empty( $lv1_menus ) ): ?>
                            <div class="drop-menu">
                                <?php foreach( $lv1_menus as $lv1_menu ): ?>
                                    <div class="drop-menu-item <?php echo $lv1_menu->classes[0]; ?>">
                                        <span><?php echo esc_html( $lv1_menu->title ); ?></span>
                                        <?php $lv2_menus = res_get_submenus( $menus, $lv1_menu->ID ); ?>
                                        <?php if( ! empty($lv2_menus) ): ?>
                                            <ul>
                                                <?php foreach( $lv2_menus as $lv2_menu ):
                                                    $url = ! in_array('no-link', $lv2_menu->classes) ? esc_url( $lv2_menu->url ) : 'javascript:void(0)';
                                                    ?>
                                                    <li<?php echo get_field('disable', $lv2_menu) ? ' class="disabled"' : ''; ?>>
                                                        <div>
                                                            <picture>
                                                                <!--<source srcset="<?php /*echo get_template_directory_uri()*/?>/images/pixel.webp" data-original="<?php /*echo get_template_directory_uri()*/?>/images/icons/drop-01.webp"
                                                                        class="lazy-web" type="image/webp">
                                                                <source srcset="<?php /*echo get_template_directory_uri()*/?>/images/pixel.png" data-original="<?php /*echo get_template_directory_uri()*/?>/images/icons/drop-01.png"
                                                                        class="lazy-web" type="image/png">-->
                                                                <img src="<?php echo get_template_directory_uri()?>/images/pixel.png" data-original="<?php echo get_field('icon', $lv2_menu)['url']; ?>" class="lazy"
                                                                     alt="">
                                                            </picture>
                                                        </div>
                                                        <a href="<?php echo $url; ?>">
                                                            <b><?php echo esc_html( $lv2_menu->title ); ?></b>
                                                            <span><?php the_field('caption', $lv2_menu); ?></span>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>