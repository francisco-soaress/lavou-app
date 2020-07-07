$(function () {

//FORM SUBMIT
    $('.enviarForm').submit(function () {
        var dados = $(this).serialize();
        $.ajax({
            url: 'https://www.jfveventos.com.br/_send/pre-venda-20-congresso/enviar.php',
            data: dados,
            type: 'POST',
            dataType: 'json',
            beforeSend: function () {
                $('.sendForm').fadeOut(600);
                $('.box').fadeIn(2000).css('display', 'flex');
            },
            success: function (data) {
                console.clear();
                console.log(data);
                $('.box').fadeOut();
                window.setTimeout(function () {
                    window.location.href = "https://www.jfveventos.com.br/_send/success/";                    
                }, 500);
            },
            error: function () {
                $('.box').fadeOut();
                $('.texto04').fadeIn(2000);
            }
        });
        return false;
    });
});
