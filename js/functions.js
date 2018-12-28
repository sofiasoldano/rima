$(document).ready(function() {

    $(".js-open-indice").click(function(event){
        event.preventDefault();
        $(".indice").addClass("open");
    });
    
    $(".js-close-indice").click(function(event){
        event.preventDefault();
        $(".indice").removeClass("open");
    });
    
    $(".js-open-register").click(function(event){
        event.preventDefault();
        $(".login-box").addClass("hidden");
        $(".register-box").removeClass("hidden");
    });
    
    $(".js-open-login").click(function(event){
        event.preventDefault();
        $(".login-box").removeClass("hidden");
        $(".register-box").addClass("hidden");
    });
    
});