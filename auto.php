<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Testes com modal</title>
        <?php include 'header.php'; ?>
        <script src="js/jquery.inputmask.js"></script>
        <script src="js/JQuery.Validate.js"></script>
        <script src="js/validaCpf.js"></script>
        <script src="js/jQueryCadastro.js"></script>
    </head>
    <body>
        <div>
            <a href="#myModal" role="button" class="btn" data-toggle="modal" id='modalbtn'>Cadastrar</a>
        </div>
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