<?php
    function miniMenu($x,$quant){
        for ($i = 1; $i <= $quant; $i++){
            echo '<a class="btn" id="mini'.$x.$i.'">MiniSub '.$x.$i.'</a>';
        }
    }
    function subMenu($x,$style,$quant) {     
        for ($i = 1; $i <= $quant; $i++){
            echo '<a class="btn btn-'.$style.'" id="sub'.$x.$i.'">Sub-Menu '.$x.$i.'</a>'; 
            echo '<div id="minisub'.$x.$i.'" style="display: none;">';
                miniMenu("$x"."$i",4);
            echo '</div>';
        }
    }
    function menu($j,$quant){
        $style = ["success","info","danger","inverse","warning","btn"];        
        for ($i = 1; $i <= $j; $i++){    
            echo "<div>";
                echo "<a class='btn btn-".$style[$i-1]."' id='menu".$i."'>Menu Principal ".$i."</a>";
                echo "<div id='menu".$i."sub' style='display: none;'>";            
                    subMenu($i,$style[$i-1],$quant);            
                echo "</div>";
            echo "</div>";
        }
    }
?>
