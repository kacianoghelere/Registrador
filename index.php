<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
    <?php include('header.php'); ?>
    </head>
    <body>
        <script type="text/javascript" src="js/validalogin.js"></script>
        <div class="well-small offset5"  align="center" style="width: 500px; background-color:#CDCDCD">
            <form id="frmLogin" action="ajax/logar.php" method="post" >
                <fieldset class="form-horizontal" >
                    <legend align="center" style="font: menu"><h1>Entrar</h1></legend>

                    <div class="loader" style="display: none;"><img src="image/loader.gif" alt="Carregando"></img></div>
                    <div class="mensagem-erro"></div><br/>

                    <div class="control-group">
                        <label for="login" class="control-label"><b>Usuario</b></label> 
                        <div class="controls">
                            <input type="text" id="login" name="login" placeholder="E-mail" value="kaciano_ghelere@yahoo.com.br" style="height: 30px;"></input>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="senha" class="control-label"><b>Senha</b></label> 
                        <div class="controls">
                            <input type="password" id="senha" placeholder="******" name="senha" value="123456" style="height:30px;"></input>
                        </div>
                    </div>

                    <div class="form-actions" style="background-color:#CDCDCD">
                        <input class="btn btn-info" type="submit" value="Entrar"></input>
                    </div>
                </fieldset>
            </form>
        </div>        
    </body>
</html>
