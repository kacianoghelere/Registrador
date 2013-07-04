<?php
    function getPost($key) {
        return $_POST[$key];
    }
    if (isset($_POST['auto2'])) {
        $poster = getPost('auto2');
        echo $poster;
    } else {
        echo 'Não recebi nada...';
    }
?>