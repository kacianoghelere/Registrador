<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <?php 
            include('header.php'); 
            include 'subMenus.php';
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Teste JQuery</title>
        <style type="text/css">#box {color: #51a351;}</style>
        <script type="text/javascript" src="js/prototipoMenu.js"></script>
    </head>
    <!------------------------------------------------------------------------->
    <body>        
        <span>
        <div id="box" class="well" style="width: 300px; height: 50px; font-size: xx-large;" align="center"></div><br>
        <div id="divforms" class="well"  align="center" 
             style="width: 200px; background-color:#CDCDCD">            
            <form action="" id="formteste">                 
                <?php menu(3,6); ?>
            </form>
        </div>     
        </span>
    </body>
</html>