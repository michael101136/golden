<!-- Footer Section -->
<BR>
<BR><BR><BR><BR><BR>
        <footer>
            <div class="container">
                <div class="row">
                    <!-- Address -->
                    <div class="col-sm-4 col-md-3">
                        <div class="footer-box">
                            <h4 class="footer-title">Contactos</h4>
                            <div class="address">
                                <i class="flaticon-placeholder"></i>
                                <p> Av. 28 de Julio Mz. R-2<br>
                                   Oficina 201 - Cusco</p>
                            </div>
                            <div class="address">
                                <i class="flaticon-customer-service"></i>
                                <p> 0051 084 584 272</p>
                            </div>
                            <div class="address">
                           
                                <p> MOVISTAR :0051 084 584 272</p>
                                <p> CLARO :0051 084 584 272</p>
                                <p> ENTEL :0051 084 584 272</p>
                            </div>
                            

                            <div class="address">
                                <i class="flaticon-mail"></i>
                                <p>reservas@machupicchugolden.com</p>
                                <p>info@machupicchugolden.com</p>
                                <p>ventas@machupicchugolden.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-box">
                                    <h4 class="footer-title">Information</h4>
                                    <ul class="categoty">

                                         <li><a href="{{ route('nosotrosEs','es') }}">A cerca de Cusco</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-box">
                                    <h4 class="footer-title">SOCIOS</h4>
                                    <ul class="categoty">
                                        <li><a href="http://www.perumachupicchutravels.com/">Péru machupicchu travel</a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-box">
                                    <h4 class="footer-title">DESTINOS</h4>
                                    <ul class="categoty">
                                        <li><a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'cusco'])}}">CUSCO</a></li>
                                        <li><a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'puno'])}}">PUNO</a></li>
                                        <li><a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'arequipa'])}}">AREQUIPA</a></li>
                                        <li><a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'lima'])}}">LIMA</a></li>
                                        <li><a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'selva'])}}">SELVA</a></li>
                                        <li><a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'nazca'])}}">NAZCA</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 hidden-sm">
                        <div class="footer-box">
                            <h4 class="footer-title">MÉTODOS DE PAGO</h4>
                            <ul class="gallery-list">
                                <li> 
                                    <a href="https://www.visanetlink.pe/pagoseguro/MACHUPICCHUGOLDEN/33365" target="_blank">
                                        <img src="https://www.machupicchugolden.com/wp-content/uploads/2017/07/visanet-peru.jpg" alt="" style="height: 60px;width: 150px;">
                                    </a>
                                     <a href="https://www.paypal.com/cgi-bin/webscr" target="_blank">
                                        <img src="https://www.machupicchugolden.com/wp-content/uploads/2016/11/paypal-active-peru-treks.png" alt="" style="height: 60px;width: 150px;">
                                    </a>
                                     <a href="https://www.visanetlink.pe/pagoseguro/MACHUPICCHUGOLDEN/33365" target="_blank">
                                        <img src="https://www.machupicchugolden.com/wp-content/uploads/2016/11/western-union-active-peru-treks.jpg" alt="" style="height: 60px;width: 150px;">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <p>Developed by: machupicchu golden </p>
                        </div>
                        <div class="col-sm-7">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="/es">Inicio</a></li>
                                    <li><a href="{{ route('nosotrosEs','es') }}">Nosotros</a></li>
                                    <li><a href="{{route('testimonioEs','es')}}">Testimonios</a></li>
                                    <li><a href="{{ route('contactoEs','es') }}">Contacto</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- jQuery -->
        {!!Html::script('plantilla/assets/js/jquery.min.js')!!}
        <!-- jquery ui js -->
        {!!Html::script('plantilla/assets/js/jquery-ui.min.js')!!}
        <!-- bootstrap js -->
        {!!Html::script('plantilla/assets/js/bootstrap.min.js')!!}
        <!-- fraction slider js -->
        {!!Html::script('plantilla/assets/js/jquery.fractionslider.js')!!}
        <!-- owl carousel js --> 
        {!!Html::script('plantilla/assets/owl-carousel/owl.carousel.min.js')!!}
        <!-- counter -->
        {!!Html::script('plantilla/assets/js/jquery.counterup.min.js')!!}
        {!!Html::script('plantilla/assets/js/waypoints.js')!!}
        <!-- filter portfolio -->
        {!!Html::script('plantilla/assets/js/jquery.shuffle.min.js')!!}
        {!!Html::script('plantilla/assets/js/portfolio.js')!!}
        <!-- magnific popup -->
        {!!Html::script('plantilla/assets/js/jquery.magnific-popup.min.js')!!}
        <!-- range slider -->
        {!!Html::script('plantilla/assets/js/ion.rangeSlider.min.js')!!}
        {!!Html::script('plantilla/assets/js/jquery.easing.min.js')!!}
        <!-- custom -->
        {!!Html::script('plantilla/assets/js/custom.js')!!}
        
    </body>
</html>