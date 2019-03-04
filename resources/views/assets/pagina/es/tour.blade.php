@extends('assets.pagina.es.layouts.master')

@section('content')
 <style>
 
 </style>
   <section class="header header-bg-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner">
                                    <h1>{{$tour->name}}</h1>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="hotels-details-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div id="sync1" class="owl-carousel">
                                @foreach($multimediaTour as $item)
                                    <div class="item"><img src="/{{$item->path}}" class="img-responsive" alt=""></div>
                                  
                                @endforeach       
                            </div>
                            <div id="sync2" class="owl-carousel">
                                @foreach($multimediaTour as $item)
                                    <div class="item"><img src="/{{$item->path}}" class="img-responsive" alt=""></div>
                                @endforeach 
                            </div>
                            <h3>Descripción </h3>
                            <p>
                                {{$tour->description_short}}
                            </p>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <ul class="list-ok">
                                        <li>Coffee machine</li>
                                        <li>Wifi</li>
                                        <li> Microwave</li>
                                        <li>Oven</li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <ul class="list-ok">
                                        <li>Fridge</li>
                                        <li>Hairdryer</li>
                                        <li>Towels</li>
                                        <li>Toiletries</li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <ul class="list-ok">
                                        <li>DVD player</li>
                                        <li>Air-conditioning</li>
                                        <li>Tv</li>
                                        <li>Freezer</li>
                                    </ul>
                                </div>
                            </div>

                              <div class="row">
                                <div class="col-md-12 col-sm-4">
                                    <ul class="list-ok">
                                        <div class="separator"> </div><br>
                            
                                    </ul>
                                </div>
                                
                            </div>
                            <div class="separator"> </div>
                            
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#tab1default" style="background-color: rgb(248, 248, 248);" data-toggle="tab"><i class="flaticon-paper-plane"></i>ITINERARIO</a></li>
                                                <li><a href="#tab2default" data-toggle="tab"> <i class="flaticon-cabin"></i>ORGANIZACIÓN</a></li>
                                            </ul>
                                        </div>
                                        <div class="panel-body" style="background-color: rgb(248, 248, 248);"> 
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="tab1default">
                                                    <div class="row">
                                                       
                                                            
                                                            <div class="portfolio-nav">
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        
                                                                        <div class="col-sm-12 col-md-12">
                                                                            <ul class="portfolio-sorting list-inline text-center">

                                                                                <ul class="nav nav-pills nav-stacked col-md-2" style="border: 1px solid #f8f8f8;background: #f8f8f8;margin-top: -14px;margin-left: -10px;">
                                                                                    @foreach($itinerarioTour as $item)
                                                                                         @if($item->day=='1')      
                                                                                              <li><a class="active"  href="#tab_{{$item->day}}" data-toggle="tab">DÍA {{$item->day}} </a></li>
                                                                                         @else
                                                                                                <li><a  href="#tab_{{$item->day}}" data-toggle="tab">DÍA {{$item->day}} </a></li>
                                                                                         @endif
                                                                                              {{-- <li><a href="#tab_b" data-toggle="tab">Pill B</a></li>
                                                                                              <li><a href="#tab_c" data-toggle="tab">Pill C</a></li>
                                                                                              <li><a href="#tab_d" data-toggle="tab">Pill D</a></li> --}}
                                                                                     @endforeach
                                                                                </ul>
                                                                                <div class="tab-content col-md-10">
                                                        
                                                                                       @foreach($itinerarioTour as $item)
                                                                                            @if($item->day=='1')   
                                                                                                 <div class="tab-pane active" id="tab_{{$item->day}}">
                                                                                                     <h4>
                                                                                                        <div class="hotel-review">
                                                                                                            <img src="/{{$item->photo}}" class="img-responsive" alt="">
                                                                                                            <div class="hotel-review-ratting">
                                                                                                                <i class="fa fa-star"></i>
                                                                                                                <i class="fa fa-star"></i>
                                                                                                                <i class="fa fa-star"></i>
                                                                                                                <i class="fa fa-star-half-o"></i>
                                                                                                                <i class="fa fa-star-o"></i>
                                                                                                            </div>
                                                                                                            <h4></h4>
                                                                                                            <h5><div class="themeUl" style=" text-align:justify;">{!!$item->description!!}</div></h5>
                                                                                                        </div>
                                                                                                     </h4>
                                                                                                    <p>
                                                                                                        
                                                                                                    </p>
                                                                                                </div>
                                                                                            @else
                                                                                                 <div class="tab-pane" id="tab_{{$item->day}}">
                                                                                                        <div class="hotel-review">
                                                                                                            <img src="/{{$item->photo}}" class="img-responsive" alt="">
                                                                                                            <div class="hotel-review-ratting">
                                                                                                                <i class="fa fa-star"></i>
                                                                                                                <i class="fa fa-star"></i>
                                                                                                                <i class="fa fa-star"></i>
                                                                                                                <i class="fa fa-star-half-o"></i>
                                                                                                                <i class="fa fa-star-o"></i>
                                                                                                            </div>
                                                                                                            <h4></h4>
                                                                                                            <h5><div class="themeUl" style=" text-align:justify;">{!!$item->description!!}</div></h5>
                                                                                                        </div>
                                                                                                 </div>

                                                                                            @endif
                                                                                               

                                                                                         @endforeach  
                                                                 
                                                                                </div>
                                                                              
                                                                                {{-- @foreach($itinerarioTour as $item)
                                                                                        @if($item->day=='1')        
                                                                                          <li><a href="#" class="active" data-group="people.{{$item->day}}" >DÍA {{$item->day}}</a></li>
                                                                                        @else
                                                                                          <li><a href="#" data-group="people.{{$item->day}}" >DÍA {{$item->day}}</a></li>
                                                                                        @endif
                                                                                @endforeach --}}
                                                                            </ul> <!--end portfolio sorting -->
                                                                        </div>

                                                                     {{--    <div class="col-sm-8 col-md-9">
                                                                                                <div class="row thm-margin"><br>
                                                                                                    <div class="portfolio-items list-unstyled" id="grid">



                                                                                                           @foreach($itinerarioTour as $item)

                                                                                                                <div class="col-sm-6 col-md-4 thm-padding" data-groups='["people.{{$item->day}}"]'>
                                                                                                                    <div class="destination-grid">
                                                                                                                        <a href="#"><img src="/plantilla/assets/images/tour-370x370-1.jpg" class="img-responsive" alt=""></a>
                                                                                                                        <div class="mask">
                                                                                                                            <h2>Sydney</h2>
                                                                                                                            <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                                                                                                            <a href="#" class="thm-btn">Read More</a>
                                                                                                                        </div>
                                                                                                                        <div class="dest-name">
                                                                                                                            <h5>Sydney Opera House</h5>
                                                                                                                            <h4>Sydney</h4>
                                                                                                                        </div>
                                                                                                                        <div class="dest-icon">
                                                                                                                            <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                                                                                                            <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                                                                                                            <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                                                                                                            <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                             @endforeach
                                                                                                 
                                                                                                     
                                                                                                      
                                                                                                      
                                                                                            
                                                                                                        <div class="col-md-4 col-sm-6 col-xs-12 shuffle_sizer"></div>
                                                                                                    </div> 
                                                                                                </div><br>
                                                                                            </div> --}}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                                
                                                        
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab2default">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-9 col-md-10">
                                                            <div class="row panel-margin">
                                                                {!! $tour->organization !!}
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                      
                            
                        </div>
                       

                <div class="col-sm-4">
                            <div class="sidber-box booking_price">
                                <div class="price">
                                <small>Desde </small> <strong>$ {{$tour->price}}</strong>
                                </div>

                                <!-- <ul class="list-ok">
                                    <li>Lorem ipsum dolor sit amet,</li>
                                    <li>There are many variations</li>
                                    <li>In pellentesque arcu at diam</li>
                                    <li>Quisque nec ex quis </li>
                                </ul> -->
                                <!-- <div class="offer">*Free for childs under 8 years old</div> -->
                            </div>
                            <!-- booking -->
                            <div class="sidber-box tags-widget">
                                <div class="cats-title">Booking</div>
                                <div class="booking-form tour_booking">
                                    <form>
                                        <div class="row">
                                            
                                            <div class="col-sm-6">
                                                <label>Adults</label>
                                                <div class="input-group number-spinner">
                                                    <span class="input-group-btn">
                                                        <a class="btn btn-pm" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></a>
                                                    </span>
                                                    <input type="text" class="form-control text-center" value="1">
                                                    <span class="input-group-btn">
                                                        <a class="btn btn-pm" data-dir="up"><span class="glyphicon glyphicon-plus"></span></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class=" col-sm-6">
                                                <label>Children</label>
                                                <div class="input-group number-spinner">
                                                    <span class="input-group-btn">
                                                        <a class="btn btn-pm" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></a>
                                                    </span>
                                                    <input type="text" class="form-control text-center" value="1">
                                                    <span class="input-group-btn">
                                                        <a class="btn btn-pm" data-dir="up"><span class="glyphicon glyphicon-plus"></span></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <a href="#" class="thm-btn btn-block">Book now</a>
                                    </form>
                                </div>
                            </div>
                            <!-- help center -->
                            <div class="sidber-box help-widget">
                                <i class="flaticon-photographer-with-cap-and-glasses"></i>
                                <h4>Need <span>Help?</span></h4>
                                <a href="#" class="phone">+001620214460</a>
                                <small>Monday to Friday 9.00am - 7.30pm</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="separator"></div>
                            <h3>Related Tours</h3>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="grid-item-inner">
                                <div class="grid-img-thumb">
                                    <!-- ribbon -->
                                    <div class="ribbon"><span>Popular</span></div>
                                    <a href="#"><img src="/plantilla/assets/images/tour-370x370-1.jpg" alt="1" class="img-responsive" /></a>
                                </div>
                                <div class="grid-content">
                                    <div class="grid-price text-right">
                                        Only <span><sub>$</sub>785</span>
                                    </div>
                                    <div class="grid-text">
                                        <div class="place-name">City sightseeing</div>
                                        <div class="travel-times">
                                            <h4 class="pull-left">3 days 2 nights </h4>
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
                        </div> <!-- ../grid item -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="grid-item-inner">
                                <div class="grid-img-thumb">
                                    <!-- ribbon -->
                                    <div class="ribbon"><span>Popular</span></div>
                                    <a href="#"><img src="/plantilla/assets/images/tour-370x370-1.jpg" alt="1" class="img-responsive" /></a>
                                </div>
                                <div class="grid-content">
                                    <div class="grid-price text-right">
                                        Only <span><sub>$</sub>785</span>
                                    </div>
                                    <div class="grid-text">
                                        <div class="place-name">Historic Buildings</div>
                                        <div class="travel-times">
                                            <h4 class="pull-left">3 days 2 nights </h4>
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
                        </div> <!-- ../grid item -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="grid-item-inner">
                                <div class="grid-img-thumb">
                                    <!-- ribbon -->
                                    <div class="ribbon"><span>Popular</span></div>
                                    <a href="#"><img src="/plantilla/assets/images/tour-370x370-1.jpg" alt="1" class="img-responsive" /></a>
                                </div>
                                <div class="grid-content">
                                    <div class="grid-price text-right">
                                        Only <span><sub>$</sub>785</span>
                                    </div>
                                    <div class="grid-text">
                                        <div class="place-name">Museums</div>
                                        <div class="travel-times">
                                            <h4 class="pull-left">3 days 2 nights </h4>
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
                        </div> <!-- ../grid item -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="grid-item-inner">
                                <div class="grid-img-thumb">
                                    <!-- ribbon -->
                                    <div class="ribbon"><span>Popular</span></div>
                                    <a href="#"><img src="/plantilla/assets/images/tour-370x370-1.jpg" alt="1" class="img-responsive" /></a>
                                </div>
                                <div class="grid-content">
                                    <div class="grid-price text-right">
                                        Only <span><sub>$</sub>785</span>
                                    </div>
                                    <div class="grid-text">
                                        <div class="place-name">Mariott Hotel</div>
                                        <div class="travel-times">
                                            <h4 class="pull-left">3 days 2 nights </h4>
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
                        </div> <!-- ../grid item -->
                    </div>
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



@endsection

@section('script')
  
 <script type="text/javascript">
//AGREGAR  EL ESTILO DE UNA CLASE
    $( ".themeUl ul" ).addClass( "list-ok" );
//FIN    
 </script>
@endsection