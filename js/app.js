$(document).ready(function () {
    $('.btn-navigation').click(function () {

        $('.navigation').toggleClass('isOpen');
    });

    $(".page").click(function()
    {
        $(".navigation").removeClass( "navigation isOpen" ).addClass( "navigation" );
    });
    $('.btn-navigation').click(function(event)
    {
        event.stopPropagation();
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

    $(".carte-traits").click(function(e){
        $this = $(this).find(".carte-traits-description");

        if ($(this).find('.up').length) {
            $(this).find('.up').html('<i class=\"fas fa-angle-double-down\"></i>');
            $(this).find('.up').removeClass('up').addClass('down');
        }else if($(this).find('.down').length) {
            $(this).find('.down').html('<i class=\"fas fa-angle-double-up\"></i>');
            $(this).find('.down').removeClass('down').addClass('up');
        }

        $this.slideToggle();
    });

    $(function(){
        $('.recherche-attaques').autocomplete({
            source:'search-attaques.php',
            minLength:1
        });
    });

    $(function(){
        $('.recherche-traits').autocomplete({
            source:'search-traits.php',
            minLength:1
        });
    });
});