<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-6">
                <div class="footer-left">
                    <div class="footer-logo">
                        <?php if(!is_front_page()): ?>
                            <a href="/">
                                <img src="<?php echo get_template_directory_uri() ?>/images/pixel.jpg" data-original="<?php echo get_template_directory_uri() ?>/images/logo-footer.svg" class="lazy" alt="">
                            </a>
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri() ?>/images/pixel.jpg" data-original="<?php echo get_template_directory_uri() ?>/images/logo-footer.svg" class="lazy" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="footer-social">
                        <?php if(!empty(get_field('facebook', 'option'))): ?>
                        <a href="<?php the_field('facebook', 'option'); ?>">
                            <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 0H8C6.67392 0 5.40215 0.526784 4.46447 1.46447C3.52678 2.40215 3 3.67392 3 5V8H0V12H3V20H7V12H10L11 8H7V5C7 4.73478 7.10536 4.48043 7.29289 4.29289C7.48043 4.10536 7.73478 4 8 4H11V0Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <?php endif; ?>
                        <?php if(!empty(get_field('linkedin', 'option'))): ?>
                        <a href="<?php the_field('linkedin', 'option'); ?>">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 8C17.5913 8 19.1174 8.63214 20.2426 9.75736C21.3679 10.8826 22 12.4087 22 14V21H18V14C18 13.4696 17.7893 12.9609 17.4142 12.5858C17.0391 12.2107 16.5304 12 16 12C15.4696 12 14.9609 12.2107 14.5858 12.5858C14.2107 12.9609 14 13.4696 14 14V21H10V14C10 12.4087 10.6321 10.8826 11.7574 9.75736C12.8826 8.63214 14.4087 8 16 8V8Z"
                                    fill="white" />
                                <path d="M6 9H2V21H6V9Z" fill="white" />
                                <path
                                    d="M4 6C5.10457 6 6 5.10457 6 4C6 2.89543 5.10457 2 4 2C2.89543 2 2 2.89543 2 4C2 5.10457 2.89543 6 4 6Z"
                                    fill="white" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <?php endif; ?>
                    </div>
                    <span>© <?php echo date('Y'); ?> <?php echo get_field('copyright', 'option')['line1']; ?></span>
                    <span><?php echo get_field('copyright', 'option')['line2']; ?></span>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="footer-col">
                    <?php $footer_menu1 = wp_get_nav_menu_object(res_get_menu_id('footer-menu1') ); ?>
                    <span><?php echo esc_html($footer_menu1->name)?></span>
                    <?php
                    wp_nav_menu( [
                        'theme_location' => 'footer-menu1',
                    ] );
                    ?>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="footer-col">
                    <?php $footer_menu2 = wp_get_nav_menu_object(res_get_menu_id('footer-menu2') ); ?>
                    <span><?php echo esc_html($footer_menu2->name)?></span>
                    <?php
                    wp_nav_menu( [
                        'theme_location' => 'footer-menu2',
                    ] );
                    ?>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="footer-col">
                    <?php $footer_menu3 = wp_get_nav_menu_object(res_get_menu_id('footer-menu3') ); ?>
                    <span><?php echo esc_html($footer_menu3->name)?></span>
                    <?php
                    wp_nav_menu( [
                        'theme_location' => 'footer-menu3',
                    ] );
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="mfp-hide">
    <div class="signup-popup mfp-with-anim" id="signup-popup">
        <button title="Close (Esc)" type="button" class="mfp-close">
            <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 0.785797L1 9.94557" stroke="#DFDFDF" />
                <path d="M11.011 9.93563L0.989281 0.795776" stroke="#DFDFDF" />
            </svg>
        </button>
        <span class="signup-popup__title">Full launch coming soon</span>
        <span class="signup-popup__subtitle">Sign up and we’ll be in touch to see if early access is right for your
      team.</span>
        <!-- <div class="signup-popup__descr">
          <p>We will gradually let new brands in to ensure a good onboarding.</p>
          <p>To get access please let us your details below and we´ll get in touch</p>
        </div> -->
        <div class="signup-popup__main">
            <div class="signup-popup__left">
                <div class="signup-popup__info">
                    <div class="signup-popup__img">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.webp" data-original="<?php echo get_template_directory_uri() ?>/images/popup-pic.webp" class="lazy-web"
                                    type="image/webp">
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/popup-pic.png" class="lazy-web"
                                    type="image/png">
                            <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/popup-pic.png" class="lazy" alt="">
                        </picture>
                    </div>
                    <span class="signup-popup__info-text">Ready to fall in love with picking colors?</span>
                </div>
            </div>
            <form class="signup-popup__form ajax_form" data-error-title="Error!" data-error-message="Try again later"
                  data-success-title="Thank you" data-success-message="We’ll be in touch with an update shortly.">
                <div class="signup-popup__form-inner">
                    <div class="input-wrapper">
                        <label>Your Name</label>
                        <input class="input" name="name" placeholder="Elias Gröndal" data-title="Name"
                               data-validate-required="Required!">
                    </div>
                    <div class="input-wrapper">
                        <label>Work email</label>
                        <input class="input" name="email" placeholder="elias@resourced.com" data-title="Email"
                               data-validate-required="Required!" data-validate-email="Please use valid e-mail adress">
                    </div>
                    <div class="input-wrapper">
                        <label>Phone number</label>
                        <input class="input" name="phone" placeholder="Resourced" data-title="Phone"
                               data-validate-required="Required!">
                    </div>
                    <button type="submit">Sign me up</button>
                </div>
            </form>
        </div>
        <div class="signup-popup__footnote">By pressing “Sign me up” you agree to our <a href="javascript:void(0)">terms &
                conditions</a></div>
    </div>
</div>


<?php wp_footer(); ?>
</body>

</html>
