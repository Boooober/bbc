(function($){
    $( document ).ready(function() {
        var mainScene,
            b1, b2, b3, b4, b7, bc;

        mainScene = new ScrollMagic.Controller({
            globalSceneOptions: {
                //reverse: true
            }
        });


        b1 = new TimelineLite();
        b1.from('#box-1 .box-title', 1.4, {y:100, autoAlpha:0})
          .from('.description', 0.7, {y:70, autoAlpha:0}, 0.7).delay(0.1);

        new ScrollMagic.Scene({
            triggerElement: '#box-1'
        })
            .setTween(b1)
            .addTo(mainScene);


        b2 = new TimelineLite();
        b2.staggerFrom("#box-2 .right .col", 0.7, {ease: Sine.easeOut, y:100, autoAlpha:0}, 0.1)
          .from('#box-2 .left', 1, {autoAlpha:0}, 1);

        new ScrollMagic.Scene({
            triggerElement: '#box-2'
        })
            .setTween(b2)
            .addTo(mainScene);


        b3 = new TimelineLite();
        b3.staggerFrom("#box-3 .col", 0.7, {ease: Sine.easeOut, y:70}, 0.1);


        new ScrollMagic.Scene({
            triggerElement: '#box-3'
        })
            .setTween(b3)
           /* .add(function(){
                setTimeout(function(){
                    $('#box-3 .numbinc').each(function () {
                        var $this = $(this);
                        jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                            duration: 3000,
                            step: function () {
                                $this.text(Math.ceil(this.Counter));
                            }
                        });
                    });
                },1000);
            })*/
            .addTo(mainScene);


        b4 = new TimelineLite();
        b4.staggerFrom("#box-4 .col", 0.8, {ease: Sine.easeOut, y:70}, 0.2);


        new ScrollMagic.Scene({
            triggerElement: '#box-4'
        })
            .setTween(b4)
            .addTo(mainScene);

        b7 = new TimelineLite();
        b7.staggerFrom("#box-7 .col", 0.8, {ease: Sine.easeOut, y:100}, 0.2);


        new ScrollMagic.Scene({
            triggerElement: '#box-7'
        })
            .setTween(b7)
            .addTo(mainScene);

        bc = new TimelineLite();
        bc.from("#contacts-box .box-content", 0.8, {ease: Sine.easeOut, y:100, autoAlpha:0});


        new ScrollMagic.Scene({
            triggerElement: '#contacts-box'
        })
            .setTween(bc)
            .addTo(mainScene);

    });
})(jQuery);