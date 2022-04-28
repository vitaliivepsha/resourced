<?php
/* Template Name: Main */
get_header(); ?>

<main class="main">
    <div class="section main-section">
        <picture>
            <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.webp" data-original="<?php echo get_template_directory_uri() ?>/images/bg-main.webp" class="lazy-web"
                    type="image/webp">
            <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/bg-main.png" class="lazy-web"
                    type="image/png">
            <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/bg-main.png" class="lazy" alt="">
        </picture>
        <div class="container">
            <div class="main-content row">
                <div class="main-content-about col-md-12 col-lg-4">
                    <span><?php the_field('main_title'); ?></span>
                    <p><?php the_field('main_subtitle'); ?></p>
                    <a class="btn" href="<?php the_field('main_button'); ?>">Show me how</a>
                </div>
                <div class="main-content-pic col-md-12 col-lg-8">
                    <video class="main-video" muted="" loop="" autoplay="">
                        <source src="<?php echo get_field('main_video')['url']; ?>" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
    <?php $brands = get_field('brands'); ?>
    <?php if( ! empty( $brands ) ): ?>
        <div class="section partners-section">
            <div class="container">
                <ul>
                    <?php foreach( $brands as $brand ): ?>
                        <li>
                            <picture>
                                <!--<source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.webp" data-original="<?php /*echo get_template_directory_uri() */?>/images/partners/partners-01.webp"
                                        class="lazy-web" type="image/webp">
                                <source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.png" data-original="<?php /*echo get_template_directory_uri() */?>/images/partners/partners-01.png"
                                        class="lazy-web" type="image/png">-->
                                <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo $brand['url'] ?>" class="lazy"
                                     alt="">
                            </picture>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
    <div class="section idea-section">
        <div class="container">
            <div class="idea-top">
                <h2><?php the_field('prod_title'); ?></h2>
                <span><?php the_field('prod_subtitle'); ?></span>
            </div>
            <?php $steps = get_field('prod_process'); ?>
            <?php if( ! empty( $steps ) ): ?>
                <div class="idea-inner">
                    <div class="idea-slider-wrapper">
                        <div class="idea-slider-path slick-slider" data-slick='{
                  "slidesToShow": 4, "slidesToScroll": 1,"arrows": false, "dots": false, "infinite": true,"asNavFor": ".idea-slider-step", "focusOnSelect": true, "autoplay": true, "autoplaySpeed": 3000,
                             "responsive": [ {"breakpoint":992, "settings": {"slidesToShow": 2}},
                      {"breakpoint":860, "settings": {"slidesToShow": 2}},
                      {"breakpoint":576, "settings": {"slidesToShow": 1}} ]}'>
                            <?php foreach( $steps as $i=>$step ): ?>
                                <div class="slide<?php echo $i == (count( $steps ) - 1) ? ' slide-last' : '' ?>">
                                    <div class="slide-pic">
                                        <img src="<?php echo $step['step']['icon']['url']; ?>" alt="">
                                    </div>
                                    <span class="slide-name"><?php echo $step['step']['name']; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="idea-slider-wrapper">
                        <div class="idea-slider-step slick-slider" data-slick='{
                  "slidesToShow": 1, "slidesToScroll": 1,"arrows": false, "dots": false, "infinite": true, "asNavFor": ".idea-slider-path", "fade": true, "focusOnSelect": true, "autoplay": true, "autoplaySpeed": 3000
                }'>
                            <?php foreach( $steps as $i=>$step ): ?>
                                <div class="slide">
                                    <div class="slide-about">
                                        <span><?php echo $step['step']['title']; ?></span>
                                        <?php echo $step['step']['text']; ?>
                                    </div>
                                    <div class="slide-pic">
                                        <img src="<?php echo $step['step']['image']['url']; ?>" alt="">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="section developers-section">
        <div class="container">
            <div class="developers-top">
                <h2><?php the_field('get_title'); ?></h2>
                <p><?php the_field('get_subtitle'); ?></p>
            </div>
            <div class="developers-mid">
                <p>
                    <?php the_field('get_textarea'); ?>
                </p>
            </div>
            <div class="developers-bot">
                <span><?php the_field('get_button_title');?></span>
                <a href="javascript:void(0)" class="btn popup-btn" data-mfp-src="#signup-popup" data-effect="mfp-zoom-in">Get started</a>
            </div>
        </div>
    </div>

    <?php $testimonials = get_field('testimonials'); ?>
    <?php if( ! empty( $testimonials ) ): ?>
        <div class="section review-section">
            <!-- "autoplay": true, -->
            <div class="container">
                <div class="review-slider slick-slider" data-slick='{
                  "slidesToShow": 1, "slidesToScroll": 1,"arrows": false, "dots": true, "adaptiveHeight": true, "infinite": true, "fade": true, "focusOnSelect": true, "autoplaySpeed": 3000
                }'>
                    <?php foreach( $testimonials as $testimonial ): ?>
                        <div class="slide">
                            <div class="slide-img">
                                <div>
                                    <picture>
                                        <!--<source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.webp" data-original="<?php /*echo get_template_directory_uri() */?>/images/review-person.webp"
                                                class="lazy-web" type="image/webp">
                                        <source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.jpg" data-original="<?php /*echo get_template_directory_uri() */?>/images/review-person.jpg"
                                                class="lazy-web" type="image/jpg">-->
                                        <img src="<?php echo get_template_directory_uri() ?>/images/pixel.jpg" data-original="<?php echo $testimonial['photo']['url']; ?>" class="lazy" alt="">
                                    </picture>
                                </div>
                            </div>
                            <div class="slide-text">
                                <div class="slide-text-logo">
                                    <picture>
                                        <!--<source srcset="../../images/pixel.webp" data-original="../../images/review-slide-logo-01.webp"
                                                class="lazy-web" type="image/webp">
                                        <source srcset="../../images/pixel.png" data-original="../../images/review-slide-logo-01.png"
                                                class="lazy-web" type="image/png">-->
                                        <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo $testimonial['logo']['url']; ?>" class="lazy"
                                             alt="">
                                    </picture>
                                </div>
                                <p><?php echo $testimonial['text']; ?></p>
                                <div class="slide-text-author">
                                    <span><?php echo $testimonial['name']; ?></span>
                                    <span><?php echo $testimonial['info']; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="section library-section">
        <?php $circle = get_field('sol_circle', 'option'); ?>
        <?php if( ! empty( $circle ) ): ?>
            <div class="library-bg">
                <img src="<?php echo get_template_directory_uri() ?>/images/qw.svg" alt="">
                <div class="library-items">
                    <div class="centra">
                        <span>
                          <picture>
                            <!--<source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.webp" data-original="<?php /*echo get_template_directory_uri() */?>/images/orbits/orbits-centra.webp"
                                    class="lazy-web" type="image/webp">
                            <source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.png" data-original="<?php /*echo get_template_directory_uri() */?>/images/orbits/orbits-centra.png"
                                    class="lazy-web" type="image/png">-->
                            <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo $circle['outer']['outer_1']['url']; ?>" class="lazy"
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
                            <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo $circle['outer']['outer_2']['url']; ?>" class="lazy" alt="">
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
                    <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo $circle['outer']['outer_3']['url']; ?>" class="lazy"
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
                            <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo $circle['inner']['inner_1']['url']; ?>" class="lazy"
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
                            <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo $circle['inner']['inner_2']['url']; ?>" class="lazy"
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
                    <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo $circle['inner']['inner_3']['url']; ?>" class="lazy"
                         alt="">
                  </picture>
                </span>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="library-inner">
                <p>
                    <?php the_field('sol_title', 'option'); ?>
                </p>
                <a href="javascript:void(0)" class="btn popup-btn" data-mfp-src="#signup-popup" data-effect="mfp-zoom-in">Get started</a>
            </div>
        </div>
        <span><?php the_field('sol_text', 'option'); ?></span>
    </div>
</main>

<?php get_footer(); ?>
