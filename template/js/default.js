jQuery.noConflict();

function animateLogo() {
    $svg.drawsvg("animate")
}

function googleMap() {
    var o = document.getElementById("google-map"),
        e = {
            center: new google.maps.LatLng(-33.867363, 151.183539),
            scrollwheel: !1,
            zoom: 12,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        },
        o = new google.maps.Map(o, e),
        a = new google.maps.LatLng(-33.867363, 151.183539);
    new google.maps.Marker({
        position: a,
        map: o,
        icon: "images/location-pin.svg"
    })
}

WebFont.load({
    google: {
        families: ["Ubuntu:300,400,500,700", "Montserrat:400,700"]
    }
}), $svg = jQuery(".logo > svg").drawsvg({
    duration: 1500,
    callback: function() {
        jQuery(".logo").addClass("active")
    }
}), animateLogo(), jQuery(".carousel").swiperight(function() {
    jQuery(this).carousel("prev")
}), jQuery(".carousel").swipeleft(function() {
    jQuery(this).carousel("next")
}), google.maps.event.addDomListener(window, "load", googleMap);