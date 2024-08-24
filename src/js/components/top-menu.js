//import 'jquery-ui/ui/effects/effect-slide';
$(function() {
    $('#buter_btn').on('click',function(){
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $('.main-nav').slideDown();
        }else{
            $('.main-nav').fadeIn('fast');
            $('.main-nav__potoki1 svg').addClass(' animate__animated animate__slideInUp');
        }
        //$('.main-nav').fadeIn('fast');
        //$('.main-nav').show("slide", { direction: "right" }, 1200);
        $('.main-nav__potoki2 svg').addClass(' animate__animated animate__slideInDown');
        
    });
    $('.main-nav__close').on('click',function(){
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $('.main-nav').slideUp();
            
        }else{
            $('.main-nav').fadeOut('fast');
            $('.main-nav__potoki1 svg').removeClass(' animate__animated animate__slideInUp');
        }
        $('.main-nav__potoki2 svg').removeClass('animate__animated animate__slideInDown');
        
        //$('.main-nav').hide("slide", { direction: "right" }, 1200);
        //$('.main-nav').fadeOut('fast');
    });
})