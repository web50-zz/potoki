
import ProgressBar from 'progressbar.js/dist/progressbar'

$(function() {

    if($('.preloader').length == 1){
        setTimeout(function(){
            $('.preloader').fadeOut();
        },2500);
        var bar = new ProgressBar.Line(container, {
            strokeWidth: 4,
            easing: 'easeInOut',
            duration: 2500,
            color: 'rgb(0, 175, 197)',
            trailColor: '#eee',
            trailWidth: 1,
            svgStyle: {width: '100%', height: '100%'}
        });
        bar.animate(1.0);  // Number from 0.0 to 1.0
    }
});