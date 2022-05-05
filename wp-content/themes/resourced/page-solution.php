<?php
/* Template Name: Solution */
get_header(); ?>

<main class="main">
    <div class="solution-main">
        <div class="solution-main-top">
            <div class="container">
                <div class="inner">
                    <div class="text">
                        <span>From idea to product in a breeze</span>
                        <p>Integrated solutions for everyone on your team, from C-suite to manufacturer.</p>
                    </div>
                    <div class="link">
                        <a href="javascript:void(0)" class="popup-btn" data-mfp-src="#demo-popup"
                           data-effect="mfp-zoom-in">Request a demo</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="solution-main-bot">
            <div class="inner">
                <div class="container">
                    <div class="pic">
                        <video class="main-video" muted="" loop="" autoplay="">
                            <source src="<?php echo get_template_directory_uri() ?>/images/video/solution-video.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="solution-complete">
        <div class="solution-complete__wrapper">
        <span class="solution-complete__title">
          Everything you need at your fingertips
        </span>
            <b class="solution-complete__subtitle">A platform that performs</b>
            <div class="solution-complete-items">
                <div class="solution-complete-item">
                    <div class="solution-complete-item__inner">
                        <div class="text">
                            <span>Create products</span>
                            <p>The intuitive interface allows product creation at your own pace. Add colorways and materials while
                                building your
                                product. Don’t worry about creating article numbers or EAN codes—they’re handled in the background.
                            </p>
                        </div>
                    </div>
                    <div class="solution-complete-item__inner pic">
                        <div class="pic">
                            <img src="<?php echo get_template_directory_uri() ?>/images/solution-01.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="solution-complete-item">
                    <div class="solution-complete-item__inner pic">
                        <div class="pic">
                            <img src="<?php echo get_template_directory_uri() ?>/images/solution-02.svg" alt="">
                        </div>
                    </div>
                    <div class="solution-complete-item__inner">
                        <div class="text">
                            <span>Component transparency</span>
                            <p>While creating your bill of materials you're also automatically building your component library to
                                keep track of each
                                component used for complete transparency.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="solution-complete-item">
                    <div class="solution-complete-item__inner">
                        <div class="text">
                            <span>Tech packs* </span>
                            <p>Creating a full tech pack has never been easier: it’s directly integrated into a sample request.
                            </p>
                        </div>
                    </div>
                    <div class="solution-complete-item__inner pic">
                        <div class="pic">
                            <img src="<?php echo get_template_directory_uri() ?>/images/solution-03.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="solution-complete-item">
                    <div class="solution-complete-item__inner pic">
                        <div class="pic">
                            <img src="<?php echo get_template_directory_uri() ?>/images/solution-04.svg" alt="">
                        </div>
                    </div>
                    <div class="solution-complete-item__inner">
                        <div class="text">
                            <span>Sample management*</span>
                            <p>Follow all pending prototypes, from single samples to fully graded sets.. Monitor standards, track status and make comments on samples to clearly direct suppliers on next steps.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="solution-complete-item solution-started">
                    <span>Get started with Resourced</span>
                    <p>Move your job forward and unleash the potential of your idea</p>
                    <a href="javascript:void(0)" class="btn popup-btn" data-mfp-src="#signup-popup"
                       data-effect="mfp-zoom-in">Get
                        started</a>
                    <small>No credit card needed.</small>
                </div>

                <div class="solution-complete-item">
                    <div class="solution-complete-item__inner">
                        <div class="text">
                            <span>Pricing clarity*</span>
                            <p>See individual pricing for components, consumption, labor cost, packaging, factory profit, transport and more ensure your costing calculations are managed at every level.
                            </p>
                        </div>
                    </div>
                    <div class="solution-complete-item__inner pic">
                        <div class="pic">
                            <img src="<?php echo get_template_directory_uri() ?>/images/solution-05.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="solution-complete-item">
                    <div class="solution-complete-item__inner pic">
                        <div class="pic">
                            <img src="<?php echo get_template_directory_uri() ?>/images/solution-06.svg" alt="">
                        </div>
                    </div>
                    <div class="solution-complete-item__inner">
                        <div class="text">
                            <span>Collection planning*</span>
                            <p>The intuitive visual interface allows you to sort, filter, drag and drop your collection to fit your
                                vision and timeline. Proactive scheduling suggests timelines based on product data.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="solution-complete-item">
                    <div class="solution-complete-item__inner">
                        <div class="text">
                            <span>Quantify, plan & place orders*</span>
                            <p>Clear, confirmed delivery dates from suppliers ensure your planned quantities become actual orders. On-time delivery is monitored and saved continuously.                </p>
                        </div>
                    </div>
                    <div class="solution-complete-item__inner pic">
                        <div class="pic">
                            <img src="<?php echo get_template_directory_uri() ?>/images/solution-07.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="solution-complete-item">
                    <div class="solution-complete-item__inner pic">
                        <div class="pic">
                            <img src="<?php echo get_template_directory_uri() ?>/images/solution-08.svg" alt="">
                        </div>
                    </div>
                    <div class="solution-complete-item__inner">
                        <div class="text">
                            <span>Monitor production*</span>
                            <p>Let suppliers help get you in control. Tracking numbers, dates for order placement, and supplier sample comments are just some of the ways you and your supplier can reduce timelines and mistakes for successful deliveries.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="solution-complete__footnote">*Soon to be released features </div>
        </div>
    </div>

    <?php do_shortcode('[subscribe]'); ?>
</main>

<?php get_footer(); ?>

<div class="mfp-hide">
    <div class="demo-popup mfp-with-anim" id="demo-popup">
        <form action="https://triplefork.com.ua/test.php" class="contact-form ajax_form" data-error-title="Error!"
              data-error-message="Try again later" data-success-title="Thank you"
              data-success-message="We´ll get back to you with an update shortly." data-close="Close">
            <div class="contact-form__inner">
                <span class="contact-form__title">Schedule a demo!</span>
                <div class="demo-popup__descr">
                    <p>
                        We’ll be happy to schedule a demo so you can get to know more about Resourced.</p>
                </div>
                <div class="input-wrapper">
                    <input class="input" name="name" placeholder="Rogie" data-title="Name and surname"
                           data-validate-required="Required!">
                    <label>Name <span>*</span></label>
                </div>
                <div class="input-wrapper">
                    <input class="input" name="email" placeholder="E-mail" data-title="Email" data-validate-required="Required!"
                           data-validate-email="Please use valid e-mail adress">
                    <label>Work e-mail <span>*</span></label>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M20 4.00302H4C2.9 4.00302 2.01 4.90302 2.01 6.00302L2 18.003C2 19.103 2.9 20.003 4 20.003H20C21.1 20.003 22 19.103 22 18.003V6.00302C22 4.90302 21.1 4.00302 20 4.00302ZM20 17.003C20 17.553 19.55 18.003 19 18.003H5C4.45 18.003 4 17.553 4 17.003V8.00302L10.94 12.343C11.59 12.753 12.41 12.753 13.06 12.343L20 8.00302V17.003ZM4 6.00302L12 11.003L20 6.00302H4Z"
                              fill="#7040FF" />
                    </svg>
                </div>
                <div class="input-wrapper">
                    <input class="input" name="phone" placeholder="+46 - 0743943943" data-title="Phone"
                           data-validate-required="Required!">
                    <label>Cell phone <span>*</span></label>
                </div>
                <button type="submit" class="btn">Submit request</button>
                <div class="demo-popup__footnote">By pressing “Sign up” you agree to our <a href="javascript:void(0)">terms &
                        conditions</a></div>
            </div>
        </form>
    </div>
</div>