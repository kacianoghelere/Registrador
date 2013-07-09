<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Testes com modal</title>
        <?php include 'config/header.php'; ?>
        <script src="js/jquery.inputmask.js"></script>
        <script src="js/JQuery.Validate.js"></script>
        <script src="js/validaCpf.js"></script>
        <script src="js/jQueryCadastro.js"></script>
        <style type="text/css">
            .classecss{
               background-color: #ff8800;
               color: #ff8800;
            }
        </style>
        <script>
            var color = new Array();
            function highlight(id) {
                $('#box').html('Sobre o #'+id);             
                setColor($('#'+id).css('background-color'),id);
                $('#'+id).css('background-color','#ff8800');                
            }
            function offlight(id) {
                $('#box').html('Saiu do '+id);
                $('#'+id).css('background-color',getColor(id));                
            }
            function setColor(cor,id){
                color[id] = cor;                
            }
            function getColor(id){                
                return color[id];
            }
            function showSubs(id) {
                $('#box').html(id+' clicado');
                if (!$('#'+id+'sub').is(':visible')){
                    $('#'+id+'sub').show();
                } else {
                    $('#'+id+'sub').hide();
                }                
            }
        </script>
    </head>
    <body>
        <div>
            <a href="#myModal" role="button" class="btn" 
               data-toggle="modal" id='modalbtn'>Cadastrar</a>
        </div>
        <div id="box" class="well" style="width: 300px;"></div>
        <br><br>
        <form style=" margin-left: 20px;" class="span" id="menus">
            <?php            
            $colors = ["#0088cc","#499249","#a9302a","#d3d3d3","#cd0a0a","#7ab5d3"];                   
            for ($i = 0; $i < 5; $i++){
                echo '<div class="span">';
                    echo '<div id="menu'.$i.'" align="center" style="width: 100px; height: 50px; ';
                         echo 'background-color: '.$colors[$i].'; color: #FFFFFF;"';
                         echo 'onmouseover="highlight(this.id);" onmouseout="offlight(this.id);"';
                         echo 'onclick="showSubs(this.id);">Menu'.($i+1).'</div>     ';
                    echo '<!------------------------------------------------------------->';
                    echo '<div id="menu'.$i.'sub" style="display: none; z-index: 9999;">';
                    for ($j = 0; $j < 3; $j++){
                         echo '<div onmouseover="highlight(this.id);" onmouseout="offlight(this.id);"';
                             echo 'id="menu'.($i+1).'sub'.$j.'" style="width: 100px; height: 25px; margin-top: 1px;';
                         echo 'background-color: '.$colors[$i].'; color: #FFFFFF; z-index: 9999;"
                             align="center">Sub'.($j+1).'</div>';
                    }     
                    echo '</div>';            
                echo '</div>';
            }
            ?>
        </form>
        
        <!--------------------------------------------------------------------->
        <!--------------------------------------------------------------------->
        <!--------------------------- Modal ----------------------------------->
        <!--------------------------------------------------------------------->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" 
             aria-labelledby="myModalLabel" aria-hidden="true">
        <!--------------------------- Cabeçalho ------------------------------->  
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Cadastrar</h3>
            </div>
            <!--------------------------- Corpo ------------------------------->    
            <div class="modal-body">
                <form id='formCadastro' action=''>
                    <div class='form-horizontal' id='formularios'>
                        <div class='control-group'>
                            <label class='control-label' for="nome">Nome</label>
                            <div class='controls'>
                                <input type='text' id='nome' name='nome'></input>
                            </div>
                        </div>    
                        <div class='control-group'>
                            <label class='control-label' for="rg">RG</label>
                            <div class='controls'>
                                <input type='text' id='rg' name='rg'></input>
                            </div>
                        </div> 
                        <div class='control-group'>
                            <label class='control-label' id='cic' value='cpf'>CPF</label>
                            <div class='controls'>
                                <input type='text' id='cpf' name='cpf' onblur='validaCpf(this.value);'></input>
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label' for="email">E-mail</label>
                            <div class='controls'>
                                <input type='text' id='email' name='email'></input>
                            </div>
                        </div> 
                    </div>    
                </form>
            </div>
            <!--------------------------- Rodapé ------------------------------>        
            <div class="modal-footer">
                <button class="btn btn-primary">Cadastrar</button>
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div> 
        <!--------------------------------------------------------------------->
        <!--------------------------- Modal ----------------------------------->
        <!--------------------------------------------------------------------->
    </body>
</html>