$(document).ready(function() {

    $(".js-open-indice").click(function(event){
        event.preventDefault();
        $(".indice").addClass("open");
    });
    
    $(".js-close-indice").click(function(event){
        event.preventDefault();
        $(".indice").removeClass("open");
    });
});