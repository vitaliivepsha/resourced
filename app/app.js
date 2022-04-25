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
    require('./assets/templates/layouts/source-suppliers-success.html');
    require('./assets/templates/layouts/source-suppliers-start-page.html');
    require('./assets/templates/layouts/source-suppliers-introduction-page.html');
    require('./assets/templates/layouts/source-suppliers-product-information-page.html');
    require('./assets/templates/layouts/source-suppliers-quotation-information-page.html');
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
require('../node_modules/select2/dist/js/select2.min');
require('../node_modules/ion-rangeslider/js/ion.rangeSlider');
import Dropzone from 'dropzone';

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
                beforeOpen: function () {
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

    $('.mobile-menu .has-children > span').click(function () {
        $(this).closest('li').toggleClass('open').find('.submenu').slideToggle();
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
                $range_handle2.css('left', '0.346855%');
                $range_single2.css('left', '-13.0295%');
                $range_bar2.css('width', '2.19187%');
            }
            if ($(this).hasClass('plan2')) {
                range_val1.update({
                    from: 30
                });
                $range_handle1.css('left', '2.79859%');
                $range_single1.css('left', '-10.5778%');
                $range_bar1.css('width', '4.6436%');
                range_val2.update({
                    from: 100
                });
                $range_handle2.css('left', '3.8154%');
                $range_single2.css('left', '-9.56098%');
                $range_bar2.css('width', '5.66042%');
            }
            if ($(this).hasClass('plan3')) {
                range_val1.update({
                    from: 400
                });
                $range_handle1.css('left', '38.5047%');
                $range_single1.css('left', '25.1283%');
                $range_bar1.css('width', '40.3497%');
                range_val2.update({
                    from: 400
                });
                $range_handle2.css('left', '15.3772%');
                $range_single2.css('left', '2.00084%');
                $range_bar2.css('width', '17.2222%');
            }
            if ($(this).hasClass('plan4')) {
                range_val1.update({
                    from: 700
                });
                $range_handle1.css('left', '67.4556%');
                $range_single1.css('left', '54.0792%');
                $range_bar1.css('width', '69.3006%');
                range_val2.update({
                    from: 2000
                });
                $range_handle2.css('left', '77.0403%');
                $range_single2.css('left', '63.6639%');
                $range_bar2.css('width', '78.8853%');
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

    if ($('#pricing-range1').length) {
        $('#pricing-range1').ionRangeSlider({
            type: 'single',
            min: 1,
            max: 999,
            postfix: ' products planned in a year',
            prettify: function (num) {
                num = Math.round(num);
                return num;
            }
        });
    }
    /*setTimeout(function () {
        $('.js-irs-0').append('<span class="irs-handle irs-handle-visible"><i></i><i></i><i></i></span>');
    }, 1000);*/

    if ($('#pricing-range2').length) {
        $('#pricing-range2').ionRangeSlider({
            type: 'single',
            min: 1,
            max: 2500,
            prettify: function (num) {
                if (num < 999) {
                    num = Math.round(num);
                    return num + 'k products planned in a year';
                } else {
                    num = Math.round(num / 1000);
                    return num + 'M products planned in a year';
                }
            }
        });
    }

    var $range_handle1 = $('#pricing-range1').closest('.pricing-range__item')
        .find('.irs--flat.pricing-range__visualisation').find('.irs-handle');
    var $range_single1 = $('#pricing-range1').closest('.pricing-range__item')
        .find('.irs--flat.pricing-range__visualisation').find('.irs-single');
    var $range_bar1 = $('#pricing-range1').closest('.pricing-range__item')
        .find('.irs--flat.pricing-range__visualisation').find('.irs-bar');

    if ($('#pricing-range1').length) {
        $('#pricing-range1').data('ionRangeSlider').update({
            onFinish: function () {
                var slider1 = $('#pricing-range1').data('ionRangeSlider'),
                    slider2 = $('#pricing-range2').data('ionRangeSlider'),
                    finish_val1 = slider1.result.from,
                    finish_val2 = slider2.result.from;
                //console.log(finish_val1, finish_val2);
                if (finish_val1 > 400 && finish_val2 > 400) {
                    $('.pricing-plan.plan4').addClass('active').parent().siblings().find('.pricing-plan').removeClass('active');
                } else if (finish_val1 > 30 && finish_val2 > 100) {
                    $('.pricing-plan.plan3').addClass('active').parent().siblings().find('.pricing-plan').removeClass('active');
                } else if (finish_val1 > 5 && finish_val2 > 10) {
                    $('.pricing-plan.plan2').addClass('active').parent().siblings().find('.pricing-plan').removeClass('active');
                } else {
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

                if (finish_val1 > 998 && finish_val2 > 2499) {
                    $.magnificPopup.open({
                        items: {
                            src: '#bigger-needs'
                        },
                        mainClass: 'mfp-zoom-in'
                    });
                }
            }
        });
    }

    var $range_handle2 = $('#pricing-range2').closest('.pricing-range__item')
        .find('.irs--flat.pricing-range__visualisation').find('.irs-handle');
    var $range_single2 = $('#pricing-range2').closest('.pricing-range__item')
        .find('.irs--flat.pricing-range__visualisation').find('.irs-single');
    var $range_bar2 = $('#pricing-range2').closest('.pricing-range__item')
        .find('.irs--flat.pricing-range__visualisation').find('.irs-bar');

    if ($('#pricing-range2').length) {
        $('#pricing-range2').data('ionRangeSlider').update({
            onFinish: function () {
                var slider1 = $('#pricing-range1').data('ionRangeSlider'),
                    slider2 = $('#pricing-range2').data('ionRangeSlider'),
                    finish_val1 = slider1.result.from,
                    finish_val2 = slider2.result.from;
                //console.log(finish_val1, finish_val2);
                if (finish_val1 > 400 && finish_val2 > 400) {
                    $('.pricing-plan.plan4').addClass('active').parent().siblings().find('.pricing-plan').removeClass('active');
                } else if (finish_val1 > 30 && finish_val2 > 100) {
                    $('.pricing-plan.plan3').addClass('active').parent().siblings().find('.pricing-plan').removeClass('active');
                } else if (finish_val1 > 5 && finish_val2 > 10) {
                    $('.pricing-plan.plan2').addClass('active').parent().siblings().find('.pricing-plan').removeClass('active');
                } else {
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

                if (finish_val1 > 998 && finish_val2 > 2499) {
                    $.magnificPopup.open({
                        items: {
                            src: '#bigger-needs'
                        },
                        mainClass: 'mfp-zoom-in'
                    });
                }
            }
        });
    }

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

    // upload files

    if ($('#dropzone').length) {
        const dropZone = new Dropzone('#dropzone');
        var dropArea = $(document);
        var dropWindow = $('.drop-window');

        function onDragOver(e) {
            dropWindow.show();
            $('body').addClass('dz-opened');
        }

        function onDragEnter(e) {
            e.preventDefault();
        }

        function onDragLeave(e) {
            if (!$('#dropzone').hasClass('dz-drag-hover')) {
                dropWindow.hide();
                $('body').removeClass('dz-opened');
            }
        }

        function onDrop(e) {
            e.preventDefault();
        }

        dropArea.on('dragover', onDragOver);
        dropArea.on('dragenter', onDragEnter);
        dropArea.on('dragleave', onDragLeave);
        dropArea.on('drop', onDrop);

        $('.dz-open').click(function () {
            dropWindow.show();
            $('body').addClass('dz-opened');
        });

        $('.dz-close').click(function () {
            dropWindow.hide();
            $('body').removeClass('dz-opened');
        });
    }

    // tabs

    $('.tabs').on('click', 'li:not(.active)', function () {
        $(this).addClass('active').siblings().removeClass('active')
            .closest('.tabs-wrapper').find('.tabs-content').removeClass('active').eq($(this).index()).addClass('active');
    });

    $('.source-product__tabs li.cn-tab').click(function () {
        $('.babies-gender').addClass('hidden');
    });

    $('.source-product__tabs li:not(.cn-tab)').click(function () {
        $('.babies-gender').removeClass('hidden');
    });

    // range sizes

    if ($('#eu-size-range').length) {
        var $range = $('#eu-size-range'),
            $from = $range.closest('.source-product__range-wrapper').find('.js-from'),
            $to = $range.closest('.source-product__range-wrapper').find('.js-to'),
            range,
            min = 16,
            max = 52,
            from,
            to;

        var updateValues = function () {
            $from.prop("value", from);
            $to.prop("value", to);
        };

        $range.ionRangeSlider({
            type: 'double',
            min: min,
            max: max,
            hide_min_max: true,
            hide_from_to: true,
            prettify: function (num) {
                num = Math.round(num);
                return num;
            }
        });

        range = $range.data("ionRangeSlider");

        var updateRange = function () {
            range.update({
                from: from,
                to: to
            });
        };

        $from.on("change", function () {
            from = +$(this).prop("value");
            if (from < min) {
                from = min;
            }
            if (from > to) {
                from = to;
            }

            updateValues();
            updateRange();
        });

        $to.on("change", function () {
            to = +$(this).prop("value");
            if (to > max) {
                to = max;
            }
            if (to < from) {
                to = from;
            }

            updateValues();
            updateRange();
        });

        $range.data('ionRangeSlider').update({
            onFinish: function () {
                $from.val(range.result.from);
                $to.val(range.result.to);
            }
        });

        $('.gender_item').click(function () {
            if ($(this).hasClass('gender_kids')) {
                $range.data('ionRangeSlider').update({
                    from: 33,
                    to: 40,
                    /*from_min: 33,
                    to_max: 40*/
                });
                $from.attr('max', 40);
                $from.val(33);
                $from.attr('onkeyup', 'if(value<33) value=33;');
                $to.attr('max', 40);
                $to.val(40);
                $to.attr('onkeyup', 'if(value>40) value=40;');
            }
            if ($(this).hasClass('gender_men')) {
                $range.data('ionRangeSlider').update({
                    from: 40,
                    to: 50,
                    /*from_min: 40,
                    to_max: 50*/
                });
                $from.attr('max', 50);
                $from.val(40);
                $from.attr('onkeyup', 'if(value<40) value=40;');
                $to.attr('max', 50);
                $to.val(50);
                $to.attr('onkeyup', 'if(value>50) value=50;');
            }
            if ($(this).hasClass('gender_women')) {
                $range.data('ionRangeSlider').update({
                    from: 35,
                    to: 42,
                    /*from_min: 35,
                    to_max: 42*/
                });
                $from.attr('max', 42);
                $from.val(35);
                $from.attr('onkeyup', 'if(value<35) value=35;');
                $to.attr('max', 42);
                $to.val(42);
                $to.attr('onkeyup', 'if(value>42) value=42;');
            }
            if ($(this).hasClass('gender_babies')) {
                $range.data('ionRangeSlider').update({
                    from: 22,
                    to: 32,
                    /*from_min: 22,
                    to_max: 32*/
                });
                $from.attr('max', 32);
                $from.val(22);
                $from.attr('onkeyup', 'if(value<22) value=22;');
                $to.attr('max', 32);
                $to.val(32);
                $to.attr('onkeyup', 'if(value>32) value=32;');
            }
        });
    }

    if ($('#us-size-range').length) {
        var $range1 = $('#us-size-range'),
            $from1 = $range1.closest('.source-product__range-wrapper').find('.js-from'),
            $to1 = $range1.closest('.source-product__range-wrapper').find('.js-to'),
            range1,
            min1 = 2,
            max1 = 15,
            from1,
            to1;

        var updateValues1 = function () {
            $from1.prop("value", from1);
            $to1.prop("value", to1);
        };

        $range1.ionRangeSlider({
            type: 'double',
            min: min1,
            max: max1,
            hide_min_max: true,
            hide_from_to: true,
            prettify: function (num) {
                num = Math.round(num);
                return num;
            }
        });

        range1 = $range1.data("ionRangeSlider");

        var updateRange1 = function () {
            range1.update({
                from: from1,
                to: to1
            });
        };

        $from1.on("change", function () {
            from1 = +$(this).prop("value");
            if (from1 < min1) {
                from1 = min1;
            }
            if (from1 > to1) {
                from1 = to1;
            }

            updateValues1();
            updateRange1();
        });

        $to1.on("change", function () {
            to1 = +$(this).prop("value");
            if (to1 > max1) {
                to1 = max1;
            }
            if (to1 < from1) {
                to1 = from1;
            }

            updateValues1();
            updateRange1();
        });

        $range1.data('ionRangeSlider').update({
            onFinish: function () {
                $from1.val(range1.result.from);
                $to1.val(range1.result.to);
            }
        });

        $('.gender_item').click(function () {
            if ($(this).hasClass('gender_kids')) {
                $range1.data('ionRangeSlider').update({
                    from: 2,
                    to: 8,
                    /*from_min: 33,
                    to_max: 40*/
                });
                $from1.attr('max', 8);
                $from1.val(2);
                $from1.attr('onkeyup', 'if(value<2) value=2;');
                $to1.attr('max', 8);
                $to1.val(8);
                $to1.attr('onkeyup', 'if(value>8) value=8;');
            }
            if ($(this).hasClass('gender_men')) {
                $range1.data('ionRangeSlider').update({
                    from: 8,
                    to: 14,
                    /*from_min: 40,
                    to_max: 50*/
                });
                $from1.attr('max', 14);
                $from1.val(8);
                $from1.attr('onkeyup', 'if(value<8) value=8;');
                $to1.attr('max', 14);
                $to1.val(14);
                $to1.attr('onkeyup', 'if(value>14) value=14;');
            }
            if ($(this).hasClass('gender_women')) {
                $range1.data('ionRangeSlider').update({
                    from: 5,
                    to: 10,
                    /*from_min: 35,
                    to_max: 42*/
                });
                $from1.attr('max', 10);
                $from1.val(5);
                $from1.attr('onkeyup', 'if(value<5) value=5;');
                $to1.attr('max', 10);
                $to1.val(10);
                $to1.attr('onkeyup', 'if(value>10) value=10;');
            }
            if ($(this).hasClass('gender_babies')) {
                $range1.data('ionRangeSlider').update({
                    from: 2,
                    to: 6,
                    /*from_min: 22,
                    to_max: 32*/
                });
                $from1.attr('max', 6);
                $from1.val(2);
                $from1.attr('onkeyup', 'if(value<2) value=2;');
                $to1.attr('max', 6);
                $to1.val(6);
                $to1.attr('onkeyup', 'if(value>6) value=6;');
            }
        });
    }

    if ($('#uk-size-range').length) {
        var $range2 = $('#uk-size-range'),
            $from2 = $range2.closest('.source-product__range-wrapper').find('.js-from'),
            $to2 = $range2.closest('.source-product__range-wrapper').find('.js-to'),
            range2,
            min2 = 1,
            max2 = 14,
            from2,
            to2;

        var updateValues2 = function () {
            $from2.prop("value", from2);
            $to2.prop("value", to2);
        };

        $range2.ionRangeSlider({
            type: 'double',
            min: min2,
            max: max2,
            hide_min_max: true,
            hide_from_to: true,
            prettify: function (num) {
                num = Math.round(num);
                return num;
            }
        });

        range2 = $range2.data("ionRangeSlider");

        var updateRange2 = function () {
            range2.update({
                from: from2,
                to: to2
            });
        };

        $from2.on("change", function () {
            from2 = +$(this).prop("value");
            if (from2 < min2) {
                from2 = min2;
            }
            if (from2 > to2) {
                from2 = to2;
            }

            updateValues2();
            updateRange2();
        });

        $to2.on("change", function () {
            to2 = +$(this).prop("value");
            if (to2 > max2) {
                to2 = max2;
            }
            if (to2 < from2) {
                to2 = from2;
            }

            updateValues2();
            updateRange2();
        });

        $range2.data('ionRangeSlider').update({
            onFinish: function () {
                $from2.val(range2.result.from);
                $to2.val(range2.result.to);
            }
        });

        $('.gender_item').click(function () {
            if ($(this).hasClass('gender_kids')) {
                $range2.data('ionRangeSlider').update({
                    from: 1,
                    to: 7,
                    /*from_min: 33,
                    to_max: 40*/
                });
                $from2.attr('max', 7);
                $from2.val(1);
                $from2.attr('onkeyup', 'if(value<1) value=1;');
                $to2.attr('max', 7);
                $to2.val(7);
                $to2.attr('onkeyup', 'if(value>7) value=7;');
            }
            if ($(this).hasClass('gender_men')) {
                $range2.data('ionRangeSlider').update({
                    from: 7,
                    to: 12,
                    /*from_min: 40,
                    to_max: 50*/
                });
                $from2.attr('max', 12);
                $from2.val(7);
                $from2.attr('onkeyup', 'if(value<7) value=7;');
                $to2.attr('max', 12);
                $to2.val(12);
                $to2.attr('onkeyup', 'if(value>12) value=12;');
            }
            if ($(this).hasClass('gender_women')) {
                $range2.data('ionRangeSlider').update({
                    from: 3,
                    to: 8,
                    /*from_min: 35,
                    to_max: 42*/
                });
                $from2.attr('max', 8);
                $from2.val(3);
                $from2.attr('onkeyup', 'if(value<3) value=3;');
                $to2.attr('max', 8);
                $to2.val(8);
                $to2.attr('onkeyup', 'if(value>8) value=8;');
            }
            if ($(this).hasClass('gender_babies')) {
                $range2.data('ionRangeSlider').update({
                    from: 5,
                    to: 13,
                    /*from_min: 22,
                    to_max: 32*/
                });
                $from2.attr('max', 13);
                $from2.val(5);
                $from2.attr('onkeyup', 'if(value<5) value=5;');
                $to2.attr('max', 13);
                $to2.val(13);
                $to2.attr('onkeyup', 'if(value>13) value=13;');
            }
        });
    }

    if ($('#cn-size-range').length) {
        var $range3 = $('#cn-size-range'),
            $from3 = $range3.closest('.source-product__range-wrapper').find('.js-from'),
            $to3 = $range3.closest('.source-product__range-wrapper').find('.js-to'),
            range3,
            min3 = 22,
            max3 = 50,
            from3,
            to3;

        var updateValues3 = function () {
            $from3.prop("value", from3);
            $to3.prop("value", to3);
        };

        $range3.ionRangeSlider({
            type: 'double',
            min: min3,
            max: max3,
            hide_min_max: true,
            hide_from_to: true,
            prettify: function (num) {
                num = Math.round(num);
                return num;
            }
        });

        range3 = $range3.data("ionRangeSlider");

        var updateRange3 = function () {
            range3.update({
                from: from3,
                to: to3
            });
        };

        $from3.on("change", function () {
            from3 = +$(this).prop("value");
            if (from3 < min3) {
                from3 = min3;
            }
            if (from3 > to3) {
                from3 = to3;
            }

            updateValues3();
            updateRange3();
        });

        $to3.on("change", function () {
            to3 = +$(this).prop("value");
            if (to3 > max3) {
                to3 = max3;
            }
            if (to3 < from3) {
                to3 = from3;
            }

            updateValues3();
            updateRange3();
        });

        $range3.data('ionRangeSlider').update({
            onFinish: function () {
                $from3.val(range3.result.from);
                $to3.val(range3.result.to);
            }
        });

        $('.gender_item').click(function () {
            if ($(this).hasClass('gender_kids')) {
                $range3.data('ionRangeSlider').update({
                    from: 22,
                    to: 32,
                    /*from_min: 33,
                    to_max: 40*/
                });
                $from3.attr('max', 32);
                $from3.val(22);
                $from3.attr('onkeyup', 'if(value<22) value=22;');
                $to3.attr('max', 32);
                $to3.val(32);
                $to3.attr('onkeyup', 'if(value>32) value=32;');
            }
            if ($(this).hasClass('gender_men')) {
                $range3.data('ionRangeSlider').update({
                    from: 38,
                    to: 49,
                    /*from_min: 40,
                    to_max: 50*/
                });
                $from3.attr('max', 49);
                $from3.val(38);
                $from3.attr('onkeyup', 'if(value<38) value=38;');
                $to3.attr('max', 49);
                $to3.val(49);
                $to3.attr('onkeyup', 'if(value>49) value=49;');
            }
            if ($(this).hasClass('gender_women')) {
                $range3.data('ionRangeSlider').update({
                    from: 35,
                    to: 42,
                    /*from_min: 35,
                    to_max: 42*/
                });
                $from3.attr('max', 42);
                $from3.val(35);
                $from3.attr('onkeyup', 'if(value<35) value=35;');
                $to3.attr('max', 42);
                $to3.val(42);
                $to3.attr('onkeyup', 'if(value>42) value=42;');
            }
        });
    }

    if ($('#jp-size-range').length) {
        var $range4 = $('#jp-size-range'),
            $from4 = $range4.closest('.source-product__range-wrapper').find('.js-from'),
            $to4 = $range4.closest('.source-product__range-wrapper').find('.js-to'),
            range4,
            min4 = 14,
            max4 = 33,
            from4,
            to4;

        var updateValues4 = function () {
            $from4.prop("value", from4);
            $to4.prop("value", to4);
        };

        $range4.ionRangeSlider({
            type: 'double',
            min: min4,
            max: max4,
            hide_min_max: true,
            hide_from_to: true,
            prettify: function (num) {
                num = Math.round(num);
                return num;
            }
        });

        range4 = $range4.data("ionRangeSlider");

        var updateRange4 = function () {
            range4.update({
                from: from4,
                to: to4
            });
        };

        $from4.on("change", function () {
            from4 = +$(this).prop("value");
            if (from4 < min4) {
                from4 = min4;
            }
            if (from4 > to4) {
                from4 = to4;
            }

            updateValues4();
            updateRange4();
        });

        $to4.on("change", function () {
            to4 = +$(this).prop("value");
            if (to4 > max4) {
                to4 = max4;
            }
            if (to4 < from4) {
                to4 = from4;
            }

            updateValues4();
            updateRange4();
        });

        $range4.data('ionRangeSlider').update({
            onFinish: function () {
                $from4.val(range4.result.from);
                $to4.val(range4.result.to);
            }
        });

        $('.gender_item').click(function () {
            if ($(this).hasClass('gender_kids')) {
                $range4.data('ionRangeSlider').update({
                    from: 20,
                    to: 26,
                    /*from_min: 33,
                    to_max: 40*/
                });
                $from4.attr('max', 26);
                $from4.val(20);
                $from4.attr('onkeyup', 'if(value<20) value=20;');
                $to4.attr('max', 26);
                $to4.val(26);
                $to4.attr('onkeyup', 'if(value>26 value=26;');
            }
            if ($(this).hasClass('gender_men')) {
                $range4.data('ionRangeSlider').update({
                    from: 26,
                    to: 32,
                    /*from_min: 40,
                    to_max: 50*/
                });
                $from4.attr('max', 32);
                $from4.val(26);
                $from4.attr('onkeyup', 'if(value<26) value=26;');
                $to4.attr('max', 32);
                $to4.val(32);
                $to4.attr('onkeyup', 'if(value>32) value=32;');
            }
            if ($(this).hasClass('gender_women')) {
                $range4.data('ionRangeSlider').update({
                    from: 22,
                    to: 27,
                    /*from_min: 35,
                    to_max: 42*/
                });
                $from4.attr('max', 27);
                $from4.val(22);
                $from4.attr('onkeyup', 'if(value<22) value=22;');
                $to4.attr('max', 27);
                $to4.val(27);
                $to4.attr('onkeyup', 'if(value>27) value=27;');
            }
            if ($(this).hasClass('gender_babies')) {
                $range4.data('ionRangeSlider').update({
                    from: 14,
                    to: 20,
                    /*from_min: 22,
                    to_max: 32*/
                });
                $from4.attr('max', 20);
                $from4.val(14);
                $from4.attr('onkeyup', 'if(value<14) value=14;');
                $to4.attr('max', 20);
                $to4.val(20);
                $to4.attr('onkeyup', 'if(value>20) value=20;');
            }
        });
    }

    // check textarea value

    $('.textarea').blur(function () {
        if (!$(this).val()) {
            $(this).parent().removeClass('filled');
        }
        else {
            $(this).parent().addClass('filled');
        }
    });

    // date placeholder

    $('.input.date').on('focus', function () {
        $(this).closest('.date-choose').find('.placeholder').hide();
    });
    $('.input.date').on('focusout', function () {
        $(this).closest('.date-choose').find('.placeholder').show();
    });
    $('.input.date').on('change', function () {
        $(this).closest('.date-choose').find('.placeholder').remove();
    });

    // multiselect

    $('.multiselect').select2({
        closeOnSelect: false,
        placeholder: "Where to manufacture product?",
        allowClear: false,
        dropdownParent: $('.multiselect-dropdown')
    });


    // 
    $('.source-introduction-size').SumoSelect({
        forceCustomRendering: true
    });

    $('.swal2-modal.swal2-styled.swal2-cancel').css('background-color', 'red');

});

