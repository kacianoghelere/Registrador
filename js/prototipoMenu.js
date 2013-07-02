$(document).ready(function(){
    var visivel1 = false;    
    for (var i = 1; i <= 3; i++){
    $("#menu"+i).click(function(){   
        if (!visivel1) {            
            $("#"+$(this).attr('id')+"sub").fadeIn();            
            visivel1 = true;             
            $("#box").html($(this).attr('id')+" aberto!");     
        } else {
            $("#"+$(this).attr('id')+"sub").fadeOut();
            visivel1 = false;
            $("#box").html($(this).attr('id')+" fechado!");           
        }    
    });} 
});