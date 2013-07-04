<?php
    function miniMenu($x,$mini,$color){
        for ($i = 0; $i < sizeof($mini); $i++){
            echo '<a class="btn" id="mini'.$x.$i.'" style="width: 100px;  border: 1px solid '.$color.';">'.$mini[$i].'</a>';
        }
    }
    function subMenu($x,$style,$subs) {     
        $colors = ['green','dodgerblue','red','black','yellow','gray'];
        $color = $colors[$x];
        for ($i = 0; $i < sizeof($subs); $i++){
            $mini = $subs[$i][1];
            echo '<a class="btn btn-'.$style.'" id="sub'.$x.$i.'" style="width: 100px;">'.$subs[$i][0].'</a>'; 
            echo '<div id="minisub'.$x.$i.'" style="display: none; width: 150px;">';
                    miniMenu("$x"."$i",$mini,$color);
            echo '</div>';
        }
    }
    function menu($menus){
        $style = ["success","info","danger","inverse","warning","btn"];        
        for ($i = 0; $i < sizeof($menus); $i++){  
            $menu = $menus[$i][1];
            echo "<div>";
                echo "<a class='btn btn-".$style[$i]."' id='menu".$i."' style='width: 100px;  border: 1px solid black;'>".$menus[$i][0]."</a>";
                echo "<div id='menu".$i."sub' style='display: none; width: 150px;'>";  
                    subMenu($i,$style[$i],$menu);            
                echo "</div>";
            echo "</div>";
        }
    }
    function menus() {
        $sub1[1] = ["Cadastrar","Alterar","Excluir"];
        $sub1[2] = ["Cadastrar","Alterar"];
        $menu[1] = [["Usuarios",$sub1[1]],["Funcionarios",$sub1[2]]];

        $sub2[1] = ["Por data","Por numero"];
        $menu[2] = [["Historico",$sub2[1]]];

        $menus = [["Cadastros",$menu[1]],["NF",$menu[2]]];
        menu($menus);
    }
?>
