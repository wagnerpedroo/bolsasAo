$(document).ready(function () {
    $(window).on('scroll', function() {
        if($(window).scrollTop()) {
            $('nav').addClass('bgscroll')
        }else {
            $('nav').removeClass('bgscroll')
        }
    })
})