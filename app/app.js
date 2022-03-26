// God save the Dev

'use strict';

if (process.env.NODE_ENV !== 'production') {
    require('./assets/templates/layouts/index.html');
    require('./assets/templates/layouts/solution.html');
    require('./assets/templates/layouts/about.html');
    require('./assets/templates/layouts/pricing.html');
    require('./assets/templates/layouts/contact.html');
    require('./assets/templates/layouts/policy.html');
    require('./assets/templates/layouts/terms.html');
}

// Depends
var $ = require('jquery');
require('bootstrap-sass');

// Modules
var Forms = require('_modules/forms');
var Slider = require('_modules/slider');
var Popup = require('_modules/popup');
var Fancy_select = require('_modules/fancyselect');
var Jscrollpane = require('_modules/jscrollpane');
var LightGallery = require('_modules/lightgallery');
var Jslider = require('_modules/jslider');
var Fancybox = require('_modules/fancybox');
require('_modules/succinct/succinct');
require('../node_modules/sumoselect/jquery.sumoselect.min.js');
require('../node_modules/ion-rangeslider/js/ion.rangeSlider');

// Stylesheet entrypoint
require('_stylesheets/app.scss');

// Are you ready?
$(function () {
    new Forms();
    new Popup();
    new Fancy_select();
    new Jscrollpane();
    new LightGallery();
    new Slider();
    new Jslider();
    new Fancybox();

    setTimeout(function () {
        $('body').trigger('scroll');
    }, 100);

    // popup zoom effect
    $('.popup-btn').each(function () {
        $(this).magnificPopup({
            callbacks: {
                beforeOpen: function() {
                    this.st.mainClass = this.st.el.attr('data-effect');
                }
            },
        });
    });

    // scroll to id

    $(document).on('click', 'a[href^="#"]', function (e) {
        var id = $(this).attr('href');
        var $id = $(id);
        if ($id.length === 0) {
            return;
        }
        e.preventDefault();
        var pos = $id.offset().top - 30;
        $('body, html').animate({ scrollTop: pos }, 500);
    });
    $(document).on('click', 'a[href^="#"]', function (e) {
        e.preventDefault();
    });

    // lazy load
    var lazyload = function () {
        var scroll = $(window).scrollTop() + $(window).height() * 3;

        $('.lazy').each(function () {
            var $this = $(this);
            if ($this.offset().top < scroll) {
                $this.attr('src', $(this).data('original'));
            }
        });
        $('.lazy-web').each(function () {
            var $this = $(this);
            if ($this.offset().top < scroll) {
                $this.attr('srcset', $(this).data('original'));
            }
        });
    };
    $(window).scroll(lazyload);

    // header
    var header = $('.header'),
        scrollPrev = 0;

    $(window).scroll(function () {
        var scrolled = $(window).scrollTop();

        if (scrolled > 120 && scrolled) {
            header.addClass('fixed');
        }
        else {
            header.removeClass('fixed');
        }
        scrollPrev = scrolled;
    });

    var touch = $('.mobile-btn');
    var toggles = document.querySelectorAll('.mobile-btn');

    for (var i = toggles.length - 1; i >= 0; i--) {
        var toggle = toggles[i];
        toggleHandler(toggle);
    }

    function toggleHandler(toggle) {
        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            this.classList.contains('active') === true
                ? this.classList.remove('active')
                : this.classList.add('active');
        });
    }

    $(touch).click(function (e) {
        e.preventDefault();
        $('body').toggleClass('menu-opened');
        return false;
    });
    $(document).on('click', '.mobile-btn', function (e) {
        e.stopPropagation();
    });
    $(document).on('click', '.mobile-menu', function (e) {
        e.stopPropagation();
    });

    // select

    $('.select').SumoSelect({
        forceCustomRendering: true
    });

    $('.select').on('change', function () {
        var val = $(this).find('option:selected', this);
        $(this).closest('.select-wrapper').removeClass('err').find('.validate-error').remove();
        $(this).closest('.select-wrapper').find('input:hidden').val(val);
    });

    // pricing range sliders

    $('.pricing-plan').each(function () {
        $(this).click(function () {
            var range_val1 = $('#pricing-range1').data('ionRangeSlider');
            var range_val2 = $('#pricing-range2').data('ionRangeSlider');
            var $range_handle1 = $('#pricing-range1').closest('.pricing-range__item')
                .find('.irs--flat.pricing-range__visualisation').find('.irs-handle');
            var $range_single1 = $('#pricing-range1').closest('.pricing-range__item')
                .find('.irs--flat.pricing-range__visualisation').find('.irs-single');
            var $range_bar1 = $('#pricing-range1').closest('.pricing-range__item')
                .find('.irs--flat.pricing-range__visualisation').find('.irs-bar');
            var $range_handle2 = $('#pricing-range2').closest('.pricing-range__item')
                .find('.irs--flat.pricing-range__visualisation').find('.irs-handle');
            var $range_single2 = $('#pricing-range2').closest('.pricing-range__item')
                .find('.irs--flat.pricing-range__visualisation').find('.irs-single');
            var $range_bar2 = $('#pricing-range2').closest('.pricing-range__item')
                .find('.irs--flat.pricing-range__visualisation').find('.irs-bar');

            if ($(this).hasClass('active')) {
                $(this).removeClass('active').parent().siblings().find('.pricing-plan').removeClass('active');
            }
            else {
                $(this).addClass('active').parent().siblings().find('.pricing-plan').removeClass('active');
            }

            if ($(this).hasClass('plan1')) {
                range_val1.update({
                    from: 5
                });
                $range_handle1.css('left', '0.55113%');
                $range_single1.css('left', '-12.8253%');
                $range_bar1.css('width', '2.39615%');
                range_val2.update({
                    from: 10
                });
                $range_handle2.css('left', '0.433612%');
                $range_single2.css('left', '-13.3764%');
                $range_bar2.css('width', '2.27863%');
            }
            if ($(this).hasClass('plan2')) {
                range_val1.update({
                    from: 30
                });
                $range_handle1.css('left', '3.99569%');
                $range_single1.css('left', '-9.38069%');
                $range_bar1.css('width', '5.84071%');
                range_val2.update({
                    from: 100
                });
                $range_handle2.css('left', '4.76973%');
                $range_single2.css('left', '-8.60666%');
                $range_bar2.css('width', '6.61475%');
            }
            if ($(this).hasClass('plan3')) {
                range_val1.update({
                    from: 400
                });
                $range_handle1.css('left', '54.9752%');
                $range_single1.css('left', '41.5988%');
                $range_bar1.css('width', '56.8202%');
                range_val2.update({
                    from: 400
                });
                $range_handle2.css('left', '19.2234%');
                $range_single2.css('left', '5.84707%');
                $range_bar2.css('width', '21.0685%');
            }
            if ($(this).hasClass('plan4')) {
                range_val1.update({
                    from: 700
                });
                $range_handle1.css('left', '96.31%');
                $range_single1.css('left', '82.9336%');
                $range_bar1.css('width', '98.155%');
                range_val2.update({
                    from: 2000
                });
                $range_handle2.css('left', '96.31%');
                $range_single2.css('left', '82.9336%');
                $range_bar2.css('width', '98.155%');
            }
            $('#pricing-range1').closest('.pricing-range__item')
                .find('.irs--flat.pricing-range__visualisation').css('opacity', 1);
            $('#pricing-range1').closest('.pricing-range__item')
                .find('.irs--flat:not(.pricing-range__visualisation)').css('opacity', 0);
            $('#pricing-range2').closest('.pricing-range__item')
                .find('.irs--flat.pricing-range__visualisation').css('opacity', 1);
            $('#pricing-range2').closest('.pricing-range__item')
                .find('.irs--flat:not(.pricing-range__visualisation)').css('opacity', 0);
            setTimeout(function () {
                $('#pricing-range1').closest('.pricing-range__item')
                    .find('.irs--flat.pricing-range__visualisation').css('opacity', 0);
                $('#pricing-range1').closest('.pricing-range__item')
                    .find('.irs--flat:not(.pricing-range__visualisation)').css('opacity', 1);
                $('#pricing-range2').closest('.pricing-range__item')
                    .find('.irs--flat.pricing-range__visualisation').css('opacity', 0);
                $('#pricing-range2').closest('.pricing-range__item')
                    .find('.irs--flat:not(.pricing-range__visualisation)').css('opacity', 1);
            }, 500);
        });
    });

    $('#pricing-range1').ionRangeSlider({
        type: 'single',
        min: 1,
        max: 700,
        postfix: ' products planned in a year',
        prettify: function (num) {
            num = Math.round(num);
            return num;
        }
    });
    /*setTimeout(function () {
        $('.js-irs-0').append('<span class="irs-handle irs-handle-visible"><i></i><i></i><i></i></span>');
    }, 1000);*/

    $('#pricing-range2').ionRangeSlider({
        type: 'single',
        min: 1,
        max: 2000,
        prettify: function(num){
            if(num < 999){
                num = Math.round(num);
                return num + 'k products planned in a year';
            }else{
                num = Math.round(num / 1000);
                return num + 'M products planned in a year';
            }
        }
    });

    var $range_handle1 = $('#pricing-range1').closest('.pricing-range__item')
        .find('.irs--flat.pricing-range__visualisation').find('.irs-handle');
    var $range_single1 = $('#pricing-range1').closest('.pricing-range__item')
        .find('.irs--flat.pricing-range__visualisation').find('.irs-single');
    var $range_bar1 = $('#pricing-range1').closest('.pricing-range__item')
        .find('.irs--flat.pricing-range__visualisation').find('.irs-bar');

    $('#pricing-range1').data('ionRangeSlider').update({
        onFinish: function () {
            var slider1 = $('#pricing-range1').data('ionRangeSlider'),
                slider2 = $('#pricing-range2').data('ionRangeSlider'),
                finish_val1 = slider1.result.from,
                finish_val2 = slider2.result.from;
            //console.log(finish_val1, finish_val2);
            if (finish_val1 > 400 && finish_val2 > 400) {
                $('.pricing-plan.plan4').addClass('active').parent().siblings().find('.pricing-plan').removeClass('active');
            }
            else if (finish_val1 > 30 && finish_val2 > 100) {
                $('.pricing-plan.plan3').addClass('active').parent().siblings().find('.pricing-plan').removeClass('active');
            }
            else if (finish_val1 > 5 && finish_val2 > 10) {
                $('.pricing-plan.plan2').addClass('active').parent().siblings().find('.pricing-plan').removeClass('active');
            }
            else {
                $('.pricing-plan.plan1').addClass('active').parent().siblings().find('.pricing-plan').removeClass('active');
            }
            var range_handle1_pos = $('#pricing-range1').closest('.pricing-range__item')
                .find('.irs--flat:not(.pricing-range__visualisation)').find('.irs-handle').attr('style');
            var range_single1_pos = $('#pricing-range1').closest('.pricing-range__item')
                .find('.irs--flat:not(.pricing-range__visualisation)').find('.irs-single').attr('style');
            var range_bar1_pos = $('#pricing-range1').closest('.pricing-range__item')
                .find('.irs--flat:not(.pricing-range__visualisation)').find('.irs-bar').attr('style');
            $range_handle1.attr('style', range_handle1_pos);
            $range_single1.attr('style', range_single1_pos);
            $range_bar1.attr('style', range_bar1_pos);
        }
    });

    var $range_handle2 = $('#pricing-range2').closest('.pricing-range__item')
        .find('.irs--flat.pricing-range__visualisation').find('.irs-handle');
    var $range_single2 = $('#pricing-range2').closest('.pricing-range__item')
        .find('.irs--flat.pricing-range__visualisation').find('.irs-single');
    var $range_bar2 = $('#pricing-range2').closest('.pricing-range__item')
        .find('.irs--flat.pricing-range__visualisation').find('.irs-bar');

    $('#pricing-range2').data('ionRangeSlider').update({
        onFinish: function () {
            var slider1 = $('#pricing-range1').data('ionRangeSlider'),
                slider2 = $('#pricing-range2').data('ionRangeSlider'),
                finish_val1 = slider1.result.from,
                finish_val2 = slider2.result.from;
            //console.log(finish_val1, finish_val2);
            if (finish_val1 > 400 && finish_val2 > 400) {
                $('.pricing-plan.plan4').addClass('active').parent().siblings().find('.pricing-plan').removeClass('active');
            }
            else if (finish_val1 > 30 && finish_val2 > 100) {
                $('.pricing-plan.plan3').addClass('active').parent().siblings().find('.pricing-plan').removeClass('active');
            }
            else if (finish_val1 > 5 && finish_val2 > 10) {
                $('.pricing-plan.plan2').addClass('active').parent().siblings().find('.pricing-plan').removeClass('active');
            }
            else {
                $('.pricing-plan.plan1').addClass('active').parent().siblings().find('.pricing-plan').removeClass('active');
            }
            var range_handle2_pos = $('#pricing-range2').closest('.pricing-range__item')
                .find('.irs--flat:not(.pricing-range__visualisation)').find('.irs-handle').attr('style');
            var range_single2_pos = $('#pricing-range2').closest('.pricing-range__item')
                .find('.irs--flat:not(.pricing-range__visualisation)').find('.irs-single').attr('style');
            var range_bar2_pos = $('#pricing-range2').closest('.pricing-range__item')
                .find('.irs--flat:not(.pricing-range__visualisation)').find('.irs-bar').attr('style');
            $range_handle2.attr('style', range_handle2_pos);
            $range_single2.attr('style', range_single2_pos);
            $range_bar2.attr('style', range_bar2_pos);
        }
    });

    // pricing show more

    $('.pricing-features__btn-expand').click(function () {
        $('.pricing-features__table-wrapper').addClass('active');
    });

    $('.pricing-features__btn-collapse').click(function () {
        $('.pricing-features__table-wrapper').removeClass('active');
    });

    // pricing faq

    $('.pricing-faq__head').click(function () {
        $(this).toggleClass('active').next('.pricing-faq__body').slideToggle();
    });
});
