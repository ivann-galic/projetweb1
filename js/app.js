$(document).ready(function () {
    $('.btn-navigation').click(function () {
        $(this).find('.btn-navigation').toggleClass('white');
        $('.navigation').toggleClass('isOpen');
    });

    $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });

    $("#menu-ressources").click(function(){
        $("#displayNone").slideToggle();
    });

    $("#menu-ressources-sans-bootsrap").click(function(){
        $("#displayNone-sans-bootsrap").slideToggle();
    });

    $(".carte-attaque").click(function(e){
        $this = $(this).find(".carte-attaque-description");

        if ($(this).find('.up').length) {
            $(this).find('.up').html('<i class=\"fas fa-angle-double-down\"></i>');
            $(this).find('.up').removeClass('up').addClass('down');
        }else if($(this).find('.down').length) {
            $(this).find('.down').html('<i class=\"fas fa-angle-double-up\"></i>');
            $(this).find('.down').removeClass('down').addClass('up');
        }

        $this.slideToggle();
    });

});