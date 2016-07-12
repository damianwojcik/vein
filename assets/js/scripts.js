jQuery(document).ready(function($){


    //vars
    var $body = $('body'),
        $wind = $(window),
        windW = $wind.width(),
        windH = $wind.height();


    $wind.on('resize', function(){
        windW = $wind.width(),
        windH = $wind.height();
        rearrange_divs_order();
    });


    //init functions
    mobile_menu_functions();
    rearrange_divs_order();


    //mobile menu functions
    function mobile_menu_functions() {

        var toggle_btn = $('.mobile-nav-toggle'),
            menu_container = $('nav.mobile-navigation');

        toggle_menu();
        $wind.on('resize', resize_nav_fix);

        function toggle_menu(){

            toggle_btn.on('click', function(){
                menu_container.slideToggle();           
            });

        }

        function resize_nav_fix(){
            
            if (windW >= 1170) {
                menu_container.css('display', '');
            }

        }

    }


    //change order of Grid Items on Responsive
    function rearrange_divs_order() {

        if ($(window).width() < 1170) {
            $("#site-title--span-right").insertBefore(".page-content .span-right .caption-banner:first-child");
            $("#site-title--span-right").css('width', '100%');
            $(".page header.site-title").insertBefore(".main-content");
        }

        if ($(window).width() > 1170) {
            $("#site-title--span-right").insertAfter(".site-title .span-left");
            $("#site-title--span-right").css('width', '25%');
        }

        if ($(window).width() < 768) {
            $("#site-title--span-right").insertBefore("section.intro");
        }''
    }


    //add placeholder to wp searchform
    $(document).find('#searchform input').attr('placeholder', 'Wyszukaj');


});
