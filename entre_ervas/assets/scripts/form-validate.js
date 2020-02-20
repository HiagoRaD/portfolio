$(document).ready(function() {

    $('#form-email-validar').validate({
        validClass: "valid",
        arrorClass: "error",
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            email: {
                required: "Obrigatório",
                email: "Digite um email válido"
            }
        }
    });
    $('#form-alt-nova-senha').validate({
        validClass: "valid",
        arrorClass: "error",
        rules: {
            senha1: {
                required: true,
                min: 8
            },
            senha2: {
                required: true,
                min: 8,
                equalTo: "#senha-redefinir-1"
            }
        },
        messages: {
            senha1: {
                required: "Obrigatório",
                min: "Mínimo 8 caracteres"
            },
            senha2: {
                required: "Obrigatório",
                min: "Mínimo 8 caracteres",
                equalTo: "As senhas devem coincidir"
            }
        }
    });

    //LOGIN - login já cadastrado
    $('#form-login-cad').validate({
        validClass: "valid",
        errorClass: "error",
        rules: {
            email: {
                required: true,
                email: true
            },
            senha: {
                required: true
            }
        },
        messages: {
            email: {
                required: "Obrigatório",
                email: "Digite um email válido"
            },
            senha: {
                required: "Obrigatório"
            }
        }
    });
    //LOGIN - login não cadastrado
    $('#form-login-n-cad').validate({
        validClass: "valid",
        errorClass: "error",
        rules: {
            nome: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            senha: {
                required: true,
                min: 6
            },
            senha2: {
                required: true,
                equalTo: "#senha-login"
            }
        },
        messages: {
            nome: {
                required: "Obrigatório"
            },
            email: {
                required: "Obrigatório",
                email: "Digite um e-mail válido"
            },
            senha: {
                required: "Obrigatório",
                min: "Sua senha deve ter no mínimo 6 caracteres"
            },
            senha2: {
                required: "Obrigatório",
                equalTo: "As senhas devem coincidir"
            }
        }   
    });
    /*******************************************************************/

    //SUA CONTA 
    $('#form-sua-conta').validate({
        validClass: "valid",
        errorClass: "error",
        rules: {
            nome: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            cpf: {
                required: true,
                digits: true
            },
            senha: {
                required: true
            },
            senhaatual: {
                required: true,
                equalto: "#senha-original"
            },
            senhanova: {
                required: true,
                min: 6
            },
            senhanovadnv: {
                required: true,
                equalto: "#senhanova"
            },
            cep: {
                required: true,
                digits: true
            },
            logradouro: {
                required: true
            },
            numero: {
                required: true,
                digits: true
            },
            complemento: {
                required: true
            },
            estado: {
                required: true
            },
            cidade: {
                required: true
            },
            bairro: {
                required: true
            },
            endereco: {
                required: true
            }
        },
        messages: {
            nome: {
                required: "Obrigatório"
            },
            email: {
                required: "Obrigatório",
                email: "Digite um e-mail válido"
            },
            cpf: {
                required: "Obrigatório",
                digits: "Digite um CPF válido"
            },
            senha: {
                required: "Obrigatório"
            },
            senhaatual: {
                required: "Obrigatório",
                equalto: "Senha inválida"
            },
            senhanova: {
                required: "Obrigatório",
                min: "Sua senha deve ter no mínimo 6 caracteres"
            },
            senhanovadnv: {
                required: "Obrigatório",
                equalto: "As senhas devem coincidir"
            },
            cep: {
                required: "Obrigatório",
                digits: "Digite um CEP válido"
            },
            logradouro: {
                required: "Obrigatório"
            },
            numero: {
                required: "Obrigatório",
                digits: "Digite um número válido"
            },
            complemento: {
                required: "Obrigatório"
            },
            estado: {
                required: "Obrigatório"
            },
            cidade: {
                required: "Obrigatório"
            },
            bairro: {
                required: "Obrigatório"
            },
            endereco: {
                required: "Obrigatório"
            }
        }
    });

    /*******************************************************************/

    //CARRINHO - login
    $('#form-login-carrinho').validate({
        validClass: "valid",
        errorClass: "error",
        rules: {
            email: {
                required: true,
                email: true
            },
            senha: {
                required: true
            }
        },
        messages: {
            email: {
                required: "Obrigatório"
            },
            senha: {
                required: "Obrigatório"
            }
        }
    });
    
    //CARRINHO - acadastrar endereço
    $('#form-cadastrar-carrinho').validate({
        validClass: "valid",
        errorClass: "error",
        rules: {
            cep: {
                required: true,
                digits: true
            },
            endereco: {
                required: true
            },
            numero: {
                required: true,
                digits: true
            },
            complemento: {
                required: true
            },
            estado: {
                required: true
            },
            bairro: {
                required: true
            }
        },
        messages: {
            cep: {
                required: "Obrigatório",
                digits: "Digite um número válido"
            },
            endereco: {
                required: "Obrigatório"
            },
            numero: {
                required: "Obrigatório",
                digits: "Digite um número válido"
            },
            complemento: {
                required: "Obrigatório"
            },
            estado: {
                required: "Obrigatório"
            },
            bairro: {
                required: "Obrigatório"
            }
        }
    });

    $('#form-pagamento-cartao').validate({
        validClass: "valid",
        errorClass: "error",
        rules: {
            endereco: {
                required: true
            },
            numero: {
                required: true,
                digits: true
            },
            validade: {
                required: true
            },
            cvv: {
                required: true,
                min: 3,
                max: 3
            },
            parcelamento: {
                required: true
            },
            cpf: {
                required: true,
                digits: true
            }
        },
        messages: { 
            endereco: {
                required: "Obrigatório"
            },
            numero: {
                required: "Obrigatório",
                digits: "Número inválido"
            },
            validade: {
                required: "Obrigatório"
            },
            cvv: {
                required: "Obrigatório",
                min: "CVV inválido",
                max: "CVV inválido"
            },
            parcelamento: {
                required: "Obrigatório"
            },
            cpf: {
                required: "Obrigatório",
                digits: "Número inválido"
            }
        }
    });
});