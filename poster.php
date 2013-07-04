<?php
    function getPost($key) {
        return utf8_decode(pg_escape_string($_POST[$key]));
    }
    if (isset($_POST['auto2'])) {
        $poster = getPost('auto2');
        echo $poster;
    } else {
        echo 'Não recebi nada...';
    }
?>