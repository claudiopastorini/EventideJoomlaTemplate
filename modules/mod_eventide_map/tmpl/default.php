<?php 
// No direct access
defined('_JEXEC') or die; ?>

<div class="event-location-block content-block">
  <h2 class="sr">Event Location</h2>

  <div id="map" class="map">
    <div class="location-box-container">
      <div class="location-box pad-20">
        <h2 class="fs-6 strong"><?php echo $place; ?></h2>
          <address class="location">
            <?php echo nl2br($address); ?>
          </address>
          <span class="block text-right">
            <a class="icon icon-right arrow-right uppercase" href="<?php echo 'https://www.google.it/maps/dir//' .$latitude. ',' .$longitude.''; ?>" target="_blank">Get directions</a>
          </span>
      </div>
    </div>
    <div id="google-map" class="google-map"></div>
  </div>
</div>  

<script type="text/javascript">
  function initMap() {
    var o = document.getElementById("google-map"),
        e = {
            center: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
            scrollwheel: !1,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        },
        o = new google.maps.Map(o, e),
        a = new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>);
    new google.maps.Marker({
        position: a,
        map: o,
        icon: "<?php echo $marker; ?>"
    })
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $api_key; ?>&callback=initMap"
    async defer></script>