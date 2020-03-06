$(function(){
    $('.recherche-attaques').autocomplete({
        source:'search-attaques.php',
        minLength:1
    });
});