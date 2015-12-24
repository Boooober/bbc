
(function(){
    $(window).on('load', function () {

        /** Preloader */
        var $preloader = $('#preloader'),
            $animation   = $preloader.find('.loader-cell');
        $animation.fadeOut();
        $preloader.delay(300).fadeOut('slow');
    });
})(jQuery);





jQuery( document ).ready(function( $ ) {

    var windowWidth = $(window).width();


    var anchors = ['home', 'service', 'facts', 'app', 'news', 'charter', /*'qrent',*/ 'contacts' ];

    $('#fullpage').fullpage({
        anchors: anchors,
        scrollOverflow: true,
        onLeave: function(index, nextIndex, direction){
            var leavingSection = $(this);

            leavingSection.find('video').each(function(){
                $(this)[0].pause();
            });
        },
        afterLoad: function(anchorLink, index){
            var loadedSection = $(this);

            loadedSection.find('video').each(function(){
                var video = $(this);

                if(video.css('display') == 'block' || video.css('display') == 'inline-block'){
                    video[0].play();
                }
            });
        }
    });

    $('#next').click(function(){
        $.fn.fullpage.moveSectionDown();
    });

    // go up
    $('#logo').click(function(){
        $.fn.fullpage.moveTo(1);
        return false;
    });




    addAndRemoveBlack();
    activeLink();
    removeNext();
    $(window).on('hashchange', function(){
        addAndRemoveBlack();
        activeLink();
        removeNext();
    });

    function addAndRemoveBlack (){
        if(window.location.hash == '#qrent' || window.location.hash == '#news'){
            $('.box-aside-nav').addClass('box-aside-nav-black');
            $('.header').addClass('header-black');
            $('.next').addClass('next-black');
            $('.fixed-header .logo path').each(function(){
                $(this).css('fill', 'black');
            });
        } else {
            $('.box-aside-nav').removeClass('box-aside-nav-black');
            $('.header').removeClass('header-black');
            $('.next').removeClass('next-black');
            $('.fixed-header .logo path').each(function(){
                $(this).css('fill', 'white');
            });
        }
    }

    function removeNext(){
        if(window.location.hash == '#'+anchors[anchors.length - 1]){
            $('.next').css('display', 'none');
        }else{
            $('.next').css('display', 'block');
        }
    }


    // Owl Carusel plugin settings
    var owl = $('.owl-carousel-events');
    owl.owlCarousel({
        margin:40,
        responsiveClass:true,
        nav: true,
        navText: '',

        responsive:{
            0:{
                items:1
            },
            520:{
                items:2
            },
            1000:{
                items:3
            },
            1200:{
                slideBy: 1,
                items:4,
                loop:false
            }

        }
    });

    var owl = $('.owl-carousel-news');
    owl.owlCarousel({
        margin:40,
        responsiveClass:true,
        nav: true,
        navText: '',

        responsive:{
            0:{
                items:1
            },
            520:{
                items:2
            },
            1000:{
                items:3
            },
            1200:{
                slideBy: 1,
                items:4,
                loop:false
            }
        }
    });
//    $('.owl-prev').click(function() {
//        owl.trigger('prev.owl.carousel');
//    });
//    $('.owl-next').click(function() {
//        owl.trigger('next.owl.carousel');
//    });









    function activeLink(){
        $('.box-aside-nav a').each(function(){
            $(this).removeClass('active');
            if ($(this).attr('href') == window.location.hash ){
                $(this).addClass('active');
            }

        });
    }



    //Switching content on mouseenter
    (function(){
        $('.switch-trigger').mouseenter(function(){
            var target = $(this),
                switchTarget = target.data('switch');
            target.closest('.switcher').find('.content-switch .entry-content').each(function(){
                if($(this).data('target') === switchTarget){
                    $(this).fadeIn(350);
                }else{
                    $(this).fadeOut(350);
                }
            });
        });
    })();



    (function changers(){
        $('.switch-trigger').mouseenter(function(){
            var switcher = $(this),
                targetBg = switcher.data('background'),
                targetDesc = switcher.data('description'),
                targetUndertitle = switcher.data('undertitle');

            switcher.closest('div.switching').find('.switch-background video, .switch-background img').each(function(){
                if($(this).data('background') === targetBg){
                    $(this).addClass('active');

                    if( $(this).is('video') ) $(this)[0].play();
                    if( $(this).is('img') ) $(this).addClass('animate');

                }else{
                    $(this).removeClass('active');

                    if( $(this).is('video') ) $(this)[0].pause();
                    if( $(this).is('img') ) $(this).removeClass('animate');
                }
            });
            switcher.closest('div.switching').find('.box-undertitle .js-undertitle').each(function(){
                if($(this).data('undertitle') === targetUndertitle){
                    $(this).fadeIn(200);
                }else{
                    $(this).fadeOut(200);
                }
            });
            switcher.closest('div.switching').find('.box-description .js-description').each(function(){
                if($(this).data('description') === targetDesc){
                    $(this).fadeIn(200);
                }else{
                    $(this).fadeOut(200);
                }
            });
        });

        $('.switch-image').mouseenter(function(){
            var switcher = $(this),
                targetImg = switcher.data('image');

            switcher.closest('div.switching').find('.inner-images figure').each(function(){
                var img = $(this);
                if(img.data('image') === targetImg ){
                    img.addClass('active');
                } else{
                    if(img.hasClass('active')){
                        img.removeClass('active');
                    }
                }
            });
        });

    })();



//    push-page from http://tympanus.net/Development/FullscreenOverlayStyles/

    (function() {
        var container = document.querySelector( 'div.container' ),
            overlay = document.querySelector( 'div.overlay' ),
            html = document.querySelector('html'),

//            triggerBttn = document.getElementById( 'trigger-overlay' ),
//            closeBttn = overlay.querySelector( 'button.overlay-close'),


            transEndEventNames = {
                'WebkitTransition': 'webkitTransitionEnd',
                'MozTransition': 'transitionend',
                'OTransition': 'oTransitionEnd',
                'msTransition': 'MSTransitionEnd',
                'transition': 'transitionend'
            },
            transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
            support = { transitions : Modernizr.csstransitions };


        $(document).on('click', '.js-menu-trigger', toggleOverlay);
        $(document).on('click', '.overlay-close', toggleOverlay);


        function toggleOverlay() {
            //close overlay

            if( classie.has( overlay, 'open' ) ) {
                classie.remove( overlay, 'open' );
                classie.remove( html, 'hide-all' );
                classie.remove( container, 'overlay-open' );

                $.fn.fullpage.setAllowScrolling(true);


                classie.add( overlay, 'close' );



                var onEndTransitionFn = function( ev ) {
                    if( support.transitions ) {
                        if( ev.propertyName !== 'visibility' ) return;
                        this.removeEventListener( transEndEventName, onEndTransitionFn );
                    }
                    classie.remove( overlay, 'close' );

                };
                if( support.transitions ) {
                    overlay.addEventListener( transEndEventName, onEndTransitionFn );
                }
                else {
                    onEndTransitionFn();
                }
            }
            else if( !classie.has( overlay, 'close' ) ) {
                classie.add( overlay, 'open' );
                classie.add( container, 'overlay-open' );
                classie.add( html, 'hide-all' );

                $.fn.fullpage.setAllowScrolling(false);
            }
        }


        $('.cat-menu a').click(menuEsc);
        $('#menu-logo').click(menuEsc);

        function menuEsc (){

            event.preventDefault();
            var link = $(this),
                href = link.attr('href').substring(link.attr('href').indexOf('#')+1);

            toggleOverlay();

            setTimeout(function(){
                $.fn.fullpage.moveTo(href);
                $.fn.fullpage.setAllowScrolling(true);
            }, 150);

        }

    })();



    //AJAX email send
    (function(){
        var form = $('#feedback-form'),
            submitted,
            inputs,
            errorFlag = false;

        //form submit
        form.submit(function(){
            event.preventDefault();
            submitted =$(this);

            console.log($(this));
            inputs =  submitted.find('.form-input');

            inputs.blur(checkClass);

            // set error class
            inputs.each(checkClass);
            inputs.each(checkError);

            console.log(errorFlag);
            if (!errorFlag) sendAJAX();
        });

        function checkClass (){
            var input = $(this);

            if (input.val() == '' && input.attr('name') != 'fphone'){
                input.addClass('error');
                errorFlag = true;

            }else{
                input.removeClass('error');
                errorFlag = false;
                if(input.attr('name') == 'femail'){
                    var email = jQuery.trim(input.val());
                    if(!validEmail(email)) {
                        input.addClass('error');
                        errorFlag = true;
                    }
                }
            }
        }

        function checkError(){
            var input = $(this);
            if (input.val() == '' && input.attr('name') != 'fphone'){
                errorFlag = true;
                return false;
            }else{
                if(input.attr('name') == 'femail'){
                    var email = jQuery.trim(input.val());
                    if(!validEmail(email)) {
                        errorFlag = true;
                        return false;
                    }
                }else{
                    errorFlag = false;
                }
            }
        }

        function validEmail(email){
            var reg = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
            return reg.test(email);
        }

        function sendAJAX(){
            var data = submitted.serialize(),
                responseContainer = submitted.next();

            $.ajax({
                url : BBCmain.ajax_url,
                type : 'post',
                data : {
                    data: data,
                    bbc_nonce : BBCmain.bbc_nonce,
                    action : 'send_email'
                },
                success : function( response ) {

                    //console.log('success');
                    console.log(response);

                    var resp = $(response);

                    responseContainer.append( resp );
                    resp.addClass('open--popup');

                    setTimeout(function(){
                        resp.removeClass('open--popup').addClass('close--popup');
                        setTimeout(function(){
                            resp.remove();
                        },700);
                    }, 2000);


                },
                error: function(){
                    console.log('error');
                }
            });
        }

    })();
});
