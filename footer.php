<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Proteron_Painéis
 */

?>

	<footer id="contato" class="footer">
		<div class="container-fluid g-0 position-relative">
			<div class="row w-100 g-0 footer-informations">
				<div class="col-md-4 col-lg-3 offset-md-1">
					<div class="footer-box">
						<h2 class="footer-box_title">
							<span>Entre em</span>Contato
						</h2>
						<a href="" class="footer-box_whatsapp">
							<svg xmlns="http://www.w3.org/2000/svg" width="22.201" height="22.201" viewBox="0 0 22.201 22.201">
								<g id="Grupo_14" data-name="Grupo 14" transform="translate(-32 -32)">
									<path id="Caminho_8" data-name="Caminho 8" d="M153.136,143.936c-.211-.561-.455-.521-.617-.527s-.3,0-.524,0a1.067,1.067,0,0,0-.755.318,3.088,3.088,0,0,0-1.061,2.266,5.345,5.345,0,0,0,1.028,2.9,11.371,11.371,0,0,0,4.595,4.344c2.787,1.21,2.8.842,3.312.814a2.815,2.815,0,0,0,1.928-1.242,2.288,2.288,0,0,0,.212-1.306c-.065-.118-.248-.194-.521-.342s-1.615-.867-1.867-.969-.435-.154-.631.115-.753.871-.922,1.049-.333.195-.606.046a7.607,7.607,0,0,1-2.185-1.453,8.34,8.34,0,0,1-1.476-1.969c-.152-.282,0-.426.144-.558s.29-.312.436-.468a1.893,1.893,0,0,0,.3-.45.5.5,0,0,0-.005-.484C153.852,145.877,153.347,144.5,153.136,143.936Z" transform="translate(-112.321 -105.885)" fill="#fff" fill-rule="evenodd"/>
									<path id="Caminho_9" data-name="Caminho 9" d="M43.3,33.586a9.3,9.3,0,0,1,6.59,2.707,9.17,9.17,0,0,1,0,13.043,9.3,9.3,0,0,1-6.59,2.708,9.389,9.389,0,0,1-4.5-1.15l-.6-.327-.647.206-3.045.967.96-2.832.238-.7-.385-.632a9.168,9.168,0,0,1,1.391-11.281A9.294,9.294,0,0,1,43.3,33.586M43.3,32A10.857,10.857,0,0,0,32.4,42.815,10.7,10.7,0,0,0,33.967,48.4L32,54.2l6.034-1.917A10.841,10.841,0,1,0,43.3,32Z" fill="#fff"/>
								</g>
							</svg>
							41 3076-4200</a>
						<a href="mailto:contato@proteron.com.br" class="footer-box_mail">
							<svg id="Grupo_15" data-name="Grupo 15" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path id="Caminho_10" data-name="Caminho 10" d="M0,0H24V24H0Z" fill="none"/>
								<path id="Caminho_11" data-name="Caminho 11" d="M22,6a2.006,2.006,0,0,0-2-2H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2ZM20,6l-8,4.99L4,6Zm0,12H4V8l8,5,8-5Z" fill="#fff"/>
							</svg>
							contato@proteron.com.br</a>
					</div>
				</div>
				<div class="col-md-7 col-lg-8">
					<?php
					$location = get_field('address', 'option');
					if( $location ): ?>
						<div class="acf-map" data-zoom="16">
								<div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="row w-100 g-0 justify-content-start footer-contacts_form">
				<div class="col-md-10 offset-md-2">
					<?php echo do_shortcode( '[contact-form-7 id="5" title="Formulário de Contato"]' ); ?>
				</div>
			</div>
			<div class="row w-100 g-0 justify-content-end footer-contacts">
				<div class="col-md-5 text-center">
					<a href="<?php echo get_site_url(); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="67.205" height="56.557" viewBox="0 0 67.205 56.557">
							<path id="Caminho_25" data-name="Caminho 25" d="M13.377,0,5.791,32.085,19.13,20.846,21.4,11.26H47.329l-.021.025L36.846,26.1H21l-2.181,1.838L3.752,40.7,0,56.557l22.759-19.2H40.811l.084-.115L67.2,0Z" transform="translate(0)" fill="#272525"/>
						</svg>
					</a>
					<?php
						wp_nav_menu(array(
							'theme_location'    => 'footer-menu',
							'depth'             => 2,
							'container'         => 'nav',
							'container_class'   => 'd-flex justify-content-center',
							'container_id'      => 'bs-example-navbar-collapse',
							'menu_class'        => 'nav flex-column',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						));
					?>
				</div>
			</div>
		</div>
		<div class="container-fluid g-0">
			<div class="row w-100 g-0 copyright">
				<div class="col text-center">
					<p>Copyright @ PROTERON 2021 Todos os direitos reservados</p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php the_field( 'scripts_footer', 'option' ); ?>

<style type="text/css">
.acf-map {
    width: 100%;
    height: 485px;
    border: #ccc solid 0px;
}

// Fixes potential theme css conflict.
.acf-map img {
  max-width: inherit !important;
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDV0vFnLWtIm0dJLGuBlSuwBOw4Alei5OE"></script>
<script type="text/javascript">
(function( $ ) {

/**
 * initMap
 *
 * Renders a Google Map onto the selected jQuery element
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @return  object The map instance.
 */
function initMap( $el ) {

    // Find marker elements within map.
    var $markers = $el.find('.marker');

    // Create gerenic map.
    var mapArgs = {
        zoom        : $el.data('zoom') || 18,
        mapTypeId   : google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map( $el[0], mapArgs );

    // Add markers.
    map.markers = [];
    $markers.each(function(){
        initMarker( $(this), map );
    });

    // Center map based on markers.
    centerMap( map );

    // Return map instance.
    return map;
}

/**
 * initMarker
 *
 * Creates a marker for the given jQuery element and map.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @param   object The map instance.
 * @return  object The marker instance.
 */
function initMarker( $marker, map ) {

    // Get position from marker.
    var lat = $marker.data('lat');
    var lng = $marker.data('lng');
    var latLng = {
        lat: parseFloat( lat ),
        lng: parseFloat( lng )
    };

    // Create marker instance.
    var marker = new google.maps.Marker({
        position : latLng,
        map: map
    });

    // Append to reference for later use.
    map.markers.push( marker );

    // If marker contains HTML, add it to an infoWindow.
    if( $marker.html() ){

        // Create info window.
        var infowindow = new google.maps.InfoWindow({
            content: $marker.html()
        });

        // Show info window when marker is clicked.
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open( map, marker );
        });
    }
}

/**
 * centerMap
 *
 * Centers the map showing all markers in view.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   object The map instance.
 * @return  void
 */
function centerMap( map ) {

    // Create map boundaries from all map markers.
    var bounds = new google.maps.LatLngBounds();
    map.markers.forEach(function( marker ){
        bounds.extend({
            lat: marker.position.lat(),
            lng: marker.position.lng()
        });
    });

    // Case: Single marker.
    if( map.markers.length == 1 ){
        map.setCenter( bounds.getCenter() );

    // Case: Multiple markers.
    } else{
        map.fitBounds( bounds );
    }
}

// Render maps on page load.
$(document).ready(function(){
    $('.acf-map').each(function(){
        var map = initMap( $(this) );
    });
});

})(jQuery);
</script>

<?php wp_footer(); ?>

</body>
</html>
