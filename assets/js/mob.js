jQuery( document ).ready(function( $ ) {


    // slide-toggle fixed panel
    (function(){
        var didScroll,
            lastScrollTop = 0,
            delta = 5,
            navbarHeight = $('.fixed-header').outerHeight();


        $(window).scroll(function(){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();

            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;

            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                $('.fixed-header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $('.fixed-header').removeClass('nav-up').addClass('nav-down');
                }
            }

            lastScrollTop = st;
        }
    })();



    //slidedown content on click
    (function(){
        $('.slide-trigger').click(function(){
            var trigger = $(this);

            trigger.find('.description').slideToggle();

            trigger.parent().siblings().find('.description').slideUp();
        });
    })();

});