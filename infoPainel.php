<?php
    // Incluindo arquivo de conexão/configuração
    require_once('config/conn.php');

    // Instanciando novo objeto da classe Login
    $objLogin = new Login();

    // Verificando se o usuário está logado, caso contrá será redirecionado para a página de login
    if (!$objLogin->verificar('index.php'))
        // Finalizado o script, apenas para garantir que o usuário irá ver o conteúdo da página
        exit;

    // Selecionando informações do usuário
    $query = mysql_query("SELECT * FROM t_usu WHERE idusu = {$objLogin->getID()}");
    $usuario = mysql_fetch_object($query);
?>