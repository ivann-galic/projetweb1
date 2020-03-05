$(function(){
    $('.recherche').autocomplete({
        source:'search-tempedie.php',
        minLength:1
    });
});

$('#btn_image').prop('disabled', true);  //pour désactiver