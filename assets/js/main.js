

(function ($) {
    'use strict';


    /*--------------------------------
       04.  Quantity
    -------------------------------*/
    const proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn">-</span>');
    proQty.append('<span class="inc qtybtn">+</span>');
    $('.qtybtn').on('click', function () {
        const $button = $(this);
        const oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });



    /*----------------------------------
        14. Product Details Images
    ------------------------------------*/
    $('.product-details-images').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        dots: false,
        infinite: true,
        centerMode: true,
        centerPadding: 0,
        prevArrow: '<span class="slider-navigation slider-navigation-prev"><i class="fa fa-caret-left"></i></span>',
        nextArrow: '<span class="slider-navigation slider-navigation-next"><i class="fa fa-caret-right"></i></span>',
        asNavFor: '.product-details-thumbs'
    });
    $('.product-details-thumbs').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        dots: false,
        infinite: true,
        focusOnSelect: true,
        centerMode: true,
        centerPadding: 0,
        prevArrow: '<span class="slider-navigation slider-navigation-prev"><i class="fa fa-caret-left"></i></span>',
        nextArrow: '<span class="slider-navigation slider-navigation-next"><i class="fa fa-caret-right"></i></span>',
        asNavFor: '.product-details-images'
    });

    /*----------------------------------
        15. Quick View Modal
    ------------------------------------*/
    $('.quickview').on('click', function (e) {
        e.preventDefault();
        $('.quick-view-modal').toggleClass('is-visible');
    });

    $('.close-quickview-modal').on('click', function () {
        $('.quick-view-modal').removeClass('is-visible');
    });



     /*----------------------------------
        17. Scroll Up Activation
    ------------------------------------*/
    // $.scrollUp({
    //     scrollText: '<i class="fa fa-angle-up"></i>',
    //     easingType: 'linear',
    //     scrollSpeed: 900,
    //     animation: 'slide'
    // });



})(jQuery);