$(function() {
        setTimeout(function(){
                        $('.top-screen__potoki-image-two').addClass(' animate__animated animate__slideInUp');
                        $('.top-screen__potoki-image-one').addClass(' animate__animated animate__slideInDown');
                },
        2500);
        let topImagesExists = false;
        let topImageOne = $('.top-screen__potoki-image-one svg');
        let topImageTwo = $('.top-screen__potoki-image-two svg');
        if(topImageOne.length == 1 && topImageTwo.length == 1){
                topImagesExists = true;
        }
        $(window).on('scroll',function(){
                if(topImagesExists){
                        let current = $(this).scrollTop();
                        topImageOne.css('transform','translate(0px,'+ (current * 0.5) +'px)');
                        topImageTwo.css('transform','translate(0px,-'+ (current * 1.3) +'px)');
                }
        })
})