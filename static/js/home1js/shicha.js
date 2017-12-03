$(function(){

    $(window).on("scroll",function(){
        $value = $(window).scrollTop();
        // alert($value)
        $(".shicha").css({'background-position': -$value+"px "+"center"});
    })
})