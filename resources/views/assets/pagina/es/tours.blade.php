@extends('assets.pagina.es.layouts.master')

@section('content')
   <section class="header header-bg-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner">
                                    <h1>Paris Hotels</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-nav">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 hidden-sm thm-padding">
                                <div class="region">
                                    <h4 style="text-transform: uppercase;"> {{$ItempCategoria}} </h4>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </section>
            <section class="hotel-inner"> 

                <div class="container">
                    <div class="row">
                       
                        <div class="col-sm-4 col-md-3">
                            <!-- price pips -->
                            <div class="sidber-box cats-price">
                                <div class="cats-title">
                                    PRINCE
                                </div>
                                <div class="price-Pips">
                                    <input type="text" id="range" value="range" name="range" />
                                </div>
                            </div>
                            <!-- star -->
                       
                            <!-- Facility -->
                            <div class="sidber-box cats-facility">
                                <div class="cats-title">
                                    CATEGORÍA
                                </div>
                                <div class="facility">
                                    @foreach($categoria as $itemp)
                                        <div class="checkbox" onchange="tourOpcionCategoria({!! $itemp->id !!},this);">  
                                            <label style="text-transform: uppercase;"> 
                                                <input type="checkbox" value="chp{!! $itemp->id !!}">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                {{ $itemp->description}}
                                            </label>
                                        </div>
                                   @endforeach
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
                        <div class="col-sm-8 col-md-9">
                            <div class="hotel-list-content" id="idTours">

                                @foreach($tours as $item)
                                    <div class="hotel-item">
                                        <div class="hotel-image">
                                            <a href="{{route('detalleEsTour',['es'=>'es','tour' => $item->slug])}}">
                                                <div class="img"><img src="/{{ $item->img}}"  alt="" class="img-responsive"></div>
                                            </a>
                                        </div>
                                        <div class="hotel-body">
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <h3>{{ $item->name}}</h3>
                                            <p>
                                                {{ $item->description_short}}
                                            </p>
                                            <div class="free-service">
                                                <i class="flaticon-television" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plasma TV with cable chanels"></i>
                                                <i class="flaticon-swimmer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swimming pool"></i>
                                                <i class="flaticon-wifi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free wifi"></i>
                                                <i class="flaticon-weightlifting" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitness center"></i>
                                                <i class="flaticon-lemonade" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restaurant"></i>
                                            </div>
                                                 <a class="thm-btn" href="{{route('product.addToCart',['id' => $item->id])}}">Add to Cart</a>
                                        </div>
                                         <div class="hotel-right"> 
                                            <div class="hotel-person">Desde <span class="color-blue">{{ $item->price}} %</span> </div>
                                            <a class="thm-btn" href="{{route('detalleEsTour',['es'=>'es','tour' => $item->slug])}}">MÁS DETALLE</a>
                                           
                                        </div>
                                    </div>
                                @endforeach 

                            </div>
                            <!-- pagination -->
                            <div class="pagination-inner">
                                <!-- pager -->
                                <ul class="pager">
                                    <li class="previous"><a href="#">Previous</a></li>
                                    <li class="next"><a href="#">Next</a></li>
                                </ul>
                                <!-- pagination -->
                                <ul class="pagination">
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">15</a></li>
                                </ul>
                            </div>
                        </div>
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
        //range slide
        $("#range").ionRangeSlider({
            type: "double",
            grid: true,
            min: 0,
            max: 5000,
            from: 0,
            to: 5000,
            step: 100,
            prefix: "$",
            onChange: function (data) {
                        
                $("#idTours" ).html('');

                var htmlTours='';
                $.ajax({
                          url:'{{ route('toursOpcionPrecio') }}',
                          type: 'POST',

                          data:{
                            "_token": "{{ csrf_token() }}",
                            "min":data.from,
                            "max":data.to,
                          },
                          dataType: 'JSON',
                          success: function(respuesta) 
                          {
                                $("#idTours" ).html('');

                            $.each(respuesta.data,function(index,element)
                             { 
                                  htmlTours=htmlTours +"<div class='hotel-item'>"+
                                                    "<div class='hotel-image'>"+
                                                        "<a href='/es/tours/detalle/"+element.slug+"'>"+
                                                            "<div class='img'><img src='/"+element.img+"'  alt='' class='img-responsive'></div>"+
                                                        "</a>"+
                                                    "</div>"+
                                                    "<div class='hotel-body'>"+
                                                        "<div class='ratting'>"+
                                                            "<i class='fa fa-star'></i>"+
                                                            "<i class='fa fa-star'></i>"+
                                                            "<i class='fa fa-star'></i>"+
                                                            "<i class='fa fa-star-half-o'></i>"+
                                                            "<i class='fa fa-star-o'></i>"+
                                                        "</div>"+
                                                        "<h3>"+element.name+"</h3>"+
                                                        "<p>"+element.description_short+"</p>"+
                                                        "<div class='free-service'>"+
                                                            "<i class='flaticon-television' data-toggle='tooltip' data-placement='top' title='' data-original-title='Plasma TV with cable chanels'></i>"+
                                                            "<i class='flaticon-swimmer' data-toggle='tooltip' data-placement='top' title='' data-original-title='Swimming pool'></i>"+
                                                            "<i class='flaticon-wifi' data-toggle='tooltip' data-placement='top' title='' data-original-title='Free wifi'></i>"+
                                                            "<i class='flaticon-weightlifting' data-toggle='tooltip' data-placement='top' title='' data-original-title='Fitness center'></i>"+
                                                            "<i class='flaticon-lemonade' data-toggle='tooltip' data-placement='top' title='' data-original-title='Restaurant'></i>"+
                                                        "</div>"+
                                                    "</div>"+
                                                    "<div class='hotel-right'>"+
                                                        "<div class='hotel-person'>Desde <span class='color-blue'>"+element.price+" %</span> </div>"+
                                                        "<a class='thm-btn' href='/es/tours/detalle/"+element.slug+"'>MÁS DETALLE</a>"+
                                                   "</div>"+
                                                "</div>";

                                                
                              });

                                $("#idTours ").append(htmlTours);
                           
                            },
                          error: function(e){
                            if (e.statusText==='timeout'){
                              console.log('Tiempo de espera agotado');
                            }
                            else{
                              console.log(e.statusText);
                            }
                           },
                           timeout: 20000
                    });
                 return false;

            }
            
        });

    var catagoria = [];
   
     function tourOpcionCategoria(id,element)
    {
        element.checked = !element.checked;
        if(element.checked==true)
        {
            catagoria.push(id);
        }else {
           catagoria.splice(catagoria.indexOf(id),1);
        }
        var cantidaPeticion=catagoria.length;
        $("#tours" ).html('');
        var htmlTours='';
        $.ajax({
                 url:'{{ route('toursOpcion') }}',
                 type: 'POST',
                 data:{
                        "_token": "{{ csrf_token() }}",
                         "abbr":"es", "catagoria":catagoria,"cantidaPeticion":cantidaPeticion
                    },
                 dataType: 'JSON',
                 beforeSend: function() {
                 },
                 error: function() {
                 },
                  success: function(respuesta) 
                  {
                    $("#idTours" ).html('');

                        $.each(respuesta.data,function(index,element)
                         { 
                              htmlTours=htmlTours +"<div class='hotel-item'>"+
                                                "<div class='hotel-image'>"+
                                                    "<a href='/es/tours/detalle/"+element.slug+"'>"+
                                                        "<div class='img'><img src='/"+element.img+"'  alt='' class='img-responsive'></div>"+
                                                    "</a>"+
                                                "</div>"+
                                                "<div class='hotel-body'>"+
                                                    "<div class='ratting'>"+
                                                        "<i class='fa fa-star'></i>"+
                                                        "<i class='fa fa-star'></i>"+
                                                        "<i class='fa fa-star'></i>"+
                                                        "<i class='fa fa-star-half-o'></i>"+
                                                        "<i class='fa fa-star-o'></i>"+
                                                    "</div>"+
                                                    "<h3>"+element.name+"</h3>"+
                                                    "<p>"+element.description_short+"</p>"+
                                                    "<div class='free-service'>"+
                                                        "<i class='flaticon-television' data-toggle='tooltip' data-placement='top' title='' data-original-title='Plasma TV with cable chanels'></i>"+
                                                        "<i class='flaticon-swimmer' data-toggle='tooltip' data-placement='top' title='' data-original-title='Swimming pool'></i>"+
                                                        "<i class='flaticon-wifi' data-toggle='tooltip' data-placement='top' title='' data-original-title='Free wifi'></i>"+
                                                        "<i class='flaticon-weightlifting' data-toggle='tooltip' data-placement='top' title='' data-original-title='Fitness center'></i>"+
                                                        "<i class='flaticon-lemonade' data-toggle='tooltip' data-placement='top' title='' data-original-title='Restaurant'></i>"+
                                                    "</div>"+
                                                "</div>"+
                                                "<div class='hotel-right'>"+
                                                    "<div class='hotel-person'>Desde <span class='color-blue'>"+element.price+" %</span> </div>"+
                                                    "<a class='thm-btn' href='/es/tours/detalle/"+element.slug+"'>MÁS DETALLE</a>"+
                                               "</div>"+
                                            "</div>";
                       
                        });
                        
                       $("#idTours ").append(htmlTours);  

                 }
        
         });
    }


 </script>
@endsection

