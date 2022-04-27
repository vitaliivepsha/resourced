<?php
/* Template Name: About */
get_header(); ?>

<main class="main">
    <div class="section main-section about">
        <picture>
            <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.webp" data-original="<?php echo get_template_directory_uri() ?>/images/bg-main.webp" class="lazy-web"
                    type="image/webp">
            <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/bg-main.png" class="lazy-web"
                    type="image/png">
            <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/bg-main.png" class="lazy" alt="">
        </picture>
        <div class="container">
            <div class="about-main">
                <span><?php the_field( 'about_title' ); ?></span>
                <p><?php the_field( 'about_subtitle' ); ?></p>
            </div>
        </div>
    </div>

    <div class="section team-section">
        <div class="about-commitment">
            <span class="about-commitment__title"><?php the_field( 'about_title_2' ); ?></span>
            <p class="about-commitment__subtitle"><?php the_field( 'about_subtitle_2' ); ?></p>
        </div>
        <div class="about-team">
            <span class="about-team__title"><?php the_field( 'team_title' ); ?></span>
            <?php $team = get_field( 'team' ); ?>
            <?php if( ! empty( $team ) ): ?>
                <ul class="about-team__list">
                    <?php foreach( $team as $member ): ?>
                        <li>
                            <div class="member">
                                <div class="member__pic">
                                    <picture>
                                       <!-- <source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.webp" data-original="<?php /*echo get_template_directory_uri() */?>/images/members-01.webp" class="lazy-web"
                                                type="image/webp">
                                        <source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.png" data-original="<?php /*echo get_template_directory_uri() */?>/images/members-01.png" class="lazy-web"
                                                type="image/png">-->
                                        <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo $member['photo']['url']; ?>" class="lazy" alt="">
                                    </picture>
                                </div>
                                <div class="member__about">
                                    <span class="member__about-name"><?php echo $member['name']; ?></span>
                                    <span class="member__about-speciality"><?php echo $member['position']; ?></span>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
    <?php $stats = get_field( 'statistics' ); ?>
    <?php if( ! empty( $stats ) ): ?>
        <div class="section statistics-section">
            <div class="container">
                <ul class="statistics-list">
                    <?php foreach( $stats as $item ): ?>
                        <li>
                            <b><?php echo $item['value']; ?></b>
                            <span><?php echo $item['caption']; ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
    <div class="sectiton location-section">
        <div class="container">
            <span class="location-title"><?php the_field( 'locations_title' ); ?></span>
            <div class="location-pic">
                <picture>
                    <!--<source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.webp" data-original="<?php /*echo get_template_directory_uri() */?>/images/map.webp" class="lazy-web"
                            type="image/webp">
                    <source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.png" data-original="<?php /*echo get_template_directory_uri() */?>/images/map.png" class="lazy-web"
                            type="image/png">-->
                    <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_field( 'locations_image' )['url']; ?>" class="lazy" alt="">
                </picture>
            </div>
        </div>
    </div>
    <div class="pricing-partners">
        <div class="container">
            <span class="pricing-partners__title"><?php the_field( 'brands_title' ); ?></span>
            <?php $brands = get_field( 'about_brands' ); ?>
            <?php if( ! empty( $brands ) ): ?>
            <div class="pricing-partners__wrapper">
                <?php foreach( $brands as $brand ): ?>
                    <div>
                        <picture>
                            <!--<source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.webp" data-original="<?php /*echo get_template_directory_uri() */?>/images/partners/brand-01.webp"
                                    class="lazy-web" type="image/webp">
                            <source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.png" data-original="<?php /*echo get_template_directory_uri() */?>/images/partners/brand-01.png"
                                    class="lazy-web" type="image/png">-->
                            <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo $brand['url']; ?>" class="lazy" alt="">
                        </picture>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <div class="pricing-partners__subscribe">
                <div class="pricing-partners__subscribe-txt"><?php the_field( 'register_text' ); ?></div>
                <div class="pricing-partners__subscribe-form">
                    <form class="ajax_form" action="">
                        <input class="hidden" type="text" name="request" data-title="Request" value="Subscribe">
                        <input type="text" name="email" data-title="Email" placeholder="Your e-mail" data-validate-email="Wrong email" data-validate-required="Required">
                        <button type="submit" class="btn">Confirm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
