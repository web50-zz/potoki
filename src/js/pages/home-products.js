$(function() {
    
if($('.home-products__content_2,.home-products__content_3,.home-products__content_4').length >0){
    let a =  $('.home-products__content_2 a,.home-products__content_3 a,.home-products__content_4 a');
    a.on('mouseover',
        function(){
            $(this).parent().parent().addClass('active');
        }
    )
    a.on('mouseout',
        function(){
            $(this).parent().parent().removeClass('active');
        }
    )
}
});