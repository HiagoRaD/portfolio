$(document).ready(function () {
    // Side menu animations - DESKTOP
    $('.head-wrapper').mouseenter(function () {
        if ($(window).width() > 992) {
            $(this).css('width', '15%');
            $('.icon-row').show();
            $('.icon-row').addClass('animated fadeIn delay-1');
            $('.logo-div').css('color', '#ff5454');
            $('.sub-logo').show();
            $('.sub-logo').addClass('animated fadeIn delay-2');
            $('.icon-logo').css('color', '#ff5454');
            $('.icon-logo').addClass('animated fadeIn');
            $('.icon-bar').css('color', '#ff5454');
        }
    }).mouseleave(function () {
        if ($(window).width() > 992) {
            $(this).css('width', '70px');

            $('.icon-row').hide();
            $('.sub-logo').hide();
            $('.icon-logo').css('color', '#ffffff');
            $('.logo-div').css("color", '#ffffff');
            $('.icon-row').css('color', '#ffffff');
            $('.icon-bar').css('color', '#ffffff');
        }
    });

    // $('.head-wrapper').css('width', '15%');
    // $('.icon-row').show();
    // $('.icon-row').addClass('animated fadeIn delay-1');
    // $('.logo-div').css('color', '#ff5454');
    // $('.sub-logo').show();
    // $('.sub-logo').addClass('animated fadeIn delay-2');
    // $('.icon-logo').css('color', '#ff5454');
    // $('.icon-logo').addClass('animated fadeIn');
    // $('.icon-bar').css('color', '#ff5454');

    var current = "home";

    // btn go to 
    $('.goto').click(function() {
        $(window).scrollTop('0px');

        current = $(this).attr('id').split('_')[0];

        var next = $(this).attr('id').split('_')[2];

        $('.' + current).hide();
        
        $('.' + next).show();

        if ($(window).width() < 992) {
            $('.' + next).addClass('animated fadeInRight');
        }
        else {
            $('.' + next).addClass('animated fadeInDown');
        }
        current = next;
    });

    // tab btn go to
    $('.tab-goto').click(function () {
        $(window).scrollTop('0px');


        var next = $(this).attr('id').split('_')[1];

        $('.' + current).hide();


        if ($(window).width() < 992) {
            $('.' + next).addClass('animated fadeInRight');
            $('#close-mob-menu').click();
        }
        else {
            $('.' + next).addClass('animated fadeInDown');
        }
        $('.' + next).show();
        current = next;
    });

    // mobile menu animations

    if ($(window).width() <= 992) {
        $('.icon-row').each(function() {
            $(this).css('diisplay', 'block');
        });
    }

    $('#open-mob-menu').click(function() {
        $('.head-wrapper').removeClass('animated slideOutLeft');
        $('.head-wrapper').addClass('animated slideInLeft');
        $('.head-wrapper').show();
        $(this).hide();
        $('#close-mob-menu').show();
        $('.icon-logo').css('color', '#ff5454');
    });

    $('#close-mob-menu').click(function() {
        $('.head-wrapper').removeClass('animated slideInLeft');
        $('.head-wrapper').addClass('animated slideOutLeft');
        $(this).hide();
        $('#open-mob-menu').show();
        $('.icon-logo').css('color', '#ffffff');
    });

    // projects animations
    $('.project').mouseenter(function () {
        if ($(window).width() > 960) { 
            $($(this).attr('hover-toggle')).toggleClass('hidden');
            $($(this).attr('hover-toggle')).removeClass('animated fadeOut');
            $($(this).attr('hover-toggle')).addClass('animated fadeIn');        
        }
    }).mouseleave(function () {   
        if ($(window).width() > 960) { 
            $($(this).attr('hover-toggle')).toggleClass('hidden');        
        }
    });


    if ($(window).width() <= 992) {
        $('.project-row').attr('id', 'slick-on-mobile');
    }

    //project slick on mobile 
    $('#slick-on-mobile').slick({
        infinetescroll: true,
        arrows: false,
        dots: true
    });

    $('.slick-dots button').each(function() {
        $(this).text('');
    });
});