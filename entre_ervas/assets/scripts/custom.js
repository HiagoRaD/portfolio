$(document).ready(function () {
    if ($("#section-etapa-1 img").length == 0) {
        $("#section-etapa-1").hide();
        $("#section-carrinho-vazio").show();
    }
    /* SCROLL TO*/
    $("#avancar-1").click(function (event) {
        event.preventDefault();
        irProximaEtapa(1);
        $("html, body").animate({
            scrollTop: $("#head-carrinho").offset().top
        }, 1000);
    });

    $("#avancar-2").click(function (event) {
        event.preventDefault();
        irProximaEtapa(2);
        $("html, body").animate({
            scrollTop: $("#head-carrinho").offset().top
        }, 1000);
    });
    $("#avancar-3").click(function (event) {
        event.preventDefault();
        irProximaEtapa(3);
        $("html, body").animate({
            scrollTop: $("#head-carrinho").offset().top
        }, 1000);
    });
    $("#avancar-3-").click(function (event) {
        event.preventDefault();
        irProximaEtapa(3);
        $("html, body").animate({
            scrollTop: $("#head-carrinho").offset().top
        }, 1000);
    });
    $("#avancar-4").click(function (event) {
        event.preventDefault();
        irProximaEtapa(4);
        $("html, body").animate({
            scrollTop: $("#head-carrinho").offset().top
        }, 1000);
    });
    $("#avancar-5").click(function (event) {
        event.preventDefault();
        irProximaEtapa(5);
        $("html, body").animate({
            scrollTop: $("#head-carrinho").offset().top
        }, 1000);
    });
    /* SCROLL TO*/
    
    function irProximaEtapa(index) {
        var sec = "#section-etapa-";
        $(sec + index).toggle();
        index++;
        //$(sec + index).addClass("animated fadeInRight"); 
        $(sec + index).toggle();

        var icon = "#etapa-" + (index);
        $(icon).addClass("icon-ativo");
    }

    $(".banners").slick({
        dots: true,
        prevArrow: false,
        nextArrow: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 1000,
    });

    $("#expand").click(function () {
        $(".menu-pop").toggle();
    });

    $("#expand-mob").click(function () {
        $("#menu-mob").toggle();
        $("#menu-mob").addClass("animated fadeInLeft");

        $("#icone-expand-mob").toggleClass("icon-menu");
        $("#icone-expand-mob").toggleClass("icon-cross");
    });

    var flagsenha = true;
    $("#alterar-senha").click(function () {
        $("#box-alterar-senha").toggle();
        $("#box-alterar-senha").addClass("animate fadeIn");
    });

    $('#boleto').click(function () {
        $('#cartao').removeAttr("checked");
    });
    $("#cartao").click(function () {
        $('#boleto').removeAttr("checked");
    });


    $('#sedex').click(function () {
        var valor = parseFloat($("#sedex-preco").attr("data-value"));
        atualizarTextPreco(valor,"#carrinho-preco-frete");

        atualizarTotalCarrinho();
    });
    
    $('#pac').click(function () {
        var valor = parseFloat($("#pac-preco").attr("data-value"));
        atualizarTextPreco(valor,"#carrinho-preco-frete");

        atualizarTotalCarrinho();
    });


    /*PRODUTO*/
    var preco_unidade = parseFloat($("#preco-produto").attr("data-preco"));
    var preco_total   = preco_unidade;

    $(".number-input button").click(function() {
        $(".dialog-frete").hide();

        $("#form-calcfrete-produto").submit();
        
        $("#form-calc-frete-cart").submit();
        
        atualizarTotal();

    });

    $("#produto-interno select").change(function() {
        //nao usado
        var val = $("#produto-interno select").val();
        
        preco_unidade = parseFloat($("#produto-interno select option[value=" + val + "]").attr("data-unidade"));

        atualizarTotal();
    });
    function atualizarTextPreco(val, obj) {
        $(obj).attr("data-value", val.toFixed(2));
        $(obj).text("R$ " + val.toFixed(2).replace(".", ","));
    }

    function atualizarTotal() {
        preco_total = preco_unidade * $("#qt-produto-p").val();
        console.log("atualizando total");
        atualizarTextPreco(preco_total, "#subtotal");
    }

    $(".dialog-frete input[type=checkbox]").change(function() {
        var id = $(this).attr("id");

        var valor = $("#" + id + "-preco").attr("data-value").toString().fixed(2).replace(".", ",").replace("<tt>", "").replace("</tt>", "");

        $("#frete").text("R$ " + valor);
    });

    //PRODUTO - calcular frete
    $("#form-calcfrete-produto").validate({
        validClass: "valid",
        errorClass: "error",
        rules: {
            cep: {
                required: true,
                digits: true,
                minlength: 8,
                maxlength: 8
            }
        },
        messages: {
            cep: {
                required: "Digite um CEP para o cálculo",
                digits: "Somente digitos",
                minlength: "Digite um CEP válido",
                maxlength: "Digite um CEP válido"
            }
        },
        errorPlacement: function () {
            $("#cep-form-produto-error").css("display", "none");
        },
        success: function () {

        }
    });
    $("#form-calcfrete-produto").on('submit', function (e) {
        var isvalid = $("#form-calcfrete-produto").valid();
        if (isvalid) {
            e.preventDefault();
            var cep_destino = $("#cep-form-produto").val();

            calcularfrete(cep_destino);
        }
    });

    var _SEDEX= "04804";
    var _PAC   = "04510";

    function calcularfrete(cep_destino) {
        var tipos_envio = ["04804", "04510"];
        //sedex - pac

        var cep_origem = "80230130";//cep dOma
        var peso = "" + ($("#pesob").attr("data-p") * $("#qt-produto-p").val());
        //tipo
        var altura = $("#dimensoes").attr("data-p").split("_")[0];
        var largura = $("#dimensoes").attr("data-p").split("_")[1];
        var comprimento = $("#dimensoes").attr("data-p").split("_")[2];


        $.ajax({
            url: 'frete.php',
            type: 'POST',
            dataType: 'html',
            cache: true,
            data: {
                cep_origem: cep_origem,
                cep_destino: cep_destino,
                peso: peso,
                tipo_do_frete: tipos_envio[0],
                altura: altura,
                largura: largura,
                comprimento: comprimento
            },
            success: function (data) {
                
                data = data.split("_");
                
                atualizarTextPreco(parseFloat(data[0].replace(",", ".")), "#produto-sedex-preco");
                
                if (inputProdutoClick == "sedex") {
                    atualizarTextPreco(parseFloat(data[0].replace(",", ".")), "#frete");
                }

                $("#produto-sedex-prazo strong").text(data[1]);
            }, beforeSend: function () {
                $(".loading").show();

            }, error: function (jqXHR, textStatus, errorThrown) {
                console.log("Erro");
            }
        });

        $.ajax({
            url: 'frete.php',
            type: 'POST',
            dataType: 'html',
            cache: true,
            data: {
                cep_origem: cep_origem,
                cep_destino: cep_destino,
                peso: peso,
                tipo_do_frete: tipos_envio[1],
                altura: altura,
                largura: largura,
                comprimento: comprimento
            },
            success: function (data) {
                
                data = data.split("_");
                
                atualizarTextPreco(parseFloat(data[0].replace(",", ".")), "#produto-pac-preco");
                
                if (inputProdutoClick == "pac") {   
                atualizarTextPreco(parseFloat(data[0
                ].replace(",", ".")), "#frete");}
                
                $("#produto-pac-prazo strong").text(data[1]);

                $(".loading").hide();
                $(".dialog-frete").show();
                $(".dialog-frete").addClass("animated fadeIn");
            }, beforeSend: function () {

            }, error: function (jqXHR, textStatus, errorThrown) {
                console.log("Erro");
            }
        });
    }
    var inputProdutoClick = "null";

    $("#produto-sedex").click(function() {
        atualizarTextPreco(parseFloat($("#produto-sedex-preco").attr("data-value")), "#frete");
        inputProdutoClick = "sedex";
    });
    $("#produto-pac").click(function() {
        atualizarTextPreco(parseFloat($("#produto-pac-preco").attr("data-value")), "#frete");
        inputProdutoClick = "pac";
    });

    $("#close-dialog-frete").click(function() {
        $(".dialog-frete").hide();
    });

    $("#form-add-carrinho").on("submit", function(e) {
        e.preventDefault();
                 
        var codigo = $("#form-add-carrinho input[name=cod]").val();
        var quantidade = $("#form-add-carrinho input[name=quantidade]").val();
        var cep = $("#cep-form-produto").val();

        $.ajax({
            url: 'addcart.php',
            type: 'POST',
            dataType: 'html',
            cache: true,
            data: {
                codigo: codigo,
                quantidade: quantidade,
                cep: cep
            },
            success: function (data) {
                console.log("success");                
            }, beforeSend: function () {
                console.log("beforeSend");                
            }, error: function (jqXHR, textStatus, errorThrown) {
                console.log("error");
            }
        });
    });
    /*END_PRODUTO*/


    /*CARRINHO*/
    $(".remover-item").click(function() {
        var codProduto = $("#" + $(this).attr("data-item") + " .cod").attr("data-value");

        produtosAtivos--;

        $.ajax({
            url: 'removecart.php',
            method: 'POST',
            dataType: 'html',
            data: {
                codProduto: codProduto
            },
            success: function() {
                console.log("Produto excluido com sucesso");
            },
            error: function() {
                console.log("Erro ao excluir produto");
            }
        });

        $("#form-calc-frete-cart").submit();

        $("#" + $(this).attr("data-item")).addClass("animated fadeOut");
        $("#" + $(this).attr("data-item")).remove();

        atualizarTotalCarrinho();

        if (produtosAtivos == 0) {
            $("#section-etapa-1").hide();
            $("#section-carrinho-vazio").show();
        }
        else {
            calcFretePedido();
        }
    });
    var cont = 0;

    function calcFretePedido() {
        console.log("calc frete pedido: " + ++cont);
        var cep_destino = $("#cep-form-cart").val();

        fretePedido(cep_destino);
    }

    $("#section-etapa-1 .number-input button").click(function() {
        var $idNum = $(this).attr("id").split("-")[1];

        $(".quantitade-" + $idNum).text($("#carrinho-qt-" + $idNum).val());
        
        var subTotal = $("#carrinho-qt-" + $idNum).val() * parseFloat($("#val-" + $idNum).attr("data-value"));

        atualizarTextPreco(subTotal, "#subtotal-" + $idNum);
        atualizarTotalCarrinho();
    });

    var quantidadeProdutos = $("#section-etapa-1 img").length;
    var produtosAtivos     = $("#section-etapa-1 img").length;

    function atualizarTotalCarrinho() {
        var total = parseFloat($("#carrinho-preco-frete").attr("data-value"));

        for (var i = 1; i <= quantidadeProdutos; i++) {
            var aux = $("#subtotal-" + i).attr("data-value");

            if(typeof aux !== 'undefined') {
                total += parseFloat($("#subtotal-" + i).attr("data-value"));
            }
        }
        atualizarTextPreco(total, "#carrinho-total");
    };

    $("#form-calc-frete-cart").on("submit", function(e) {
        var isvalid = $("#form-calc-frete-cart").valid();
        if (isvalid) {
            e.preventDefault();
            calcFretePedido();
        }
    });


    $("#form-calc-frete-cart").validate({
        validClass: "valid",
        errorClass: "error",
        rules: {
            cep: {
                required: true,
                digits: true,
                minlength: 8,
                maxlength: 8
            }
        },
        messages: {
            cep: {
                required: "Digite um CEP para o cálculo",
                digits: "Somente digitos",
                minlength: "Digite um CEP válido",
                maxlength: "Digite um CEP válido"
            }
        },
        errorPlacement: function () {
            //TODO - add error label
        },
        success: function () {
        }
    });

    $("#form-calcfrete-produto").on('submit', function (e) {
        var isvalid = $("#form-calcfrete-produto").valid();
        if (isvalid) {
            e.preventDefault();
        }
    });

    var clickFlag ="null";

    /*CARRINHO_ETAPA1*/
    $(".cc-01").click(function() {
        var val = parseFloat($(".cc-01 input").val());
        clickFlag = "sedex";

        atualizarTextPreco(val, "#carinho-preco-frete");
    });

    $(".cc-02").click(function() {
        var val = parseFloat($(".cc-02 input").val());
        clickFlag = "pac";

        atualizarTextPreco(val, "#carinho-preco-frete");
    });

    function fretePedido(cep_destino) {
        console.log("submited");

        var tipos_envio = ["04804", "04510"];
        //sedex - pac

        var cep_origem = "80230130";//cep dOma
        var peso = 0;
        
        for (var i=1; i <= quantidadeProdutos; i++) {
            var aux = $("#peso-" + i).val();
            
            if (typeof aux !== 'undefined') {
                peso += parseFloat($("#peso-" + i).val()) * $("#carrinho-qt-" + i).val();
            }
        }
        console.log("peso total: " + peso);

        $.ajax({
            url: 'frete.php',
            type: 'POST',
            dataType: 'html',
            cache: true,
            data: {
                cep_origem: cep_origem,
                cep_destino: cep_destino,
                peso: peso,
                tipo_do_frete: tipos_envio[0],
                altura: 0,
                largura: 0,
                comprimento: 0
            },
            success: function (data) {
                //sedex
                if(data.split("_").length == 2) {
                    $(".frete-table #sedex-preco").text("");
                    
                    var par = $("<p>")
                            .text("R$ " + data.split("_")[0].replace(".", ","))
                            .appendTo(".frete-table #sedex-preco");
                    
                    $(".frete-table #sedex-preco").attr("data-value", data.split("_")[0].replace(",", "."));
                    
                    $(".frete-table #prazo-sedex").text(data.split("_")[1]);

                    if ($(".cc-01 input[type=radio").attr("id") == "sedex") {
                        atualizarTextPreco(parseFloat($("#sedex-preco").attr("data-value")), "#carrinho-preco-frete");
                    }
                }
                else {
                    console.log("erro");
                }

            }, beforeSend: function () {
                $(".loading").show();

            }, error: function (jqXHR, textStatus, errorThrown) {
                console.log("Erro");
            }
        });

        $.ajax({
            url: 'frete.php',
            type: 'POST',
            dataType: 'html',
            cache: true,
            data: {
                cep_origem: cep_origem,
                cep_destino: cep_destino,
                peso: peso,
                tipo_do_frete: tipos_envio[1],
                altura: 0,
                largura: 0,
                comprimento: 0
            },
            success: function (data) {
                if(data.split("_").length == 2) {
                    //pac
                    $(".frete-table #pac-preco").text("");

                    var par = $("<p>")
                            .text("R$ " + data.split("_")[0].replace(".", ","))
                            .appendTo(".frete-table #pac-preco");
                    
                    $(".frete-table #pac-preco").attr("data-value", data.split("_")[0].replace(",", "."));
                    
                    $(".frete-table #prazo-pac").text(data.split("_")[1]);

                    if ($(".cc-02 input[type=radio").attr("id") == "pac") {
                        atualizarTextPreco(parseFloat($("#pac-preco").attr("data-value")), "#carrinho-preco-frete");
                    }
                }
                $(".loading").hide();
            }, beforeSend: function () {

            }, error: function (jqXHR, textStatus, errorThrown) {
                console.log("Erro");
            }
        });
    }
    /*END_CARRINHO_ETAPA1*/

    /*END_CARRINHO*/
 
    /*LOGIN*/

    var inputNum = 0;

    $("#form-login-n-cad").on("submit", function() {
        $("#num-input-1").focus();
        inputNum = 1;
    });

    $("#form-email-validar").on("submit", function() {
        if ($(this).valid()) {
            $("#button-valid").attr("data-target", "#valide-modal");
            $("#button-valid").click();
            $("#num-input-1").focus();
            inputNum = 1;
        }
    });

    $("#close-modal").click(function() {
        clearForm("#form-validar-cadastro");
    });

    function clearForm(form) {
        $(form + " input").each(function() {
            $(this).val("");
        });
    }
    $(document).keypress(function (e) {
        if(inputNum > 0) {
            inputNum++;
            
            $("#num-input-" + inputNum).focus();
            
            if(inputNum == 6) {
                inputNum = 0;
            }
        }
        
    });
    
    $("#form-alt-nova-senha").on("submit", function(e) {
        e.preventDefault();

        if ($(this).valid()) {
            $("#form-alt-nova-senha .btn-form").attr("onclick", "window.location.href='login.php'");
            $("#form-alt-nova-senha .btn-form").click();
        }
    });

    $("#form-validar-cadastro input[type=text]").change(function() {
        var id = parseInt($(this).attr("id").split("-")[1]);
        id++;

        $("#form-validar-cadastro #num-" + id).focus();
        
    });
    
    $("#form-email-validar").on("submit", function(e) {
        e.preventDefault();
    });

    $("#form-validar-cadastro").on("submit", function(e) {
        e.preventDefault();

        $(".wrapper-email").toggle();
        $(".wrapper-alt").toggle();
        $("#close-modal").click();
    });

    /*END_LOGIN*/

    /*SUA_CONTA*/

    $("#cadastro-cep").on("input", function () {
        $("#cadastro-cep").removeClass("error");
        $(".div-cep-contao .cep-n-encontrado").hide();
        $(".cep-n-encontrado").css("display", "none");
    });

    $("#cadastro-cep").blur(function() {
        $(".div-cep-contao .cep-n-encontrado").hide();
        $("#cadastro-cep").removeClass("error");
        $(".cep-n-encontrado").css("display", "none");

        $("#logradouro").removeAttr("disabled");
        $("#cidade").removeAttr("disabled");
        $("#estado").removeAttr("disabled");
        $("#bairro").removeAttr("disabled");

        var cep = $(this).val();


        if (validateCep(cep)) {
        
            var divClass = "loadingio-spinner-rolling-w35ulmd33b";

            var div = $("<div>")
                .addClass(divClass)
                .append($("<div>")
                .addClass("ldio-o4i0bfvo9v")
                .append($("<div>")));

            $("#loading-span").append(div); 

            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                if (!("erro" in dados)) {
                    $("#cadastro-cep").removeClass("error");
                    $(".cep-n-encontrado").css("display", "none");
                    $("." + divClass).hide();

                    console.log("deu boa:");
                    console.log(dados);
                    //Atualiza os campos com os valores da consulta.
                    $("#logradouro").val(dados.logradouro);
                    $("#cidade").val(dados.localidade);
                    $("#estado").val(dados.uf);
                    $("#bairro").val(dados.bairro);

                    $("#logradouro").attr("disabled", "disabled");
                    $("#cidade").attr("disabled", "disabled");
                    $("#estado").attr("disabled", "disabled");
                    $("#bairro").attr("disabled", "disabled");
                } //end if.
                else {
                    $("." + divClass).hide();
                    $("#cadastro-cep").addClass("error");
                    $(".cep-n-encontrado").css("display", "block");
                }
            });
        }
        
    });

    function validateCep(cep) {
        return cep.length == 8 && /^\d+$/.test(cep);
    }
    /*END_SUA_CONTA*/

    $("#form-cep-3").blur(function () {
        $(".div-cep-contao .cep-n-encontrado").hide();
        $("#cadastro-cep").removeClass("error");
        $(".cep-n-encontrado").css("display", "none");

        var cep = $(this).val();


        if (validateCep(cep)) {

            var divClass = "loadingio-spinner-rolling-w35ulmd33b";

            var div = $("<div>")
                .addClass(divClass)
                .append($("<div>")
                    .addClass("ldio-o4i0bfvo9v")
                    .append($("<div>")));

            $("#loading-span-cart").append(div);

            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                if (!("erro" in dados)) {
                    $("#cadastro-cep").removeClass("error");
                    $(".cep-n-encontrado").css("display", "none");
                    $("." + divClass).hide();

                    //Atualiza os campos com os valores da consulta.
                    $("#form-logradouro-3").val(dados.logradouro);
                    $("#form-cidade-3").val(dados.localidade);
                    $("#form-estado-3").val(dados.uf);
                    $("#form-bairro-3").val(dados.bairro);

                    $("#form-logradouro-3").attr("disabled", "disabled");
                    $("#form-cidade-3").attr("disabled", "disabled");
                    $("#form-estado-3").attr("disabled", "disabled");
                    $("#form-bairro-3").attr("disabled", "disabled");
                } //end if.
                else {
                    $("." + divClass).hide();
                    $("#cadastro-cep").addClass("error");
                    $(".cep-n-encontrado").css("display", "block");
                }
            });
        }
    });

    
});

var total = parseFloat($("#carrinho-preco-frete").attr("data-value"));

for (var i = 1; i <= $("#section-etapa-1 img").length; i++) {
    total += parseFloat($("#subtotal-" + i).attr("data-value"));
}

$("#carrinho-total").attr("data-value", total.toFixed(2));
$("#carrinho-total").text("R$ " + total.toFixed(2).replace(".", ","));