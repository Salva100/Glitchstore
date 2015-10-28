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


//  MAPA PARA MOSTRAR EN LANDING

function initializeMap() {

    var lat = '19.433139'; //Set your latitude.
    var lon = '-99.141031'; //Set your longitude.

    var lat1 = '19.433886';  
    var lon1 = '-99.144782';
    var lat2 = '19.434154';  
    var lon2 = '-99.136172';
    var lat3 = '19.431384';  
    var lon3 = '-99.136482';
    var lat4 = '19.432486'; 
    var lon4 = '-99.144400';

    var centerLon = lon;

    var myOptions = {
        scrollwheel: false,
        draggable: false,
        disableDefaultUI: true,
        center: new google.maps.LatLng(lat, centerLon),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    //Bind map to elemet with id map-canvas
    var map = new google.maps.Map(document.getElementById('map-canvas'), myOptions);

    var image = 'images/shop.png';
    var image2 = 'images/delivery.png';

    var marker = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(lat, lon),
        icon: image
    });

    var marker1 = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(lat1, lon1),
        icon: image2
    });

    var marker2 = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(lat2, lon2),
        icon: image2
    });

    var marker3 = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(lat3, lon3),
        icon: image2
    });

    var marke4 = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(lat4, lon4),
        icon: image2
    });

    var infowindow = new google.maps.InfoWindow({
        content: 'Devworms Shop'
    });

    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
    });


    marker1.addListener('click', function() {
    infowindow.open(map, marker1);
  });marker2.addListener('click', function() {
    infowindow.open(map, marker2);
  });marker3.addListener('click', function() {
    infowindow.open(map, marker3);
  });

    infowindow.open(map, marker);
}

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});