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
});
