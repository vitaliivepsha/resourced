<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>RESOURCED</title>
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/images/favicon.png" type="image/png">
    <meta name="theme-color" content="#10084d">
    <meta name="msapplication-navbutton-color" content="#10084d">
    <meta name="apple-mobile-web-app-status-bar-style" content="#10084d">
    <?php wp_head(); ?>
</head>

<body>
<header class="header">
    <div class="header-main">
        <div class="header-main-inner">
            <div class="header-main-logo">
                <?php if(!is_front_page()): ?>
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/logo.svg" class="lazy" alt="">
                    </a>
                <?php else: ?>
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo get_template_directory_uri() ?>/images/logo.svg" class="lazy" alt="">
                    </div>
                <?php endif; ?>

            </div>

            <?php get_template_part( 'template-parts/menus/menu', 'header' ); ?>
            <div class="header-main-control">
                <a href="javascript:void(0)" class="popup-btn" data-mfp-src="#signup-popup" data-effect="mfp-zoom-in">Sign up</a>
            </div>
        </div>
    </div>
    <div class="mobile-btn">
        <span></span>
    </div>
</header>
<div class="mobile-menu__wrapper">
    <?php get_template_part( 'template-parts/menus/menu', 'header-mobile' ); ?>
    <span class="mobile-signup popup-btn" data-mfp-src="#signup-popup" data-effect="mfp-zoom-in">Sign up</span>
</div>