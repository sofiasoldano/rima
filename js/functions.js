$(document).ready(function() {

    $(".js-open-indice").click(function(event){
        event.preventDefault();
        $(".indice .content").removeClass('transition');
        $(".indice").addClass("open");
    });
    
    $(".js-close-indice").click(function(event){
        event.preventDefault();
        if($(".indice").hasClass("open")){
           $(".indice").removeClass("open");
           $(".indice .content").addClass('transition');
        }
        else{
            $(".indice .content").removeClass('transition');
            $(".indice").addClass("open");
        }
    });
});