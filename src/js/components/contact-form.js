import 'jquery-ui/ui/effects/effect-slide';
$(function() {
    $('[data-contact-form=true]').on('click',function(e){
        e.preventDefault();
        let el = $('.contact-form-popup');

        if(el.hasClass('opened')){
            $('.contact-form-popup').removeClass('opened');
        }else{
            $('.contact-form-popup').addClass('opened');
        }
    });
    $('.contact-form-popup__close').on('click',function(){
        let el = $('.contact-form-popup');
        if(el.hasClass('opened')){
            $('.contact-form-popup').removeClass('opened');
        }
        //$('.main-nav').fadeOut('fast');
    });
    /*
    $('.main-contact__content .select_widget').on('click',function(){
        let el = $(this).parent().find('select');
        
        $(el).trigger('click');
    })
    */
})