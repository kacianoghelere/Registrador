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
                <div>
                    <a class="btn btn-info" id="menu">Menu Principal 1</a>
                    <div id="sub1" style="display: none;">
                        <?php subMenu(1,"info",8); ?>
                    </div>
                </div>   
                <div>
                    <a class="btn btn-success" id="menu2">Menu Principal 2</a><br/>
                    <div id="sub2" style="display: none;">
                        <?php subMenu(2,"success",6); ?>
                    </div>
                </div>   
                <div>
                    <a class="btn btn-danger" id="menu3">Menu Principal 3</a><br/>
                    <div id="sub3" style="display: none;">
                        <?php subMenu(3,"danger",2); ?>
                    </div>
                </div> 
            </form>
        </div>     
        </span>
    </body>
</html>