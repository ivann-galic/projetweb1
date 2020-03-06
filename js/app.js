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
        $this.slideToggle();
    });

});