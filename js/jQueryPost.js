$(document).ready(function(){
    $('#botao').click(function(){
        $.post("poster.php", { auto2: $("#auto2").val()}).done(function(data) {
            jQuery("#box").html(data);
        });
    });                    
});