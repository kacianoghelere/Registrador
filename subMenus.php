<?php
    function subMenu($x,$style,$quant) {     
        for ($i = 0; $i < $quant; $i++){
            echo '<a class="btn btn-'.$style.'" id="sub'.$x.$i.'">Sub-Menu '.$x.$i.'</a>'; 
        }
    }
    function menu($j,$quant){
        $style = ["success","info","danger","inverse","warning","btn"];        
        for ($i = 1; $i <= $j; $i++){    
            echo "<div>
                    <a class='btn btn-".$style[$i-1]."' id='menu".$i."'>Menu Principal ".$i."</a>
                    <div id='menu".$i."sub' style='display: none;'>";
            
            subMenu($i,$style[$i-1],$quant);                          
            
            echo "</div>
            </div> ";
        }
    }
?>
