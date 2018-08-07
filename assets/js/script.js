jQuery(document).ready(function($){

     $('body:not(.home) .preloader').css('height', '0');

    setTimeout(function(){
         $('.preloader').remove();
    }, 2000);

    // Check if Elements Exist in the DOM

    $.fn.exists = function(callback) {
        var args = [].slice.call(arguments, 1);
      
        if (this.length) {
          callback.call(this, args);
        }
      
        return this;
    }
      
    /* Usage
    
    $('CLASS').exists(function() {
       //  Do Something
    });

    */

    // Show Menu on Hover
    
    showMenu();

    function showMenu() {
       var $homeMenu =  $('.home .menu');

       if ($(window).width() > 900) {

        $homeMenu.css('display', 'none');

        $('.site-content').hover( function() {

            $homeMenu.fadeIn("slow");
            });
        } 

        $(window).resize(function(){

            var eventFired = 0;

            if ($(window).width() > 900) {

                $homeMenu.css('display', 'none');
        
                $('.site-content').hover( function() {
        
                    $homeMenu.fadeIn("slow");
                });
            } 
        });
    }
 
    // Hover Effect;

     hoverEffect();

    function hoverEffect() { 

        $pageMenu = $('body:not(.home) .menu li:not(.current-menu-item)');

        $currentItem = $('.current-menu-item a');

            $pageMenu.hover( function() {

                $(this).find('a').addClass('bounceIn').css('font-size', '48px');

                $currentItem.css('font-size', '24px');

            }, function(){

                $(this).find('a').removeClass('bounceIn').css('font-size', '24px');

                $currentItem.addClass('bounceIn').css('font-size', '48px');

                setTimeout(function(){ 

                    $currentItem.removeClass('bounceIn');

                }, 500);
            });
    }  
    
    // Toggle Bar
    
    toggleBar();

    function toggleBar() {
        $button = $('.social');
        $footer = $('.site-footer');

        if ( $( window ).width() < 900 ) {
            $button.click( function() {
                $footer.slideToggle();

            })
        }


    }


   console.log("%c Made with  💖 and a lot of  ☕ by el.puas | https://elpuas.com ", "color:#000;background:#00d084;");

});


