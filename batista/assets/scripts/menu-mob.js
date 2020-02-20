$(document).ready(function () {
    $("#expandir-mob").click(function () {
        mudarIconeMenuMob();
        $(".menu-escondido").toggle(function () {
            $(".menu-escondido").addClass('animated slideDown');

        });
    });

    var flag1 = false;
    function mudarIconeMenuMob() {
        var url = "";
        if (flag1 == false) {
            url = "Fechar.png";
            flag1 = true;
        }
        else {
            url = "Menu.png";
            flag1 = false;
        }
        url = "assets/images/" + url;
        $("#img-menu-expand").attr("src", url);
    }

});