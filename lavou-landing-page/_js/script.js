$(function(){
    $(".form_toggle h3").on("click", function(){
        // $(".content_toggle").stop().slideUp(400);
        // $(".content_toggle").stop().slideToggle(400);
       
        $(this).parent().find(".content_toggle").slideToggle();
        
    });
});