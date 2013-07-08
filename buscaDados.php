<?php
    $hostname = "localhost";
    $user = "root";
    $pass = "d0v4hk11n";
    $basedados = "db_site";
    $connect = mysql_connect($hostname,$user,$pass) or die 
            ("Impossível estabelecer conexão com o servidor de banco de dados");
    mysql_select_db($basedados) or die ("Impossivel estabelecer conexão com o banco de dados");

    //busca valor digitado no campo autocomplete "$_GET['term']
    $text = mysql_real_escape_string($_GET['term']);
    $query = "SELECT * FROM t_usu WHERE codusu LIKE '%".$text."%' ORDER BY codusu";
    $result = mysql_query($query);
    //formata o resultado para JSON
    $json = '[';
    $first = true;
    while($row = mysql_fetch_array($result))
    {
        if (!$first) { $json .=  ','; } else { $first = false; }
        $json .= '{"value":"'.utf8_encode($row['codusu']).'"}';
    }
    $json .= ']';

    echo $json;
?>
