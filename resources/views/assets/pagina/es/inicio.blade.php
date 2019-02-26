@extends('assets.pagina.es.layouts.master')

@section('content')

<?php 
    function toursRecomendadosUnDiaIz($tour)
    {   

            $tourRe=''; 
            $varNumero=1;
                       
              foreach($tour as $item)
              {

                   if($varNumero<4)
                   { 
                        $tourRe.= '<div class="hotel-item">'.
                                        '<div class="hotel-image">'.
                                            '<a href="es/tours/detalle/'.$item->slug.'">'.
                                                '<div class="img"><img src="'.$item->img.'"  alt="" class="img-responsive"></div>'.
                                           ' </a>'.
                                        '</div>'.
                                        '<div class="hotel-body">'.
                                            '<div class="ratting">'.
                                                '<i class="fa fa-star"></i>'.
                                                '<i class="fa fa-star"></i>'.
                                                '<i class="fa fa-star"></i>'.
                                                '<i class="fa fa-star-half-o"></i>'.
                                                '<i class="fa fa-star-o"></i>'.
                                            '</div>'.
                                           ' <h3>'.$item->name.'</h3>'.
                                             '<p style="text-align: justify;">'.substr($item->description_short, 0,58).'</p>'.
                                            '<div class="free-service">'.
                                                '<i class="flaticon-television" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plasma TV with cable chanels"></i>'.
                                                '<i class="flaticon-swimmer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swimming pool"></i>'.
                                                '<i class="flaticon-wifi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free wifi"></i>'.
                                                '<i class="flaticon-weightlifting" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitness center"></i>'.
                                                '<i class="flaticon-lemonade" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restaurant"></i>'.
                                            '</div>'.
                                        '</div>'.
                                          '<div class="hotel-right">'.
                                            '<div class="hotel-person">DESDE <span class="color-blue">$ '.$item->price.'</span> </div>'.
                                            '<a class="thm-btn" href="es/tours/detalle/'.$item->slug.'">DETALLES</a>'.
                                        '</div>'.
                                    '</div>';
                             $varNumero ++;   
                        }else
                        {
                           break;    
                        }


                }

            return $tourRe;
                               
    } 

   function toursRecomendadosUnDiaDe($tour)
   {


            $tourRe=''; 
            $varNumero=1;
                       
              foreach($tour as $item)
              {

                   if($varNumero>3)
                   { 
                        $tourRe.= '<div class="hotel-item">'.
                                        '<div class="hotel-image">'.
                                           '<a href="es/tours/detalle/'.$item->slug.'">'.
                                                '<div class="img"><img src="'.$item->img.'"  alt="" class="img-responsive"></div>'.
                                           ' </a>'.
                                        '</div>'.
                                        '<div class="hotel-body">'.
                                            '<div class="ratting">'.
                                                '<i class="fa fa-star"></i>'.
                                                '<i class="fa fa-star"></i>'.
                                                '<i class="fa fa-star"></i>'.
                                                '<i class="fa fa-star-half-o"></i>'.
                                                '<i class="fa fa-star-o"></i>'.
                                            '</div>'.
                                           ' <h3>'.$item->name.'</h3>'.
                                            '<p style="text-align: justify;">'.substr($item->description_short, 0,58).'</p>'.
                                            '<div class="free-service">'.
                                                '<i class="flaticon-television" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plasma TV with cable chanels"></i>'.
                                                '<i class="flaticon-swimmer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swimming pool"></i>'.
                                                '<i class="flaticon-wifi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free wifi"></i>'.
                                                '<i class="flaticon-weightlifting" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitness center"></i>'.
                                                '<i class="flaticon-lemonade" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restaurant"></i>'.
                                            '</div>'.
                                        '</div>'.
                                        '<div class="hotel-right">'.
                                            '<div class="hotel-person">DESDE <span class="color-blue">$ '.$item->price.'</span> </div>'.
                                           '<a class="thm-btn" href="es/tours/detalle/'.$item->slug.'">DETALLES</a>'.
                                        '</div>'.
                                    '</div>';
                             
                        }
                         $varNumero ++;  


                }

            return $tourRe;

   }

?>

    <div class="slider-wrapper">
                    <div class="responisve-container">
                        <div class="slider">
                            <div class="fs_loader"></div>
                            <div class="slide">
                                <p class="uc" data-position="150,360" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">Welcome to </p>
                                <p class="slider-titele" data-position="210,200" data-in="left"  data-step="2" data-delay="100">Bdtask Travel Agency</p>
                                
                                <a href="#" class="thm-btn" data-position="370,435" data-in="bottom" data-out="right" data-step="2" data-delay="1500">Read More</a>
                            </div>
                            <div class="slide">
                                <p class="uc" data-position="150,360" data-in="top" data-step="1" data-out="top">Welcome to </p>
                                <p class="slider-titele" data-position="210,200" data-in="bottom"  data-step="2" data-delay="100">Bdtask Travel Agency</p>
                                
                                <a href="#" class="thm-btn" data-position="370,435" data-in="bottom" data-out="right" data-step="2" data-delay="1500">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- booking -->
                <div class="container boking-inner">
                    <div class="row">
                        <div class="col-sm-12" style="margin-top: 10px;">
                            <div class="panel">
                                <div class="panel-heading" style="margin-top: 40px;">
                                    <ul class="nav nav-tabs">
                                        <li class="active"></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1default">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-9 col-md-10">

                                                        <div class="row panel-margin">
                                                            <div class="col-xs-6 col-sm-4 col-md-2 panel-padding">
                                                                <label>Precios</label>
                                                                <div class="icon-addon">
                                                                    <input type="text" placeholder="Precio" id="precio" class="form-control" />
                                                                    <label class="glyphicon fa fa-dollar"  title="email"></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-4 col-md-2 panel-padding">
                                                                <label>Ciudad</label>
                                                                <div class="icon-addon">
                                                                    <input type="text" placeholder="Departamento" id="departamento" class="form-control" />
                                                                    <label class="glyphicon fa fa-suitcase"  title="email"></label>
                                                                </div>
                                                            </div>
                                                             <div class="col-xs-6 col-sm-4 col-md-2 panel-padding">
                                                                <label>Fecha</label>
                                                                <div class="icon-addon">
                                                                    <input type="text" placeholder="Date"  class="form-control" id="datepicker2"/>
                                                                    <label class="glyphicon fa fa-calendar"  title="email"></label>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>

                                                </div>

                                                <div class="col-xs-12 col-sm-3 col-md-2">
                                                    <button type="button" class="thm-btn" id="filtradosTours">Buscar</button>
                                                </div>

                                            </div>

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- popular tour -->
                <section class="popular-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="title">
                                    <h2>TOURS POPULARES</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row thm-margin">
                            <div id="popular-slide" class="owl-carousel">

                            @foreach($tourPrincipal as $itemp)

                                <div class="item">
                                    <div class="grid-item-inner">
                                        <div class="grid-img-thumb">
                                            <!-- ribbon -->
                                            <div class="ribbon"><span>Popular</span></div>
                                            <a href="{{route('detalleEsTour',['es'=>'es','tour' => $itemp->slug])}}"><img src="/{{ $itemp->img}}" alt="1" class="img-responsive" /></a>
                                        </div>
                                        <div class="grid-content">
                                            <div class="grid-price text-right">
                                                 <span><sub>$</sub>{{ $itemp->price}}</span>
                                            </div>
                                            <div class="grid-text">
                                                <div class="place-name">{{ $itemp->categoriesName }}</div>
                                                <div class="travel-times">
                                                    <h4 class="pull-left">3 Diás 2 Noches </h4>
                                                    <span class="pull-right">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             
                            @endforeach   
                            </div>
                        </div>
                    </div>
                </section>
               
                <section class="destination">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="title">
                                    <h2>DESTINOS POPULARES</h2>
                                    <p>Esta es la agencia de viajes increíble!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row thm-margin">
                            <div class="col-md-3 col-sm-4 thm-padding">
                                <div class="destination-grid">
                                    <a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'cusco'])}}"><img src="plantilla/assets/images/destinos/img_01.jpg" class="img-responsive" alt="">
                                        <div class="mask">
                                            <h2>Cusco</h2>
                                            <p>
                                                Cusco​ es una ciudad del sureste del Perú ubicada en la vertiente oriental de la cordillera de los Andes.
                                            </p>
                                            <a href="#" class="thm-btn">Leer más</a>
                                        </div>
                                        <div class="dest-name">
                                            <h4>CUSCO</h4>
                                        </div>
                                        <div class="dest-icon">
                                            <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                            <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                            <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                            <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 thm-padding">
                                <div class="destination-grid">
                                    <a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'puno'])}}"><img src="plantilla/assets/images/destinos/img_02.jpg" class="img-responsive" alt="">
                                        <div class="mask">
                                            <h2>PUNO</h2>
                                            <p>Puno es una ciudad del sur de Perú junto al lago Titicaca, uno de los más grandes de toda Sudamérica</p>
                                            <a href="#" class="thm-btn">Leer más</a>
                                        </div>
                                        <div class="dest-name">
                                            <h4>PUNO</h4>
                                        </div>
                                        <div class="dest-icon">
                                            <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                            <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                            <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 thm-padding">
                                <div class="destination-grid">
                                    <a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'arequipa'])}}"><img src="plantilla/assets/images/destinos/img_03.jpg" class="img-responsive" alt="">
                                        <div class="mask">
                                            <h2>AREQUIPA</h2>
                                            <p>Arequipa es una ciudad peruana ubicada en la provincia y el departamento homónimos </p>
                                             <a href="#" class="thm-btn">Leer más</a>
                                        </div>
                                        <div class="dest-name">
                                            <h4>AREQUIPA</h4>
                                        </div>
                                        <div class="dest-icon">
                                            <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                            <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                            <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                            <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 thm-padding">
                                <div class="destination-grid">
                                    <a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'lima'])}}"><img src="plantilla/assets/images/destinos/img_04.jpg" class="img-responsive" alt="">
                                        <div class="mask">
                                            <h2>LIMA</h2>
                                            <p>Lima es la ciudad capital de la República del Perú.​ Se encuentra situada en la costa central del país.</p>
                                            <a href="#" class="thm-btn">Read More</a>
                                        </div>
                                        <div class="dest-name">

                                            <h4>LIMA</h4>
                                        </div>
                                        <div class="dest-icon">
                                            <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                            <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                            <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                            <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 thm-padding">
                                <div class="destination-grid">
                                    <a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'selva'])}}"><img src="plantilla/assets/images/destinos/img_05.jpg" class="img-responsive" alt="">
                                        <div class="mask">
                                            <h2>SELVA</h2>
                                            <p>Se llama selva, jungla o bosque lluvioso tropical a los bosques densos con gran diversidad biológica.</p>
                                            <a href="#" class="thm-btn">Leer más</a>
                                        </div>
                                        <div class="dest-name">
                                            <h4>SELVA</h4>
                                        </div>
                                        <div class="dest-icon">
                                            <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                            <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                            <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                            <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 thm-padding">
                                <div class="destination-grid">
                                    <a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'nazca'])}}"><img src="plantilla/assets/images/destinos/img_06.jpg" class="img-responsive" alt="">
                                        <div class="mask">
                                            <h2>NAZCA</h2>
                                            <p>Nazca​ es una ciudad peruana ubicada en la región centro-sur del Perú, capital de la homónima provincia de Nazca.</p>
                                            <a href="#" class="thm-btn">Leer más</a>
                                        </div>
                                        <div class="dest-name">
                                            <h4>NAZCA</h4>
                                        </div>
                                        <div class="dest-icon">
                                            <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                            <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                            <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                            <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 hidden-sm thm-padding">
                                <div class="destination-grid">
                                    <a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'ica'])}}"><img src="plantilla/assets/images/destinos/img_07.jpg" class="img-responsive" alt="">
                                        <div class="mask">
                                            <h2>ICA</h2>
                                            <p>Capital del Departamento de Ica, situada en el estrecho valle que forma el río Ica.</p>
                                            <a href="#" class="thm-btn">Leer más</a>
                                        </div>
                                        <div class="dest-name">
                                            <h4>ICA</h4>
                                        </div>
                                        <div class="dest-icon">
                                            <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                            <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                            <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                            <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 hidden-sm thm-padding">
                                <div class="destination-grid">
                                    <a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'bolivia'])}}"><img src="plantilla/assets/images/destinos/img_08.jpg" class="img-responsive" alt="">
                                        <div class="mask">
                                            <h2>BOLIVIA</h2>
                                            <p> Es un país soberano situado en la región centro-occidental de América del Sur, </p>
                                            <a href="#" class="thm-btn">Leer más</a>
                                        </div>
                                        <div class="dest-name">
                                            <h4>BOLIVIA</h4>
                                        </div>
                                        <div class="dest-icon">
                                            <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                            <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                            <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                            <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- hotel -->
                <section class="hotel-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="title">
                                    <h2>TOURS RECOMENDADOS</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                            
                               <?=toursRecomendadosUnDiaIz($toursRecomendadosUnDia);?>  

                            </div>
                             <div class="col-sm-12 col-md-6">
                            
                               <?=toursRecomendadosUnDiaDe($toursRecomendadosUnDia);?>  
                               
                            </div>

                    </div>
                </section>
                <!-- Testimonial section -->
                <div class="reference home-ref">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="title">
                                    <h2>References</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="testimonials">
                                <div class="carousel" data-ride="carousel" id="quote-carousel">
                                    <div class="carousel-inner">
                                        <!-- Quote 1 -->  
                                        <div class="item col-sm-10 col-sm-offset-1">
                                            <blockquote>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                                aliquam architecto beatae dolorem, enim error eveniet harum iste molestias
                                                neque nisi placeat possimus quaerat quam repudiandae sint soluta unde vero.
                                                <span class="author">- Andrew Adams, Google Inc</span>
                                            </blockquote>
                                        </div>
                                        <!-- Quote 2 -->  
                                        <div class="item col-sm-10 col-sm-offset-1">
                                            <blockquote>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                                aliquam architecto beatae doloremaliquam architecto beatae dolorem, enim error
                                                eveniet harum iste molestias neque nisi placeat.
                                                <span class="author">- Jhon Smith, Facebook Inc</span>
                                            </blockquote>
                                        </div>
                                        <!-- Quote 3 -->
                                        <div class="item col-sm-10 col-sm-offset-1 active">
                                            <blockquote>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                                aliquam architecto beatae dolorem, enim error eveniet harum iste molestias
                                                neque nisi placeat possimus quaerat quam repudiandae sint.
                                                <span class="author">- Bob Smith, Fitbit</span>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <!-- Bottom Carousel Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#quote-carousel" data-slide-to="0" class=""><img class="img-responsive " src="plantilla/assets/images/avtar-1.jpg" alt=""></li>
                                        <li data-target="#quote-carousel" data-slide-to="1" class=""><img class="img-responsive" src="plantilla/assets/images/avtar-2.jpg" alt=""></li>
                                        <li data-target="#quote-carousel" data-slide-to="2" class="active"><img class="img-responsive" src="plantilla/assets/images/avtar-3.jpg" alt=""></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- package section -->
                <section class="package">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="title">
                                    <h2>Latest Tour Package</h2>
                                    <p>A great Collection of our Tour Packages</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="package-wiget">
                                    <div class="grid">
                                        <figure class="effect-milo">
                                            <img src="plantilla/assets/images/Package-800x500-2.jpg" class="img-responsive" alt="">
                                            <figcaption>
                                                <div class="effect-block">
                                                    <h3>Hilton Molino Stucky</h3>
                                                    <div class="package-ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <button type="button" class="thm-btn">Explore Now</button>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="package-content">
                                        <h5>Hilton Molino Stucky</h5>
                                        <div class="package-price">from
                                            <span class="price">
                                                <span class="amount">$200.00</span>
                                            </span>
                                            /night
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="package-wiget">
                                    <div class="grid">
                                        <figure class="effect-milo">
                                            <img src="plantilla/assets/images/Package-800x500-2.jpg" class="img-responsive" alt="">
                                            <figcaption>
                                                <div class="effect-block">
                                                    <h3>Palolem, India</h3>
                                                    <div class="package-ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <button type="button" class="thm-btn">Explore Now</button>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="package-content">
                                        <h5>Palolem, India</h5>
                                        <div class="package-price">from
                                            <span class="price">
                                                <span class="amount">$150.00</span>
                                            </span>
                                            /night
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="package-wiget">
                                    <div class="grid">
                                        <figure class="effect-milo">
                                            <div class="ribbon"><span>Popular</span></div>
                                            <img src="plantilla/assets/images/Package-800x500-3.jpg" class="img-responsive" alt="">
                                            <figcaption>
                                                <div class="effect-block">
                                                    <h3>IEiffel Tower, Paris</h3>
                                                    <div class="package-ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <button type="button" class="thm-btn">Explore Now</button>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="package-content">
                                        <h5>IEiffel Tower, Paris</h5>
                                        <div class="package-price">from
                                            <span class="price">
                                                <span class="amount">$290.00</span>
                                            </span>
                                            /night
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="package-wiget">
                                    <div class="grid">
                                        <figure class="effect-milo">
                                            <img src="plantilla/assets/images/Package-800x500-4.jpg" class="img-responsive" alt="">
                                            <figcaption>
                                                <div class="effect-block">
                                                    <h3>Canals of Venice, Italy</h3>
                                                    <div class="package-ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <button type="button" class="thm-btn">Explore Now</button>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="package-content">
                                        <h5>Canals of Venice, Italy</h5>
                                        <div class="package-price">from
                                            <span class="price">
                                                <span class="amount">$189.00</span>
                                            </span>
                                            /night
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="package-wiget">
                                    <div class="grid">
                                        <figure class="effect-milo">
                                            <img src="plantilla/assets/images/Package-800x500-5.jpg" class="img-responsive" alt="">
                                            <figcaption>
                                                <div class="effect-block">
                                                    <h3>Itali, Pisa</h3>
                                                    <div class="package-ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <button type="button" class="thm-btn">Explore Now</button>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="package-content">
                                        <h5>Itali, Pisa</h5>
                                        <div class="package-price">from
                                            <span class="price">
                                                <span class="amount">$139.00</span>
                                            </span>
                                            /night
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="package-wiget">
                                    <div class="grid">
                                        <figure class="effect-milo">
                                            <div class="ribbon"><span>New</span></div>
                                            <img src="plantilla/assets/images/Package-800x500-6.jpg" class="img-responsive" alt="">
                                            <figcaption>
                                                <div class="effect-block">
                                                    <h3>St Paul's Cathedral, London</h3>
                                                    <div class="package-ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <button type="button" class="thm-btn">Explore Now</button>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="package-content">
                                        <h5>St Paul's Cathedral, London</h5>
                                        <div class="package-price">from
                                            <span class="price">
                                                <span class="amount">$180.00</span>
                                            </span>
                                            /night
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3 hidden-sm">
                                <div class="package-wiget">
                                    <div class="grid">
                                        <figure class="effect-milo">
                                            <img src="plantilla/assets/images/Package-800x500-6.jpg" class="img-responsive" alt="">
                                            <figcaption>
                                                <div class="effect-block">
                                                    <h3>Castel Sant'Angelo. Rome</h3>
                                                    <div class="package-ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <button type="button" class="thm-btn">Explore Now</button>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="package-content">
                                        <h5>Castel Sant'Angelo. Rome</h5>
                                        <div class="package-price">from
                                            <span class="price">
                                                <span class="amount">$170.00</span>
                                            </span>
                                            /night
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3 hidden-sm">
                                <div class="package-wiget">
                                    <div class="grid">
                                        <figure class="effect-milo">
                                            <img src="plantilla/assets/images/Package-800x500-6.jpg" class="img-responsive" alt="">
                                            <figcaption>
                                                <div class="effect-block">
                                                    <h3>Giza Necropolis, Egypt</h3>
                                                    <div class="package-ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <button type="button" class="thm-btn">Explore Now</button>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="package-content">
                                        <h5>Giza Necropolis, Egypt</h5>
                                        <div class="package-price">from
                                            <span class="price">
                                                <span class="amount">$200.00</span>
                                            </span>
                                            /night
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Counter -->
                <section class="counter-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="count-content">
                                    <div class="count-icon">
                                        <i class="flaticon-earth-globe"></i>
                                    </div>
                                    <div class="count">
                                        <h1 class="count-number">348</h1>
                                        <div class="count-text">Destinations</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="count-content">
                                    <div class="count-icon">
                                        <i class="flaticon-cabin"></i>
                                    </div>
                                    <div class="count">
                                        <h1 class="count-number">89</h1>
                                        <div class="count-text">Hotels</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="count-content">
                                    <div class="count-icon">
                                        <i class="flaticon-photographer-with-cap-and-glasses"></i>
                                    </div>
                                    <div class="count">
                                        <h1 class="count-number">987</h1>
                                        <div class="count-text">Tourists</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="count-content">
                                    <div class="count-icon">
                                        <i class="flaticon-airplane-flight-in-circle-around-earth"></i>
                                    </div>
                                    <div class="count">
                                        <h1 class="count-number">891</h1>
                                        <div class="count-text">Tour</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- blog section -->
                <section class="blog-inner" id="testimonios">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="title">
                                    <h2>TESTIMONIOS </h2>
                                    <p>COMPARTE CON NOSOTROS TU EXPERIENCIAS DE VIAJE</p>
                                </div>
                            </div>
                        </div>
                        <div class="row thm-margin">
                            <div id="blog-slide" class="owl-carousel">
                                <!-- blog post item -->
                                <div class="item">
                                    <div class="blog-content">
                                        <div class="blog-img image-hover">
                                            <a href="#"><img src="plantilla/assets/images/blog-800x250-1.jpg" class="img-responsive" alt=""></a>
                                            <span class="post-date">14 November 2016</span>
                                        </div>
                                        <h4><a href="#">It is a long established fact that</a></h4>
                                      
                                    </div>
                                </div>
                                <!-- blog post item -->
                                <div class="item">
                                    <div class="blog-content">
                                        <div class="blog-img image-hover">
                                            <a href="#"><img src="plantilla/assets/images/blog-800x250-2.jpg" class="img-responsive" alt=""></a>
                                            <span class="post-date">14 November 2016</span>
                                        </div>
                                        <h4><a href="#">It is a long established fact that</a></h4>
                                    </div>
                                </div>
                                <!-- blog post item -->
                                <div class="item">
                                    <div class="blog-content">
                                        <div class="blog-img image-hover">
                                            <a href="#"><img src="plantilla/assets/images/blog-800x250-3.jpg" class="img-responsive" alt=""></a>
                                            <span class="post-date">14 November 2016</span>
                                        </div>
                                        <h4><a href="#">It is a long established fact that</a></h4>
                                    </div>
                                </div>
                                <!-- blog post item -->
                                <div class="item">
                                    <div class="blog-content">
                                        <div class="blog-img image-hover">
                                            <a href="#"><img src="plantilla/assets/images/blog-800x250-4.jpg" class="img-responsive" alt=""></a>
                                            <span class="post-date">14 November 2016</span>
                                        </div>
                                        <h4><a href="#">It is a long established fact that</a></h4>
                                    </div>
                                </div>
                                <!-- blog post item -->
                                <div class="item">
                                    <div class="blog-content">
                                        <div class="blog-img image-hover">
                                            <a href="#"><img src="plantilla/assets/images/blog-800x250-5.jpg" class="img-responsive" alt=""></a>
                                            <span class="post-date">14 November 2016</span>
                                        </div>
                                        <h4><a href="#">It is a long established fact that</a></h4>
                                    </div>
                                </div>

                            </div>

                               
                        
                        </div>

                            <a class="thm-btn" href="#" data-toggle="modal" data-target="#myModal">INGRESE</a>
                    </div>

                   

                </section>
                <!-- Newsletter -->
                <section class="get-offer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5">
                                <span>Subscribe to our Newsletter</span>
                                <h2>& Discover the best offers!</h2>
                            </div>
                            <div class="col-sm-7">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Email" name="q">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="flaticon-paper-plane"></i> Subscribe</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>



          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
 
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" style="text-align: center;">EXPERIENCIA DE VIAJES</h4>
                </div>
                <div class="modal-body">
                
                <div class="container">
                    <div class="row">
                     
                        <div class="col-sm-6">
                            <div class="contact-form">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter your First Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Apellido</label>
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
                                                <label>Teléfono</label>
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <textarea class="form-control" id="message" name="message" placeholder="Comentario" rows="5"></textarea>
                                    </div>
                                     <div class="col-sm-4">
                                            <div class="form-group">
                                                
                                            </div>
                                    </div>
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                               <a href="#" class="thm-btn">Guardar</a>
                                            </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
         
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
                </div>
              </div>
              
            </div>
          </div>

@endsection

@section('script')
  
 <script type="text/javascript">
        $(document).ready(function(){
          $("#filtradosTours").click(function(){
            var precio=$("#precio").val();
            var departamento=$("#departamento").val();
            var fecha=$("#datepicker2").val();
            location.href='es/'+"tours/filtro/"+precio+"/"+departamento;
          });
        });
 </script>
@endsection
