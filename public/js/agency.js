// Agency Theme JavaScript

(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 200)
        }, 1150, 'swing');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '#category_nav',
    });

    //   // Highlight the top nav as scrolling occurs
    // $('body').scrollspy({
    //     target: '#category_nav',
    // });

    //  $('body').scrollspy({
    //     target: '#basket',
    // });

//DEFIING THE DISAALBED FUNCTION 
    // Disable function
    jQuery.fn.extend({
        disable: function(state) {
            return this.each(function() {
                this.disabled = state;
            });
        }
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function(){ 
            $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 330
        }
    })

     $('#category_nav').affix({
        offset: {
            top: 330
        }
    })

    $('#basket').affix({
        offset: {
         top: 330
        }
    })


})(jQuery); // End of use strict
