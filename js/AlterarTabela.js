$(function () {
    $("td").dblclick(function () {  
        var id = $(this).attr('value');
        if (id !== 'idusu'){
            var conteudoOriginal = $(this).text();
            $('#box2').html("-Alterando: "+$(this).attr('id'));
            $(this).addClass("celulaEmEdicao");
            $(this).html("<input class='input-medium' type='text' value='" + conteudoOriginal + "' id='newValue'/>");
            $(this).children().first().focus();
            
            $(this).children().first().keypress(function (e) {            
                if (e.which === 13) {
                    var parId = (""+$(this).parent().attr('id'));
                    var split = parId.split('-');          
                    $.post("alterBDTabela.php", {
                        col: split[0],
                        valor: $("#newValue").val(),
                        where: split[1]
                    }).done(function(data) {
                        alert(data);
                    });
                    var novoConteudo = $(this).val();
                    $(this).parent().text(novoConteudo);
                    $(this).parent().removeClass("celulaEmEdicao");
                    $('#box2').html("");
                }
            });

            $(this).children().first().blur(function(){
                $('#box2').html("");
                $(this).parent().text(conteudoOriginal);
                $(this).parent().removeClass("celulaEmEdicao");
            });
        }
    });
});