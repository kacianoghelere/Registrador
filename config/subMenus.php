<?php
    function miniMenu($x,$mini,$color){
        for ($i = 0; $i < sizeof($mini); $i++){
            echo '<a class="btn" id="mini'.$x.$i.'" style="width: 80px;  border: 1px solid '.$color.';">'.$mini[$i].'</a>';
        }
    }
    function subMenu($x,$style,$subs) {     
        //$colors = ['green','dodgerblue','red','black','yellow','gray'];
        $colors = ['gray','gray','gray','gray','gray','gray'];
        $color = $colors[$x];
        for ($i = 0; $i < sizeof($subs); $i++){            
           // echo '<div>menu'.$x.'sub'.$i.'</div>';
            //echo '<a class="btn btn-'.$style.'" id="'.$x.'sub'.$i.'" style="width: 100px;"
            echo '<a class="btn btn-inverse" id="'.$x.'sub'.$i.'" style="width: 100px;" 
                onclick="showMini(this.id)">'.$subs[$i][0].'</a>'; 
            if (sizeof($subs[$i][1]) >= 1) {
                $mini = $subs[$i][1];
                echo '<div id="menu'.$x.'sub'.$i.'" style="width: 150px; display: none;">';
                        miniMenu("$x"."$i",$mini,$color);
                echo '</div>';           
            }
        }
    }
    function menu($menus){
        //$style = ["success","info","danger","inverse","warning","btn"];        
        $style = ["btn","btn","btn","btn","btn","btn"];        
        for ($i = 0; $i < sizeof($menus); $i++){  
            $menu = $menus[$i][1];
            echo "<div>";
                echo "<a class='btn btn-".$style[$i]."' id='menu".$i."' onclick='showSub(this.id)' 
                    style='width: 125px; height: 30px; border: 1px solid black;'>
                    ".$menus[$i][0]."</a>";
                echo "<div class='control-group' id='menu".$i."sub' style='width: 150px; display: none;'>";  
                    subMenu($i,$style[$i],$menu);            
                echo "</div>";
            echo "</div>";
        }
    }
    function menus() {
        //----------------------------------------------------------------------
        $sub1[1] = ["Cadastrar","Alterar","Excluir"];
        $sub1[2] = ["Cadastrar","Alterar"];
        $menu[1] = [["Usuarios",$sub1[1]],["Funcionarios",$sub1[2]]];
        //----------------------------------------------------------------------
        $sub2[1] = [];
        $menu[2] = [["Historico",$sub2[1]]];
        //----------------------------------------------------------------------
        $sub3[1] = ["Marcas","Distribuidores"];
        $sub3[2] = [];
        $menu[3] = [["Informações",$sub3[1]],["Controle",$sub3[2]]];
        //----------------------------------------------------------------------
        $menus = [["Cadastros",$menu[1]],["NF",$menu[2]],["Produtos",$menu[3]]];
        menu($menus);
    }
?>
