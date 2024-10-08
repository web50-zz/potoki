import * as $ from "jquery";

$(function() {
    if($('.marquee2').length == 1){
        $('.marquee2__close').on('click',function(){
            $(this).hide();
            $('.marquee2').hide();
            $('header').removeClass('with_marquee');
        })
    }
});