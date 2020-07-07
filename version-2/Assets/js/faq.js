$(function(){
    $(".main_contact_faq h4").on("click", function(){      
        $(".main_contact_faq_desc").stop().slideUp();  
        $(this).parent().find(".main_contact_faq_desc").stop().slideToggle();
        

        if($(this).find("span").text() == "+"){
            $(this).find("span").text("-");
        }else{
            $(this).find("span").text("+");
        }
    });
});