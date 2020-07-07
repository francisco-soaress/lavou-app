$(function(){
    $('.box').fadeIn(2000).css('display', 'flex');
    
    $('.box_modal_close').click(function(){
        $('.box_modal').fadeOut(400, function(){
            $('.box').fadeOut();
        });
    });
});


