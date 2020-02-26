$(document).ready(function () {
    $('.btn-navigation').click(function () {
        $(this).find('.btn-navigation').toggleClass('white');
        $('.navigation').toggleClass('isOpen');
    });
});

$('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});