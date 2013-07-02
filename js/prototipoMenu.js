$(document).ready(function(){
    var visivel1 = false;                
    $("#menu").click(function(){   
        //alert($(this).attr('id'));
        //alert($("#sub1").css('display'));
        if (!visivel1) {
            $("#sub1").show();            
            visivel1 = true;             
            $("#box").html($(this).attr('id')+" aberto!");     
        } else {
            $("#sub1").hide();
            visivel1 = false;
            $("#box").html($(this).attr('id')+" fechado!");           
        }    
    });
    var visivel2 = false;                
    $("#menu2").click(function(){                    
        if (!visivel2) {
            $("#sub2").show();            
            visivel2 = true;             
            $("#box").html($(this).attr('id')+" aberto!");     
        } else {
            $("#sub2").hide();
            visivel2 = false;
            $("#box").html($(this).attr('id')+" fechado!");           
        }    
    });
    var visivel3 = false;                
    $("#menu3").click(function(){                    
        if (!visivel3) {
            $("#sub3").show();            
            visivel3 = true;             
            $("#box").html($(this).attr('id')+" aberto!");     
        } else {
            $("#sub3").hide();
            visivel3 = false;
            $("#box").html($(this).attr('id')+" fechado!");           
        }    
    });
});