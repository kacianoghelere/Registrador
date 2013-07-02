<?php
    function mysqlexecuta($sql) {
        $dbname = "db_site"; // Indique o nome do banco de dados que será aberto
        $usuario = "root"; // Indique o nome do usuário que tem acesso
        $password = "d0v4hk11n"; // Indique a senha do usuário
        //----------------------------------------------------------------------
        //1º passo – Conecta ao servidor MySQL
        if (!($id = mysql_connect("localhost", $usuario, $password))) {
            echo ('Erro fatal 1!');
        }
        //----------------------------------------------------------------------
        //2º passo – Seleciona o Banco de Dados
        if (!($con = mysql_select_db($dbname, $id))) {
            echo ('Erro fatal 2');
        }
        //----------------------------------------------------------------------
        if (empty($sql) OR !($id)) {
            return 0; //Erro na conexão ou no comando SQL   
        }
        //----------------------------------------------------------------------
        if (!($res = @mysql_query($sql, $id))) {
            echo "Ocorreu um erro na execução do Comando SQL no banco de dados. 
                Favor Contactar o Administrador.";
            exit;
        }
        return $res;
    }    
    $sql = "select * from t_usu";			
    $info = mysqlexecuta($sql);      
?>
