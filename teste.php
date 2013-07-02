<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <?php include('header.php'); ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Teste JQuery</title>
        <style type="text/css">#box {color: #51a351;}</style>
        <script type="text/javascript" src="js/prototipoMenu.js"></script>
    </head>
    <!------------------------------------------------------------------------->
    <body>        
        <span>
        <div id="box" class="well" style="width: 200px; height: 50px; font-size: x-large;" align="center"></div><br>
        <div id="divforms" class="well"  align="center" 
             style="width: 200px; background-color:#CDCDCD">            
            <p>
            <form action="" id="formteste">                 
                <div>
                    <a class="btn btn-info" id="menu">Menu Principal 1</a>
                    <a class="btn btn-info" id="sub11" style="display: none;">Sub-Menu 11</a>
                    <a class="btn btn-info" id="sub12" style="display: none;">Sub-Menu 12</a>
                    <a class="btn btn-info" id="sub13" style="display: none;">Sub-Menu 13</a>
                </div>   
                <div>
                    <a class="btn btn-success" id="menu2">Menu Principal 2</a><br/>
                    <a class="btn btn-success" id="sub21" style="display: none;">Sub-Menu 21</a>
                    <a class="btn btn-success" id="sub22" style="display: none;">Sub-Menu 22</a>
                    <a class="btn btn-success" id="sub23" style="display: none;">Sub-Menu 23</a>
                </div>   
                <div>
                    <a class="btn btn-danger" id="menu3">Menu Principal 3</a><br/>
                    <a class="btn btn-danger" id="sub31" style="display: none;">Sub-Menu 31</a>
                    <a class="btn btn-danger" id="sub32" style="display: none;">Sub-Menu 32</a>
                    <a class="btn btn-danger" id="sub33" style="display: none;">Sub-Menu 33</a>
                </div> 
            </form>
            </p>
        </div>     
        </span>
    </body>
</html>