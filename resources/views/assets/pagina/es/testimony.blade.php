@extends('assets.pagina.es.layouts.master')

@section('content')
 
   <!-- page header -->
            <section class="header header-bg-8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner">
                                    <h1>Testimonios</h1>
                      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog -->
            <section class="blog-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-8">
                            <div class="row">

                            @foreach($testimonio as $item)
                                <div class="col-sm-4">
                                    <div class="blog-content">
                                        <div class="blog-img image-hover">
                                            <a href="#"><img src="/plantilla/assets/images/hotel-7.jpg" class="img-responsive" alt=""></a>
                                            <span class="post-date">{{$item->date}}</span>
                                        </div>
                                        <h4><a href="#">{{ $item->name}}</a></h4>
                                        <p>{{ $item->testimonial}}</p>
                                      
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
                        <!-- sideber -->
                       
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

