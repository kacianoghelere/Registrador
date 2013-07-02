<?php
    function subMenu1() {
        for ($i = 0; $i < 10; $i++){
            echo '<a class="btn btn-info" id="sub1'.$i.'">Sub-Menu 1'.$i.'</a>'; 
        }
    }
    function subMenu2() {
        for ($i = 0; $i < 5; $i++){
            echo '<a class="btn btn-success" id="sub2'.$i.'">Sub-Menu 2'.$i.'</a>'; 
        }
    }
    function subMenu3() {
        for ($i = 0; $i < 5; $i++){
            echo '<a class="btn btn-danger" id="sub3'.$i.'">Sub-Menu 3'.$i.'</a>'; 
        }
    }
?>
