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
    
    $(".js-open-modal").click(function(event){
        event.preventDefault();
        var id = $(this).attr('href');
        $(id).addClass("open");
    });
    
    $(".js-close-modal").click(function(event){
        event.preventDefault();
        $(".modal").removeClass("open");
    });
    
    
    
    if($(".percentage").length != 0){
        setTimeout(function() {
            $( ".progress-bar" ).each(function() {
                var percentage = $(this).attr('aria-valuenow');
                $( this ).css('width', percentage + "%");
            });
        }, 200);
    }
    
    moveEditModal();
    moveEditType();
    moveFloatingMenu();
    moveIndice();
    
    $(window).scroll( function(){
	    moveEditModal();
        moveEditType();
        moveFloatingMenu();
        moveIndice();
	});
    $( window ).resize(function() {
        moveEditModal();
        moveEditType();
    });
    
    function moveEditModal(){
        if($(".edit").length != 0){
            var top_of_window = $(window).scrollTop();
            var bottom_of_edit =  $(".edit").offset().top + $(".edit").outerHeight() - 0;
            if($( window ).width() < 990){
                var left_of_edit = $(".edit").offset().left - 260;
            }
            else{
                var left_of_edit = $(".edit").offset().left - 150;
            }

            $("#edit-carpeta .modal-body").css('top', bottom_of_edit - top_of_window);
            $("#edit-carpeta .modal-body").css('left', left_of_edit);
        }
    }
    
    function moveEditType(){
        if($(".type-btn").length != 0){
            var top_of_window = $(window).scrollTop();
            
            if($( window ).width() < 1200){
                var left_of_edit = $(".type-btn").offset().left - 52;
                var bottom_of_edit =  $(".type-btn").offset().top + $(".type-btn").outerHeight() + 40;
                
                $("#edit-type .modal-body").addClass("mobile");
            }
            else{
                var left_of_edit = $(".type-btn").offset().left - 310;
                var bottom_of_edit =  $(".type-btn").offset().top + $(".type-btn").outerHeight() - 95;
                
                $("#edit-type .modal-body").removeClass("mobile");
            }

            $("#edit-type .modal-body").css('top', bottom_of_edit - top_of_window);
            $("#edit-type .modal-body").css('left', left_of_edit);
        }
    }
    
    function moveIndice(){
        if($(".open-indice").length != 0){
            var top_of_window = $(window).scrollTop();
            var top_of_single =  $(".single").offset().top - 30;
            
            if(top_of_window > top_of_single){
               $(".open-indice").css('position', 'fixed');
               $(".open-indice").css('top', 0);
            } else{
                $(".open-indice").css('position', 'absolute');
                $(".open-indice").css('top', top_of_single);
            }
        }
    }
    
    function moveFloatingMenu(){
        if($(".single").length != 0){
            var top_of_window = $(window).scrollTop();
            var bottom_of_window = $(window).scrollTop() + $(window).outerHeight();
            
            
            var top_of_single =  $(".single").offset().top;
            var bottom_of_menu = $(".floating-menu").offset().top + $(".floating-menu").outerHeight();
            var bottom_of_single =  $(".single .content").offset().top + $(".single .content").outerHeight();
            var bottom_position = $(".single .content").position().top + $(".single .content").outerHeight();
            
            if(bottom_of_single < bottom_of_window ){
               $(".single .floating-menu").css('top', top_of_single);
                $(".single .floating-menu").css('bottom', 'initial');

                if(bottom_of_menu > bottom_of_single){
                    $(".single .floating-menu").css('top', 'initial');
                    $(".single .floating-menu").css('bottom', top_of_window  - bottom_position + 480);
                } 
            }
            
            
            
            console.log(bottom_of_menu);
            console.log(bottom_of_single);
        }
    }
});