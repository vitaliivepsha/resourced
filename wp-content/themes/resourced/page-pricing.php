<?php
/* Template Name: Pricing */
get_header(null, ['class' => 'header__pricing', 'logo_class' => 'logo-white']);

$plan1 = get_field('pricing_plan_1');
$plan2 = get_field('pricing_plan_2');
$plan3 = get_field('pricing_plan_3');
$plan4 = get_field('pricing_plan_4');

?>

<main class="main">
    <div class="pricing-main">
        <div class="pricing-main__top">
            <div class="container">
                <div class="pricing-main__title"><?php the_field('pricing_title'); ?></div>
                <span class="pricing-main__descr"><?php the_field('pricing_subtitle'); ?></span>
                <div class="row pricing-plans">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="pricing-plan plan1">
                            <div>
                                <div class="title"><?php echo $plan1['name']; ?></div>
                                <div class="price">
                                    €<?php echo $plan1['price']; ?> <span>per month</span>
                                </div>
                                <div class="descr"><?php echo $plan1['descr']; ?></div>
                            </div>
                            <div>
                                <?php if(!empty($plan1['details'])): ?>
                                <ul class="list">
                                    <?php foreach($plan1['details'] as $row): ?>
                                        <li>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="8" cy="8" r="7.25" stroke="#979797" stroke-width="1.5" />
                                                <path d="M12 5L6.5 10L4 7.72727" stroke="#979797" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                            </svg>
                                            <?php echo $row['detail'];?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                                <div class="btn popup-btn" data-mfp-src="#signup-popup" data-effect="mfp-zoom-in">Sign Up Free</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="pricing-plan plan2">
                            <div>
                                <div class="title"><?php echo $plan2['name']; ?></div>
                                <div class="price">
                                    €<?php echo $plan2['price']; ?> <span>per month</span>
                                </div>
                                <div class="descr"><?php echo $plan2['descr']; ?></div>
                            </div>
                            <div>
                                <?php if(!empty($plan2['details'])): ?>
                                <ul class="list">
                                    <?php foreach($plan2['details'] as $row): ?>
                                    <li>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="7.25" stroke="#65CED6" stroke-width="1.5" />
                                            <path d="M12 5L6.5 10L4 7.72727" stroke="#65CED6" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round" />
                                        </svg>
                                        <?php echo $row['detail'];?>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                                <div class="btn popup-btn" data-mfp-src="#signup-popup" data-effect="mfp-zoom-in">Sign Up</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="pricing-plan plan3">
                            <div>
                                <div class="title"><?php echo $plan3['name']; ?></div>
                                <div class="price">
                                    €<?php echo $plan3['price']; ?> <span>per month</span>
                                </div>
                                <div class="descr"><?php echo $plan3['descr']; ?></div>
                            </div>
                            <div>
                                <?php if(!empty($plan3['details'])): ?>
                                <ul class="list">
                                <?php foreach($plan3['details'] as $row): ?>
                                    <li>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="7.25" stroke="#2576BC" stroke-width="1.5" />
                                            <path d="M12 5L6.5 10L4 7.72727" stroke="#2576BC" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round" />
                                        </svg>
                                        <?php echo $row['detail'];?>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                                <div class="btn popup-btn" data-mfp-src="#signup-popup" data-effect="mfp-zoom-in">Sign Up</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="pricing-plan plan4">
                            <div>
                                <div class="title"><?php echo $plan4['name']; ?></div>
                                <div class="price">
                                    €<?php echo $plan4['price']; ?> <span>per month</span>
                                </div>
                                <div class="descr"><?php echo $plan4['descr']; ?></div>
                            </div>
                            <div>
                                <?php if(!empty($plan4['details'])): ?>
                                <ul class="list">
                                <?php foreach($plan4['details'] as $row): ?>
                                    <li>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="7.25" stroke="#7040FF" stroke-width="1.5" />
                                            <path d="M12 5L6.5 10L4 7.72727" stroke="#7040FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round" />
                                        </svg>
                                        <?php echo $row['detail'];?>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                                <div class="btn popup-btn" data-mfp-src="#signup-popup" data-effect="mfp-zoom-in">Sign Up</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pricing-main__bot">
            <div class="container">
                <div class="pricing-range__wrapper">
                    <div class="pricing-range__left">
                        <span class="pricing-range__title"><?php the_field('pricing_slider_title'); ?></span>
                        <div class="pricing-range__descr">
                            <?php the_field('pricing_slider_subtitle'); ?>
                        </div>
                    </div>
                    <div class="pricing-range__right">
                        <div class="pricing-range__item">
                            <div class="pricing-range" id="pricing-range1"></div>
                            <div class="pricing-range__visualisation irs--flat">
                  <span class="irs">
                    <span class="irs-line" tabindex="0"></span>
                    <span class="irs-single" style="left: -13.3764%;">... products planned in a year</span>
                  </span>
                                <span class="irs-bar irs-bar--single" style="left: 0px; width: 1.84502%;"></span>
                                <span class="irs-handle single" style="left: 0%;"><i></i><i></i><i></i></span>
                            </div>
                        </div>
                        <div class="pricing-range__item">
                            <div class="pricing-range" id="pricing-range2"></div>
                            <div class="pricing-range__visualisation irs--flat">
                  <span class="irs">
                    <span class="irs-line" tabindex="0"></span>
                    <span class="irs-single" style="left: -13.3764%;">... products planned in a year</span>
                  </span>
                                <span class="irs-bar irs-bar--single" style="left: 0px; width: 1.84502%;"></span>
                                <span class="irs-handle single" style="left: 0%;"><i></i><i></i><i></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pricing-features">
        <div class="container">
            <span class="pricing-features__title"><?php the_field('pricing_cfeatures_title'); ?></span>
            <?php $cfeatures = get_field('pricing_cfeatures'); ?>
            <?php if(!empty($cfeatures)): ?>
            <div class="pricing-features__items">
                <?php foreach($cfeatures as $cfeature): ?>
                    <div class="pricing-features__item">
                        <div>
                            <picture>
                               <!-- <source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.webp" data-original="<?php /*echo get_template_directory_uri() */?>/images/icons/fp1.webp" class="lazy-web"
                                        type="image/webp">
                                <source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.png" data-original="<?php /*echo get_template_directory_uri() */?>/images/icons/fp1.png" class="lazy-web"
                                        type="image/png">-->
                                <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo $cfeature['image']['url']; ?>" class="lazy" alt="">
                            </picture>
                        </div>
                        <span><?php echo $cfeature['name']; ?></span>
                        <p><?php echo $cfeature['descr']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <div class="pricing-features__table-wrapper">
                <span class="pricing-features__title"><?php the_field('pricing_features_title'); ?></span>
                <?php $features = get_field('pricing_features'); ?>
                <div class="pricing-features__table-inner">
                    <?php foreach($features as $i=>$feature_category): ?>
                        <div class="pricing-features__table">
                            <div class="pricing-features__table-head">
                                <div class="usage"><?php    echo $feature_category['category']; ?></div>
                                <div class="free"><?php     echo !$i ? $plan1['name'] : ''; ?></div>
                                <div class="startup"><?php  echo !$i ? $plan2['name'] : ''; ?></div>
                                <div class="growth"><?php   echo !$i ? $plan3['name'] : ''; ?></div>
                                <div class="scale_up"><?php echo !$i ? $plan4['name'] : ''; ?></div>
                            </div>
                            <?php foreach($feature_category['features'] as $feature): ?>
                                <div class="pricing-features__table-row">
                                    <div class="usage">
                                        <div class="tootip-wrapper">
                                            <span>
                                              <?php echo $feature['name']; ?>
                                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.0026 14.6666C11.6845 14.6666 14.6693 11.6818 14.6693 7.99992C14.6693 4.31802 11.6845 1.33325 8.0026 1.33325C4.32071 1.33325 1.33594 4.31802 1.33594 7.99992C1.33594 11.6818 4.32071 14.6666 8.0026 14.6666Z"
                                                    stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M6.0625 6.00001C6.21924 5.55446 6.5286 5.17875 6.9358 4.93944C7.343 4.70012 7.82176 4.61264 8.28728 4.69249C8.7528 4.77234 9.17504 5.01436 9.47922 5.3757C9.78339 5.73703 9.94987 6.19436 9.94917 6.66668C9.94917 8.00001 7.94917 8.66668 7.94917 8.66668"
                                                    stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M8 11.3333H8.00667" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                              </svg>
                                            </span>
                                            <div><?php echo $feature['descr']; ?></div>
                                        </div>
                                    </div>
                                    <?php
                                    $plan1_feature = $feature['plan_1']['checkbox'];
                                    if(!empty($plan1_feature)){
                                        $plan1_feature = '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="8" cy="8" r="7.25" stroke="#979797" stroke-width="1.5" />
                                        <path d="M12 5L6.5 10L4 7.72727" stroke="#979797" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                    </svg>';
                                    } else {
                                        $plan1_feature = $feature['plan_1']['text'];
                                    }

                                    $plan2_feature = $feature['plan_2']['checkbox'];
                                    if(!empty($plan2_feature)){
                                        $plan2_feature = ' <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="8" cy="8" r="7.25" stroke="#65CED6" stroke-width="1.5" />
                                        <path d="M12 5L6.5 10L4 7.72727" stroke="#65CED6" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    </svg>';
                                    } else {
                                        $plan2_feature = $feature['plan_2']['text'];
                                    }

                                    $plan3_feature = $feature['plan_3']['checkbox'];
                                    if(!empty($plan3_feature)){
                                        $plan3_feature = ' <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="8" cy="8" r="7.25" stroke="#2576BC" stroke-width="1.5" />
                                        <path d="M12 5L6.5 10L4 7.72727" stroke="#2576BC" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    </svg>';
                                    } else {
                                        $plan3_feature = $feature['plan_3']['text'];
                                    }

                                    $plan4_feature = $feature['plan_4']['checkbox'];
                                    if(!empty($plan4_feature)){
                                        $plan4_feature = '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="8" cy="8" r="7.25" stroke="#5A36C7" stroke-width="1.5" />
                                        <path d="M12 5L6.5 10L4 7.72727" stroke="#5A36C7" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    </svg>';
                                    } else {
                                        $plan4_feature = $feature['plan_4']['text'];
                                    }
                                    ?>
                                    <div class="free"><?php echo $plan1_feature; ?></div>
                                    <div class="startup"><?php echo $plan2_feature; ?></div>
                                    <div class="growth"><?php echo $plan3_feature; ?></div>
                                    <div class="scale_up"><?php echo $plan4_feature; ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                    <div class="pricing-features__table-footer">
                        <div class="usage"></div>
                        <div class="free">
                            <span><?php echo $plan1['name']; ?></span>
                            <div class="btn popup-btn" data-mfp-src="#signup-popup" data-effect="mfp-zoom-in">Sign Up Free</div>
                        </div>
                        <div class="startup">
                            <span><?php echo $plan2['name']; ?></span>
                            <div class="btn popup-btn" data-mfp-src="#signup-popup" data-effect="mfp-zoom-in">Sign Up</div>
                        </div>
                        <div class="growth">
                            <span><?php echo $plan3['name']; ?></span>
                            <div class="btn popup-btn" data-mfp-src="#signup-popup" data-effect="mfp-zoom-in">Sign Up</div>
                        </div>
                        <div class="scale_up">
                            <span><?php echo $plan4['name']; ?></span>
                            <div class="btn popup-btn" data-mfp-src="#signup-popup" data-effect="mfp-zoom-in">Sign Up</div>
                        </div>
                    </div>
                </div>
                <div class="btn pricing-features__btn-expand">Expand all features</div>
                <div class="btn pricing-features__btn-collapse">Collapse features</div>
            </div>
        </div>
    </div>
    <div class="pricing-needs">
        <div class="container">
            <span class="pricing-needs__title"><?php the_field('pricing_enterp_title1'); ?></span>
            <p class="pricing-needs__descr"><?php the_field('pricing_enterp_subtitle1'); ?></p>
            <div class="pricing-needs__wrapper">
                <div class="pricing-needs__txt">
                    <span><?php the_field('pricing_enterp_title2'); ?></span>
                    <p><?php the_field('pricing_enterp_subtitle2'); ?></p>
                    <a href="javascript:void(0)" class="btn">Contact sales</a>
                </div>
                <div class="pricing-needs__pic">
                    <svg width="228" height="215" viewBox="0 0 228 215" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_2750_18279)">
                            <path d="M80.2969 171.764H206.068C208.464 171.764 210.761 172.802 212.455 174.649C214.149 176.495 215.1 179.001 215.1 181.613V200.522H89.3289C86.9335 200.522 84.6361 199.484 82.9423 197.637C81.2485 195.79 80.2969 193.285 80.2969 190.673V171.764Z" fill="#5A36C7"/>
                            <path d="M12 143.006H137.771C140.167 143.006 142.464 144.044 144.158 145.891C145.852 147.738 146.803 150.243 146.803 152.855V171.764H21.0321C18.6366 171.764 16.3393 170.727 14.6454 168.88C12.9516 167.033 12 164.528 12 161.916V143.006Z" fill="#7040FF"/>
                            <path d="M80.2969 105.261H206.068C208.464 105.261 210.761 106.299 212.455 108.146C214.149 109.993 215.1 112.498 215.1 115.11V134.019H89.3289C86.9335 134.019 84.6361 132.981 82.9423 131.134C81.2485 129.287 80.2969 126.782 80.2969 124.17V105.261Z" fill="#2576BC"/>
                            <path d="M12 76.6014H137.771C140.167 76.6014 142.464 77.6391 144.158 79.486C145.852 81.333 146.803 83.838 146.803 86.45V105.261H21.0321C18.6366 105.261 16.3393 104.223 14.6454 102.376C12.9516 100.529 12 98.0244 12 95.4123V76.5029V76.6014Z" fill="#51A4E4"/>
                            <path d="M80.2969 38.7581H206.068C208.464 38.7581 210.761 39.7957 212.455 41.6427C214.149 43.4896 215.1 45.9947 215.1 48.6067V67.5161H89.3289C86.9335 67.5161 84.6361 66.4785 82.9423 64.6315C81.2485 62.7845 80.2969 60.2795 80.2969 57.6675V38.7581Z" fill="#65CED6"/>
                            <path d="M12 10H137.771C140.167 10 142.464 11.0376 144.158 12.8846C145.852 14.7316 146.803 17.2366 146.803 19.8487V38.7581H21.0321C18.6366 38.7581 16.3393 37.7204 14.6454 35.8735C12.9516 34.0265 12 31.5214 12 28.9094V10Z" fill="#8CE2E9"/>
                        </g>
                        <defs>
                            <filter id="filter0_d_2750_18279" x="0" y="0" width="227.102" height="214.522" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="2"/>
                                <feGaussianBlur stdDeviation="6"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2750_18279"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2750_18279" result="shape"/>
                            </filter>
                        </defs>
                    </svg>
                    <!--<img src="<?php echo get_template_directory_uri() ?>/images/pixel.jpg" data-original="<?php echo get_template_directory_uri() ?>/images/pricing-needs.svg" class="lazy" alt="">-->
                </div>
            </div>
        </div>
    </div>
    <div class="pricing-faq">
        <div class="container">
            <span class="pricing-faq__title"><?php the_field('faq_title'); ?></span>
            <?php $faq = get_field('faq'); ?>
            <?php if(!empty($faq)): ?>
            <div class="pricing-faq__wrapper">
                <?php foreach($faq as $item): ?>
                    <div class="pricing-faq__item">
                        <div class="pricing-faq__head">
                            <?php echo $item['question']; ?>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 8.25562H18.66C19.0154 8.25562 19.3562 8.3968 19.6075 8.6481C19.8588 8.89941 20 9.24025 20 9.59565V12.1685H1.34003C0.984634 12.1685 0.643791 12.0273 0.392486 11.776C0.141181 11.5247 0 11.1839 0 10.8285V8.25562Z"
                                    fill="#815DC1" />
                                <path
                                    d="M11.6875 0L11.6875 18.66C11.6875 19.0154 11.5463 19.3562 11.295 19.6075C11.0437 19.8588 10.7029 20 10.3475 20L7.7746 20L7.77461 1.34003C7.77461 0.984634 7.91579 0.64379 8.16709 0.392485C8.4184 0.141181 8.75924 -1.27998e-07 9.11464 -1.12463e-07L11.6875 0Z"
                                    fill="#503885" />
                            </svg>
                        </div>
                        <div class="pricing-faq__body">
                            <?php echo $item['answer']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="pricing-partners">
        <div class="container">
            <?php do_shortcode('[brands]'); ?>
            <?php do_shortcode('[subscribe]'); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>

<div class="mfp-hide">
    <div class="bigger-needs__popup mfp-with-anim" id="bigger-needs">
        <span class="bigger-needs__popup-title">Bigger Needs?</span>
        <p class="bigger-needs__popup-descr">We can scale our PLM experience to enterprise-grade requirements.</p>
        <a href="" class="btn">Contact sales</a>
    </div>
</div>