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
                <div class="main-content-about col-md-5 col-lg-4">
                    <span>The way to&nbsp;develop products for modern brands</span>
                    <p>Start focusing on the product, not excel management.</p>
                    <a class="btn" href="javascript:void(0)">Show me how</a>
                </div>
                <div class="main-content-pic col-md-7 col-lg-8">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.webp" data-original="<?php echo get_template_directory_uri() ?>/images/main-pic.webp" class="lazy-web"
                                type="image/webp">
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.jpg" data-original="<?php echo get_template_directory_uri() ?>/images/main-pic.jpg" class="lazy-web"
                                type="image/jpg">
                        <img src="<?php echo get_template_directory_uri() ?>/images/pixel.jpg" data-original="<?php echo get_template_directory_uri() ?>/images/main-pic.jpg" class="lazy" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
    <div class="section partners-section">
        <div class="container">
            <ul>
                <li>
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.webp" data-original="<?php echo get_template_directory_uri() ?>/images/partners/partners-01.webp"
                                class="lazy-web" type="image/webp">
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/partners/partners-01.png"
                                class="lazy-web" type="image/png">
                        <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/partners/partners-01.png" class="lazy"
                             alt="">
                    </picture>
                </li>
                <li>
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.webp" data-original="<?php echo get_template_directory_uri() ?>/images/partners/partners-02.webp"
                                class="lazy-web" type="image/webp">
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/partners/partners-02.png"
                                class="lazy-web" type="image/png">
                        <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/partners/partners-02.png" class="lazy"
                             alt="">
                    </picture>
                </li>
                <li>
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.webp" data-original="<?php echo get_template_directory_uri() ?>/images/partners/partners-03.webp"
                                class="lazy-web" type="image/webp">
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/partners/partners-03.png"
                                class="lazy-web" type="image/png">
                        <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/partners/partners-03.png" class="lazy"
                             alt="">
                    </picture>
                </li>
                <li>
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.webp" data-original="<?php echo get_template_directory_uri() ?>/images/partners/partners-04.webp"
                                class="lazy-web" type="image/webp">
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/partners/partners-04.png"
                                class="lazy-web" type="image/png">
                        <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/partners/partners-04.png" class="lazy"
                             alt="">
                    </picture>
                </li>
            </ul>
        </div>

    </div>
    <div class="section idea-section">
        <div class="container">
            <div class="idea-top">
                <h2>From idea to product in a nice breeze</h2>
                <span>A complete process to build a product</span>
            </div>
            <div class="idea-inner">
                <div class="idea-slider-wrapper">
                    <div class="idea-slider-path slick-slider" data-slick='{
              "slidesToShow": 4, "slidesToScroll": 1,"arrows": false, "dots": false, "infinite": true,"asNavFor": ".idea-slider-step", "focusOnSelect": true, "autoplay": true, "autoplaySpeed": 4000,
						 "responsive": [ {"breakpoint":992, "settings": {"slidesToShow": 2}},  
                  {"breakpoint":860, "settings": {"slidesToShow": 2}},
                  {"breakpoint":576, "settings": {"slidesToShow": 1}} ]}'>
                        <div class="slide">
                            <div class="slide-pic">
                                <img src="<?php echo get_template_directory_uri() ?>/images/idea-01.svg" alt="">
                            </div>
                            <span class="slide-name">Idea</span>
                        </div>
                        <div class="slide">
                            <div class="slide-pic">
                                <img src="<?php echo get_template_directory_uri() ?>/images/idea-02.svg" alt="">
                            </div>
                            <span class="slide-name">In development</span>
                        </div>
                        <div class="slide">
                            <div class="slide-pic">
                                <img src="<?php echo get_template_directory_uri() ?>/images/idea-03.svg" alt="">
                            </div>
                            <span class="slide-name">Ready to order</span>
                        </div>
                        <div class="slide slide-last">
                            <div class="slide-pic">
                                <img src="<?php echo get_template_directory_uri() ?>/images/idea-04.svg" alt="">
                            </div>
                            <span class="slide-name">Shipment</span>
                        </div>
                    </div>
                </div>
                <div class="idea-slider-wrapper">
                    <div class="idea-slider-step slick-slider" data-slick='{
              "slidesToShow": 1, "slidesToScroll": 1,"arrows": false, "dots": false, "infinite": true, "asNavFor": ".idea-slider-path", "fade": true, "focusOnSelect": true, "autoplay": true, "autoplaySpeed": 4000
            }'>
                        <div class="slide">
                            <div class="slide-about">
                                <span>Refine gradually</span>
                                <p>
                                    As ideas grow step-by-step Resourced invites you to a flexible approach where you add info in your
                                    pace.
                                </p>
                                <p>We´ve killed mandatory field filling.</p>
                            </div>
                            <div class="slide-pic">
                                <img src="<?php echo get_template_directory_uri() ?>/images/pic-01.svg" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide-about">
                                <span>Furthering your products</span>
                                <p>Get out there, engage with suppliers and define your product.</p>
                                <p>You can count on Resourced to keep track of timelines, comments, notes and documents and always
                                    keep them close.</p>
                            </div>
                            <div class="slide-pic">
                                <img src="<?php echo get_template_directory_uri() ?>/images/pic-02.svg" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide-about">
                                <span>Specs made easy</span>
                                <p>Ever dreamt of being able to consistently specify what you´ve decided to order.</p>
                                <p>Bill of Material, material library, costing, planning and order placement at your finger tips.</p>
                            </div>
                            <div class="slide-pic">
                                <img src="<?php echo get_template_directory_uri() ?>/images/pic-03.svg" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide-about">
                                <span>Production transparency</span>
                                <p>Gone are the days of placing an order and hoping for it to be shipped as agreed.</p>
                                <p>By smart, yet straight forward, chain of communication and supplier involvement your whole team
                                    will have full insight in the production status (and much more).</p>
                            </div>
                            <div class="slide-pic">
                                <img src="<?php echo get_template_directory_uri() ?>/images/pic-04.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section developers-section">
        <div class="container">
            <div class="developers-top">
                <h2>Built for product developers</h2>
                <p>not CFOs (but they still love it)</p>
            </div>
            <div class="developers-mid row">
                <div class="col-md-6">
                    <p>Knowing <b>the pains</b> of stiff, heavy IT blockers. That’s forcing you to a working method limiting you
                        by
                        <b>locking down</b> to ensure process compliance where control is the best form of trust.
                    </p>
                    <p><b>That’s not fun.</b></p>
                </div>
                <div class="col-md-6">
                    <p>Knowing <span>the gains</span> of flexible lightweight IT support. We’re Inviting you to a flexible set
                        up enabling
                        and transparently
                        <span>opening up</span> opportunities to manage your products. Trust creates the best form of Control.
                    </p>
                    <p><span>That’s fun.</span></p>
                </div>
            </div>
            <div class="developers-bot">
                <span>This is why we created Resourced are you ready to join?</span>
                <a href="javascript:void(0)" class="btn popup-btn" data-mfp-src="#signup-popup" data-effect="mfp-zoom-in">Get started</a>
            </div>
        </div>
    </div>
    <div class="section review-section">
        <div class="container">
            <div class="review-slider slick-slider" data-slick='{
              "slidesToShow": 1, "slidesToScroll": 1,"arrows": false, "autoplay": true, "dots": true, "adaptiveHeight": true, "infinite": true, "fade": true, "focusOnSelect": true, "autoplaySpeed": 3000
            }'>
                <div class="slide">
                    <div class="slide-img">
                        <div>
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.webp" data-original="<?php echo get_template_directory_uri() ?>/images/review-person.webp"
                                        class="lazy-web" type="image/webp">
                                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.jpg" data-original="<?php echo get_template_directory_uri() ?>/images/review-person.jpg"
                                        class="lazy-web" type="image/jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/images/pixel.jpg" data-original="<?php echo get_template_directory_uri() ?>/images/review-person.jpg" class="lazy" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="slide-text">
                        <p>"I used to spend hours writing creative copy, but now all I do is tell Resourced what I need and it
                            writes everything
                            for me. It's the ultimate AI content writer, and a must-have tool for bloggers, marketers, &
                            entrepreneurs."</p>
                        <div class="slide-text-author">
                            <span>Meri Pipenbaher</span>
                            <span>Founder, Vidly</span>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img">
                        <div>
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.webp" data-original="<?php echo get_template_directory_uri() ?>/images/review-person.webp"
                                        class="lazy-web" type="image/webp">
                                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.jpg" data-original="<?php echo get_template_directory_uri() ?>/images/review-person.jpg"
                                        class="lazy-web" type="image/jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/images/pixel.jpg" data-original="<?php echo get_template_directory_uri() ?>/images/review-person.jpg" class="lazy" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="slide-text">
                        <p>"I used to spend hours writing creative copy"</p>
                        <div class="slide-text-author">
                            <span>Meri Pipenbaher</span>
                            <span>Founder, Vidly</span>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img">
                        <div>
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.webp" data-original="<?php echo get_template_directory_uri() ?>/images/review-person.webp"
                                        class="lazy-web" type="image/webp">
                                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.jpg" data-original="<?php echo get_template_directory_uri() ?>/images/review-person.jpg"
                                        class="lazy-web" type="image/jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/images/pixel.jpg" data-original="<?php echo get_template_directory_uri() ?>/images/review-person.jpg" class="lazy" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="slide-text">
                        <p>"I used to spend hours writing creative copy, but now all I do is tell Resourced what I need and it
                            writes everything
                            for me. It's the ultimate AI content writer, and a must-have tool for bloggers, marketers, &
                            entrepreneurs."</p>
                        <div class="slide-text-author">
                            <span>Meri Pipenbaher</span>
                            <span>Founder, Vidly</span>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img">
                        <div>
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.webp" data-original="<?php echo get_template_directory_uri() ?>/images/review-person.webp"
                                        class="lazy-web" type="image/webp">
                                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.jpg" data-original="<?php echo get_template_directory_uri() ?>/images/review-person.jpg"
                                        class="lazy-web" type="image/jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/images/pixel.jpg" data-original="<?php echo get_template_directory_uri() ?>/images/review-person.jpg" class="lazy" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="slide-text">
                        <p>"I used to spend hours writing creative copy, but now all I do is tell Resourced what I need and it
                            writes everything
                            for me. It's the ultimate AI content writer, and a must-have tool for bloggers, marketers, &
                            entrepreneurs."</p>
                        <div class="slide-text-author">
                            <span>Meri Pipenbaher</span>
                            <span>Founder, Vidly</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section library-section">
        <div class="library-bg">
            <img src="<?php echo get_template_directory_uri() ?>/images/qw.svg" alt="">
            <div class="library-items">
                <div class="centra">
            <span>
              <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.webp" data-original="<?php echo get_template_directory_uri() ?>/images/orbits/orbits-centra.webp"
                        class="lazy-web" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/orbits/orbits-centra.png"
                        class="lazy-web" type="image/png">
                <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/orbits/orbits-centra.png" class="lazy"
                     alt="">
              </picture>
            </span>
                </div>
                <div class="ms">
            <span>
              <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.webp" data-original="<?php echo get_template_directory_uri() ?>/images/orbits/orbits-ms.webp"
                        class="lazy-web" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/orbits/orbits-ms.png"
                        class="lazy-web" type="image/png">
                <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/orbits/orbits-ms.png" class="lazy" alt="">
              </picture>
            </span>
                </div>
                <div class="sap">
            <span>
              <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.webp" data-original="<?php echo get_template_directory_uri() ?>/images/orbits/orbits-sap.webp"
                        class="lazy-web" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/orbits/orbits-sap.png"
                        class="lazy-web" type="image/png">
                <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/orbits/orbits-sap.png" class="lazy"
                     alt="">
              </picture>
            </span>
                </div>
            </div>
            <div class="library-items library-items__sm">
                <div class="shopify">
            <span>
              <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.webp" data-original="<?php echo get_template_directory_uri() ?>/images/orbits/orbits-shopify.webp"
                        class="lazy-web" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/orbits/orbits-shopify.png"
                        class="lazy-web" type="image/png">
                <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/orbits/orbits-shopify.png" class="lazy"
                     alt="">
              </picture>
            </span>
                </div>
                <div class="madden">
            <span>
              <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.webp" data-original="<?php echo get_template_directory_uri() ?>/images/orbits/orbits-madden.webp"
                        class="lazy-web" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/orbits/orbits-madden.png"
                        class="lazy-web" type="image/png">
                <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/orbits/orbits-madden.png" class="lazy"
                     alt="">
              </picture>
            </span>
                </div>
                <div class="b-come">
            <span>
              <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.webp" data-original="<?php echo get_template_directory_uri() ?>/images/orbits/orbits-b-come.webp"
                        class="lazy-web" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/orbits/orbits-b-come.png"
                        class="lazy-web" type="image/png">
                <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/orbits/orbits-b-come.png" class="lazy"
                     alt="">
              </picture>
            </span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="library-inner">
                <p>
                    Connect to a library of pre-built integrations to some of the bigger eCommerce and ERP solutions.
                </p>
                <a href="javascript:void(0)" class="btn popup-btn" data-mfp-src="#signup-popup" data-effect="mfp-zoom-in">Get started</a>
            </div>
        </div>
        <span>Or if you’re that person – just do a classic all-info Excel export</span>
    </div>
</main>

<?php get_footer(); ?>
