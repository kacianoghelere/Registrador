$(document).ready(function(){
    var visivel1 = false;                
    $("#menu").click(function(){                    
        if (!visivel1) {
            $("#sub11").show();
            $("#sub12").show();
            $("#sub13").show();
            visivel1 = true;             
            $("#box").html($(this).attr('id')+" aberto!");     
        } else {
            $("#sub11").hide();
            $("#sub12").hide();
            $("#sub13").hide();
            visivel1 = false;
            $("#box").html($(this).attr('id')+" fechado!");           
        }    
    });
    var visivel2 = false;                
    $("#menu2").click(function(){                    
        if (!visivel2) {
            $("#sub21").show();
            $("#sub22").show();
            $("#sub23").show();
            visivel2 = true;
            $("#box").html($(this).attr('id')+" aberto!"); 
        } else {
            $("#sub21").hide();
            $("#sub22").hide();
            $("#sub23").hide();
            visivel2 = false;
            $("#box").html($(this).attr('id')+" fechado!");        
        }    
    });
    var visivel3 = false;                
    $("#menu3").click(function(){                    
        if (!visivel3) {
            $("#sub31").show();
            $("#sub32").show();
            $("#sub33").show();
            visivel3 = true;
            $("#box").html($(this).attr('id')+" aberto!"); 
        } else {
            $("#sub31").hide();
            $("#sub32").hide();
            $("#sub33").hide();
            visivel3 = false;
            $("#box").html($(this).attr('id')+" fechado!");        
        }    
    });
});