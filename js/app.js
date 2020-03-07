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

        var state = document.getElementById('chevron');

        if(state.className === "down") {
            document.getElementById("chevron").innerHTML = "<i class=\"fas fa-angle-double-up\"></i>";
            document.getElementById("chevron").className = "up";
        } else if (state.className === "up") {
            document.getElementById("chevron").innerHTML = "<i class=\"fas fa-angle-double-down\"></i>";
            document.getElementById("chevron").className = "down";
            }

    });

});