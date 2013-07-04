$(document).ready(function()     {
    $('#botao').click(function(){
        var dados = $("#auto2").serialize();
        console.log(dados);
        jQuery.ajax({
            type: "POST",
            url: "poster.php",
            data: dados,
            success:function(info){
                jQuery("#box").html(info);
            },
            error:function(info){
                alert('Erro no POST!');
            }
        });
    });                    
});