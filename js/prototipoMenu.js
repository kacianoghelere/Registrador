function showSub(id){    
    if ($("#"+id+"sub").is(':visible')) {        
        $("#"+id+"sub").hide();        
    } else {
        $("#"+id+"sub").show();
    }    
}
function showMini(id){
    if ($("#menu"+id).is(':visible')) {                
        $("#menu"+id).hide();
    } else {
        $("#menu"+id).show();
    }    
}
$(document).ready(function (){
    $('#mini000').click(function (){
        alert($(this).children().attr('id'));
        $('#tabela').show();
        $('#tabela').load('config/mini000.php');        
    });
});