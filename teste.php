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

        <link rel="stylesheet" href="auto/jquery-ui.css">
        <script src="auto/jquery-1.9.1.js"></script>
        <script src="auto/jquery-ui.js"></script>              
        <script type="text/javascript">
            $(document).ready(function()     {
                $('#auto').autocomplete({
                    source: "buscaDados.php",
                    minLength: 1
                });
                $('#auto').blur(function (){
                    $('#auto2').html($(this).val());
                });
            });
        </script>
        
        <script src="js/jQueryPost.js"></script>
    </head>
    <!------------------------------------------------------------------------->
    <body>        
        <span class="span">
            <div id="box" class="well" style="width: 300px; height: 50px; font-size: xx-large;" align="center"></div><br>
            <div id="divforms" class="well"  align="center" 
                 style="width: 200px; background-color:#CDCDCD">               
                <form action="" id="formteste">                     
                    <?php menus(); ?>
                </form>
            </div>     
        </span>
        
        <span class="span">
            <div id="divform" align="center">               
                <form action="" id="form2" method="POST">    
                    <select id="sel1" style="width: 150px;">
                        <option value="opt1">1</option>
                        <option value="opt2">2</option>
                        <option value="opt3">3</option>
                        <option value="opt4">4</option>
                    </select>     
                    <div>
                        <input type="text" id="auto" nome="auto"/>
                    </div><div>
                        <input type="text" id="auto2" nome="auto2"/>
                    </div>
                    <div align='center'>                                                        
                        <a id="botao" value="kaciano" class='btn'>BOTAO</a>   
                    </div>
                </form>
            </div>     
        </span>
    </body>
</html>