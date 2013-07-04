function validaCpfCnpj() {
    jQuery.validator.addMethod("cic", function(value, element) {
        retorno = true;

        if (value.length <= 14) {
            retorno = validaCpf(value, element);
        } else {
            retorno = validaCnpj(value, element);
        }
        return retorno;
    }, "CPF/CNPJ Inválido"); // Mensagem padrão
}

function validaCnpj(cnpj, element) {
    cnpj = jQuery.trim(cnpj);// retira espaços em branco
    // DEIXA APENAS OS NÚMEROS
    cnpj = cnpj.replace('/', '');
    cnpj = cnpj.replace('.', '');
    cnpj = cnpj.replace('.', '');
    cnpj = cnpj.replace('-', '');

    var numeros, digitos, soma, i, resultado, pos, tamanho, digitos_iguais;
    digitos_iguais = 1;

    if (cnpj.length < 14 && cnpj.length < 15) {
        return false;
    }
    for (i = 0; i < cnpj.length - 1; i++) {
        if (cnpj.charAt(i) != cnpj.charAt(i + 1)) {
            digitos_iguais = 0;
            break;
        }
    }

    if (!digitos_iguais) {
        tamanho = cnpj.length - 2
        numeros = cnpj.substring(0, tamanho);
        digitos = cnpj.substring(tamanho);
        soma = 0;
        pos = tamanho - 7;

        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2) {
                pos = 9;
            }
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(0)) {
            return false;
        }
        tamanho = tamanho + 1;
        numeros = cnpj.substring(0, tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2) {
                pos = 9;
            }
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(1)) {
            return false;
        }
        return true;
    } else {
        return false;
    }
}

function validaCpf(value, element) {
    value = value.replace(/_/g, '');
    cpf = value.replace(/\W/g, '');
//    console.log("CPF: " + cpf);
    while (cpf.length < 11)
        cpf = "0" + cpf;
    var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
    var a = [];
    var b = new Number;
    var c = 11;
    for (i = 0; i < 11; i++) {
        a[i] = cpf.charAt(i);
        if (i < 9)
            b += (a[i] * --c);
    }
    if ((x = b % 11) < 2) {
        a[9] = 0
    } else {
        a[9] = 11 - x
    }
    b = 0;
    c = 11;
    for (y = 0; y < 10; y++)
        b += (a[y] * c--);
    if ((x = b % 11) < 2) {
        a[10] = 0;
    } else {
        a[10] = 11 - x;
    }
    if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg))
        return false;
    return true;
}

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
            nome: {
                required: true, 
                minlength: 2
            },
            rg: {
                required: true, 
                minlength: 7
            },
            cpf: {
                required: true,
                cic: true
            },
            email: {
                required: true, 
                email: true
            }
        },
        messages: {
            nome: {
                required: 'Preencha o campo nome'  ,
                minlength: 'O nome deve ter no minimo 2 letras.'
            },
            rg: {
                required: 'Preencha o campo rg',
                minlength: 'O rg deve ter 7 digitos.'
            },
            cpf: {
                required: 'Digite seu CPF/CNPJ',
                cpf: 'CPF/CNPJ Invalido.'
            },                        
            email: {
                required: 'Informe seu e-mail', 
                email: 'Informe um e-mail válido'
            }
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