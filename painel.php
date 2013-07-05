<?php 
    require_once './config/TabelaUsuario.php';
    include_once 'infoPainel.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Painel do usuário logado</title>
        <?php include('header.php'); ?>
        <script type="text/javascript" src="js/funcTabela.js"></script>             
        <script type="text/javascript" src="js/AlterarTabela.js"></script>
    </head>
    <body>
        <div>
            <div class="well" style="width: 300px;">
                <h1><strong>Painel</strong></h1>
                <p>Bem vindo <strong><?php echo $usuario->nomeusu; ?></strong></p>
                Informações da sessão:
                <ul>
                    <li><strong>ID:</strong> <?php echo $objLogin->getID() ?></li>
                    <li><strong>Login:</strong> <?php echo $objLogin->getLogin() ?></li>
                </ul>
                <a class="btn btn-danger" href="sair.php">Sair</a>
            </div>
            <a href='#' class="btn btn-danger" >Cadastrados</a>
            <div id="box" class="well" style="width: 700px; display:none;">
                <table class="table table-bordered table-hover">
                    <legend><strong>Cadastrados</strong><div id="box2"/></legend>                    
                    <thead>
                        <th>#</th>
                        <th>Codigo</th>
                        <th>Usuario</th>
                        <th>Senha</th>
                        <th>Nome</th>
                    </thead>
                    <tbody>
                        <?php                             
                            setRows($info); 
                        ?>
                    </tbody>
                </table>            
            </div>                       
        </div>
    </body>
</html>
