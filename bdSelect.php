<?php
    function popular() {
        $hostname = "localhost";
        $user = "root";
        $pass = "d0v4hk11n";
        $basedados = "db_site";
        $connect = mysql_connect($hostname,$user,$pass) 
                or die ("Impossível estabelecer conexão com o servidor de banco de dados");
        mysql_select_db($basedados) 
        or die ("Impossivel estabelecer conexão com o banco de dados");

        $query = "SELECT * FROM t_usu ORDER BY idusu";
        $result = mysql_query($query);

        while($row = mysql_fetch_assoc($result)){       
            echo "<option value='".$row['codusu']."'>".$row['idusu']."</option>";
        }
    }
?>