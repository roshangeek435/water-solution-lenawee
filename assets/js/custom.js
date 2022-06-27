jQuery(document).ready(function($) {

    var window_size = jQuery(window).width();
    new WOW().init();

    jQuery('.service-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: true,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        autoplay: false,
        customPaging: function(slider, i) {
            return jQuery(slider.$slides[i])
                .find(".dot-title")
                .text();
        },
        appendDots: jQuery(".custom-dot-slider"),
        dotsClass: "dropdown-tabbing",
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                }
            }
        ]
    });

    jQuery('.gallery-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        autoplay: true,
        swipeToSlide: true,
        draggable: true,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                }
            }
        ]
    });

    jQuery().fancybox({
        selector: '.gallery-slider a',
        "afterShow": function() {
            jQuery('.gallery-slider').slick('slickPause');
        },
        "afterClose": function() {
            jQuery('.gallery-slider').slick('slickPlay');
        }
    });

    jQuery('.review-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: true,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        autoplay: false,
        swipeToSlide: true,
        draggable: true,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                }
            }
        ]
    });

    /* Scroll To Top JS */
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('#scrollToTop').fadeIn();
        } else {
            jQuery('#scrollToTop').fadeOut();
        }
    });
    jQuery('#scrollToTop').click(function() {
        jQuery("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    /* Sticky Header JS */
    jQuery(window).scroll(function() { // this will work when your window scrolled.
        var height = jQuery(window).scrollTop(); //getting the scrolling height of window
        if (height > 100) {
            jQuery(".site-header").addClass("sticky_head");
        } else {
            jQuery(".site-header").removeClass("sticky_head");
        }
    });

    /* Mobile Menu JS */
    jQuery("#menu-item-21 a").first().attr('href', 'javascript:void(0);');
    jQuery("#primary-menu .menu-item a").click(function() {
        jQuery("#site-navigation").removeClass("toggled");
    });

    /*Quotr Modal JS */
    jQuery("#hiring_Modal").on("show.bs.modal", function() {
        var scrolly = window.scrollY;
        jQuery("body").css("top", "-" + scrolly + "px");
        jQuery(this).attr("data-top", scrolly);
    });
    jQuery("#hiring_Modal").on("hidden.bs.modal", function() {
        var scrolly = jQuery(this).attr("data-top");
        jQuery("body").css("top", "0px");
        window.scrollTo(0, scrolly);
    });

});

/* Window Load and Resize JS */
jQuery(window).on('load resize', function() {
    var window_size = jQuery(window).width();
    if (window_size <= 991) {

        // jQuery('body').on('click', '#primary-menu .menu-item-has-children', function() {
        //     if ((jQuery(this).hasClass('active-sub-menu'))) {
        //         jQuery(this).removeClass('active-sub-menu');
        //         jQuery(this).find('.sub-menu').css('display', 'none');
        //     } else {
        //         jQuery(".menu-item-has-children").removeClass('active-sub-menu');
        //         jQuery(".sub-menu").css('display', 'none');
        //         jQuery(this).addClass('active-sub-menu');
        //         jQuery(this).find('.sub-menu').css('display', 'block');
        //     }
        // });
        /* CTA button JS */
        jQuery(window).scroll(function() {
            var window_size_scroll = jQuery(window).width();
            if (window_size_scroll <= 991) {

                if (jQuery(this).scrollTop() > 100) {
                    console.log("demo cta" + window_size_scroll);
                    jQuery(".cta-btn").fadeIn();
                    jQuery(".cta-btn").css("display", "inline-flex");
                } else {
                    jQuery(".cta-btn").fadeOut();
                }
            }
        });
    }
});