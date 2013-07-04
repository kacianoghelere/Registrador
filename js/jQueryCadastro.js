jQuery(document).ready(function() {
    jQuery("#cpf").inputmask({"mask": "999.999.999-99"});       
    jQuery("#cic").html("CPF");
    var cic = 'cpf';
    jQuery("#cic").click(function (){
       if(cic === 'cpf'){
           cic = 'cnpj';
           jQuery("#cic").html("CNPJ");
           jQuery("#cpf").inputmask({"mask": "99.999.999/9999-99"}); 
           jQuery("#cpf").focus();
       } else if(cic === 'cnpj'){
           cic = 'cpf';
           jQuery("#cic").html("CPF");
           jQuery("#cpf").inputmask({"mask": "999.999.999-99"}); 
           jQuery("#cpf").focus();
       } 
    });
    jQuery('#formCadastro').validate({
        errorClass: "my-error-class",
        validClass: "my-valid-class",
        rules: {
            nome: {required: true},
            rg: {required: true},
            cpf: {required: true, cpf: true},
            email: {required: true, email: true}
        },
        messages: {
            nome: {required: 'Preencha o campo nome'},
            rg: {required: 'Preencha o campo rg'},
            cpf: {required: 'Digite seu CPF/CNPJ'},                        
            email: {required: 'Informe seu e-mail', email: 'Informe um e-mail válido'}
        },
        highlight: function(element) {
            jQuery(element).closest('.control-group')
                    .removeClass('success').addClass('error');
        },
        success: function(element) {
            jQuery(element).addClass('valid').closest('.control-group')
                    .removeClass('error').addClass('success');
        }
    });
});