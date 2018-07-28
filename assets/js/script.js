jQuery(document).ready(function($){

    // Menu Toggled Action Function

    eclick();
    
    function eclick() {
        $('.menu-toggle').click( function () {

           var $nav = $('.main-navigation');

           var $attr = $('.menu-toggle').attr("aria-expanded","true");

           if ($nav === $nav ) {

            $nav.addClass('toggled');

           } else {

               $nav.removeClass('toggled');

           }

           if ($attr === $('.menu-toggle, .menu').attr("aria-expanded","true")) {

            $('.menu-toggle, .menu').attr("aria-expanded","false");

           } else {

            $('.menu-toggle, .menu').attr("aria-expanded","true");

           }
           
        })
    }

    // Show Menu on Hover
    
    showMenu();

    function showMenu() {
       var $homeMenu =  $('.home .menu');

       $homeMenu.css('display', 'none');

       $('.site-content').hover( function() {

        $homeMenu.fadeIn("slow");

       });
    
    }

    // Hover Effect;

    hoverEffect();

    function hoverEffect() { 

        $pageMenu = $('.page:not(.home) .menu a');
        console.log($pageMenu);
        // $pageMenu = $pageMenu.each();
        console.log($pageMenu);
        $pageMenu.hover( function(){
            console.log('hola hover');
            $pageMenu.toggleClass('bounceIn').css('font-size', '48px');
            $('.current-menu-item').toggleClass('bounceOut').css('font-size', '24px');
        });
    }



    /*
     * Ajax Transitions
     */

    function addBlacklistClass() {
        $( 'a' ).each( function() {
            if ( this.href.indexOf('/wp-admin/') !== -1 || 
                 this.href.indexOf('/wp-login.php') !== -1 ) {
                $( this ).addClass( 'wp-link' );
            }
        });
    }
     
    $( function() {
     
        addBlacklistClass();
     
        var settings = { 
            anchors: 'a',
            blacklist: '.wp-link',
            onStart: {
                duration: 280, // ms
                render: function ( $container ) {
                    $container.addClass( 'slide-out' );
                }
            },
            onAfter: function( $container ) {
                addBlacklistClass();
                eclick();
                var $hash = $( window.location.hash );
 
                if ( $hash.length !== 0 ) {
 
                    var offsetTop = $hash.offset().top;
 
                    $( 'body, html' ).animate( {
                            scrollTop: ( offsetTop - 60 ),
                        }, {
                            duration: 280
                    } );
                }
                $container.removeClass( 'slide-out' );
                console.log($container);
            }
        };
     
        // $( '#page' ).smoothState( settings );
    } );

   $('nav button').addClass('wp-link');

  
    
   console.log("%c Made with  💖 and a lot of  ☕ by el.puas | https://elpuas.com ", "color:#fff;background:gold;");
});


