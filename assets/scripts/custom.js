var _PALHETA = '.color-ff5454';

$('i').addClass(_PALHETA);

$(document).ready(function () {
    // // Side menu animations - DESKTOP
    $('.head-wrapper').mouseenter(function () {
        if ($(window).width() > 960) {
            $(this).css('width', '15%');
            $('.info-tab').show();
            $('.info-tab').addClass('animated fadeIn delay-1');
            $('.logo-div').css('color', '#ff5454');
            $('.sub-logo').show();
            $('.sub-logo').addClass('animated fadeIn delay-2');
            $('.icon-logo').css('color', '#ff5454');
            $('.icon-logo').addClass('animated fadeIn');
            $('.icon-bar').css('color', '#ff5454');
        }
    }).mouseleave(function () {
        if ($(window).width() > 960) {
            $(this).css('width', '70px');

            $('.info-tab').hide();
            $('.sub-logo').hide();
            $('.logo-div').css("color", '#ffffff');
            $('.icon-logo').css('color', '#ffffff');
            $('.icon-bar').css('color', '#ffffff');
        }
    });

    var current = "home";

    console.log("current " + current);
    // btn go to 
    $('.goto').click(function() {
        $(window).scrollTop('0px');

        current = $(this).attr('id').split('_')[0];

        console.log("current " + current);
        var next = $(this).attr('id').split('_')[2];

        $('.' + current).hide();
        
        $('.' + next).show();

        if ($(window).width() < 960) {
            $('.' + next).addClass('animated fadeInRight');
        }
        else {
            $('.' + next).addClass('animated fadeInDown');
        }
        current = next;
        console.log("current " + current);
    });

    // tab btn go to
    $('.tab-goto').click(function () {
        $(window).scrollTop('0px');


        console.log("current " + current);
        var next = $(this).attr('id').split('_')[1];

        $('.' + current).hide();


        if ($(window).width() < 960) {
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
    $('#open-mob-menu').click(function() {
        $('.head-wrapper').removeClass('animated slideOutLeft');
        $('.head-wrapper').addClass('animated slideInLeft');
        $('.head-wrapper').show();
        $(this).hide();
        $('#close-mob-menu').show();
    });

    $('#close-mob-menu').click(function() {
        $('.head-wrapper').removeClass('animated slideInLeft');
        $('.head-wrapper').addClass('animated slideOutLeft');
        $(this).hide();
        $('#open-mob-menu').show();
    });

    // projects animations
    $('.project').mouseenter(function () {
        $($(this).attr('hover-toggle')).toggleClass('hidden');
        $($(this).attr('hover-toggle')).removeClass('animated fadeOut');
        $($(this).attr('hover-toggle')).addClass('animated fadeIn');        
    }).mouseleave(function () {   
        $($(this).attr('hover-toggle')).toggleClass('hidden');        
    });
});