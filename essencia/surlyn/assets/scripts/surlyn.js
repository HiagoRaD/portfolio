$(document).ready(function() {
    var isMobile = $(window).width() <= 992;

    // display dos cards encima da imagem com o símbolo do infinito
    $('.img-box').mouseenter(function () {
        if (!isMobile) {
            $($(this).attr('toggle-box')).addClass('animated fadeIn active');
        }
    }).mouseleave(function () {
        if (!isMobile) {
            $($(this).attr('toggle-box')).removeClass('active');
        }
    });


    // QUIZ
    //aparecimento da respostas do quiz de um determinado grupo
    var respostaCerta   = "";
    var respostaErrada  = "";
    var posicaoCerta    = "";
    var posicaoErrada   = "";
    var botaoGrupo      = "";
    var botaoClicado;

    $('.btn-quiz').click(function() {
        botaoClicado = $(this);

        // desktop
        if (!isMobile) {
            respostaCerta   = $(this).attr('resposta').split('_')[0];
            respostaErrada  = respostaCerta == '.acertou' ? '.errou' : '.acertou';
            posicaoCerta    = $(this).attr('resposta').split('_')[1];
            posicaoErrada   = posicaoCerta == 'direita' ? 'esquerda' : 'direita';
            botaoGrupo     = $(this).attr('resposta').split('_')[2];

                
            $(botaoGrupo).each(function() {
                $(this).hide();
            });

            $(respostaCerta).addClass(posicaoCerta);
            $(respostaErrada).addClass(posicaoErrada);
        }// mobile 
        else {
            var resposta = $(this).attr('resposta').split('_')[0];
            var posicao  = resposta == '.acertou' ? 'esquerda' : 'direita'; 

            $(resposta).addClass(posicao);
            $(this).hide();
        }
    });

    //slick dos cards
    $('.slick-quiz').slick({
        nextArrow: '<span class="icon-surlyn-arrow-left"></span>',
        prevArrow: '<span class="icon-surlyn-arrow-right"></span>',
        dots: false,
        arrows: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.slick-arrow').click(function () {
        // retira o posicionamento do box de resposta
        $('.resposta').each(function () {
            $(this).removeClass('direita');
            $(this).removeClass('esquerda');
        });

        $(botaoGrupo).each(function () {
            $(this).show();
        });

        botaoClicado.show();
    });
});