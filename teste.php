<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <?php include('header.php'); ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Teste JQuery</title>
        <style type="text/css">
            #box {
                color: #51a351;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
                var t = false;
                var t1 = false;                
                $("#teste").click(function(){                    
                    if (!t1) {
                        $("#teste1").hide();
                        t1 = true;
                        $("#box").html("Teste1 escondido!");      
                    } else {
                        $("#teste1").show();
                        t1 = false;
                        $("#box").html("Teste1 voltou!");      
                    }    
                });
                $("#teste1").click(function(){                    
                    if (!t) {
                        $("#teste").hide();
                        t = true;
                        $("#box").html("Teste escondido!");    
                    } else {
                        $("#teste").show();
                        t = false;
                        $("#box").html("Teste voltou!");
                    } 
                });
            });
        </script>
    </head>
    <!------------------------------------------------------------------------->
    <body>
        <script type="text/javascript" src="js/validalogin.js"></script>
        
        <div id="divforms" class="well-small offset5"  align="center" 
             style="width: 500px; background-color:#CDCDCD">
            <div id="box"></div><br>
            <form action="" id="teste">
                <fieldset  class="form-horizontal">                    
                    <div class="form-actions" style="background-color:#CDCDCD">
                        <input class="btn btn-info" value="teste"></input>
                    </div>                  
                </fieldset>
            </form>
            <form action="" id="teste1">
                <fieldset  class="form-horizontal">                    
                    <div class="form-actions" style="background-color:#CDCDCD">
                        <input class="btn btn-info" value="teste1"></input>
                    </div>                  
                </fieldset>
            </form>
        </div>        
    </body>
</html>
