jQuery(document).ready(function ($) {

        topMenu = $("#top-navigation"),
        // All list items
        menuItems = topMenu.find("a"),
        
    //Initial mixitup, used for animated filtering portgolio.
    $('#portfolio-grid').mixitup({
        'onMixStart': function (config) {
            $('div.toggleDiv').hide();
        }
    });

});