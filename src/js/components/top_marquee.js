import * as $ from "jquery";
import store from "store";

$(function() {
    if($('.marquee2').length == 1){
        //let st = store.get('top_marquee');
        let st;
        if(st == 'hidden'){
            $('.marquee2__close').hide();
            $('.marquee2').hide();
            $('header').removeClass('with_marquee');
        }
        $('.marquee2__close').on('click',function(){
            $(this).hide();
            $('.marquee2').hide();
            $('header').removeClass('with_marquee');
            //store.set('top_marquee', 'hidden')
        })
    }
});