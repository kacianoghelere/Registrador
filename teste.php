<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <?php 
            include('header.php'); 
            include 'subMenus.php';
        ?>
        <title>Teste JQuery</title>
        <style type="text/css">#box {color: #51a351;}</style>
        <script type="text/javascript" src="js/prototipoMenu.js"></script>

        <link rel="stylesheet" href="css/jquery-ui.css">
        <script src="js/jquery-ui-1.10.3.custom.js"></script>
        <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function()     {
//                $('#auto').autocomplete({
//                    source: "buscaDados.php",
//                    minLength: 1
//                });
                
                var tags = [ "c++", "java", "php", "coldfusion", "javascript", "asp", "ruby" ];
                $( "#auto" ).autocomplete({
                  source: function( request, response ) {
                          var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
                          response( $.grep( tags, function( item ){
                              return matcher.test( item );
                          }) );
                      }
                });
            });
        </script>
    </head>
    <!------------------------------------------------------------------------->
    <body>        
        <span>
            <div id="box" class="well" style="width: 300px; height: 50px; font-size: xx-large;" align="center"></div><br>
            <div id="divforms" class="well"  align="center" 
                 style="width: 200px; background-color:#CDCDCD">               
                <form action="" id="formteste">     
    <!--                <select id="sel1" style="width: 150px;">
                        <option value="opt1">1</option>
                        <option value="opt2">2</option>
                        <option value="opt3">3</option>
                        <option value="opt4">4</option>
                    </select>-->
                    <?php                    
                        menus(); 
                    ?>
                </form>
            </div>     
        </span>
        <span>
            <div id="divform" align="center" 
                 style="width: 200px; background-color:#CDCDCD">               
                <form action="" id="form">     
                    <input type="text" id="auto" />
                </form>
            </div>     
        </span>
    </body>
</html>