$(function() {
    if($('.home-block-two').length == 1){
            $(window).on('scroll',function(){
                /*
                    if(topImagesExists){
                            let current = $(this).scrollTop();
                            topImageOne.css('transform','translate(0px,'+ (current * 0.5) +'px)');
                            topImageTwo.css('transform','translate(0px,-'+ (current * 1.3) +'px)');
                    }
                */
      }); 
      //console.log('erer');
      $(window).scroll(function() {
        var topImage = $('#home-block-two__potoki-image svg');
        var hT = $('#home-block-two').offset().top,
            hH = $('#home-block-two').outerHeight(),
            wH = $(window).height(),
            wS = $(this).scrollTop();
            // целикомif (wS > (hT+hH-wH)){
            if (wS > (hT-wH)){// топ каринки
                console.log('H1 on the view!');
                    let current = wS - hT;
                   // topImage.css('transform','translate(0px,'+ (current * 0.5) +'px)');
                     topImage.css('transform','translate(0px,-'+ (current * 1.3) +'px)');
            }else{

            }
     });
    }
});