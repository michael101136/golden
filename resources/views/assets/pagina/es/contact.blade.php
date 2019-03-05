@extends('assets.pagina.es.layouts.master')

@section('content')
 
    <!-- page header -->
            <section class="header header-bg-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner">
                                    <h1>CONTACTO</h1>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact -->
            <section class="contact-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact_map">
                                <!-- The element that will contain Google Map. This is used in both the Javascript and CSS above. -->
                                <div id="map"></div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="contact-form">
                                {!! Form::open(['route' => ['contacto-reserva.store'] , 'method' => 'POST']) !!}
                                    <h2>CONTÁCTENOS</h2>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter your First Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Enter Your Last Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <textarea class="form-control" id="message" name="message" placeholder="Your Comment" rows="5"></textarea>
                                    </div>
                                    <button type="submit" class="thm-btn" > enviar </button> 
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact-details">
                                <h2>UBIQUENOS</h2>
                                <div class="contact-content">
                                    <h4>DIRECCIÓN</h4>
                                    <p>
                                       
                                        Av. 28 de Julio Mz. R-2
                                        Oficina 201 - Cusco
                                    </p>
                                </div>
                                <div class="contact-content">
                                    <h4>CORREO ELECTRÓNICO</h4>
                                    <p>
                                   
                                        <a href="reservas@machupicchugolden.com">reservas@machupicchugolden.com</a>
                                        <a href="info@machupicchugolden.com">info@machupicchugolden.com</a>
                                        <a href="ventas@machupicchugolden.com">ventas@machupicchugolden.com </a>   

                                    </p>
                                </div>
                                
                                <div class="contact-content">
                                    <h4>NÚMERO TELEFÓNICO</h4>
                                    <p>
                                    <SMALL> 0051 084 584 272</SMALL><br/>
                                    <SMALL> <b>MOVISTAR : </b> 0051 084 584 272</SMALL><br/>
                                    <SMALL> <b> CLARO : </b> 0051 084 584 272</SMALL><br/>
                                    <SMALL> <b> ENTEL : </b> 0051 084 584 272</SMALL><br/>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           
        </div>

@endsection

@section('script')
   
   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxJnaq8H2Ib6E0bBT1sTnSnGZ5tqONxFI"></script>

 <script type="text/javascript">
       // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 15, scrollwheel: false,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(-13.5267359,-71.9648414), //Dhaka

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#444444"}]}, {"featureType": "administrative.locality", "elementType": "labels.text.stroke", "stylers": [{"visibility": "on"}]}, {"featureType": "administrative.locality", "elementType": "labels.icon", "stylers": [{"visibility": "on"}, {"color": "#f1c40f"}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]}, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 45}]}, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]}, {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#fec107"}, {"visibility": "on"}]}]
                };

                // image from external URL

                var myIcon = '/plantilla/assets/images/marker.png';

                //preparing the image so it can be used as a marker
                //https://developers.google.com/maps/documentation/javascript/reference#Icon
                //includes hacky fix "size" to allow for wobble
                var catIcon = {
                    url: myIcon,
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(-13.5267359, -71.9648414), //Dhaka
                    map: map,
                    icon: catIcon,
                    title: 'MACHUPICCHU GOLDEN "AGENCIA DE VIAJES" ',
                    animation: google.maps.Animation.DROP,
                });
            }
 </script>
@endsection