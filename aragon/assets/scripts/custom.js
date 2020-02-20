
if ($(window).width() <= 992) {
    $('.img-slide-4').remove();
}

$(document).ready(function() {
    // slick 
    $('#slickslide-adv').slick( {
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000,
        fade: true
    });
    
    $('#slick-profissionais').slick({
        dots: true,
        arrows: false,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1920,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });

    //box com textos - direitos
    $('.btn-direitos').click(function() {
        toggleBoxDireito($(this).attr('data-toggle'));
    });
        
    var clas = ".remove-on-" + ($(window).width() <= 992 ? 'mob' : 'desk');
    $(clas).each(function() {
        $(this).remove();
    });

    function toggleBoxDireito(id = "") {
        id = id.split('#')[1];

        $('.box-direitos').each(function() {
            if ($(this).attr('id') !== id) {
                $(this).hide();
            }
            else {
                $(this).toggle();
            }
            updateButton($(this).attr('id'));
        });
    }

    function updateButton(id) {
        if ($('#' + id).is(':visible')) {
            $('button[data-toggle="#' + id + '"]').addClass('active-d');
            $('button[data-toggle="#' + id + '"] i').removeClass('icon-arrow-down');
            $('button[data-toggle="#' + id + '"] i').addClass('icon-arrow-up');
        }
        else {
            $('button[data-toggle="#' + id + '"]').removeClass('active-d');
            $('button[data-toggle="#' + id + '"] i').addClass('icon-arrow-down');
            $('button[data-toggle="#' + id + '"] i').removeClass('icon-arrow-up');
        }
    }

    //form contato
    $('#form-contato').on('submit', function(e) {
        e.preventDefault();

        if (isValid('#form-contato')) {
            var nome  = $('#form-contato input[name=nome]').val();
            var email = $('#form-contato input[name=email]').val();
            var msg   = $('#form-contato input[name=msg]').val();        

            var urlData = "&nome=" + nome + "&email=" + email + "&msg=" + msg;

            $.ajax({
                type: "POST", 
                url: "email.php", 
                async: true,
                data: urlData, 
                success: function (data) { 
                    console.log('data');
                }
            });
        }
    });
    function isValid(id) {
        var nome  = $(id + 'input[name=nome]').val();
        var email = $(id + 'input[name=email]').val();
        var msg   = $(id + 'input[name=msg]').val(); 

        console.log(nome);
        console.log(email);
        console.log(msg); 
               
        if (nome == null || email  == null|| msg  == null) {
            console.log('false');
            return false;
        }
        return email.includes("@", 0);
    }

    /*mobile menu animations --------------------------------------------------------*/
    $('.icon-menu').click(function() {
        $('.fluid-menubar').toggle();

        toggleButtonIcon();
    });

    $('.goto').click(function() {
        if ($(window).width() <= 992) {
            $('.fluid-menubar').hide();
            $('.icon-menu').addClass('icon-bars-menu').removeClass('icon-cross');
            
            var scroll = $(window).scrollTop();
            scroll -= 65;
            $(window).scrollTop(scroll);
        }
    });

    function toggleButtonIcon() {
        $('.icon-menu').toggleClass('icon-bars-menu').toggleClass('icon-cross');
    }

    if ($(window).scrollTop() >= 30 && $(window).width() <= 992) {
        setMenuDimensions('15px', '0px', '25px');
    }

    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        
        if (scroll >= 30 && $(window).width() <= 992) {
            setMenuDimensions('15px', '0px', '25px');
        }
        else {
            setMenuDimensions('35px', '20px', '43px');
        }
    });

    function setMenuDimensions(topLogo, btmLogo, pdgIcon) {
        $('.logo-bar')
            .css('margin-top', topLogo)
            .css('margin-bottom', btmLogo);

        $('.icon-menu').css('padding-top', pdgIcon);
    }
});