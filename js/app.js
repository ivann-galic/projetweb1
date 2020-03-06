$(document).ready(function () {
    $('.btn-navigation').click(function () {
        $(this).find('.btn-navigation').toggleClass('white');
        $('.navigation').toggleClass('isOpen');
    });
});

$('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

$(document).ready(function () {
    $("#menu-ressources").click(function(){
        $("#displayNone").slideToggle();
    });
});

$(document).ready(function () {
    $("#menu-ressources-sans-bootsrap").click(function(){
        $("#displayNone-sans-bootsrap").slideToggle();
    });
});
