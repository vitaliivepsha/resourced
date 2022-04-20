<?php
    $header_menu_id = res_get_menu_id( 'header-menu' );
    $lv0_menus = wp_get_nav_menu_items( $header_menu_id );
?>

<?php if ( ! empty ( $lv0_menus ) ): ?>

<ul class="mobile-menu">
    <?php foreach( $lv0_menus as $lv0_menu ): ?>
        <?php if( empty( $lv0_menu->menu_item_parent ) ):
            $url = ! in_array('no-link', $lv0_menu->classes) ? esc_url( $lv0_menu->url ) : 'javascript:void(0)';
            $lv1_menus = res_get_submenus( $lv0_menus, $lv0_menu->ID );
            $item_class = '';
            $item_class .= ! empty( $lv1_menus ) ? ' has-children"' : '';
            $item_class .=  get_queried_object_id() == $menu->object_id ? ' current"' : '';
            ?>
            <li<?php echo ! empty( $item_class ) ? ' class="' . $item_class . '"' : ''; ?>>
                <a href="<?php echo $url; ?>"><?php echo esc_html( $lv0_menu->title ); ?></a>
                <?php if( ! empty($lv1_menus) ): ?>
                    <span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                                  d="M5.57805 10.9798L10.6278 15.4915C11.3882 16.1708 12.6166 16.1708 13.377 15.4915L18.4268 10.9798C19.6551 9.88233 18.7777 8.001 17.0424 8.001H6.94286C5.2076 8.001 4.34972 9.88233 5.57805 10.9798Z"
                                  fill="#671DFF" />
                        </svg>
                    </span>
                <?php endif; ?>
                <?php if( ! empty( $lv1_menus ) ): ?>
                    <div class="submenu">
                        <?php foreach( $lv1_menus as $lv1_menu ): ?>
                            <span><?php echo esc_html( $lv1_menu->title ); ?></span>
                            <?php $lv2_menus = res_get_submenus( $lv0_menus, $lv1_menu->ID ); ?>
                            <?php if( ! empty( $lv2_menus ) ): ?>
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
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>

<?php endif; ?>
