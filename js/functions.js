$(document).ready(function() {
    
    /* Abir y cerrar modales */
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
    
    
    /* Cargar porcentajes en mi actividad */
    if($(".percentage").length != 0){
        setTimeout(function() {
            $( ".progress-bar" ).each(function() {
                var percentage = $(this).attr('aria-valuenow');
                $( this ).css('width', percentage + "%");
            });
        }, 200);
    }
    
    moveEditModal();
    moveModals('.type-btn', '#edit-type', 90, 50);
    moveModals('.share-btn', '#share', 50, 240);
    moveFloatingMenu();
    fixedFloatingMenu();
    moveIndice();
    moveNotifications();
    
    $(window).scroll( function(){
	    moveEditModal();
        moveModals('.type-btn', '#edit-type', 90, 50);
        moveModals('.share-btn', '#share', 50, 240);
        moveFloatingMenu();
        moveIndice();
        fixedFloatingMenu();
        moveNotifications();
	});
    $( window ).resize(function() {
        moveEditModal();
        moveNotifications();
        moveModals('.type-btn', '#edit-type', 90, 50);
        moveModals('.share-btn', '#share', 50, 240);
        fixedFloatingMenu();
    });
    
    

    
    /* Funciones que posicionan modales en un punto especifico con respecto a otro elemento */
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
    
    function moveNotifications(){

        var top_of_window = $(window).scrollTop();
        var bottom_of_btn =  $(".btn-notifications").offset().top + $(".btn-notifications").outerHeight() + 20;
        var left_of_btn = $(".btn-notifications").offset().left - 100;


        $("#notificaciones .modal-body").css('top', bottom_of_btn - top_of_window);
        $("#notificaciones .modal-body").css('left', left_of_btn);

    }
    
    function moveModals(btn, modal, y_offset,  y_offset_mobile){
        if($(btn).length != 0){
            var top_of_window = $(window).scrollTop();
            
            if($( window ).width() < 1200){
                var left_of_edit = $(btn).offset().left - y_offset_mobile;
                var bottom_of_edit =  $(btn).offset().top + $(btn).outerHeight() + 50;
                
                $(modal + " .modal-body").addClass("mobile");
            }
            else{
                var element_width = $(modal + " .modal-body").width() + 50;
                var left_of_edit = $(btn).offset().left - element_width ;
                var bottom_of_edit =  $(btn).offset().top + $(btn).outerHeight() - y_offset;
                
                $(modal + " .modal-body").removeClass("mobile");
            }

            $(modal + " .modal-body").css('top', bottom_of_edit - top_of_window);
            $(modal + " .modal-body").css('left', left_of_edit);
            
            console.log(element_width);
        }
    }
    
    function moveIndice(){
        if($(".open-indice").length != 0){
            var top_of_window = $(window).scrollTop();
            var top_of_single =  $(".single").offset().top - 30;
            
            if($( window ).width() < 990){
                var top_of_single =  $(".single").offset().top - 48;
            }
            
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
            if($( window ).width() > 990){
                var top_of_window = $(window).scrollTop();
                var bottom_of_window = $(window).scrollTop() + $(window).outerHeight();

                var top_of_single =  $(".single").offset().top;
                var bottom_of_menu = $(".floating-menu").offset().top + $(".floating-menu").outerHeight();
                var bottom_of_single =  $(".single .content").offset().top + $(".single .content").outerHeight();
                var bottom_position = $(".single .content").position().top + $(".single .content").outerHeight();

                if(bottom_of_single < bottom_of_window ){
                   $(".single .floating-menu").css('top', top_of_single);
                    $(".single .floating-menu").css('bottom', 'initial');
                }

                if(bottom_of_menu > bottom_of_single){
                    $(".single .floating-menu").css('top', 'initial');
                    $(".single .floating-menu").css('bottom', top_of_window  - bottom_position + 480);
                } 
            }
        }
    }
    
    function fixedFloatingMenu(){
        if($(".single").length != 0){
            if($( window ).width() < 990){
                var top_of_window = $(window).scrollTop();
                var top_of_single =  $(".single").offset().top ;
                
                if(top_of_window > top_of_single){
                   $(".floating-menu").addClass("fixed");
                } else{
                    $(".floating-menu").removeClass("fixed");
                }
            }
        }
    }

});


/* Funcion para el video de intro*/
if($(".page-intro").length != 0){
    var video = document.getElementById('intro-video');
    video.playbackRate = 2.0;
    video.play();
    var time = 5.7;
    var step = 1;
    var reverse = false;
    
    
    
    $(window).bind('mousewheel', function(event) {
    if (event.originalEvent.wheelDelta >= 0) {
        console.log('Scroll down');
    }
    else {
        console.log('Scroll up');
    }
});
    
    video.addEventListener("timeupdate", function() {
        if(step < 2 && video.currentTime < 7){
            $(".heading").addClass('active');
        } else{
            $(".heading").removeClass('active');
        }
        
        if (this.currentTime >= (time - 1.5) ) {
            if(reverse == false){
                $(".step-info").removeClass('active');
                $(".step-info:nth-of-type(" + (step + 2) + ")").addClass('active');
            }
        }
        
        if (this.currentTime >= time) {
            $(".steps li:nth-of-type(" + step + ") a").addClass('active');
            this.pause();
        }

    }, false);
}


function playVideoAt(newStep, endtime){
    if(newStep != step){
       var video = document.getElementById('intro-video');
        $(".steps li a").removeClass('active');
        $(".step-info").removeClass('active');
        /*if(newStep > (step + 1)){
            video.playbackRate = 5.0;
        }*/
        step = newStep;
        
        $(".steps li:nth-of-type(" + step + ") a").addClass('active');
        
        time = endtime;
        if(video.currentTime < endtime){
           video.play();
        } else{
            intervalRewind = setInterval(function(){
               video.playbackRate = 2.0;
               if(video.currentTime <= endtime){
                   reverse = false;
                   clearInterval(intervalRewind);
                   video.pause();
                   $(".step-info:nth-of-type(" + (step + 2) + ")").addClass('active');
               }
               else{
                   reverse = true;
                   video.currentTime += -.2;
               }
            }, 85);
        }
    }
    
}