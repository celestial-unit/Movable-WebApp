(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    // Initiate the wowjs
    new WOW().init();

    // Navbar behavior
    $(window).scroll(function () {
        // Fixed Navbar for large screens
        if ($(window).width() >= 992) {
            if ($(this).scrollTop() > 45) {
                $('.fixed-top').addClass('bg-white shadow').css('top', -45);
                $('.navbar').addClass('sticky-top shadow-sm');
            } else {
                $('.fixed-top').removeClass('bg-white shadow').css('top', 0);
                $('.navbar').removeClass('sticky-top shadow-sm');
            }
        } else {
            // Mobile behavior
            if ($(this).scrollTop() > 45) {
                $('.fixed-top').addClass('bg-white shadow');
                $('.navbar').addClass('sticky-top shadow-sm');
            } else {
                $('.fixed-top').removeClass('bg-white shadow');
                $('.navbar').removeClass('sticky-top shadow-sm');
            }
        }
        
        // Back to top button visibility
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });

    // Back to top button click
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });

    // Skills animation with waypoints
    $('.skill').waypoint(function () {
        $('.progress .progress-bar').each(function () {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, {offset: '80%'});

    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });

    // Project carousel
    $(".project-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        loop: true,
        center: true,
        dots: false,
        nav: true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });

    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');
        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });

    // Handle contact form submission
    $('.contact-form').submit(function(e) {
        // Add loading state to button
        var submitButton = $(this).find('button[type="submit"]');
        
        if ($(this)[0].checkValidity() === false) {
            e.preventDefault();
            e.stopPropagation();
        } else {
            submitButton.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...');
            submitButton.prop('disabled', true);
        }
        
        $(this).addClass('was-validated');
    });

})(jQuery);

