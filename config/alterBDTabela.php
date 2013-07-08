<?php

    require_once('conn.php');

    function getPost($key) {
        return $_POST[$key];
    }
    if (isset($_POST['valor'])) {
        $valor = getPost('valor');
        $col = getPost('col');
        $where= getPost('where');
        $sql = "update t_usu set {$col} = '{$valor}' WHERE idusu = {$where}";
        mysql_query($sql);
        echo $valor.'|'.$col.'|'.$where;
    } else {
        echo 'Não recebi nada...';
    }
?>