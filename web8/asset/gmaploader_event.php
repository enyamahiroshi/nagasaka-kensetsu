<?php

$latlng = explode(",", post_custom("map"));
$lat = $latlng[0];
$lng = $latlng[1];

if ( is_numeric($lat) && is_numeric($lng) && $lat != "" && $lng != ""):
?>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
	var map;
	var gmapmark = '';

	function initialize() {
		var myLatLng = new google.maps.LatLng(<?php echo $lat;?>,<?php echo $lng;?>);
		var myOptions = {
			zoom: 15,
			center: myLatLng,
			scrollwheel: false,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			streetViewControl: true
		};
		map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

		//ElevationService
		elev = new google.maps.ElevationService();
		var latlng = new Array();
		latlng[0] = new google.maps.LatLng(<?php echo $lat;?>,<?php echo $lng;?>);
		var req = {locations: latlng};
		elev.getElevationForLocations(req, elevResultCallback);

	}  //End function initialize()

	function elevResultCallback(result, status) {
		if (status != google.maps.ElevationStatus.OK) {
			var image = new google.maps.MarkerImage( gmapmark , new google.maps.Size(44,41));
			var marker = new google.maps.Marker({
				position:result[0].location,
				map:map
			});
			var content = '';
		}else{
			var image = new google.maps.MarkerImage( gmapmark , new google.maps.Size(44,41));
			var marker = new google.maps.Marker({
				position:result[0].location,
				title: 'title' ,
				map:map
			});
			var content =
							'<h5><?php the_title(); ?></h5>'
							+ '<div><?php echo post_custom("日時"); ?></div>'
							+ '<div><?php echo post_custom("開催時間"); ?></div>'
					;
		}
			var infowindow = new google.maps.InfoWindow({
				content: content ,
				maxWidth: 300
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map, marker);
			});
	}
</script>

<script type="text/javascript">
	addOnload_single(function() { initialize(); });
	function addOnload_single(func){
		try {
			window.addEventListener("load", func, false);
		} catch (e) {
			window.attachEvent("onload", func);   	// IE用
		}
	}
</script>

<div id="map_wrapper">
	<div class="map_canvas" id="map_canvas" style="border:1px solid #979797; background-color:#e5e3df; z-index:1">
		<div style="padding:1em; color:gray;">Loading...</div>
	</div>
</div>

<?php endif;?>
