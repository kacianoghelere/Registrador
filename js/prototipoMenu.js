$(document).ready(function(){           
    for (var i = 1; i <= 3; i++){
        $("#menu"+i).click(function(){   
            if ($("#"+$(this).attr('id')+"sub").css('display') === 'none') {                        
                $("#"+$(this).attr('id')+"sub").fadeIn();                    
                $("#"+$(this).attr('id')+"sub").css('display','inline-block');                
                $("#box").html($(this).attr('id')+" aberto!"); 
            } else {
                $("#"+$(this).attr('id')+"sub").fadeOut();
                $("#"+$(this).attr('id')+"sub").css('display','none');                
                $("#box").html($(this).attr('id')+" fechado!");  
            }               
        });        
    }
    for (var i = 1; i <= 3; i++){
        for (var j = 1; j <= 6; j++){
            $("#sub"+i+j).click(function(){                  
                if ($("#mini"+$(this).attr('id')).css('display') === 'none') {
                    $("#box").html($(this).attr('id')+" aberto!");      
                    $("#mini"+$(this).attr('id')).fadeIn(); 
                    $("#mini"+$(this).attr('id')).css('display','inline-block');
                } else {
                    $("#box").html($(this).attr('id')+" fechado!");      
                    $("#mini"+$(this).attr('id')).fadeOut(); 
                    $("#mini"+$(this).attr('id')).css('display','none'); 
                }                 
            });        
        }
    }    
});