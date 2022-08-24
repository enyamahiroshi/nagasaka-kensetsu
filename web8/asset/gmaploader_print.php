<?php
//map
$lat = get_post_meta($post_id,'bukkenido',true);
$lng = get_post_meta($post_id,'bukkenkeido',true);

$bukkenshubetsu_data = get_post_meta($post_id,'bukkenshubetsu',true);
$icon_url = 'gmapmark_'.$bukkenshubetsu_data.'.png';
if($bukkenshubetsu_data == '')
	$icon_url = 'gmapmark_1399.png';

if ($lat != "" && $lng != ""):
?>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
	var map;
	var gmapmark = '<?php echo WP_PLUGIN_URL;?>/fudou/img/<?php echo $icon_url;?>';

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
				map:map,
				icon: image
			});
			var content = '<div class="msg"><?php if ( !my_custom_kaiin_view('kaiin_title',$kaiin,$kaiin2) ){echo "　会員物件";}else{echo $title;} ?>' +
					'<br /><?php if ( get_post_meta($post_id,'bukkenshubetsu',true) <3000 ) { echo '価格';}else{echo '賃料';} ?> ' +
					'<?php  if( get_post_meta($post_id, 'seiyakubi', true) != "" ){ echo 'ご成約済'; }else{  my_custom_kakaku_print($post_id); } ?>' +
					'　<?php my_custom_bukkenshubetsu_print($post_id); ?></div>';

		}else{
			var image = new google.maps.MarkerImage( gmapmark , new google.maps.Size(44,41));
			var marker = new google.maps.Marker({
				position:result[0].location,
				title: '標高 ' + result[0].elevation.toFixed(0) + 'm' ,
				map:map,
				icon: image
			});

			var content = '<div class="msg"><?php if ( !my_custom_kaiin_view('kaiin_title',$kaiin,$kaiin2) ){echo "　会員物件";}else{echo $title;} ?>' +
					'<br /><?php if ( get_post_meta($post_id,'bukkenshubetsu',true) <3000 ) { echo '価格';}else{echo '賃料';} ?> ' +
					'<?php  if( get_post_meta($post_id, 'seiyakubi', true) != "" ){ echo 'ご成約済'; }else{  my_custom_kakaku_print($post_id); } ?>' +
					'　<?php my_custom_bukkenshubetsu_print($post_id); ?>' +
				<?php if( get_option('fudo_map_elevation') == 'true' ){ ?>
					'<br />標高 ' + result[0].elevation.toFixed(0) + 'm' +
				<?php } ?>
					'</div>';
		}

			var infowindow = new google.maps.InfoWindow({
				content: content ,
				maxWidth: 300
			//	,size: new google.maps.Size(50, 50)
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

<style type="text/css">
<!--
#content #map_canvas img {margin: 0;height: auto;max-width: none;width: auto;}
#content #map_canvas .msg {margin: 5px;font-size:12px;}
-->
</style>

<div id="map_wrapper">
	<div>
		<h2>周辺地図</h2>
		<div class="map_canvas" id="map_canvas" style="border:1px solid #979797; background-color:#e5e3df; width:400px; height:420px; z-index:1">
			<div style="padding:1em; color:gray;">Loading...</div>
		</div>
	</div>
</div>
<?php echo get_option('fudo_map_comment'); ?>



<?php endif;?>
