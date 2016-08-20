jQuery.noConflict();

function animateLogo() {
    $svg.drawsvg("animate")
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
});