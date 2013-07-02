<?php
    include('infoPainel.php');
    include_once('./config/TabelaUsuario.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Painel do usuário logado</title>
        <?php include('header.php'); ?>
        <script type="text/javascript" src="js/funcTabela.js"></script>             
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
            <div id="box" class="well" style="width: 700px; display:none;">
                <table class="table table-bordered table-hover">
                    <?php
                        //Exibe as linhas encontradas na consulta
                        while ($row = mysql_fetch_array($info)) {
                    ?>
                    <caption><strong>Cadastrados</strong></caption>
                    <thead>
                        <th>#</th>
                        <th>Codigo</th>
                        <th>Usuario</th>
                        <th>Senha</th>
                        <th>Nome</th>
                    </thead>
                    <tr>
                        <td> <?php echo $row['idusu'];   ?></td>                    
                        <td> <?php echo $row['altcod'];  ?></td>
                        <td> <?php echo $row['codusu'];  ?></td>
                        <td> <?php echo $row['senusu'];  ?></td>
                        <td> <?php echo $row['nomeusu']; ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>            
            </div>            
            <a href='#' class="btn btn-danger" >Cadastrados</a>
        </div>
    </body>
</html>
