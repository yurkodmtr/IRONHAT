<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRGD5zBykqlBFqfv1AdY__NOCcP92s6Tc"></script>
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', init);        
    function init() {
        var mapOptions = {
            zoom: 17,
            center: new google.maps.LatLng("<?php echo do_shortcode( $atts['googlemaplat'] );?>", "<?php echo do_shortcode( $atts['googlemaplng'] );?>"),
            styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
        };
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(<?php echo do_shortcode( $atts['googlemaplat'] );?>, <?php echo do_shortcode( $atts['googlemaplng'] );?>),
            icon: '<?php echo get_template_directory_uri();?>/images/google_map_marker.png',
            map: map
        });
    }
</script>
<div class="content contacts">		
	<div class="center">
		<h1><?php echo do_shortcode( $atts['title'] ); ?></h1>
		<div class="block">
			<div class="text">
				<div class="text_1">
					<?php echo do_shortcode( $atts['descr'] ); ?>
				</div>
				<div class="title">
					Телефонуй
				</div>
				<div class="text_2">
					<?php echo do_shortcode('[admin_phone_sc]'); ?>
				</div>
				<div class="title">
					пиши
				</div>
				<div class="descr">
					<?php echo get_option('admin_email'); ?>
				</div>
				<div class="title">
					Чи приходь
				</div>
				<div class="descr">
					<?php echo do_shortcode('[admin_address_sc]'); ?>					
				</div>
			</div>
			<img src="<?php echo get_template_directory_uri();?>/images/contact_large.png" alt="" class="img">
		</div>
	</div>

	<div class="map__wrapper">
		<div class="center">
			<div class="label">
				Приходь
			</div>
			<div id="map"></div>
		</div>		
	</div>

	</div>	

</div>


