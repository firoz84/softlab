(function($) {
    "use strict";

    $(document).ready(function () {

        $('#hamburger').on('click', function() {            
            $('.mobile-nav').addClass('show');
            $('.overlay').addClass('active');
        });

        $('.close-nav').on('click', function() {            
            $('.mobile-nav').removeClass('show');            
            $('.overlay').removeClass('active');          
        });

        $(".overlay").on("click", function () {
            $(".mobile-nav").removeClass("show");
            $('.overlay').removeClass('active');
        });

        $("#mobile-menu").metisMenu();


        /* =============================================
            # owlCarousel init
        ===============================================*/

        $(".testimonial_widget").owlCarousel({        
            items: 1,     
            dots: true,
            loop: true,
            autoplayTimeout: 2000,
            autoplay:true,
            nav: true,   
            smartSpeed: 2000,
            animateOut: "slideOutLeft",
            animateIn: "slideInRight",
            navText: ['<i class="far fa-angle-right"></i>', '<i class="far fa-angle-left"></i>'],
           
        });

        /*==========================
           Scroll To Up Init
        ============================*/
        $.scrollUp({
            scrollName: 'scrollUp',
            topDistance: '1110',
            topSpeed: 2000,
            animation: 'slide',
            animationInSpeed: 300,
            animationOutSpeed: 300,
            scrollText: '<i class="fal fa-angle-up"></i>',
            activeOverlay: false, 
        });

        new WOW().init();

        $('.counter').counterUp({
            delay: 10,
            time: 3000
        });
        
    }); // end document ready function

})(jQuery); // End jQuery
