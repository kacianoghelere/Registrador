<?php
    function subMenu($x,$style,$quant) {        
        for ($i = 0; $i < $quant; $i++){
            echo '<a class="btn btn-'.$style.'" id="sub'.$x.$i.'">Sub-Menu '.$x.$i.'</a>'; 
        }
    }
?>
