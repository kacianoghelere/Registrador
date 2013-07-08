<?php
    // Incluindo arquivo de conexão/configuração

    require_once('conn.php');

    // Instanciando novo objeto da classe Login
    $objLogin = new Login();

    // Verificando se o usuário está logado, caso contrá será redirecionado para a página de login
    if (!$objLogin->verificar('index.php'))
        // Finalizado o script, apenas para garantir que o usuário irá ver o conteúdo da página
        exit;

    // Selecionando informações do usuário
    $query = mysql_query("SELECT * FROM t_usu WHERE idusu = {$objLogin->getID()}");
    $usuario = mysql_fetch_object($query);    
    
    function setRows($res){
        echo '<table class="table table-hover">';
            echo '<legend><strong>Cadastrados</strong><div id="box2"/></legend>';                    
            echo '<thead>';
                echo '<th>#</th>';
                echo '<th>Codigo</th>';
                echo '<th>Usuario</th>';
                echo '<th>Senha</th>';
                echo '<th>Nome</th>';
            echo '</thead>';
            echo '<tbody>';
            while ($row = mysql_fetch_array($res)) { 
                echo '<tr>';
                    echo '<td id="idusu-'.$row['idusu'].'"   value="idusu">'.$row['idusu'].'</td>';                      
                    echo '<td id="altcod-'.$row['idusu'].'"  value="altcod">'.$row['altcod'].'</td>';                       
                    echo '<td id="codusu-'.$row['idusu'].'"  value="codusu">'.$row['codusu'].'</td>';                      
                    echo '<td id="senusu-'.$row['idusu'].'"  value="senusu">'.$row['senusu'].'</td>';                       
                    echo '<td id="nomeusu-'.$row['idusu'].'" value="nomeusu">'.$row['nomeusu'].'</td>';                 
                echo '</tr>';
            }   
            echo '</tbody>';
        echo '</table>';
    }       
?>
