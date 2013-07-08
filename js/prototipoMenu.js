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
    $('a').click(function (){
        alert($(this).attr('id'));
    });
});